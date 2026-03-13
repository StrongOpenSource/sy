<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}">
    <meta name="description" content="{@site_desc}">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
    {@common_head}
    {@json_code}
</head>

<body>
    {@include file:header}

    <div class="ifg-wrap">
        <div class="ifg-sp">

            <div style="line-height:1.8;text-align:center;padding:18px;font-size:17px;margin:14px 0;word-break:break-all;background:var(--ifpnl);border:1px solid var(--ifbd);border-left:4px solid var(--ifr);border-radius:var(--ifrr);box-shadow:0 1px 4px var(--ifsh);">
                <a href="{@class_link}" style="color:var(--ifr);text-decoration:none;font-weight:700;margin-right:8px;">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="ifg-linksec">
                <div class="ifg-urlbox">
                    <span class="ifg-urllbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="ifg-urltext"></span>
                </div>
                <button class="ifg-copybtn" onclick="copyHtmlLink();">
                    <span class="ifg-ico">📋</span>
                    {base64}复制链接{/base64}
                </button>
                <textarea id="copy" style="display:none;"></textarea>
                <script>
                    (function() {
                        var el = document.getElementById('thisUrlID');
                        if (el) el.textContent = window.location.href;
                    })();
                </script>
            </div>

            <div class="ifg-sec clearfix">
                <div class="ifg-sec-hd clearfix">
                    <h3 class="ifg-sec-ttl">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="ifg-grid clearfix">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="ifg-thumb" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="ifg-card-info">
                            <h5><a href="{_url}">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </div>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
