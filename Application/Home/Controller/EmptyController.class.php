<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class EmptyController extends Controller {
	
	public function _empty(){
		header("HTTP/1.0 404 Not Found");
		$this->display('empty:index');
		exit;
	}
	
	//404
    public function index(){
		$this->_empty();
	}
}