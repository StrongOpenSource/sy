<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="referrer" content="always">
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="XIAOSISI">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/avv-share.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/av-103.css" media="print" onload="this.media='all'">

<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style="background:#10241a">




{@include file:header}
        <div class="body">
            <div class="content bottom right">
                <div class="video_list">
                    <div class=" wangfeill">
                        <!-- siwa -->
                        <h2>
                            {@name}
                        </h2>

                        <div class="player">
                            <div class="video" id="playvideos" style="padding:0;">
                                
{@palyer_js}

                            </div>

                            <style>
                                .hhh,
                                .kkk {
                                    width: 100%;
                                    text-align: center;
                                    display: inline-block;
                                }

                                .hhh a {
                                    padding: 10px 20px;
                                    background: yellow;
                                    color: red;
                                    font-weight: bold;
                                    border-radius: 1px;
                                }

                                .hhh a:hover {
                                    background: red;
                                    color: white;
                                }

                                .kkk a img {
                                    max-width: 100%;
                                }
                            </style>

                        </div>

                        <div class="player-list" style="margin-bottom:30px;">
                            <h2>相关视频</h1>
                                <div class="colliu">

{list type:video mode:rand total:12 title_len:40}
                            <div class="data" style="">
                                <a href="{_url}" class="" >
                                    <div class="img">
                                        <img src="{_pic}" loading="lazy" style=""></div>
                                    <p class="title" style="">{_title}</p>
                                </a>
                            </div>
{/list}

                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.4.min.js"></script>

{@js_tpl_code}
{@include file:footer}
</body>

</html>