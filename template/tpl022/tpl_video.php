<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta content="telephone=no" name="format-detection">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta content="{cms_title}" name="apple-mobile-web-app-title">
    <meta name="referrer" content="always">
    <link type="text/css" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/index.css?4">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/a_wap.css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery-lazyload.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.base.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}

    <div class="list_nav" style="border:none">
        <div class="list_nav" style="border:none;margin: 5px;">
            <div class="main fn-left"><span>{@name}</span>
                
            </div>
        </div>
        <div class="video-player-dom clearfix">
            <div class="col-md-12">
                    <div style="position:;top:0;bottom:0;left:0;right:0">
{@palyer_js}
                    </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <div class="main vod-botx-title">
            <ul>
                <li id="latest1" onclick="setTab('latest',1,3);" class="current">猜你喜欢</li>
            </ul>
        </div>
        <div class="main" id="resize_list">
            <div class="all_tab" style="border-bottom:none" id="con_latest_1" style="display:block">
                <ul class="list_tab_img">


{list type:video mode:rand total:12 title_len:22}
                    <li><a href="{_url}">
                            <div class="picsize">
                                <img style="height: ;" class="loading" src="{_pic}">
                            </div>
                        </a>
                        <h6 style="height: 40px; line-height: 20px; max-height: 40px; overflow: hidden;"><a href="{_url}" target="_self">{_title}</a></h6>
                    </li>
{/list}





                </ul>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>