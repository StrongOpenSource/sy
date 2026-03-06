<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="msapplication-navbutton-color" content="#000">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
    <script>
        // 1.定义一个图片懒加载的函数
        function lazyImg() {

            // 1.获取页面已经滚动的高度   获取当前设备的高度
            var scroolTop = document.documentElement.scrollTop || document.body.scrollTop;
            var clientHeight = document.documentElement.clientHeight || document.body.clientHeight;
            // 2.获取到所有的图片资源
            var images = document.getElementsByClassName('images');
            // 3.遍历图片  通过当前图片的自定属性 找到真是的图片路径
            for (var img of images) {

                // 4.找到当前图片距离页面最上面的距离  < = 获取页面已经滚动的高度 +  获取当前设备的高度
                // 5.替换图片资源 把真是的图片路径 替换当前图片的src
                //  判断  如果 图片.offsetTop<= 滚动高+ 屏幕高
                //  替换图片
                if (((img.offsetTop - 100) <= (scroolTop + clientHeight)) && (img.getAttribute('data-realsrc'))) {
                    //真实路径
                    var realSrc = img.getAttribute('data-realsrc');
                    console.log(realSrc);
                    img.src = realSrc;
                    //不让已经加载的图片 再次进入当前判断中
                    img.removeAttribute("data-realsrc");
                }
            }

        }


        //使用节流 

        // 页面加载 调用懒加载函数
        window.onload = lazyImg;
        // 页面滚动  条慵懒加载函数
        window.onscroll = lazyImg;
    </script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

                        <div class="appel">
                            <div class="breadcrumbs">您的位置：<a href="/">首页</a><em class="sep">></em><a href="{@class_link}">{@class_name}</a><em class="sep">></em><span>{@name}</span></div>
                            <div class="detail clearfix">
                                <div class="banyundogcom">

<div style="text-align: left;color:#ebebeb;">
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
    background: #542320;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: #542320;
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

                            <div class="appel">
                                <div class="appel-heading clearfix">
                                    <h3 class="appel-title">猜你喜欢</h3>
                                </div>
                                <div class="appel">
                                </div>
                                <div class="appel-max detail-hot">
                                    <ul class="thumbnail-group clearfix">
{list type:bt mode:rand total:12 title_len:40}
                                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                                            <div class="video-info">
                                                <h5><a href="{_url}" >{_title}</a></h5>
                                            </div>
                                        </li>
{/list}



                                    </ul>
                                </div>
                            </div>

                        </div>
                </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>