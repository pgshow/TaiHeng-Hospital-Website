<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class PagesController extends Controller {
	
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
	
    public function index($id = 0){
		/* 标识正确性检测 */
		if(!($id && is_numeric($id))){
			$this->error('文档ID错误！');
		}
		
		/* 获取详细信息 */
		$Model = new Model();
		//联接两个表的数据
		$sql_document = "select  *  from  tth_document inner join tth_document_pages on tth_document.id = ".$id." and tth_document_pages.id = ".$id;
		$Document = $Model -> query($sql_document);
		
		//数据错误
		if(!$Document){
		    $this->error('获取列表数据失败！');
		}
		//dump($Document);
		$this->assign('Pages_info', $Document[0]);
		
		$this->display();
	}
}