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

    <style>
        .page_wrap {
            width: 100%;
            text-align: center;
            margin: 20px 0;
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
            background-color: #1e9fff;
            color: #fff;
            cursor: not-allowed;
            margin-right: 5px;
            padding: 5px 15px 4px 15px !important;
        }

        .page_wrap li a.pageitem {
            background: rgba(99, 99, 99, 0.2);
            margin-right: 5px;
            padding: 5px 15px 4px 15px !important;
        }

        .page_wrap .jump-btn {
            background-color: #1e9fff;
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
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style>
{@include file:header}

        <div class="group-box" style="background: rgba(234, 203, 174, 0.4);">
            <div class="group-contents layui-row">
                <div class="group-box" style="background: rgba(170, 220, 173, 0.4);">
                    <div class="group-title">
                        {@class_name}</div>
                    <div class="group-contents layui-row">
{list type:bt mode:list title_len:40}
                        <a href="{_url}"  class="group-item layui-col-md3 m-md6">
                            <img src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" data-src="{_pic}" h="210px">
                            <p>{_title}</p>
                        </a>
{/list}
                        <div class="clear"></div>
                        <div class="page_wrap">
                            <div class="page_wrap_inner">
                                <ul class="page_ul" style="padding:0;margin:0;">

{link_first}
                                    <li>
                                        <a href="{_url}" class="pageitem">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">首页</font>
                                            </font>
                                        </a>
                                    </li>
{/link_first}

{links_pre max:3}
                                    <li><a href="{_url}"  class="pageitem">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">{_page_no}</font>
                                            </font>
                                        </a></li>
{/links_pre}

                                    <li><a href="javascript:;"  class="activepage">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">{@page_cur}</font>
                                            </font>
                                        </a></li>


{links_next max:3}
                                    <li><a href="{_url}"  class="pageitem">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">{_page_no}</font>
                                            </font>
                                        </a></li>
{/links_next}

{link_last}
                                    <li>
                                        <a href="{_url}" class="pageitem">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">尾页</font>
                                            </font>
                                        </a>
                                    </li>
{/link_last}


                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>