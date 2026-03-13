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

    <div class="pg-wrap">
        <div class="pg-section">

            <div class="item-title-bar">
                <a href="{@class_link}">[{@class_name}]</a><b>{@name}</b>
            </div>

            <div class="item-meta clearfix">
                {base64}【影片格式】：{/base64}mp4<br>
                {base64}【影片大小】：{/base64}{@torrent_size}<br>
                {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                {base64}【影片预览】：{/base64}<br>

                <div class="poster-wrap">
                    {@torrent_capture_v2}
                </div>
            </div>

            <div class="action-row clearfix">
                <span class="hide-mob">
                    <a onclick="open_t()" class="action-btn" style="cursor:pointer;">{base64}下载种子{/base64}</a>
                </span>
                <a onclick="open_m()" href="javascript:;" class="action-btn">{base64}打开磁力{/base64}</a>
                <a onclick="copy_m()" href="javascript:;" class="action-btn">{base64}复制磁力{/base64}</a>
            </div>

            <div class="hide-mob" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank' style="color:var(--green);text-decoration:none;font-weight:600;">
                    {base64}{@var:api_config_bt_client_pc_download_text}{/base64}
                </a>
            </div>

            <div class="hide-desk" style="text-align:center;padding:12px 0;">
                <a href='{@var:api_config_bt_client_mobile_download_url}' style="color:var(--green);text-decoration:none;font-weight:600;">
                    {base64}{@var:api_config_bt_client_mobile_download_text}{/base64}
                </a>
            </div>

            <div class="link-share">
                <div class="link-share-display">
                    <span class="link-share-lbl">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="link-share-url"></span>
                </div>
                <button class="link-share-btn" onclick="copyHtmlLink();">
                    <span class="share-ico">📋</span>
                    {base64}复制链接分享{/base64}
                </button>
                <textarea id="copy" style="display:none;"></textarea>
                <script>
                    (function() {
                        var el = document.getElementById('thisUrlID');
                        if (el) el.textContent = window.location.href;
                    })();
                </script>
            </div>

            <div class="content-block clearfix">
                <div class="block-header clearfix">
                    <h3 class="block-title">{base64}猜你想看{/base64}</h3>
                </div>
                <ul class="media-grid clearfix">
                    {list type:bt mode:rand total:12 title_len:24}
                    <li>
                        <a class="media-cover" href="{_url}">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="media-info">
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
