<!DOCTYPE html>
<html>
<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="theme-color" content="black">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="80cbcd45c3508a31" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="250">
    <meta name="referrer" content="always">
    <meta name="yandex-verification" content="500931ff0feda175" />
    <link rel="shortcut icon" href="/static/template/{@var:cms_config_tpl_dir}/yazhou/ico.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/site.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/bootstrap-wokao.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/toastr.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/4590085a8ad543ef88439ef9613c499d.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>
{@include file:header}


            <h3 class="title editable bottom-5" name="title" data-url="#">{@name}</h3>
            <div class='meta bottom-10 visible-lg'>
            </div>
            <div id='node-content'>

                    <div style="text-align: center;width: 100%;padding-top: 20px; color: #fff;" id="vedeoinfo">
   
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
    <div class="container">
        <div class="row">
            <div class="clearfix p-0 m-0">
                <h3><i class='glyphicon glyphicon-thumbs-up'></i> 更多推薦</h3>
{list type:bt mode:rand total:8 title_len:40}
                <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 item'>
                    <div class='block'>
                        <div class='block-layer'>
                            <div class='media-image'>
                                <a href="{_url}"  ><img class="img img-responsive lazy" src="{_pic}"></a>
                            </div>
                        </div>
                        <div class='block-layer block-inner'>
                            <div class=' block-title'>
                                <a href="{_url}" >{_title}!</a>
                            </div>
                        </div>
                    </div>
                </div>
{/list}
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>