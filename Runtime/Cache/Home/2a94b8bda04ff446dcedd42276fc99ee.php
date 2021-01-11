<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo C('WEB_SITE_DESCRIPTION');?>">
<meta name="keywords" content="<?php echo C('WEB_SITE_KEYWORD');?>">
<meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title><?php echo C('INDEX_TITLE_META');?></title>
<link rel="stylesheet" href="/Public/Home/css/amazeui.min.css">
<link rel="stylesheet" href="/Public/Home/css/app.css">
<link rel="stylesheet" href="/Public/Home/css/all.css">
<script type="text/javascript" src="http://www.yumukeji.com/library/jquery-1.11.2.min.js"></script>
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
<!--首页框框-->
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
<!--ICON导航开始-->
<?php
if(1 == C('INDEX_ICON_MENU')) { ?>
<div class="caidan-icon">
    <div class="caidan-icon-1">
      <div class="xiao-icon">
        <style type="text/css">
*{margin:0; padding:0; }
img{border:none;}
.Imglist{width:260px; height:370px; padding:10px 0 0 0; background:#FFF; margin:0 auto; background:url(/Public/Home/i/bgggg.png) no-repeat!important;}
.Imglist .Imglist_top{ width:240px; height:320px; overflow:hiddent; margin:0 auto;}
.Imglist .Imgimg{ list-style-type:none; padding:0; margin:0;}
.Imglist .Imgimg>li{ float:left; margin:0px; padding: 6px 1px 6px 6px;}
.Imglist .Imgimg>li>a{width: 52px; height:60px; display: block; position: relative; z-index: 998;course: pointer; text-align: center;}
.Imglist .Imgimg .xbg1{ width:40px; height:40px; display:block; position:absolute; z-index:1000; border-radius: 10px; top:0; left:6px;}
.Imglist .Imgimg .xbg2{ width:40px; height:40px; display:block; position:absolute; z-index:999; border-radius: 10px;top:0; left:6px;}
.Imglist .Imgimg>li>a:hover .xbg2{ z-index:1001;}
.font{ padding: 45px 0 0 0; color: #444; position: relative; bottom: 0; z-index: 10000; font-size: 12px; text-indent: 0; margin: 0;}
#mfdh,#zxzx,#yhhd{margin-top:15px;}
#mfdh{margin-left:32px;}
</style>
        <div class="Imglist">
          <div class="Imglist_top">
            <ul id="Imgimg" class="Imgimg">
              <li class="" id="gallery-1"> <a ><img src="/Public/Home/i/icon/1.png" class="xbg1"><img src="/Public/Home/i/icon/a1.png" class="xbg2">
                <p class="font">近视手术</p>
                </a></li>
              <li class="" id="gallery-2"> <a ><img src="/Public/Home/i/icon/2.png" class="xbg1"><img src="/Public/Home/i/icon/a2.png" class="xbg2">
                <p class="font">视力矫正</p>
                </a></li>
              <li class="" id="gallery-3"> <a ><img src="/Public/Home/i/icon/3.png" class="xbg1"><img src="/Public/Home/i/icon/a3.png" class="xbg2">
                <p class="font">白内障</p>
                </a></li>
              <li class="" id="gallery-4"> <a ><img src="/Public/Home/i/icon/4.png" class="xbg1"><img src="/Public/Home/i/icon/a4.png" class="xbg2">
                <p class="font">青光眼</p>
                </a></li>
              <li class="" id="gallery-5"> <a ><img src="/Public/Home/i/icon/5.png" class="xbg1"><img src="/Public/Home/i/icon/a5.png" class="xbg2">
                <p class="font">眼表疾病</p>
                </a></li>
              <li class="" id="gallery-6"> <a ><img src="/Public/Home/i/icon/6.png" class="xbg1"><img src="/Public/Home/i/icon/a6.png" class="xbg2">
                <p class="font">眼底病</p>
                </a></li>
              <li class="" id="gallery-7"> <a ><img src="/Public/Home/i/icon/7.png" class="xbg1"><img src="/Public/Home/i/icon/a7.png" class="xbg2">
                <p class="font">眼睑泪器</p>
                </a></li>
              <li class=""> <a href=""><img src="/Public/Home/i/icon/8.png" class="xbg1"><img src="/Public/Home/i/icon/a8.png" class="xbg2">
                <p class="font">近视手术</p>
                </a></li>
              <li class=""> <a href="http://wpa.qq.com/msgrd?v=3&uin=707897525&site=%E9%87%8D%E5%BA%86%E6%B3%B0%E6%81%92%E7%9C%BC%E7%A7%91%E5%8C%BB%E9%99%A2&menu=yes" target="_blank"><img src="/Public/Home/i/icon/9.png" class="xbg1"><img src="/Public/Home/i/icon/a9.png" class="xbg2">
                <p class="font">QQ</p>
                </a></li>
      <li class=""> <a href="javascript:void(0);" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0,}"><img src="/Public/Home/i/icon/10.png" class="xbg1"><img src="/Public/Home/i/icon/a10.png" class="xbg2">
                <p class="font">微信</p>
                </a></li>
              <li class=""> <a href="http://weibo.com/p/1005052728485332?is_all=1" target="_blank"><img src="/Public/Home/i/icon/11.png" class="xbg1"><img src="/Public/Home/i/icon/a11.png" class="xbg2">
                <p class="font">新浪</p>
                </a></li>
              <li class=""> <a href="http://t.qq.com/tide-eye" target="_blank"><img src="/Public/Home/i/icon/12.png" class="xbg1"><img src="/Public/Home/i/icon/a12.png" class="xbg2">
                <p class="font">腾讯</p>
                </a></li>
              <li class="" id="mfdh"> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/icon/13.png" class="xbg1"><img src="/Public/Home/i/icon/a13.png" class="xbg2">
                <p class="font">免费电话</p>
                </a></li>
              <li class="" id="zxzx"> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/icon/14.png" class="xbg1"><img src="/Public/Home/i/icon/a14.png" class="xbg2">
                <p class="font">在线咨询</p>
                </a></li>
              <li class="" id="yhhd"> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&amp;lng=cn" target="_blank"><img src="/Public/Home/i/icon/15.png" class="xbg1"><img src="/Public/Home/i/icon/a15.png" class="xbg2">
                <p class="font">优惠活动</p>
                </a></li>
            </ul>
          </div>
          <div class="Imglist_bottom">
            <div class="sousuo">
              <input type="text" id="search" minlength="3" placeholder="搜索" class="am-form-field" required>
            </div>
          </div>
        </div>
      </div>
      <div class="icon-ss-all">
      <?php if(is_array($office_menu)): $i = 0; $__LIST__ = $office_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ivo): $mod = ($i % 2 );++$i;?><ul class="icon-ss icon-ss-<?php echo ($key+1); ?>" style="display:none;">
          <h1><a href="/<?php echo ($ivo["name"]); ?>/">＞<?php echo ($ivo["title"]); ?></a></h1>
              <?php if(is_array($ivo["subs"])): $i = 0; $__LIST__ = $ivo["subs"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$isvo): $mod = ($i % 2 );++$i;?><li><a href="/<?php echo ($ivo["name"]); ?>/<?php echo ($isvo["name"]); ?>/"><?php echo ($isvo["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
  </div>
<?php
} ?>
<!--ICON导航结束-->
  <!--菜单结束--> 
  <!--菜单图片开始-->
  <div id="tu-menu" >
    <ul>
      <li class="tu-menu-1" style="display:none;"><img src="/Public/Home/i/caidan/1.jpg"></li>
      <li class="tu-menu-2" style="display:none;"><img src="/Public/Home/i/caidan/2.jpg"></li>
      <li class="tu-menu-3" style="display:none;"><img src="/Public/Home/i/caidan/3.jpg"></li>
      <li class="tu-menu-4" style="display:none;"><img src="/Public/Home/i/caidan/4.jpg"></li>
      <li class="tu-menu-5" style="display:none;"><img src="/Public/Home/i/caidan/1.jpg"></li>
      <li class="tu-menu-6" style="display:none;"><img src="/Public/Home/i/caidan/2.jpg"></li>
      <li class="tu-menu-7" style="display:none;"><img src="/Public/Home/i/caidan/3.jpg"></li>
    </ul>
  </div>
  <!--菜单图片结束--> 
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

<!--主体开始-->
<hr data-am-widget="divider" style="margin: 0!important;border: none!important;" class="am-divider am-divider-dashed" />
<div class="quanju">
  <div class=min> 
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
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
    <!--齿轮开始-->
    <div class="con_1 jg1">
      <div class="left">
        <div class="left_top">
          <div class="letf_top_1">
            <ul>
              <li class="dbqh1"> <a href=" " class="" id="hj1"> <img src="/Public/Home/i/ci/c1a.png" style="display:none;"> </a> </li>
              <li class="dbqh2"><a href=" " id="hj2" class=""> <img src="/Public/Home/i/ci/c5a.png" style="display:none;"> </a> </li>
              <li class="dbqh3"><a href=" " id="hj3" class=""> <img src="/Public/Home/i/ci/c6a.png" style="display:none;"> </a></li>
              <li class="dbqh4"><a href=" " id="hj4" class=""> <img src="/Public/Home/i/ci/c2a.png" style="display:none;"> </a></li>
              <li class="dbqh5"><a href=" " id="hj5" class=""> <img src="/Public/Home/i/ci/c4a.png" style="display:none;"> </a></li>
              <li class="dbqh6"><a href=" " id="hj6" class=""> <img src="/Public/Home/i/ci/c3a.png" style="display:none;"> </a></li>
            </ul>
          </div>
        </div>
        <div id="notice" class="cha notice">
          <div  id="notice-tit" class="cha_1 notice-tit">
            <ul>
              <li class="select" id="chas1"> <a href=" " class="chas"   >疾病<br>
                查询</a> </li>
              <li id="chas2"> <a href=" " > 症状<br>
                查询</a> </li>
            </ul>
          </div>
          <div id="notice-con" class="notice-con">
            <div class="cha_2" id="tab_chas_1">
              <p> <a href="">近视眼 </a> <a href=" "> 白内障</a> <a href=" ">青光眼 </a> <a href=" ">医学验光配镜 </a> <a href="">RGP</a> <a href=" "> 角膜塑形镜 </a> <a href=" "> 青光</a> <a href=" "> 医学验光配镜胬肉</a> <a href=" "> 近视眼 </a> <a href=" ">医学验光配镜 </a> <a href=" "> RGP</a> <a href=" ">角膜塑形镜</a> </p>
            </div>
            <div class="cha_2" id="tab_chas_2" style=" display:none;">
              <p> <a href="">1近视眼 </a> <a href=" "> 1白内障</a> <a href=" ">1青光眼 </a> <a href=" ">1医学验光配镜 </a> <a href="">RGP</a> <a href=" "> 角膜塑形镜 </a> <a href=" "> 青光</a> <a href=" "> 医学验光配镜胬肉</a> <a href=" "> 近视眼 </a> <a href=" ">医学验光配镜 </a> <a href=" "> RGP</a> <a href=" ">角膜塑形镜</a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="right"> 
        
        <!--2精彩专题开始-->
        <div class="xl_pe" id="tab_hj_2" style="display: none;">
          <div class="bt">
            <h2>精彩专题<span>PUBLIC SPIRTED</span></h2>
          </div>
          <div class="about">
            <div class="jpke">
            
            <?php if(is_array($r_special)): $i = 0; $__LIST__ = $r_special;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rsvo): $mod = ($i % 2 );++$i;?><div class="
              <?php if(($mod == 0) ): ?>jpke_1 fl
              <?php else: ?>
              jpke_1 fr<?php endif; ?>
              ">
                <div class="jpks_img"><img src="<?php echo (get_cover($rsvo["cover"],'path')); ?>" width="282" height="102"></div>
                <h6><a href="/<?php echo ($rsvo["url"]); ?>" target="_blank"><?php echo ($rsvo["title"]); ?></a></h6>
                <p>　　<?php echo (intro($rsvo["description"],0,80)); ?><a href="/<?php echo ($rsvo["url"]); ?>" target="_blank">[详细]</a></p>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
              
              <div style="height:50px;"></div>
            </div>
          </div>
        </div>
        <!--2精彩专题结束--> 
        <!--1关于我们开始-->
        <div class="xl_pe chilunpage" id="tab_hj_1" style="display: none;">
          <div class="bt">
            <h2>关于我们<span> ABOUT US</span></h2>
          </div>
          <div class="about">
            <div class="about_1"> <img src="/Public/Home/i/about.png" class="xl_img fl">
              <div class="xl_zb fr">
                <p> 作为国家卫生部视光学研究中心技术协作单位、重庆首家集医疗、教学、科研和防盲治盲为一体的的大型眼科全科医院。重庆泰恒眼科医院的出现，不仅填补了重庆市没有全科眼科医院的空缺，更将重庆的眼科诊疗.....<a href="/special/brand/" target="_blank">[详细]</a></p>
                <div class="ryu">
                  <ul>
                    <li><img src="/Public/Home/i/win/1.png"></li>
                    <li><img src="/Public/Home/i/win/2.png"></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="about_2">
              <div class="ab_z"><img src="/Public/Home/i/about/1.png"></div>
              <div class="ab_y">
                <h2>◆ 精品专科  专病专治</h2>
                <span>Special Disease Cures </span>
                <p> 重庆泰恒眼科医院将眼科诊疗疾病分为近视手术专科、视力矫正专科、白内障专科、青光眼专科、眼表疾病专科、眼底病专科、眼睑泪器专科等，通过细致分科可以让眼疾患者就诊时更有针对性，做到专科、专病、专治，使眼科诊..... <a href="/special/brand/" target="_blank">[详细]</a></p>
              </div>
              <div class="clear"></div>
            </div>
            <div class="about_2">
              <div class="ab_z"><img src="/Public/Home/i/about/2.png"></div>
              <div class="ab_y">
                <h2>◆ 人才立院  行业领军</h2>
                <span>Hospital Wth Talents</span>
                <p> 重庆泰恒眼科医院作为重庆市首家大型眼科全科医院，医院始终坚持“专家立院”的发展理念，广纳国内著名眼科专家、学者，由原第三军医大学西南医院郑汉教授担任院长，聘请业内博士、硕士研究生、主任医师、副主任医师.....<a href="/special/brand/" target="_blank">[详细]</a>　</p>
              </div>
              <div class="clear"></div>
            </div>
            <div class="about_2">
              <div class="ab_z"><img src="/Public/Home/i/about/3.png"></div>
              <div class="ab_y">
                <h2>◆ 尖端设备  国际前沿</h2>
                <span>Medical  Instrument</span>
                <p> 重庆泰恒眼科医院作为国家卫生部视光学中心指定的技术协作单位，医院始终坚持以技术为核心，全面整合业内资源，以“高、精、尖”为标准，不惜投入大量资金，从国外购置先进的眼科设备。U视个性化飞秒全激光梦幻组合......<a href="/special/brand/" target="_blank">[详细]</a>　</p>
              </div>
              <div class="clear"></div>
            </div>
            <div class="about_2">
              <div class="ab_z"><img src="/Public/Home/i/about/4.png"></div>
              <div class="ab_y">
                <h2>◆ 精确检测  全面医学</h2>
                <span>Inspection Equipment </span>
                <p> 重庆泰恒眼科医院巨资引进了Oculyzer角膜地形图仪、卡尔蔡司 HD-OCT、蔡司IOL-Master光学生物测量仪、眼A/B超、眼底荧光血管造影等先进的检测系统一应俱全，能快速、精确地检测出各种眼科疾病，准确反映患者病情进......<a href="/special/brand/" target="_blank">[详细]</a>　</p>
              </div>
              <div class="clear"></div>
            </div>
            <div class="about_2">
              <div class="ab_z"><img src="/Public/Home/i/about/5.png"></div>
              <div class="ab_y">
                <h2>◆ 以人为本  真情服务</h2>
                <span>Humanistic Service </span>
                <p> 重庆泰恒眼科医院倡导“以人为本，以患者为中心”的服务理念，提倡“用心倾听，细心诊断，耐心解答，精心治疗，热心服务”的人性化服务，坚持“一对一”原则，即"一患、一医、一护"、"首诊负责制"、"专家互动会诊制"......<a href="/special/brand/">[详细]</a>　</p>
              </div>
              <div class="clear"></div>
            </div>
          </div>
        </div>
        <!--1关于我们结束--> 
        
        <!--6就医指南开始-->
        <div class="xl_pe" id="tab_hj_6" style="display:none;">
          <div class="bt">
            <h2>就医指南<span>Medical Guide</span></h2>
          </div>
          <div class="about">
            <div class="jyzn">
              <div class="jyzn_left fl"> <img src="/Public/Home/i/ren.jpg" width="81px" height="81px"> </div>
              <div class="jyzn_right fl">
                <div class="wsyy">
                  <h2>重庆泰恒眼科医院预约流程</h2>
                  <span class="wsyy_1">Medical Treatment Process</span></div>
                <div class="jyzn_1">
                  <div class="jyzn_2 fl">
                    <p class="jy">网上预约流程</p>
                    <span class="jy_1">进入泰恒眼科网站后可以点击在线咨询或在线预约即可为您办理预约。</span> </div>
                  <div class="jyzn_2 fr">
                    <p class="jy">电话或QQ预约</p>
                    <span class="jy_1">拨打泰恒眼科爱眼热线：</br>
                    023-68884888进行咨询或预约挂号。添加泰恒眼健康咨询QQ：707897525</span> </div>
                </div>
                <div class="hig_10"></div>
                <div class="jygc">
                  <h2 class="jy">医院看病基本流程</h2>
                  <div class="hig_20"></div>
                  <div class="jy_1">门诊导诊</div>
                  <div class="jy_2">来院后进入医院三楼，大厅有导诊护士，将网上预约的信息（姓名、电话）等信息告知导
                    诊护士，导诊护士会第一时间帮您安排就诊事项</div>
                  <div class="jy_3"></div>
                  <div class="hig_20"></div>
                  <div class="jy_1">挂   号</div>
                  <div class="jy_2">　　初次就诊，挂号时需购买门诊病历本，这样医生才能为您书写病情、检查及治疗意见记录在上面，方便下次就诊时医生及时了解您的病情，避免重复检查。
                    注：医保病人请在挂号、缴费时出示医保卡</div>
                  <div class="jy_3"></div>
                  <div class="hig_20"></div>
                  <div class="jy_1">查视力、导医指引病人诊疗</div>
                  <div class="jy_2">　　找到相应的科室地址，候诊。医生诊断时，将情况说明，医生做完相应诊断后，一般会有相关检查。</div>
                  <div class="jy_3"></div>
                  <div class="hig_20"></div>
                  <div class="jy_1">候诊、医生诊疗</div>
                  <div class="jy_2" style=" text-align:center">找到相应的门诊地点候诊、医生诊断时将病情详细说明，医生做完相应诊断后一般会有相关检查</div>
                  <div class="jy_3"></div>
                  <div class="hig_20"></div>
                  <div class="jy_1">缴费</div>
                  <div class="jy_2" style=" text-align:center">携带医生开具的检查单，到收费处缴费</div>
                  <div class="jy_3"></div>
                  <div class="hig_20"></div>
                  <div class="jy_1">进一步检查化验、医生确诊</div>
                  <div class="jy_2" style=" text-align:center">拿好检查结果至就诊科室地点，医生确诊后会给予治疗方案(取药、住院、或手术治疗等)</div>
                  <div class="hig_20"></div>
                  <div class="jy_3"></div>
                  <div class="jy_1">再次缴费、接受治疗</div>
                  <div class="jy_2" style=" text-align:center">根据医生的治疗方案，携带医生开具的治疗方案，到收费处缴费接受治疗</div>
                  <div class="hig_20"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--6就医指南结束--> 
        <!--5荣誉资质开始-->
        <div class="xl_pe" id="tab_hj_5" style="display: none;">
          <div class="bt">
            <h2>荣誉资质<span> CERTTIFICAFE</span></h2>
          </div>
          <div class="about">
            <?php if(is_array($honor_list)): $i = 0; $__LIST__ = $honor_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hvo): $mod = ($i % 2 );++$i;?><div class="hj fl">
              <a href="<?php echo U('/news');?>/a/<?php echo ($hvo["id"]); ?>.html" target="_blank">
              <img src="<?php echo (get_cover($hvo["cover_id"],'path')); ?>" width="177" height="115" >
              </a>
              <p class="dt" style=" width:168px;overflow:hidden;white-space:nowrap;">
                  <a href="<?php echo U('/news');?>/a/<?php echo ($hvo["id"]); ?>.html" target="_blank"><?php echo ($hvo["title"]); ?></a>
              </p>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
        </div>
        <!--5荣誉资质结束--> 
        <!--4精品科室开始-->
        <div class="xl_pe" id="tab_hj_4" style="display: none;">
          <div class="bt">
            <h2>精品科室<span>Departments</span></h2>
          </div>
          <div class="about">
            <div class="jpke">
            
            <?php if(is_array($boutique)): $i = 0; $__LIST__ = $boutique;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$btvo): $mod = ($i % 2 );++$i;?><div class="
              <?php if(($mod == 0) ): ?>jpke_1 fl
              <?php else: ?>
              jpke_1 fr<?php endif; ?>
              ">
                <div class="jpks_img"><img src="<?php echo (get_cover($btvo["cover"],'path')); ?>" width="282" height="102"></div>
                <h6><a href="/<?php echo ($btvo["url"]); ?>" target="_blank"><?php echo ($btvo["title"]); ?></a></h6>
                <p>　　<?php echo (intro($btvo["description"],0,80)); ?><a href="/<?php echo ($btvo["url"]); ?>" target="_blank">[详细]</a></p>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
              
              <div style="height:50px;"></div>
            </div>
          </div>
        </div>
        <!--4精品科室结束--> 
        <!--3公益活动开始-->
        <div class="xl_pe" id="tab_hj_3" style="display: none;">
          <div class="bt">
            <h2>公益活动<span>Public welfare activities</span></h2>
          </div>
          <div class="about">
            <div class="jpke">
            
            <?php if(is_array($benefit)): $i = 0; $__LIST__ = $benefit;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bnvo): $mod = ($i % 2 );++$i;?><div class="
              <?php if(($mod == 0) ): ?>jpke_1 fl
              <?php else: ?>
              jpke_1 fr<?php endif; ?>
              ">
                <div class="jpks_img"><img src="<?php echo (get_cover($bnvo["cover"],'path')); ?>" width="282" height="102"></div>
                <h6><a href="/<?php echo ($bnvo["url"]); ?>" target="_blank"><?php echo ($bnvo["title"]); ?></a></h6>
                <p>　　<?php echo (intro($bnvo["description"],0,80)); ?><a href="/<?php echo ($bnvo["url"]); ?>" target="_blank">[详细]</a></p>
              </div><?php endforeach; endif; else: echo "" ;endif; ?>
              
              
              <div style="height:50px;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--齿轮结束-->
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
    <!--名家开始-->
    <div class="mingjia">
      <div class="mingtitle">
        <div style="
    width: 300px;
    float: left;
    margin-top: 0px;
    line-height: 20px;
    margin-bottom: 10px;
    margin-right: 40px;
