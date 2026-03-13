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
        <div class="pg-block">

            <div class="content-block cf">
                <div class="cb-header">
                    <h2 class="cb-title" style="font-size:16px;">
                        <a href="{@class_link}" style="color:var(--np-blue);text-decoration:none;font-weight:700;margin-right:6px;">[{@class_name}]</a><span style="color:var(--np-text);">{@name}</span>
                    </h2>
                </div>
                <div class="cb-body">
                    <div style="font-size: 14px; line-height: 2; color: var(--np-muted); margin-bottom: 16px;">
                        <span style="color:var(--np-navy);font-weight:600;">{base64}【影片格式】{/base64}</span>mp4 &nbsp;
                        <span style="color:var(--np-navy);font-weight:600;">{base64}【大小】{/base64}</span>{@torrent_size} &nbsp;
                        <span style="color:var(--np-navy);font-weight:600;">{base64}【时长】{/base64}</span>{@torrent_duration}{base64}分钟{/base64} &nbsp;
                        <span style="color:var(--np-navy);font-weight:600;">{base64}【分辨率】{/base64}</span>{@torrent_resolution}
                    </div>
                    <div style="margin-bottom: 10px; font-size: 14px; color: var(--np-muted);">{base64}【影片预览】{/base64}</div>
                    <div class="capture-zone">
                        <picture>
                            {@torrent_capture_v2}
                        </picture>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

            <div class="op-buttons cf">
                <span class="show-pc">
                    <a onclick="open_t()" class="op-btn" style="cursor: pointer;">{base64}下载种子{/base64}</a>
                </span>
                <a onclick="open_m()" href="javascript:;" class="op-btn">{base64}打开磁力{/base64}</a>
                <a onclick="copy_m()" href="javascript:;" class="op-btn">{base64}复制磁力{/base64}</a>
            </div>

            <div class="show-pc" style="text-align: center; padding: 14px 0;">
                <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank' style="color: var(--np-blue); text-decoration: none; font-weight: 600; font-size: 14px;">
                    {base64}{@var:api_config_bt_client_pc_download_text}{/base64}
                </a>
            </div>

            <div class="show-mob" style="text-align: center; padding: 14px 0;">
                <a href='{@var:api_config_bt_client_mobile_download_url}' style="color: var(--np-blue); text-decoration: none; font-weight: 600; font-size: 14px;">
                    {base64}{@var:api_config_bt_client_mobile_download_text}{/base64}
                </a>
            </div>

            <div class="share-strip">
                <div class="url-panel">
                    <span class="url-prefix">{base64}当前链接{/base64}</span>
                    <span id="thisUrlID" class="url-display"></span>
                </div>
                <button class="btn-share" onclick="copyHtmlLink();">
                    <span class="share-ic">📋</span>
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

            <div class="content-block cf">
                <div class="cb-header">
                    <h3 class="cb-title">{base64}猜你想看{/base64}</h3>
                </div>
                <div class="cb-body">
                    <ul class="poster-row cf">
                        {list type:bt mode:rand total:12 title_len:24}
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
