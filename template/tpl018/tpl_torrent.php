<!DOCTYPE html>
<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/video/favicon.ico" rel="SHORTCUT ICON">
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/main.css" rel="stylesheet" type="text/css">
    <link href="/template/{@var:cms_config_tpl_dir}/css/fonts.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/main2.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.easy-autocomplete3.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.star-rating-svg.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main5.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/layer.js"></script>

    <script async src="/template/{@var:cms_config_tpl_dir}/js/8825e170e1a44ba9a51e1f666bb26f4d.js"></script>

    <style>
        .nav .menu li a {
            padding: 15px 8px;
        }

        @media screen and (max-width:750px) {
            .block-post .item {
                width: calc(50% - 20px);
            }

            .block-post .item .img .type {
                display: none;
            }

            .block-post .item .img .heart {
                display: none;
            }
        }
    </style>
    <style>
        .MacPlayer {
            position: unset !important;
            height: 560px !important;
        }

        @media screen and (max-width:750px) {
            .MacPlayer {
                height: 250px !important;
            }
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>


{@include file:header}



            <div class="content">
                <section class="section">
                    <div class="wrap">
                        <div class="heading">
                            <div class="title">
                                <h1>{@name}</h1>
                            </div>
                        </div>
                        <div class="player-trailer flex">
                            <div class="l-block">
                                <div class="main-img" style="text-align:center;">
                                    <div class="player">




                            <div style="text-align: left;">
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
                              <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                            </div>

                            <div class="hide_pc" style="padding: 10px;">
                              <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                            </div>
                            </div>

<style type="text/css">
.download {
    display: flex;
    justify-content: center;
    color: white;

    margin: 10px 0px;
    text-align: center;
    font-size: 20px;
}

.downbtn a  {
    background: #6e6a69;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: #6e6a69;
    color: white;
    margin: 0px 10px;
    padding: 0 10px;
    font-weight: bold;
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
                                    <div style="clear: both;"></div>
                                </div>


                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="wrap">
                        <div class="heading">
                            <div class="title">
                                <h2>相关视频</h2>
                            </div>
                        </div>
                        <div class="block-post">
{list type:bt mode:rand total:8 title_len:40}
                            <div class="item"><a href="{_url}" >
                                    <div class="img">
                                        <img class="thumb_img lazyload" data-src="{_pic}">
                                    </div>
                                    <div class="info-post">
                                        <h4 class="title-post">{_title}</h4>
                                    </div>
                                </a>
                            </div>
{/list}

                        </div>
                    </div>
                </section>
            </div>
        </main>
{@js_tpl_code}
{@include file:footer}
</body>

</html>