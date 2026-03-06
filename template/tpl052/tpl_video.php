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
                <div class="breadcrumbs"><b>在线播放：<span>{@name}</span></b></div>
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

                        <div class="MacPlayer">
{@palyer_js}
                        </div>


                    </div>
                </div>
<!--                 <div class="detail-source">
                    <ul class="detail-tab ff-playurl-tab detail-tab-zt clearfix slider-list" id="detail-tab">
                        <li class="active"><a>黄瓜播放器</a></li>
                    </ul>
                    <div class="detail-content tab-content ff-playurl-tab" id="detail-content">
                        <ul class="detail-play-list clearfix tab-pane ff-playurl ff-playurl-tab-1 episode  active fade in">
                            <li><a class="play-active" href="/vod/play/id/79885/sid/1/nid/1.html" >高清</a></li>
                        </ul>
                    </div>
                </div> -->
                <div class="appel">
                    <div class="appel-heading clearfix">
                        <h3 class="appel-title">猜你喜欢</h3>
                    </div>
                    <div class="appel-max detail-hot">
                        <ul class="thumbnail-group clearfix">

{list type:video mode:rand total:12 title_len:40}
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