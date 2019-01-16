;(function($) {
    $.fn.loadingRing = function() {
        var defaultOpt = {
            "trackColor": "#494f58",
            "progressColor": "#26a8b5",
            "status": 75,
            "last": 1500
        }; // 默认选项
        $(this).each(function() {
            var target = $(this);
            var color = target.data("color"); // 颜色
            var status = parseInt(target.data("status"), 10); // 状态
            var last = parseFloat(target.data("last"), 10) * 1000; // 持续时间
            var trackColor, progressColor;
            if (color && color.split(",").length === 2) {
                var colorSet = color.split(",");
                trackColor = colorSet[0];
                progressColor = colorSet[1];
            } else {
                trackColor = defaultOpt.trackColor;
                progressColor = defaultOpt.progressColor;
            }
            if (!status)
                status = defaultOpt.status;
            if (!last)
                last = defaultOpt.last;

            target.append("<div class='progress-track'></div><div class='progress-left'></div><div class='progress-right'></div><div class='progress-cover'></div><div class='progress-text'><span class='progress-num'>0</span><span class='progress-percent'>%</span></div>");
            
            var x = $(".progress-cover", target).height(); // 触发 Layout
            // http://stackoverflow.com/questions/12088819/css-transitions-on-new-elements

            $(".progress-track, .progress-cover", target).css("border-color", trackColor);
            $(".progress-left, .progress-right", target).css("border-color", progressColor);

            $(".progress-left", target).css({
                "transform": "rotate(" + status * 3.6 + "deg)",
                "-o-transform": "rotate(" + status * 3.6 + "deg)",
                "-ms-transform": "rotate(" + status * 3.6 + "deg)",
                "-moz-transform": "rotate(" + status * 3.6 + "deg)",
                "-webkit-transform": "rotate(" + status * 3.6 + "deg)",
                "transition": "transform " + last + "ms linear",
                "-o-transition": "-o-transform " + last + "ms linear",
                "-ms-transition": "-ms-transform " + last + "ms linear",
                "-moz-transition": "-moz-transform " + last + "ms linear",
                "-webkit-transition": "-webkit-transform " + last + "ms linear"
            });

            var i = 0; //计数起点
            var num = $(".progress-num", target);

            var plus = setInterval(function() {
                num.text(++i);
                if (i === status)
                    clearInterval(plus);
            }, last / status); // 显示进度

            if (status > 50) {
                var animation = "toggle " + (last * 50 / status) + "ms"
                $(".progress-right", target).css({
                    "opacity": 1,
                    "animation": animation,
                    "animation-timing-function": "step-end"
                });
                $(".progress-cover", target).css({
                    "opacity": 0,
                    "animation": animation,
                    "animation-timing-function": "step-start"
                });
            }
        });
    };
})(jQuery);
