<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="referrer" content="always">
    <title>{@page_title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <style>
        a {
            transition: .2s
        }

        .listbox {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 10px #ddd
        }

        .sitebox {
            width: 80%;
            margin: 0 auto;
            overflow: hidden
        }

        .sitebox {
            margin-bottom: 20px
        }

        .sitebox p {
            text-align: center
        }

        .sitebox a {
            background: #333;
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-left: 1px solid
        }

        .sitebox a:hover {
            background: #bd0000
        }

        .sitebox a.act {
            background: #bd0000
        }

        .image-link {
            cursor: -webkit-zoom-in;
            cursor: -moz-zoom-in;
            cursor: zoom-in
        }

        .mfp-with-zoom .mfp-container,
        .mfp-with-zoom.mfp-bg {
            opacity: 0;
            -webkit-backface-visibility: hidden;
            -webkit-transition: all .3s ease-out;
            -moz-transition: all .3s ease-out;
            -o-transition: all .3s ease-out;
            transition: all .3s ease-out
        }

        .mfp-with-zoom.mfp-ready .mfp-container {
            opacity: 1
        }

        .mfp-with-zoom.mfp-ready.mfp-bg {
            opacity: .8
        }

        .mfp-with-zoom.mfp-removing .mfp-container,
        .mfp-with-zoom.mfp-removing.mfp-bg {
            opacity: 0
        }

        .mfp-no-margins img.mfp-img {
            padding: 0
        }

        .mfp-no-margins .mfp-figure:after {
            top: 0;
            bottom: 0
        }

        .mfp-no-margins .mfp-container {
            padding: 0
        }

        .mfp-title {
            text-align: center;
            padding: 6px 0
        }

        .image-source-link {
            color: #ddd
        }

        body {
            -webkit-backface-visibility: hidden;
            margin: 0;
            padding: 0;
            background: #f1f1f1
        }

        .listbox a {
            color: #000;
            padding: 10px 15px;
            background: #fff;
            margin: 10px;
            border-radius: 5px;
            text-decoration: none;
            box-shadow: 0 0 12px #a5a5a5;
            float: left;
            font-size: 16px
        }

        .listbox a:hover {
            background: #f80;
            color: #fff
        }

        .listbox .on {
            background: #f80;
            color: #fff
        }

        .list {
            overflow: hidden
        }

        .taglist {
            overflow: hidden;
            padding: 15px
        }

        .listbox2 {
            width: 80%;
            margin: 0 auto;
            margin-top: 20px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 0 10px #ddd
        }

        .list2 {
            overflow: hidden;
            padding: 5px 0
        }

        img {
            width: 100%
        }

        .header-b {
            height: 80px;
            margin-bottom: 1rem;
            line-height: 80px;
            background: #f80;
            box-shadow: 0 5px 9px 0 #ddd
        }

        .header {
            width: 80%;
            margin: 0 auto;
            text-align: center
        }

        .header a {
            font-size: 1.6rem;
            text-decoration: none;
            color: #fff;
            font-weight: 700
        }

        .header span {
            padding-left: 15px
        }

        .temo {
            text-align: center;
            font-size: 16px;
            color: #000;
            margin: 30px auto
        }

        .headerr {
            float: right;
            height: 80px;
            line-height: 80px;
            margin-right: 20px
        }

        .ptit h1 {
            font-size: 22px;
            border-left: 5px solid #f80;
            padding: 3px 10px;
            color: #f80;
            line-height: 28px;
            margin-left: 20px
        }

        .b-listtab-main {
            margin-top: 0;
            padding-top: 5px;
            overflow: hidden
        }

        .b-listtab-main a {
            color: #333;
            text-decoration: none;
            font-size: 15px
        }

        .b-listtab-main a:hover {
            color: #f80
        }

        .b-listtab-main ul {
            margin: 20px 0;
            padding: 0
        }

        .b-listtab-main .item {
            float: left;
            width: 14.4%;
            width: 22.5%;
            height: auto;
            margin: 0 0% 0% 2%;
            padding-bottom: 10px;
        }

        .b-listtab-main .cover {
            width: 100%;
            padding-top: 65%;
            overflow: hidden;
            position: relative;
            font-size: 11px;
        }

        .b-listtab-main .cover img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            left: 0;
            top: 0;
        }

        .b-listtab-main .pay {
            position: absolute;
            top: 4px;
            left: 4px;
            display: block;
            width: 39px;
            height: 19px;
            line-height: 19px;
            background: #cd1919;
            color: #fff;
            text-align: center;
            border-radius: 2px
        }

        .b-listtab-main .hint {
            position: absolute;
            right: 0;
            bottom: 0;
            padding: 2px 6px;
            background: rgba(243, 6, 6, .8);
            color: #fff;
            border-radius: 7px
        }

        .b-listtab-main .detail {
            width: 100%;
            background: #fff;
            height: 44px;
            overflow: hidden;
            margin-top: 10px
        }

        .b-listtab-main .title {
            font-size: 12px;
            padding: 7px 5px 3px
        }

        .b-listtab-main .title .s1 {
            display: inline-block;
            float: left;
            width: 144px;
            height: 20px;
            line-height: 20px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #222
        }

        .b-listtab-main .title .s2 {
            float: right;
            color: #ff7b00;
            font-size: 10px
        }

        .b-listtab-main .star {
            font-size: 10px;
            color: #999;
            margin: 0 5px;
            width: 170px;
            height: 18px;
            line-height: 18px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }

        .b-listtab-main {
            overflow: hidden;
            margin-top: 11px
        }

        .b-listtab-main .item {
            list-style: none
        }

        .stui-page {
            width: 100%;
            margin: 0px auto 30px;
            overflow: hidden;
            text-align: center;
            font-size: 0;
            padding: 10px 0 0 0;
        }

        .stui-page li {
            font-size: 16px;
            display: inline-block;
        }

        .stui-page li a {
            background: #fff;
            box-shadow: 0 0 12px #a5a5a5;
            margin: 10px;
            min-width: 55px;
            display: block;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #eee;
            color: #333;
        }

        .stui-page li a:hover,
        .stui-page li.dangqianye a {
            background-color: #f80;
            color: #fff;
            border: 1px solid #f80
        }

        .stui-page .hidden-xs {
            display: none
        }

        .stui-page .visible-xs {
            display: block !important
        }

        @media(min-width:992px) and (max-width:1300px) {
            .b-listtab-main .item {
                width: 47%
            }
        }

        @media(min-width:768px) and (max-width:991px) {
            .b-listtab-main .item {
                width: 47%
            }
        }

        @media(max-width:767px) {

            .listbox,
            .listbox2,
            .header,
            .sitebox {
                width: 95%;
            }

            .list {
                padding: 10px 5px
            }

            .stui-page {
                width: 100%;
                margin: 30px 0 20px;
                padding: 0
            }

            .headerr {
                display: none
            }

            .header a {
                font-size: 2rem
            }

            .header span {
                font-size: 14px
            }

            .b-listtab-main .item {
                width: 47%
            }

            .pingfen {
                display: none
            }

            .bbbt {
                font-size: 12px;
                overflow: hidden;
                height: 29px
            }

            .listbox a {
                padding: 5px 10px;
                margin: 5px;
                width: 24.527348518371%;
                text-align: center;
            }
        }

        @media only screen and (max-width:420px) {
            .b-listfilter-item .item a {
                margin: 5px 0 5px 9pt;
            }

            .b-listtab-main {
                margin: 0;
                padding: 0
            }

            .b-listtab-main .item {
                width: 47%
            }

            .b-listtab-main .cover {
                /*height:130px;padding:0*/
            }

            .b-listtab-main .title .s1 {
                width: 62px
            }

            .b-listtab-main .detail {
                overflow: hidden;
                margin-top: 3px
            }

            .b-listtab-main .item {
                height: 190px
            }
        }

        @media only screen and (max-width:320px) {
            .b-listfilter-item .item a {
                margin: 5px 0 5px 5px;
            }

            .b-listtab-main .item {
                margin: 0 0 20px 18px;
            }
        }

        @media(max-width:380px) {
            .listbox a {
                width: 24%;
            }
        }

        .ads {
            width: 80%;
            margin: 0px auto 10px auto;
        }

        .ads img {
            width: 100%;
            border: 0px;
            margin: 0px;
            padding: 0px;
        }

        @media (max-width: 767px) {
            .ads {
                width: 95%
            }
        }

        .searchbox * {
            box-sizing: border-box;
        }

        .searchbox {
            /*width:80%;*/
            margin: 0 auto;
            overflow: hidden
        }

        @media(max-width:767px) {
            /*.searchbox{width:95%;}*/
        }

        .searchbox .searchform input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid #f80;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        .searchbox .searchform button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #f80;
            color: white;
            font-size: 15px;
            border: 1px solid #f80;
            border-left: none;
            cursor: pointer;
        }

        .searchbox .searchform button:hover {
            background: #f80;
        }

        .searchbox .searchform::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

    <div class="listbox2" style="margin-top:20px;">
        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:video index:1}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:video index:1 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>




        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:video index:2}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:video index:2 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>





        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:video index:3}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:video index:3 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>




        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:video index:4}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:video index:4 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>





        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:bt index:1}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:bt index:1 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>


        <div class="list2" style="padding: 5px 0px;">
            <div class="ptit">
                <h1>{@class_name type:bt index:2}</h1>
            </div>
            <div class="b-listtab-main">
                <div class="s-tab-main">
                    <ul>
{list type:bt index:2 total:8 title_len:40}
                        <li class="item">
                            <a href="{_url}">
                                <div class="cover g-playicon">
                                    <img width="352" height="198" class="lazyload lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg">
                                </div>
                                <div class="detail">
                                    <span class="s1">{_title}</span>
                                </div>
                            </a>
                        </li>
{/list}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>