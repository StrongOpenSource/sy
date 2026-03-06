<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="referrer" content="always">
    <meta name="referer" content="always">
    <meta name="viewport" content="maximum-scale=1.0,minimum-scale=1.0,user-scalable=0,width=device-width,initial-scale=1.0,user-scalable=no" />
    <meta name="renderer" content="webkit" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/djyz/favicon.ico">
    <link href="/template/{@var:cms_config_tpl_dir}/css/bootstrap.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/nky.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/simple-line-icons.min.css" rel="stylesheet" type="text/css">
    <link href="/template/{@var:cms_config_tpl_dir}/css/default.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/layout.css" rel="stylesheet" type="text/css">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <style>
        @media (min-width: 768px) {
            .img-responsive {
                width: 100%;
                height: 160px;
            }
        }

        @media (max-width: 768px) {
            .img-responsive {
                width: 100%;
                height: 100px;
            }
        }
    </style>

    <script>
        function fetchClickToCount(id, eventId) {
            $.ajax({
                type: "POST",
                async: true,
                url: '/fetchClick' + eventId + '/' + id,
                success: function(returnData) {}
            });
        }
    </script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}





        <div class="row">
            <!-- begin col-lg-8-->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Page Content UP AD-->
                    <div class="col-lg-12">
                        <h1 class="page-header">{@name}</h1>
                    </div>
                    <div class="col-md-12 center" id="cms_player">


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
        <a style="font-size: 16px; color:#dbdbdb ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color:#dbdbdb ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
    </div>
</div>
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
<div class="wrapper2">
   <p id="m_text" style="display: none;">{@torrent_magnet}</p>
   <textarea id="m_input"></textarea>
</div>
                    </div>
                    <style>
                        .next-page em {
                            font-style: normal;
                        }

                        .text-ellipsis {
                            text-overflow: ellipsis;
                            overflow: hidden;
                            white-space: nowrap;
                            display: block;
                            max-width: 350px;
                        }

                        @media screen and (min-width:769px) {
                            .next-page {
                                width: 100%;
                                height: 35px;
                                line-height: 35px;
                                font-size: 18px;
                                padding: 0 15px;
                                margin: 0 auto;
                                text-align: right;
                            }

                            .content-next1 {
                                width: 50%;
                                float: left;
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                            }

                            .content-next2 {
                                width: 50%;
                                float: right;
                                height: 35px;
                                line-height: 35px;
                                text-align: right;
                            }
                        }

                        @media screen and (max-width:769px) {
                            .next-page {
                                width: 100%;
                                min-height: 35px;
                                line-height: 35px;
                                font-size: 14px;
                                margin: 0 auto;
                                text-align: right;
                            }

                            .content-next1 {
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                                padding-left: 10px;
                            }

                            .content-next2 {
                                height: 35px;
                                line-height: 35px;
                                text-align: left;
                                padding-left: 10px;
                            }
                        }
                    </style>

                </div>
            </div>
        </div>
        <div class="row" style="margin:10px 0;">
            <div class="tags-box">
                <div class="tags" id="biaoqian3">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">推荐内容<small></small></h1>
            </div>
        </div>
        <hr>
        <div class="row" id="block-post">
{list type:bt mode:rand total:8 title_len:40}
            <div class="col-md-3 col-xs-6 portfolio-item new-video">
                <div class="new-video-icon">
                </div>
                <a href="{_url}" name='rdmonclick' ><img class="img-responsive lazy" src="/template/{@var:cms_config_tpl_dir}/picture/load.png" data-original="{_pic}"></a>
                <div class="v-title">
                    <div class="uptime">
                        {_title}</div>
                    <a href="{_url}" name='rdmonclick' >{_title}</a>
                </div>
            </div>
{/list}
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>