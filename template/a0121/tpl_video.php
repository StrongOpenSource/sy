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
    <div class="content">
        <div class="container">
            <div class="tx-detail-bar">
                <a href="{@class_link}" class="tx-cat-link">[{@class_name}]</a><b>{@name}</b>
            </div>
            {@palyer_js}
            <div class="tx-share">
                <div class="tx-share-url">
                    <span class="tx-share-lbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="tx-share-uri"></span>
                </div>
                <button class="tx-share-btn" onclick="copyHtmlLink();">
                    <span class="tx-share-icon">📋</span>{base64}复制链接{/base64}
                </button>
                <textarea id="copy" style="display:none;"></textarea>
                <script>(function(){var e=document.getElementById('thisUrlID');if(e)e.textContent=window.location.href;})();</script>
            </div>
            <section class="tx-section clearfix">
                <div class="tx-sec-hd"><h3 class="tx-sec-title">{base64}猜你想看{/base64}</h3></div>
                <ul class="tx-grid">
                    {list type:video mode:rand total:12 title_len:24}
                    <li><a class="tx-thumb" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"></a><div class="tx-card-info"><h5><a href="{_url}">{_title}</a></h5></div></li>
                    {/list}
                </ul>
            </section>
        </div>
    </div>
    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
