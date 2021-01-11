<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js">
  
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
      <?php echo ($Topic_info["title"]); ?> - <?php echo C('WEB_SITE_TITLE');?>
    </title>
    <meta name="keywords" content="<?php echo ($Article_info["keywords"]); ?>">
    <meta name="description" content="<?php echo ($Article_info["description"]); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/Public/Home/css/amazeui.min.css">
    <link rel="stylesheet" href="/Public/Home/css/app.css">
    <link rel="stylesheet" href="/Public/Home/css/shouwei.css">
    <link rel="stylesheet" href="/Public/Home/css/all.css">
    <link rel="stylesheet" href="/Public/Home/css/luxian.css">
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
    <!--切换结束-->
    <!--主体开始-->
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted am-no-layout">
    <div class="contentt proiectl-center" style="height: auto;">
      <div class="one">
        <p style="margin-bottom: -7px;">
          当前位置：<?php echo C('WEB_SITE_TITLE');?> &gt; <?php echo ($Office_info["title"]); ?> > <?php echo ($Illness_info["title"]); ?> > 疾病简介
        </p>
        <div class="exzj texzj">
          <div class="exspan-l">
            TAIHENG
          </div>
          <div class="exspan-2">
            ILLNESS INTRO
          </div>
        </div>
        <div class="exzj_1" style="
        height: auto!important;
        ">
          <div class="exspan_2">
            项目简介
          </div>
          <div class="exspan_1">
            〉〉
          </div>
          <img src="/Public/Home/i/english.png" style="float: left;margin-top: 7px;">
        </div>
