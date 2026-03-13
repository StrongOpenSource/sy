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

    <div class="sx-wrap">
        <div class="sx-spacing">
            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">{@class_name}</h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:bt mode:list title_len:24}
                    <li>
                        <a class="sx-thumb" href="{_url}" target="_blank">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="sx-caption">
                            <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </div>

            <div style="margin-top:24px;">
                <div class="sx-pager">
                    {link_first}<a class="sx-pg" href="{_url}">首页</a>{/link_first}
                    {links_pre max:3}<a class="sx-pg" href="{_url}">{_page_no}</a>{/links_pre}
                    <a class="sx-pg-on p_c" href="javascript:0;">{@page_cur}</a>
                    {links_next max:3}<a class="sx-pg" href="{_url}">{_page_no}</a>{/links_next}
                    {link_last}<a class="sx-pg" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>
        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
