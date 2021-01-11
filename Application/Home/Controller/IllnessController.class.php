<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IllnessController extends Controller {
	
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		//控制科室的导航条
		$this->assign('office_menu', get_menu2());
    }
	
	public function _empty() {
		
		header("HTTP/1.0 404 Not Found");
		$this->display('empty:index');
		exit;
	}
	
    public function index($Office_info = NULL){
		
		//访问疾病百科或文章
		if($Office_info == NULL) {
			//读取疾病百科的信息0
			$Category_info = M('category') -> field('title, meta_title, keywords, description, icon') -> where("id=39") -> select();
			$this->assign('Category_info', $Category_info[0]);
			
			
			
			//读取疾病百科的疾病大类1
			$Illness_category = M('category') -> field('id, name') -> where("pid = 39") -> order('sort asc') -> select();
			
			//循环读取各疾病2
			if($Illness_category) {
			    foreach ($Illness_category as $key => $value){
					
					//读取该疾病大类1下的各疾病2
					$Illness_sub = M('category') -> field('id, name, title, icon') -> where("pid = {$value['id']}") -> order('sort asc') -> select();
					
					//循环读取各症状的文章4
					if($Illness_sub) {
						foreach ($Illness_sub as $k => $v){
							
							//获取症状3下的文章4
							$sub_list_sql = "select id, title, create_time
							from tth_document
							where category_id in (select id from tth_category where pid = {$v['id']})
							and status = 1 order by id desc limit 4";
							
							$Model = new Model();
							$sub_list = $Model -> query($sub_list_sql);
							
							//把文章以数组形式放入各属的疾病2
							$Illness_sub[$k]['list'] = $sub_list;
						}
					}
					
					//把文章以数组形式放入各自的栏目
					$Illness_category[$key]['sub'] = $Illness_sub;

				}
			}
			
			
			/* 读取近视手术的子栏目及文章列表 */
			$c_list = M('category') -> field('id, name, title, icon') -> where("pid=50") -> order( "sort asc" ) -> select();
			

			
			$this->assign('Illness_category', $Illness_category);
			
			$this->display('wiki');
			exit;
		}
		
		
		
		//获取当前访问栏目名称
		$category_name = I('get.category_name');
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where("name='{$category_name}'") -> select();
		
		//文档不存在
		if(!$Category_info){
		    $this->_empty();
		}
		
		
		
		if($Category_info[0]['model'] == 13) {
			$this->lists($Office_info);
			exit;
		}
		
		
		
		/* 判断该疾病有几个子栏目
		只有一个子栏目则直接跳转过去 */
		$subs = M('category') -> field( "name" ) -> where("pid='{$Category_info[0]['id']}'") -> select();
		
		if(count($subs) == 1) {
			header('HTTP/1.1 301 Moved Permanently'); //发出301头部
			header('Location:/'.$Office_info['name'].'/'.$subs[0]['name'].'/'); //跳转到带www的网址
			exit;	
		}	
		
		
		
		/* 读取本疾病简介 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_topic"; //表2
		
		$topic_info = $db -> field( "$a.id, $a.title, $b.banner, $b.content1" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = {$Category_info[0]['id']} and status = 1" ) ->
		order('id desc')->
		limit(1) ->
		select();
		
		$this->assign('topic_info', $topic_info[0]);
		
		
		
		
		//读取疾病下所有子栏目文章
		$Model = new Model();
		$article_sql_list = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = {$Category_info[0]['id']})
		and status = 1 order by id desc limit 6";
			
		$article_list = $Model -> query($article_sql_list);
			
		$this->assign('article_list', $article_list);	
		
		
		
		/* 读取栏目及文章列表 */
		$categorys_sql = "select id, name, title, icon from tth_category where pid = {$Category_info[0]['id']} order by sort asc limit 4";
		$categorys = $Model -> query($categorys_sql);
		
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_illness"; //表2
		
		if($categorys){
		    foreach ($categorys as $key => $value){
			
				//读取该症状下所有文章
				$articles_list = $db -> field( "$a.id, $a.title, $a.create_time, $b.content" ) ->
				join( "$b on $a.id = $b.id" ) ->
				where( "$a.category_id = {$value['id']} and status = 1" ) ->
				order('id desc')->
				limit(6) ->
				select();
				
				
				//把文章以数组形式放入各自的栏目
				$categorys[$key]['articles'] = $articles_list;

		    }
		}
		
		$this->assign('categorys', $categorys);
		
		
		
		
		/* 读取本栏目疾病专家 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_specialist"; //表2
		
		$specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.id = {$Category_info[0]['i_specialist_id']}" ) ->
		select();
		
		$this->assign('specialist', $specialist[0]);
		
		
		
		
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集
		
		
		
		/* 获取科室信息 */
		$o_info = M('category') -> field( "illness_banner, illness_banner_url" ) -> where("id='{$Office_info['id']}'") -> find();
		$Office_info = array_merge($Office_info, $o_info);  //合并数组
		$this->assign('Office_info', $Office_info);
		
		
		
		
		$this->assign('Category_info', $Category_info[0]);
		
		
		$this->display('Illness/index');
	}
	
	
	public function lists($Office_info){
		//获取当前访问栏目名称
		$category_name = I('get.category_name');
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where("name='{$category_name}'") -> select();
		
		/* 读取父栏目信息 */
		$Parent_info = M('category') -> where("id={$Category_info[0]['pid']}") -> select();
		
		
		
		
		/* 读取本栏目推荐文章 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_illness"; //表2
		
		//联合查询
		$recommends = $db -> field( "$a.id, $a.title, $a.create_time" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.category_id = {$Category_info[0]['id']}
		and (position = 1 or position = 3 or position = 5 or position = 7)
		and status = 1" ) ->
		order('id desc')->
		limit(8) ->
		select();
		
		$this->assign('recommends', $recommends);
		
		
		
		
		/* 读取文章列表 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_illness"; //表2
		$page_size = $Category_info[0]['list_row']; //每页显示记录数
		$count = count( $db -> field('id') -> where( "category_id = {$Category_info[0]['id']} and status = 1" ) -> select() ); //记录总数
		$Page = new \Think\Page($count, $page_size);
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span class="page_row">共 %TOTAL_ROW% 篇</span>');
		$show = $Page -> show(); // 分页显示输出
		
		//联合查询
		$list = $db -> field( "$a.id, $a.title, $a.create_time, $b.content, $b.tag" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.category_id = {$Category_info[0]['id']} and status = 1" ) ->
		order('level DESC, id DESC')->
        limit($Page->firstRow.",".$Page->listRows) ->
        select();
		
		/* 模板赋值并渲染模板 */
		$this -> assign('list', $list);// 赋值数据集
		$this -> assign('page', $show);// 赋值分页输出
		
		
		
		
		/* 读取本症状疾病专家 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_specialist"; //表2
		
		$specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
		join( "$b on $a.id = $b.id" ) ->
		where( "$a.id = {$Category_info[0]['w_specialist_id']}" ) ->
		select();
		
		$this->assign('specialist', $specialist[0]);
		
		
		
		
		
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集

		
		
		
		$this->assign('Category_info', $Category_info[0]);
		$this->assign('Parent_info', $Parent_info[0]);
		
		$this->display('Illness/lists');
	}
	
	
	//输出文章内容
    public function article($article_id){
		/* 读取文章信息 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_illness"; //表2
		
		//联合查询
		$Article_info = $db -> field( "$a.id, $a.title, $a.category_id, $a.description, $a.create_time, $b.content, $b.keywords" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.id = {$article_id}" ) ->
        select();
		
		//文档不存在
		if(!$Article_info){
		    $this->_empty();
		}
		
		//获取上一篇，下一篇文章ID
		$front = $db -> field( "$a.id" ) -> join( "$b on $a.id = $b.id" ) -> where( "$a.id < $article_id and category_id = {$Article_info[0]['category_id']}" ) -> order( "$a.id desc" ) -> limit('1') -> find();
		$after = $db -> field( "$a.id" ) -> join( "$b on $a.id = $b.id" ) -> where( "$a.id > $article_id and category_id = {$Article_info[0]['category_id']}" ) -> order( "$a.id asc" ) -> limit('1') -> find();
		$this -> assign('front', $front['id']); //赋值数据集
		$this -> assign('after', $after['id']); //赋值数据集
		
		/* 读取栏目信息 */
		$Category_info = M('category') ->field('name, title, menu_no') -> where('id="' .$Article_info[0]['category_id']. '"') -> select();
		
		/* 获取科室信息 */
		$Model = new Model();
		
		$Office_info_sql = "
		select * from tth_category where id =
		(select pid from tth_category where id =
		(select pid from tth_category where id = {$Article_info[0]['category_id']}))";
			
		$Office_info = $Model -> query($Office_info_sql);
		
		
		
		
		
		/* 获取疾病最新文章 */
		$bottom_latest = $db -> field( "$a.id, $a.title, $a.create_time" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "status = 1" ) ->
		order('id desc')->
        limit(12) ->
        select();
		
		$this -> assign('bottom_latest', $bottom_latest);
		$this -> assign('bottom_latest_name', 'illness');
		
		
		


        //第二导航条高亮的位置
		$Office_info[0]['nav_no'] = $Office_info[0]['sort'];

		/* 获取全局知名专家 */
		$this -> assign('famous_specialist', get_specialist());// 赋值数据集
		/* 获取全局专家答疑 */
		$this -> assign('experts_answer', get_answers());// 赋值数据集
			
		$this->assign('Office_info', $Office_info[0]);// 赋值数据集
		
		$this -> assign('Article_info', $Article_info[0]);// 赋值数据集
		$this -> assign('Category_info', $Category_info[0]);// 赋值数据集
				
		$this -> display('Illness/article');
	}
	
	//输出疾病简介内容
    public function intro($intro_id){
		
		/* 读取简介内容 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_topic"; //表2
		
		//联合查询
		$Topic_info = $db ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.id = {$intro_id}" ) ->
        select();
		
		$this -> assign('Topic_info', $Topic_info[0]); // 赋值数据集
		
		//文档不存在
		if(!$Topic_info){
		    $this->_empty();
		}
		
		//如果填写了外链就跳转到外链
		if(!empty($Topic_info[0]['url'])) {
			header('HTTP/1.1 301 Moved Permanently'); 
			header('Location:'.$Topic_info[0]['url']); 
			exit;	
		}
		
		
		/* 获取科室信息 */
		$Model = new Model();
		
		$Office_info_sql = "
		select name, title from tth_category where id =
		(select pid from tth_category where id = {$Topic_info[0]['category_id']})";
			
		$Office_info = $Model -> query($Office_info_sql);
		
		$this -> assign('Office_info', $Office_info[0]); // 赋值数据集
		
		
		
		/* 获取疾病信息 */
		$Illness_info_sql = "
		select id, name, title, eng_title1 from tth_category where id = {$Topic_info[0]['category_id']}";
			
		$Illness_info = $Model -> query($Illness_info_sql);
		
		$this -> assign('Illness_info', $Illness_info[0]); // 赋值数据集
				

		
		/* 获取专家的信息 */
		$a = "tth_document"; //表1
		$b = "tth_document_specialist"; //表2
		
		//生成查询条件
		$map[$a.'.id'] = array('in', $Topic_info[0]['specialist_id1'].','.$Topic_info[0]['specialist_id2'].','.$Topic_info[0]['specialist_id3']);
		
		//联合查询
		$specialists = $db -> field( "$a.id, $a.title, $b.blank_photo, $b.honor" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where($map) ->
        select();
		
		$this -> assign('specialists', $specialists); // 赋值数据集
		
		
		/* 获取该疾病最新文章 */
		$Model = new Model();
		$bottom_latest_sql = "select id, title, create_time
		from tth_document
		where category_id in (select id from tth_category where pid = {$Topic_info[0]['category_id']})
		and status = 1 order by id desc limit 8";
			
		$bottom_latest = $Model -> query($bottom_latest_sql);

		$this -> assign('bottom_latest', $bottom_latest);
		
		
		
		
		$this -> display();
	}
}