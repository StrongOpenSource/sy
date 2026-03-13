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
            <div class="g-detail-bar">
                <a href="{@class_link}" class="g-cat-link">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="g-share-strip">
                <div class="g-share-url-box">
                    <span class="g-share-lbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="g-share-uri"></span>
                </div>
                <button class="g-share-copy" onclick="copyHtmlLink();">
                    <span class="g-share-ico">📋</span>
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

            <section class="g-section clearfix">
                <div class="g-sec-hd">
                    <h3 class="g-sec-title">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="g-card-grid">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="g-thumb-link" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="g-card-info">
                            <h5><a href="{_url}">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </section>
        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
