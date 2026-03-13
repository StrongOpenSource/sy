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

    <div class="ne-sect">
        <div class="ne-wrap">
            <div style="line-height: 1.8; text-align: center; padding: 14px 18px; font-size: 16px; margin: 14px 0; word-break: break-all; background: var(--ne-white); border: 1px solid var(--ne-border); border-left: 3px solid var(--ne-red);">
                <a href="{@class_link}" style="color: var(--ne-red); text-decoration: none; font-weight: 700; margin-right: 8px;">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="ne-sharebox">
                <div class="ne-shareurl">
                    <span class="ne-sharelbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="ne-sharetext"></span>
                </div>
                <button class="ne-sharebtn" onclick="copyHtmlLink();">
                    <span class="ne-shareicostr">📋</span>
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

            <div class="ne-module clearfix">
                <div class="ne-modhead clearfix">
                    <h3 class="ne-modtitle">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="ne-filmlist clearfix">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="ne-filmthumb" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="ne-filmname">
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
