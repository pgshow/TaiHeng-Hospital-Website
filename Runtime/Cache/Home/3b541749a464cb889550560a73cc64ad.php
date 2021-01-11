<?php if (!defined('THINK_PATH')) exit();?>﻿<!doctype html>
<html class="no-js">
<head>
  <title><?php echo ($Pages_info["title"]); ?> - <?php echo C('WEB_SITE_TITLE');?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo ($Pages_info["description"]); ?>">
  <meta name="keywords" content="<?php echo ($Pages_info["keywords"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/Public/Home/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/Home/css/app.css">
  <link rel="stylesheet" href="/Public/Home/css/shouwei.css">
  <link rel="stylesheet" href="/Public/Home/css/all.css">
  <link rel="stylesheet" href="/Public/Home/css/yuyue.css">
  <style type="text/css">
  .news-center-right-4{
    margin-top: 55px;
	}
  </style>
</head>
<body>
<!--头部开始-->
<div class="top">
  <div class="min">
    <div class="icon">
      <ul>
        <li><a href="javascript:void(0);" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0,}">微信公众平台</a><img src="/Public/Home/i/icon/wechat.png"></li>
        <li style="padding-left: 20px;"><a href="http://weibo.com/p/1005052728485332?is_all=1" target="_blank">新浪微博</a><img src="/Public/Home/i/icon/weibo.png"></li>
        <li style="padding-left: 20px;"><a href="http://t.qq.com/tide-eye" target="_blank">腾讯微博</a><img src="/Public/Home/i/icon/txweibo.png"></li>
        <li style="padding-left: 15px;"><a href="">手机版</a><img src="/Public/Home/i/icon/phone.png"></li>
      </ul>
    </div>
    <div class="guangbo">
      <p>关爱双眼 • 信赖泰恒&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;门诊时间：08:30-17:00（无假日医院 )</p>
    </div>
  </div>
</div>
<div class="logo"> <img src="/Public/Home/i/logo.png"></div>
<!--头部结束-->
<!--菜单开始-->
<div class="min-menu">
  <div class="menu">
    <ul>
      <li class="menu-list" id="sykk1"> <a  href="<?php echo U('/');?>" id="menuone1">首&nbsp&nbsp&nbsp&nbsp页</a>
        <!--<div id="sykk"></div>-->
      </li>
      <li class="menu-list"> <a href="<?php echo U('/special/brand');?>/" id="menuone2">泰恒品牌</a> </li>
      <li class="menu-list"><a href="javascript:void(0);" id="menuone3">医院新闻</a>
      <ul id="ul1" class="ulpop">
          <li><a href="<?php echo U('/news/hospital-news');?>/">>院内新闻</a></li>
          <li><a href="<?php echo U('/news/report');?>/">>媒体报道</a></li>
          <li><a href="<?php echo U('/news/class');?>/">>专家答疑</a></li>
          <li><a href="<?php echo U('/news/welfare');?>/">>公益印记</a></li>
          <li><a href="<?php echo U('/news/honor');?>/">>荣誉资质</a></li>
          <div style="clear:both;"></div>
      </ul>
      </li>
      <li class="menu-list"><a href="<?php echo U('/specialist/');?>/" id="menuone4">专家团队</a></li>
      <li class="menu-list"><a href="<?php echo U('/armarium/');?>/" id="menuone5">前沿设备</a></li>
      <li class="menu-list"><a href="<?php echo U('/news/case');?>/" id="menuone6">案例分享</a></li>
      <li class="menu-list"><a href="<?php echo U('/video');?>/" id="menuone7">视频资讯</a></li>
      <li class="menu-list"><a href="<?php echo U('/subject');?>/" id="menuone8">精彩专题</a></li>
      <li class="menu-list-9"><a href="javascript:void(0);" id="menuone9">诊疗服务</a>
        <ul id="ul2" class="ulpop">
          <li><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">>在线咨询</a></li>
          <li><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">>预约专家</a></li>
          <li><a href="http://www.th023.com/pages/352.html">>专家排班</a></li>
          <li><a href="http://www.th023.com/pages/39.html">>就医流程</a></li>
          <li><a href="http://www.th023.com/pages/36.html">>手术指南</a></li>
          <li><a href="http://www.th023.com/pages/37.html">>来院路线</a></li>
          <div style="clear:both;"></div>
        </ul>
      </li>
      <li class="menu-list"><a href="<?php echo U('/yuyue');?>/" id="menuone10">预约挂号</a></li>
    </ul>
  </div>
