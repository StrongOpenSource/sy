<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width">
        <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?3">
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/search.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/base.js"></script>
    {@common_head}
    {@json_code}
    </head>
    
    <body ontouchstart="" style="">
        {@include file:header}

        <div class="wrap">
            <div class="main">
                <h1 id="titleH">{@name}</h1>

                <div class="torrent_content clearfix">
                    <div  class="clearfix" style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;font-size: 16px;line-height: 1.5;color: #a3abc7;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                    </div>

                    <div class="clearfix" style="margin: 20px;">
                        {@torrent_capture}
                    </div>

                    <div style="clear: both;"></div>



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

                    <div class="download clearfix" style="margin:20px 0; text-align: center;">
                        <span class="hide_mobile">
                            <a onclick="open_t()"  class="down_btn">{base64}下载种子{/base64}</a>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                        </span>
                        <a onclick="open_m()" href="javascript:;"  class="down_btn">{base64}打开磁力{/base64}</a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a onclick="copy_m()" href="javascript:;" class="down_btn">{base64}复制磁力{/base64}</a>
                    </div>



                    <div class="hide_mobile">
                      <a href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc">
                      <a href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                    </div>
                </div>
            </div>
        </div>
        <dir style="clear: both;"></dir>
        <div class="wrap">
            <div class="mod play-list">
                <div class="title">
                    <h3>猜你喜欢视频</h3></div>
                <div class="row col5 clearfix" id="cnxh">
                    {list type:bt mode:rand total:10 title_len:24}
                    <dl>
                        <dt>
                            <a href="{_url}" title="">
                                <img class="nature" src="{_pic}" data-original="{_pic}" alt="" style="transition: all 1s ease 0s; opacity: 1;">
                                <i>
                                </i>
                            </a>
                        </dt>
                        <dd>
                            <a href="{_url}" title="">
                                <h3>{_title}</h3></a>
                        </dd>
                    </dl>

                    {/list}


                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
    </body>
</html>