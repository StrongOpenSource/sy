

                            {ad area:hengfu1}
                            <div style="width: 100%;margin: 1px 0px;" class="{_class}">
                            <dl style="margin: 0px;" class="{_class}">
                            <dt class="{_class}">
                                <a href="{_url}" target="_blank" rel="nofollow"  class="{_class}">
                                    <img src="{_image}" class="{_class}" style="width: 100%;"></a>
                            </dt></dl>
                        </div>
                            {/ad}


        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <header id="masthead" class="site-header" role="banner">

            <div class="site-branding row">
                <div class="logo">
                    <a href="/" rel="home"><img src="/template/{@var:cms_config_tpl_dir}/picture/logo.png"></a>
                    <p class="site-description"></p>
                </div>
                <div class="header-search small-search d">

                    <form id="searchform">
                        <input class="input-group-field" placeholder="请输入搜索内容" id="searchinput" type="text" />
                        <button type="submit" class="ssanniu">搜索</button>
                    </form>

                </div>
            </div>
            <script>
                document.getElementById('searchform').addEventListener('submit', function(e) {
                    e.preventDefault();
                    var keyword = document.getElementById('searchinput').value;
                    if (keyword === '') {
                        alert('请输入搜索内容');
                        e.preventDefault();
                    } else {
                        var search_url = '/search.php?content=' + encodeURIComponent(keyword);
                        window.location.href = search_url;
                    }
                });
            </script>
            <style>
                #site-navigation .menu-item a {
                    font-size: 18px;
                    height: 50px;
                    line-height: 50px;
                    background: black;
                    font-weight: bold;
                }

                #site-navigation {
                    height: auto;
                }

                #site-navigation>ul>li {
                    margin: 5px;
                }
            </style>
            <!-- .site-branding -->
            <nav id="site-navigation" class="main-navigation membership-enabled" role="navigation">
                <!-- <div id="head-mobile"></div> -->
                <!-- <div class="button-nav xialacaidan"></div> -->
                <ul id="menu-main-menu" class="row">
                    <li class="home-icon menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-95 current-menu-item"><a href="/">网站首页</a></li>
                    {nav type:video no:v2 count:8}
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-95 current-menu-item"><a href="{_class_link}">{_class_name}</a></li>
                    {/nav}
                    {nav type:bt no:1 count:2 name:国产磁力,日本磁力}
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-95 current-menu-item"><a href="{_class_link}">{_class_name}</a></li>
                    {/nav}
                </ul>
            </nav>
            <!-- #site-navigation -->
            <div class="clear"></div>
            <!-- 
