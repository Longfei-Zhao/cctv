	var ctx_pagetwoChart1 = $("#pagetwo-Chart1").get(0).getContext("2d");
	var ctx_pagetwoChart2 = $("#pagetwo-Chart2").get(0).getContext("2d");
	var ctx_pagetwoChart3 = $("#pagetwo-Chart3").get(0).getContext("2d");
	var ctx_pagefourChart1 = $("#pagefour-Chart1").get(0).getContext("2d");
	var ctx_pagefiveChart1 = $("#pagefive-Chart1").get(0).getContext("2d");
	var ctx_pagefiveChart2 = $("#pagefive-Chart2").get(0).getContext("2d");
	var ctx_pagefiveChart3 = $("#pagefive-Chart3").get(0).getContext("2d");
	var ctx_pagefiveChart4 = $("#pagefive-Chart4").get(0).getContext("2d");
	var pagetwo_Chart1Data = [
	    {
	        value: 77,
	        color:"#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "演播室采访"
	    },
	    {
	        value: 9,
	        color: "#ea6560",
	        highlight: "#ea6560",
	        label: "导语画面"
	    },
	    {
	        value: 12,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "连线嘉宾"
	    }
	]
	var pagetwo_ChartOptions = {
	    segmentShowStroke : false,
	    percentageInnerCutout : 78,
	    animationSteps : 100,
	    animationEasing : "easeOutBounce",
	    animateRotate : true,
	    animateScale : false,
	    showTooltips: false
	}
	var pagetwo_Chart2Data = [
	    {
	        value: 40.87,
	        color:"#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "演播室采访"
	    },
	    {
	        value: 13.6,
	        color: "#ffe792",
	        highlight: "#ffe792",
	        label: "连线记者"
	    },
	    {
	        value: 3.73,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "连线嘉宾"
	    },
     	{
	        value: 3,
	        color: "#a1ea60",
	        highlight: "#a1ea60",
	        label: "口播"
	    },
	    {
	        value: 38.8,
	        color: "#ea6560",
	        highlight: "#ea6560",
	        label: "导语画面"
	    },
	    
	]
	var pagetwo_Chart3Data = [
	    {
	        value: 60.84,
	        color:"#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "演播室采访"
	    },
	    {
	        value: 39.16,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "连线嘉宾"
	    }
	]
	var pagefour_Chart1Data = [
		{
	        value: 32,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "重合问题"
	   	},
	    {
	        value: 4,
	        color:"#ea6560",
	        highlight: "#ea6560",
	        label: "田微独创"
	    },
	    {
	        value: 4,
	        color: "#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "邹悦独创"
	    },
	    {
	        value: 9,
	        color: "#ffe792",
	        highlight: "#ffe792",
	        label: "杨锐独创"
	    }
	]
	var pagefive_Chart1Data = [
		{
	        value: 50.4,
	        color: "#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "经济"
	   	},
	    {
	        value: 7.6,
	        color:"#ea6560",
	        highlight: "#ea6560",
	        label: "政府职能"
	    },
	    {
	        value: 5.8,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "反腐"
	    },
	    {
	        value: 4.6,
	        color: "#ffe792",
	        highlight: "#ffe792",
	        label: "军事"
	    },
	    {
	        value: 31.6,
	        color: "#a1ea60",
	        highlight: "#a1ea60",
	        label: "环保"
	    }
	]
	var pagefive_Chart2Data = [
		{
	        value: 59.73,
	        color: "#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "经济"
	   	},
	    {
	        value: 12,
	        color:"#ea6560",
	        highlight: "#ea6560",
	        label: "政府职能"
	    },
	    {
	        value: 10.76,
	        color: "#ffe792",
	        highlight: "#ffe792",
	        label: "军事"
	    },
	    {
	        value: 4.12,
	        color: "#a1ea60",
	        highlight: "#a1ea60",
	        label: "环保"
	    },
	    {
	        value: 13.4,
	        color: "#494e5a",
	        highlight: "#494e5a",
	        label: "反腐"
	    }
	]
	var pagefive_Chart3Data = [
		{
	        value: 90.9,
	        color: "#0ca6b8",
	        highlight: "#0ca6b8",
	        label: "经济"
	   	},
	    {
	        value: 9.1,
	        color:"#ea6560",
	        highlight: "#ea6560",
	        label: "政府职能"
	    }
	]
	var pagefive_Chart4Data = [
	    {
	        value: 100,
	        color: "#a1ea60",
	        highlight: "#a1ea60",
	        label: "环保"
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
					$(".pagetwo-left1").addClass('zoomIn');
					$(".pagetwo-left2").addClass('zoomIn');
					$(".pagetwo-left3").addClass('zoomIn');
					$(".pagetwo-right1").addClass('flipInX');
					$(".pagetwo-right2").addClass('flipInX');
					$(".pagetwo-right3").addClass('flipInX');
					if(vis < mySwiper.activeIndex) {
						new Chart(ctx_pagetwoChart1).Doughnut(pagetwo_Chart1Data,pagetwo_ChartOptions);
						setTimeout("new Chart(ctx_pagetwoChart2).Doughnut(pagetwo_Chart2Data,pagetwo_ChartOptions)",500);
						setTimeout("new Chart(ctx_pagetwoChart3).Doughnut(pagetwo_Chart3Data,pagetwo_ChartOptions)",1000);
						vis = mySwiper.activeIndex;
					}
					break;
	    		case 2:
	    			$(".pagethree").children().removeClass('hidden');
	    			$(".pagethree-1").addClass('flipInX');
	    			$(".pagethree-2").addClass('flipInX');
	    			$(".pagethree-3").addClass('zoomIn');
	    			$(".pagethree-name-1").addClass('fadeInRight');
	    			$(".pagethree-name-2").addClass('fadeInRight');
	    			$(".pagethree-name-3").addClass('fadeInRight');
	    			$(".pagethree-avatar-1").addClass('zoomIn');
	    			$(".pagethree-avatar-2").addClass('zoomIn');
	    			$(".pagethree-avatar-3").addClass('zoomIn');
	    			$(".pagethree-right-1").addClass('zoomIn');
	    			$(".pagethree-right-2").addClass('zoomIn');
	    			$(".pagethree-right-3").addClass('zoomIn');
	    			break;
	    		case 3:
                    $(".pagefour").children().removeClass('hidden');
                    $(".pagefour-1").addClass('zoomIn');
	    			$(".pagefour-2").addClass('flipInX');
	    			$(".pagefour-3").addClass('fadeInUp');
	    			$(".pagefour-4").addClass('fadeIn');
	    			$(".pagefour-5").addClass('fadeIn');
	    			$(".pagefour-6").addClass('fadeIn');
	    			$(".pagefour-7").addClass('fadeIn');
	    			$(".pagefour-8").addClass('flipInX');
	    			if(vis < mySwiper.activeIndex) {
	    				new Chart(ctx_pagefourChart1).Doughnut(pagefour_Chart1Data,pagetwo_ChartOptions);
	    				vis = mySwiper.activeIndex;
	    			}
	    			break;
    			case 4:
					$(".pagefive").children().removeClass('hidden');
					$(".pagefive-1").addClass('fadeIn');
	    			$(".pagefive-2").addClass('fadeIn');
	    			$(".pagefive-3").addClass('fadeIn');
	    			$(".pagefive-4").addClass('fadeIn');
	    			$(".pagefive-5").addClass('fadeInUpBig');
	    			if(vis < mySwiper.activeIndex) {
	    				new Chart(ctx_pagefiveChart1).Doughnut(pagefive_Chart1Data,pagetwo_ChartOptions);
	    				setTimeout("new Chart(ctx_pagefiveChart2).Doughnut(pagefive_Chart2Data,pagetwo_ChartOptions)",500);
	    				setTimeout("new Chart(ctx_pagefiveChart3).Doughnut(pagefive_Chart3Data,pagetwo_ChartOptions)",1500);
	    				setTimeout("new Chart(ctx_pagefiveChart4).Doughnut(pagefive_Chart4Data,pagetwo_ChartOptions)",2000);
		    			vis = mySwiper.activeIndex;
	    			}		
	    			break;
    			case 5:
    				$(".pagesix").children().removeClass('hidden');
				 	$(".pagesix-1").addClass('flipInX');
	    			$(".pagesix-2").addClass('flipInX');
	    			$(".pagesix-3").addClass('fadeInDownBig');
	    			$(".pagesix-4").addClass('fadeInDownBig');
	    			$(".pagesix-7").addClass('slideInLeft');
	    			$(".pagesix-8").addClass('fadeInUp');
	    			$(".up").show();
    				break;
    			case 6:
    				$(".pageseven").children().removeClass('hidden');
    				$(".pageseven-1").addClass('bounceInUp');
	    			$(".pageseven-name-1").addClass('fadeInRight');
	    			$(".pageseven-name-2").addClass('fadeInRight');
	    			$(".pageseven-name-3").addClass('fadeInRight');
	    			$(".pageseven-name-4").addClass('fadeInRight');
	    			$(".pageseven-name-5").addClass('fadeInRight');
	    			$(".pageseven-name-6").addClass('fadeInRight');
	    			$(".pageseven-avatar-1").addClass('zoomIn');
	    			$(".pageseven-avatar-2").addClass('zoomIn');
	    			$(".pageseven-avatar-3").addClass('zoomIn');
	    			$(".pageseven-avatar-4").addClass('zoomIn');
	    			$(".pageseven-avatar-5").addClass('zoomIn');
	    			$(".pageseven-avatar-6").addClass('zoomIn');
	    			$(".pageseven-right-1").addClass('zoomIn');
	    			$(".pageseven-right-2").addClass('zoomIn');
	    			$(".pageseven-right-3").addClass('zoomIn');
	    			$(".pageseven-right-4").addClass('zoomIn');
	    			$(".pageseven-right-5").addClass('zoomIn');
	    			$(".pageseven-right-6").addClass('zoomIn');
	    			$(".up").hide();
    				break;
			}
	    }
	})

})