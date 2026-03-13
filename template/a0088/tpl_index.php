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
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:video index:1}">{@class_name type:video index:1}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:video index:1 total:8 title_len:24}
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

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:video index:2}">{@class_name type:video index:2}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:video index:2 total:8 title_len:24}
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

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:video index:3}">{@class_name type:video index:3}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:video index:3 total:8 title_len:24}
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

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:video index:4}">{@class_name type:video index:4}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:video index:4 total:8 title_len:24}
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

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:bt index:1 total:8 title_len:24}
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

            <div class="sx-module clearfix">
                <div class="sx-mod-head clearfix">
                    <span class="sx-mod-line"></span>
                    <h3 class="sx-mod-title">
                        <a href="{@class_link type:bt index:2}">{base64}日本磁力{/base64}</a>
                    </h3>
                </div>
                <ul class="sx-grid clearfix">
                    {list type:bt index:2 total:8 title_len:24}
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

        </div>
    </div>

    {@js_tpl_code}
    {@include file:footer}
</body>
</html>
