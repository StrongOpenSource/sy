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

    <div class="wp">
        <div class="sp">

            <div class="sec-block clearfix">
                <div class="sec-hd clearfix">
                    <h3 class="sec-ttl">{@class_name}</h3>
                </div>
                <ul class="card-grid clearfix">
                    {list type:bt mode:list title_len:24}
                    <li>
                        <a class="card-cover" href="{_url}" target="_blank">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="card-info">
                            <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </div>

            <div style="margin-top:24px;">
                <div class="pg-nav">
                    {link_first}<a class="a_page_info" href="{_url}">首页</a>{/link_first}
                    {links_pre max:3}<a class="a_page_info" href="{_url}">{_page_no}</a>{/links_pre}
                    <a class="page_info_focus p_c" href="javascript:0;">{@page_cur}</a>
                    {links_next max:3}<a class="a_page_info" href="{_url}">{_page_no}</a>{/links_next}
                    {link_last}<a class="a_page_info" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
