<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-metal.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/fonts.css">
    <style>
        .block-post .item-post .name {
            white-space: inherit;
        }

        .header .nav li.active a {
            border-color: #FC0F64;
            color: #FC0F64;
            pointer-events: none;
        }

        @media (max-width: 1025px) {
            .m-panel .nav li.active a {
                border-color: #FC0F64;
                color: #FC0F64;
                pointer-events: none;
            }
        }

        main {
            max-width: 1344px;
            margin: 0 auto;
        }

        @media (max-width: 767.98px) {
            .m-panel .content {
                padding: 150px 20px 20px !important;
            }

            .m-panel .icon-close {
                padding: 300px 0 0 !important;
            }

            .m-panel .nav {
                display: inline-block;
            }

            .m-panel .nav li {
                width: 50%;
                float: left;
            }
        }
    </style>
{@common_head}
{@json_code}
</head>

<body>
    <div class="wrapper">
        {@include file:header}

                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title flex mix-filter mix-filter50">
                            <h2> {@class_name}</h2>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">



                                {list type:bt mode:list title_len:24}
                                <div class="item item-post">
                                    <a href="{_url}">
                                        <span class="img">
                                            <img class="lazy-load" src="/template/{@var:cms_config_tpl_dir}/picture/loading.gif" data-original="{_pic}" width="450" height="257" />
                                        </span>
                                        <h3 class="name">{_title}</h3>
                                    </a>
                                </div>
                                {/list}
                            </div>
                        </div>
                        <div class="pages flex mb-0">
                            <ul class="pagination-inner pagesrow">
                                {link_first}
                                <a class="syy" href="{_url}"><li class="shangyiye">首页</li></a>
                                {/link_first}

                                {links_pre max:3}
                                <a class="fyym" href="{_url}"><li class="fenyeyema">{_page_no}</li></a>
                                {/links_pre}

                                <li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:void(0);">{@page_cur}</a></li>
                                {links_next max:3}
                                <a class="fyym" href="{_url}"><li class="fenyeyema">{_page_no}</li></a>
                                {/links_next}

                                {link_last}
                                <a class="syy" href="{_url}"><li class="shangyiye">尾页</li></a>
                                {/link_last}
                            </ul>
                        </div>
                    </div>
                </section>

{@js_tpl_code}
{@include file:footer}
    </div>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.form.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazy.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.scrollto.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <!-- 
<script src="/template/{@var:cms_config_tpl_dir}/js/main.min.old.js" type="text/javascript"></script>
 -->
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.js" type="text/javascript"></script>
    <script type="f011a5d99446f3e386de9e46-text/javascript">
        $.blockUI.defaults.overlayCSS = {
            cursor: 'wait'
        };
        $.Autocomplete.defaults.minChars = 3;
        $.Autocomplete.defaults.deferRequestBy = 100;
        $.Autocomplete.defaults.serviceUrl = '/suggest/';
    </script>
</body>

</html>