<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
<head>
  <title><?php echo ($Article_info["title"]); ?> - <?php echo C('WEB_SITE_TITLE');?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="<?php echo ($Article_info["description"]); ?>">
  <meta name="keywords" content="<?php echo ($Article_info["keywords"]); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" href="/Public/Home/css/amazeui.min.css">
  <link rel="stylesheet" href="/Public/Home/css/app.css">
  <link rel="stylesheet" href="/Public/Home/css/all.css">
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

<!--主体开始-->
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
</div>
 </div> 
  <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted" />
<div class="news-quanju">
	<div class="news-center">
			<div class="news-center-left">
			
			<div class="wz">
        	<p class="lbzx_bt">当前位置：<?php echo C('WEB_SITE_TITLE');?> ＞ <?php echo ($Category_info["title"]); ?></p>
            <div class="wzlb_1"><img src="/Public/Home/i/video/video.png" class="wzimg fl"><p>当前位置：<?php echo C('WEB_SITE_TITLE');?> ＞ <?php echo ($Category_info["title"]); ?></p></div>
            <!--中间部分开始-->
          <div class="so_c">
		  <div class="video-title"><?php echo ($Article_info["title"]); ?><img src="/Public/Home/i/video/3.png"></div>
		  <div class="video-img">
              <embed wmode="transparent" width="580" height="343" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" src="<?php echo (convert_html_to_swf($Article_info["video_url"])); ?>" allowfullscreen="true" quality="high" flashvars="isShowRelatedVideo=false&amp;showAd=0&amp;show_pre=1&amp;show_next=1&amp;isAutoPlay=false&amp;isDebug=false&amp;UserID=&amp;winType=interior&amp;playMovie=true&amp;MMControl=false&amp;MMout=false&amp;adss=0&amp;show_ce=0&amp;showsearch=0" play="true" loop="true" menu="true" />
          <div><h1 style="
    float: left;
    width: 50%;
    margin: 0;
    font-size: 17px;
    font-weight: 100;
">您可能还想看</h1><h1 style="
    float: left;
    width: 50%;
    margin: 0;
    font-size: 17px;
    font-weight: 100;    text-align: right;
"><a href="<?php echo U('/video');?>/">更多＞＞</a></h1></div>
		  <img src="/Public/Home/i/video/5.png"></div>
		  <div class="video-more">
            <div class="video-more-1"><a href="<?php echo U('/video');?>/a/<?php echo ($similar[0]['id']); ?>.html"><img src="<?php echo (get_cover($similar[0]['cover_id'],'path')); ?>" width="186" height="100"></a>
            <p><a href="#"><?php echo ($similar[0]['title']); ?></a></p></div>
            <div class="video-more-2"><a href="<?php echo U('/video');?>/a/<?php echo ($similar[1]['id']); ?>.html"><img src="<?php echo (get_cover($similar[1]['cover_id'],'path')); ?>" width="186" height="100"></a>
            <p><a href="#"><?php echo ($similar[1]['title']); ?></a></p></div>
            <div class="video-more-3"><a href="<?php echo U('/video');?>/a/<?php echo ($similar[2]['id']); ?>.html"><img src="<?php echo (get_cover($similar[2]['cover_id'],'path')); ?>" width="186" height="100"></a>
            <p><a href="#"><?php echo ($similar[2]['title']); ?></a></p></div>
          </div>
       	    
               
                
             
            <div class="so_nr video-center-1 video-page-1">
			<div class="video-span"><span>导读</span></div>
                <?php echo ($Article_info["content"]); ?>
            </div>
                
		        <!--文章内容下的按钮开始-->
		        <ul class="page-gu">
    <li> <a href="http://www.th023.com/special/brand/" target="_blank"><img src="/Public/Home/i/1.jpg"></a></li>
    <li> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&amp;lng=cn" target="_blank"><img src="/Public/Home/i/2.jpg" style="margin-right: -16px;"></a></li>
    <li> <a href="/armarium/"><img src="/Public/Home/i/3.jpg"></a></li>
    <li> <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank"><img src="/Public/Home/i/4.jpg"></a></li>
</ul>
				<!--文章内容下的按钮结束-->
                
                <div class="fy">
				    <?php if(($front != '')): ?><a href="<?php echo U('/video');?>/a/<?php echo ($front); ?>.html" class="fr">上一篇</a><?php endif; ?>
					<?php if(($after != '')): ?><a href="<?php echo U('/video');?>/a/<?php echo ($after); ?>.html" class="fl">下一篇</a><?php endif; ?>
                </div>
          </div>          
          <!--中间部分结束-->
        </div>
			<img src="<?php echo (get_cover($Category_info["video_banner"],'path')); ?>" width="648" height="190" style="margin-top:20px;">
			</div>
	
<!--右侧开始-->
<div class="news-center-right">

    <div class="news-center-right-1">
		<div class="quan-title"><h1>疾病导航<span>DISEASE GUIDELINES</span></h1></div>
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
    
    <div class="news-center-right-2">
		<div class="quan-title"><h1>推荐技术<span>HOT TECHNOLOGY</span></h1></div>
        <div class="sop_1">
    <ul>
<li class="sopli1 sopli">
	 <img src="/Public/Home/i/news/r1.png"><span><a href="">U视个性化飞秒全激光梦幻组合 </a></span></li>
