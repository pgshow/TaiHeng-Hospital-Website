<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class YuyueController extends Controller {
	
    protected function _initialize(){
        /* 读取站点配置 */
        $config = api('Config/lists');
        C($config); //添加配置

        if(!C('WEB_SITE_CLOSE')){
            $this->error('站点已经关闭，请稍后访问~');
        }
		
		/* 读取栏目信息 */
		$Category_info = M('category') -> where('name="yuyue"') -> select();
		//dump($Category_info);
		
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
		
		/* 多选项读取专家列表 */
		$specialists = M('document') -> field( "title" ) -> where("model_id = 10 and status = 1") -> limit(15) -> select();
		
		$this->assign('specialists', $specialists);
		
		$this->display();
	}
	
	//增加患者预约记录
	public function add(){
		
		//获取表单所有信息
		$all = I('get.');
		
		$Model = new Model();
		
		//向数据表tth_document插入记录
		$sql_document1 = "insert into tth_document(
		uid, title, category_id, model_id, create_time, update_time,status) values(
		1, '{$all['title']}', 76, 15, ".NOW_TIME.", ".NOW_TIME.", 1)";
		
		$Document = $Model -> execute($sql_document1);
		
		if(false === $Document){
			$this->error('新增失败！错误编号：001');
		}
		
		//读取tth_document表最新ID序号
		$Model2 = M("document");
		$maxID = $Model2 -> where('model_id = 15') -> max('id');
		
		if(false === $maxID){
			$this->error('新增失败！错误编号：002');
		}
		
		//向数据表tth_document_yuyue插入记录
		$sql_document2 = "insert into tth_document_yuyue(
		id, tel, age, appointment_time, specialist, detail) values(
		{$maxID}, '{$all['tel']}', '{$all['age']}', '{$all['appointment_time']}', '{$all['specialist']}', '{$all['detail']}')";
		
		$Document2 = $Model -> execute($sql_document2);
		
		if(false === $Document2){
			$this->error('新增失败！错误编号：003');
		}
		
		// 页面跳转目标地址
		$this->assign("jumpUrl","/yuyue/");
		$this->success("成功新增数据");
	}
}