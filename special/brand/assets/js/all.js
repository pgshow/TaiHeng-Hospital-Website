/*---$(document).reday(function(){
-首页菜单滑过事件----*/
	$(".menu > ul > li").mouseenter(function(){
		$("#ul1").css("display","none");
		$(this).children("ul").css("display","block");
		
	});
	$(".menu").mouseleave(function(){
		$("#ul1").css("display","none");
	});	
	$(".menu > ul > li").mouseenter(function(){
		$("#ul2").css("display","none");
		$(this).children("ul").css("display","block");
		
	});
	$(".menu").mouseleave(function(){
		$("#ul2").css("display","none");
	});	
	$("#sykk1").mouseenter(function(){
		$("#sykk").css("display","block");
		
	});
	$("#sykk1").mouseleave(function(){
		$("#sykk").css("display","none");
	});	
/**

$("#ul1").hover(
function(){

	$("#ul1").show();
	
},
function(){
	$("#ul1").hide();
}
);
$("#link").hover(
function(){

	$("#ul1").show();
	
},
function(){

}
);

$(".menu-list").hover(
function(){
	$("#ul1").hide();
},
function(){
	
}
);

*/

/*-----------彩色图标鼠标滑过事件--
//彩色图标js
$("#gallery-1").hover(
function(){
	$("#gallery-1").addClass("gallery-1a");
	$("#gallery-1").removeClass("gallery-1");	
},
function(){
   $("#gallery-1").addClass("gallery-1");
	$("#gallery-1").removeClass("gallery-1a");
}
);

$("#gallery-2").hover(
function(){
	$("#gallery-2").addClass("gallery-2a");
	$("#gallery-2").removeClass("gallery-2");	
},
function(){
   $("#gallery-2").addClass("gallery-2");
	$("#gallery-2").removeClass("gallery-2a");
}
);
$("#gallery-3").hover(
function(){
	$("#gallery-3").addClass("gallery-3a");
	$("#gallery-3").removeClass("gallery-3");	
},
function(){
   $("#gallery-3").addClass("gallery-3");
	$("#gallery-3").removeClass("gallery-3a");
}
);
$("#gallery-4").hover(
function(){
	$("#gallery-4").addClass("gallery-4a");
	$("#gallery-4").removeClass("gallery-4");	
},
function(){
   $("#gallery-4").addClass("gallery-4");
	$("#gallery-4").removeClass("gallery-4a");
}
);
$("#gallery-5").hover(
function(){
	$("#gallery-5").addClass("gallery-5a");
	$("#gallery-5").removeClass("gallery-5");	
},
function(){
   $("#gallery-5").addClass("gallery-5");
	$("#gallery-5").removeClass("gallery-5a");
}
);
$("#gallery-6").hover(
function(){
	$("#gallery-6").addClass("gallery-6a");
	$("#gallery-6").removeClass("gallery-6");	
},
function(){
   $("#gallery-6").addClass("gallery-6");
	$("#gallery-6").removeClass("gallery-6a");
}
);


$("#gallery-7").hover(
function(){
	$("#gallery-7").addClass("gallery-7a");
	$("#gallery-7").removeClass("gallery-7");	
},
function(){
   $("#gallery-7").addClass("gallery-7");
	$("#gallery-7").removeClass("gallery-7a");
}
);
$("#gallery-8").hover(
function(){
	$("#gallery-8").addClass("gallery-8a");
	$("#gallery-8").removeClass("gallery-8");	
},
function(){
   $("#gallery-8").addClass("gallery-8");
	$("#gallery-8").removeClass("gallery-8a");
}
);
$("#gallery-9").hover(
function(){
	$("#gallery-9").addClass("gallery-9a");
	$("#gallery-9").removeClass("gallery-9");	
},
function(){
   $("#gallery-9").addClass("gallery-9");
	$("#gallery-9").removeClass("gallery-9a");
}
);
$("#gallery-10").hover(
function(){
	$("#gallery-10").addClass("gallery-10a");
	$("#gallery-10").removeClass("gallery-10");	
},
function(){
   $("#gallery-10").addClass("gallery-10");
	$("#gallery-10").removeClass("gallery-10a");
}
);
$("#gallery-11").hover(
function(){
	$("#gallery-11").addClass("gallery-11a");
	$("#gallery-11").removeClass("gallery-11");	
},
function(){
   $("#gallery-11").addClass("gallery-11");
	$("#gallery-11").removeClass("gallery-11a");
}
);
$("#gallery-12").hover(
function(){
	$("#gallery-12").addClass("gallery-12a");
	$("#gallery-12").removeClass("gallery-12");	
},
function(){
   $("#gallery-12").addClass("gallery-12");
	$("#gallery-12").removeClass("gallery-12a");
}
);
$("#gallery-13").hover(
function(){
	$("#gallery-13").addClass("gallery-13a");
	$("#gallery-13").removeClass("gallery-13");	
},
function(){
   $("#gallery-13").addClass("gallery-13");
	$("#gallery-13").removeClass("gallery-13a");
}
);
$("#gallery-14").hover(
function(){
	$("#gallery-14").addClass("gallery-14a");
	$("#gallery-14").removeClass("gallery-14");	
},
function(){
   $("#gallery-14").addClass("gallery-14");
	$("#gallery-14").removeClass("gallery-14a");
}
);
$("#gallery-15").hover(
function(){
	$("#gallery-15").addClass("gallery-15a");
	$("#gallery-15").removeClass("gallery-15");	
},
function(){
   $("#gallery-15").addClass("gallery-15");
	$("#gallery-15").removeClass("gallery-15a");
}
);
----------*/
//彩色图标结束
//大图标开始
//$(".qhlist-1").hover(
	//	function(){
	//		$(".qhlist-1").addClass("qie1");
