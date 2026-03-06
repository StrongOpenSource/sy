        <header class="header">
            <div class="wrap">
                <div class="flex block">
                    <a class="logo" href="/"><img src="/template/{@var:cms_config_tpl_dir}/picture/logo.png" width="198" height="38" /></a>

                        <div class="nav flex">
                            <li class="">
                                <a class="item-menu" href="/" id="item1">网站首页</a>
                            </li>

                            {nav type:video no:v2 count:8}
                            <li class="">
                                <a class="item-menu" href="{_class_link}" rel="nofollow">{_class_name}</a>
                            </li>
                            {/nav}
                            {nav type:bt no:1 count:2 name:国产磁力,日本磁力}
                            <li class="">
                                <a class="item-menu" href="{_class_link}" rel="nofollow">{_class_name}</a>
                            </li>
                            {/nav}
                        </div>
                    <div class="action flex">

                        <div class="search">
                            <form method="get" action="/search.php" id="search_form" class="search-form form flex">
                                <div class="input">
                                    <input type="text" id="wd" placeholder="Search" value="" />
                                </div>
                                <button class="icon-search btn pink" type="submit"></button>
                            </form>
                        </div>
                        <span class="btn-search">
                            <span class="icon-search"></span>
                            <span class="icon-close"></span>
                        </span>
                        <span class="hamb-menu">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </span>
                    </div>
                </div>
            </div>
        </header>
        <script>
            document.getElementById('search_form').addEventListener('submit', function(e) {
                e.preventDefault();
                var keyword = document.getElementById('wd').value;
                var cleanedKeyword = keyword.replace('-', '');
                if (cleanedKeyword === '') {
                    alert('请输入搜索关键词！');
                    e.preventDefault();
                } else {
                    var search_url = '/search.php?content=' + encodeURIComponent(cleanedKeyword) + '';
                    window.location.href = search_url;
                }
            });
        </script>
        <div class="m-panel">
            <span class="icon-close close"></span>
            <div class="content">
                <div class="nav flex">
                    <li class="active">
                        <a class="item-menu" href="/" id="item1">网站首页</a>
                    </li>

                            {nav type:video no:v2 count:8}
                            <li class="">
                                <a class="item-menu" href="{_class_link}" rel="nofollow">{_class_name}</a>
                            </li>
                            {/nav}
                            {nav type:bt no:1 count:2 name:国产磁力,日本磁力}
                            <li class="">
                                <a class="item-menu" href="{_class_link}" rel="nofollow">{_class_name}</a>
                            </li>
                            {/nav}
                </div>
            </div>
        </div>
        <main>
            <section class="section pd-0" style="padding-top: 30px;">
                <style>
                    .app {
                        margin: 10px 0;
                        border-radius: 3px;
                        overflow: hidden
                    }

                    .app ul li {
                        float: left;
                        width: 8.33%;
                        text-align: center;
                        list-style-type: none
                    }

                    .app ul li img {
                        margin: 0 auto;
                        width: 56px;
                        height: 56px;
                        display: block;
                        border-radius: 12px
                    }

                    .app ul li a {
                        font: 13px/28px Tahoma, 'Microsoft Yahei', Simsun;
                        color: #666;
                        overflow: hidden;
                        white-space: nowrap
                    }

                    .app ul li a span {
                        line-height: 35px;
                        font-size: 16px;
                        font-weight: 700;
                        color: #FC0F64;
                    }

                    .app ul li a:hover {
                        color: #FD4C5D;
                        font-weight: bold
                    }

                    @media screen and (max-width:1000px) {
                        .app ul li {
                            width: 11%
                        }
                    }

                    @media screen and (max-width:820px) {
                        .app ul li {
                            width: 16.666%
                        }
                    }

                    @media screen and (max-width:768px) {
                        .app ul li {
                            width: 20%
                        }
                    }

                    @media screen and (max-width:640px) {
                        .app ul li {
                            width: 25%
                        }
                    }

                    @media screen and (max-width:544px) {
                        .app ul li {
                            width: 33.3333%
                        }
                    }
                </style>


                {ad area:hengfu1}
                    <div style="width: 100%;margin: 1px 0px;" class="{_class}">
                    <a href="{_url}" target="_blank" rel="nofollow" style="width: 100%;" class="{_class}">
                        <img src="{_image}" style="width: 100%;" class="{_class}"></a>
                    </div>

                {/ad}



                <div class="app">
                    <ul>



                        {ad area:tubiao1}
                        <li class="xiaoguo2">
                            <a rel="external nofollow" href="{_url}" target="_blank" data-id="7880">
                                <img class="lazy-load" src="{_image}" data-original="/upload/160434621.png">
                                <span style="color:#FF0000;">{base64}{_text}{/base64}</span>
                            </a>
                        </li>
                        {/ad}

                    </ul>
                </div>
                <style>
                    .xiuzheng span a {
                        border-radius: 0px;
                    }
                </style>

                <div class="wrap">
                    <div class="popular-searches">
                        <div class="title">
                            <h2 style="font-size: 18px;">🔍热门视频</h2>
                        </div>
                        <div class="block-searches flex xiuzheng" id="suijisousuoci">
                            {splite var:tags_hot_magnet}
                                <a href="/search.php?content={_var}">{_var}</a>
                            {/splite}
                        </div>
                    </div>
                </div>
