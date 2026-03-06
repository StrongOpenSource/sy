    <div class="wrapper">
        <div class="wrapper-container wrapper-main d-flex fd-column">


{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}

            <header class="header d-flex ai-center">
                <a href="/" class="logo header__logo">
                    <div class="logo__title">
                        <span class="">{base64}tanhuabt.com{/base64}</span>
                    </div>
                    <div class="logo__caption">记住上方最新网址</div>
                </a>
                <div class="header__search flex-grow-1 d-flex jc-flex-end">
                    <form id="quicksearch">
                        <div class="header__search-box"><input id="story" name="content" placeholder="Search..." type="text" autocomplete="off"><button type="submit" class="search-btn">站内检索</button></div>
                    </form>
                </div>
                <!-- <div class="header__login"><a href="htt23/"><span class="fal fa fa-internet-explorer"></span></a></div> -->
                <div class="header__btn-menu d-none js-show-mobile-menu">
                    <span class="fal fa fa-bars"></span>
                </div>
            </header>

            <script>
                document.getElementById('quicksearch').addEventListener('submit', function(e) {
                    e.preventDefault();
                    var keyword = document.getElementById('story').value;
                    var cleanedKeyword = keyword.replace(/-+/g, '');
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
                .header__menu>li>a {
                    font-size: 18px;
                    border-bottom: 1px solid rgba(0, 0, 0, .05);
                }
            </style>

            <div class="nav">
                <ul class="header__menu d-flex flex-grow-1 js-this-in-mobile-menu">
                    <li class=" is-active"><a href="/">网站首页</a></li>
{nav type:video no:v2 count:8} 
                    <li class=" "><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
                    <li class=" "><a href="{_class_link}">{_class_name}</a></li>
{/nav}


                </ul>
            </div>
            <main class="content flex-grow-1">

                <style>
                    .linklist ul {
                        display: grid;
                        grid-template-columns: auto auto auto auto auto auto auto auto auto auto auto;
                        padding: 2px
                    }

                    .linklist ul li {
                        text-align: center;
                        margin: 0px 2px 2px 2px;
                        display: block;
                        overflow: hidden;
                    }

                    .linklist ul li a {
                        width: 100%;
                        text-decoration: none;
                        background-color: #181818;
                        color: #fff;
                        font-size: 18px;
                        padding: 5px;
                        border-radius: 0px;
                        display: inline-block;
                        white-space: nowrap;
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
                            grid-template-columns: auto auto auto;
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

                    .linklist ul li a.lan {
                        background: #1e88e5;
                    }

                    .linklist ul li a.fen {
                        background: #ff4081;
                    }

                    .linklist ul li a.bai {
                        background: #fff;
                        color: #000;
                    }

                    .linklist ul li a.lan {
                        background: #22a6b3;
                        color: #fff;
                    }

                    .linklist ul li a.hui {
                        background: #454546;
                        color: #fff;
                    }

                    .linklist ul li a.hui:hover {
                        background: #22a6b3;
                        color: #fff;
                    }

                    .linklist ul li a.huang {
                        background: #454546;
                        color: #222;
                    }

                    .linklist ul li a.hong {
                        background-color: rgb(227, 68, 73);
                        color: rgb(255, 255, 255);
                    }
                </style>
                <h3 style="padding: 0;margin: 0 0 8px 8px;color: #fff"><span class="">友情链接</span></h3>
                <div class="linklist">
                    <ul style="padding:0;margin: 0 0 10px;">
{link area:link1}
                        <li class=""><a class="hui" href="{_url}" style="color:;" rel="nofollow">{base64}{_text}{/base64}</a></li>
{/link}
                    </ul>
                </div>
                <style>
                    .tags-list a {
                        padding: 3px 3px;
                        font-size: 18px;
                    }
                </style>
                <div class="page__tags-item tags-list d-flex">
                    <div class="page__tags-caption">搜索标签</div>
{splite var:search_tags_torrent}
                    <span class=""><a class="" href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></span>
{/splite}
                </div>



