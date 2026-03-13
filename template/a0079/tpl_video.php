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

    <div class="pg-wrap">
        <div class="pg-block">

            <div class="content-block cf">
                <div class="cb-header">
                    <h2 class="cb-title" style="font-size:16px;">
                        <a href="{@class_link}" style="color:var(--np-blue);text-decoration:none;font-weight:700;margin-right:6px;">[{@class_name}]</a><span style="color:var(--np-text);">{@name}</span>
                    </h2>
                </div>
                <div class="cb-body">
                    {@palyer_js}
                </div>
            </div>

            <div class="share-strip">
                <div class="url-panel">
                    <span class="url-prefix">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="url-display"></span>
                </div>
                <button class="btn-share" onclick="copyHtmlLink();">
                    <span class="share-ic">📋</span>
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

            <div class="content-block cf">
                <div class="cb-header">
                    <h3 class="cb-title">{base64}猜你想看{/base64}</h3>
                </div>
                <div class="cb-body">
                    <ul class="poster-row cf">
                        {list type:video mode:rand total:12 title_len:24}
                        <li>
                            <a class="poster-thumb" href="{_url}">
                                <img class="lazy-load" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="poster-caption">
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
