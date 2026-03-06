                </div>
            </div>

            <div class="stui-foot clearfix">
                <div class="hidden-xs">
                    警告：我們立足於美利堅合眾國，對全球華人服務，受北美法律保護，若訪客地區法律不允許，請自行離開！<br>
                    </div>
                <p style="color:#ffffff;font-size:14px" class="text-muted visible-xs">Copyright © 2018-2025 {@site_name}</p>
            </div>
            <div class="hide"></div>
            <script src="/template/{@var:cms_config_tpl_dir}/js/lazyload.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript">
                $(".lazyload").lazyload({
                    effect: "fadeIn",
                    threshold: 300,
                    failurelimit: 20,
                    skip_invisible: false
                })
            </script>
            <style type="text/css">
                .fix_bar {
                    position: fixed;
                    right: 38px;
                    bottom: 320px;
                    z-index: 9999;
                    cursor: pointer;
                }

                .layui-fixbar-top {
                    position: fixed;
                    line-height: 19px;
                    text-align: center;
                    width: 35px;
                    bottom: 320px;
                    /* height: 46px; */
                    cursor: pointer;
                    background: #fff;
                    display: none;
                    border-radius: 6px;
                    box-shadow: 0 0 8px rgba(0, 0, 0, 0.13);
                    /* font-size: 9px; */
                    color: #005872;
                    z-index: 999999;
                }

                .layui-fixbar-down {
                    position: fixed;
                    line-height: 19px;
                    text-align: center;
                    width: 35px;
                    bottom: 320px;
                    /* height: 46px; */
                    cursor: pointer;
                    background: #fff;
                    display: none;
                    border-radius: 6px;
                    box-shadow: 0 0 8px rgba(0, 0, 0, 0.13);
                    /* font-size: 9px; */
                    color: #005872;
                    z-index: 999999;
                }
            </style>

            <ul class="fix_bar">
                <li class="layui-icon layui-fixbar-top" id="to_top" >返回顶部</li>

            </ul>
            <script>
                //回到顶部
                $("#to_top").click(function() {
                    $("html,body").animate({
                        scrollTop: 0
                    }, 200);
                });
                $(document).scroll(function() {
                    var scroll_top = $(document).scrollTop();
                    if (scroll_top > 800) {
                        $("#to_top").show();
                    } else {
                        $("#to_top").hide();
                    }
                });
                //去底部
                $("#to_bottom").click(function() {
                    $("html,body").animate({
                        scrollTop: document.body.clientHeight + 'px'
                    }, 200);
                });
                $(document).scroll(function() {
                    var scroll_top = $(document).scrollTop();
                    if (scroll_top < 800) {
                        $("#to_bottom").show();
                    } else {
                        $("#to_bottom").hide();
                    }
                });
            </script>

{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}