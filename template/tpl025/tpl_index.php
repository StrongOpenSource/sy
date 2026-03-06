<!DOCTYPE html>
<html lang="zh-cn">

<head>

    <meta name="keywords" content="{@site_keyword}" />
    <title>{@page_title}</title>
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
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{@class_name type:video index:3}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:video index:3 total:8 title_len:40}
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



                        <div class="appel">
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{@class_name type:video index:1}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:video index:1 total:8 title_len:40}
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



                        <div class="appel">
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{@class_name type:video index:4}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:video index:4 total:8 title_len:40}
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



                        <div class="appel">
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{@class_name type:video index:2}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:video index:2 total:8 title_len:40}
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


                        <div class="appel">
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{base64}国产磁力{/base64}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:bt index:1 total:8 title_len:40}
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


                        <div class="appel">
                            <div class="mhlleset clearfix">
                                <div class="mhlleset-main">
                                    <div class="appel-heading clearfix">
                                        <h3 class="appel-title">{base64}日本磁力{/base64}</h3>
                                    </div>
                                    <ul class="thumbnail-group clearfix">
{list type:bt index:2 total:8 title_len:40}
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
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>