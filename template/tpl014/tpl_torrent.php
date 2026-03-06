<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow" />
    <title>{@page_title}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="referrer" content="always" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/normalize.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/styles.css">
    <style>
        body {
            background-color: rgb(255, 227, 255);
            color: #6600CC
        }

        a:hover {
            color: #6600CC
        }

        h1,
        h2,
        h3 {
            color: #6600CC;
            margin: 5px auto 5px 0;
        }

        .logo {
            background-color: #FF6699;
            color: #ffffff;
            border: 1px solid #FF6699
        }

        .navigation-menu>li>.btn {
            border: 1px solid #FF6699
        }

        .related-queries li .la {
            color: #ffffff
        }

        .gal {
            background-color: rgb(255, 227, 255);
            border: 1px solid #f90
        }

        .gal-description {
            text-align: center
        }

        .gal a {
            color: #6600CC
        }

        .gal:hover .gal-amount,
        .gal:hover .gal-duration {
            background-color: #FF6699;
            color: #ffffff
        }

        .btn,
        .pages li a {
            background-color: #FF6699;
            color: #ffffff
        }

        a.dibusoci,
        .dibusoci .la,
        a.dibulj,
        .dibulj .la {
            color: #6600CC !important
        }

        .video-info>div .la {
            color: #6600CC
        }

        .video-links a {
            background-color: #FF6699
        }

        .footer {
            background-color: #FF6699;
            color: #ffffff;
            border-top: 1px solid #FF0000
        }

        .btn-up {
            background-color: #FF6699;
            border: 1px solid #FF0000;
            color: #fff !important
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
    {@include file:header}


                <div class="video">

                    <h2 class="">{@name}</h2>


                    <div class="fluid-wrapper">
                        <div id="videoxgbfq">
                            


                            <div style="color: #6600CC;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                            </div>
                            <div class="clearfix" style="margin: 20px;">
                                {@torrent_capture}
                            </div>

                            <div style="clear: both;"></div>
                            <div class="download">
                                <div class="hide_mobile">
                                    <div class="downbtn">
                                        <a style="width: 100%;" onclick="open_t()" >{base64}下载种子{/base64}</a>
                                    </div>
                                </div>
                                <div class="downbtn">
                                    <a style="width: 100%;" onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>
                                </div>
                                <div class="downbtn">
                                    <a style="width: 100%;" onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
                                </div>
                            </div>
                            <div style="float: left; clear: both;"></div>

                            <div class="hide_mobile" style="padding: 20px;">
                              <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                            </div>

                            <div class="hide_pc" style="padding: 20px;">
                              <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                            </div>

<style type="text/css">
.download {
    display: flex;
    justify-content: center;
    color: white;

    margin: 0;
    text-align: center;
    font-size: 20px;
}

.downbtn a a:link a:active a:hover a:visted {
    color: hsla(0, 0%, 0%, .8);
    background: black;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: black;
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
                    </div>
                </div>

                <div class="grid">
{list type:bt mode:rand total:14 title_len:40}
                    <div class="gal">
                        <a href="{_url}" title="">
                            <div class="gal-img-2">
                                <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}" >
                            </div>
                            <div class="gal-description">{_title}</div>
                        </a>
                    </div>
{/list}

                </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>