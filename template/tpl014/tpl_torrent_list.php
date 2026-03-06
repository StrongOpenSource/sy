<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <title>{@page_title}</title>
    <meta name="referrer" content="always" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/normalize.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/styles.css">
    <style>
        body {
            background-color: rgb(255, 227, 255);
            color: #6600CC
        }

        a:hover {
            color: #6600CC
        }

        h1,
        h2,
        h3 {
            color: #6600CC;
            margin: 5px auto 5px 0;
        }

        .logo {
            background-color: #FF6699;
            color: #ffffff;
            border: 1px solid #FF6699
        }

        .navigation-menu>li>.btn {
            border: 1px solid #FF6699
        }

        .related-queries li .la {
            color: #ffffff
        }

        .gal {
            background-color: rgb(255, 227, 255);
            border: 1px solid #f90
        }

        .gal-description {
            text-align: center
        }

        .gal a {
            color: #6600CC
        }

        .gal:hover .gal-amount,
        .gal:hover .gal-duration {
            background-color: #FF6699;
            color: #ffffff
        }

        .btn,
        .pages li a {
            background-color: #FF6699;
            color: #ffffff
        }

        a.dibusoci,
        .dibusoci .la,
        a.dibulj,
        .dibulj .la {
            color: #6600CC !important
        }

        .video-info>div .la {
            color: #6600CC
        }

        .video-links a {
            background-color: #FF6699
        }

        .footer {
            background-color: #FF6699;
            color: #ffffff;
            border-top: 1px solid #FF0000
        }

        .btn-up {
            background-color: #FF6699;
            border: 1px solid #FF0000;
            color: #fff !important
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
    
    {@include file:header}


                <div class="grid">
{list type:bt mode:list title_len:40}
                    <div class="gal">
                        <a href="{_url}" title="">
                            <div class="gal-img-2">
                                <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}" >
                            </div>
                            <div class="gal-description">{_title}</div>
                        </a>
                    </div>
{/list}
                </div>
                <style>
                    .pages li a {
                        font-size: 22px;
                        height: auto;
                        line-height: inherit;
                        padding: 10px 20px
                    }
                </style>
                <ul class="pagination pages d">
{link_first}<li class="fenyeyema"><a class="fyym" href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li class="fenyeyema"><a class="fyym" href="{_url}">上一页</a></li>{/link_pre1}
{links_pre max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_next}
{link_next1}<li class="fenyeyema"><a class="fyym" href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li class="fenyeyema"><a class="fyym" href="{_url}">尾页</a></li>{/link_last}

                </ul>
{@js_tpl_code}
{@include file:footer}
</body>

</html>