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
                    <h1 class="widget-title mt-4">{@class_name type:video index:1}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:video index:1 total:10 title_len:32}
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
                </div>


                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name type:video index:2}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:video index:2 total:10 title_len:32}
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
                </div>





                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name type:video index:3}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:video index:3 total:10 title_len:32}
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
                </div>




                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name type:video index:4}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:video index:4 total:10 title_len:32}
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
                </div>




                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name type:bt index:1}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:bt index:1 total:10 title_len:32}
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
                </div>




                <div class="page-header">
                    <h1 class="widget-title mt-4">{@class_name type:bt index:2}</h1>
                </div>
                <div class="video-loop">
                    <div class="row no-gutters">
                        {list type:bt index:2 total:10 title_len:32}
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
                </div>


            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>