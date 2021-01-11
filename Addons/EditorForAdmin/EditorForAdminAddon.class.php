<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: yangweijie <yangweijiester@gmail.com> <code-tech.diandian.com>
// +----------------------------------------------------------------------

namespace Addons\EditorForAdmin;
use Common\Controller\Addon;

/**
 * 编辑器插件
 * @author yangweijie <yangweijiester@gmail.com>
 */

	class EditorForAdminAddon extends Addon{

		public $info = array(
			'name'=>'EditorForAdmin',
			'title'=>'后台编辑器',
			'description'=>'用于增强整站长文本的输入和显示',
			'status'=>1,
			'author'=>'thinkphp',
			'version'=>'0.2'
		);

		public function install(){
			return true;
		}

		public function uninstall(){
			return true;
		}

		/**
		 * 编辑器挂载的后台文档模型文章内容钩子
		 * @param array('name'=>'表单name','value'=>'表单对应的值','edit_type'=>'编辑器类型','heigh'=>'编辑器高度')
		 * 编辑器类型 1=KindEditor 2=UEditor
		 */
		public function adminArticleEdit($data){
			$this->assign('addons_data', $data);
			//获取编辑器全局参数
			$addons_config = $this->getConfig();
			
			//如果该模型定义了编辑器类型就改变它
			if($data['edit_type'] != '') {
				$addons_config['editor_wysiwyg'] = $data['edit_type'];
			}
			
			//如果该模型定义了编辑器高度就改变它
			if($data['heigh'] > 0) {
				$addons_config['editor_height'] = $data['heigh'].'px';
			}
			
			$this->assign('addons_config', $addons_config);
			$this->display('content');
		}
	}
