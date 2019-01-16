<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxb1e05fcce8f01cb8", "4d875c2042f6cb5d0e816b72ac55bade");
$signPackage = $jssdk->GetSignPackage();
$openid = $jssdk->getOpenid();

if (array_key_exists('from', $_GET) && $_GET['from'] == 'timeline'){
    header('Location:http://h5.quapp.net/cctv/forbidden.html');
    exit();
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" href="css/main_35.css" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">-->
        <meta name="format-detection" content="telephone=no" />
        <meta name="MobileOptimized" content="320" />
        <script type="text/javascript">
            var phoneWidth = parseInt(window.screen.width);
            var phoneScale = phoneWidth / 640;
            var ua = navigator.userAgent;
            if (/Android (\d+\.\d+)/.test(ua)) {
                var version = parseFloat(RegExp.$1);
                // andriod 2.3
                if (version > 2.3) {
                    document.write('<meta name="viewport" content="width=640, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', target-densitydpi=device-dpi">');
                    // andriod 2.3以上
                } else {
                    document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
                }
                // 其他系统
            } else {
                document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
            } 
            if(IsPC()){
			    window.location.href = 'error.html';
			}
			function IsPC() {  
			   var userAgentInfo = navigator.userAgent;  
			   var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
			   var flag = true;  
			   for (var v = 0; v < Agents.length; v++) {  
			       if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
			   }  
			   return flag;  
			}  
        </script>
        <script>
			var _hmt = _hmt || [];
			(function() {
			  var hm = document.createElement("script");
			  hm.src = "//hm.baidu.com/hm.js?b89957aa4d92c106623b800adcdef2e0";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(hm, s);
			})();
		</script>
    </head>

    <body>
        <!--遮挡-->
        <!--<div id="loading" style="display: block;"><p>0%</p></div>-->
        <!--遮挡 end-->
        <div class="swiper-container" id="mySwiper">
            <div class="swiper-wrapper">
            	<div class="swiper-slide pageone swiper-no-prev">
                   	<img class="pageone-1" src="img/3.5/1/2.png" />
                   	<img class="pageone-2" src="img/3.5/1/3.png" />
                   	<img class="pageone-3 animated fadeIn delay-half" src="img/3.5/1/1.png" />
               		<img class="pageone-4" src="img/3.5/1/7.png" />
               		<img class="pageone-5 animated bounce delay-2" src="img/3.5/1/6.png" />
               		<img class="pageone-6" src="img/3.5/1/4.png" />
               		<img class="pageone-7 rotate" src="img/3.5/1/5.png" />
               		<img class="pageone-text1" src="img/3.5/1/8.png"/>
               		<img class="pageone-text2" src="img/3.5/1/9.png"/>
               		<img class="pageone-text3" src="img/3.5/1/10.png"/>
                </div>
                <div class="swiper-slide pagetwo">
                	<div class="pagetwo-leftline1"></div>
                	<div class="pagetwo-leftline2 delay-1"></div>
                	<div class="pagetwo-rightline1 delay-half"></div>
                	<div class="pagetwo-rightline2 delay-1-half"></div>
                	<img class="pagetwo-left-1" src="img/3.5/2/left.png" />
                	<img class="pagetwo-left-2 delay-1" src="img/3.5/2/left.png" />
                	<img class="pagetwo-right-1 delay-half" src="img/3.5/2/right.png" />
                	<img class="pagetwo-right-2 delay-1-half" src="img/3.5/2/right.png" />
                	<img class="pagetwo-left1 hidden delay-2-half" src="img/3.5/2/left-1.png"/>
                	<img class="pagetwo-left2 hidden delay-half" src="img/3.5/2/left-2.png"/>
                	<img class="pagetwo-left3 hidden delay-3" src="img/3.5/2/left-3.png"/>
                	<img class="pagetwo-left4 hidden delay-1-half" src="img/3.5/2/left-4.png"/>
                	<img class="pagetwo-right1 hidden" src="img/3.5/2/right-1.png"/>
                	<img class="pagetwo-right2 hidden delay-2-half" src="img/3.5/2/right-2.png"/>
                	<img class="pagetwo-right3 hidden delay-1" src="img/3.5/2/right-3.png"/>
                	<img class="pagetwo-right4 hidden delay-3" src="img/3.5/2/right-4.png"/>
                </div>
                <div class="swiper-slide pagethree">
            		<img class="pagethree-1 hidden" src="img/3.5/3/1.png" />
            		<img class="pagethree-2 hidden delay-2" src="img/3.5/3/2.png" />
            		<img class="pagethree-3 hidden delay-2-half" src="img/3.5/3/3.png" />
        			<img class="pagethree-name-1 hidden delay-half" src="img/3.5/3/name1.png" />
                   	<img class="pagethree-name-2 hidden delay-1" src="img/3.5/3/name2.png" />
                   	<img class="pagethree-name-3 hidden delay-1-half" src="img/3.5/3/name3.png" />
                   	<img class="pagethree-avatar-1 hidden delay-half" src="img/3.5/3/avatar1.png" />
                   	<img class="pagethree-avatar-2 hidden delay-1" src="img/3.5/3/avatar2.png" />
                   	<img class="pagethree-avatar-3 hidden delay-1-half" src="img/3.5/3/avatar3.png" />
            		<img class="pagethree-right-1 hidden delay-half" src="img/3.5/3/right1.png" />
                   	<img class="pagethree-right-2 hidden delay-1" src="img/3.5/3/right2.png" />
                   	<img class="pagethree-right-3 hidden delay-1-half" src="img/3.5/3/right3.png" />
                </div>
                <div class="swiper-slide pagefour">
                	<img class="pagefour-1 hidden" src="img/3.5/4/1.png" />
                   	<img class="pagefour-2 hidden delay-1-half" src="img/3.5/4/2.png" />
                   	<img class="pagefour-3 hidden delay-3" src="img/3.5/4/3.png" />
                   	
                   	<img class="pagefour-4 hidden delay-half" src="img/3.5/4/4.png" />
                   	<img class="pagefour-5 hidden delay-half" src="img/3.5/4/5.png" />
                   	<img class="pagefour-6 hidden delay-1" src="img/3.5/4/6.png" />
                   	
                   	<img class="pagefour-7 hidden delay-2" src="img/3.5/4/7.png" />
                   	<img class="pagefour-8 hidden delay-2" src="img/3.5/4/8.png" />
                   	<img class="pagefour-9 hidden delay-2-half" src="img/3.5/4/9.png" />
                   	<img class="pagefour-10 hidden delay-2-half" src="img/3.5/4/10.png" />
                   	
                   	<img class="pagefour-11 hidden delay-3-half" src="img/3.5/4/11.png" />
                   	<img class="pagefour-12 hidden delay-4" src="img/3.5/4/12.png" />
                   	<img class="pagefour-13 hidden delay-4-half" src="img/3.5/4/13.png" />
                </div>
                <div class="swiper-slide pagefive">
                	<img class="pagefive-1 hidden " src="img/3.5/5/1.png" />
                	<img class="pagefive-2 hidden delay-half" src="img/3.5/5/2.png" />
                	<img class="pagefive-3 hidden delay-1" src="img/3.5/5/3.png" />
                	<img class="pagefive-4 hidden delay-1-half" src="img/3.5/5/4.png" />
                	<img class="pagefive-5 hidden delay-2" src="img/3.5/5/5.png" />
                	<img class="pagefive-6 hidden delay-2-half" src="img/3.5/5/6.png" />
                </div>
                <div class="swiper-slide pagesix swiper-no-next">
                	<img class="pagesix-1" src="img/3.5/6/1.png" />
                	<div class="pagesix-2 water"></div>
                	<div class="pagesix-2 water delay-1"></div>
                	<div class="pagesix-2 water delay-2"></div>
                	<img class="pagesix-3 hidden delay-half" src="img/3.5/6/3.png" />
                	<img class="pagesix-4 hidden delay-1" src="img/3.5/6/4.png" />
                	<img class="pagesix-5 hidden delay-1-half" src="img/3.5/6/5.png" />
                	<img class="pagesix-6 hidden delay-2" src="img/3.5/6/6.png" />
                	<img class="pagesix-7 hidden delay-2" src="img/3.5/6/2.png" />
                	<img class="pagesix-8 flash infinite animated" src="img/3.5/6/7.png" />
                </div>
            </div>
        </div>
        <!--箭头-->
        <div class="up">
            <div class="ups"></div>
        </div>
        <!--箭头 end-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/idangerous.swiper-2.6.1.min.js"></script>
        <script type="text/javascript" src="js/app_35.js"></script>
        <script src="js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="wechat_js/wx_monkv.js" type="text/javascript"></script>
         <script type="text/javascript">
                wx_monkv.config('<?=$openid?>', 'index_35');
                wx_monkv.actionLog('visit');
             
	        wx.config({
	            debug: false,
	            appId: '<?php echo $signPackage["appId"];?>',
	            timestamp: <?php echo $signPackage["timestamp"];?>,
	            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
	            signature: '<?php echo $signPackage["signature"];?>',
	            jsApiList: [
	              'onMenuShareTimeline',
	              'onMenuShareAppMessage',
	            ]
	          });
	        wx.ready(function () {
	            // 在这里调用 API
	            wx.onMenuShareTimeline({
	                title: '内部资料-禁止分享', // 分享标题
	                link: 'http://h5.quapp.net/cctv/forbidden.html', // 分享链接
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.5/1/4.png', // 分享图标
	                success: function () { 
	                    // 用户确认分享后执行的回调函数
                            wx_monkv.actionLog('share_timeline_success');
	                },
	                cancel: function () { 
	                    // 用户取消分享后执行的回调函 	数
                            wx_monkv.actionLog('share_timeline_cancel');
	                }
	            });
	            wx.onMenuShareAppMessage({
	                title: '两会报道·数据观察', // 分享标题
	                desc: 'CCTV外语频道综合部【内部资料，注意保密】', // 分享描述
	                link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb1e05fcce8f01cb8&redirect_uri=http://h5.quapp.net/cctv/index_35.php&response_type=code&scope=snsapi_base#wechat_redirect', // 分享链接
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.5/1/4.png', // 分享图标
	                type: '', // 分享类型,music、video或link，不填默认为link
	                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	                success: function () { 
	                    // 用户确认分享后执行的回调函数
                            wx_monkv.actionLog('share_app_success');
	                },
	                cancel: function () {
	                    // 用户取消分享后执行的回调函数
                            wx_monkv.actionLog('share_app_cancel');
	                }
	            });
	        });
                
                
        </script>
    </body>
</html>