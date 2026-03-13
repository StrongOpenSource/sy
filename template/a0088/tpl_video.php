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

    <div class="sx-wrap">
        <div class="sx-spacing">

            <div class="sx-title-bar">
                <a href="{@class_link}">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="sx-urlbar">
                <div class="sx-url-field">
                    <span class="sx-url-chip">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="sx-url-text"></span>
                </div>
                <button class="sx-copy-btn" onclick="copyHtmlLink();">
                    <span class="sx-icon">📋</span>
                    {base64}复制链接{/base64}
                </button>
                <textarea id="copy" style="display:none;"></textarea>
                <script>
                    (function() {
                        var el = document.getElementById('thisUrlID');
                        if (el) { el.textContent = window.location.href; }
                    })();
                </script>
            </div>

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="sx-thumb" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="sx-caption">
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