</div>
<style type="text/css">
#sykk{width:1000px; height:100px; background-color:white; positon:absolute; display:none;border: 1px solid #7fc9f1;}
</style>
<!--菜单结束-->

<!--轮播开始--->
<?php if(C('INDEX_ICON_MENU') == '0' ): ?><style type="text/css">
    .silider img{ height:480px;}
</style><?php endif; ?>
<div class="silider siliderie">
  <div data-am-widget="slider" class="am-slider am-slider-a1" data-am-slider='{"directionNav":false, "slideshowSpeed": 5000,"animationSpeed": 800,}' >
    <!--如果是疾病页，皆调用各自科室的图片-->
    <?php if($Office_info['name'] != '' ): ?><ul class="am-slides">
        <li><img src="/Slider/<?php echo ($Office_info["name"]); ?>.jpg"></li>
    </ul>
    <?php else: ?>
    <ul class="am-slides">
        <?php if(C('BIG_BANNER_1') != '' ): ?><li><a href="<?php echo C('URL_BANNER_1');?>" target="_blank"><img src="/Slider/<?php echo C('BIG_BANNER_1');?>"></a></li><?php endif; ?>
        <?php if(C('BIG_BANNER_2') != '' ): ?><li><a href="<?php echo C('URL_BANNER_2');?>" target="_blank"><img src="/Slider/<?php echo C('BIG_BANNER_2');?>"></a></li><?php endif; ?>
        <?php if(C('BIG_BANNER_3') != '' ): ?><li><a href="<?php echo C('URL_BANNER_3');?>" target="_blank"><img src="/Slider/<?php echo C('BIG_BANNER_3');?>"></a></li><?php endif; ?>
    </ul><?php endif; ?>
  </div>
</div>
<!--轮播结束--->

<div class="min">
    <!--切换开始-->
        <div class="qiehuan">
      <div class="qh">
        <ul>
        <?php if(is_array($office_menu)): $i = 0; $__LIST__ = $office_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mvo): $mod = ($i % 2 );++$i;?><li class=""><a class="qhlist-<?php echo ($i); ?> qie<?php echo ($i); ?>a
          <?php
 if ('' == $Office_info['nav_no'] && 1 == $i) { echo 'lanq'; } elseif (($i) == $Office_info['nav_no']) { echo 'lanq'; } ?>
          " href="/<?php echo ($mvo["name"]); ?>/"><img src="/Public/Home/i/tu/b<?php echo ($i); ?>.png" style="display:none;"></a> </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>
      <div class="rx">
        <p><img src="/Public/Home/i/phone.png"></p>
        <span>
        <form action="/s.html" method="get" name="formsearch">
          <input name="q" type="text" class="fl kuan" value="请输入关键字..." onFocus="this.value=''">
          <input type="submit" class="an fl" value="搜索" style="
    line-height: 19px;
">
        </form>
        </span> </div>
    </div>
    <div class="qiehuan-page">
      <?php if(is_array($office_menu)): $i = 0; $__LIST__ = $office_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mvo): $mod = ($i % 2 );++$i;?><div class="bet 
      <?php
 if ('' == $Office_info['nav_no'] && 1 == ($key+1)) { echo 'lanpage'; } elseif (($key+1) == $Office_info['nav_no']) { echo 'lanpage'; } ?>
      " id="bet-<?php echo ($key+1); ?>" style="display: none;">
          <?php if(is_array($mvo["subs"])): $i = 0; $__LIST__ = $mvo["subs"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$msvo): $mod = ($i % 2 );++$i;?><a href="/<?php echo ($mvo["name"]); ?>/<?php echo ($msvo["name"]); ?>/"><?php echo ($msvo["title"]); ?></a>&nbsp;｜&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
      </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <!--切换结束-->
</div>

