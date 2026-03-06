<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="/template/{@var:cms_config_tpl_dir}/css/all-responsive-metal.css?6" rel="stylesheet" type="text/css" />
        <link href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-metal.css" rel="stylesheet" type="text/css" />
        <script src="/template/{@var:cms_config_tpl_dir}/js/common.js?5"></script>
{@common_head}
{@json_code}
    </head>
    
    <body>
        <div class="container">

            {@include file:header}

            <div class="content">
                <div class="main-content">
                    <div class="main-container">
                        <div class="headline">
                            <h1>{@name}</h1></div>
                        <div class="block-video">
                            <div class="video-holder">

                                <div style="line-height: 25px;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                                </div>

                                <div style="margin: 20px;">
                                    {@torrent_capture}
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
                                <div class="ylink">
                                    <span class="hide_mobile"><a onclick="open_t()"  class="down_btn">{base64}下载种子{/base64}</a></span>
                                    <a onclick="open_m()" href="javascript:;"  class="down_btn">{base64}打开磁力{/base64}</a>
                                    <a onclick="copy_m()" href="javascript:;" class="down_btn">{base64}复制磁力{/base64}</a>
                                </div>

                                    <div class="hide_mobile">
                                      <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{base64}{@var:api_config_bt_client_pc_download_text}{/base64}</a>
                                    </div>

                                    <div class="hide_pc ">
                                      <a href='{@var:api_config_bt_client_mobile_download_url}'>{base64}{@var:api_config_bt_client_mobile_download_text}{/base64}</a>
                                    </div>

                                
                            </div>

                        </div>
                        <div class="related-videos" id="list_videos_related_videos">
                            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                                <li>
                                    <span>{base64}推荐磁力{/base64}</span></li>
                            </ul>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_related_videos_items">
                                    {list type:bt mode:rand total:8 title_len:24}
                                        <div class="item">
                                            <a href="{_url}">
                                                <div class="img">
                                                    <img class="thumb lazy-load" referrerpolicy="no-referrer" src="{_pic}" /></div>
                                                <strong class="title">{_title}</strong>
                                            </a>
                                        </div>
                                    {/list}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
        </div>
    </body>
</html>