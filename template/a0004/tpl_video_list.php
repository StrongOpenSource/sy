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

    <main class="gs-wrap gs-body">
        <section class="gs-section">
            <div class="gs-section-hd">
                <h3 class="gs-section-name">
                    {@class_name}<span class="gs-count-badge">(共{@class_count}部)</span>
                </h3>
            </div>
            <ul class="gs-card-grid">
                {list type:video mode:list title_len:24}
                <li class="gs-card-item">
                    <a class="gs-card-thumb" href="{_url}">
                        <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg" alt="{_title}">
                    </a>
                    <div class="gs-card-info">
                        <h5><a href="{_url}">{_title}</a></h5>
                    </div>
                </li>
                {/list}
            </ul>
        </section>

        <div class="gs-pager">
            {link_first}<a href="{_url}">首页</a>{/link_first}
            {links_pre max:3}<a href="{_url}">{_page_no}</a>{/links_pre}
            <span class="p_c">{@page_cur}</span>
            {links_next max:3}<a href="{_url}">{_page_no}</a>{/links_next}
            {link_last}<a href="{_url}">尾页</a>{/link_last}
        </div>
    </main>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>