<style type="text/css">
.LZhuMin .contentt{margin-top: 0px;}
.zhinan-titlelll{height: 30px;}
.zhinan-titlelll .topic-title-2{width: 140px; height: 30px;line-height: 30px; background-color: #005c8e; color: #FFF;text-align: center; font-size: 14px; font-weight: 100;}
.zhinan-titlelll .topic-title-1{width: 140px; height: 30px;line-height: 30px; background-color: #1689c4; color: #FFF;text-align: center; font-size: 14px; font-weight: 100;}
.Loneone .texzj .exspan-l {width: 172px; float: left;color: #a69256;margin: 0;padding: 0; }
.Loneone .texzj {font-size: 36px;}
.zhinanLLeft{margin-top: 0px;}
.zhinanLLeft>.zhinan-title-1{ float: left; width: 100%;}
.zhinanLLeft>.zhinan-title-1 h1{ margin: 0px;}
.zhinanLLeft .LTable table tr{border-top:1px solid  #d7af38!important;}
.zhinanLLeft .LTable table th{border-left:1px solid  #d7af38;border-right:1px solid  #d7af38;}
.zhinanLLeft .LTable table td{border-left:1px solid  #d7af38!important;border-right:1px solid  #d7af38!important; text-align: center;padding: 15px;}
.zhinan-contentLY{height: auto!important;}
.LTableHeigh th{border: 0; background-color: #0093dd; border-right: 2px solid #0093dd;color: #FFF; height: 38px;text-align: center; font-size: 16px;}
.LTableHeigh>th{border: none!important;}
.zhinanLLeft .LTable table span{ color:#0093DD ;}
.zhinan-contentLY table{ border-bottom: 1px solid #D7AF38;margin-bottom: 30px;}
.LYTwoTh th{border: none!important;background-color: #0093dd; border-right: 2px solid #0093dd;color: #FFF; height: 38px;text-align: center; font-size: 15px; font-weight:100;}
.LtwoTable p{ margin: 0px;    padding-left: 10px;}
.LTable table{border: 1px solid #D7AF38; margin-bottom: 30px;}
.exzjhospiatl{font-size: 36px; color: #a69256; width: 100%;height: 57px;}
.exzjhospiatl .exspan-l {width: 60px;float: left; color: #a69256;}
.exzjhospiatl .exspan-2 { color: #6b6e73; width: 182px;float: left; margin: 0; padding: 0;}
.contentt .two{height: auto!important;}
.contentt .two .cont {background-color: #ced0d1;}
.contentt .two .cont h1{color: white;}
.contentt .three .L { width: 455px; height: 300px;border-top: 1px dashed #a58f56; float: left;}
.contentt .three { width: 930px;height: 300px;margin: 0 auto; padding-top: 0px;}
.contentt .L p { font-size: 12px;line-height: 27px; color: #a58f56;margin-bottom: 16px;margin-top: 20px;}
.contentt .L>img{margin-top: 20px;margin-bottom: 180px;}
.contentt .bb { width: 75px;height: 25px; background-color: #a58f56;float: left;text-align: center;line-height: 25px;color: white;}
.contentt .bb a{color: white;}
.contentt .aa a{color: white;}
.contentt .aa {width: 75px;height: 25px;background-color: #0c70ab;float: left; text-align: center;line-height: 25px; color: white;}
.contentt .four { width: 930px;  height: 285px; margin: 0 auto; border-top: 1px dashed #a58f56;}
.contentt .four h1, .five h1, .six h1, .seven h1, .eight h1 {padding: 0; margin: 0; color: #a79253;padding: 15px 0px 0px 10px;font-size: 22px; font-weight: 100;}
.contentt .four h2, .five h2, .six h2, .seven h2, .eight h2 {padding: 0; margin: 0;font-size: 18px; padding: 0px 0px 10px 10px; border-bottom: 1px dashed #a58f56; font-weight: 100;}
.contentt .four img, .five img, .six img, .seven img, .eight img {margin: 25px 25px 80px 10px;float: left;}
.contentt .cc {color: #0c70ab;}
.contentt .four p, .five p, .six p, .seven p, .eight p {padding: 0; margin: 0; padding: 15px 0;font-size: 12px;line-height: 28px;}
.contentt .five {width: 930px;height: 315px;margin: 0 auto; border-top: 1px dashed #a58f56;}
.contentt .six {width: 930px;height: 370px;margin: 0 auto; border-top: 1px dashed #a58f56;}
.contentt .six>img{margin-bottom: 120px;}
.contentt .seven {width: 930px; height: 230px; margin: 0 auto; border-top: 1px dashed #a58f56;}
.contentt .eight {width: 930px;height: 305px; margin: 0 auto; border-top: 1px dashed #a58f56;  border-bottom: 1px dashed #a58f56; margin-bottom: 20px;}
.contentt .seven>img{margin-bottom: 35px;}
.LZhuMin .content1{margin-bottom: 20px;}
.LYexzj{font-size: 36px;color: #a69256;width: 1000px;height: 57px;}
.LYexzj .exspan-l {width: 60px;float: left;color: #a69256;}
.LYexzj .exspan-2 {color: #6b6e73;width: 182px;float: left;}
.LZhuMin .content1 .one{height: 400px;}
.LYcont {background-color: #ced0d1;}
.LYcont h1{color: white;}
.LYLastTableTr th{border: none!important;background-color: #0093dd;color: #FFF;height: 38px;text-align: center;font-size: 15px;font-weight: 100;}
.LYLastTable td {height: 60px;border: 1px solid #d7af38;color: #000;width: 77px;text-align: center;}
.LYLastTable p{margin-bottom: 0px;}
.LYLastTable a{ color: #2ad2ff;}
.LYfourLY{padding: 0;width: 930px;height: 240px; margin: 50px auto; margin-bottom: 0px;}
.LYfourLY h1 {color: #a79253;font-size: 24px; margin-top: 20px;font-weight: 100;margin-bottom: 0px;}
.LYfourLY p {font-size: 20px;color: #444;text-indent: 0; margin: 0px;}
.LYfourLY .T {padding: 0; width: 930px; height: 100px; margin: 0 auto; border-top: 1px dashed #a79253; border-bottom: 1px dashed #a79253;}
.LYfourLY img { float: left; margin: 20px 25px 0px 10px;}
.LYfourLY span {display: block;padding: 0; margin: 0; font-size: 14px; line-height: 28px;color: #a79253;margin-top: 20px; float: left;text-indent: 0;}
</style>

<!--主体开始-->
<hr data-am-widget="divider" style="border: none!important; margin-top: 0px!important;" class="am-divider am-divider-dotted am-no-layout">
<!--
	描述：主体内容开始全部模块都在class="LZhuMin"的div中
-->
<div class="LZhuMin">
    <?php echo ($Pages_info["content"]); ?>
</div>
<!--结束开始-->
<!--主体结束-->

<!--左侧开始--->

<!--左侧结束--->
<!--右侧开始-->

<!--右侧结束--->
<!---弹出框开始-->

<!--弹出框结束--->
<!--footer开始-->
<div class="footer">
  <div>
    <p><a href="/">重庆泰恒眼科医院</a> | <a href="<?php echo U('/special/brand');?>/">走进泰恒</a> | <a href="<?php echo U('/illness');?>/">精品科室</a> | <a href="<?php echo U('/subject');?>/">精彩专题</a> | <a href="/armarium/">前沿设备</a> | <a href="/pages/40.html">招贤纳士</a> | <a href="/pages/38.html">网站地图</a> | <script src="http://s95.cnzz.com/z_stat.php?id=1257518789&web_id=1257518789" language="JavaScript"></script></br>
      24小时爱眼热线：023-68884888 或者拨打 <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&amp;lng=cn" target="_blank" style="color:#D3A749;">免费电话</a> 地址：重庆市九龙坡区石桥铺渝州路29号华宇名都3楼（石桥铺轻轨站2号出入口）</br>
      Copyright © 2015 <a href="http://www.th023.com">th023.com</a>. All Rights Reserved. 重庆泰恒眼科医院 版权所有 <a href="/pages/349.html">免责声明</a></br>
      （渝）医广[2015]（网络）第189号  渝ICP备13006820号-4
    </p>
  </div>
</div>
<!--footer结束--> 

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/Home/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/Public/Home/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/Public/Home/js/amazeui.min.js"></script>
<script src="/Public/Home/js/all.js"></script>
<script>
//让当前导航高亮
$("#menuone<?php echo ($Category_info["menu_no"]); ?>").css({"background-color":"#7FC9F1","color":"white"});
</script>
</body>
</html>
<!--请将以下码嵌入到您网页源代码的最后面，通常是</body></html>之后,这样在LR服务器升级维护的时候也不会影响您的网页打开呈现速度。-->
<script language="javascript">
<!--
	var LiveAutoInvite0='您好，来自%IP%的朋友'; 
	var LiveAutoInvite1='来自首页自动邀请的对话';
	var LiveAutoInvite2='网站商务通主要功能：<br>1、主动邀请<br>2、即时沟通<br>3、查看即时访问动态<br>4、访问轨迹跟踪<br>5、内部对话<br>6、不安装任何插件也实现双向文件传输<br><br><b>如果您有任何问题请接受此邀请以开始即时沟通</b>';
var LR_next_invite_seconds = 30; //10秒后再次显示自动邀请,可自行修改
var LrinviteTimeout = 1;   //3秒后第一次自动弹出
//-->
</script>
<script language="javascript" src="http://lvt.zoosnet.net/JS/LsJS.aspx?siteid=LVT74007147&float=1&lng=cn"></script>