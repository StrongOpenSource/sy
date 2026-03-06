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

<body>
{@include file:header}
    <div class="wrap">
        <div class="group-box bg-card" style="padding-left: 1.5%;">
            <p class="group-title">{@name}</p>
            <div class="group-contents layui-row">
                <div class="layui-col-md">

                                <div id="player">
{@palyer_js}
                                </div>
                </div>
            </div>
        </div>


        <div class="group-box index-list1">
            <p class="group-title v91"> <i class="layui-icon layui-icon-video"></i> &nbsp;&nbsp;推荐视频 </p>

            <div class="group-contents layui-row">
{list type:video mode:rand total:10 title_len:40}
                <div id="content1">
                    <a  href="{_url}" class="group-item layui-col-md3 m-md6"><img class="lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" />
                        <p style="color: #fff;">{_title}</p>
                    </a>
                </div>
{/list}
                <div class="clear"></div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>