<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxb1e05fcce8f01cb8", "4d875c2042f6cb5d0e816b72ac55bade");
$signPackage = $jssdk->GetSignPackage();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/animate.css"/>
        <link rel="stylesheet" href="css/main.css" />
        <!--<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">-->
        <meta name="format-detection" content="telephone=no" />
        <meta name="MobileOptimized" content="320" />
        <script type="text/javascript">
//          var phoneWidth = parseInt(window.screen.width);
//          var phoneScale = phoneWidth / 640;
//          var ua = navigator.userAgent;
//          if (/Android (\d+\.\d+)/.test(ua)) {
//              var version = parseFloat(RegExp.$1);
//              // andriod 2.3
//              if (version > 2.3) {
//                  document.write('<meta name="viewport" content="width=640, minimum-scale = ' + phoneScale + ', maximum-scale = ' + phoneScale + ', target-densitydpi=device-dpi">');
//                  // andriod 2.3以上
//              } else {
//                  document.write('<meta name="viewport" content="width=640, target-densitydpi=device-dpi">');
//              }
//              // 其他系统
//          } else {
//              document.write('<meta name="viewport" content="width=640, user-scalable=no, target-densitydpi=device-dpi">');
//          } 
//          if(IsPC()){
//			    window.location.href = 'error.html';
//			}
//			function IsPC() {  
//			   var userAgentInfo = navigator.userAgent;  
//			   var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");  
//			   var flag = true;  
//			   for (var v = 0; v < Agents.length; v++) {  
//			       if (userAgentInfo.indexOf(Agents[v]) > 0) { flag = false; break; }  
//			   }  
//			   return flag;  
//			}  
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
            		<img src="img/1/1.1.gif"/>
                   	<canvas id="myChart" width="400" height="400"></canvas>
                </div>
                <div class="swiper-slide pagetwo">
                </div>
                <div class="swiper-slide pagethree">
                </div>
                <div class="swiper-slide pagefour">
                </div>
                <div class="swiper-slide pagefive ">
                </div>
                <div class="swiper-slide pagesix">
                    
                </div>
                <div class="swiper-slide pageseven">
                </div>
                <div class="swiper-slide pageeight swiper-no-next">
                </div>
            </div>
        </div>
        <!--音乐 start-->
        <div id="music">
            <div class="music" style=""></div>
            <span>开启</span>
            <audio src="img/music.mp3" id="mp3" autoplay="autoplay" loop></audio>
        </div>
        <!--音乐 end-->
        <!--箭头-->
        <div class="up" style="display: none;">
            <div class="ups"></div>
        </div>
        <!--箭头 end-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/idangerous.swiper-2.6.1.min.js"></script>
        <script type="text/javascript" src="js/preloadjs-0.4.1.min.js"></script>
        <script src="js/Chart.min.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript">
            // 加载图片
//          function loadImages()
//          {
//              var imgs = [];
//              $.each($('img'), function() {
//                  imgs.push($(this).attr('src'));
//              });
//              var loader = new createjs.LoadQueue();
//              //loader.installPlugin(createjs.Sound);
//              loader.setMaxConnections(30);
//              loader.on('complete', function() {
//                  // 加载完毕，初始化H5页面
//                  $('#loading').fadeOut();
//					var ctx = document.getElementById("myChart").getContext("2d");
//					var myNewChart = new Chart(ctx).Bar(barChartData, defaults);
//              });
//              loader.on('progress', function(e) {
//                  // 加载中
//                  $('#loading p').text(((this.progress + 0.000) * 100).toFixed(0) + '%');
//              });
//              loader.on('error', function() {
//                  alert("加载图片失败，请尝试重新进入页面");
//              });
//              loader.loadManifest(imgs);
//          }
            
       		
			
			
        </script>
        <script src="js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script type="text/javascript">
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
	                title: '700年老方子，再不保留就没啦！', // 分享标题
	                link: 'http://yupingfeng.quapp.net/index.php', // 分享链接
	                imgUrl: 'http://yupingfeng.quapp.net/img/share.jpg', // 分享图标
	                success: function () { 
	                    // 用户确认分享后执行的回调函数
	                },
	                cancel: function () { 
	                    // 用户取消分享后执行的回调函 	数
	                }
	            });
	            wx.onMenuShareAppMessage({
	                title: '700年老方子，再不保留就没啦！', // 分享标题
	                desc: '经典名方玉屏风，预防感冒效果好', // 分享描述
	                link: 'http://yupingfeng.quapp.net/index.php', // 分享链接
	                imgUrl: 'http://yupingfeng.quapp.net/img/share.jpg', // 分享图标
	                type: '', // 分享类型,music、video或link，不填默认为link
	                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	                success: function () { 
	                    // 用户确认分享后执行的回调函数
	                },
	                cancel: function () {
	                    // 用户取消分享后执行的回调函数
	                }
	            });
	        });
        </script>
    </body>
</html>