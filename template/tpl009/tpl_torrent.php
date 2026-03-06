<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{@page_title}</title>
    <meta name="referrer" content="always" />
    <link rel='stylesheet' id='wplc-topbar-style-css' href='/template/{@var:cms_config_tpl_dir}/css/style.css?ver=1.0.91' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap' href='/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vtt-logo-font-css' href='/template/{@var:cms_config_tpl_dir}/css/vtt-logo-font-css.css' type='text/css' media='all' />
    <link rel='stylesheet' id='vtt-custom-style-css' href='/template/{@var:cms_config_tpl_dir}/css/custom.css?ver=1.1.0.1650361592' type='text/css' media='all' />
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/jquery.min.js' id='jquery-core-js'></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <style>
        @media (max-width: 767.98px) {}

        .logo-text {
            background-color: transparent;
        }

        #wrapper-navbar {
            background-color: #3272dc;
        }

        .hamburger-inner,
        .hamburger-inner::before,
        .hamburger-inner::after {
            background-color: #fff;
        }

        .header-title {
            color: #fff;
        }

        .header-search input {
            border: 2px solid #ffffff;
        }

        .header-search #searchsubmit {
            background: #3e8ed0;
            border: 2px solid #3e8ed0;
            color: #ffffff;
        }

        .header-search #searchsubmit i {
            color: #ffffff;
        }

        #content .container {
            padding-right: 0px;
            padding-left: 0px;
        }

        .video-block .duration {
            background: #3e8ed0;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body class="home blog wp-embed-responsive hfeed">

    {@include file:header}





                        <div class="video-title">
                            <h1>{@name}</h1>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="video-left">
                                <div class="video-wrapper" style="font-size: 16px;">


                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                                            <div class="clearfix" style="margin: 20px;">
                                                {@torrent_capture}
                                            </div>

                                </div>
                            </div>

                        </div>



                        <ul class="navbar-nav youqinglj">
                            <li class="link-menu hide_mobile">
                                <a class="btn ljbtn" style="color:;" onclick="open_t()" >{base64}下载种子{/base64}</a>
                            </li>
                            <li class="link-menu">
                                <a class="btn ljbtn" style="color:;" onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>
                            </li>
                            <li class="link-menu">
                                <a class="btn ljbtn" style="color:;" onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
                            </li>
                        </ul>



                    <div class="hide_mobile" style="padding: 20px;">
                      <a style="font-size: 16px; color: black;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc" style="padding: 20px;">
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


                        <div class="video-title">
                            <h1>推荐视频</h1>
                        </div>

                        <div class="related-videos">
                            <div class="row no-gutters">

                            {list type:bt mode:rand total:10 title_len:32}
                        <div class=" col-6 col-md-4 col-lg-3 col-xl-3">
                            <div class="video-block video-with-trailer" data-post-id="74903">
                                <a class="thumb" href="{_url}">
                                    <div class="video-debounce-bar"></div>
                                    <div class="lds-dual-ring"></div>
                                    <img class="video-img img-fluid" data-src="{_pic}" style="height: 100%;">
                                    <div class="video-preview"></div>
                                </a>
                                <a class="infos" href="{_url}">
                                    <span class="title">{_title}</span>
                                </a>
                            </div>
                        </div>
                            {/list}
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <div class="happy-section" style="display: none!important;">
                <a href="#!"><img src="/style/happy-4.png"></a>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>