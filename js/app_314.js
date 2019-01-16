	var ctx_pagetwoChart1 = $("#pagetwo-Chart1").get(0).getContext("2d");
	var ctx_pagefiveChart1 = $("#pagefive-Chart1").get(0).getContext("2d");
	var ctx_pagefiveChart2 = $("#pagefive-Chart2").get(0).getContext("2d");
	var ctx_pagefiveChart3 = $("#pagefive-Chart3").get(0).getContext("2d");
	var pagetwo_Chart1Data = [
	    {
	        value: 30,
	        color:"#ff7e88",
	        highlight: "#ff7e88",
	        label: "演播室采访"
	    },
	    {
	        value: 70,
	        color: "#59d2ff",
	        highlight: "#59d2ff",
	        label: "导语画面"
	    }
	]
	var pagetwo_ChartOptions = {
	    segmentShowStroke : false,
	    percentageInnerCutout : 0,
	    animationSteps : 100,
	    animationEasing : "easeOutBounce",
	    animateRotate : true,
	    animateScale : false,
	    showTooltips: false
	}
	var pagefive_Chart1Data = [
		{
	        value: 61,
	        color: "#59d2ff",
	        highlight: "#59d2ff",
	        label: "两会"
	   	},
	    {
	        value: 66,
	        color:"#434343",
	        highlight: "#434343",
	        label: "非两会"
	    }
	]
	var pagefive_Chart2Data = [
		{
	        value: 60,
	        color: "#59d2ff",
	        highlight: "#59d2ff",
	        label: "两会"
	   	},
	    {
	        value: 69,
	        color:"#434343",
	        highlight: "#434343",
	        label: "非两会"
	    }
	]
	var pagefive_Chart3Data = [
		{
	        value: 556,
	        color: "#59d2ff",
	        highlight: "#59d2ff",
	        label: "两会"
	   	},
	    {
	        value: 86,
	        color:"#434343",
	        highlight: "#434343",
	        label: "非两会"
	    }
	]
$(function(){
	var vis = 0;
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
					$(".pagetwo-1").addClass('zoomIn');
					$(".pagetwo-2").addClass('flipInX');
					$(".pagetwo-3").addClass('fadeInUp');
					if(vis < mySwiper.activeIndex) {
						setTimeout("new Chart(ctx_pagetwoChart1).Pie(pagetwo_Chart1Data,pagetwo_ChartOptions)",500);
						vis = mySwiper.activeIndex;
					}
					break;
	    		case 2:
	    			$(".pagethree").children().removeClass('hidden');
	    			$(".pagethree-1").addClass('zoomIn');
	    			$(".pagethree-2").addClass('fadeInLeft');
	    			$(".pagethree-3").addClass('fadeInRight');
	    			$(".pagethree-4").addClass('lightSpeedIn');
	    			$(".pagethree-5").addClass('fadeInUp');
	    			$(".pagethree-6").addClass('fadeInUp');
	    			$(".pagethree-7").addClass('fadeInUp');
	    			$(".pagethree-8").addClass('fadeInUp');
	    			$(".pagethree-9").addClass('fadeInLeft');
	    			$(".pagethree-10").addClass('fadeInRight');
	    			break;
	    		case 3:
                    $(".pagefour").children().removeClass('hidden');
                    $(".pagefour-1").addClass('fadeInUpBig');
	    			$(".pagefour-2").addClass('fadeInUpBig');
	    			$(".pagefour-3").addClass('fadeInUpBig');
	    			$(".pagefour-4").addClass('fadeInUpBig');
	    			break;
    			case 4:
					$(".pagefive").children().removeClass('hidden');
					$(".pagefive-1").addClass('zoomIn');
	    			$(".pagefive-2").addClass('zoomIn');
	    			$(".pagefive-3").addClass('zoomIn');
	    			$(".pagefive-4").addClass('fadeInUp');
	    			
	    			$(".pagefive-leftline1").addClass('pagefive-line');
	    			$(".pagefive-leftline2").addClass('pagefive-line');
	    			$(".pagefive-rightline1").addClass('pagefive-line');
	    			$(".pagefive-left-1").addClass('pagefive-left');
	    			$(".pagefive-left-2").addClass('pagefive-left');
	    			$(".pagefive-right-1").addClass('pagefive-right');
	    			
	    			$(".pagefive-left1").addClass('fadeInLeft');
	    			$(".pagefive-left2").addClass('fadeIn');
	    			$(".pagefive-left3").addClass('fadeInRight');
	    			$(".pagefive-left4").addClass('fadeIn');
	    			$(".pagefive-left5").addClass('fadeInLeft');
	    			
	    			$(".pagefive-right1").addClass('fadeIn');
	    			$(".pagefive-right2").addClass('fadeInLeft');
	    			$(".pagefive-right3").addClass('fadeIn');
	    			$(".pagefive-right4").addClass('fadeInRight');
	    			$(".pagefive-right5").addClass('fadeIn');
	    			$(".pagefive-right6").addClass('fadeInLeft');
	    			$(".pagefive-right7").addClass('fadeIn');
	    			
	    			if(vis < mySwiper.activeIndex) {
	    				new Chart(ctx_pagefiveChart1).Doughnut(pagefive_Chart1Data,pagetwo_ChartOptions);
	    				setTimeout("new Chart(ctx_pagefiveChart2).Doughnut(pagefive_Chart2Data,pagetwo_ChartOptions)",1000);
	    				setTimeout("new Chart(ctx_pagefiveChart3).Doughnut(pagefive_Chart3Data,pagetwo_ChartOptions)",2000);
		    			vis = mySwiper.activeIndex;
	    			}		
	    			$(".up").show();
	    			break;
    			case 5:
    				$(".pagesix").children().removeClass('hidden');
				 	$(".pagesix-1").addClass('zoomIn');
	    			$(".pagesix-2").addClass('zoomIn');
	    			$(".pagesix-3").addClass('zoomIn');
	    			$(".pagesix-4").addClass('zoomIn');
	    			$(".pagesix-5").addClass('zoomIn');
	    			$(".up").hide();
    				break;
			}
	    }
	})

})