<li class="sopli2 sopli"><img src="/Public/Home/i/news/r2.png"><span> <a href="">WaveLight鹰视EX500准分子激光</a> </span></li>
<li class="sopli3 sopli"><img src="/Public/Home/i/news/r3.png"><span><a href="">WaveLight鹰视FS200飞秒激光</a> </span></li>
<li class="sopli4 sopli"><img src="/Public/Home/i/news/r4.png"><span><a href="">CX2000玻璃体切割仪</a></span></li>
<li class="sopli5 sopli sopclass"><img src="/Public/Home/i/news/r5.png"><span><a href="">Signature超声乳化系统</a>  </span></li>
<li class="sopli6 sopli"><img src="/Public/Home/i/news/r6.png"><span><a href="">CX2000玻璃体切割仪</a></span></li>
<li class="sopli7 sopli"><img src="/Public/Home/i/news/r7.png"><span><a href="">CX2000玻璃体切割仪</a></span></li>

    </ul>
  </div>
		   
</div>

    <div class="news-center-right-3">
    <div class="quan-title"><h1>知名专家<span>SPECIALLISTS</span></h1></div>
	<div class="left-zm">
      <div data-am-widget="slider" class="am-slider am-slider-d1 am-no-layout" data-am-slider="{&quot;controlNav&quot;:false}">
        <div class="am-viewport" style="overflow: hidden; position: relative;">
        <ul class="am-slides" style="width: 1200%; transition-duration: 0.6s; transform: translate3d(-606px, 0px, 0px);">
          <?php if(is_array($famous_specialist)): $i = 0; $__LIST__ = $famous_specialist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fsvo): $mod = ($i % 2 );++$i;?><li class="clone" aria-hidden="true" style="width: 303px; float: left; display: block;"> <a href="<?php echo U('/specialist');?>/a/<?php echo ($fsvo["id"]); ?>.html" target="_blank"><img src="<?php echo (get_cover($fsvo["photo"],'path')); ?>" width="278" height="208" draggable="false"></a>
              <div class="am-slider-desc">
                <div class="mingren">
                <h2 class="am-slider-title"><?php echo ($fsvo["title"]); ?><br><span><?php echo ($fsvo["situation"]); ?></span></h2>
                </div>
                <div class="mingyuyue">
                <a href="<?php echo U('/specialist');?>/a/<?php echo ($fsvo["id"]); ?>.html" target="_blank" class="m1">点击详细</a><a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank" class="m2">立即预约</a>
                </div>
              </div>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
          
        </ul>
        </div>
        <ul class="am-direction-nav"><li class="am-nav-prev"><a class="am-prev" href="#"> </a></li><li class="am-nav-next"><a class="am-next" href="#"> </a></li></ul>
        
      </div>
	</div>		
</div>

          <div class="quan-title " style="
  margin-top: 20px;
"><h1>案例分享<span>SPECIALLISTS</span></h1></div>
      <div class="news-center-right-4">
         
         <div class="left-small-list">
     <div class="left-small-1" style="display: block;">
    <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
<div class="am-list-news-bd">
<ul class="am-list">
    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left" style="border-top: none;padding: 10px 0 10px 0;">
      <div class="am-u-sm-4 am-list-thumb">
        <a href="<?php echo U('/news');?>/a/<?php echo ($share_case[0]['id']); ?>.html" target="_blank" class="">
            <?php if(($share_case[0]['cover_id'] != 0)): ?><img src="<?php echo (get_cover($share_case[0]['cover_id'],'path')); ?>" width="120" height="135">
            <?php else: ?>
                <img src="/Public/Home/i/news/anlitu.png" width="120" height="135"><?php endif; ?>
        </a>
      </div>
      <div class=" am-u-sm-8 am-list-main">
          <h3 class="am-list-item-hd"><a href="<?php echo U('/news');?>/a/<?php echo ($share_case[0]['id']); ?>.html" target="_blank" class=""><?php echo ($share_case[0]['title']); ?></a></h3>

          <div class="am-list-item-text"><?php echo (intro($share_case[0]['description'],0,45)); ?><a href="<?php echo U('/news');?>/a/<?php echo ($share_case[0]['id']); ?>.html" target="_blank">[详细]</a></div>

      </div>
    </li>  
  </ul>
</div>

  </div>
    <div class="am-list-news-bd">
<ul class="am-list">
  <?php if(is_array($share_case)): $i = 0; $__LIST__ = array_slice($share_case,1,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$scvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated am-list1">
          <a href="<?php echo U('/news');?>/a/<?php echo ($scvo["id"]); ?>.html" target="_blank" class="am-list-item-hd "><?php echo ($scvo["title"]); ?></a>
          <span class="am-list-date"><a href="<?php echo U('/news');?>/a/<?php echo ($scvo["id"]); ?>.html" target="_blank">[详细]</a></span>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul>
  </div>

</div>

</div>
</div>

    	   <div class="gh_1">
        <h2>温馨提示</h2>
        <span>　　       为响应医改号召，我院开通就医绿色通道，提供网上咨询、预约挂号服务，预约成功后到医院三楼大厅导医台，报上预约信息（姓名、电话、预约专家），导医会第一时间安排您的就诊事项！
		</span> 
		
		</div>
		 <div class="gh_2">
        <h2>023-68884888</h2>
        <span>24小时眼健康咨询热线</span>
        <div class="ghimg"><img src="/Public/Home/i/news/zx.png" border="0" usemap="#Map2">
          <map name="Map2" id="Map2">
            <area shape="rect" coords="2,3,59,73" href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">
            <area shape="rect" coords="95,3,158,75" href="http://wpa.qq.com/msgrd?v=3&uin=707897525&site=%E9%87%8D%E5%BA%86%E6%B3%B0%E6%81%92%E7%9C%BC%E7%A7%91%E5%8C%BB%E9%99%A2&menu=yes" target="_blank">
            <area shape="rect" coords="192,2,246,74" href="/pages/37.html" target="_blank">
          </map>
        </div>
      </div>
    
</div>
<!--右侧结束-->

</div>
</div>
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

<hr data-am-widget="divider" style="" class="am-divider am-divider-dotted am-no-layout">

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