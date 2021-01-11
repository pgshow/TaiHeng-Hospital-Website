<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class SController extends Controller {
	
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
	
    public function index($q){
		/* 获取搜索的信息 */
		$map['title']  = array('LIKE', '%'.$q.'%');
		$map['model_id']  = array('in', '13, 12, 11, 9');

		$Search_list = M('document') -> field('id, title, description, create_time, model_id') -> where($map) -> limit(20) -> select();
		
		$this -> assign('q', $q);
		$this -> assign('Search_list', $Search_list);
		
		
		/* 获取全局知名专家 */
		$this -> assign('famous_specialist', get_specialist());// 赋值数据集
		/* 获取全局成功案例 */
		$this -> assign('share_case', get_success());// 赋值数据集
		
		$this -> display();
	}
}