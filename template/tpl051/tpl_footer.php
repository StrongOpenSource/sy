
    <style>
        .bottom {
            margin-top: 20px;
        }

        .bottom>.wrap {
            color: #fff;
        }

        .bottom .wrap p {
            text-align: center;
            padding: 4px 0;
        }

        .return_top {
            display: none;
            position: fixed;
            bottom: 155px;
            cursor: pointer;
            z-index: 2147483647;
        }

        .return_top i {
            border-radius: 22%;
            background-color: #2c3d4e;
            font-size: 40px;
            color: #cacaca;
            font-weight: bold;
        }

        @media screen and (max-device-width: 760px) {
            .bottom {
                margin-top: 0 !important;
                border-top: 1px solid #111 !important;
            }

            .return_top i {
                font-size: 2.2rem;
            }
        }

        @media screen and (min-width: 760px) {
            .return_top {
                right: 15%;
            }
        }

        @media screen and (max-width: 760px) {
            .return_top {
                right: 5px;
            }
        }
    </style>
    <div>
        <div class="return_top"><i class="layui-icon layui-icon-top"></i>

        </div>
    </div>
    <div class="bottom">
        <script>
            if (window.scrollY > 500) {
                document.querySelector(".return_top").style.display = 'block';
            }
            window.addEventListener("scroll", function() {
                var scroTop = window.scrollY;
                if (scroTop > 500) {
                    document.querySelector(".return_top").style.display = 'block';
                } else {
                    document.querySelector(".return_top").style.display = 'none';
                }
            });
            $('.return_top').click(function() {
                $("html,body").animate({
                    scrollTop: 0
                }, "fast");
            });
            $('img[data-src]').each(function() {
                var img = new Image();
                img.src = $(this).attr('data-src');
                var that = this;
                img.onload = function() {
                    $(that).attr('src', img.src);
                };
                img.onerror = function() {
                    $(that).attr('src', '/template/{@var:cms_config_tpl_dir}/ylczs-hei/loads.jpg');
                }
            });
        </script>

        <div class="wrap" style="text-align:center;">
            {base64}广告合作{/base64}
            <strong>Copyright © 2020 - 2026 </strong>
        </div>
    </div>


    <style type="text/css">
        @media screen and (max-width: 610px) {
            .detail-img img {
                width: 100%;
                height: 100%;
            }
        }
    </style>
    <style>
        .label2 a {
            align-items: center;
            background-color: #000;
            border-radius: 4px;
            color: #fff;
            display: inline-flex;
            font-size: 0.75rem;
            height: 2em;
            justify-content: center;
            line-height: 1.5;
            padding-left: .75em;
            padding-right: .75em;
            white-space: nowrap;
            margin-bottom: 3px;
            margin-right: 3px;
            border: 1px solid #fff;
        }
    </style>

    <script>
        function search(s) {
            if (s == "") {
                layer.open({
                    content: '请输入关键词搜索！',
                    skin: 'msg',
                    time: 2 //2秒后自动关闭
                });
                return;
            }
            location.href = "/search.php?content=" + s;
        }
    </script>







{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}