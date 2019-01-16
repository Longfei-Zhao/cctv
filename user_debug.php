<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxb1e05fcce8f01cb8", "4d875c2042f6cb5d0e816b72ac55bade");
$signPackage = $jssdk->GetSignPackage();

$openid = $jssdk->getOpenid();
//var_dump($openid);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>hi</title>
    </head>

    <body>
        
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script src="js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="wechat_js/wx_monkv.js" type="text/javascript"></script>
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
	                title: '两会报道·数据观察', // 分享标题
	                link: 'http://h5.quapp.net/cctv/index_35.php', // 分享链接
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.5/1/4.png', // 分享图标
	                success: function () { 
	                    // 用户确认分享后执行的回调函数
	                },
	                cancel: function () { 
	                    // 用户取消分享后执行的回调函 	数
	                }
	            });
	            wx.onMenuShareAppMessage({
	                title: '两会报道·数据观察', // 分享标题
	                desc: 'CCTV外语频道综合部【内部资料，注意保密】', // 分享描述
	                link: 'http://h5.quapp.net/cctv/index_35.php', // 分享链接
	                imgUrl: 'http://h5.quapp.net/cctv/img/3.5/1/4.png', // 分享图标
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
                
                wx_monkv.config('<?=$openid?>', 'pingfen_37');
                wx_monkv.actionLog('debug');
                
//                wx_monkv.getUserInfo(function(data){
//                    console.log(data);
//                    alert(data.userdata);
//                });
//                
//                wx_monkv.setUserInfo('happynew', function(){
//                    alert('save,ok');
//                }, function(){
//                    alert('not ok');
//                });
//                wx_monkv.pushFormData('ques_1', 'count', 'a');
//                wx_monkv.pushFormData('ques_2', 'count', 'a');
//                wx_monkv.submitForm('dev_form', function(data){
//                    console.log(data);
//                });
//                
//                wx_monkv.clearFormData();
//                wx_monkv.pushFormData('ques_3', 'count', 'a');
//                wx_monkv.pushFormData('ques_4', 'count', 'a');
//                wx_monkv.submitForm('dev_form', function(data){
//                    console.log('2'+data);
//                });
//                
                wx_monkv.formStat('pingfen_37_dev', 'count', 'ques1', '1', function(data){
                    console.log(data.value);
                });
                
                wx_monkv.formStat('pingfen_37_dev', 'maxpercent', 'ques1', ['1', '2', '3', '4', '5', '6'], function(data){
                    console.log(data);
                });
        </script>
    </body>
</html>