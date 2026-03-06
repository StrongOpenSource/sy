<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="referrer" content="always">
    <meta name="referer" content="always">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <meta name="applicable-device" content="pc,mobile" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/swiper.css" />
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/style.css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/function.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/swiper.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <style>
        .box-page em,
        .box-page .pagego,
        .box-page .pagebtn {
            display: none
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
</head>

<body>


{@include file:header}



    <div class="container">
        <div class="row">
            <div class="clearfix p-0 m-0">
                <div class="col-md-9 col-sm-12 col-xs-12 player_left max">
                    <div class="player_title">
                        <div class="play_nav hidden-xs"><a href="/">首页</a>&nbsp;<i class="icon iconfont"></i>&nbsp;<a href="{@class_link}"  >{@class_name}</a>&nbsp;<i class="icon iconfont"></i>&nbsp;</div>
                        <h1>{@name}</h1>
                    </div>
                    <div id="player">

{@palyer_js}
                    </div>
                    <style>
                        .next-page em {
                            font-style: normal;
                        }

                        .text-ellipsis {
                            text-overflow: ellipsis;
                            overflow: hidden;
                            white-space: nowrap;
                            display: block;
                            max-width: 350px;
                        }

                        @media screen and (min-width:769px) {
                            .next-page {
                                width: 100%;
                                height: 35px;
                                line-height: 35px;
                                font-size: 18px;
                                padding: 0 15px;
                                margin: 0 auto;
                                text-align: right;
                            }

                            .content-next1 {
                                width: 50%;
                                float: left;
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                            }

                            .content-next2 {
                                width: 50%;
                                float: right;
                                height: 35px;
                                line-height: 35px;
                                text-align: right;
                            }
                        }

                        @media screen and (max-width:769px) {
                            .next-page {
                                width: 100%;
                                min-height: 35px;
                                line-height: 35px;
                                font-size: 14px;
                                margin: 0 auto;
                                text-align: right;
                            }

                            .content-next1 {
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                                padding-left: 10px;
                            }

                            .content-next2 {
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                                padding-left: 10px;
                            }
                        }
                    </style>
                </div>
            </div>
            <div class="box-main-content" style="position:static">
                <div class="layout-box clearfix">
                    <div class="box-title">
                        <h3 class="m-0">猜你喜欢</h3>
                    </div>
                    <ul class="clearfix" id="block-post">
{list type:video mode:rand total:8 title_len:40}
                    <li class="col-md-3 col-sm-3 col-xs-6"><a name='rdmonclick' class="video-pic loading" data-original="{_pic}" href="{_url}"  > <span class="player"></span>
                            <span class="note text-bg-r"></span> </a>
                        <div class="title">
                            <h5 class="text-overflow"><a href="{_url}" name='rdmonclick'>{_title}</a></h5>
                        </div>
                    </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>
    </div>















{@include file:footer}
</body>

</html>