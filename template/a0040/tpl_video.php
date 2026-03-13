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

    <div class="pvtwrap">
        <div class="pvtpad">

            <div class="pvt-detail-head">
                <a href="{@class_link}">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="share-section">
                <div class="share-url-display">
                    <span class="share-label">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="share-url"></span>
                </div>
                <button class="share-copy-btn" onclick="copyHtmlLink();">
                    <span class="share-icon">📋</span>
                    {base64}复制链接{/base64}
                </button>
                <textarea id="copy" style="display:none;"></textarea>
                <script>
                    (function() {
                        var u = document.getElementById('thisUrlID');
                        if (u) { u.textContent = window.location.href; }
                    })();
                </script>
            </div>

            <div class="pvt-section">
                <div class="pvt-sec-head">
                    <h3 class="pvt-sec-title">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="pvt-filmgrid clearfix" style="margin-top:12px;">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="pvt-filmcover" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="pvt-filminfo">
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
