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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/av-share.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/av-201.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="/201.ico" />
    <script async defer id="si" web_category="2669559732" src="/template/{@var:cms_config_tpl_dir}/js/analytics.js"></script>


    <script>
        function abcd() {}
    </script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style="background:#01020e">




{@include file:header}


        <div class="content">


            <h2 class="title" style="color: #ed3f28;">{@name}</h2>


            <div class="data" id="playvideos" style="padding:0;">

{@palyer_js}


            </div>

            <div style="text-align:center;color:red;font-size:14px;margin-bottom:10px;">不能播放请尝试切换网络</div>

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


            <div class="line">
                <h1>相关视频</h1>

                <div class="plus_list">

{list type:video mode:rand total:8 title_len:40}
                    <div class="v_item">
                        <a href="{_url}"  class="img" style="background-image:url('{_pic}')"></a>
                        <a href="{_url}"  class="title jzhh">{_title} </a>
                    </div>
{/list}

                </div>
            </div>

        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>