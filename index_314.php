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
        <link rel="stylesheet" href="css/main_314.css" />
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
                   	<img class="pageone-1" src="img/3.14/1/2.png" />
                   	<img class="pageone-2" src="img/3.14/1/3.png" />
                   	<img class="pageone-3 animated fadeIn delay-half" src="img/3.14/1/1.png" />
               		<img class="pageone-4" src="img/3.14/1/7.png" />
               		<img class="pageone-5 animated bounce delay-2" src="img/3.14/1/6.png" />
               		<img class="pageone-6" src="img/3.14/1/4.png" />
               		<img class="pageone-7 rotate" src="img/3.14/1/5.png" />
               		<img class="pageone-text1" src="img/3.14/1/8.png"/>
               		<img class="pageone-text2" src="img/3.14/1/9.png"/>
               		<img class="pageone-text3" src="img/3.14/1/10.png"/>
                </div>
                <div class="swiper-slide pagetwo">
					<canvas id="pagetwo-Chart1" width="300" height="300"></canvas>
					<img class="pagetwo-1 hidden animated delay-half" src="img/3.14/2/1.png" />
                   	<img class="pagetwo-2 hidden animated delay-1" src="img/3.14/2/2.png" />
                   	<img class="pagetwo-3 hidden animated delay-1-half" src="img/3.14/2/3.png" />
                </div>
                <div class="swiper-slide pagethree">
            		<img class="animated pagethree-1 hidden" src="img/3.14/3/1.png" />
            		<img class="animated pagethree-2 hidden delay-half" src="img/3.14/3/2.png" />
            		<img class="animated pagethree-3 hidden delay-half" src="img/3.14/3/3.png" />
        			<img class="animated pagethree-4 hidden delay-1" src="img/3.14/3/4.png" />
                   	<img class="animated pagethree-5 hidden delay-1-half" src="img/3.14/3/5.png" />
                   	<img class="animated pagethree-6 hidden delay-2" src="img/3.14/3/6.png" />
                   	<img class="animated pagethree-7 hidden delay-2-half" src="img/3.14/3/7.png" />
                   	<img class="animated pagethree-8 hidden delay-3" src="img/3.14/3/8.png" />
                   	<img class="animated pagethree-9 hidden delay-4" src="img/3.14/3/9.png" />
            		<img class="animated pagethree-10 hidden delay-4" src="img/3.14/3/10.png" />
                </div>
                <div class="swiper-slide pagefour">
                	<img class="animated pagefour-1 hidden" src="img/3.14/4/1.png" />
                   	<img class="animated pagefour-2 hidden delay-half" src="img/3.14/4/2.png" />
                   	<img class="animated pagefour-3 hidden delay-1" src="img/3.14/4/3.png" />
                   	<img class="animated pagefour-4 hidden delay-1-half" src="img/3.14/4/4.png" />
                </div>
                <div class="swiper-slide pagefive">
                	<img class="animated pagefive-1 hidden " src="img/3.14/5/1.png" />
                	<img class="animated pagefive-2 hidden delay-1" src="img/3.14/5/2.png" />
                	<img class="animated pagefive-3 hidden delay-2" src="img/3.14/5/3.png" />
                	<img class="animated pagefive-4 hidden delay-5" src="img/3.14/5/4.png" />
                	
                	<div class="pagefive-leftline1 delay-half"></div>
                	<div class="pagefive-leftline2 delay-2-half"></div>
                	<div class="pagefive-rightline1 delay-1-half"></div>
                	
                	<img class="pagefive-left-1 delay-half" src="img/3.14/5/left.png" />
                	<img class="pagefive-left-2 delay-2-half" src="img/3.14/5/left.png" />
                	<img class="pagefive-right-1 delay-1-half" src="img/3.14/5/right.png" />
                	
                	<img class="animated pagefive-left1 hidden delay-3" src="img/3.14/5/left1.png"/>
                	<img class="animated pagefive-left2 hidden delay-3-half" src="img/3.14/5/left2.png"/>
                	<img class="animated pagefive-left3 hidden delay-1-half" src="img/3.14/5/left3.png"/>
                	<img class="animated pagefive-left4 hidden delay-3-half" src="img/3.14/5/left4.png"/>
                	<img class="animated pagefive-left5 hidden delay-4-half" src="img/3.14/5/left5.png"/>
                	
                	<img class="animated pagefive-right1 hidden delay-3" src="img/3.14/5/right1.png"/>
                	<img class="animated pagefive-right2 hidden delay-half" src="img/3.14/5/right2.png"/>
                	<img class="animated pagefive-right3 hidden delay-3" src="img/3.14/5/right3.png"/>
                	<img class="animated pagefive-right4 hidden delay-3-half" src="img/3.14/5/right4.png"/>
                	<img class="animated pagefive-right5 hidden delay-4-half" src="img/3.14/5/right5.png"/>
                	<img class="animated pagefive-right6 hidden delay-2-half" src="img/3.14/5/right6.png"/>
                	<img class="animated pagefive-right7 hidden delay-4-half" src="img/3.14/5/right7.png"/>
                	
                	<canvas id="pagefive-Chart1" width="136" height="136"></canvas>
                	<canvas id="pagefive-Chart2" width="136" height="136"></canvas>
                	<canvas id="pagefive-Chart3" width="136" height="136"></canvas>
                </div>
                <div class="swiper-slide pagesix">
                	<img class="animated pagesix-1 hidden" src="img/3.14/6/1.png" />
                	<img class="animated pagesix-2 hidden delay-half" src="img/3.14/6/2.png" />
                	<img class="animated pagesix-3 hidden delay-1" src="img/3.14/6/3.png" />
                	<img class="animated pagesix-4 hidden delay-1-half" src="img/3.14/6/4.png" />
                	<img class="animated pagesix-5 hidden delay-2" src="img/3.14/6/5.png" />
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
        <script type="text/javascript" src="js/app_314.js"></script>
        <script src="js/Chart.min.js" type="text/javascript" charset="utf-8"></script>
        <script src="js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="wechat_js/wx_monkv.js" type="text/javascript"></script>
         <script type="text/javascript">
                wx_monkv.config('<?=$openid?>', 'index_314');
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
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.14/1/4.png', // 分享图标
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
	                title: '两会报道·数据观察【第三期】', // 分享标题
	                desc: 'CCTV外语频道综合部【内部资料，注意保密】', // 分享描述
	                link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb1e05fcce8f01cb8&redirect_uri=http://h5.quapp.net/cctv/index_314.php&response_type=code&scope=snsapi_base#wechat_redirect', // 分享链接
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.14/1/4.png', // 分享图标
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