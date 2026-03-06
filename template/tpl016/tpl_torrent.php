<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/template/{@var:cms_config_tpl_dir}/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

            <div class="headline">
                <h1>{@name}</h1>
            </div>
            <div class="video-holder">
                <div class="player">
                    <div class="player-holder">
                        <div class="player-wrap" style="width: 100%; ">
                    {base64}【影片格式】：{/base64}mp4<br>
                    {base64}【影片大小】：{/base64}{@torrent_size}<br>
                    {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                    {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                    {base64}【影片预览】：{/base64}<br>
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

                        <div class="hide_mobile" style="padding: 20px;">
                          <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                        </div>

                        <div class="hide_pc" style="padding: 20px;">
                          <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                        </div>

                        <div style="float: left; clear: both;"></div>


                            </div>
                        </div>
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

.downbtn a a:link a:active a:hover a:visted {
    color: hsla(0, 0%, 0%, .8);
    background: #FFB800;
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

                <div class="related-videos" id="list_videos_related_videos">
                    <ul class="list-sort" id="list_videos_related_videos_filter_list">
                        <li><span>相关磁力</span></li>
                    </ul>
                    <div class="box">
                        <div class="list-videos">
                            <div class="margin-fix" id="list_videos_related_videos_items">
    {list type:bt mode:rand total:12 title_len:40}
                                    <div class="item ">
                                        <a href="{_url}" >
                                            <div class="img">
                                                <img class="thumb lazy-load" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-original="{_pic}" width="320" height="180" />
                                            </div>
                                            <strong class="title">{_title}</strong>
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