<div class="happy-header-mobile">
<ads
</div>
-->
        </header>
        <!-- #masthead -->
        <style>
            .mobile-menu-box {
                display: none;
            }

            .mobile-menu li {
                list-style-type: none;
            }

            @media screen and (max-width: 991.98px) {
                .mobile-menu-box {
                    display: block;
                }
            }

            .mobile-menu {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
                padding: 2px
            }

            .mobile-menu li {
                background: #F3ACBD;
                padding: 10px;
                font-size: 16px;
                font-weight: 500;
                text-align: center;
                margin: 2px;
                border-radius: 10px;
                font-weight: bold;
            }

            .mobile-menu li a {
                text-decoration: none;
                color: #fff;
            }

            @media only screen and (max-width:1400px) {
                .mobile-menu {
                    grid-template-columns: auto auto auto auto auto auto;
                }

                ..mobile-menu li {
                    font-size: 16px;
                }
            }

            @media only screen and (max-width:750px) {
                .mobile-menu {
                    grid-template-columns: auto auto auto;
                }

                .mobile-menu li {
                    font-size: 16px;
                }
            }

            .mobile-menu li.mok {
                color: #ffffff;
                background-color: #000;
            }
        </style>
        <div id="content" class="site-content row mobile-menu-box" style="min-height: auto;">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <article id="post-26432" class="post-26432 page type-page status-publish">
                        <div class="mobile-menu">
                            <li class=""><a href="/">网站首页</a></li>
                            {nav type:video no:v2 count:8}
                            <li class=""><a href="{_class_link}">{_class_name}</a></li>
                            {/nav}
                            {nav type:bt no:1 count:2 name:国产BT,日本BT}
                            <li class=""><a href="{_class_link}">{_class_name}</a></li>
                            {/nav}
                        </div>
                    </article>
                </main>
            </div>
        </div>
        <div id="content" class="site-content row" style="min-height: auto;">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    <style>
                        .linklist ul {
                            display: grid;
                            grid-template-columns: auto auto auto auto auto auto auto auto auto auto;
                            padding: 2px
                        }

                        .linklist ul li {
                            text-align: center;
                            margin: 2px;
                            display: block;
                        }

                        .linklist ul li a {
                            width: 100%;
                            text-decoration: none;
                            background-color: #181818;
                            color: #fff;
                            padding: 5px;
                            border-radius: 10px;
                            display: inline-block;
                        }

                        @media only screen and (max-width:1400px) {
                            .linklist ul li a {
                                font-size: 16px;
                            }

                            .linklist ul {
                                grid-template-columns: auto auto auto auto auto auto;
                            }
                        }

                        @media only screen and (max-width:750px) {
                            .linklist ul li a {
                                font-size: 14px;
                            }

                            .linklist ul {
                                grid-template-columns: auto auto auto auto;
                            }
                        }

                        .linklist ul li:nth-child(20n) a {
                            background: #FF3366;
                        }

                        .linklist ul li:nth-child(11n+1) a {
                            background: #66CC00;
                        }

                        .linklist ul li:nth-child(20n+2) a {
                            background: #33CCFF;
                        }

                        .linklist ul li:nth-child(20n+3) a {
                            background: #ffab00;
                        }

                        .linklist ul li:nth-child(20n+4) a {
                            background: #ff00f1;
                        }

                        .linklist ul li:nth-child(20n+5) a {
                            background: #fb3939;
                        }

                        .linklist ul li:nth-child(20n+6) a {
                            background: #ff0000;
                        }

                        .linklist ul li:nth-child(20n+7) a {
                            background: #2b36ff;
                        }

                        .linklist ul li:nth-child(20n+8) a {
                            background: #00a90a;
                        }

                        .linklist ul li:nth-child(20n+9) a {
                            background: #00b523;
                        }

                        .linklist ul li:nth-child(10n+10) a {
                            background: #FF3366;
                        }

                        .linklist ul li:nth-child(20n+11) a {
                            background: #32CD32;
                        }

                        .linklist ul li:nth-child(20n+12) a {
                            background: #4c4c4c;
                        }

                        .linklist ul li:nth-child(20n+13) a {
                            background: #FFA500;
                        }

                        .linklist ul li:nth-child(20n+14) a {
                            background: #FF7F50;
                        }

                        .linklist ul li:nth-child(20n+15) a {
                            background: #696969;
                        }

                        .linklist ul li:nth-child(20n+16) a {
                            background: #F08080;
                        }

                        .linklist ul li:nth-child(20n+17) a {
                            background: #DEB887;
                        }

                        .linklist ul li:nth-child(20n+18) a {
                            background: #F08080;
                        }

                        .linklist ul li:nth-child(20n+19) a {
                            background: #3e9096;
                        }

                        .linklist ul li a.hei {
                            background-color: #181818;
                            color: #fff;
                        }

                        .linklist ul li a.bai {
                            background-color: #fff;
                            color: #000;
                        }

                        .linklist ul li a.fen {
                            background-color: #FF3366;
                            color: #fff;
                        }

                        .linklist ul li a:hover {
                            color: #ffffff;
                            background-color: #F3ACBD;
                            -webkit-transition: width 0.3s;
                            transition: width 0.3s;
                        }
                    </style>
                    <header class="entry-header ">
                        <h1 class="page-title" style="color: fff;border-color: #282828!important;    margin: 5px;padding: 0;">名站导航</h1>
                    </header>
                    <div class="linklist">
                        <ul style="padding:0;margin: 0 0 10px;">
                            {link area:link_mzdh}
                            <li class=""><a class="hei" href="{_url}" data-id="8128" target="_blank" style="color:;" rel="nofollow">{base64}{_text}{/base64}</a></li>
                            {/link}
                        </ul>
                    </div>
                    <style>
                        .sososos ul {
                            display: grid;
                            grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto auto auto auto auto;
                            padding: 2px
                        }

                        .sososos ul li {
                            text-align: center;
                            margin: 2px;
                            display: block;
                        }

                        .sososos ul li a {
                            width: 100%;
                            text-decoration: none;
                            background-color: #181818;
                            color: #fff;
                            padding: 5px;
                            border-radius: 10px;
                            display: inline-block;
                        }

                        @media only screen and (max-width:1400px) {
                            .sososos ul li a {
                                font-size: 16px;
                            }

                            .sososos ul {
                                grid-template-columns: auto auto auto auto auto auto auto auto;
                            }
                        }

                        @media only screen and (max-width:750px) {
                            .sososos ul li a {
                                font-size: 14px;
                            }

                            .sososos ul {
                                grid-template-columns: auto auto auto auto auto auto;
                            }
                        }
                    </style>
                    <header class="entry-header ">
                        <h1 class="widget-title"><i class="fa fa-search"></i>热门种子</h1>
                    </header>
                    <div class="linklist sososos">
                        <ul style="padding:0;margin: 0 0 10px;">
                            {splite var:hot_torrent_tags}
                                <li class=""><a href="/search.php?content={_var}&type=2">{base64}{_var}{/base64}</a></li>
                            {/splite}
                        </ul>
                    </div>
                </main>
            </div>
        </div>


