<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{@page_title}</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet">
{@common_head}
{@json_code}
    <script type="text/javascript">

var $menuSwitcher;

$(document).ready(function() {
    $menuSwitcher = $("#menu_switcher");

    $menuSwitcher.on("click", function() {
        $("body").toggleClass("menu-opened");
    })
});
    </script>
</head>
<style>
    /*header {padding: 150px 0 0;}*/
    .bisex {
        top: auto;
    }

    body {
        background: #F8E6E6;
        color: #ff2668;
    }

    header {
        background: #F8E6E6;
    }

    .bisex {
        background: #df8888;
        box-shadow: 0px 2px 11px 0px rgba(163, 163, 163, 0.3);
    }

    @media (min-width: 960px) {
        header .iterate {
            float: right;
        }
    }

    header .iterate .through .begins {
        background: #ffffff;
    }

    header .iterate .through .bondman {
        color: #df8888;
    }

    header .breasts {
        background: #ff2668;
        color: #ffffff;
    }

    .expect h1,
    .expect h2,
    .expect h3 {
        color: #E33A65;
    }

    @media (min-width: 960px) {
        .fs18 {
            font-size: 18px;
            line-height: 30px;
        }
    }

    @media (max-width: 960px) {
        .bisex {
            background: #ff2668;
        }

        .ploughs ul li.thigh a,
        .ploughs ul li a:hover {
            color: #000000;
        }
    }

    .ftitle {
        font-size: 20px;
        font-weight: normal;
        margin: 3px auto 3px 0;
        color: #E33A65;
    }

    .enslave .small .depraved .shoving {
        background: #df8888;
    }

    .enslave .small .depraved .seem .chicks {
        background: #df8888;
    }

    .chode a,
    .chode span {
        background-color: #df8888;
    }
</style>

<body>


    {@include file:header}

    <section class="torture">
        <div class="exclusive">
            <div class="expect">
                <h1>{@name}</h1>
            </div>
            <article class="muscular" style="font-size: 20px;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                                            <div class="clearfix" style="margin: 20px;">
                                                {@torrent_capture}
                                            </div>


        <div class="waibuurl" style="margin-top: 20px;">
            <span class="hide_mobile"><a class="play-url active" onclick="open_t()" >{base64}下载种子{/base64}</a></span>
            <span class=""><a class="play-url active" onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a></span>
            <span class=""><a class="play-url active" onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a></span>
        </div>
        <div style="clear: both;"></div>


                    <div class="hide_mobile" style="margin: 10px;">
                      <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc" style="margin: 10px;">
                      <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                    </div>

            </article>

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
    </section>
    <section class="throughout">
        <div class="exclusive">
            <div class="expect">
                <h3>{base64}相关视频{/base64}</h3>
            </div>
            <div class="enslave">


                {list type:bt mode:rand total:10 title_len:24}
                <div class="small likes">
                    <a class="depraved" href="{_url}">
                        <div class="seem"><img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}" alt=""></div>
                        <div class="shoving">{_title}</div>
                    </a>
                </div>
                {/list}

            </div>
        </div>
    </section>
{@js_tpl_code}
{@include file:footer}
</body>

</html>