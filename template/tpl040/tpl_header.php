





    <div class="container">

{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}
        
        <div class="row">
            <div class="col-md-3 navbar-header">
                <div class="logo" height="90">
                    <a href="/"><img src="/template/{@var:cms_config_tpl_dir}/picture/logo.png" width="240" /></a>
                </div>
            </div>
            <div class="col-md-9 top-nav" style="margin-top: 10px;">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="msg">
                            <span class="ico-msg"><img src="/template/{@var:cms_config_tpl_dir}/picture/ico-msg.png" ></span>
                            <div class="marquee ">
                                <p>如果图片无法显示，请刷新页面即可!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-lg-12">
                <form action="/vodsearch/-------------.html" method="get" autocomplete="off">
                    <div class="input-group">
                        <input type="text" class="form-control" id="wd" name="wd" placeholder="万部影片任你搜索" value="">
                        <span class="input-group-btn"><button class="btn btn-default" type="submit">搜索</button></span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 class-feed-btn2">
                <ul>
                    <a href="javascript:;" class="btn btn-danger active">在线4区</a>
{nav type:video no:4 count:8} 
                    <a class="btn btn-danger btn-lg " href="{_class_link}">{_class_name}</a>
{/nav}
                </ul>
                    <a href="javascript:;" class="btn btn-danger active">在线3区</a>
{nav type:video no:3 count:8} 
                    <a class="btn btn-danger btn-lg " href="{_class_link}">{_class_name}</a>
{/nav}
                </ul>
                    <a href="javascript:;" class="btn btn-danger active">在线2区</a>
{nav type:video no:2 count:8} 
                    <a class="btn btn-danger btn-lg " href="{_class_link}">{_class_name}</a>
{/nav}
                </ul>
                    <a href="javascript:;" class="btn btn-danger active">在线1区</a>
{nav type:video no:1 count:8} 
                    <a class="btn btn-danger btn-lg " href="{_class_link}">{_class_name}</a>
{/nav}
                </ul>
                    <a href="javascript:;" class="btn btn-danger active">磁力1区</a>
{nav type:bt no:1 count:8} 
                    <a class="btn btn-danger btn-lg " href="{_class_link}">{_class_name}</a>
{/nav}
                </ul>
            </div>
        </div>

        <style>
            .toplinks {
                width: 100%;
                overflow: hidden;
                display: block;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .05);
                margin: 10px 0;
            }

            .toplinks a {
                width: 9.8%;
                float: left;
                border-radius: 3px;
                line-height: 30px;
                height: 30px;
                text-align: center;
                font-size: 14px;
                color: #fff;
                display: inline-block;
                background-color: #c12e2a;
                margin: 1px;
                transition-duration: .3s;
            }

            .toplinks a:hover {
                background: #DC3545;
                color: #FFF
            }

            @media screen and (max-width: 960px) {
                .toplinks a {
                    width: 24.4%;
                    float: left;
                    border-radius: 3px;
                    line-height: 30px;
                    height: 30px;
                    text-align: center;
                    font-size: 13px;
                    color: #fff;
                    display: inline-block;
                    background-color: #c12e2a;
                    margin: 1px;
                    transition-duration: .3s;
                }
            }
        </style>
        <div class="row" style="padding-top:10px;">
            <div class="col-lg-12">
                <div class="toplinks">
{link area:link1}
                    <a href="{_url}" target="_blank">{base64}{_text}{/base64}</a>
{/link}
                </div>
            </div>
        </div>
        <style>
            .app {
                margin: 10px 0;
            }

            .app_title {
                text-align: center;
                line-height: 35px;
                font-size: 15px;
                color: #fff000;
                font-weight: bolder;
            }

            .app ul li {
                margin: 10px 0;
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
                border-radius: 8px
            }

            .app ul li a {
                font: 12px/28px Tahoma, 'Microsoft Yahei', Simsun;
                color: #fff000;
                overflow: hidden;
                white-space: nowrap;
            }

            .app ul li a:hover {
                color: #FD4C5D;
                font-weight: bolder;
            }

            @media screen and (max-width:640px) {
                .app ul li {
                    width: 25%
                }
            }

            @media screen and (min-width:768px) {
                .app {
                    display: none
                }
            }
        </style>
<!--         <div class="app">
            <ul>
                <li><a  href="htop"><img class="lazy" data-original="/template/{@var:cms_config_tpl_dir}/picture/绿茶直播.jpg" src="httpsjpg"></a></li>
                <li><a  href="htp"><img class="lazy" data-original="/template/{@var:cms_config_tpl_dir}/picture/春梦直播.gif" src="httif"></a></li>
            </ul>
            <div style="clear:both"></div>
        </div> -->
        <div style="margin:10px 0">

            <style>
                #hengfu {
                    animation: hengfu 2.5s 3.15s infinite;
                }

                @keyframes hengfu {
                    10% {
                        transform: rotate(1deg);
                    }

                    20% {
                        transform: rotate(-1deg);
                    }

                    30% {
                        transform: rotate(1deg);
                    }

                    40% {
                        transform: rotate(-1deg);
                    }

                    50%,
                    100% {
                        transform: rotate(0deg);
                    }
                }
            </style>
        </div>
        <style>
            .tags-box .tags .tag {
                margin-bottom: 4px;
                margin-right: 2px;
            }

            .tags {
                width: 100%;
                align-items: center;
                display: flex;
                flex-wrap: wrap;
                /*justify-content: flex-start;*/
                justify-content: space-evenly;
            }

            .has-text-centered {
                text-align: center !important;
            }

            .tag:not(body).is-danger {
                background-color: #c9302c;
                color: #fff;
            }

            .tag:not(body) {
                align-items: center;
                background-color: #f5f5f5;
                border-radius: 4px;
                color: #4a4a4a;
                display: inline-flex;
                /*   font-size: .75rem;
      height: 2em; */
                justify-content: center;
                line-height: 1.5;
                padding-left: .75em;
                padding-right: .75em;
                white-space: nowrap;
            }
        </style>

        <div class="row">
            <div class="tags-box container">
                <div class="tags">
{splite var:search_tags_torrent}
                    <div><a class="tag is-danger" href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></div>
{/splite}
                </div>
            </div>
        </div>