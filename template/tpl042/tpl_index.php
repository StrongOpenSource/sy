<!DOCTYPE html>
<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="referrer" content="always">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.js"></script>
    <meta name="referrer" content="always">
    <script type="text/javascript">
        (function(doc, win) {
            var docEl = doc.documentElement,
                resizeEvt = 'orientationchange' in window ? 'orientationchange' : 'resize',
                recalc = function() {
                    var clientWidth = docEl.clientWidth;
                    if (!clientWidth) return;
                    if (clientWidth >= 1000) {
                        docEl.style.fontSize = '20px'
                    } else if (clientWidth >= 720) {
                        docEl.style.fontSize = 20 * (clientWidth / 1000) + 'px'
                    } else if (clientWidth >= 500) {
                        docEl.style.fontSize = '25px'
                    } else {
                        docEl.style.fontSize = 25 * (clientWidth / 500) + 'px'
                    }
                };
            if (!doc.addEventListener) return;
            win.addEventListener(resizeEvt, recalc, false);
            doc.addEventListener('DOMContentLoaded', recalc, false)
        })(document, window);
    </script>

<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
        <main class="main">
            <div class="listtop">
                <h3 class="title">{@class_name type:video index:2}</h3><a href="{@class_link type:video index:2}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:video index:2 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>


        <main class="main">
            <div class="listtop">
                <h3 class="title">{@class_name type:video index:1}</h3><a href="{@class_link type:video index:1}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:video index:1 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>

        <main class="main">
            <div class="listtop">
                <h3 class="title">{@class_name type:video index:4}</h3><a href="{@class_link type:video index:4}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:video index:4 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>

        <main class="main">
            <div class="listtop">
                <h3 class="title">{@class_name type:video index:3}</h3><a href="{@class_link type:video index:3}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:video index:3 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>

        <main class="main">
            <div class="listtop">
                <h3 class="title">{base64}国产磁力{/base64}</h3><a href="{@class_link type:video index:1}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:bt index:1 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>



        <main class="main">
            <div class="listtop">
                <h3 class="title">{base64}日本磁力{/base64}</h3><a href="{@class_link type:video index:2}">更多 »</a>
            </div>
            <div class="vodlist">
{list type:bt index:2 total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}">
                            <img class="lazy" data-original="" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
            </div>
        </main>
{@js_tpl_code}
{@include file:footer}
</body>

</html>