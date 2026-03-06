
<!--             <div class="group-box" style="background: rgba(220, 172, 206, 0.4);">
                <p class="group-title"><i class="layui-icon layui-icon-link"></i>&nbsp;&nbsp;网友精选</p>
                <div class="group-contents layui-row">
                    <a class="group-item layui-col-xs3 layui-col-md2" href="h3.com"  onclick="gtag('event', '友链', {'event_category': '点击', 'event_label': '巨屌导航','value': 500});" rel="nofollow">
                        <p style="text-align:center;    background: #;color: #;">巨屌导航</p>
                    </a>
                    <a class="group-item layui-col-xs3 layui-col-md2" href=""  onclick="gtag('event', '友链', {'event_category': '点击', 'event_label': '人妻秘密 ','value': 500});" rel="nofollow">
                        <p style="text-align:center;    background: #;color: #;">人妻秘密 </p>
                    </a>
                </div>
            </div> -->
            <style>
                .bottom {
                    margin-top: 20px;
                    background-color: rgba(0, 0, 0, 0.3);
                    padding: 10px 0;
                }

                .bottom .wrap p {
                    color: #ccc;
                    text-align: center;
                    padding: 4px 0;
                }

                .return_top {
                    display: none;
                    z-index: 200;
                    position: fixed;
                    bottom: 200px;
                    right: 5px;
                    z-index: 2147483647;
                }

                .return_top i {
                    border-radius: 50%;
                    background-color: #1e9fff;
                    font-size: 40px;
                    color: #efefef;
                    font-weight: bold;
                }

                @media screen and (max-device-width: 760px) {
                    .bottom {
                        margin-top: 0 !important;
                    }

                    .return_top i {
                        font-size: 2.5rem;
                    }
                }
            </style>
            <div class="bottom">
                <div class="wrap">
                    <p>
                        联络信息：，TG紙飛机@
                    </p>
                    <p>警告：如果您當地法律許可之法定年齡本站歸類為限定為成年者已具有完整行為能力且願接受本站內影音內容、 及各項條款之網友才可瀏覽,站点申明：我们立足于美利坚合众国，受北美法律保护,未满18岁或被误导来到这里，请立即离开！</p>
                </div>
            </div>

            <div class="return_top" style="display: block;"><i class="layui-icon layui-icon-top"></i></div>
            <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-1.10.2.min.js"></script>
            <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.cookie.js" charset="utf-8"></script>
            <script src="/template/{@var:cms_config_tpl_dir}/js/layui.all.js" charset="utf-8"></script>
            <script src="/template/{@var:cms_config_tpl_dir}/js/base.js"></script>
            <!--[if lt IE 9]>
  <script src="/template/{@var:cms_config_tpl_dir}/js/html5.min.js"></script>
  <script src="/template/{@var:cms_config_tpl_dir}/js/respond.min.js"></script>
