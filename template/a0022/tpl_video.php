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

            <div style="line-height:1.8;text-align:center;padding:16px 20px;font-size:17px;margin:16px 0;word-break:break-all;background:#fff;border-radius:10px;border:1px solid #e4e4ec;box-shadow:0 2px 10px rgba(91,106,240,0.07);">
                <a href="{@class_link}" style="color:#5b6af0;text-decoration:none;font-weight:800;margin-right:8px;">[{@class_name}]</a><b>{@name}</b>
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
                        var el = document.getElementById('thisUrlID');
                        if (el) el.textContent = window.location.href;
                    })();
                </script>
            </div>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">{base64}猜你想看{/base64}</h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video mode:rand total:12 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
