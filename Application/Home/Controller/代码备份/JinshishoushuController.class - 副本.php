<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class JinshishoushuController extends Controller {
	
	//初始化
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		//获取子栏目名称
		$category_name = I('get.category_name');
		
		//访问百科首页
		if(!$category_name) {
		    $this->display();
			return;
		}
		
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
    public function index($category_name = false){
		
		
		$this->display();
	}
}