//
//	    },
//function(){
	//		$(".qhlist-1").removeClass("qie1a");
	//	}
//);

$(".qhlist-1").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-1").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-1").addClass("lanpage");
			
	    },
	function(){
			
		}
);

$(".qhlist-2").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-2").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-2").addClass("lanpage");
			
	    },
	function(){
			
		}
);

$(".qhlist-3").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-3").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-3").addClass("lanpage");
			
	    },
	function(){
			
		}
);

$(".qhlist-4").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-4").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-4").addClass("lanpage");
			
	    },
	function(){
			
		}
);

$(".qhlist-5").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-5").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-5").addClass("lanpage");
			
	    },
	function(){
			
		}
);

$(".qhlist-6").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-6").addClass("lanq");
			$(".qhlist-6").addClass("lanq1");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-6").addClass("lanpage");
			
	    },
	function(){
			
		}
);
$(".qhlist-7").hover(
		function(){
			$(".qh>ul>li>a").removeClass("lanq");
			$(".qhlist-7").addClass("lanq");
			$(".qiehuan-page>div").removeClass("lanpage");
			$("#bet-7").addClass("lanpage");
			
	    },
	function(){
			
		}
);




//大图标结束
$("#chas2").hover(
function(){
	$("#tab_chas_2").show();
	$("#chas2").addClass("select");
	$("#chas1").removeClass("select");	
	$("#tab_chas_1").hide();
},
function(){
    
}
);
$("#chas1").hover(
	function(){
		$("#tab_chas_1").show();
		$("#chas1").addClass("select");
		$("#chas2").removeClass("select");
		$("#tab_chas_2").hide();
	},
	function(){

	}
);





$("#notice-tit-1").hover(
function(){
	$(".left-page").show();
	$("#notice-tit-1").addClass("select");
	$("#notice-tit-2").removeClass("select");
	$("#notice-tit-3").removeClass("select");
	$("#notice-tit-4").removeClass("select");
	$(".center-page-1").hide();
	$(".center-page-2").hide();
	$(".right-page").hide();
},
function(){

}
);

$("#notice-tit-2").hover(
function(){
	$(".center-page-1").show();
	$("#notice-tit-2").addClass("select");
	$("#notice-tit-1").removeClass("select");
	$("#notice-tit-3").removeClass("select");
	$("#notice-tit-4").removeClass("select");
	$(".left-page").hide();
	$(".center-page-2").hide();
	$(".right-page").hide();

},
function(){

}
);
$("#notice-tit-3").hover(
function(){
	$(".center-page-2").show();
	$("#notice-tit-3").addClass("select");
	$("#notice-tit-1").removeClass("select");
	$("#notice-tit-2").removeClass("select");
	$("#notice-tit-4").removeClass("select");
	$(".left-page").hide();
	$(".center-page-1").hide();
	$(".right-page").hide();
},
function(){

}
);

$("#notice-tit-4").hover(
function(){
	$(".right-page").show();
	$("#notice-tit-4").addClass("select");
	$("#notice-tit-1").removeClass("select");
	$("#notice-tit-2").removeClass("select");
	$("#notice-tit-3").removeClass("select");
	$(".left-page").hide();
	$(".center-page-1").hide();
	$(".center-page-2").hide();
},
function(){

}
);

