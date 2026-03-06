<!DOCTYPE html>
<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/video/favicon.ico" rel="SHORTCUT ICON">
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/main.css" rel="stylesheet" type="text/css">
    <link href="/template/{@var:cms_config_tpl_dir}/css/fonts.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/main2.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.easy-autocomplete3.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.star-rating-svg.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main5.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/layer.js"></script>

    <script async src="/template/{@var:cms_config_tpl_dir}/js/8825e170e1a44ba9a51e1f666bb26f4d.js"></script>

    <style>
        .nav .menu li a {
            padding: 15px 8px;
        }

        @media screen and (max-width:750px) {
            .block-post .item {
                width: calc(50% - 20px);
            }

            .block-post .item .img .type {
                display: none;
            }

            .block-post .item .img .heart {
                display: none;
            }
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

            <div class="content">
                <section class="section">
                    <div class="wrap">
                        <div class="heading">
                            <div class="title">
                                <h1>{@class_name}</h1>
                            </div>
                        </div>
                        <div class="block-post">
{list type:video mode:list title_len:40}
                            <div class="item"><a href="{_url}" >
                                    <div class="img">
                                        <img class="thumb_img lazyload" data-src="{_pic}">
                                    </div>
                                    <div class="info-post">
                                        <h4 class="title-post">{_title}</h4>
                                    </div>
                                </a>
                            </div>
{/list}

                        </div>
                        <div class="pagination">
{link_first}<div class="item pager prev"><a class="" href="{_url}"><span>首页</span></a></div>{/link_first}
{links_pre max:2}<div class="item"><a href="{_url}">{_page_no}</a></div>{/links_pre}
<div class="item active"><a href="javascript:;">{@page_cur}</a></div>
{links_next max:2}<div class="item"><a href="{_url}">{_page_no}</a></div>{/links_next}
{link_last}<div class="item pager next"><a class="" href="{_url}"><span>尾页</span></a></div>{/link_last}
                        </div>
                    </div>
                </section>
            </div>
        </main>
{@js_tpl_code}
{@include file:footer}
</body>

</html>