    <div class="container">
<div class="content">

{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}
</div>

        <div class="header">
            <div class="header-inner">
                <div class="logo"><a href="/"><img src="/template/{@var:cms_config_tpl_dir}/picture/logo.png"  style="width: 238px; height: 60px; display: block;"></a></div>
                <div class="search">
                    <form id="search_form" action='/search.php' method="get">
                        <div class="search-text"><input name="content" type="text" id="search_form_v" placeholder="Search" value="" /></div>
                        <button type="submit" class="search-button"></button>
                    </form>
                </div>
            </div>
        </div>
        <style>
            nav {
                background-color: #FFB800;
            }

            @media screen and (min-width: 1152px) {
                .navigation {
                    max-width: 1260px;
                }

                .navigation .primary {
                    display: block;
                    text-align: left;
                }

                nav ul li {
                    display: inline-block;
                }

                nav ul li a.navlia {
                    background: #221800;
                    padding: 8px 8px !important;
                    font-size: 22px;
                    font-weight: 500;
                    text-align: center;
                    margin: 2px;
                }

                nav ul li.selected a.navlia,
                nav ul li a.navlia:hover {
                    background: RED;
                }
            }
        </style>
        <nav>
            <div class="navigation">
                <button class="button">
                    <span class="icon">
                        <span class="ico-bar"></span>
                        <span class="ico-bar"></span>
                        <span class="ico-bar"></span>
                    </span>
                </button>
                <ul class="primary ">
                    <li class=""><a class="navlia" href="/">网站首页</a></li>
                    
{nav type:video no:v2 count:8} 
<li class=""><a class="navlia" href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<li class=""><a class="navlia" href="{_class_link}">{_class_name}</a></li>
{/nav}


                </ul>
                <ul class="secondary">
                </ul>
            </div>
        </nav>
        <div class="content">
            <style>
                .grid-container {
                    display: grid;
                    grid-template-columns: auto auto auto auto auto auto auto auto auto;
                    padding: 2px
                }

                .grid-item {
                    background: #43306e;
                    padding: 5px;
                    font-size: 16px;
                    font-weight: 500;
                    text-align: center;
                    margin: 2px;
                    border-radius: 10px
                }

                .grid-item a {
                    text-decoration: none;
                    color: #fff;
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
                        font-size: 12px;
                    }

                    .grid-container {
                        grid-template-columns: auto auto auto auto;
                    }
                }
            </style>
            <style>
                .grid-item {
                    background: #CF82B3;
                }
            </style>
            <div style="width: 100%;margin-left: auto; margin-right: auto">
                <h3 style="margin:0px auto 0px 0;color:#212121;font-size:2.4rem;font-weight:500;text-align:center;">友情链接</h3>
                <div class="grid-container">
{link area:link_yqlj}
                    <div class="grid-item d" style="background: #;">
                        <a target="_blank" href="{_url}"  style="color:;">{base64}{_text}{/base64}</a>
                    </div>
{/link}
                </div>
            </div>
            <style>
                .sotags {
                    margin: 10px 0px 10px 0px;
                    display: inline-block;
                }

                .sotags .tagtitle {
                    margin: 0px auto 0px 0;
                    color: #212121;
                    font-size: 2.4rem;
                    font-weight: 500;
                }

                .sotags span a {
                    display: inline-block;
                    color: #fff;
                    font-size: 12px;
                    font-weight: 500;
                    letter-spacing: 0.3px;
                    border-radius: 15px;
                    padding: 8px 10px;
                    background-color: #FFB800;
                    -webkit-transition: background-color 0.3s, color 0.3s;
                    transition: background-color 0.3s, color 0.3s;
                    margin: 2px 0 2px 3px;
                }
            </style>
            <div class="sotags">
                <span class="tagtitle">Tags:</span>
{splite var:search_tags_torrent}
                <span><a href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></span>
{/splite}
            </div>

