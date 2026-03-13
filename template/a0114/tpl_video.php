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

    <div class="rn-section">
        <div class="rn-wrap">
            <div style="line-height: 1.8; text-align: center; padding: 16px; font-size: 16px; margin: 16px 0; word-break: break-all; background: var(--red-pale); border-radius: 8px; border-left: 4px solid var(--red);">
                <a href="{@class_link}" style="color: var(--red); text-decoration: none; font-weight: 700; margin-right: 8px;">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="rn-sharepanel">
                <div class="rn-shareurl">
                    <span class="rn-sharelbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="rn-sharestr"></span>
                </div>
                <button class="rn-sharebtn" onclick="copyHtmlLink();">
                    <span class="rn-shareico">📋</span>
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

            <div class="rn-block clearfix">
                <div class="rn-blockhead clearfix">
                    <h3 class="rn-blocktitle">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="rn-covers clearfix">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="rn-thumb" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="rn-caption">
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
