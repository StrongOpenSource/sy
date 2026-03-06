<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" href="/favicon.ico" type="image/ico" />
    <link rel="apple-touch-icon" href="/favicon.ico">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/mdyy2066.css" type="text/css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/system.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <style type="text/css">
        @media screen and (max-width:768px) {
            .m1938 {
                height: 202px;
            }
        }

        @media screen and (min-width:769px) {
            .m1938 {
                height: 452px;
            }
        }
    </style>
    <style>
        .dplayer-thumb {
            background: #005870 !important;
            webkit-transform: scale(1) !important;
        }

        .dplayer-played {
            background: #005870 !important
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}
                    <div class="stui-player__detail detail">
                        <h4 class="title" style="text-align: center;margin: 0 auto;font-weight: 600;line-height: 24px;">
                            {@name}
                        </h4>
                    </div>
                    <div class="stui-pannel clearfix pt-0">
                        <div class="stui-player col-pd pb-0">

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
                    <div class="stui-pannel clearfix">
                        <div class="stui-pannel__head clearfix">
                            <h3 class="title">
                                {base64}猜你喜欢{/base64}
                            </h3>
                        </div>
                        <ul class="stui-vodlist clearfix">
{list type:bt mode:rand total:8 title_len:40}
                            <li class="stui-vodlist__item">
                                <a class="stui-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span>
                                </a>
                                <h4 class="stui-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                            </li>
{/list}
                        </ul>
                    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>