<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>





{@include file:header}
            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{@class_name type:video index:4}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:video index:4 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>


            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{@class_name type:video index:3}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:video index:3 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>


            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{@class_name type:video index:2}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:video index:2 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>


            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{@class_name type:video index:1}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:video index:1 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>


            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{base64}国产磁力{/base64}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:bt index:1 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>

            <div class="appel clearfix">
                <div class="appel-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden;">
                        <div class="appel-heading clearfix">
                            <h3 class="appel-title">{base64}日本磁力{/base64}</h3>
                        </div>
                    </div>
                    <ul class="thumbnail-group clearfix">
{list type:bt index:2 total:8 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>
