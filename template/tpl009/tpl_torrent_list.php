<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{@page_title}</title>
    <meta name="referrer" content="always" />
    <link rel='stylesheet' id='wplc-topbar-style-css' href='/template/{@var:cms_config_tpl_dir}/css/style.css?ver=1.0.91' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap' href='/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vtt-logo-font-css' href='/template/{@var:cms_config_tpl_dir}/css/vtt-logo-font-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vtt-custom-style-css' href='/template/{@var:cms_config_tpl_dir}/css/custom.css?ver=1.1.0.1650361592' type='text/css' media='all' />
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/jquery.min.js' id='jquery-core-js'></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <style>
        @media (max-width: 767.98px) {}

        .logo-text {
            background-color: transparent;
        }

        #wrapper-navbar {
            background-color: #3272dc;
        }

        .hamburger-inner,
        .hamburger-inner::before,
        .hamburger-inner::after {
            background-color: #fff;
        }

        .header-title {
            color: #fff;
        }

        .header-search input {
            border: 2px solid #ffffff;
        }

        .header-search #searchsubmit {
            background: #3e8ed0;
            border: 2px solid #3e8ed0;
            color: #ffffff;
        }

        .header-search #searchsubmit i {
            color: #ffffff;
        }

        #content .container {
            padding-right: 0px;
            padding-left: 0px;
        }

        .video-block .duration {
            background: #3e8ed0;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body class="home blog wp-embed-responsive hfeed">

    {@include file:header}


                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name}</h1>
                </div>

                <div class="video-loop">
                    <div class="row no-gutters">



                        {list type:bt mode:list title_len:24}
                        <div class=" col-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="video-block video-with-trailer" data-post-id="74903">
                                <a class="thumb" href="{_url}">
                                    <div class="video-debounce-bar"></div>
                                    <div class="lds-dual-ring"></div>
                                    <img class="video-img img-fluid" data-src="{_pic}" style="height: 100%;">
                                    <div class="video-preview"></div>
                                </a>
                                <a class="infos" href="{_url}">
                                    <span class="title">{_title}</span>
                                </a>
                            </div>
                        </div>
                        {/list}



                    </div>
                    <style>
                        .pagination-lg li a {
                            padding: 8px 15px !important;
                            font-size: 18px;
                            font-weight: 700;
                            background: #007bff;
                            color: #ffffff;
                            border: 1px solid #007bff;
                        }
                    </style>
                    <nav aria-label="Posts navigation" class="d-md-block col-12">
                        <ul class="row pagination pagination-lg justify-content-center">


                            {link_first}<li class="shangyiye"><a class="syy" href="{_url}">首页</a></li>{/link_first}
                            {link_pre1}<li class="shangyiye"><a class="syy" href="{_url}">上一页</a></li>{/link_pre1}
                            {links_pre max:3}<li class="shangyiye"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_pre}
                            <li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;">{@page_cur}</a></li>
                            {links_next max:3}<li class="shangyiye"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_next}
                            {link_next1}<li class="shangyiye"><a class="syy" href="{_url}">下一页</a></li>{/link_next1}
                            {link_last}<li class="shangyiye"><a class="syy" href="{_url}">尾页</a></li>{/link_last}



                        </ul>
                    </nav>
                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>