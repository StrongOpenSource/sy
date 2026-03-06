<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
            <div class="appel">
                <div class="breadcrumbs"><b><span>{@name}</span></b></div>
                <div class="detail clearfix">
                    <div class="banyundogcom">
                        <style>
                            .player_fd_box {
                                display: block;
                                position: absolute;
                                z-index: 99999999999;
                                width: 60%;
                                height: 60%;
                                background: transparent;
                                top: 50%;
                                left: 50%;
                                transform: translate(-50%, -50%);
                            }

                            .player_fd_box>div {
                                position: inherit;
                                padding: 5px;
                                z-index: 2;
                                background-color: #00000069;
                                width: 100%;
                                color: #fff;
                                display: flex;
                                justify-content: flex-end;
                                column-gap: 10px;
                                min-height: 30px;
                                box-sizing: border-box;
                            }

                            .player_fd_box img {
                                position: absolute;
                                top: 0;
                                z-index: 1;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }

                            .player_fd_box .close_tips {
                                line-height: unset;
                            }

                            .close_tips {
                                display: none;
                                color: white;
                            }
                        </style>
                        <style>
                            .MacPlayer{background: #000000;font-size:14px;color:#F6F6F6;margin:0px;padding:0px;position:relative;overflow:hidden;width:100%;height:100%;min-height:100px;}
                            .MacPlayer table{width:100%;height:100%;}
                            .MacPlayer #playleft{position:inherit;!important;width:100%;height:100%;}
                        </style>

                        <div class="">
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

<div class="detail-source">
    <div class="detail-content tab-content ff-playurl-tab" id="detail-content">
        <ul class="detail-play-list clearfix tab-pane ff-playurl ff-playurl-tab-1 episode  active fade in">
            <li class="hide_mobile"><a class="play-active" onclick="open_t()" >{base64}下载种子{/base64}</a></li>
            <li><a class="play-active" onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a></li>
            <li><a class="play-active"  onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a></li>
        </ul>
    </div>
</div>

<div style="float: left; clear: both;"></div>
<div style="text-align: left;">

    <div class="hide_mobile" style="padding: 10px;">
        <a style="font-size: 16px; color:#5c5c5c ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color:#5c5c5c ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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
    background: #FFB800;
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

                <div class="appel">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title">{base64}更多磁力{/base64}</h3>
                    </div>
                    <div class="appel-max detail-hot">
                        <ul class="thumbnail-group clearfix">
{list type:bt mode:rand total:12 title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                            <div class="video-info">
                                <h5><a href="{_url}" >{_title}</a></h5>
                            </div>
                        </li>
{/list}
                        </ul>
                    </div>
                </div>

            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>