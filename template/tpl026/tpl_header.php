    <div id="container">
        <!-- 
<div class="menu-btn" id="mobile-menu"><span>mobile menu</span></div> 
-->




        <div class="header" id="header">
            <div class="container">

                <div class="wrap">
                    <ul class="user-links">
                    </ul>
                </div>
                <div class="logo">
                    <a href="/"></a>
                </div>
                <div class="mi-holder menu-btn" id="mobile-menu">
                    <a id="menu-icon">
                        <span></span>
                    </a>
                    <strong></strong>
                </div>
                <div class="header-right">
                    <div class="social-bookmarks">
                    </div>
                </div>
                <div class="search">
                    <form id="search_form">
                        <span class="search-button" id="search-button">Search</span>
                        <div class="search-text">
                            <input type="text" id="searchinput" placeholder="Search" />
                        </div>
                        <button type="submit" style="display:none;"></button>
                    </form>
                </div>
            </div>
            <script>
                const searchButton = document.getElementById('search-button');
                searchButton.addEventListener('click', function() {
                    var keyword = document.getElementById('searchinput').value;
                    if (keyword === '') {
                        alert('请输入搜索内容');
                    } else {
                        var search_url = '/search.php?content=' + encodeURIComponent(keyword);
                        window.location.href = search_url;
                    }
                });
            </script>
            <script>
                document.getElementById('search_form').addEventListener('submit', function(e) {
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
            <div class="top-menu">
                <div class="container">
                    <ul>
                        <li class="selected"><a href="/" id="item1">网站首页</a></li>
                        
{nav type:video no:v2 count:8} 
<li class=""><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<li class=""><a href="{_class_link}">{_class_name}</a></li>
{/nav}


                    </ul>
                </div>
            </div>
        </div>
        <style>
            .sokeytags ul {
                display: flex;
                flex-wrap: wrap;
                -webkit-flex-wrap: wrap;
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row wrap;
                flex-flow: row wrap;
                padding: 0;
                margin: 0;
                list-style-type: none;
                background: #fff
            }

            .sokeytags ul li {
                display: block
            }

            .sokeytags ul li a {
                float: left;
                border-radius: 3px;
                line-height: 22px;
                height: 22px;
                text-align: center;
                font-size: 18px;
                display: inline-block;
                background: #508AD0;
                color: #FFF;
                margin: 1px;
                transition-duration: .3s;
                text-decoration: none
            }

            .sokeytags ul li a {
                padding: 1px 8px 1px 8px;
            }

            @media screen and (max-width: 1000px) {
                /*.sokeytags ul li a{width: 32.7%;}*/
            }

            .sokeytags ul li a:hover {
                background-color: #FF3366;
                color: #fff;
            }
        </style>

    <div class="container">
{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}
    </div>


        <div class="container sokeytags block-video" style="background: #fff;padding: 10px 0px 10px 0px; width: 90%;">
            <ul style="padding: 0;">
{splite var:search_tags_torrent}
<li class=""><a href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></li>
{/splite}
            </ul>
        </div>
        <style>
            .linklist ul {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto auto auto;
                padding: 2px
            }

            .linklist ul li {
                text-align: center;
                margin: 0px 8px 8px 8px;
                display: block;
            }

            .linklist ul li a {
                width: 100%;
                text-decoration: none;
                background-color: #181818;
                color: #fff;
                font-size: 16px;
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
                    width: 90%;
                }

                .linklist ul {
                    grid-template-columns: auto auto auto auto;
                }
            }

            .linklist ul li a.a1 {
                background: #00aced;
                color: #fff;
            }

            .linklist ul li a.a2 {
                background: #508AD0;
                color: #fff;
            }
        </style>
        <div class="container linklist" style="margin: 0 auto;padding: 0;background: #fff; width: 98%;">
            <div class="headline" style="padding: 0 0px; width: 98%;">
                <h2 class="">合作导航</h2>
            </div>
            <ul style="padding:0;margin: 0 0 0px;">
{link area:link1}
                <li class=""><a class="a1" href="{_url}" style="color:;" rel="nofollow">{base64}{_text}{/base64}</a></li>
{/link}
            </ul>
        </div>
        <style>
            @media screen and (min-width: 1000px) {
                .fenleilist {
                    display: none;
                }
            }

            .fenleilist ul {
                grid-template-columns: auto auto auto;
            }

            .fenleilist ul {
                display: grid;
                grid-template-columns: auto auto auto auto auto auto auto;
                padding: 2px
            }

            .fenleilist ul li {
                text-align: center;
                margin: 0px 8px 8px 8px;
                display: block;
            }

            .fenleilist ul li a {
                width: 100%;
                text-decoration: none;
                background-color: #508AD0;
                color: #fff;
                font-size: 26px;
                padding: 10px 0px 10px 0px;
                border-radius: 10px;
                display: inline-block;
            }

            @media only screen and (max-width:1400px) {
                .fenleilist ul li a {
                    font-size: 26px;
                }

                .fenleilist ul {
                    grid-template-columns: auto auto auto auto auto;
                }
            }

            @media only screen and (max-width:750px) {
                .fenleilist ul li a {
                    font-size: 22px;
                }

                .fenleilist ul {
                    grid-template-columns: auto auto auto;
                }
            }

            .fenleilist ul li a:hover,
            .fenleilist ul li a.mok {
                background: #00aced;
                color: #fff
            }
        </style>
<!--         <div class="fenleilist">
            <ul style="padding:0;margin:0;" class="">
                <li class="mok"><a href="/"  rel="nofollow">网站首页</a></li>
                <li class=""><a href="/?mod=videos&cateid=762"  rel="nofollow">日本有码</a></li>
                <li class=""><a href="/?mod=videos&cateid=763"  rel="nofollow">日本无码</a></li>
            </ul>
        </div>
 -->

