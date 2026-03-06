<!DOCTYPE html>
<html lang="en">

<head>
    <title>{@page_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                        <div class="title">
                            <a href="{@class_link type:video index:4}"><h2>{@class_name type:video index:4}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:video index:4 total:10 title_len:24}
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
                    </div>
                </section>



                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title">
                            <a href="{@class_link type:video index:2}"><h2>{@class_name type:video index:2}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:video index:2 total:10 title_len:24}
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
                    </div>
                </section>



                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title">
                            <a href="{@class_link type:video index:3}"><h2>{@class_name type:video index:3}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:video index:3 total:10 title_len:24}
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
                    </div>
                </section>





                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title">
                            <a href="{@class_link type:video index:1}"><h2>{@class_name type:video index:1}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:video index:1 total:10 title_len:24}
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
                    </div>
                </section>


                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title">
                            <a href="{@class_link type:bt index:1}"><h2>{@class_name type:bt index:1}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:bt index:1 total:10 title_len:24}
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
                    </div>
                </section>


                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title">
                            <a href="{@class_link type:bt index:2}"><h2>{@class_name type:bt index:2}</h2></a>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                                {list type:bt index:2 total:10 title_len:24}
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
                    </div>
                </section>


{@js_tpl_code}
{@include file:footer}
    </div>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazy.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.scrollto.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <!-- 
<script src="/template/{@var:cms_config_tpl_dir}/js/main.min.old.js" type="text/javascript"></script>
 -->
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.js" type="text/javascript"></script>
</body>

</html>