<?php exit();?><!DOCTYPE html>
<html>
<head>
    <title>{@page_title}</title>
    <meta http-equiv="keywords" content="{@site_keyword}">
    <meta http-equiv="description" content="{@site_desc}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/common.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/hmlcss.css?v=1" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/app.css" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
    {@common_head}
    {@json_code}
</head>

<body>
    {@include file:header}
    <div class="content">
        <div class="container">
            <div class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">{@class_name}</h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video mode:list title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                                </p>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </div>
            <div style="margin-top: 20px;">
                <div class="page_info_div">
                    {link_first}<a class="a_page_info" href="{_url}">首页</a>{/link_first}
                    <!-- {link_pre1}<a class="a_page_info" href="{_url}">&lt;</a>{/link_pre1} -->
                    {links_pre max:3}<a class="a_page_info" href="{_url}">{_page_no}</a>{/links_pre}
                    <a class="page_info_focus p_c" href="javascript:0;">{@page_cur}</a>
                    {links_next max:3}<a class="a_page_info" href="{_url}">{_page_no}</a>{/links_next}
                    <!-- {link_next1}<a class="a_page_info" href="{_url}">&gt;</a>{/link_next1} -->
                    {link_last}<a class="a_page_info" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>