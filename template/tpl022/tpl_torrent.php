<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta content="telephone=no" name="format-detection">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta content="{cms_title}" name="apple-mobile-web-app-title">
    <meta name="referrer" content="always">
    <link type="text/css" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/index.css?4">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/a_wap.css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery-lazyload.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.base.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}

    <div class="list_nav" style="border:none">
        <div class="list_nav" style="border:none;margin: 5px;">
            <div class="main fn-left"><span>{@name}</span>
                
            </div>
        </div>
        <div class="video-player-dom clearfix">
            <div class="col-md-12">
                <div style="height:;width:100%;padding-bottom:;position:;background:">
                    <div style="position:;top:0;bottom:0;left:0;right:0">


<div style="text-align: left;font-size: 16px;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix" style="margin: 0px; width: 98%;" >
    {@torrent_capture}
</div>

<div style="clear: both;"></div>

<div class="download">
        <div class="downbtn hide_mobile">
            <a onclick="open_t()" >{base64}下载种子{/base64}</a>
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

    <div class="hide_mobile" style="padding: 5px;">
        <a style="font-size: 16px; color:#111 ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 5px;">
        <a style="font-size: 12px; color:#111 ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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
    background: red;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: red;
    color: white;
    margin: 0px 5px;
    padding: 0 5px;
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
        </div>

        <div style="clear: both;"></div>

        <div class="main vod-botx-title">
            <ul>
                <li id="latest1" onclick="setTab('latest',1,3);" class="current">{base64}猜你喜欢{/base64}</li>
            </ul>
        </div>
        <div class="main" id="resize_list">
            <div class="all_tab" style="border-bottom:none" id="con_latest_1" style="display:block">
                <ul class="list_tab_img">
{list type:bt mode:rand total:12 title_len:22}
                    <li><a href="{_url}">
                            <div class="picsize">
                                <img style="height: ;" class="loading" src="{_pic}">
                            </div>
                        </a>
                        <h6 style="height: 40px; line-height: 20px; max-height: 40px; overflow: hidden;"><a href="{_url}" target="_self">{_title}</a></h6>
                    </li>
{/list}
                </ul>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>