<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>人人撸</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min3.2.1.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/crypto.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/openssl.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/css/styles.css" as="style">
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/js/functions.js" as="script">
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/js/common.js" as="script">
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js" as="script">
    <link rel="icon" href="/template/{@var:cms_config_tpl_dir}/icon.png">
    <link href="/template/{@var:cms_config_tpl_dir}/css/styles.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes" />
    <meta name="apple-touch-fullscreen" content="YES" />

    <style>
        body {
            background-color: darkgray;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body>


{@include file:header}


        <div class="cont-wrapper">
            <h1 class="">{@name}</h1>
            <div class="wrapper-video">
                <div class="video-ins">
                    <div class="video-cl">
                        <div id="videoplayer">


                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                                            <div class="clearfix" style="margin: 20px;">
                                                {@torrent_capture}
                                            </div>
            <div class="linklist" style="">
                <ul style="padding:0;margin: 0 0 10px;justify-content: center;">
                    <div class="hide_mobile">
                    <li>
                       <a class="bai" style="width: 100px; margin: 0px 10px;" onclick="open_t()" >{base64}下载种子{/base64}</a>
                   </li>                        
                    </div>


                    <li class="">
                       <a class="bai" style="width: 100px; margin: 0px 10px;"  onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>
                   </li>
                    <li class="">
                       <a class="bai" style="width: 100px; margin: 0px 10px;"  onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
                   </li>
                </ul>
            </div>



                    <div class="hide_mobile" style="padding: 10px;">
                      <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc" style="padding: 10px;">
                      <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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

                        </div>

                    </div>
                </div>
            </div>
            <h2 class="">你可能喜欢的内容</h2>
            <div class="smalls">



                            {list type:bt mode:rand total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>




                            {/list}



            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>