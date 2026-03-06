<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>{@page_title}</title>
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    </script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/normalize.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/styles.css">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

                <article class="movie">
                    <div class="movie-column">
                        <h1>{@name}</h1>
                        <div class="movie-player">
                            <div id="videoFrame">



                            <div style="color: white;">
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
                              <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                            </div>

                            <div class="hide_pc" style="padding: 20px;">
                              <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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

                </article>
                <h2 class="d">推荐磁力</h2>
                <div class="thumbs">
{list type:bt mode:rand total:10 title_len:24}
                    <div class="thumb">
                        <a href="{_url}" >
                            <div class="thumb-img">
                                <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.gif" original="{_pic}" >
                                                            </div>
                            <div class="thumb-title">{_title}</div>
                        </a>
                    </div>
{/list}
                </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>