<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/rose/css/style.cssx?_wd=false">
    <link id="layuicss-laydate" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/laydate.css" media="all">
    <link id="layuicss-layer" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/layer.css" media="all">
    <link id="layuicss-skincodecss" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/code.css" media="all">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style>
{@include file:header}

        <div class="group-box" style="background: rgba(189, 188, 203, 0.4);">
            <p class="group-title">{@name}</p>
            <div class="group-contents layui-row" style="">
{@palyer_js}
            </div>

            <div class="group-contents layui-row">
                <div style="width: 100%;"></div>
                <div class="group-box" style="background: rgba(220, 173, 237, 0.4);">
                    <p class="group-title"><i class="layui-icon layui-icon-engine"></i>&nbsp;&nbsp;相关推荐</p>
                    <ul class="group-contents layui-row">
{list type:video mode:rand total:8 title_len:40}
                        <li>
                        <a href="{_url}"  class="group-item layui-col-md3 m-md6">
                            <img src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" data-src="{_pic}" h="210px">
                            <p>{_title}</p>
                        </a>
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