">
          <h1>知名专家<span>SPECIALLISTS</span></h1>
        </div>
        <div style="
    width: 629px;
    float: left;
    margin-top: 0px;
    line-height: 20px;
    margin-bottom: 10px;
">
          <h1>前沿设备<span>ARMARIUM</span></h1>
        </div>
      </div>
      <div class="left-zm">
      
<div class="Ldoctor">
	<!--
    	描述：名医轮播样式
    -->
	<style type="text/css">
	
		.Ldoctor .am-control-nav{
			display: none;
		}
		.Ldoctor h2{
			margin-bottom: 0px;
		}
		.Ldoctor .am-slides li>div>div{
			margin-top: 10px;
		}
	</style>
<div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{}' >
          <ul class="am-slides">
          
            <?php if(is_array($r_specialist)): $i = 0; $__LIST__ = $r_specialist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rstvo): $mod = ($i % 2 );++$i;?><li href="<?php echo U('/specialist');?>/a/<?php echo ($rstvo["id"]); ?>.html">
              <div> <a href="<?php echo U('/specialist');?>/a/<?php echo ($rstvo["id"]); ?>.html"><img src="<?php echo (get_cover($rstvo["photo"],'path')); ?>" width="278" height="208" /></a>
              <div >
              <div class="mingren">
                  <h2 class="am-slider-title"><?php echo ($rstvo["title"]); ?><br>
                    <span><?php echo ($rstvo["situation"]); ?></span></h2>
                </div>
                <div class="mingyuyue"> <a href="<?php echo U('/specialist');?>/a/<?php echo ($rstvo["id"]); ?>.html" target="_blank" class="m1">查看详细</a><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn
