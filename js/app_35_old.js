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
						$(".pagetwo").children().removeClass('hidden');
		    			$(".pagetwo-leftline1").addClass('pagetwo-line');
		    			$(".pagetwo-leftline2").addClass('pagetwo-line');
		    			$(".pagetwo-rightline1").addClass('pagetwo-line');
		    			$(".pagetwo-rightline2").addClass('pagetwo-line');
		    			$(".pagetwo-left-1").addClass('pagetwo-left');
		    			$(".pagetwo-left-2").addClass('pagetwo-left');
		    			$(".pagetwo-right-1").addClass('pagetwo-right');
		    			$(".pagetwo-right-2").addClass('pagetwo-right');
		    			
		    			$(".pagetwo-left1").addClass('animated fadeInDown');
		    			$(".pagetwo-left2").addClass('animated fadeInRight');
		    			$(".pagetwo-left3").addClass('animated fadeInDown');
		    			$(".pagetwo-left4").addClass('animated fadeInRight');
		    			$(".pagetwo-right1").addClass('animated fadeInLeft');
		    			$(".pagetwo-right2").addClass('animated fadeInDown');
		    			$(".pagetwo-right3").addClass('animated fadeInLeft');
		    			$(".pagetwo-right4").addClass('animated fadeInDown');
						break;
		    		case 2:
		    			$(".pagethree").children().removeClass('hidden');
		    			$(".pagethree-name-1").addClass('animated fadeInRight');
		    			$(".pagethree-name-2").addClass('animated fadeInRight');
		    			$(".pagethree-name-3").addClass('animated fadeInRight');
		    			$(".pagethree-name-4").addClass('animated fadeInRight');
		    			$(".pagethree-name-5").addClass('animated fadeInRight');
		    			$(".pagethree-name-6").addClass('animated fadeInRight');
		    			$(".pagethree-avatar-1").addClass('animated zoomIn');
		    			$(".pagethree-avatar-2").addClass('animated zoomIn');
		    			$(".pagethree-avatar-3").addClass('animated zoomIn');
		    			$(".pagethree-avatar-4").addClass('animated zoomIn');
		    			$(".pagethree-avatar-5").addClass('animated zoomIn');
		    			$(".pagethree-avatar-6").addClass('animated zoomIn');
		    			$(".pagethree-right-1").addClass('animated zoomIn');
		    			$(".pagethree-right-2").addClass('animated zoomIn');
		    			$(".pagethree-right-3").addClass('animated zoomIn');
		    			$(".pagethree-right-4").addClass('animated zoomIn');
		    			$(".pagethree-right-5").addClass('animated zoomIn');
		    			$(".pagethree-right-6").addClass('animated zoomIn');
		    			break;
		    		case 3:
                        $(".pagefour").children().removeClass('hidden');
		    			$(".pagefour-1").addClass('animated fadeInLeft');
		    			$(".pagefour-2").addClass('animated fadeInLeft');
		    			$(".pagefour-3").addClass('animated fadeInRight');
		    			$(".pagefour-4").addClass('animated fadeInLeft');
		    			$(".pagefour-5").addClass('animated fadeInUp');
		    			$(".pagefour-6").addClass('animated fadeInUp');
		    			$(".pagefour-7").addClass('animated fadeInUp');
		    			break;
	    			case 4:
						$(".pagefive").children().removeClass('hidden');
		    			$(".pagefive-1").addClass('animated lightSpeedIn');
		    			$(".pagefive-2").addClass('animated lightSpeedIn');
		    			$(".pagefive-3").addClass('animated fadeInRight');
		    			$(".pagefive-4").addClass('animated fadeInRight');
		    			$(".pagefive-5").addClass('animated zoomInRight');
		    			$(".pagefive-6").addClass('animated zoomInRight');
		    			break;
	    			case 5:
	    				$(".pagesix").children().removeClass('hidden');
		    			$(".pagesix-3").addClass('animated fadeInDown');
		    			$(".pagesix-4").addClass('animated fadeInDown');
		    			$(".pagesix-5").addClass('animated fadeInUp');
		    			$(".pagesix-6").addClass('animated fadeInUp');
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

})