/*
 * 全站公共脚本,基于jquery-1.9.1脚本库
*/
$(document).ready(function () {
	mySwiper = $("#mySwiper").swiper({
	 	direction:"vertical",
		loop: false,
		noSwiping:true,
		noSwipingClass:'swiper-no-swiping',
	 	nextButton: '.btn',
	    onSlideChangeEnd : function(){
	    	switch ( mySwiper.activeIndex )
	    	{
	    		case 0:
	    			$(".up").show();
	    			break;
	    		case 1:						
					$(".up").hide();
					break;
	    		case 2:
	    			break;
	    		case 3:
                    
	    			break;
    			case 4:
					
	    			break;
    			case 5:
    				
    				break;
			}
	    }
	})
	
	

});

$(function(){
	$('.option').click(
		function(){
			if($(this).hasClass('on')) {
				$(this).removeClass('on');
				if($(this).siblings().hasClass('on') == false) {
					$(this).siblings('.btn').hide();
				}
			}
			else {
				$(this).addClass('on');
				$(this).siblings('.btn').show();
			}
		}
	)
	$('.option-radio').click(
		function(){
			$(this).siblings().removeClass('on');
			$(this).addClass('on');
			$(this).siblings('.btn').show();
		}
	)
})
	

