<?php
namespace Home\Controller;
use Think\Controller;
class SubjectController extends Controller {
	
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where('name="subject"') -> select();
		
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
		
		/* 读取文章列表 */
		$db = M( "document" );
		$a = "tth_document"; //表1
		$b = "tth_document_special"; //表2
		$page_size = $this -> Category_info['list_row']; //每页显示记录数
		$count = count( $db -> field("$a.id") -> join( "$b on $a.id = $b.id" ) -> where( "status = 1 and category_id != 265 and category_id != 266" ) -> select() ); //记录总数
		$Page = new \Think\Page($count, $page_size);
		$Page -> setConfig('prev','上一页');
		$Page -> setConfig('next','下一页');
		$Page -> setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span class="page_row">共 %TOTAL_ROW% 篇</span>');
		$show = $Page -> show(); // 分页显示输出
		
		//联合查询
		$list = $db -> field( "$a.id, $a.title, $a.description, $b.url, $b.cover" ) ->
        join( "$b on $a.id = $b.id" ) ->
        where( "status = 1 and category_id != 266" ) ->
		order('level DESC, id DESC')->
        limit($Page->firstRow.",".$Page->listRows) ->
        select();
		
		//dump($list);

		/* 模板赋值并渲染模板 */
		$this -> assign('list', $list);// 赋值数据集
		$this -> assign('page', $show);// 赋值分页输出
		$this -> display(); // 输出模板
	}
}