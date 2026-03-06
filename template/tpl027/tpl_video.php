<!doctype html>
<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/video/favicon.ico">
    <link href="/template/{@var:cms_config_tpl_dir}/css/all-responsive-white4.css" rel="stylesheet" type="text/css">
    <link href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-white3.css" rel="stylesheet" type="text/css">
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/masonry.pkgd.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/assets.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/custom.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/d1f39bbda81e4b8aad518cd238bcc6be.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/c1eb83f25c7e4df7b4ae18d308a22a59.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/layer.js"></script>
    <style>
        .linkfont {
            cursor: pointer;
            color: inherit;
            display: inline-block;
            border: 2px solid #352c18;
            font-size: 18px;
            padding: 2px 5px;
            margin: 5px;
            width: 11%;
        }


        @media screen and (max-width: 430px) {
            .logo a img {
                max-width: 180px;
                width: 100%;
            }
        }

        @media screen and (max-width: 390px) {
            .logo a img {
                max-width: 180px;
                width: 100%;
            }
        }

        @media screen and (max-width:750px) {
            .linkfont {
                font-size: 12px;
                width: 28%;
            }

            .container22 {
                position: unset;
            }


            .headline h1,
            h2 {
                direction: unset;
            }

            .list-playlists .item,
            .list-models .item,
            .list-sponsors .item,
            .list-channels .item,
            .list-categories .item,
            .list-albums .item,
            .list-albums-images .item,
            .list-videos .item,
            .list-videos-screenshots .item {
                width: 25%;
            }

            .sidebar+.main-container .list-videos .item,
            .sidebar+.main-container .place~.item:nth-of-type(-n+7),
            .place~.item:nth-of-type(-n+7),
            .member-menu+.main-container-user .list-videos .item,
            .member-menu+.main-container-user .list-playlists .item,
            .list-playlists .item,
            .list-videos .item {
                width: 48%;
            }

        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body class="black">

{@include file:header}



    <div class="content">
        <div class="headline">
            <h1>{@name}</h1>
        </div>

                        <div class="player-wrap" style="width: 100%; ">
{@palyer_js}
                        </div>

        <div class="related-videos" id="list_videos_related_videos">
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li><span>相关视频</span></li>
            </ul>
            <div class="box">
                <div class="list-videos">
                    <div class="margin-fix" id="list_videos_related_videos_items">
{list type:video mode:rand total:8 title_len:40}
                                <div class="item">
                                    <a href="{_url}" >
                                        <div class="img">
                                            <img class="thumb lazy-load" src="{_pic}" onerror="this.onerror=null;this.src='/template/{@var:cms_config_tpl_dir}/video/loading.gif';" >
                                        </div>
                                        <strong class="title">{_title}</strong>
                                    </a>
                                </div>
{/list}

                    </div>
                </div>
            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>