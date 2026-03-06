<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#111">
    <link rel="icon" href="/style/ico.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/common.css" type="text/css" rel="stylesheet" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/styles.css" type="text/css" rel="stylesheet" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/engine.css" type="text/css" rel="stylesheet" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/libs.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <style>
        .dangqianye a,
        .dangqianye a:hover {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }

        .pagination__pages a {
            font-size: 22px;
        }

        .footer {
            font-size: 18px;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
                <div id="m-cont">
                    <article class="page ignore-select">
                        <div class="page__col-left">
                            <h1 class="">{@name}</h1>
                            <div class="page__main d-flex fd-column">
                                <div class="page__header order-first">
                                    <div class="page__player">
                                        <div class="video-pl">
                                            <div id="downloader_content_video" class="ignore-select">
                                                <div class="g-recaptcha" id="downloader_video">

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
    background: ;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: #bf481d;
    color: white;
    margin: 0px 10px;
    padding: 5px 10px;
    font-weight: bold;
    border:0px solid;
    border-radius:5px;
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
                                    </div>
                                </div>

                            </div>
                        </div>
                        <br>
                        <br>
                        <section class="sect sect--tabs">
                            <div class="sect__header d-flex">
                                <h2 class="sect__title js-show-comments is-active d">
                                    <span class="fal fa fa-play-circle-o"></span>相关视频
                                </h2>
                            </div>

                            <div class="sect__tabs-content">
                                <script>

                                </script>
                                <div class="sect__content d-grid">

{list type:bt mode:rand total:8 title_len:40}
                                    <li class="d-flex fd-column grid-item d">
                                        <a class="thumb d-flex fd-column grid-item" href="{_url}">
                                            <div class="thumb__desc">
                                                <h3 class="thumb__title line-clamp">{_title}</h3>
                                            </div>
                                            <div class="thumb__img img-fit-cover img-responsive order-first icon-at-left img-video"><img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}">
                                            </div>
                                        </a>
                                    </li>
{/list}
                                </div>
                            </div>
                            <div class="sect__tabs-content d-none">
                                <div class="page__comments">
                                    <div class="page__comments-list" id="page__comments-list">
                                        <div id="dle-ajax-comments"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </article>
                </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>