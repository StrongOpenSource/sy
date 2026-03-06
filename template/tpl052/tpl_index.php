<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:video index:2}">{@class_name type:video index:2}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:video index:2 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:video index:1}">{@class_name type:video index:1}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:video index:1 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:video index:4}">{@class_name type:video index:4}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:video index:4 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:video index:3}">{@class_name type:video index:3}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:video index:3 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:bt index:1 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title"><a href="{@class_link type:bt index:2}">{base64}日本磁力{/base64}</a></h3>
                    </div>
                    <ul class="thumbnail-group clearfix">

{list type:bt index:2 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>