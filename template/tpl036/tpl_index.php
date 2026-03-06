<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/mdyy2066.css" type="text/css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/system.js"></script>


<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:video index:2}">{@class_name type:video index:2}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:video index:2 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>


                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:video index:1}">{@class_name type:video index:1}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:video index:1 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>


                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:video index:4}">{@class_name type:video index:4}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:video index:4 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>


                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:video index:3}">{@class_name type:video index:3}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:video index:3 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>


                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:bt index:1 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>



                    <div class="stui-pannel clearfix">
                        <div class="col-pd">
                            <h3 class="title"> <a class="pull-left" href="{@class_link type:bt index:2}">{base64}日本磁力{/base64}</a></h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:bt index:2 total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>
{@js_tpl_code}
{@include file:footer}

</body>

</html>