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

    <div class="content">
        <div class="container">
            <section class="g-section clearfix">
                <div class="g-sec-hd">
                    <h3 class="g-sec-title">
                        {@class_name}<span style="font-size:0.72em;font-weight:400;color:#999;margin-left:8px;">(共{@class_count}部)</span>
                    </h3>
                </div>
                <ul class="g-card-grid">
                    {list type:video mode:list title_len:24}
                    <li>
                        <a class="g-thumb-link" href="{_url}" target="_blank">
                            <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                        </a>
                        <div class="g-card-info">
                            <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                        </div>
                    </li>
                    {/list}
                </ul>
            </section>

            <div style="margin-top:28px;">
                <div class="g-pg">
                    {link_first}<a class="g-pg-a" href="{_url}">首页</a>{/link_first}
                    {links_pre max:3}<a class="g-pg-a" href="{_url}">{_page_no}</a>{/links_pre}
                    <span class="g-pg-cur">{@page_cur}</span>
                    {links_next max:3}<a class="g-pg-a" href="{_url}">{_page_no}</a>{/links_next}
                    {link_last}<a class="g-pg-a" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>
        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
