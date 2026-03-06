
    
    <style>
        .header_a {
            position: relative;
            z-index: 11
        }

        @media screen and (max-width: 860px) {
            .header_a.show .hamburger span {
                transform: translate3d(10px, 0, 0);
                background-color: #9046b9
            }

            .header_a.show .navigation {
                transform: translate3d(0, 0, 0);
                opacity: 1;
                visibility: visible;
                width: 100%
            }
        }

        .holder {
            padding: 12px 0 1px
        }

        .holder .wrap {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center
        }

        @media screen and (max-width: 860px) {
            .holder .wrap.show .user_button {
                color: #fff;
                background-color: #9046b9
            }

            .holder .wrap.show .wrap_panel {
                transform: translate3d(0, 0, 0);
                opacity: 1;
                visibility: visible
            }
        }

        @media screen and (max-width: 640px) {
            .holder .wrap.view_search .button_search {
                background-color: #9046b9;
                color: #fff
            }

            .holder .wrap.view_search .search {
                opacity: 1;
                visibility: visible;
                transform: translate3d(0, 0, 0)
            }
        }

        .login {
            margin-right: 50px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-positive: 0;
            flex-grow: 0
        }

        .hamburger {
            width: 26px;
            height: 22px;
            border: none;
            background: 0 0;
            margin-right: 20px;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            position: relative;
            display: none
        }

        @media screen and (max-width: 860px) {
            .hamburger {
                display: block
            }
        }

        .hamburger:before {
            content: "";
            background-color: #FF6699;
            height: 4px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            border-radius: 3px
        }

        .hamburger:after {
            content: "";
            background-color: #FF6699;
            height: 4px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            border-radius: 3px
        }

        .hamburger span {
            display: block;
            height: 4px;
            border-radius: 3px;
            background-color: #FF6699;
            transform: translate3d(0, 0, 0);
            transition: transform .3s, background .3s
        }

        .logo_a {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-positive: 0;
            flex-grow: 0
        }

        @media screen and (max-width: 640px) {
            .logo_a {
                -ms-flex-negative: 1;
                flex-shrink: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                min-width: 1px;
                display: -ms-flexbox;
                display: flex;
                -ms-flex-pack: center;
                justify-content: center
            }
        }

        .logo_a a,
        .logo_a img {
            display: block;
            max-width: 100%
        }

        .search {
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            min-width: 1px;
            margin-left: 50px
        }

        @media screen and (max-width: 1024px) {
            .search {
                margin-left: 20px
            }
        }

        @media screen and (max-width: 640px) {
            .search {
                margin: 0;
                -ms-flex-order: 4;
                order: 4;
                max-width: 100%;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background-color: #000;
                padding: 10px;
                opacity: 0;
                visibility: hidden;
                transform: translate3d(0, 5%, 0);
                transition: opacity .3s, visibility .3s, transform .3s
            }
        }

        .search .wrap {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 20px;
            background-color: #3c3c46
        }

        .input {
            color: #fff;
            font-family: quicksand, sans-serif;
            font-size: 22px;
            line-height: 1.3;
            height: 60px;
            width: 100%;
            background: 0 0;
            border: none;
            padding: 10px 20px;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            min-width: 1px
        }

        .button_submit {
            border: none;
            cursor: pointer;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            color: #fff;
            width: 60px;
            height: 60px;
            border-radius: 20px;
            background-color: #FF6699;
            transition: background .3s;
            position: relative;
            display: block
        }

        @media screen and (min-width: 1025px) {
            .button_submit:hover {
                background-color: #158ef8
            }
        }

        .button_submit i {
            font-size: 20px
        }

        .navigation {
            background-color: #FF6699;
            padding: 5px 0
        }

        @media screen and (max-width: 860px) {
            .navigation {
                position: absolute;
                top: 100%;
                left: 0;
                transform: translate3d(-100%, 0, 0);
                opacity: 0;
                visibility: hidden;
                transition: transform .3s, opacity .3s, visibility .3s
            }
        }

        .navigation .wrap {
            display: -ms-flexbox;
            display: flex;
            margin: 0 -20px;
            list-style: none;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
        }

        @media screen and (max-width: 1024px) {
            .navigation .wrap {
                margin: 0 -2px;
                -ms-flex-pack: justify;
                justify-content: space-between
            }
        }

        @media screen and (max-width: 860px) {
            .navigation .wrap {
                -ms-flex-direction: column;
                flex-direction: column
            }
        }

        .navigation .item {
            text-transform: uppercase
        }

        @media screen and (max-width: 1024px) {
            .navigation .item {
                padding: 0 2px;
                -ms-flex-negative: 1;
                flex-shrink: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                min-width: 1px
            }
        }

        .navigation .item.active a {
            background-color: #9046b9
        }

        .navigation a {
            color: #fff;
            display: block;
            text-align: center;
            padding: 12px 15px;
            border-radius: 20px;
            transition: background .3s;
            font-size: 22px
        }

        @media screen and (max-width: 1024px) {
            .navigation a {
                padding: 10px;
                min-width: auto
            }
        }

        @media screen and (min-width: 1025px) {
            .navigation a:hover {
                background-color: #9046b9
            }
        }

        .button_search {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            margin-left: 20px;
            background: 0 0;
            border: none;
            padding: 10px;
            border-radius: 20px;
            color: #ffffff;
            background-color: #9046b9;
            display: none;
            transition: background .3s, color .3s
        }

        @media screen and (max-width: 640px) {
            .button_search {
                display: block
            }
        }

        .button_search i {
            font-size: 20px
        }
    </style>
    <div class="header_a">
        <div class="holder">
            <div class="container">
{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;" class="{_class}"></a>
</div>
{/ad}
            </div>
        </div>
        
        <div class="holder">
            <div class="container">
                <div class="wrap">
                    <button type="button" class="hamburger">
                        <span></span>
                    </button>
                    <div class="logo_a">
                        <a class="logo_a" href="/"><img src="/template/{@var:cms_config_tpl_dir}/picture/logo.png" alt="" /></a>
                    </div>
                    <div class="search">
                        <form id="search-form" action="/search.php" method="get">
                            <div class="wrap">
                                <input type="search" class="input" name="content" id="wd" placeholder="搜索">
                                <button type="submit" class="button_submit" style="background-color: #9046b9;">
                                    <i class="la la-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <button type="button" class="button_search">
                        <i class="la la-search"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="navigation">
            <div class="container">
                <ul class="wrap">
                    <li class="item"><a href="/">网站首页</a></li>                    
{nav type:video no:v2 count:8} 
                        <li class="item "><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<li class="item "><a href="{_class_link}">{_class_name}</a></li>
{/nav}
                </ul>
            </div>
        </div>
    </div>




    <div class="wrapper">
        <main class="main">
            <div class="container">
                <style>
                    .block_app {
                        width: 100%;
                        margin: 5px auto;
                        display: flex;
                        flex-wrap: wrap;
                        justify-content: center
                    }

                    .block_app img {
                        border-radius: 30%;
                        width: 50px;
                        height: 50px;
                        object-fit: cover;
                        border: 2px solid gray
                    }

                    .block_app_item {
                        display: block
                    }

                    .block_app_item_title {
                        text-align: center;
                        font-size: 14px;
                        font-weight: 600;
                        color: #E33A65
                    }

                    .block_app_item_image {
                        margin: 13px
                    }

                    @media only screen and (max-width:768px) {
                        .block_app img {
                            width: 50px;
                            height: 50px
                        }

                        .block_app_item_title {
                            font-size: 12px
                        }

                        .block_app_item_image {
                            margin: 5px
                        }
                    }
                </style>
                <style>
                    /*.block_app{width:960px;margin:10px auto;}*/
                    @media (max-width:960px) {
                        .block_app {
                            width: 96%
                        }
                    }
                </style>
                <style>
                    .yqlj {
                        width: 100%;
                        overflow: hidden;
                        display: block;
                        /*box-shadow: 0 1px 1px 0 rgba(0,0,0,.05);*/
                        margin: 0px auto;
                    }

                    .yqlj span a {
                        padding: 5px 10px;
                        float: none;
                        border-radius: 5px;
                        text-align: center;
                        font-size: 16px;
                        color: #fff;
                        display: inline-block;
                        background-color: #FF6699;
                        margin: 1px;
                        transition-duration: .3s;
                        text-decoration: none;
                    }

                    .yqlj span a: {
                        background-color: #FF6699;
                    }

                    .yqlj span a:hover {
                        background: red;
                        color: #FFF
                    }

                    @media screen and (max-width: 767px) {
                        .yqlj {
                            width: 100%;
                        }

                        .yqlj span a {
                            width: 24.3%;
                            float: left;
                            padding: 5px 0px;
                            font-size: 13px;
                        }
                    }

                    .yqlj div h1 {
                        width: 100%;
                        margin: 10px auto 10px 0;
                        padding: 0;
                        display: block;
                        box-sizing: border-box;
                        background-color: #FF6699;
                        text-align: center;
                        border-radius: 5px;
                        border: 1px solid #FF0000;
                        font-size: 16px
                    }
                </style>
                <div class="yqlj">
                    <h3 class="">推荐导航</h3>
{link area:link_rjdh}
                    <span class=""><a target="_blank" href="{_url}" style="color:;">{base64}{_text}{/base64}</a></span>
{/link}
                </div>
                <style>
                    .sotags {
                        margin: 2px 2px 0 0 !important;
                    }

                    .sotags .la {
                        margin: 2px 2px 0 0 !important;
                    }

                    .sotags a {
                        min-width: 35px;
                        height: 35px;
                        padding: 0 10px;
                        display: inline-block;
                        background-color: #FF6699;
                        line-height: 35px
                    }
                </style>
                <h3 class="d">搜索标签</h3>
                <ul class="related-queries">
{splite var:search_tags_torrent}
<li class="sotags"><a class="size-2" href="/search.php?content=b64{_var_b64}&type=2"><i class="la la-search"></i>{base64}{_var}{/base64}</a></li>
{/splite}
                </ul>