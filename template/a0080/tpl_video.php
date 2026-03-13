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

    <div class="ent-wrap">
        <div class="ent-section">

            <div class="ent-panel ent-cf">
                <div class="ent-panel-hd">
                    <h2 class="ent-panel-title" style="display:flex;align-items:stretch;width:100%;">
                        <span style="display:flex;align-items:center;flex-wrap:nowrap;padding:10px 18px;background:var(--ent-red);color:#fff;font-size:14px;font-weight:600;line-height:1.5;overflow:hidden;width:100%;">
                            <a href="{@class_link}" style="display:inline;color:rgba(255,255,255,0.82);text-decoration:none;font-weight:700;font-size:13px;white-space:nowrap;margin-right:6px;flex-shrink:0;">[{@class_name}]</a><span style="display:inline;color:#fff;font-weight:600;font-size:14px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">{@name}</span>
                        </span>
                    </h2>
                </div>
                <div class="ent-panel-bd">
                    {@palyer_js}
                </div>
            </div>

            <div class="ent-sharebox">
                <div class="ent-url-area">
                    <span class="ent-url-label">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="ent-url-val"></span>
                </div>
                <button class="ent-share-btn" onclick="copyHtmlLink();">
                    <span class="ent-share-ico">📋</span>
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

            <div class="ent-panel ent-cf">
                <div class="ent-panel-hd">
                    <h3 class="ent-panel-title">
                        <span>{base64}猜你想看{/base64}</span>
                    </h3>
                </div>
                <div class="ent-panel-bd">
                    <ul class="ent-grid ent-cf">
                        {list type:video mode:rand total:12 title_len:24}
                        <li>
                            <a class="ent-poster" href="{_url}">
                                <img class="ent-lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="ent-info">
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
