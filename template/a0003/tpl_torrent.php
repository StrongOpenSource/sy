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
    <script src="/template/{@var:cms_config_tpl_dir}/js/modern.js"></script>
    {@common_head}
    {@json_code}
</head>
<body>
    {@include file:header}

    <div class="content">
        <div class="container">
            <div style="line-height:1.8;text-align:center;padding:20px;font-size:18px;margin:20px 0;word-break:break-all;background:rgba(24,24,24,.9);border:1px solid var(--line);border-radius:var(--rnd-lg);">
                <a href="{@class_link}" style="color:var(--accent);text-decoration:none;font-weight:600;margin-right:8px;">[{@class_name}]</a><b style="color:var(--txt-strong);">{@name}</b>
            </div>

            <div style="font-family:var(--ff);font-size:15px;line-height:2;padding:24px;background:rgba(24,24,24,.9);border:1px solid var(--line);border-radius:var(--rnd-lg);margin:20px 0;color:var(--txt-normal);">
                <span style="color:var(--txt-faint);">{base64}【影片格式】：{/base64}</span>mp4<br>
                <span style="color:var(--txt-faint);">{base64}【影片大小】：{/base64}</span>{@torrent_size}<br>
                <span style="color:var(--txt-faint);">{base64}【影片时长】：{/base64}</span>{@torrent_duration}分钟<br>
                <span style="color:var(--txt-faint);">{base64}【分辨率】：{/base64}</span>{@torrent_resolution}<br>
                <span style="color:var(--txt-faint);">{base64}【影片预览】：{/base64}</span><br>
                <div class="torrent-capture-grid">

<picture>
{@torrent_capture_v2}
</picture>

                </div>
            </div>

            <div style="clear:both;"></div>

            <script type="text/javascript">
                function copy_m() {
                    if (typeof j !== 'undefined' && j.tm) {
                        navigator.clipboard.writeText(j.tm)
                            .then(function() { showNotification('复制成功: ' + j.tm, 'success'); })
                            .catch(function() { showNotification('复制失败', 'error'); });
                    }
                }
                function open_t() { if (typeof j !== 'undefined' && j.tt) window.open(j.tt); }
                function open_m() { if (typeof j !== 'undefined' && j.tm) window.open(j.tm); }
            </script>

            <div class="download clearfix">
                <span class="hide_mobile">
                    <a onclick="open_t()" class="down_btn" style="cursor:pointer;">{base64}下载种子{/base64}</a>
                </span>
                <a onclick="open_m()" href="javascript:;" class="down_btn">{base64}打开磁力{/base64}</a>
                <a onclick="copy_m()" href="javascript:;" class="down_btn">{base64}复制磁力{/base64}</a>
            </div>

            <div class="hide_mobile" style="text-align:center;padding:16px;">
                <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank' style="color:var(--accent);font-weight:600;">
                    {base64}{@var:api_config_bt_client_pc_download_text}{/base64}
                </a>
            </div>

            <div class="hide_pc" style="text-align:center;padding:16px;">
                <a href='{@var:api_config_bt_client_mobile_download_url}' style="color:var(--accent);font-weight:600;">
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
                        if (el) el.textContent = window.location.href;
                    })();
                </script>
            </div>

            <div class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">{base64}猜你想看{/base64}</h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:bt mode:rand total:12 title_len:48}
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