<style type="text/css">
.bgtp {
    background: url(<?php echo (get_cover($Topic_info["banner"],'path')); ?>);
}
</style>
        <div class="bgtp">
          <div>
            <h1>
              <?php echo ($Illness_info["title"]); ?>
              <span>
                <?php echo ($Illness_info["eng_title1"]); ?>
              </span>
            </h1>
            <div class="intro_intro">
              <?php echo ($Topic_info["banner_text"]); ?>
            </div>
            <div class="bgtptp">
              <div class="bgtptp-1 bgtptpyin">
                <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">
                  <img src="/Public/Home/i/tubiao/11.png">
                </a>
              </div>
              <div class="bgtptp-2 bgtptpyin">
                <a href="http://lvt.zoosnet.net/LR/Chatpre.aspx?id=LVT74007147&lng=cn" target="_blank">
                  <img src="/Public/Home/i/tubiao/22.png">
                </a>
              </div>
              <div class="bgtptp-3 bgtptpyin">
                <!-- JiaThis Button BEGIN -->
                <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt" target="_blank"><img src="/Public/Home/i/tubiao/33.png"></a>
				<script type="text/javascript" src="http://v3.jiathis.com/code_mini/jia.js" charset="utf-8"></script>
                <!-- JiaThis Button END -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="chi-main inner mt30">
        <div class="show-obj-l">
          <div class="project-right">
            <div>
              <h1>
                眼健康咨询热线
              </h1>
              <img src="/Public/Home/i/p1.png">
              <h1>
                更多疾病 More illness
              </h1>
              <p>
                <a href="http://www.th023.com/shilijiaozheng/hyperopia/">
                  远视眼
                </a>
              </p>
              <p>
                <a href="http://www.th023.com/shilijiaozheng/astigmatism/">
                  散 光
                </a>
              </p>
              <p>
                <a href="http://www.th023.com/shilijiaozheng/swiveleye/">
                  斜 视
                </a>
              </p>
              <p>
                <a href="http://www.th023.com/shilijiaozheng/amblyopia/">
                  弱 视
                </a>
              </p>
              <p>
                <a href="http://www.th023.com/shilijiaozheng/dgfdghdf/">
                  老视眼
                </a>
              </p>
            </div>
          </div>
          
          <?php if(($Topic_info["item1"] != '') AND ($Topic_info["content1"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item1"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content1"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          <?php if(($Topic_info["item2"] != '') AND ($Topic_info["content2"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item2"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content2"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          <?php if(($Topic_info["item3"] != '') AND ($Topic_info["content3"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item3"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content3"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          <?php if(($Topic_info["item4"] != '') AND ($Topic_info["content4"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item4"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content4"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          <?php if(($Topic_info["item5"] != '') AND ($Topic_info["content5"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item5"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content5"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          <?php if(($Topic_info["item6"] != '') AND ($Topic_info["content6"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item6"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content6"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          
          
          <dl class="chi-show-serv-dl item" id="lookout">
            <dt>
              <div class="projl-1">
                <h1>
                  <span>
                    推荐专家
                  </span>
                </h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <div class="chi-pos-zj chi-pos-zj2 mt30" style="

              ">
                <ul class="chi-pos-zj-ul">
                
                <?php if(is_array($specialists)): $i = 0; $__LIST__ = $specialists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i;?><li>
                    <div class="thumb">
                      <a href="<?php echo U('/specialist');?>/a/<?php echo ($svo["id"]); ?>.html" target="_blank">
                        <img src="<?php echo (get_cover($svo["blank_photo"],'path')); ?>">
                      </a>
                    </div>
                    <div class="name">
                      <?php echo ($svo["title"]); ?>
                    </div>
                    <div class="title">
                        <?php echo ($svo["honor"]); ?>
                    </div>
                  </li><?php endforeach; endif; else: echo "" ;endif; ?>
                  
                </ul>
                <div class="clear">
                </div>
              </div>
            </dd>
          </dl>
          
          <?php if(($Topic_info["item7"] != '') AND ($Topic_info["content7"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item7"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content7"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          <?php if(($Topic_info["item8"] != '') AND ($Topic_info["content8"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item8"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content8"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          <?php if(($Topic_info["item9"] != '') AND ($Topic_info["content9"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item9"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content9"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          <?php if(($Topic_info["item10"] != '') AND ($Topic_info["content10"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item10"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content10"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          <?php if(($Topic_info["item11"] != '') AND ($Topic_info["content11"] != '') ): ?><dl class="chi-show-serv-dl item">
            <dt>
              <div class="projl-1">
                <h1><span><?php echo ($Topic_info["item11"]); ?></span></h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <?php echo ($Topic_info["content11"]); ?>
            </dd>
          </dl><?php endif; ?>
          
          <dl class="chi-show-serv-dl item" id="case">
            <dt>
              <div class="projl-1">
                <h1>
                  <span>
                    相关文章
                  </span>
                </h1>
                <img src="/Public/Home/i/01.png">
              </div>
            </dt>
            <dd>
              <div class="jbjj-foor">
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                  <div class="am-list-news-bd">
                    <ul class="am-list">
                    
                    <?php if(is_array($bottom_latest)): $i = 0; $__LIST__ = array_slice($bottom_latest,0,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated">
                        <a href="/illness/a/<?php echo ($blvo["id"]); ?>.html" target="_blank" class="am-list-item-hd ">
                          <?php echo ($blvo["title"]); ?>
                        </a>
                        <span class="am-list-date">
                          <a href="">
                            [<?php echo (date('m-d',$blvo["create_time"])); ?>]
                          </a>
                        </span>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </ul>
                  </div>
                </div>
                <div data-am-widget="list_news" class="am-list-news am-list-news-default am-no-layout">
                  <div class="am-list-news-bd">
                    <ul class="am-list">
                      
                     <?php if(is_array($bottom_latest)): $i = 0; $__LIST__ = array_slice($bottom_latest,4,4,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$blvo): $mod = ($i % 2 );++$i;?><li class="am-g am-list-item-dated">
                        <a href="/illness/a/<?php echo ($blvo["id"]); ?>.html" target="_blank" class="am-list-item-hd ">
                          <?php echo ($blvo["title"]); ?>
                        </a>
                        <span class="am-list-date">
                          <a href="">
                            [<?php echo (date('m-d',$blvo["create_time"])); ?>]
                          </a>
                        </span>
                      </li><?php endforeach; endif; else: echo "" ;endif; ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </dd>
          </dl>
          <div class="bottom">
            <ul>
              <li>
                <a href="#">
                  <img src="/Public/Home/i/luxian/b01.jpg">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/Public/Home/i/luxian/b02.jpg">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/Public/Home/i/luxian/b03.jpg">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/Public/Home/i/luxian/b04.jpg">
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--结束开始-->
    <hr data-am-widget="divider" style="" class="am-divider am-divider-dotted am-no-layout">
    <!--footer开始-->
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
    <!--footer结束-->
    <!--[if lt IE 9]>
      <script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js">
      </script>
      <script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js">
      </script>
      <script src="/Public/Home/js/amazeui.ie8polyfill.min.js">
      </script>
    <![endif]-->
    <!--[if (gte IE 9)|!(IE)]>
      <!-->
      <script src="/Public/Home/js/jquery.min.js">
      </script>
    <!--<![endif]-->
    <script src="/Public/Home/js/amazeui.min.js">
    </script>
    <script src="/Public/Home/js/all.js">
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