<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-1.12.4.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link href="/style/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/custom.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/index.css">
    <!-- <link href="/template/{@var:cms_config_tpl_dir}/css/937c13acd9434668bacefafcef080024.css" rel="stylesheet">-->
    <style>
        .mobile-preview {
            display: none !important;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body class="index-page">

{@include file:header}







        <div class="container"></br>
            <div align="center"></div>
            <div class="banner-top"></div>
            <div class="headline">
                <h2>{@name}</h2>
            </div>
            <div class="block-video" style="background-color: #eee;">
                <div class="video-holder">


<div style="text-align: left; color: #555; font-size: 18px; line-height: 24px;">
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
        <a style="font-size: 16px; color: #555;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color:#555 ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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
    padding: 10px 20px;
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
            </div>
            <div align="center" style="max-width:800px; margin:0 auto;">
                <!-- ads -->
            </div>
            <!-- model-comments.html -->
            <div class="related-videos" id="list_videos_related_videos">
                <ul class="list-sort" id="list_videos_related_videos_filter_list">
                    <li><span class="">{base64}相关视频{/base64}</span></li>
                </ul>
                <div class="box">
                    <div class="list-videos">
                        <script>

                        </script>
                        <div class="margin-fix" id="list_videos_related_videos_items">
{list type:bt mode:rand total:10 title_len:40}
                                <div class="item">
                                    <a class="popup-video-link" href="{_url}">
                                        <div class="img ithumb"><img class="thumb lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}" />
                                        </div><strong class="title">{_title}</strong>
                                    </a>
                                </div>
{/list}
                            
                        </div>
                    </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>