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

    <div class="wrap">
        <div class="section-pad">

            <div style="line-height:1.8;text-align:center;padding:18px 20px;font-size:17px;margin:16px 0;word-break:break-all;background:var(--clr-surface);border:1px solid var(--clr-border);border-left:4px solid var(--clr-accent);border-radius:var(--rad);">
                <a href="{@class_link}" style="color:var(--clr-accent);text-decoration:none;font-weight:700;margin-right:8px;text-transform:uppercase;">[{@class_name}]</a><b>{@name}</b>
            </div>

            {@palyer_js}

            <div class="link-share-panel">
                <div class="link-display-area">
                    <span class="link-tag-label">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="link-tag-url"></span>
                </div>
                <button class="btn-copy-link" onclick="copyHtmlLink();">
                    <span class="copy-icon">📋</span>
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

            <article class="content-block cf">
                <div class="block-header">
                    <h3 class="block-title">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="card-grid">
                    {list type:video mode:rand total:12 title_len:24}
                    <li>
                        <a class="media-card" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="card-desc">
                            <h5><a href="{_url}">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </article>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
