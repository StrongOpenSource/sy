<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
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
                    <div style="display:flex;flex-wrap:wrap;gap:14px;font-size:13px;color:var(--mt-muted);background:var(--mt-bg2);padding:12px 16px;border-radius:var(--mt-r-sm);margin-bottom:16px;border:1px solid var(--mt-bdr-lt);">
                        <span><strong style="color:var(--mt-purple);">{base64}格式{/base64}</strong>　mp4</span>
                        <span><strong style="color:var(--mt-purple);">{base64}大小{/base64}</strong>　{@torrent_size}</span>
                        <span><strong style="color:var(--mt-purple);">{base64}时长{/base64}</strong>　{@torrent_duration}{base64}分钟{/base64}</span>
                        <span><strong style="color:var(--mt-purple);">{base64}分辨率{/base64}</strong>　{@torrent_resolution}</span>
                    </div>
                    <p style="font-size:12px;color:var(--mt-sub);margin-bottom:10px;font-weight:500;letter-spacing:0.3px;">{base64}▶ 影片预览{/base64}</p>
                    <div class="mt-capture">
                        <picture>
                            {@torrent_capture_v2}
                        </picture>
                    </div>
                </div>
            </div>

            <div style="clear:both;"></div>

            <div class="mt-ops xcf">
                <span class="v-pc">
                    <a onclick="open_t()" class="mt-op-btn" style="cursor:pointer;">{base64}下载种子{/base64}</a>
                </span>
                <a onclick="open_m()" href="javascript:;" class="mt-op-btn">{base64}打开磁力{/base64}</a>
                <a onclick="copy_m()" href="javascript:;" class="mt-op-btn">{base64}复制磁力{/base64}</a>
            </div>

            <div class="v-pc" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank' style="color:var(--mt-purple);text-decoration:none;font-weight:600;font-size:14px;">
                    {base64}{@var:api_config_bt_client_pc_download_text}{/base64}
                </a>
            </div>

            <div class="v-mob" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_mobile_download_url}' style="color:var(--mt-pink);text-decoration:none;font-weight:600;font-size:14px;">
                    {base64}{@var:api_config_bt_client_mobile_download_text}{/base64}
                </a>
            </div>

            <div class="mt-sharezone">
                <div class="mt-url-wrap">
                    <span class="mt-url-lbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="mt-url-str"></span>
                </div>
                <button class="mt-copybtn" onclick="copyHtmlLink();">
                    <span class="mt-copy-ic">📋</span>
                    {base64}复制链接分享{/base64}
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
                        {list type:bt mode:rand total:12 title_len:24}
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
