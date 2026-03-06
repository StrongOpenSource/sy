
            <div class="container">


{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;" class="{_class}"></a>
</div>
{/ad}
            </div>
    
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <a class="logo" href="/"><span>{@site_name}</span></a>

                <div class="togglers">
                    <span class="search-toggle btn"><i class="la la-search"></i></span>
                    <span class="nav-toggle btn"><i class="la la-bars"></i></span>
                </div>
                <form class="search-form" id="search-form" method="get">
                    <input class="input search-input" type="text" id="search" placeholder="请输入搜索关键词">
                    <button class="search-btn" type="submit">
                        <i class="la la-search"></i>
                    </button>
                </form>
            </div>
        </header>
        <script>
            document.getElementById('search-form').addEventListener('submit', function(e) {
                e.preventDefault();
                var keyword = document.getElementById('search').value;
                if (keyword === '') {
                    alert('请输入搜索关键词！');
                    e.preventDefault();
                } else {
                    var search_url = '/search.php?content=' + encodeURIComponent(keyword);
                    window.location.href = search_url;
                }
            });
        </script>
        <nav class="navigation">
            <div class="container">
                <ul class="nav-main">
                    <li><a href="/"><i class="la la-home"></i>网站首页</a></li>
{nav type:video no:v2 count:8} 
<li><a href="{_class_link}"><i class="la la-table"></i>{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<li><a href="{_class_link}"><i class="la la-table"></i>{_class_name}</a></li>
{/nav}


                </ul>
            </div>
        </nav>
        <main class="main">
            <div class="container">
                <style>
                    .app {
                        overflow: hidden;
                        border-radius: 2px;
                        /*max-width:1200px;*/
                        margin: 0 auto;
                    }

                    .navi {
                        font-size: 0;
                        padding: 5px;
                    }

                    .appico {
                        width: calc(7.5% - 1px);
                        margin: 5px;
                        height: auto;
                        box-sizing: border-box;
                        display: inline-block;
                        position: relative
                    }

                    .appico p {
                        width: 100%;
                        height: 25px;
                        line-height: 25px;
                        text-align: center;
                        font-size: 14px;
                        margin: 0;
                        color: #fff;
                        overflow: hidden
                    }

                    .naicon {
                        border-radius: 5px;
                        overflow: hidden;
                        font-size: 0;
                        margin: 12px
                    }

                    .appico img {
                        width: 100%
                    }

                    .appico:hover .btn-raised {
                        -webkit-box-shadow: 0 0 12px 4px rgba(0, 0, 0, .24), 0 0 2px -2px rgba(0, 0, 0, .4), 0 1px 12px 0 rgba(0, 0, 0, .22);
                        box-shadow: 0 0 12px 4px rgba(0, 0, 0, .24), 0 0 2px -2px rgba(0, 0, 0, .4), 0 1px 12px 0 rgba(0, 0, 0, .22)
                    }

                    @media screen and (max-width:960px) {
                        .appico {
                            width: calc(25% - 10px)
                        }
                    }
                </style>
<!--                 <div class="app">
                    <div class="navi">
                        <div class="appico">
                            <a rel="external nofollow" href="" >
                                <div class="naicon" >
                                    <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="/upload/163205101.jpg">
                                </div>
                            </a>
                            <p>帝王会所</p>
                        </div>
                        <div class="appico">
                            <a rel="external nofollow" href=""  >
                                <div class="naicon" >
                                    <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="/upload/133653771.png">
                                </div>
                            </a>
                            <p>蜜桃导航</p>
                        </div>
                    </div>
                </div> -->
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
                <div style="width: 100%; text-align:center; margin-left: auto; margin-right: auto">
                    <h3>推荐导航</h3>
                    <div class="grid-container">
{link area:link_tjdh}
                        <div class="grid-item" style="background: #;">
                            <a target="_blank" href="{_url}" style="color:;">{base64}{_text}{/base64}</a>
                        </div>
{/link}


                    </div>
                </div>
                <h3>大家都在搜</h3>
                <div class="linklist">
{splite var:search_tags_torrent}
                    <li><a class="size-3" href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></li>
{/splite}
                </div>

