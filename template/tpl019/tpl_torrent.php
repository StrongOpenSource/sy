<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,viewport-fit=cover,user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="referrer" content="always">
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.autocomplete.js"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all">
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/rose/css/style.cssx?_wd=false">
    <link id="layuicss-laydate" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/laydate.css" media="all">
    <link id="layuicss-layer" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/layer.css" media="all">
    <link id="layuicss-skincodecss" rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/code.css" media="all">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body style>
{@include file:header}

        <div class="group-box" style="background: rgba(189, 188, 203, 0.4);">
            <p class="group-title">{@name}</p>
            <div class="group-contents layui-row">



<div style="text-align: left; color: white;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix img_group" style="margin: 0px;">
    {@torrent_capture}
</div>
<style type="text/css">
    .img_group .img_item{
        width: 24%;
    }
    @media (max-width: 768px) {
        .img_group .img_item {
            width: 48%;
        }
    }

</style>

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
    background: #FFB800;
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

            <div class="group-contents layui-row">
                <div style="width: 100%;"></div>
                <div class="group-box" style="background: rgba(220, 173, 237, 0.4);">
                    <p class="group-title"><i class="layui-icon layui-icon-engine"></i>&nbsp;&nbsp;相关推荐</p>
                    <ul class="group-contents layui-row">
{list type:bt mode:rand total:8 title_len:40}
                        <a href="{_url}"  class="group-item layui-col-md3 m-md6">
                            <img src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" data-src="{_pic}" h="210px">
                            <p>{_title}</p>
                        </a>
{/list}
                    </ul>
                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>