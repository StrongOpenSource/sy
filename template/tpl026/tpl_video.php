<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-1.12.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="/style/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/custom.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/index.css">
    <!-- <link href="/template/{@var:cms_config_tpl_dir}/css/937c13acd9434668bacefafcef080024.css" rel="stylesheet">-->
    <style>
        .mobile-preview {
            display: none !important;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body class="index-page">

{@include file:header}







        <div class="container"></br>
            <div align="center"></div>
            <div class="banner-top"></div>
            <div class="headline">
                <h2>{@name}</h2>
            </div>
            <div class="block-video">
                <div class="video-holder">
{@palyer_js}
                </div>
            </div>
            <div align="center" style="max-width:800px; margin:0 auto;">
                <!-- ads -->
            </div>
            <!-- model-comments.html -->
            <div class="related-videos" id="list_videos_related_videos">
                <ul class="list-sort" id="list_videos_related_videos_filter_list">
                    <li><span class="">相关视频</span></li>
                </ul>
                <div class="box">
                    <div class="list-videos">
                        <script>

                        </script>
                        <div class="margin-fix" id="list_videos_related_videos_items">
{list type:video mode:rand total:10 title_len:40}
                                <div class="item">
                                    <a class="popup-video-link" href="{_url}">
                                        <div class="img ithumb"><img class="thumb lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}" />
                                        </div><strong class="title">{_title}</strong>
                                    </a>
                                </div>
{/list}
                            
                        </div>
                    </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>