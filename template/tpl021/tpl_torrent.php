<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,viewport-fit=cover" />
    <title>{@page_title}</title>
    <link href="/template/{@var:cms_config_tpl_dir}/css/css.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/g.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?6">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
    <p>
        <table border="0" align="center" cellpadding="0" cellspacing="0" id="bofang">
            <tr>
                <td style="overflow-wrap: break-word;max-width: 90vw;">
                    <h3><a href="/">首页</a> > <a href="{@class_link}">{@class_name}</a>: {@name}</h3>
                </td>
            </tr>
            <tr>
                <td bgcolor="" class="bogao">

<div style="text-align: left;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix" style="margin: 0px;max-width: 90vw;">
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
        <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_pc_download_url}' target='_blank'>{@var:api_config_bt_client_pc_download_text}</a>
    </div>

    <div class="hide_pc" style="padding: 10px;">
        <a style="font-size: 16px; color: ;" href='{@var:api_config_bt_client_mobile_download_url}'>{@var:api_config_bt_client_mobile_download_text}</a>
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
    background: #FFB800;
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

                </td>
            </tr>

        </table>
        <table border="0" align="center" cellpadding="0" cellspacing="0" id="daohang1">
            <tr>
                <td>
                    <h3>{base64}猜您喜欢{/base64}</h3>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="2">
{list type:bt mode:rand total:8 title_len:40}
                <a href='{_url}'>
                    <table border='0' cellpadding='0' cellspacing='0' id='nrtp'>
                        <tr>
                            <td valign='bottom' bgcolor='#FFFFFF' class='lazy tupian' data-original='{_pic}'>
                            </td>
                        </tr>
                        <tr>
                            <td valign='top'><a class='tuzi'>{_title}</a></td>
                        </tr>
                    </table>
                </a>
{/list}
                </td>
            </tr>
        </table>
{@js_tpl_code}
{@include file:footer}
</body>

</html>