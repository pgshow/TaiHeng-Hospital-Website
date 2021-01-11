<?php
return array(
	//'配置项'=>'配置值'
	'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
	'URL_ROUTER_ON'   => true,       //开启路由功能
	'URL_ROUTE_RULES' => array(
	    'pages/:id'                 =>       'pages/index',   //页面的路由定义
		'news/a/:article_id'        =>       'news/article',    //新闻模块文章内容页
		'news/:category_name'       =>       'news/index',    //新闻分类子栏目路由定
		'specialist/a/:article_id'  =>       'specialist/article',    //专家模块文章内容
		'armarium/a/:article_id'    =>       'armarium/article',    //设备模块文章内容
		'video/a/:article_id'       =>       'video/article',    //视频模块文章内容
		'subject/a/:article_id'     =>       'subject/article',    //专题模块文章内容页
		'subject/:category_name'    =>       'subject/index',    //专题分类子栏目路由定
		
		'illness/a/:article_id'              =>       'illness/article',    //疾病模块文章内容页
		'illness/i/:intro_id'                =>       'illness/intro',    //疾病简介内容页
		
		'jinshishoushu/:category_name'       =>       'jinshishoushu/index',     //科室栏目路由定义
		'shilijiaozheng/:category_name'      =>       'shilijiaozheng/index',     //科室栏目路由定义
		'baineizhang/:category_name'         =>       'baineizhang/index',     //科室栏目路由定义
		'qingguangyan/:category_name'        =>       'qingguangyan/index',     //科室栏目路由定义
		'yanbiaojibing/:category_name'       =>       'yanbiaojibing/index',     //科室栏目路由定义
		'yandibing/:category_name'           =>       'yandibing/index',     //科室栏目路由定义
		'yanjianneiqi/:category_name'        =>       'yanjianneiqi/index',     //科室栏目路由定义
		
	),
);