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

    <div class="content">
        <div class="container">
            <div style="line-height:1.8;text-align:center;padding:14px 20px;font-size:17px;margin:14px 0;word-break:break-all;background:var(--xc-panel);border-radius:var(--xc-radius);border:1px solid var(--xc-border);border-top:3px solid var(--xc-coral);box-shadow:var(--xc-shadow-sm);">
                <a href="{@class_link}" style="color:var(--xc-coral);text-decoration:none;font-weight:700;margin-right:8px;">[{@class_name}]</a><b>{@name}</b>
            </div>

            <div class="clearfix" style="font-size:14px;line-height:2;padding:18px 22px;background:var(--xc-panel);border-radius:var(--xc-radius);border:1px solid var(--xc-border);border-top:3px solid var(--xc-coral);margin:14px 0;box-shadow:var(--xc-shadow-sm);">
                {base64}【影片格式】：{/base64}mp4<br>
                {base64}【影片大小】：{/base64}{@torrent_size}<br>
                {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                {base64}【影片预览】：{/base64}<br>

                <div class="torrent-capture-grid">
                    <picture>
                        {@torrent_capture_v2}
                    </picture>
                </div>
            </div>

            <div style="clear:both;"></div>

            <div class="download clearfix">
                <span class="hide_mobile">
                    <a onclick="open_t()" class="down_btn" style="cursor:pointer;">{base64}下载种子{/base64}</a>
                </span>
                <a onclick="open_m()" href="javascript:;" class="down_btn">{base64}打开磁力{/base64}</a>
                <a onclick="copy_m()" href="javascript:;" class="down_btn">{base64}复制磁力{/base64}</a>
            </div>

            <div class="hide_mobile" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank' style="color:var(--xc-coral);text-decoration:none;font-weight:600;font-size:13px;">
                    {base64}{@var:api_config_bt_client_pc_download_text}{/base64}
                </a>
            </div>

            <div class="hide_pc" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_mobile_download_url}' style="color:var(--xc-coral);text-decoration:none;font-weight:600;font-size:13px;">
                    {base64}{@var:api_config_bt_client_mobile_download_text}{/base64}
                </a>
            </div>

            <div class="share-section">
                <div class="share-url-display">
                    <span class="share-label">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="share-url"></span>
                </div>
                <button class="share-copy-btn" onclick="copyHtmlLink();">
                    <span class="share-icon">📋</span>
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

            <div class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">{base64}猜你想看{/base64}</h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:bt mode:rand total:12 title_len:24}
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
            </div>
        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
