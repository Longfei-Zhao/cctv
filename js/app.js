/*
 * 全站公共脚本,基于jquery-1.9.1脚本库
*/
$(function(){
		//初始加载分屏动画
		var flag_page = new Array();
		
		mySwiper = $("#mySwiper").swiper({
			mode:"vertical",
			loop: false,
			noSwiping:true,
			noSwipingNext:true,
			noSwipingPrev:true,
		    onSlideChangeEnd : function(){
		    	
		    	switch ( mySwiper.activeIndex )
		    	{
		    		case 0:
		    			break;
		    		case 1:
//						var lineChart = new Chart(ctx_lineChart).Line(lineChartData, lineChartDefaults);
						
						$(".pagetwo").children().removeClass('hidden');
		    			$(".pagetwo-name-1").addClass('animated fadeInRight');
		    			$(".pagetwo-name-2").addClass('animated fadeInRight');
		    			$(".pagetwo-name-3").addClass('animated fadeInRight');
		    			$(".pagetwo-avatar-1").addClass('animated zoomIn');
		    			$(".pagetwo-avatar-2").addClass('animated zoomIn');
		    			$(".pagetwo-avatar-3").addClass('animated zoomIn');
		    			$(".pagetwo-right-1").addClass('animated zoomIn');
		    			$(".pagetwo-right-2").addClass('animated zoomIn');
		    			$(".pagetwo-right-3").addClass('animated zoomIn');
						break;
		    		case 2:
		    			$(".progress-ring").loadingRing();
		    			break;
		    		case 3:
                        
		    			break;
	    			case 4:
						$(".pagefive").children().removeClass('hidden');
		    			$(".pagefive-3").addClass('animated fadeInDown');
		    			$(".pagefive-4").addClass('animated fadeInDown');
		    			$(".pagefive-5").addClass('animated fadeInUp');
		    			$(".pagefive-6").addClass('animated fadeInUp');
		    			break;
	    			case 5:
	    				
	    				break;
		    		case 6:
		    			
		    			break;
				}
		    }
		})
	    //设置html
			var html = new Array();
			for (i=0;i<$("#mySwiper>.swiper-wrapper>.swiper-slide").length;i++)
			{
				html[i] = $("#mySwiper>.swiper-wrapper>.swiper-slide").eq(i).html();
			}
		//移除动画后的效果
			function remove()
			{
				$("#mySwiper>.swiper-wrapper>.swiper-slide:eq("+mySwiper.previousIndex+")").html(html[mySwiper.previousIndex]);
			}
		function isIos()  
		{  
           var userAgentInfo = navigator.userAgent;  
           var Agents = new Array("iPhone","iPad");  
           var flag = false;  
           for (var v = 0; v < Agents.length; v++) {  
               if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = true; break; }  
           }  
           return flag;  
		}
		var fixedBug = isIos();
		var mp3;
		window.onload = function()
		{
			if(fixedBug==true){
				mp3 = new Audio();
				mp3.src = $("#mp3").attr("src");
				mp3.loop = true;
				mp3.autoplay = true;
				$("#mp3").remove();
			}
    		playmusic();
		}
		
	//音乐
	$(".music").on("tap",function(){
		if ( $(this).hasClass("play") )
		{
			$(this).removeClass("play");
			$("#music>span").addClass("zshow").html("关闭");
			setTimeout(function(){$("#music>span").removeClass("zshow")},1000);
			if(fixedBug==true){
				mp3.pause();
			}
			else
			{
				document.getElementById("mp3").pause();
			}
		}
		else
		{
			$(this).addClass("play");
			$("#music>span").addClass("zshow").html("开启");
			setTimeout(function(){$("#music>span").removeClass("zshow")},1000);
			if(fixedBug==true){
				mp3.play();
			}
			else
			{
				document.getElementById("mp3").play();
			}
		}
	})
	function playmusic(){
		$(".music").addClass("play");
		if(fixedBug==true){
			mp3.play();
		}
		else
		{
			document.getElementById("mp3").play();
		}
	}
		
	
})