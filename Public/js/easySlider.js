(function(a){a.fn.easySlider=function(b){return this.each(function(){var o=a(this),e=o.find("ul#show_pic li"),k=0,h=1000,p=1000,n=10,g=false,d=4000,m,q="",c,f,j=e.length;e.css({opacity:0,zIndex:n-1}).eq(k).css({opacity:1,zIndex:n});for(f=0;f<j;f++){q+='<a href="javascript:void(0);">'+(f+1)+"</a>"}c=o.append(a('<div class="img_pagebox"><div class="img_page"><div id="icon_num" class="pageBox">'+q+"</div></div>").css("zIndex",n+1)).find(".pageBox a");c.mouseenter(function(){clearTimeout(m);k=a(this).text()*1-1;e.eq(k).stop().fadeTo(p,1,function(){if(!g){m=setTimeout(l,d+p)}}).css("zIndex",n).siblings("li").stop().fadeTo(h,0).css("zIndex",n-1);a(this).addClass("active").siblings().removeClass("active");return false}).focus(function(){a(this).blur()}).eq(k).addClass("active");function l(){if(g){return}k=(k+1)%c.length;c.eq(k).mouseenter()}m=setTimeout(l,6000)})};})(jQuery);

$("#h-banner").easySlider();
$("#h-banner span").each(function(i){
	$(this).css({width:$(this).next().width(),opacity:"0.5"});
});

$("#xiaoyuanjingguan").easySlider();
$("#xiaoyuanjingguan span").each(function(i){
	$(this).css({width:$(this).next().width(),opacity:"0.5"});
});