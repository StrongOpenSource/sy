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
    <!--<script>document.write('<script src="/template/{@var:cms_config_tpl_dir}/js/jiami.js'+Math.random()+'"><\/script>');</script>-->
    <!--<script>document.write('<script src="/template/{@var:cms_config_tpl_dir}/js/piaochuang.js'+Math.random()+'"><\/script>');</script>-->

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
    <style type="text/css">
        .fenye {
            margin-top: 5px;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

                        <div class="appel">
                            <div class="appel-heading clearfix">
                                <h3 class="appel-title">{@class_name}<small>第<span class="text-primary">{@page_cur}</span>页</small></h3>
                            </div>
                            <div class="appel-max">
                                <ul class="thumbnail-group clearfix">
{list type:video mode:list title_len:40}
                                        <li><a class="thumbnail" href="{_url}"><img src="{_pic}" ></a>
                                            <div class="video-info">
                                                <h5><a href="{_url}" >{_title}</a></h5>
                                            </div>
                                        </li>
{/list}

                                </ul>
                            </div>
                            <div class="text-center clearfix">
                                <ul class="pagination pagination-lg " style="font-size: 15px;display:block; list-style-type:none;margin:5px;">

{link_first}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >首页</a></li>{/link_first}

{links_pre max:3}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >{_page_no}</a></li>{/links_pre}
<li class="page-item disabled fenye "><a class="page_link" style="background: #666" href="javascript:;" >{@page_cur}</a></li>
{links_next max:3}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >{_page_no}</a></li>{/links_next}

{link_last}<li class="page-item disabled fenye"><a class="page_link" href="{_url}" >尾页</a></li>{/link_last}
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>