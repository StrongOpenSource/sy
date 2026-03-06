<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="referrer" content="always">
    <meta name="referer" content="always">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="applicable-device" content="pc,mobile" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/style.css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/function.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/swiper.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <style>
        .box-page em,
        .box-page .pagego,
        .box-page .pagebtn {
            display: none
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
</head>

<body>



{@include file:header}


    <div class="container">
        <div class="row">
            <div class="layout-box clearfix">
                <div class="box-title">
                    <h3 class="m-0"><i class="icon iconfont">&#xe67a;</i> {@class_name}</h3>
                </div>
                <ul class="clearfix" id="block-post">
{list type:bt mode:list title_len:40}
                    <li class="col-md-3 col-sm-3 col-xs-6"><a name='rdmonclick' class="video-pic loading" data-original="{_pic}" href="{_url}"  > <span class="player"></span>
                            <span class="note text-bg-r"></span> </a>
                        <div class="title">
                            <h5 class="text-overflow"><a href="{_url}" name='rdmonclick'>{_title}</a></h5>
                        </div>
                    </li>
{/list}

                </ul>
                <div class="box-page clearfix" id="long-page">

{link_first}<a class="pagelink_a" href="{_url}">首页</a>{/link_first}
{link_pre1}<a class="pagelink_a" href="{_url}">上一页</a>{/link_pre1}
{links_pre max:3}<a class="pagelink_b" href="{_url}">{_page_no}</a>{/links_pre}
<span class="pagenow">{@page_cur}</span>
{links_next max:3}<a class="pagelink_b" href="{_url}">{_page_no}</a>{/links_next}
{link_next1}<a class="pagelink_a" href="{_url}">下一页</a>{/link_next1}
{link_last}<a class="pagelink_a" href="{_url}">尾页</a>{/link_last}
                </div>
            </div>

        </div>
    </div>











{@include file:footer}
</body>

</html>