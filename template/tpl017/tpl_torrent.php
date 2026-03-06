<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <title>{@page_title}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="referrer" content="always">
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/shi1love/images/logo.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/home.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/lazyload.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
    <div class="wrap">
        <div class="group-box bg-card" style="padding-left: 1.5%;">
            <p class="group-title">{@name}</p>
            <div class="group-contents layui-row">
                <div class="layui-col-md">

                            <div style="color: ;">
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


                            <div class="group-box bg-card" style="padding-left: 1.5%;">
                                <div class="group-contents layui-row" style="padding-bottom: 10px; text-align: center;">
                                    
                                    <a  class="layui-btn layui-btn-primary layui-border-blue play-btn hide_mobile" style="height: 35px;line-height: 35px;width: 100px;padding: unset;"  onclick="open_t()" >{base64}下载种子{/base64}</a>
                                
                                    <a  class="layui-btn layui-btn-primary layui-border-blue play-btn" style="height: 35px;line-height: 35px;width: 100px;padding: unset;" onclick="open_m()" href="javascript:;" >{base64}打开磁力{/base64}</a>

                                    <a  class="layui-btn layui-btn-primary layui-border-blue play-btn" style="height: 35px;line-height: 35px;width: 100px;padding: unset;" onclick="copy_m()" href="javascript:;">{base64}复制磁力{/base64}</a>
                                </div>
                            </div>


                            <div style="float: left; clear: both;"></div>

                            <div class="hide_mobile" style="padding: 20px;">
                              <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
                            </div>

                            <div class="hide_pc" style="padding: 20px;">
                              <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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



        <div class="group-box index-list1">
            <p class="group-title v91"> <i class="layui-icon layui-icon-video"></i> &nbsp;&nbsp;推荐磁力 </p>

            <div class="group-contents layui-row">
{list type:bt mode:rand total:10 title_len:40}
                <div id="content1">
                    <a  href="{_url}" class="group-item layui-col-md3 m-md6"><img class="lazy" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.gif" />
                        <p style="color: #fff;">{_title}</p>
                    </a>
                </div>
{/list}
                <div class="clear"></div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>