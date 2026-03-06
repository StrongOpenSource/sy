<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="index, follow" />
    <meta charset="UTF-8" />
    <meta name="referrer" content="always">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{@page_title}</title>
    <link media="all" href="/template/{@var:cms_config_tpl_dir}/css/autoptimize.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/iconfont.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet">
    <style>
        @media (min-width: 768px) {
            .topo-menu ul a {
                display: block;
                padding: 0 10px;
                line-height: 42px;
                color: #fff;
                font-size: 18px;
                font-weight: 500;
                width: 122.01px;
                height: 42px;
                border-radius: 10px;
                text-align: center;
                font-size: 1rem;
            }

            .logo-nome {
                color: #fff;
                background-color: #161616;
                font-size: 26px;
                font-weight: 600;
                height: 40px;
                display: inline-block;
                padding: 10px 0px 0;
            }
        }

        .paginacao li a.dqy {
            color: #FF0000;
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body class="archive category category-porn category-58">

{@include file:header}



    <div class="meio">
        <div class="container">
            <h1 class="post-titulo">{@name} </h1>
            <div class="topo-tags">
            </div>
            <div class="">
                <div class="video-container">
                    <div class="video-container">
                        <div id="alivideo">


                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
                            <div class="clearfix" style="margin: 20px;">
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





<style type="text/css">
.download {
    display: flex;
    justify-content: center;

    margin-top: 16px;
    text-align: center;
    font-size: 20px;
}

.downbtn a a:link a:active a:hover a:visted {
    color: hsla(0, 0%, 0%, .8);
    background: black;
    color: #f78da7;
}



.downbtn {
    display: inline-block;
    background: black;
    color: #f78da7;
    border-radius: 5px;
    border: 1px solid #c48822;
    margin: 0px 6px 4px 0px;
    padding: 0px 5px;
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
                </div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="relacionadosLista">
                <div class="videos" style="margin-bottom: 25px;">
                    <h3><i class="icon iconfont icon-yonghu"></i> {base64}猜你喜欢{/base64}</h3>
                    <div class="videos">


{list type:bt mode:rand total:12 title_len:40}
                <div class="video">
                    <div class="video-thumb">
                        <a href="{_url}" class="thumb">
                            <img width="352" height="198" src='/template/{@var:cms_config_tpl_dir}/picture/lazysizes.svg' data-src="{_pic}" class="lazyload">
                            <span class="video-play "></span>
                            <span class="video-preview"></span>
                            <span class="video-slider"></span>
                        </a>
                    </div>
                    <a>
                        <span class="video-titulo">{_title}</span>
                    </a>
                    <div class="clearfix"></div>
                </div>
{/list}


                        <div class="clearfix">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>