<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>{@page_title}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/html.css?3" rel="stylesheet" type="text/css" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" type="text/css" />
    <script></script>
    <style>
        #dplayer button {
            border-color: #000 !important;
            background-color: #000 !important;
        }

        #dplayer .dplayer-menu,
        #dplayer .dplayer-menu-show {
            display: none !important;
        }

        .pages ul a.dqy,
        .pages ul a.syy,
        .pages ul a.xyy {
            border-color: #F3ACBD !important;
            background-color: #F3ACBD !important;
            color: #fff;
        }

        #site-navigation>ul>li>a {
            padding: 0 0.5em;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body class="home blog wp-embed-responsive hfeed">
    <div id="page">




        {@include file:header}

        <div id="content" class="site-content row">
            <div id="primary" class="content-area ">
                <main id="main" class="site-main " role="main">
                    <article id="post-151058" class="post-151058 post type-post status-publish format-standard has-post-thumbnail hentry category-amateur">
                        <div style="background: #000;position: relative;overflow: hidden;">
                            <div id="lmplay"></div>
                        </div>
                        <div class="title-block box-shadow">
                            <h1 class="entry-title" itemprop="name">{@class_name} - {@name}</h1>

                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                            <div class="clearfix" style="margin: 20px;">
                                {@torrent_capture}
                            </div>

<style type="text/css">
.download {
    display: flex;
    justify-content: center;

    margin-top: 16px;
    text-align: center;
    font-size: 20px;
}

.downbtn a a:link a:active a:hover a:visted {
    color: hsla(0, 0%, 0%, .8);
    background: black;
    color: #f78da7;
}



.downbtn {
    display: inline-block;
    background: black;
    color: #f78da7;
    border-radius: 5px;
    border: 1px solid #c48822;
    margin: 0px 6px 4px 0px;
    padding: 0px 5px;
    font-weight: bold;
}


</style>

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

    
                    <div class="hide_mobile" style="padding-top: 40px;">
                      <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc" style="padding-top: 40px;">
                      <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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


                        <div class="under-video-block">
                            <h2 class="widget-title">{base64}同类视频{/base64}</h2>
                            <div>


                            {list type:bt mode:rand total:8 title_len:24}
                        <article class="loop-video thumb-block full-width post-151135 post type-post status-publish format-standard has-post-thumbnail hentry category-amateur ">
                            <a href="{_url}">
                                <div class="post-thumbnail">
                                    <div class="post-thumbnail-container">
                                        <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" data-original="{_pic}">
                                    </div>
                                </div>
                                <header class="entry-header"><span>{_title}</span></header>
                            </a>
                        </article>
                            {/list}



                            </div>
                        </div>
                        <div class="clear"></div>
                    </article>
                </main>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>