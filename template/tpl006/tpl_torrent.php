<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-metal.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/fonts.css">

    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.cookie.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.form.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazy.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.scrollto.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.min.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/main.js" type="text/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/rocket-loader.min.js"></script>


    <style>
        .block-post .item-post .name {
            white-space: inherit;
        }

        .header .nav li.active a {
            border-color: #FC0F64;
            color: #FC0F64;
            pointer-events: none;
        }

        @media (max-width: 1025px) {
            .m-panel .nav li.active a {
                border-color: #FC0F64;
                color: #FC0F64;
                pointer-events: none;
            }
        }

        main {
            max-width: 1344px;
            margin: 0 auto;
        }

        @media (max-width: 767.98px) {
            .m-panel .content {
                padding: 150px 20px 20px !important;
            }

            .m-panel .icon-close {
                padding: 300px 0 0 !important;
            }

            .m-panel .nav {
                display: inline-block;
            }

            .m-panel .nav li {
                width: 50%;
                float: left;
            }
        }
    </style>
{@common_head}
{@json_code}
</head>

<body>
    <div class="wrapper">
        {@include file:header}


<script type="text/javascript">

var ua = navigator.userAgent.toLocaleLowerCase();
style=document.createElement('style');
if(ua.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian)/i)){
    var is_mobile=1;
    var is_pc=0;
    if(ua.match(/(ios|ipad|iphone)/i)){
        var is_ios = 1;
        var is_android = 0;
    }else{
        var is_ios = 0;
        var is_android = 1;
    }
    style.innerHTML = '.hide_mobile{display:none;}';
}else{
    var is_mobile=0;
    var is_pc=1;
    style.innerHTML = '.hide_pc{display:none;}';
}
document.getElementsByTagName('head')[0].appendChild(style);



    
  </script>

<style type="text/css">
.down_btn {
display: inline-block;
    border-radius: 5px;
    border: 1px solid #c48822;
    margin: 0px 6px 4px 0px;
    padding: 0px 5px;
    font-weight: bold;


    background: #FC0F64 !important;
    border-color: #FC0F64 !important;
    color: #fff !important;

    -webkit-transition: .3s;
    -o-transition: .3s;
    transition: .3s;

    position: relative;
    overflow: hidden;
    text-align: center;
    min-width: 60px;
    background: #1C1E29;
    border: none;
    color: #717383;
    font-weight: 700;
    -webkit-box-shadow: none;
    box-shadow: none;
    white-space: nowrap;
    font-size: 18px;
    border-radius: 10px;


}

.torrent_content{
    border-top: 1px solid rgba(255, 255, 255, .1);
    border-bottom: 1px solid rgba(255, 255, 255, .1);
    padding: 30px 20px;
    line-height: 40px;
    text-align: left;
    font-size: 18px;
}

.img_item {
    float: left;
}
@media (max-width: 500px) {
    .img_item{
        width: 50%;
    }
}
@media (min-width: 501px) {
    .img_item{
        width: 25%;
    }
}
.img_item{
    padding: 2px;
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

                <section class="section pt-30">
                    <div class="wrap">
                        <div class="title flex mix-filter">
                            <h2>{@name}</h2>
                        </div>
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration}分钟<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                            {@torrent_capture}
                            <div style="clear:both;"></div>

                            <div>
                                <span class="hide_mobile"><a onclick="open_t()"  class="down_btn">{base64}下载种子{/base64}</a></span>
                            

                            <a onclick="open_m()" href="javascript:;"  class="down_btn">{base64}打开磁力{/base64}</a>

                            <a onclick="copy_m()" href="javascript:;" class="down_btn">{base64}复制磁力{/base64}</a>
                            </div>

                    <div class="hide_mobile" style="padding-top: 20px;">
                      <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                    </div>

                    <div class="hide_pc" style="padding-top: 20px;">
                      <a style="font-size: 16px; color: white;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
                    </div>
                    </div>
                </section>

                <section class="section">
                    <div class="wrap">
                        <div class="title flex mix-filter">
                            <h2>{base64} 你可能喜欢的内容{/base64} </h2>
                        </div>
                        <div class="list-videos">
                            <div class="block-post flex">
                            {list type:bt mode:rand total:10 title_len:24}
                                <div class="item item-post">
                                    <a href="{_url}">
                                        <span class="img">
                                            <img class="lazy-load" src="/template/{@var:cms_config_tpl_dir}/picture/loading.gif" data-original="{_pic}" width="450" height="257" />
                                        </span>
                                        <h3 class="name">{_title}</h3>
                                    </a>
                                </div>
                            {/list}
                            </div>
                        </div>
                    </div>
                </section>

{@js_tpl_code}
{@include file:footer}
    </div>
</body>

</html>