$(".stabs-1").hover(
function(){
	$(".left-small-1").show();
	$(".stabs-1").addClass("select");
	$(".stabs-2").removeClass("select");	
	$(".left-small-2").hide();
},
function(){

}
);
$(".stabs-2").hover(
function(){
	$(".left-small-2").show();
	$(".stabs-2").addClass("select");
	$(".stabs-1").removeClass("select");	
	$(".left-small-1").hide();
},
function(){

}
);


$(".stabs-3").hover(
function(){
	$(".cneter-small-1").show();
	$(".stabs-3").addClass("select");
	$(".stabs-4").removeClass("select");	
	$(".cneter-small-2").hide();
},
function(){

}
);
$(".stabs-4").hover(
function(){
	$(".cneter-small-2").show();
	$(".stabs-4").addClass("select");
	$(".stabs-3").removeClass("select");	
	$(".cneter-small-1").hide();
},
function(){

}
);


$(".stabs-5").hover(
function(){
	$(".right-small-1").show();
	$(".stabs-5").addClass("select");
	$(".stabs-6").removeClass("select");	
	$(".right-small-2").hide();
},
function(){

}
);
$(".stabs-6").hover(
function(){
	$(".right-small-2").show();
	$(".stabs-6").addClass("select");
	$(".stabs-5").removeClass("select");	
	$(".right-small-1").hide();
},
function(){

}
);
//齿轮开始
$("#hj1").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj1").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_1").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);
$("#hj2").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj2").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_2").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);
$("#hj3").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj3").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_3").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);

$("#hj4").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj4").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_4").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);
$("#hj5").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj5").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_5").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);
$("#hj6").hover(
		function(){
			
			$(".letf_top_1>ul>li").removeClass("chilun");	
			$("#hj6").addClass("chilun");
			$(".right>div").removeClass("chilunpage");
			$("#tab_hj_6").addClass("chilunpage");
		},
		function(){
          $(".letf_top_1>ul>li>a").removeClass("chilun");
		}
);








//齿轮结束

//友情链接开始
$(".friend-title1").hover(
		function(){
			$(".friend-page2").hide();
			$(".friend-page1").show();
			$(".friend>ul>li").removeClass("frienda");	
			$(".friend-title1").addClass("frienda");
			
		},
		function(){

		}
);

$(".friend-title2").hover(
		function(){
			$(".friend-page1").hide();
			$(".friend-page2").show();
			$(".friend>ul>li").removeClass("frienda");	
			$(".friend-title2").addClass("frienda");
			
		},
		function(){

		}
);
//友情链接结束



//news开始

$(".sopli1").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli1").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli2").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli2").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli3").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli3").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli4").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli4").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli5").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli5").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli6").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli6").addClass("sopclass");
	},
	function(){
		
	}
);
$(".sopli7").hover(
	function(){
		$(".sopli").removeClass("sopclass");
		$(".sopli7").addClass("sopclass");
	},
	function(){
		
	}
);

//news结束
//菜单点击事件开始