" target="_blank" class="m2">立即预约</a> </div>
              </div>
              </div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                       
          </ul>
         </div>

        </div>
      </div>
      <div class="right-sb"> 
        <div class="Lshebei">
	<style type="text/css">
		.Lshebei .am-control-nav{
			display: none;
		}
		.Lshebei .am-slider-default{
			margin: 0px;
		}
	</style>
        <div data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{ slideshowSpeed: 3000, }' >
            <ul class="am-slides">
              <?php if(is_array($r_armarium)): $i = 0; $__LIST__ = $r_armarium;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ravo): $mod = ($i % 2 );++$i;?><li>
              <?php if($ravo["url"] == ''): ?><a href="<?php echo U('/armarium');?>/a/<?php echo ($ravo["id"]); ?>.html">
              <?php else: ?>
              <a href="<?php echo ($ravo["url"]); ?>"><?php endif; ?>
              <img src="<?php echo (get_cover($ravo["office_img"],'path')); ?>" alt="<?php echo ($ravo["title"]); ?>" width="618" height="254"/>
              </a>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
       </div>
        
      </div>
    </div>
    
    <!--名家结束-->
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
    
    <!--大选项卡开始-->
    <div id="notice1" class="bigx notice1">
      <div id="notice-tit1" class="notice-tit1">
        <ul>
          <li id="notice-tit-1" class="select"><a href="/jinshishoushu/femtosecond-laser/">飞秒全激光</a></li>
          <li id="notice-tit-2"><a href="/jinshishoushu/excimer-laser/">准分子激光</a></li>
          <li id="notice-tit-3"><a href="/shilijiaozheng/myopic/">近视眼</a></li>
          <li id="notice-tit-4"><a href="/shilijiaozheng/high-myopic/">高度近视</a></li>
        </ul>
      </div>
      <div id="notice-con1" class="notice-con1"> 
        <!--1pagebegin-->
        
        <div class="left-page mod" style="display:block;">
          <div class="left-list"> <img src="/Public/Home/i/tabs/1.jpg">
            <p> 重庆泰恒眼科医院作为国家卫生部视光学研究中心技术协作单位、重庆首家集医疗、教学、科研和防盲治盲为一体的的大型眼科全科医院。重庆泰恒眼科医院的....[<a href="">详细</a>]</p>
          </div>
          <div class="center-list">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
              <div class="am-list-news-bd">
                <ul class="am-list">
                  
                  <?php if(is_array($index_1)): $i = 0; $__LIST__ = array_slice($index_1,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i1vo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated"><a href="<?php echo U('/illness');?>/a/<?php echo ($i1vo["id"]); ?>.html" class="am-list-item-hd "><?php echo ($i1vo["title"]); ?></a><span class="am-list-date"><a href="">[<?php echo (date('m-d',$i1vo["create_time"])); ?>]</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
                <div style="text-align:center;"> <a href="/armarium/"><img src="/Public/Home/i/tabs/2.jpg"></a> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/tabs/3.jpg"></a> </div>
              </div>
            </div>
          </div>
          <div class="right-list"><a href="<?php echo U('/illness');?>/i/<?php echo ($index_1['intro']['id']); ?>.html" target="_blank"  title="<?php echo ($index_1['intro']['title']); ?>"><img src="<?php echo (get_cover($index_1['intro']['banner'],'path')); ?>" width="292" height="105"></a>	
            <p><?php echo (intro($index_1['intro']['banner_text'],0,80)); ?>[<a href="<?php echo U('/illness');?>/i/<?php echo ($index_1['intro']['id']); ?>.html" target="_blank">详细</a>]</p>
          </div>
        </div>
        <!--1pageend--> 
        <!--2pagebegin-->
        
        <div class="center-page-1 mod" style="display:none;">
          <div class="left-list"> <img src="/Public/Home/i/tabs/1.jpg">
            <p> 重庆泰恒眼科医院作为国家卫生部视光学研究中心技术协作单位、重庆首家集医疗、教学、科研和防盲治盲为一体的的大型眼科全科医院。重庆泰恒眼科医院的....[<a href="">详细</a>]</p>
          </div>
          <div class="center-list">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
              <div class="am-list-news-bd">
                <ul class="am-list">
                
                  <?php if(is_array($index_2)): $i = 0; $__LIST__ = array_slice($index_2,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i2vo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated"><a href="<?php echo U('/illness');?>/a/<?php echo ($i2vo["id"]); ?>.html" class="am-list-item-hd "><?php echo ($i2vo["title"]); ?></a><span class="am-list-date"><a href="">[<?php echo (date('m-d',$i2vo["create_time"])); ?>]</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
                <div style="text-align:center;"> <a href="/armarium/"><img src="/Public/Home/i/tabs/2.jpg"></a> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/tabs/3.jpg"></a> </div>
              </div>
            </div>
          </div>
          <div class="right-list"><a href="<?php echo U('/illness');?>/i/<?php echo ($index_2['intro']['id']); ?>.html" target="_blank"  title="<?php echo ($index_2['intro']['title']); ?>"><img src="<?php echo (get_cover($index_2['intro']['banner'],'path')); ?>" width="292" height="105"></a>	
            <p><?php echo (intro($index_2['intro']['banner_text'],0,80)); ?>[<a href="<?php echo U('/illness');?>/i/<?php echo ($index_2['intro']['id']); ?>.html" target="_blank">详细</a>]</p>
          </div>
        </div>
        <!--2pageend--> 
        <!--3pagebegin-->
        
        <div class="center-page-2 mod" style="display:none;">
          <div class="left-list"> <img src="/Public/Home/i/tabs/1.jpg">
            <p> 重庆泰恒眼科医院作为国家卫生部视光学研究中心技术协作单位、重庆首家集医疗、教学、科研和防盲治盲为一体的的大型眼科全科医院。重庆泰恒眼科医院的....[<a href="">详细</a>]</p>
          </div>
          <div class="center-list">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
              <div class="am-list-news-bd">
                <ul class="am-list">
                
                  <?php if(is_array($index_3)): $i = 0; $__LIST__ = array_slice($index_3,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i3vo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated"><a href="<?php echo U('/illness');?>/a/<?php echo ($i3vo["id"]); ?>.html" class="am-list-item-hd "><?php echo ($i3vo["title"]); ?></a><span class="am-list-date"><a href="">[<?php echo (date('m-d',$i3vo["create_time"])); ?>]</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
                <div style="text-align:center;"> <a href="/armarium/"><img src="/Public/Home/i/tabs/2.jpg"></a> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/tabs/3.jpg"></a> </div>
              </div>
            </div>
          </div>
          <div class="right-list"><a href="<?php echo U('/illness');?>/i/<?php echo ($index_3['intro']['id']); ?>.html" target="_blank"  title="<?php echo ($index_3['intro']['title']); ?>"><img src="<?php echo (get_cover($index_3['intro']['banner'],'path')); ?>" width="292" height="105"></a>	
            <p><?php echo (intro($index_3['intro']['banner_text'],0,80)); ?>[<a href="<?php echo U('/illness');?>/i/<?php echo ($index_3['intro']['id']); ?>.html" target="_blank">详细</a>]</p>
          </div>
        </div>
        <!--3pageend--> 
        <!--4pagebegin-->
        
        <div class="right-page mod" style="display:none;">
          <div class="left-list"> <img src="/Public/Home/i/tabs/1.jpg">
            <p> 重庆泰恒眼科医院作为国家卫生部视光学研究中心技术协作单位、重庆首家集医疗、教学、科研和防盲治盲为一体的的大型眼科全科医院。重庆泰恒眼科医院的....[<a href="">详细</a>]</p>
          </div>
          <div class="center-list">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default" >
              <div class="am-list-news-bd">
                <ul class="am-list">
                
                  <?php if(is_array($index_4)): $i = 0; $__LIST__ = array_slice($index_4,0,6,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$i4vo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated"><a href="<?php echo U('/illness');?>/a/<?php echo ($i4vo["id"]); ?>.html" class="am-list-item-hd "><?php echo ($i4vo["title"]); ?></a><span class="am-list-date"><a href="">[<?php echo (date('m-d',$i4vo["create_time"])); ?>]</a></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
                <div style="text-align:center;"> <a href="/armarium/"><img src="/Public/Home/i/tabs/2.jpg"></a> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/tabs/3.jpg"></a> </div>
              </div>
            </div>
          </div>
          <div class="right-list"><a href="<?php echo U('/illness');?>/i/<?php echo ($index_4['intro']['id']); ?>.html" target="_blank" title="<?php echo ($index_4['intro']['title']); ?>"><img src="<?php echo (get_cover($index_4['intro']['banner'],'path')); ?>" width="292" height="105"></a>	
            <p><?php echo (intro($index_4['intro']['banner_text'],0,80)); ?>[<a href="<?php echo U('/illness');?>/i/<?php echo ($index_4['intro']['id']); ?>.html" target="_blank">详细</a>]</p>
          </div>
        </div>
        <!--4pageend--> 
      </div>
    </div>
    <!--大选项卡结束--> 
    <!--小选项卡结束-->
    <div class="stabs"> 
      <!--1内容开始-->
      <div class="left-stabs">
        <ul>
          <li class="stabs-1"> <a href="/news/hospital-news/">医院新闻</a> </li>
          <li class="stabs-2 select"> <a href="/news/report/">媒体报道</a> </li>
        </ul>
        <!--neirong-->
        <div class="left-small-list">
          <div class="left-small-1" style="display: block;">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
              <div class="am-list-news-bd">
                <ul class="am-list">
                  <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-4 am-list-thumb">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($news_list[0]['id']); ?>.html" class="">
                    
                        <?php if(($news_list[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($news_list[0]['cover_id'],'path')); ?>" width="120" height="135">
                        <?php else: ?>
                        <img src="/Public/Home/i/tabs/s1.jpg" width="120" height="135"><?php endif; ?>
                    
                    </a>
                    </div>
                    <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($news_list[0]['id']); ?>.html" target="_blank" class=""><?php echo ($news_list[0]['title']); ?></a></h3>
                      <div class="am-list-item-text"><?php echo (intro($news_list[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($news_list[0]['id']); ?>.html" target="_blank">[详细]</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="am-list-news-bd">
              <ul class="am-list">
              
              <?php if(is_array($news_list)): $i = 0; $__LIST__ = array_slice($news_list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($nvo["id"]); ?>.html" target="_blank" class="am-list-item-hd "><?php echo ($nvo["title"]); ?></a>
                    <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($nvo["id"]); ?>.html" target="_blank">[详细]</a></span>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
              </ul>
            </div>
          </div>
          <div class="left-small-2" style="display: none;">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
              <div class="am-list-news-bd">
                <ul class="am-list">
                  <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-4 am-list-thumb">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($report_list[0]['id']); ?>.html" class="">
                    
                        <?php if(($report_list[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($report_list[0]['cover_id'],'path')); ?>" width="120" height="135">
                        <?php else: ?>
                        <img src="/Public/Home/i/tabs/s1.jpg" width="120" height="135"><?php endif; ?>
                    
                    </a> </div>
                    <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($report_list[0]['id']); ?>.html" target="_blank" class=""><?php echo ($report_list[0]['title']); ?></a></h3>
                      <div class="am-list-item-text"><?php echo (intro($report_list[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($report_list[0]['id']); ?>.html" target="_blank">[详细]</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="am-list-news-bd">
              <ul class="am-list">
              
              <?php if(is_array($report_list)): $i = 0; $__LIST__ = array_slice($report_list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($rvo["id"]); ?>.html" class="am-list-item-hd "><?php echo ($rvo["title"]); ?></a>
                    <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($rvo["id"]); ?>.html">[详细]</a></span>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--1内容结束--> 
      <!--2内容开始-->
      <div class="center-stabs center-small">
        <ul>
          <li class="stabs-3 select"> <a href="/news/case/">案例分享</a> </li>
          <li class="stabs-4"> <a href="/news/class/">专家答疑</a> </li>
        </ul>
        <div class="center-small-list">
          <div class="cneter-small-1" style="display: block;">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
              <div class="am-list-news-bd">
                <ul class="am-list">
                  <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-4 am-list-thumb">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($success_list[0]['id']); ?>.html" class="">
                    
                        <?php if(($success_list[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($success_list[0]['cover_id'],'path')); ?>" width="120" height="135">
                        <?php else: ?>
                        <img src="/Public/Home/i/tabs/s2.jpg" width="120" height="135"><?php endif; ?>
                    
                    </a>
                    </div>
                    <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($success_list[0]['id']); ?>.html" target="_blank" class=""><?php echo ($success_list[0]['title']); ?></a></h3>
                      <div class="am-list-item-text"><?php echo (intro($success_list[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($success_list[0]['id']); ?>.html" target="_blank">[详细]</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="am-list-news-bd">
              <ul class="am-list">
              
              <?php if(is_array($success_list)): $i = 0; $__LIST__ = array_slice($success_list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($svo["id"]); ?>.html" target="_blank" class="am-list-item-hd "><?php echo ($svo["title"]); ?></a>
                    <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($svo["id"]); ?>.html" target="_blank">[详细]</a></span>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
              </ul>
            </div>
          </div>
          <div class="cneter-small-2" style="display: none;">
            <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
              <div class="am-list-news-bd">
                <ul class="am-list">
                  <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                    <div class="am-u-sm-4 am-list-thumb">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($answer_list[0]['id']); ?>.html" class="">
                    
                        <?php if(($answer_list[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($answer_list[0]['cover_id'],'path')); ?>" width="120" height="135">
                        <?php else: ?>
                        <img src="/Public/Home/i/tabs/s1.jpg" width="120" height="135"><?php endif; ?>
                    
                    </a>
                    </div>
                    <div class=" am-u-sm-8 am-list-main">
                      <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($answer_list[0]['id']); ?>.html" target="_blank" class=""><?php echo ($answer_list[0]['title']); ?></a></h3>
                      <div class="am-list-item-text"><?php echo (intro($answer_list[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($answer_list[0]['id']); ?>.html" target="_blank">[详细]</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="am-list-news-bd">
              <ul class="am-list">
              
              <?php if(is_array($answer_list)): $i = 0; $__LIST__ = array_slice($answer_list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$avo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
                    <a href="<?php echo U('/news');?>/a/<?php echo ($avo["id"]); ?>.html" target="_blank" class="am-list-item-hd "><?php echo ($avo["title"]); ?></a>
                    <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($avo["id"]); ?>.html" target="_blank">[详细]</a></span>
              </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--2内容结束--> 
      <!--3内容开始-->
      <div class="right-stabs">
        <ul>
          <li class="stabs-5 select"> <a href="/video/">视频资讯</a> </li>
          <li class="stabs-6"> <a href="/news/welfare/">公益印记</a> </li>
        </ul>
        <div class="right-small-list">
          <div class="right-small-1" style="display:block;"><a href="<?php echo U('/video');?>/a/<?php echo ($video_index[0]['id']); ?>.html" target="_blank"><img src="<?php echo (get_cover($video_index[0]['cover_id'],'path')); ?>" width="288" height="202"></a>
            <h1 style="white-space:nowrap; overflow:hidden;"><a href="<?php echo U('/video');?>/a/<?php echo ($video_index[0]['id']); ?>.html" target="_blank"><?php echo ($video_index[0]['title']); ?></a></h1>
          </div>
          <div class="right-small-2" style="display:none;">
            <div class="right-small-2" style="display: block;">
              <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout" style="
    margin: 0;
">
                <div class="am-list-news-bd">
                  <ul class="am-list">
                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                      <div class="am-u-sm-4 am-list-thumb">
                      <a href="<?php echo U('/news');?>/a/<?php echo ($welfare_list[0]['id']); ?>.html" class="">
                    
                        <?php if(($welfare_list[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($welfare_list[0]['cover_id'],'path')); ?>" width="120" height="135">
                        <?php else: ?>
                        <img src="/Public/Home/i/tabs/s2.jpg" width="120" height="135"><?php endif; ?>
                    
                      </a>
                      </div>
                      <div class=" am-u-sm-8 am-list-main">
                        <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($welfare_list[0]['id']); ?>.html" target="_blank" class=""><?php echo ($welfare_list[0]['title']); ?></a></h3>
                        <div class="am-list-item-text"><?php echo (intro($welfare_list[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($welfare_list[0]['id']); ?>.html" target="_blank">[详细]</a></div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="am-list-news-bd">
                <ul class="am-list">
              
                  <?php if(is_array($welfare_list)): $i = 0; $__LIST__ = array_slice($welfare_list,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$wvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
                      <a href="<?php echo U('/news');?>/a/<?php echo ($wvo["id"]); ?>.html" target="_blank" class="am-list-item-hd "><?php echo ($wvo["title"]); ?></a>
                        <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($wvo["id"]); ?>.html" target="_blank">[详细]</a></span>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--3内容结束--> 
    </div>
    <!--小选项卡结束-->
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
    
    <!--友情链接开始-->
    <div class="friend">
      <div class="heibian">
        <ul>
          <li class="friend-title1 frienda"> <a  href="">监管机制</a> </li>
          <li class="friend-title2"> <a  href="">友情链接</a> </li>
        </ul>
      </div>
      <div class="friend-page1" style="display:block;">
        <div class="carousel-cont">
          <div class="trace">
            <div class="group">
              <div> <img src="/Public/Home/i/friend/1.png">
                <h3>中国红十字会</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/2.png">
                <h3>中国民族卫生协会</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/3.png">
                <h3>中国疾病防控中心</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/4.png">
                <h3>重庆市卫计委</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/5.png">
                <h3>中华医学会</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/6.png">
                <h3>中国医师协会</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/7.png">
                <h3>中国医师眼科分会</h3>
              </div>
              <div> <img src="/Public/Home/i/friend/8.png">
                <h3>温州医学院协作</h3>
              </div>
            </div>
          </div>
          <button class="start">Start</button>
          <button class="stop">Stop</button>
        </div>
        <script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script> 
        <script>
$(function(){
	var cont = $('.carousel-cont'),//容器
		trace = cont.find('.trace'),//轨道
		group = trace.find('.group');//内容

	var groupWidth = group.width();
	trace.css({
		height: group.height(),
		width : groupWidth * 2 + 10
	}).append( group.clone() );//复制另一份

	var groups = trace.find('.group');
	var marginLeft = 0;

	var _t;
	function startCarousel(){
		_t = setInterval(function(){
			groups.eq(0).css('marginLeft', marginLeft-= 2 );//向左移动
			if( Math.abs( marginLeft ) >= groupWidth )
		},60 );
	}

	window.startCarousel = startCarousel;
	window.stopCarousel = function(){
		clearInterval( _t );
	}

	$('.start').ready(function(){
		$(this).attr('disabled',true);
		startCarousel();
	});
	$('.stop').click(function(){
		$('.start').attr('disabled',false);
		stopCarousel();
	});

});
</script> 
      </div>
      <div class="friend-page2" style="display:none;">
        <div id="tab_friends_2" style="display: block;">
            <?php if(is_array($links)): $i = 0; $__LIST__ = $links;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lvo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($lvo["link"]); ?>" target="_blank"><?php echo ($lvo["title"]); ?></a>　<?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
      </div>
    </div>
    
    <!--友情链接结束--> 
    
  </div>
</div>
<hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
<!--主体结束--> 

<!--浮动挂件开始--->
<div class="zuoce">
<ul>
<li><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank" class="weixin1"><img src="/Public/Home/i/xuanfu/1.jpg" title="在线咨询"></a></li>
<li><a href="http://wpa.qq.com/msgrd?v=3&uin=707897525&site=%E9%87%8D%E5%BA%86%E6%B3%B0%E6%81%92%E7%9C%BC%E7%A7%91%E5%8C%BB%E9%99%A2&menu=yes" target="_blank" class="qq1"><img src="/Public/Home/i/xuanfu/2.jpg" title="点击QQ在线咨询"></a></li>
<li><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&amp;lng=cn" target="_blank" class="dianhua1"><img src="/Public/Home/i/xuanfu/3.jpg" title="点击免费接听电话"></a></li>
<li><img src="/Public/Home/i/xuanfu/4.jpg" title="关注有惊喜"></li>
</ul>
</div>


<div class="youce">
<div >
<div class="jstt"><a href="/jinshishoushu/femtosecond-laser/" target="_blank"><img src="/Public/Home/i/zxlt.jpg" class="jgewm"></a>
<img src="/Public/Home/i/xuanfu/5.jpg" class="jgtupian"></div>

<ul>
<li>
<a class="fanhui1" href="/"><img src="/Public/Home/i/xuanfu/a5.png" class="fanhui1">
<img src="/Public/Home/i/xuanfu/b5.png" class="fanhui2" title="返回首页"></a></li>
<li><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&amp;lng=cn" target="_blank" class="fanhui2">
<img src="/Public/Home/i/xuanfu/a4.png" class="fanhui1" title="免费电话">
<img src="/Public/Home/i/xuanfu/b4.png" class="fanhui2"></a>
</li>
<li><a class="fanhui3">
<img src="/Public/Home/i/xuanfu/a3.png" class="fanhui1"><img src="/Public/Home/i/xuanfu/b3.png" class="fanhui2"></a>
</li>
<li><a class="fanhui4">
<img src="/Public/Home/i/xuanfu/a2.png" class="fanhui1"><img src="/Public/Home/i/xuanfu/b2.png" class="fanhui2"></a>
</li>
</ul>
</div>
</div>
  <div data-am-widget="gotop" class="am-gotop am-gotop-fixed" >
  <div>
    <a href="#top" title="回到顶部">
        <span class="am-gotop-title">回到顶部</span>
          <img src="/Public/Home/i/xuanfu/a1.png" class="hddb1">
		  <img src="/Public/Home/i/xuanfu/b1.png" class="hddb2">
    </a>
  </div>
  </div>
  
  
<div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
  <div class="am-modal-dialog">
      <div class="am-modal-hd" style="
    text-align: left;
    color: #084E9B;
">微信
      <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close></a>
    </div>
    <div class="am-modal-bd">
      <img src="/Public/Home/i/alert_chatimg.jpg">
	    <p>关注泰恒微信 告别模糊 • 换个方式看世界</p>
    </div>
  </div>
</div>
<!--浮动挂件结束--->
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
$("#menuone1").css({"background-color":"#7FC9F1","color":"white"});
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