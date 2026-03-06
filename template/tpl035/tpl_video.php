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
{@palyer_js}

    </section>


    <section>
        <div>
            <h3>推荐内容</h3>
        </div>
        <main>
{list type:video mode:rand total:8 title_len:40}
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