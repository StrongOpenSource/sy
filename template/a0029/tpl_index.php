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

    <main class="container">
        <div class="content">

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:video index:1}">{@class_name type:video index:1}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video index:1 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:video index:2}">{@class_name type:video index:2}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video index:2 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:video index:3}">{@class_name type:video index:3}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video index:3 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:video index:4}">{@class_name type:video index:4}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video index:4 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:bt index:1 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

            <section class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">
                            <a href="{@class_link type:bt index:2}">{base64}日本磁力{/base64}</a>
                        </h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:bt index:2 total:8 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}" target="_blank">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}" target="_blank">{_title}</a></h5>
                            </div>
                        </li>
                        {/list}
                    </ul>
                </div>
            </section>

        </div>
    </main>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
