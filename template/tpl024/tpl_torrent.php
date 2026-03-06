<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="renderer" content="webkit" />
    <meta name="force-rendering" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="referrer" content="always">
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="author" content="XIAOSISI">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/avv-share.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/av-103.css" media="print" onload="this.media='all'">
    <link rel="icon" type="image/x-icon" href="/103.svg" />

<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style="background:#10241a">




{@include file:header}
        <div class="body">
            <div class="content bottom right">
                <div class="video_list">
                    <div class=" wangfeill">
                        <!-- siwa -->
                        <h2>
                            {@name}
                        </h2>

                        <div class="player">
                            <div class="video" id="playvideos" style="padding:0;">



<div style="text-align: left; color: #ddd;">
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
    background: #6e6a69;
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

                            <style>
                                .hhh,
                                .kkk {
                                    width: 100%;
                                    text-align: center;
                                    display: inline-block;
                                }

                                .hhh a {
                                    padding: 10px 20px;
                                    background: yellow;
                                    color: red;
                                    font-weight: bold;
                                    border-radius: 1px;
                                }

                                .hhh a:hover {
                                    background: red;
                                    color: white;
                                }

                                .kkk a img {
                                    max-width: 100%;
                                }
                            </style>

                        </div>

                        <div class="player-list" style="margin-bottom:30px;">
                            <h2>相关磁力</h1>
                                <div class="colliu">

{list type:bt mode:rand total:12 title_len:40}
                            <div class="data" style="">
                                <a href="{_url}" class="" >
                                    <div class="img">
                                        <img src="{_pic}" loading="lazy" style="">
                                        
                                    </div>
                                    <p class="title" style="">{_title}</p>
                                </a>
                            </div>
{/list}

                                </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.4.min.js"></script>
{@js_tpl_code}
{@include file:footer}
</body>

</html>