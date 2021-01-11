<?php
namespace Home\Controller;
use Think\Controller;
class AjaxController extends Controller {
	
	//前台提交预约信息
	public function addYuyue(){
        //ajaxReturn(数据,'提示信息',状态)
		$Model = new Model();
		//联接两个表的数据
//		$sql_document = "select  *  from  tth_document inner join tth_document_pages on tth_document.id = ".$id." and tth_document_pages.id = ".$id;
//		$Document = $Model -> query($sql_document);
		
		$m = M('tth_document_yuyue');
		if($m->add($_POST)){
		  $this->ajaxReturn($_POST,'添加信息成功',1);
		}else{
		  $this->ajaxReturn(0,'添加信息失败',0);  
		}
	}
	
	//更新就诊日期状态
	public function updateAppoint(){
		//医导才有权限修改
		if(!check_role(4, 'eq')) {
			die('无权限！');
		}
		
		$cid = I('get.cid');
		if("" == $cid) {
			return false;
		}
		//更新就诊日期
		$Update = M("customer");
		$up['visit_time'] = date("Y-m-d H:i:s" ,time());
		$up['input_guide'] = cookie('thoa_uname');;
		$result = $Update->where("cid={$cid}")->save($up);
		//返回修改结果
		if($result){
			//录入成功，返回时间
		    $User = D('customer');
		    $date = $User->find($cid);
			echo $date['visit_time'];
			
			/*记录到统计信息*/
			//判断是否是网络组录入的资料
			if(1 == $date['input_group_id']) {
				//来访+1
				check_time(date("Y-m-d" ,time()), 3);
				//电话预约的+1
				if('电话预约' == $date['appoint_way']) {
					check_time(date("Y-m-d" ,time()), 4);
				}
			}
			
		} else {
			echo '修改失败!';
		}
    }
}