$("#gallery-1").click( 
	function () { 
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$(".tu-menu-1").addClass("tu-menu-show");
	$(".tu-menu-1").addClass("am-animation-slide-top");
	$(".icon-ss-1").addClass("icon-ss-show");
	$(".icon-ss-1").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);

$("#gallery-2").click( 
	function () { 
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$(".tu-menu-2").addClass("tu-menu-show");
	$(".tu-menu-2").addClass("am-animation-slide-top");
	$(".icon-ss-2").addClass("icon-ss-show");
	$(".icon-ss-2").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
$("#gallery-3").click( 
	function () { 
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".tu-menu-3").addClass("tu-menu-show");
	$(".tu-menu-3").addClass("am-animation-slide-top");
	$(".icon-ss-3").addClass("icon-ss-show");
	$(".icon-ss-3").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
$("#gallery-4").click( 
	function () { 
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".tu-menu-4").addClass("tu-menu-show");
	$(".tu-menu-4").addClass("am-animation-slide-top");
	$(".icon-ss-4").addClass("icon-ss-show");
	$(".icon-ss-4").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
	$("#gallery-5").click( 
	function () { 
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".tu-menu-5").addClass("tu-menu-show");
	$(".tu-menu-5").addClass("am-animation-slide-top");
	$(".icon-ss-5").addClass("icon-ss-show");
	$(".icon-ss-5").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
	$("#gallery-6").click( 
	function () { 
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".tu-menu-6").addClass("tu-menu-show");
	$(".tu-menu-6").addClass("am-animation-slide-top");
	$(".icon-ss-6").addClass("icon-ss-show");
	$(".icon-ss-6").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
	$("#gallery-7").click( 
	function () { 
	$(".icon-ss-all>.icon-ss").removeClass("am-animation-slide-right");
	$(".icon-ss-all>.icon-ss").removeClass("icon-ss-show");
	$("#tu-menu>ul>li").removeClass("tu-menu-show");
	$(".tu-menu-7").addClass("tu-menu-show");
	$(".tu-menu-7").addClass("am-animation-slide-top");
	$(".icon-ss-7").addClass("icon-ss-show");
	$(".icon-ss-7").addClass("am-animation-slide-right");
	$(".siliderie").hide(); 	
	}	
	);
//菜单点击事件结束

$(".fangda").click(function(){
  $(".so_c").css("font-size","16px");
});
$(".suoxiao").click(function(){
  $(".so_c").css("font-size","12px");
});

$(".topic-title-5").hover(
function(){
	$(".topic-title>div").removeClass("topic-title-1");	
	$(".topic-titleid>div").removeClass("topice-center-show");	
	$(".topic-title-5").addClass("topic-title-1");
	$(".topice-centerid1").addClass("topice-center-show");
},
function(){
  
}
);
$(".topic-title-22").hover(
function(){
	$(".topic-title>div").removeClass("topic-title-1");	
	$(".topic-titleid>div").removeClass("topice-center-show");	
	$(".topic-title-22").addClass("topic-title-1");
	$(".topice-centerid2").addClass("topice-center-show");
},
function(){
  
}
);
$(".topic-title-33").hover(
function(){
	$(".topic-title>div").removeClass("topic-title-1");	
	$(".topic-titleid>div").removeClass("topice-center-show");	
	$(".topic-title-33").addClass("topic-title-1");
	$(".topice-centerid3").addClass("topice-center-show");
},
function(){
  
}
);






$(".bgtptp-1").hover(
function(){
	$(".bgtptp-1").removeClass("bgtptpyin");	
},
function(){
   $(".bgtptp-1").addClass("bgtptpyin");
}
);
$(".bgtptp-2").hover(
function(){
	$(".bgtptp-2").removeClass("bgtptpyin");	
},
function(){
   $(".bgtptp-2").addClass("bgtptpyin");
}
);
$(".bgtptp-3").hover(
function(){
	$(".bgtptp-3").removeClass("bgtptpyin");	
},
function(){
   $(".bgtptp-3").addClass("bgtptpyin");
}
);




$(".data-tab-panel-0").click( function () { 
		$(".tabs-nav>li").removeClass("am-active");
		$(".data-tab-panel-0").addClass("am-active");
		$(".data-tab-panel-0").addClass("am-active");
		$(".am-tabs-bd>div").removeClass("am-active");
		$(".am-tab-panel").addClass("am-active");		
	}
);

$(".data-tab-panel-1").click( function () { 
		$(".tabs-nav>li").removeClass("am-active");
		$(".data-tab-panel-1").addClass("am-active");
		$(".data-tab-panel-1").addClass("am-active");
		$(".am-tabs-bd>div").removeClass("am-active");
		$(".am-tab-pane2").addClass("am-active");		
	}
);



$(".data-tab-panel-2").click( function () { 
		$(".tabs-nav>li").removeClass("am-active");
		$(".data-tab-panel-2").addClass("am-active");
		$(".data-tab-panel-2").addClass("am-active");
		$(".am-tabs-bd>div").removeClass("am-active");
		$(".am-tab-pane3").addClass("am-active");		
	}
);
$(".fanhui3").hover(
function(){

	$(".jgewm").hide();
	
},
function(){
	$(".jgewm").hide();
}
);

$(".fanhui4").hover(
function(){

	$(".jgewm").show();
	
},
function(){
	
}
);

$(".am-gotop").hover(
function(){

	$(".jgewm").hide();
	
},
function(){
	
}
);
$(".jgewm").hover(
function(){

	$(".jgewm").show();
	
},
function(){
	$(".jgewm").hide();
}
);

$(".fanhui3").hover(
function(){

	$(".jgtupian").show();
	
},
function(){
	$(".jgtupian").hide();
}
);


