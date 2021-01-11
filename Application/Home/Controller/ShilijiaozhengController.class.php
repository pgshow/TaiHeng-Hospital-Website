<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class ShilijiaozhengController extends Controller {
	
	//初始化
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		//初始化主栏目信息
		$Office_info = array
		(
			"id"             =>      "51",                      //科室ID
		    "title"          =>      "视力矫正",               //栏目名称
			"name"           =>      "shilijiaozheng",        //栏目访问目录
			"nav_no"         =>      "2",                     //导航顺序
		);
		
		$this->assign('Office_info', $Office_info);
		//控制科室的导航条
		$this->assign('office_menu', get_menu2());
	}
	
	public function _empty() {
		
		header("HTTP/1.0 404 Not Found");
		$this->display('empty:index');
		exit;
	}
	
	//输出文章列表
    public function index($category_name = false){
		//分类信息
		$Office_info = $this -> Office_info;
		
		//如果用户访问科室
		if(!$category_name) {
			/* 读取栏目信息 */
			$Category_info = M('category') -> where('name="' .$Office_info['name']. '"') -> select();
			
			
			
			/* 读取该科室下所有子栏目文章 */
			$Model = new Model();
			$newest_sql_list = "select id, title, description, cover_id
			from tth_document
			where category_id in (select id from tth_category where pid in (select id from tth_category where pid = {$Office_info['id']}))
			and status = 1 order by id desc limit 4";
			
			$newest_list = $Model -> query($newest_sql_list);
			
			$this->assign('newest_list', $newest_list);
			
			
			
			/* 读取院内新闻文章 */
			$db = M( "document" );
			$a = "tth_document"; //表1
			$b = "tth_document_news"; //表2
			
			//联合查询
			$news_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 70 and status = 1" ) ->
			order('id desc')->
			limit(4) ->
			select();
			
			$this->assign('news_list', $news_list);
						
			
			
			/* 读取本科室知名专家 */
			$db = M( "document" );
			$a = "tth_document"; //表1
			$b = "tth_document_specialist"; //表2
			
			$specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.id = {$Category_info[0]['o_specialist_id']}" ) ->
			select();
			
			$this->assign('specialist', $specialist[0]);
			
			
			
			/* 读取本科室设备 */
			$db = M( "document" );
			$a = "tth_document"; //表1
			$b = "tth_document_armarium"; //表2
			
			$armarium = $db -> field( "$a.id, $a.title, $b.office_img, $b.url" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.id = {$Category_info[0]['o_armarium_id']}" ) ->
			select();
			
			$this->assign('armarium', $armarium[0]);
			
			
			
			/* 读取案例分享 */
			$db = M( "document" );
			$a = "tth_document"; //表1
			$b = "tth_document_news"; //表2
			
			$case_list = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
			join( "$b on $a.id = $b.id" ) ->
			where( "$a.category_id = 75 and (position = 2 or position = 3 or position = 7 or position = 6) and status = 1" ) ->
			order('id desc')->
			limit(4) ->
			select();
			
			$this->assign('case_list', $case_list);
			
			
			
			/* 读取栏目及文章列表 */
			$categorys_sql = "select id, name, title, icon from tth_category where pid = {$Office_info['id']} order by sort asc limit 4";
			$categorys = $Model -> query($categorys_sql);
			
			if($categorys){
			    foreach ($categorys as $key => $value){
					
					//读取该疾病下所有文章
					$articles_sql = "select id, title, create_time
					from tth_document
					where category_id in (select id from tth_category where pid = {$value['id']})
					and status = 1 order by id desc limit 4";
					
					$articles_list = $Model -> query($articles_sql);
					
					//把文章以数组形式放入各自的栏目
					$categorys[$key]['articles'] = $articles_list;

				}
			}
			
			$this->assign('categorys', $categorys);
			$this->assign('Category_info', $Category_info[0]);
			
			
			$this->display();
						
		} else {
			
			//R方法调用疾病页控制器
			R('Illness/index', array($Office_info));
		}
		
	}
	
}