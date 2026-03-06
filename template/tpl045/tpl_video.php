<html>
<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/2818c02a2e1f43409de7a30d3277d3bf.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.superslide.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.base.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/video5-lan/favicon.ico" rel="SHORTCUT ICON">
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" media="all">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.1.min.js" charset="utf-8"></script>
    <!-- <script src="/template/{@var:cms_config_tpl_dir}/js/ping-3.1.8.min.js"></script> -->
    <style>
        #bottone5 {
            align-items: center;
            background-color: #FFFFFF;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: .25rem;
            box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
            box-sizing: border-box;
            cursor: pointer;
            display: inline-flex;
            font-family: system-ui, -apple-system, system-ui, "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 600;
            justify-content: center;
            line-height: 1.25;
            min-height: 3rem;
            padding: 10px 13px;
            text-decoration: none;
            transition: all 250ms;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
            vertical-align: baseline;
            width: auto;
        }
        #bottone5:hover,
        #bottone5:focus {
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
            color: rgba(0, 0, 0, 0.65);
        }
        #bottone5:hover {
            transform: translateY(-1px);
        }
        #bottone5:active {
            background-color: #F0F0F1;
            border-color: rgba(0, 0, 0, 0.15);
            box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
            color: rgba(0, 0, 0, 0.65);
            transform: translateY(0);
        }
        .nav1 {
            width: 62.5%;
            margin-bottom: .75rem;
        }
        @media (max-width:479px) {
            .nav1 {
                width: 100%;
            }
        }
        @media (min-width:1080px) {
            .nav1,
            .nav {
                width: 1080px;
            }
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>

{@include file:header}



        <div class="box">

            <div class="title">
                <h3>{@name}</h3>
            </div>
            {@palyer_js}


        </div>


        <div class="box">
            <div class="title">
                <h3>相关推荐</h3>
            </div>
            <div class="vods">

{list type:video mode:rand total:8 title_len:40}
                <div class="vod">
                    <div class="vod-img">
                        <a href="{_url}" >
                            <img class="lazy" src="{_pic}">
                        </a>
                    </div>
                    <div class="vod-txt">
                        <a href="{_url}" >{_title}</a>
                    </div>
                </div>
{/list}



            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>