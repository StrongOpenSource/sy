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

    <div class="bound">
        <div class="bound-gap">

            <div class="blk-wrap zf">
                <div class="blk-body zf">
                    <div class="blk-head zf">
                        <h3 class="blk-name">{@class_name}</h3>
                    </div>
                    <ul class="vod-grid">
                        {list type:bt mode:list title_len:24}
                        <li>
                            <a class="vod-cover" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="vod-desc">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </div>

            <div style="margin-top:18px;">
                <div class="pager-row">
                    {link_first}<a class="pager-lnk" href="{_url}">首页</a>{/link_first}
                    {links_pre max:3}<a class="pager-lnk" href="{_url}">{_page_no}</a>{/links_pre}
                    <a class="pager-active" href="javascript:0;">{@page_cur}</a>
                    {links_next max:3}<a class="pager-lnk" href="{_url}">{_page_no}</a>{/links_next}
                    {link_last}<a class="pager-lnk" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
