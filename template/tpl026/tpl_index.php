<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
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







        <div class="container" id="index-main-container"></br>
            <div class="content">
                <div id="">

                    <div class="headline">
                        <h2>{@class_name type:video index:2}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:video index:2 total:10 title_len:40}
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

                    <div class="headline">
                        <h2>{@class_name type:video index:1}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:video index:1 total:10 title_len:40}
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

                    <div class="headline">
                        <h2>{@class_name type:video index:4}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:video index:4 total:10 title_len:40}
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

                    <div class="headline">
                        <h2>{@class_name type:video index:3}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:video index:3 total:10 title_len:40}
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

                    <div class="headline">
                        <h2>{base64}国产磁力{/base64}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:bt index:1 total:10 title_len:40}
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



                    <div class="headline">
                        <h2>{base64}日本磁力{/base64}</h2>
                    </div>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_most_recent_videos_items">

{list type:bt index:2 total:10 title_len:40}
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
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>