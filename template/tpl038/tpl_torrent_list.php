<!DOCTYPE html>
<html>
<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <style>
        .page_wrap {
            width: 100%;
            text-align: center;
            margin: 20px 0 15px 0;
            padding-bottom: 20px;
        }
        .page_wrap li {
            display: inline-block;
        }
        .page_wrap li a {
            padding: 5px 10px 4px 10px !important;
            display: inline-block;
            color: #ccc;
            font-size: 16px;
            line-height: 16px;
            border-radius: 2px;
        }
        .page_wrap li a i.layui-icon {
            color: #ddd;
            font-size: 16px;
            line-height: 16px;
            margin: 0;
            padding: 0;
        }
        .page_wrap li a.activepage {
            background-color: #00343f;
            color: #fff;
            cursor: not-allowed;
            margin-right: 5px;
            padding: 5px 15px 4px 15px !important;
        }
        .page_wrap li a.pageitem {
            background: #0202028c;
            margin-right: 5px;
            color: #fff;
            padding: 5px 15px 4px 15px !important;
        }
        .page_wrap .jump-btn {
            background-color: #415fa2;
            color: #eee;
            cursor: pointer;
        }
        .page_wrap .jump-btn:hover,
        .page_wrap li a.pageitem:hover {
            background-color: red;
            color: #efefef;
        }
        .bluebg {
            background-color: #1e9fff;
        }
        .greybg {
            background-color: #999 !important;
        }
        .alphabet {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            float: left;
            margin-bottom: 20px
        }
        .alphabet .item {
            margin: 1px
        }
        .alphabet .item.active a {
            background-color: #e40066;
            color: #fff
        }
        .alphabet a {
            padding: 8px 12px;
            border-radius: 15px;
            overflow: hidden;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            background-color: #e9e9ef;
            color: #7c7c8e;
            cursor: pointer
        }
    </style>
    <meta name="theme-color" content="black">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="80cbcd45c3508a31" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="250">
    <meta name="referrer" content="always">
    <meta name="yandex-verification" content="500931ff0feda175" />
    <link rel="shortcut icon" href="/static/template/{@var:cms_config_tpl_dir}/yazhou/ico.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/site.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/bootstrap-wokao.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/toastr.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/4590085a8ad543ef88439ef9613c499d.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>


{@include file:header}


            <ul id="w0" class="nav nav-tabs module-menu" style="margin-bottom:10px;">
                <span style="color:#fdfd00;font-size: 20px;">{@class_name}</span></a></li>
            </ul>
            <div class='row' id='videos'>
{list type:bt mode:list title_len:40}
                <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 item'>
                    <div class='block'>
                        <div class='block-layer'>
                            <div class='media-image'>
                                <a href="{_url}"  ><img class="img img-responsive lazy" src="{_pic}"></a>
                            </div>
                        </div>
                        <div class='block-layer block-inner'>
                            <div class=' block-title'>
                                <a href="{_url}" >{_title}!</a>
                            </div>
                        </div>
                    </div>
                </div>
{/list}
                <div class='clear'></div>

            </div>
            <div class='page_wrap'>
                <div class='page_wrap_inner'>
                    <ul class='page_ul' style='padding:0;margin:0;'>
{link_first}<li><a class='pageitem' href="{_url}">首页</a></li>{/link_first}
{links_pre max:3}<li><a class='pageitem' href="{_url}">{_page_no}</a></li>{/links_pre}
<li><a class='activepage' href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li><a class='pageitem' href="{_url}">{_page_no}</a></li>{/links_next}
{link_last}<li><a class='pageitem' href="{_url}">尾页</a></li>{/link_last}
                    </ul>
                </div>
            </div>
            <style type="text/css">
                .pageitem{
                    margin: 5px 5px;
                }
            </style>
            <div class='clear'></div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>