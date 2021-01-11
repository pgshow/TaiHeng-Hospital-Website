<?php
namespace Home\Controller;
use Think\Controller;
class ArmariumController extends Controller {
	
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where('name="armarium"') -> select();
		
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
	
    public function index(){
		//分类信息
		$Category_ID = $this -> Category_info['id'];
		
		/* 读设备列表 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_armarium"; //表2
		$page_size = $this -> Category_info['list_row']; //每页显示记录数
		$count = count( $db -> field('id') -> where( "category_id = {$Category_ID} and status = 1" ) -> select() ); //记录总数
		$Page = new \Think\Page($count, $page_size);
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span class="page_row">共 %TOTAL_ROW% 个</span>');
		$show = $Page -> show(); // 分页显示输出
		
		//联合查询
		$list = $db -> field( "$a.id, $a.title, $a.cover_id, $b.intro" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "status = 1" ) ->
		order('level DESC, id DESC')->
        limit($Page->firstRow.",".$Page->listRows) ->
        select();
		
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
		$b = "tth_document_armarium"; //表2
		//联合查询
		$Article_info = $db -> field( "$a.id, $a.title, $a.category_id, $a.description, $a.create_time, $b.intro, $b.content, $b.keywords" ) ->
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
		
		
		/* 获取页底最新文章 */
		$bottom_latest = $db -> field( "$a.id, $a.title, $a.create_time" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "status = 1" ) ->
		where(array('category_id'=>array('in','48'))) ->
		order('id desc')->
        limit(12) ->
        select();
		
		
		$this -> assign('bottom_latest', $bottom_latest);
		$this -> assign('bottom_latest_name', 'armarium');
		
		
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集
		/* 获取全局知名专家 */
		$this -> assign('famous_specialist', get_specialist());// 赋值数据集
		
		$this -> assign('Article_info', $Article_info[0]);// 赋值数据集
		
		$this -> display();
	}
}