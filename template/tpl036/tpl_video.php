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
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <style type="text/css">
        @media screen and (max-width:768px) {
            .m1938 {
                height: 202px;
            }
        }

        @media screen and (min-width:769px) {
            .m1938 {
                height: 452px;
            }
        }
    </style>
    <style>
        .dplayer-thumb {
            background: #005870 !important;
            webkit-transform: scale(1) !important;
        }

        .dplayer-played {
            background: #005870 !important
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}
                    <div class="stui-player__detail detail">
                        <h4 class="title" style="text-align: center;margin: 0 auto;font-weight: 600;line-height: 24px;">
                            {@name}
                        </h4>
                    </div>
                    <div class="stui-pannel clearfix pt-0">
                        <div class="stui-player col-pd pb-0">

{@palyer_js}

                        </div>
                    </div>
                    <div class="stui-pannel clearfix">
                        <div class="stui-pannel__head clearfix">
                            <h3 class="title">
                                猜你喜欢
                            </h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:video mode:rand total:8 title_len:40}
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