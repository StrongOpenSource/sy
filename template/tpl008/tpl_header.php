
    <style>
        .page__wrapper {
            padding-top: 0;
        }

        .header1280 {
            margin: 0 auto;
            position: relative;
            max-width: 1280px;
        }
    </style>
    <div class="page__wrapper js-filter" style="opacity: 0; transition: opacity .5s;">


        <header class="page__header /*js-filter js-fixed-header*/ header1280">


        {ad area:hengfu1}
        <div style="width: 100%;margin: 1px 0px;" class="{_class}">
        <dl style="margin: 0px;" class="{_class}">
        <dt class="{_class}">
            <a href="{_url}" target="_blank" rel="nofollow"  class="{_class}">
                <img src="{_image}" class="{_class}" style="width: 100%;"></a>
        </dt></dl>
    </div>
        {/ad}

            
            <div class="header">
                <div class="container">
                    <div class="navbar">
                        <div class="navbar__logo">
                            <div class="logo">
                                <a href="/" class="logo__link d">
                                    <strong class="logo__mark">{@var:site_name}</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <style>
            .fenleilist ul {
                margin: 0 auto;
                position: relative;
                max-width: 1280px;
                background-color: cadetblue;
            }

            .fenleilist ul {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto;
                padding: 5px
            }

            .fenleilist ul li {
                text-align: center;
                margin: 0px 8px 8px 8px;
                display: block;
            }

            .fenleilist ul li a {
                width: 100%;
                text-decoration: none;
                background-color: #fff;
                font-size: 26px;
                padding: 15px;
                /*border-radius:5px;*/
                display: inline-block;
            }

            .fenleilist ul li.mok a,
            .fenleilist ul li a:hover {
                background-color: #37bf91 !important;
                color: #ffffff !important;
            }

            @media only screen and (max-width:999px) {
                .fenleilist ul li a {
                    font-size: 26px;
                }

                .fenleilist ul {
                    grid-template-columns: auto auto auto auto;
                }
            }

            @media only screen and (max-width:750px) {
                .fenleilist ul li a {
                    font-size: 22px;
                    padding: 10px;
                }

                .fenleilist ul {
                    grid-template-columns: auto auto auto;
                }
            }
        </style>
        <div class="fenleilist ">
            <ul>
                <li class="d"><a class="" href="/">网站首页</a></li>
                {nav type:video no:v2 count:8 order:1,2,4,3,8,6,7,5}
                <li class="d "><a class="" href="{_class_link}">{_class_name}</a></li>
                {/nav}
                {nav type:bt no:1 count:2 name:国产磁力,日本种子}
                <li class="d "><a class="" href="{_class_link}">{_class_name}</a></li>
                {/nav}
            </ul>
        </div>
        <style>
            .gudingsss {
                margin: 0 auto;
                position: relative;
                max-width: 1280px;
                background-color: cadetblue;
                padding: 13px;
            }

            .search__frame {
                margin: 0 auto;
            }
        </style>
        <div class="">
            <div class="search gudingsss d">

                <form id="search_form">
                    <div class="search__frame">
                        <div class="search__field">
                            <input type="text" class="field field--search" id="search_input" value="" placeholder="Search">
                        </div>
                        <button class="search__btn">
                            <span class="search__icon">
                                <svg class="icon icon--search" width="32px" height="32px">
                                    <use xlink:href="/template/{@var:cms_config_tpl_dir}/fonts/site.svg#search"></use>
                                </svg>
                            </span>
                        </button>
                    </div>
                </form>

            </div>
        </div>
        <script>
            document.getElementById('search_form').addEventListener('submit', function(e) {
                e.preventDefault();
                var keyword = document.getElementById('search_input').value;
                var cleanedKeyword = keyword.replace(/[-\/\\]+/g, ' ');
                if (cleanedKeyword === '') {
                    alert('请输入搜索关键词！');
                    e.preventDefault();
                } else {
                    var search_url = '/search.php?content=' + encodeURIComponent(cleanedKeyword);
                    window.location.href = search_url;
                }
            });
        </script>
        <style>
            .search_tags a {
                background: #4c4c4c;
                font-size: 1rem;
                color: #fff;
            }

            .search_tags a:hover {
                background-color: #37bf91 !important;
                color: #ffffff !important;
            }
        </style>
        <div class="container container--big" style="background-color: cadetblue;    padding: 0 10px 10px;">
            <div class="trailer__cols">
                <div class="trailer__col">
                    <div class="btn-group">
                        {splite var:hot_torrent_tags}
                        <div class="btn-group__item search_tags d"><a class="btn btn--primary btn--sm" href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></div>
                        {/splite}
                    </div>
                </div>
            </div>
        </div>
        <style>
            /* app-v4 */
            .apps-v4 {
                width: 100%;
                display: inline-block;
                text-align: center;
                margin: 0 auto;
            }

            .apps-v4 a {
                width: 10%;
                display: inline-block;
                text-align: center;
                margin: 7px 5px;
                padding-top: 6px;
                border-radius: 10px;
            }

            .apps-v4 a div {
                width: 100%;
                display: inline-block;
            }

            .apps-v4 a div.a {
                display: inline-block;
            }

            .apps-v4 a div.a img {
                width: 80px;
                height: 75px;
                border-radius: 10px;
            }

            .apps-v4 a div.b {
                font-size: 18px;
                font-weight: bold;
                color: #000;
            }

            .apps-v4 a:hover {
                background: rgba(243, 240, 91, 0.2);
            }

            @media screen and (max-width: 600px) {
                .apps-v4 a {
                    width: 20%;
                }
            }

            @media screen and (max-width: 1199px) {
                .apps-v4 a div.b {
                    font-size: 14px;
                }
            }
        </style>
        <div class="apps-v4 header1280">
        </div>
        <style>
            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto auto auto;
                padding: 2px
            }

            .grid-item {
                background-color: #2e2e2e;
                padding: 5px;
                font-size: 14px;
                text-align: center;
                margin: 2px;
                border-radius: 10px
            }

            .grid-item a {
                text-decoration: none;
                color: #fff
            }

            @media only screen and (max-width:1400px) {
                .grid-item {
                    font-size: 16px;
                }

                .grid-container {
                    grid-template-columns: auto auto auto auto auto auto;
                }
            }

            @media only screen and (max-width:750px) {
                .grid-item {
                    font-size: 10px;
                }

                .grid-container {
                    grid-template-columns: auto auto auto auto;
                }
            }
        </style>
        <div style="width: 100%; text-align:center; margin-left: auto; margin-right: auto" class="header1280">
            <h3>推荐导航</h3>
            <div class="grid-container">


                {link area:link_tjdh}


                <div class="grid-item" style="background: #;">

                    <a href="{_url}" data-id="8071" target="_blank" style="color:;">{base64}{_text}{/base64}</a>

                </div>

                {/link}

            </div>
        </div>