<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.imageupload.js"></script>
    <!--mars 20240224 --
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/custom_common.css" type="text/css">
-->
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/custom_ads_blocks.css" type="text/css">
    <style>
        :root {
            --wn-block-container-width: 1280px;
            --wn-banner-container-max-width: 100%;
        }
        .wn-tag-section {
            margin: 20px 0;
        }
        .wn-tag-section h4 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .wn-tag-wrapper a {
            display: inline-block;
            border-radius: 5px;
            border: 1px solid #26645D;
            line-height: 18px;
            text-align: center;
            padding: 5px 20px;
        }
        .ttnr {
            font-size: 22px !important;
        }
        .ttnr span {
            font-size: 22px !important;
            line-height: 30px !important;
            color: #333333 !important;
        }
        .book-cover {
            float: left;
            width: 200px;
        }
        .book-cover img {
            max-width: 100%;
        }
        .read-more {
            margin-top: 30px;
        }
        .read-more a {
            padding: 5px 20px;
            background: black;
            font-size: 14px;
            color: white;
            border-radius: 5px;
            display: inline-block;
            font-weight: bold;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>

{@include file:header}


            <div class="appel"><span id="banner_video_x"></span></div>
            <div class="appel">
                <div class="breadcrumbs">您的位置：<a href="/xsp">首页</a><em class="sep">&gt;</em>
                    <a href="{@class_link}">{@class_name}</a><em class="sep">&gt;</em><span>{@name}</span>
                </div>
                <div class="detail clearfix">


{@palyer_js}
                </div>

                <div class="detail clearfix">
                    <style>
                        .app {
                            margin: 10px 0;
                            border-radius: 3px background-color: #fff;
                        }
                        .app_title {
                            text-align: center;
                            line-height: 35px;
                            font-size: 15px;
                            border-bottom: 1px solid#fff
                        }
                        .app ul li {
                            float: left;
                            width: 8.33%;
                            text-align: center;
                            list-style-type: none
                        }
                        .app ul li img {
                            margin: 0 auto;
                            width: 56px;
                            height: 56px;
                            display: block;
                            border-radius: 12px
                        }
                        .app ul a {
                            font: 12px/28px Tahoma, 'Microsoft Yahei', Simsun;
                            color: #666;
                            overflow: hidden;
                            white-space: nowrap
                        }
                        @media screen and (max-width:640px) {
                            .app ul li {
                                width: 20%
                            }
                        }
                        .app li a:hover img {
                            transform: scale(1.5);
                            transition: transform .3s ease-in-out 0s
                        }
                        .app ul li a:hover {
                            color: #FD4C5D;
                            font-weight: bold;
                        }
                    </style>
<!-- 
                    <div class="app">
                        <br>
                        <ul>
                            <li><a href="h王" ><img src="/template/{@var:cms_config_tpl_dir}/picture/buliang.png"><span style="color: #;">&#19981;&#33391;&#30740;&#31350;&#25152;</span></a></li>
                            <li><a href="htt富强" ><img src="/template/{@var:cms_config_tpl_dir}/picture/diwang.png"><span style="color: #;">&#24093;&#29579;&#20250;&#25152;</span></a></li>
                        </ul>
                    </div> -->

                    <script>
                        $('.app a').on('click', function() {
                            link_url = $(this).attr('href');
                            link_name = $(this).find('span').text();
                            gtag('event', 'click_app', {
                                'link_name': link_name,
                                'link_url': link_url
                            });
                        })
                    </script>
                </div>

            </div>
            <div class="appel">
                <div class="appel-heading clearfix">
                    <h3 class="appel-title">&#30456;&#20851;&#25512;&#33616;</h3>
                </div>
                <div class="appel-max detail-hot">
                    <ul class="thumbnail-group clearfix">
{list type:video mode:rand total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>
