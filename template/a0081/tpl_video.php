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

    <div class="mt-wrap">
        <div class="mt-row">

            <div class="mt-card xcf">
                <div class="mt-card-top">
                    <h2 class="mt-card-ttl" style="font-size:14px;font-weight:600;">
                        <a href="{@class_link}" style="font-size:13px;margin-right:6px;opacity:0.75;">[{@class_name}]</a>{@name}
                    </h2>
                </div>
                <div class="mt-card-body">
                    {@palyer_js}
                </div>
            </div>

            <div class="mt-sharezone">
                <div class="mt-url-wrap">
                    <span class="mt-url-lbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="mt-url-str"></span>
                </div>
                <button class="mt-copybtn" onclick="copyHtmlLink();">
                    <span class="mt-copy-ic">📋</span>
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

            <div class="mt-card xcf">
                <div class="mt-card-top">
                    <h3 class="mt-card-ttl">{base64}猜你想看{/base64}</h3>
                </div>
                <div class="mt-card-body">
                    <ul class="mt-pgrid xcf">
                        {list type:video mode:rand total:12 title_len:24}
                        <li>
                            <a class="mt-thumb" href="{_url}">
                                <img class="mt-lz" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="mt-cap">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </div>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
