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
    <style type="text/css">
        .fenye {
            margin-top: 5px;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
            <div class="appel">
                <div class="breadcrumbs" style="padding-top: 10px;">您的位置：<a href="/">首页</a><em class="sep">></em><a href="{@class_link}">{@class_name}</a></div>
                <div class="appel-max">
                    <ul class="thumbnail-group clearfix">

{list type:bt mode:list title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
                <div class="text-center clearfix">
                    <ul class="pagination pagination-lg " style="font-size: 15px;display:block; list-style-type:none;margin:5px;">
{link_first}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >首页</a></li>{/link_first}
{link_pre1}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >上一页</a></li>{/link_pre1}

{links_pre max:3}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >{_page_no}</a></li>{/links_pre}
<li class="page-item  fenye active" ><a class="page_link active" href="javascript:;" style="background-color: #736e6e;" >{@page_cur}</a></li>
{links_next max:3}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >{_page_no}</a></li>{/links_next}

{link_next1}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >下一页</a></li>{/link_next1}
{link_last}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >尾页</a></li>{/link_last}

                    </ul>
                </div>
            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>