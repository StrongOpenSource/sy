<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <title>{@page_title}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="referrer" content="always">
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/shi1love/images/logo.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

{@include file:header}

    <div class="wrap">
        <div class="group-box index-list1">
            <p class="group-title v91"> <i class="layui-icon layui-icon-video"></i> &nbsp;&nbsp;{@class_name} </p>

            <div class="group-contents layui-row">
{list type:video mode:list title_len:40}
                <div id="content1">
                    <a  href="{_url}" class="group-item layui-col-md3 m-md6"><img class="lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" />
                        <p style="color: #fff;">{_title}</p>
                    </a>
                </div>
{/list}
                <div class="clear"></div>
                <div class="page_wrap">
                    <div class="page_wrap_inner">
                        <ul class="page_ul" style="padding:0;margin:0;">
                            <ul class="page_ul" style="padding:0;margin:0;">
{link_first}<li ><a class="pageitem" href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li ><a class="pageitem" href="{_url}">上一页</a></li>{/link_pre1}
{links_pre max:3}<li ><a class="pageitem" href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="page-current"><a class="activepage" href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li ><a class="pageitem" href="{_url}">{_page_no}</a></li>{/links_next}
{link_next1}<li ><a class="pageitem" href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li ><a class="pageitem" href="{_url}">尾页</a></li>{/link_last}
                            </ul>
                        </ul>
                    </div>
                </div>
                <style type="text/css">
                    .pageitem{
                        margin: 4px 0;
                    }
                    
                </style>
                <div class="clear"></div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>