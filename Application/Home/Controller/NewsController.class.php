<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class NewsController extends Controller {
	
	//初始化
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		
		//如果是获取文章就停止读取栏目信息
		if('' != I('get.article_id')) {
		    //控制科室的导航条
		    $this->assign('office_menu', get_menu2());
			return;
		}
		
		//获取子栏目名称
		$category_name = I('get.category_name');
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where('name="' .$category_name. '"') -> select();
		
		//文档不存在
		if(!$Category_info){
		    $this->_empty();
		}
		
		//注意数组序号是从0开始的
		$this -> Category_info = $Category_info[0];
		$this->assign('Category_info', $Category_info[0]);
		
		//控制科室的导航条
		$this->assign('office_menu', get_menu2());
    }
	
	public function _empty() {
		
		header("HTTP/1.0 404 Not Found");
		$this->display('empty:index');
		exit;
	}
	
	//输出文章列表
    public function index($category_name){
		//分类信息
		$Category_ID = $this -> Category_info['id'];
		
		/* 读取文章列表 */
/*		$Model = new Model();
		
		//联接两个表的数据
		$sql_list = "select  tth_document.id, tth_document.title, tth_document.create_time, tth_document_news.content
		from  tth_document inner join tth_document_news
		on tth_document.id = tth_document_news.id
		where tth_document.category_id = {$Category_ID}";
		
		$list = $Model -> query($sql_list);*/
		
		/* 读取文章列表 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
		$page_size = $this -> Category_info['list_row']; //每页显示记录数
		$count = count( $db -> field('id') -> where( "category_id = {$Category_ID} and status = 1" ) -> select() ); //记录总数
		$Page = new \Think\Page($count, $page_size);
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span class="page_row">共 %TOTAL_ROW% 篇</span>');
		$show = $Page -> show(); // 分页显示输出
		
		//联合查询
		$list = $db -> field( "$a.id, $a.title, $a.create_time, $b.content, $b.tag" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "$a.category_id = {$Category_ID} and status = 1" ) ->
		order('level DESC, id DESC')->
        limit($Page->firstRow.",".$Page->listRows) ->
        select();
		
		
		
		/* 获取全局知名专家 */
		$this -> assign('famous_specialist', get_specialist());// 赋值数据集
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集
		

		/* 模板赋值并渲染模板 */
		$this -> assign('list', $list);// 赋值数据集
		$this -> assign('page', $show);// 赋值分页输出
		$this -> display(); // 输出模板
	}
	
	//输出文章内容
    public function article($article_id){
		/* 读取文章信息 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_news"; //表2
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
		
		
		/* 获取页底最新文章 */
		$bottom_latest = $db -> field( "$a.id, $a.title, $a.create_time" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "status = 1" ) ->
		where(array('category_id'=>array('in','70,71,72,73,75'))) ->
		order('id desc')->
        limit(12) ->
        select();
		
		$this -> assign('bottom_latest', $bottom_latest);
		$this -> assign('bottom_latest_name', 'news');
		
		
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集
		/* 获取全局专家答疑 */
		$this -> assign('experts_answer', get_answers());// 赋值数据集
		/* 获取全局知名专家 */
		$this -> assign('famous_specialist', get_specialist());// 赋值数据集
		
		$this -> assign('Article_info', $Article_info[0]);// 赋值数据集
		$this -> assign('Category_info', $Category_info[0]);// 赋值数据集
		$this -> display();
	}
}