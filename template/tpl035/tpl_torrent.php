<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="yandex-verification" content="586fe496a46a2130" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta name="google" content="notranslate">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <link rel="icon" type="image/png" href="/static/a1.png">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/a1.css">
    <script type="text/javascript">
        (function(designW) {
            var docEl = document.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth < 400) {
                        docEl.style.fontSize = (clientWidth / designW) + 'px'
                    } else {
                        docEl.style.fontSize = '16px'
                    }
                };
            if (!document.addEventListener) return;
            recalc();
            window.addEventListener(resizeEvt, recalc, false);
            document.addEventListener('DOMContentLoaded', recalc, false)
        })(25);
    </script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/lazysizes.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/hls.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/dplayer.min.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}
    <section>


<h1 style="margin: 10px;">{@name}</h1>


<div style="text-align: left;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix" style="margin: 0px;">
    {@torrent_capture}
</div>

<div style="clear: both;"></div>

<div class="download">
    <div class="hide_mobile">
        <div class="downbtn">
<a onclick="open_t()" >{base64}下载种子{/base64}</a>
        </div>
    </div>
    <div class="downbtn">
<a onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>
    </div>
    <div class="downbtn">
<a onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
    </div>
</div>

<div style="float: left; clear: both;"></div>
<div style="text-align: left;">
    <div class="hide_mobile" style="padding: 10px;">
        <a style="font-size: 16px; color:#575757 ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color:#575757 ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
    </div>
</div>


<script type="text/javascript">
    function copy_m() {
        navigator.clipboard.writeText(j.tm)
            .then(() => {
                alert('复制成功: ' + j.tm);
            })
            .catch(err => {
                alert('复制失败。');
            });
    }
    function open_t() {
        window.open(j.tt);
    }
    function open_m() {
        window.open(j.tm);
    }
</script>


<div class="wrapper2">
   <p id="m_text" style="display: none;">{@var:torrent_magnet}</p>
   <textarea id="m_input"></textarea>
</div>





    </section>


    <section>
        <div>
            <h3> {base64}推荐内容{/base64}</h3>
        </div>
        <main>
{list type:bt mode:rand total:8 title_len:40}
            <article><a href="{_url}" >
                    <figure><img class="lazyload" data-src="{_pic}"></figure><cite>{_title}</cite>
                </a></article>
{/list}

                
        </main>
    </section>
{@js_tpl_code}
{@include file:footer}
</body>

</html>