<![endif]-->
            <script>
                setTimeout(function() {
                    var closeableBoxes = document.getElementsByClassName("closeable");
                    for (var i = 0; i < closeableBoxes.length; i++) {
                        var closeableBox = closeableBoxes[i];
                        var closeDiv = document.createElement('div');
                        closeDiv.onclick = function() {
                            $(this).parent().hide();
                            return false;
                        };
                        closeDiv.style = "position:absolute;z-index: 99999;display:inline-block;height:14px;font-size:10px;background-color:rgb(153,0,0,0.5);color:white;padding:4px;line-height:14px;top:0px;right:0px;";
                        closeDiv.innerHTML = "关闭";
                        closeableBox.append(closeDiv);
                    }
                }, 2000);
            </script>
            <script>
                var basePath = "";
                var jsPath = "/static/js";
                var cssPath = "/static/css";
                var imgPath = "/static/images";
                var layer;
                var element;
                var form;
                var rate;
                if (self != top) {
                    top.location.href = location.href;
                }
                $(function() {
                    layui.use('element', function() {
                        element = layui.element;
                    });
                    layui.use('layer', function() {
                        layer = layui.layer;
                    });
                    layui.use('form', function() {
                        form = layui.form;
                    });
                    layui.use('rate', function() {
                        rate = layui.form;
                    });
                    //图片懒加载
                    $('img[data-src]').each(function() {
                        // addMark(this, 'layui-icon-loading layui-anim-rotate layui-anim-loop', 'load');
                        var img = new Image();
                        img.src = $(this).attr('data-src');
                        var that = this;
                        img.onload = function() {
                            $(that).attr('src', img.src);
                            removeMark(that, 'load');
                        };
                        // $(this).parent().hover(function() {
                        //     addMark(that, 'layui-icon-play', 'play');
                        // }, function() {
                        //     removeMark(that, 'play');
                        // });
                    });

                    $(window).scroll(function() {
                        var scroTop = $(window).scrollTop();
                        if (scroTop > 500) {
                            $('.return_top').fadeIn(500);
                        } else {
                            $('.return_top').fadeOut(500);
                        }
                    });
                    $('.return_top').click(function() {
                        //将当前窗口的内容区滚动高度改为0，即顶部
                        $("html,body").animate({
                            scrollTop: 0
                        }, "fast");
                    });

                });

                function addMark(target, icon, mark) {
                    var left = $(target).parent().css('padding-left');
                    var width = $(target).css('width');
                    var iconTop = $(target).attr('mark-top');
                    var height = $(target).attr('h') ? $(target).attr('h') : $(target).css('height');
                    var br = $(target).css('border-radius');
                    $(target).attr('h', height);
                    if (!iconTop) {
                        var iconTop = (parseInt(height) - 50) / 2 + "px";
                    }
                    $(target).parent().append("<div style='position: absolute; top:0px;left:" + left + "; width: " + width + "; height:" + height + ";border-radius:" + br + ";" +
                        "z-index: 98; text-align: center;opacity: 0.9;color: #fff;background: rgba(172, 148, 85, 0.4);' " + mark + ">" +
                        "<i class='" + icon + " layui-icon layui-anim' style='font-size: 50px; color: orange;margin-top:" + iconTop + ";'></i></div>");
                }

                function removeMark(target, mark) {
                    $(target).parent().find('div[' + mark + ']').remove();
                }

                function randomColor(s) {
                    return '#' +
                        (function(color) {
                            return (color += s[Math.floor(Math.random() * s.length)]) &&
                                (color.length == 6) ? color : arguments.callee(color);
                        })('');
                }

                function hexToRgba(hex, a) {
                    var rgb = [];
                    hex.replace(/[0-9A-F]{2}/ig, function(kw) {
                        rgb.push(eval('0x' + kw)); //十六进制转化为十进制并存如数组
                    });
                    return 'rgba(' + rgb.join(',') + ',' + a + ')'; //输出RGB格式颜色
                }
            </script>
            <script>
                $(function() {
                    layui.use('carousel', function() {
                        var carousel = layui.carousel;
                        carousel.render({
                            elem: '#slide',
                            width: '100%',
                            interval: 3000,
                            height: isPC() ? ($('#top-novel').css('height')) : "200px",
                            arrow: 'always'
                        });
                    });
                    $('#searchBtn').click(function() {
                        var sword = $('#searchInput').val();
                        if (sword.trim() == "") {
                            layer.msg("请输入搜索内容");
                        } else {
                            location.href = "/search/" + sword;
                        }
                    });
                    var showCats = false;
                    $('#menuBtn').click(function() {
                        if (showCats) {
                            $('#cats').hide();
                            $('#menuBtn').find('i').addClass('layui-icon-spread-right');
                            $('#menuBtn').find('i').removeClass('layui-icon-spread-left');
                            showCats = !showCats;
                        } else {
                            $('#cats').show();
                            $('#menuBtn').find('i').removeClass('layui-icon-spread-right');
                            $('#menuBtn').find('i').addClass('layui-icon-spread-left');
                            showCats = !showCats;
                        }
                    });
                    $('.group-box').each(function() {
                        $(this).css('background', hexToRgba(randomColor('abcde'), 0.4));
                    });
                    if ($('.header-title').find('img').length == 0 && isPC()) {
                        $('header').css('padding-top', '10px');
                        $('header').css('padding-bottom', '15px');
                    }
                    // var searchHeight = parseInt($('.search-wrap').css('height'));
                    // var headerHeight = parseInt($('header').css('height'));
                    // $('.search-wrap').css('margin-top', (headerHeight - searchHeight) / 2 + "px");
                    // $('.search-wrap').show();
                });
            </script>
            
        </div>
    </div>


{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}