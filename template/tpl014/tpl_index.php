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




                <h3 style="color: #FF6699;">{@class_name type:video index:1}</h3>
                <div class="grid">
{list type:video index:1 total:14 title_len:40}
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

                <h3 style="color: #FF6699;">{@class_name type:video index:4}</h3>
                <div class="grid">
{list type:video index:4 total:14 title_len:40}
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


                <h3 style="color: #FF6699;">{@class_name type:video index:3}</h3>
                <div class="grid">
{list type:video index:3 total:14 title_len:40}
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




                <h3 style="color: #FF6699;">{@class_name type:video index:2}</h3>
                <div class="grid">
{list type:video index:2 total:14 title_len:40}
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



                <h3 style="color: #FF6699;">{base64}日本磁力{/base64}</h3>
                <div class="grid">
{list type:bt index:2 total:14 title_len:40}
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


                <h3 style="color: #FF6699;">{base64}国产磁力{/base64}</h3>
                <div class="grid">
{list type:bt index:1 total:14 title_len:40}
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
{@js_tpl_code}
{@include file:footer}

</body>

</html>