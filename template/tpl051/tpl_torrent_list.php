<!DOCTYPE html>
<html>

<head>
    <title>{@page_title}</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="referrer" content="always">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/ylczs-hei/favicon.ico">
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.1.min.js" charset="utf-8"></script>

    <style>
        :root {
            --hong: #f71735;
            --huang: #fff462;
            --babi: #009986;
            --more: #009986;
            --qian: #7eccc2;
            --bai: #fff;
            --hei: #222;
            --tan: #888;
            --hui: #f0f0f0;
            --yin: #f6f6f6;
        }

        .soso {
            width: 15rem;
            border-radius: 1rem;
            border: 1px solid var(--hui);
            overflow: hidden;
            display: flex;
            align-items: center;
            float: right;
        }

        .soso input {
            width: 100%;
            height: 2.125rem;
            padding: 0 1em;
            box-sizing: border-box;
            caret-color: var(--babi);
            color: var(--hei);
            font-size: .875rem;
            background-color: var(--bai);
        }

        .soso button {
            border: 0;
            padding: 0 1em;
            height: 2.125rem;
            cursor: pointer;
            white-space: nowrap;
            background-color: var(--bai);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .soso button svg {
            width: 1.125rem;
            height: 1.125rem;
            fill: #007c99;
        }

        input {
            appearance: none;
            -webkit-appearance: none;
            outline: none;
        }

        input::-webkit-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }

        input::-moz-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }

        input:-ms-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}



        <div class="group-box index-list1">
            <p class="group-title v91" id="type0">
                <i class="layui-icon layui-icon-video"></i>
                &nbsp;&nbsp;{@class_name}
            </p>
            <div class="mycate">

            </div>
            <ul class="group-contents layui-row">




{list type:bt mode:list title_len:40}
            <a href="{_url}" class="group-item layui-col-md3 m-md6"><img src="/template/{@var:cms_config_tpl_dir}/images/loads.jpg" data-src="{_pic}" h="210px">
                <p style="">{_title}</p>
            </a>
{/list}





                <div class="clear"></div>
                <div class="page_navi">
{link_first}<a target="_self" href="{_url}" class="pagenum extend">首页</a>{/link_first}


{links_pre max:3}<a style="margin-right: 5px;" target="_self" class="pagenum extend" href="{_url}">{_page_no}</a>{/links_pre}

<a style="margin-right: 5px;" target="_self" class="pagenum extend current" href="javascript:;">{@page_cur}</a>

{links_next max:3}<a style="margin-right: 5px;" target="_self" class="pagenum extend" href="{_url}">{_page_no}</a>{/links_next}


{link_last}<a target="_self" href="{_url}" class="pagenum extend">尾页</a>{/link_last}

                </div>



            </ul>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>