<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <title><?php echo ($Category_info["meta_title"]); ?> - <?php echo C('WEB_SITE_TITLE');?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="<?php echo ($Category_info["keywords"]); ?>">
  <meta name="description" content="<?php echo ($Category_info["description"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/Public/Home/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/Home/css/app.css">
  <link rel="stylesheet" href="/Public/Home/css/shouwei.css">
  <link rel="stylesheet" href="/Public/Home/css/all.css">
  <link rel="stylesheet" href="/Public/Home/css/luxian.css">
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
<!--切换开始-->
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

<!--主体开始-->
<hr data-am-widget="divider" style="border:none;" class="am-divider am-divider-dotted am-no-layout">
<div class="contentt">
<div class="one">
<p style="margin-bottom: -7px;">当前位置：<?php echo C('WEB_SITE_TITLE');?> > <?php echo ($Category_info["title"]); ?></p>
<div class="exzj texzj"><div class="exspan-l">TAIHENG  </div ><div  class="exspan-2" style="
    width: 500px;
">WIKIPEDIA OF EYE ILLNESS</div > </div>
<div class="exzj_1" style="
    border-bottom: 1px solid gainsboro;
"><div  class="exspan_2"><?php echo ($Category_info["title"]); ?></div ><div  class="exspan_1"> 〉〉</div ><img src="/Public/Home/i/english.png" style="float: left;margin-top: 7px;">

<img src="<?php echo (get_cover($Category_info["icon"],'path')); ?>" width="940" height="259" style="margin-top: 20px; width:100%;"></div>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-dotted am-no-layout">
<style type="text/css">
.ietabs{width: 940px; margin-left: 30px; margin-right: 30px;}
.ietabs>.am-tabs{margin:0;}

</style>
  <div class="ietabs">
  
    <div data-am-widget="tabs"
       class="am-tabs am-tabs-default"
        >
      <ul class="am-tabs-nav am-cf" style="
    margin-bottom: 6px;
">
          <li class="am-active"><a href="[data-tab-panel-0]">近视手术</a></li>
          <li class=""><a href="[data-tab-panel-1]">视力矫正</a></li>
          <li class=""><a href="[data-tab-panel-2]">白内障</a></li>
		  <li class=""><a href="[data-tab-panel-3]">青光眼</a></li>
		  <li class=""><a href="[data-tab-panel-4]">眼表疾病</a></li>
		  <li class=""><a href="[data-tab-panel-5]">眼底病</a></li>
		  <li class="" style="margin-right: 0px;"><a href="[data-tab-panel-6]" style="margin-left: 5px; margin-right:0px;">眼睑泪器</a></li>
      </ul>
<div class="am-tabs-bd">

<?php if(is_array($Illness_category)): $i = 0; $__LIST__ = array_slice($Illness_category,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div data-tab-panel-0 class="am-tab-panel
     <?php if(($key) == "0"): ?>am-active<?php endif; ?>
     ">
		<div class="topice-center baike tabs-center">
        
        <?php if(is_array($vo["sub"])): $i = 0; $__LIST__ = $vo["sub"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?><div class="
            <?php
 if(0 == (($key+1)%3)) { echo "device-center-3"; } else { echo "device-center-1"; } ?>
            ">
				<a class="caolian" href="\<?php echo ($vo["name"]); ?>\<?php echo ($vos["name"]); ?>\">
					<img src="<?php echo (get_cover($vos["icon"],'path')); ?>" width="292" height="105">
				</a>
				<h2>
					<a href="\<?php echo ($vo["name"]); ?>\<?php echo ($vos["name"]); ?>\">
						<?php echo ($vos["title"]); ?>
					</a>
				</h2>
				<div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
					<div class="am-list-news-bd">
						<ul class="am-list">
                        
                            <?php if(is_array($vos["list"])): $i = 0; $__LIST__ = $vos["list"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated">
								<a href="<?php echo U('/illness');?>/a/<?php echo ($vol["id"]); ?>.html" target="_blank" class="am-list-item-hd ">
									<?php echo ($vol["title"]); ?>
								</a>
								<span class="am-list-date">
									<a href="">
										<?php echo (date('m-d',$vol["create_time"])); ?>
									</a>
								</span>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
                            
					  </ul>
					</div>
				</div>
				<a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">
					详细咨询
				</a>
				<a href="\<?php echo ($vo["name"]); ?>\<?php echo ($vos["name"]); ?>\">
					了解疾病
				</a>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
        
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>

	
</div>



  </div>

  
  </div>




<div class="bottom" >
<ul style="margin-top: 0px;">
<li><a href="#"><img src="/Public/Home/i/luxian/b01.jpg"></a></li>
<li><a href="#"><img src="/Public/Home/i/luxian/b02.jpg"></a></li>
<li><a href="#"><img src="/Public/Home/i/luxian/b03.jpg"></a></li>
<li><a href="#"><img src="/Public/Home/i/luxian/b04.jpg"></a></li>
</ul>
</div>

  </div>



















</div>







<!--结束开始-->
<hr data-am-widget="divider" style="" class="am-divider am-divider-dotted am-no-layout">
<!--footer开始-->
<div class="footer">
<div>
    <p>
       <a href="">重庆泰恒眼科医院</a> | <a href="">走进泰恒</a> | <a href="">精品科室</a> | <a href="">精彩专题</a> | <a href="">诊疗服务</a> | <a href="">招贤纳士</a> | <a href="">网站地图</a> | <a href="">站长统计</a></br>
24小时爱眼热线：023-68884888或者拨打<a href="" style="color:#D3A749;">免费电话</a> 地址：重庆市九龙坡区石桥铺渝州路29号华宇名都3楼（石桥铺轻轨站2号出入口）</br>
Copyright © 2015<a href=""> th023.com.</a> All Rights Reserved.重庆泰恒眼科医院 版权所有  <a href="">免责声明</a></br>
（渝）医广[2012]第12-17-659号  渝卫网审（2011）174号  渝ICP备13006820号-2</br>


     </p>
</div>


</div>

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