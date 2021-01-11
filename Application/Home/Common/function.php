<?php
 use Think\Model;
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

/**
 * 前台公共库文件
 * 主要定义前台公共函数库
 */

/**
 * 检测验证码
 * @param  integer $id 验证码ID
 * @return boolean     检测结果
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function check_verify($code, $id = 1){
	$verify = new \Think\Verify();
	return $verify->check($code, $id);
}

/**
 * 获取列表总行数
 * @param  string  $category 分类ID
 * @param  integer $status   数据状态
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function get_list_count($category, $status = 1){
    static $count;
    if(!isset($count[$category])){
        $count[$category] = D('Document')->listCount($category, $status);
    }
    return $count[$category];
}

/**
 * 获取段落总数
 * @param  string $id 文档ID
 * @return integer    段落总数
 * @author 麦当苗儿 <zuojiazi@vip.qq.com>
 */
function get_part_count($id){
    static $count;
    if(!isset($count[$id])){
        $count[$id] = D('Document')->partCount($id);
    }
    return $count[$id];
}

/**
 * 获取科室导航结构
 */

function get_menu2(){
	
	//获取7个科室的ID
	$offices = M('category') -> field( "id, name, title" ) -> where('pid = 39') -> order('sort asc')-> limit(7) -> select();
	
	if($offices){
	    foreach ($offices as $key => $value){
			//查询每个科室下面的子栏目，写入数组
			$categorys = M('category') -> field( 'name, title' ) -> where("pid = {$value['id']}") -> order('sort asc')-> cache(true)-> select();
			$offices[$key]['subs'] = $categorys;
		}
	}
	
    return $offices;
}

/**
 * 全局函数-获取知名专家
 * 由后台文章编辑器里的 频道推荐 控制
 */

function get_specialist(){
	
	/* 读取专家列表 */
	$db = M( "document" );
	$a = "tth_document"; //表1
	$b = "tth_document_specialist"; //表2
	
	//联合查询
	$specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
	join( "$b on $a.id = $b.id" ) ->
	where( "(position = 2 or position = 3 or position = 7 or position = 6) and status = 1" ) ->
	order('level DESC, id DESC')->
	limit(6) ->
	select();
	
    return $specialist;
}


/**
 * 全局函数-获取案例分享
 * 由后台文章编辑器里的 频道推荐 控制
 */

function get_success(){
	
	/* 读取案例分享 */
	$db = M( "document" );
	$a = "tth_document"; //表1
	$b = "tth_document_news"; //表2
	
	$success = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
	join( "$b on $a.id = $b.id" ) ->
	where( "$a.category_id = 75 and (position = 2 or position = 3 or position = 7 or position = 6) and status = 1" ) ->
	order('id desc')->
	limit(4) ->
	select();
	
    return $success;
}

/**
 * 全局函数-获取专家答疑
 * 由后台文章编辑器里的 频道推荐 控制
 */

function get_answers(){
	
	/* 读取取专家答疑 */
	$db = M( "document" );
	$a = "tth_document"; //表1
	$b = "tth_document_news"; //表2
	
	$answers = $db -> field( "$a.id, $a.title, $a.description, $a.cover_id" ) ->
	join( "$b on $a.id = $b.id" ) ->
	where( "$a.category_id = 72 and (position = 2 or position = 3 or position = 7 or position = 6) and status = 1" ) ->
	order('id desc')->
	limit(4) ->
	select();
	
    return $answers;
}

/**
 * 全局函数-获取最新文章
 * 由后台文章编辑器里的 频道推荐 控制
 */

function get_latest(){
	
	/* 读取最新文章 */
	$db = M( "document" );
	$a = "tth_document"; //表1
	$b = "tth_document_specialist"; //表2
	
	//联合查询
	$specialist = $db -> field( "$a.id, $a.title, $b.photo, $b.situation" ) ->
	join( "$b on $a.id = $b.id" ) ->
	where( "(position = 2 or position = 3 or position = 7 or position = 6) and status = 1" ) ->
	order('id desc')->
	limit(6) ->
	select();
	
    return $specialist;
}