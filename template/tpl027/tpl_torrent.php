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
    <script src="/template/{@var:cms_config_tpl_dir}/js/rocket-loader.min.js"></script>
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
<div style="text-align: left;color: #aaa;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix" style="margin: 0px;">
    {@torrent_capture}
</div>

<div style="clear: both;"></div>

<div class="download">
    <div class="hide_mobile">
        <div class="downbtn">
<a onclick="open_t()" >{base64}下载种子{/base64}</a>
        </div>
    </div>
    <div class="downbtn">
<a onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>
    </div>
    <div class="downbtn">
<a onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
    </div>
</div>

<div style="float: left; clear: both;"></div>
<div style="text-align: left;">

    <div class="hide_mobile" style="padding: 10px;">
        <a style="font-size: 16px; color:#dbdbdb ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color:#dbdbdb ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
    </div>
</div>


<style type="text/css">
.download {
    display: flex;
    justify-content: center;
    color: white;

    margin-top: 20px;
    text-align: center;
    font-size: 20px;
}

.downbtn a  {
    background: ;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: #bf481d;
    color: white;
    margin: 0px 10px;
    padding: 5px 10px;
    font-weight: bold;
    border:0px solid;
    border-radius:5px;
}


</style>
<script type="text/javascript">
    function copy_m() {
        navigator.clipboard.writeText(j.tm)
            .then(() => {
                alert('复制成功: ' + j.tm);
            })
            .catch(err => {
                alert('复制失败。');
            });
    }
    function open_t() {
        window.open(j.tt);
    }
    function open_m() {
        window.open(j.tm);
    }
</script>
                        </div>

        <div class="related-videos" id="list_videos_related_videos">
            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                <li><span>{base64}相关视频{/base64}</span></li>
            </ul>
            <div class="box">
                <div class="list-videos">
                    <div class="margin-fix" id="list_videos_related_videos_items">
{list type:bt mode:rand total:8 title_len:40}
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