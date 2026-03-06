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
    <style>
        .pagination {
            text-align: right;
            /* padding:30px 0; */
            overflow: hidden;
            /* clear:both; */
            font-size: 0;
            position: relative;
        }

        .pagination>li {
            display: inline-block;
            vertical-align: middle
        }

        .pagination>li>a {
            display: block;
            margin: 0 4px;
            padding: 0 15px;
            /* height: 28px; */
            line-height: 28px;
            font-size: 15px;
            background-color: #005872;
            border-radius: 3px;
            cursor: pointer;
            color: #ffffff !important;
        }

        .pagination>li>a:hover,
        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover {
            z-index: 2;
            color: #fff;
            background-color: #005872
        }

        .pagination>.active>a,
        .pagination>.active>a:focus,
        .pagination>.active>a:hover {
            cursor: default
        }

        .pagination>.disabled>a,
        .pagination>.disabled>a:focus,
        .pagination>.disabled>a:hover {
            z-index: 2;
            color: #fff;
            cursor: default;
            background-color: #005872
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

                    <div style="clear: both;"></div>
                    <h3 class="panel-title" style="position: relative;float: left;font-weight: 700;font-size: 18px;margin-left: -5px;padding-left: 10px;margin:0 auto;">{@class_name} <small>第<span class="text-primary">{@page_cur}</span>页</small> </h3>

                    <ul class="stui-vodlist clearfix">
{list type:video mode:list title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}





                    </ul>

                    <ul class="stui-page text-center clearfix">
{link_first}<li class="page-item"><a href="{_url}">&laquo;</a></li>{/link_first}

{links_pre max:3}<li class="page-item"><a href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="page-item disabled"><a  class="page-link" href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li class="page-item"><a href="{_url}">{_page_no}</a></li>{/links_next}

{link_last}<li class="page-item"><a href="{_url}">&raquo;</a></li>{/link_last}

                    </ul>
                </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>