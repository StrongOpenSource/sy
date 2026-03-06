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




    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:video index:1}">{@class_name type:video index:1}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:video index:1 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>



    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:video index:2}">{@class_name type:video index:2}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:video index:2 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>



    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:video index:4}">{@class_name type:video index:4}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:video index:4 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>



    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:video index:3}">{@class_name type:video index:3}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:video index:3 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>



    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:bt index:1 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>



    <div class="modo_title top"><i class="icol iconfont">&#xe628;</i>
        <h2><a href="{@class_link type:bt index:2}">{base64}日本磁力{/base64}</a></h2>
    </div>
    <div class="main">
        <div class="all_tab" style="border-bottom:none">
            <ul class="list_tab_img" id="resize_list">

{list type:bt index:2 total:6 title_len:40}
                <li><a href="{_url}"  target="_self">
                        <div class="picsize">
                            <img style="" class="loading" src="{_pic}" >
                        </div>
                    </a>
                    <h2><a href="{_url}" target="_self">{_title}</a></h2>
                </li>
{/list}
                </li>
            </ul>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>