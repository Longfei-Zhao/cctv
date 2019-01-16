<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wxb1e05fcce8f01cb8", "4d875c2042f6cb5d0e816b72ac55bade");
$signPackage = $jssdk->GetSignPackage();
$openid = $jssdk->getOpenid();

if (array_key_exists('from', $_GET) && $_GET['from'] == 'timeline') {
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
        <link rel="stylesheet" href="css/pingfen_313.css" />
        <link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
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
            if (IsPC()) {
                window.location.href = 'error.html';
            }
            function IsPC() {
                var userAgentInfo = navigator.userAgent;
                var Agents = new Array("Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod");
                var flag = true;
                for (var v = 0; v < Agents.length; v++) {
                    if (userAgentInfo.indexOf(Agents[v]) > 0) {
                        flag = false;
                        break;
                    }
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
                <div id="js-trick" class="swiper-slide pageone">
                    <img class="pageone-1 animated fadeIn delay-half" src="img/3.13/1/1.png" />
                </div>
                <div class="swiper-slide pagetwo swiper-no-swiping">
                    <img class="pagetwo-1" src="img/3.13/2/1.png" />
                    <select id="js-userinfo1" class="pagetwo-select-1">
                        <option value="0">请选择</option>
                        <option value="1">策划组</option>
                        <option value="2">记者组</option>
                        <option value="3">日间新闻组</option>
                        <option value="4">晚间新闻组</option>
                        <option value="5">中国24</option>
                        <option value="6">世界观察</option>
                        <option value="7">播出组</option>
                        <option value="8">包装组</option>
                        <option value="9">财经组</option>
                        <option value="10">体育组</option>
                        <option value="11">对话组</option>
                        <option value="12">制片组</option>
                        <option value="13">今日亚洲</option>
                        <option value="14">时事组</option>
                        <option value="15">北美分台</option>
                        <option value="16">非洲分台</option>
                        <option value="18">共享组</option>
                        <option value="19">新媒体</option>
                        <option value="17">其他合作对象</option>
                    </select>
                    <img class="pagetwo-2" src="img/3.13/2/2.png" />
                    <select id="js-userinfo2" class="pagetwo-select-2">
                        <option value="0">请选择</option>
                        <option value="1">总监级别</option>		
                        <option value="2">制片人</option>
                        <option value="3">主编</option>
                        <option value="4">责编</option>
                        <option value="5">编辑</option>
                        <option value="6">美工</option>
                        <option value="7">主持人</option>
                        <option value="8">记者</option>
                        <option value="9">摄像</option>
                        <option value="10">制片</option>
                    </select>
                    <img id="js-btn-userinfo" class="btn" style="display: none" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques1" class="swiper-slide pagethree swiper-no-swiping">
                    <div class="pagethree-1 option-radio" data-val="1" data-name="实用性强，对频道帮助很大"></div>
                    <div class="pagethree-2 option-radio" data-val="2" data-name="有一定帮助，但希望看到更多内容"></div>
                    <div class="pagethree-3 option-radio" data-val="3" data-name="与真实报道情况结合不大，对频道帮助较小"></div>
                    <div class="pagethree-4 option-radio" data-val="4" data-name="未关注这份报告"></div>
                    <img id="js-btn-ques1" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques2" class="swiper-slide pagefour swiper-no-swiping">
                    <div class="pagefour-1 option" data-val="1" data-name="动态数据报告"></div>
                    <div class="pagefour-2 option" data-val="2" data-name="专家点评"></div>
                    <div class="pagefour-3 option" data-val="3" data-name="互动调研问卷"></div>
                 	<div class="pagefour-4 option" data-val="4" data-name="传统文字报告"></div>
                    <img id="js-btn-ques2" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques3" class="swiper-slide pagefive swiper-no-swiping">
                	<div class="pagefive-1 option" data-val="1" data-name="3月5日的数据报告"></div>
                    <div class="pagefive-2 option" data-val="2" data-name="3月6日的专家点评"></div>
                    <div class="pagefive-3 option" data-val="3" data-name="3月9日的数据报告"></div>
                 	<div class="pagefive-4 option" data-val="4" data-name="3月10日的专家点评"></div>
                 	<div class="pagefive-5 option" data-val="5" data-name="3月11日的专家点评"></div>
                    <img id="js-btn-ques3" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques4" class="swiper-slide pagesix swiper-no-swiping">
                    <div class="pagesix-1 option" data-val="1" data-name="记者贡献及报道能力的数据统计"></div>
                    <div class="pagesix-2 option" data-val="2" data-name="自采新闻片的话题及复用情况"></div>
                    <div class="pagesix-3 option" data-val="3" data-name="三大特别栏目的数据比较"></div>
                    <div class="pagesix-4 option" data-val="4" data-name="演播室受访嘉宾的贡献情况"></div>
                    <div class="pagesix-5 option" data-val="5" data-name="各个新媒体对两会报道的数据分析"></div>
                    <img id="js-btn-ques4" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques5" class="swiper-slide pageseven swiper-no-swiping">
                    <div class="pageseven-1 option-radio" data-val="5" data-name="5分"></div>
                    <div class="pageseven-2 option-radio" data-val="4" data-name="4分"></div>
                    <div class="pageseven-3 option-radio" data-val="3" data-name="3分"></div>
                    <div class="pageseven-4 option-radio" data-val="2" data-name="2分"></div>
                    <div class="pageseven-5 option-radio" data-val="1" data-name="1分"></div>
                    <img id="js-btn-ques5" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div id="slide-ques6" class="swiper-slide pageeight swiper-no-swiping">
                    <div class="pageeight-1 option-radio" data-val="1" data-name="希望"></div>
                    <div class="pageeight-2 option-radio" data-val="2" data-name="不希望"></div>
                    <div class="pageeight-3 option-radio" data-val="3" data-name="不关心"></div>
                    <img id="js-btn-ques6" class="btn" src="img/3.13/btn.png"/>
                </div>
                <div class="swiper-slide pagenine swiper-no-swiping">
                    <p class="pagenine-p1">加载中...</p>
                    <p class="pagenine-p2">加载中...</p>
                    <p class="pagenine-p3">加载中...</p>
                    <p class="pagenine-p4">加载中...</p>
                    <p class="pagenine-p5">加载中...</p>
                    <p class="pagenine-per1">00</p>
                    <p class="pagenine-per2">00</p>
                    <p class="pagenine-per3">00</p>
                    <p class="pagenine-per4">00</p>
                    <p class="pagenine-per5">00</p>
                    <p class="pagenine-grade">4.0</p>
                </div>
            </div>
        </div>
        <!--箭头-->
        <div class="up">
            <div class="ups"></div>
        </div>
        <!--箭头 end-->
        <script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/swiper.jquery.min.js"></script>
        <script src="js/progress-ring.js" type="text/javascript" charset="utf-8"></script>
        <script type="text/javascript" src="js/app_313.js"></script>
        <script src="js/jweixin-1.0.0.js" type="text/javascript"></script>
        <script src="wechat_js/wx_monkv.js" type="text/javascript"></script>
        <script type="text/javascript">
            wx_monkv.config('<?= $openid ?>', 'pingfen_313');
            wx_monkv.actionLog('visit');
            
            // set up
            $('#js-userinfo1,#js-userinfo2').change(function() {
                if ($("#js-userinfo1").val() != '0' && $("#js-userinfo2").val() != '0') {
                    $("#js-btn-userinfo").show();
                } else {
                    $("#js-btn-userinfo").hide();
                }
            });

            $("#js-btn-userinfo").click(function() {
                var userdata_obj = {
                    userinfo1: $("#js-userinfo1").val(),
                    userinfo2: $("#js-userinfo2").val(),
                };
                wx_monkv.setUserInfo(JSON.stringify(userdata_obj), function() {
                }, function() {
                    alert('网络通信故障，请刷新重试');
                });
            });

            wx.config({
                debug: false,
                appId: '<?php echo $signPackage["appId"]; ?>',
                timestamp: <?php echo $signPackage["timestamp"]; ?>,
                nonceStr: '<?php echo $signPackage["nonceStr"]; ?>',
                signature: '<?php echo $signPackage["signature"]; ?>',
                jsApiList: [
                    'onMenuShareTimeline',
                    'onMenuShareAppMessage',
                ]
            });
            wx.ready(function() {
                // 在这里调用 API
                wx.onMenuShareTimeline({
                    title: '内部资料-禁止分享', // 分享标题
                    link: 'http://h5.quapp.net/cctv/forbidden.html', // 分享链接
                    imgUrl: 'http://h5.quapp.net/cctv/img/3.5/1/4.png', // 分享图标
                    success: function() {
                        // 用户确认分享后执行的回调函数
                        wx_monkv.actionLog('share_timeline_success');
                    },
                    cancel: function() {
                        // 用户取消分享后执行的回调函 	数
                        wx_monkv.actionLog('share_timeline_cancel');
                    }
                });
                wx.onMenuShareAppMessage({
                    title: '互动调研【第三期】', // 分享标题
                    desc: 'CCTV外语频道综合部【内部资料，注意保密】', // 分享描述
                    link: 'https://open.weixin.qq.com/connect/oauth2/authorize?appid=wxb1e05fcce8f01cb8&redirect_uri=http://h5.quapp.net/cctv/pingfen_313.php&response_type=code&scope=snsapi_base#wechat_redirect', // 分享链接
                    imgUrl: 'http://h5.quapp.net/cctv/img/3.13/share.png', // 分享图标
                    type: '', // 分享类型,music、video或link，不填默认为link
                    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                    success: function() {
                        // 用户确认分享后执行的回调函数
                        wx_monkv.actionLog('share_app_success');
                    },
                    cancel: function() {
                        // 用户取消分享后执行的回调函数
                        wx_monkv.actionLog('share_app_cancel');
                    }
                });
            });

            // init
            wx_monkv.getUserInfo(function(data) {
                var userdata_obj = JSON.parse(data.userdata);
                $("#js-userinfo1").val(userdata_obj.userinfo1);
                $("#js-userinfo2").val(userdata_obj.userinfo2);
                $("#js-btn-userinfo").show();
            });
            
            function showResults(){
                wx_monkv.formStat('pingfen_313_dev', 'maxpercent', 'ques1', ['1', '2', '3', '4'], function(data){
                    console.log(data);
                    $(".pagenine-p1").text($("#slide-ques1 [data-val="+data.value+"]").data('name'));
                    $(".pagenine-per1").text(Math.round(data.percent*100));
                });
                
                wx_monkv.formStat('pingfen_313_dev', 'maxpercent', 'ques2', ['1', '2', '3', '4'], function(data){
                    console.log(data);
                    $(".pagenine-p2").text($("#slide-ques2 [data-val="+data.value+"]").data('name'));
                    $(".pagenine-per2").text(Math.round(data.percent*100));
                });
                
                wx_monkv.formStat('pingfen_313_dev', 'maxpercent', 'ques3', ['1', '2', '3', '4', '5'], function(data){
                    console.log(data);
                    $(".pagenine-p3").text($('#slide-ques3 [data-val='+data.value+']').data('name'));
                    $(".pagenine-per3").text(Math.round(data.percent*100));
                });
                
                wx_monkv.formStat('pingfen_313_dev', 'maxpercent', 'ques4', ['1', '2', '3', '4', '5'], function(data){
                    console.log(data);
                    $(".pagenine-p4").text($("#slide-ques4 [data-val="+data.value+"]").data('name'));
                    $(".pagenine-per4").text(Math.round(data.percent*100));
                });
                
                wx_monkv.formStat('pingfen_313_dev', 'maxpercent', 'ques6', ['1', '2', '3'], function(data){
                    console.log(data);
                    $(".pagenine-p5").text($("#slide-ques6 [data-val="+data.value+"]").data('name'));
                    $(".pagenine-per5").text(Math.round(data.percent*100));
                });
                
                wx_monkv.formStat('pingfen_313_dev', 'avgvalue', 'ques5', ['1', '2', '3', '4', '5'], function(data){
                    console.log(data);
                    $(".pagenine-grade").text(parseFloat(data.value).toFixed(1) < 4? '4.0':parseFloat(data.value).toFixed(1));
                });
            }
            
            $("#js-btn-ques1").click(function(){
                $("#slide-ques1 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques1', 'count', selected_val);
//                    alert('selected ' + selected_val);
                });
            });
            
            $("#js-btn-ques2").click(function(){
                $("#slide-ques2 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques2', 'multi', selected_val);
//                    alert('selected ' + selected_val);
                });
//                alert('selected ' + selected_val);
            });
            
            $("#js-btn-ques3").click(function(){
                $("#slide-ques3 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques3', 'multi', selected_val);
//                    alert('selected ' + selected_val);
                });
            });
            
            $("#js-btn-ques4").click(function(){
                $("#slide-ques4 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques4', 'multi', selected_val);
//                    alert('selected ' + selected_val);
                });
            });

            $("#js-btn-ques5").click(function(){
                $("#slide-ques5 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques5', 'number', selected_val);
//                    alert('selected ' + selected_val);
                });
            });
            
            $("#js-btn-ques6").click(function(){
                $("#slide-ques6 .on").each(function(){
                    var selected_val = $(this).data('val');
                    wx_monkv.pushFormData('ques6', 'count', selected_val);
//                    alert('selected ' + selected_val);
                });
                wx_monkv.submitForm('pingfen_313_dev', function(data){
                    console.log(data);
                    showResults();
                });
                
//                alert('selected ' + selected_val);
            });

            // trick
            var trick_click_count = 0;
            $('#js-trick').on('tap', function(){
                trick_click_count = trick_click_count + 1;
                if (trick_click_count % 4 == 0){
                    showResults();
                    mySwiper.slideTo(8);
                }
            });
        </script>
    </body>
</html>