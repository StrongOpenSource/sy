<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/template/{@var:cms_config_tpl_dir}/css/cd652ed952594b0ebe461a683261edd6.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.superslide.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.base.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/8f1e43ea4c224607a1c42de513d92759.js"></script>
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" media="all">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.1.min.js" charset="utf-8"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/ping-3.1.9.min.js"></script>
    <style>
        #bottone5 {
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-flex;
            font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            min-height: 3rem;
            padding: 10px 13px;
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
        }

        #bottone5:hover,
        #bottone5:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }

        #bottone5:hover {
            transform: translateY(-1px);
        }

        #bottone5:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }

        .nav1 {
            width: 62.5%;
            margin-bottom: .75rem;
        }

        @media (max-width:479px) {
            .nav1 {
                width: 100%;
            }

        }

        @media (min-width:1080px) {

            .nav1,
            .nav {
                width: 1080px;
            }
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>



{@include file:header}










        <div class="box">
            <nav class="nav1">
                <button id="bottone5"><a style="color: #red;">{@class_name}</a></button>
            </nav>
            <div class="vods">
{list type:bt mode:list title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}" >
                            <img class="lazy" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}">{_title}</a>
                    </div>
                </div>
{/list}
                <div class="clear"></div>
                <style>
                    .page_wrap {
                        width: 100%;
                        text-align: center;
                        margin: 20px 0 15px 0;
                        padding-bottom: 20px;
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
                        background-color: #00343f;
                        color: #fff;
                        cursor: not-allowed;
                        margin-right: 5px;
                        padding: 5px 15px 4px 15px !important;
                    }

                    .page_wrap li a.pageitem {
                        background: #0202028c;
                        margin-right: 5px;
                        color: #fff;
                        padding: 5px 15px 4px 15px !important;
                    }

                    .page_wrap .jump-btn {
                        background-color: #415fa2;
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


                    .alphabet {
                        display: -ms-flexbox;
                        display: flex;
                        -ms-flex-wrap: wrap;
                        flex-wrap: wrap;
                        float: left;
                        margin-bottom: 20px
                    }

                    .alphabet .item {
                        margin: 1px
                    }

                    .alphabet .item.active a {
                        background-color: #e40066;
                        color: #fff
                    }

                    .alphabet a {
                        padding: 8px 12px;
                        border-radius: 15px;
                        overflow: hidden;
                        display: -ms-flexbox;
                        display: flex;
                        -ms-flex-align: center;
                        align-items: center;
                        background-color: #e9e9ef;
                        color: #7c7c8e;
                        cursor: pointer
                    }

                    .mycate {
                        float: left;
                        width: 98%;
                        padding: 0.4rem 0.5% 0;
                    }

                    .mycate a {
                        display: block;
                        height: 2rem;
                        line-height: 2rem;
                        border-radius: 2px;
                        text-align: center;
                        border: 1px solid #f91;
                        color: #f91;
                        box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        -webkit-box-sizing: border-box;
                        width: 20%;
                        float: left;
                        margin-bottom: 5px;
                        font-weight: bold;
                    }

                    .mycate a:hover {
                        background: #1e9fff;
                        color: #fff !important;
                    }

                    @media screen and (min-width: 760px) {
                        .mycate a {
                            height: 2rem;
                            line-height: 2rem;
                            width: 10%;
                        }
                    }

                    .group-item p {
                        color: #fff !important;
                    }
                </style>
                <div class="page_wrap">
                    <div class="page_wrap_inner">
                        <ul class="page_ul" style="padding:0;margin:0;">



{link_first}<li><a class="pageitem"href="{_url}">首页</a></li>{/link_first}
{links_pre max:3}<li><a class="pageitem"href="{_url}">{_page_no}</a></li>{/links_pre}
<li><a class="activepage"href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li><a class="pageitem"href="{_url}">{_page_no}</a></li>{/links_next}
{link_last}<li><a class="pageitem"href="{_url}">尾页</a></li>{/link_last}
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>