$(document).ready(function(){
	 switch(position){//根据当前所在顶级栏目id，高亮导航 
		case 'M2':$("#nav li").eq(1).addClass("nav-lishw");break;
		case 'M3':$("#nav li").eq(2).addClass("nav-lishw");break;
		case 'M4':$("#nav li").eq(3).addClass("nav-lishw");break;
		case 'M5':$("#nav li").eq(4).addClass("nav-lishw");break;
		case 'M6':$("#nav li").eq(5).addClass("nav-lishw");break;
		case 'M7':$("#nav li").eq(9).addClass("nav-lishw");break;
		case 'M8':$("#nav li").eq(8).addClass("nav-lishw");break;
		case 'M9':$("#nav li").eq(7).addClass("nav-lishw");break;
		case 'M53':$("#nav li").eq(6).addClass("nav-lishw");break;
		default:$("#nav li").eq(0).addClass("nav-lishw");
	 }
	 $(".nav-lishw").addClass("nav-hover");
	 $("#nav li").hover(
		function(){
			if( $(this).attr("class") != "nav-lishw")
			{
				 $(".nav-lishw").removeClass("nav-hover");
			}
			$("dl", this).hide(); 
			$(this).addClass("nav-hover");
			$(".nav-hover .nav-link").addClass("current");
			$("dl", this).slideDown("fast"); 
		},
		function(){	
			if( $(this).attr("class") != "nav-lishw")
			{
				$(".nav-hover .nav-link").removeClass("current");
				$("dl", this).hide();
				$(this).removeClass("nav-hover");
			}			
			$("dl", this).hide();
			$(".nav-lishw").addClass("nav-hover");
			$(".nav-lishw .nav-link").addClass("current");	
		}
	);
	
	
	 $.fn.smartFloat = function() {
		var position = function(element) {
			var top = element.position().top, pos = element.css("position");
			 $(window).scroll(function() {
				var scrolls =  $(this).scrollTop();
				if (scrolls > top) {
					if (window.XMLHttpRequest) {
						element.css({
							position: "fixed",
							top: 0
						});    
					} else {
						element.css({
							top: scrolls
						});    
					}
				}else {
					element.css({
						position: "static"
						//top: top
					});    
				}
			});
		};
		return  $(this).each(function() {
			position( $(this));                         
		});
	};
	
	$(".h-qnav-drop").hover(
		function(){
			$(this).addClass("hover");
			$(".h-qnav-droplist", this).show(); 
		},
		function(){	
			$(this).removeClass("hover");			
			$(".h-qnav-droplist", this).hide(); 
		}
	);
	
	$(".h-zhnews-title").css('opacity','0.7');
	$(".h-news-title").hover(
		function(){
			$(".h-zhnews-title").css('opacity','0.7');
			$(".h-news-title").css('opacity','1');
			$(".h-news-box").show(); 
			$(".h-zhnews-box").hide(); 
		},
		function(){	
		}
	);
	$(".h-zhnews-title").hover(
		function(){
			$(".h-news-title").css('opacity','0.7');
			$(".h-zhnews-title").css('opacity','1');
			$(".h-zhnews-box").show(); 
			$(".h-news-box").hide(); 
		},
		function(){	
		}
	);
	$(".h-wechat-title").css('opacity','0.4');
	$(".h-activity-title").hover(
		function(){
			$(".h-wechat-title").css('opacity','0.4');
			$(".h-activity-title").css('opacity','1');
			$(".h-activity-slider").show(); 
			$(".h-wechat-slider").hide(); 
		},
		function(){	
		}
	);
	$(".h-wechat-title").hover(
		function(){
			$(".h-activity-title").css('opacity','0.4');
			$(".h-wechat-title").css('opacity','1');
			$(".h-wechat-slider").show(); 
			$(".h-activity-slider").hide(); 
		},
		function(){	
		}
	);
});
