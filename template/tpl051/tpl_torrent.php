<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="referrer" content="always">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <link rel="shortcut icon" href="/template/{@var:cms_config_tpl_dir}/ylczs-hei/favicon.ico">
    <link href="/template/{@var:cms_config_tpl_dir}/css/layui.css" rel="stylesheet" media="all" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.6.1.min.js" charset="utf-8"></script>

    <style>
        :root {
            --hong: #f71735;
            --huang: #fff462;
            --babi: #009986;
            --more: #009986;
            --qian: #7eccc2;
            --bai: #fff;
            --hei: #222;
            --tan: #888;
            --hui: #f0f0f0;
            --yin: #f6f6f6;
        }

        .soso {
            width: 15rem;
            border-radius: 1rem;
            border: 1px solid var(--hui);
            overflow: hidden;
            display: flex;
            align-items: center;
            float: right;
        }

        .soso input {
            width: 100%;
            height: 2.125rem;
            padding: 0 1em;
            box-sizing: border-box;
            caret-color: var(--babi);
            color: var(--hei);
            font-size: .875rem;
            background-color: var(--bai);
        }

        .soso button {
            border: 0;
            padding: 0 1em;
            height: 2.125rem;
            cursor: pointer;
            white-space: nowrap;
            background-color: var(--bai);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .soso button svg {
            width: 1.125rem;
            height: 1.125rem;
            fill: #007c99;
        }

        input {
            appearance: none;
            -webkit-appearance: none;
            outline: none;
        }

        input::-webkit-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }

        input::-moz-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }

        input:-ms-input-placeholder {
            color: var(--tan);
            font-size: .875rem;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}

        <div class="box">
            <div class="title">
                <h3 class="group-title">{@name}</h3>
            </div>
            <div class="vods">
                <div class="box">
                    <style>
                        @media only screen and (min-width: 1029px) {
                            .text-list-html {
                                height: 468px;
                            }

                        }

                        @media screen and (max-width: 750px) {
                            .text-list-html {
                                height: 268px;

                            }

                        }

                        #video {
                            width: 100%;
                            height: 300%;
                        }
                    </style>



<div style="text-align: left;color: white;">
                        {base64}【影片格式】：{/base64}mp4<br>
                        {base64}【影片大小】：{/base64}{@torrent_size}<br>
                        {base64}【影片时长】：{/base64}{@torrent_duration} {base64}分钟{/base64}<br>
                        {base64}【分辨率】：{/base64}{@torrent_resolution}<br>
                        {base64}【影片预览】：{/base64}<br>
</div>
<div class="clearfix" style="margin: 0px; width: 98%;">
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
    background: #a86932;
    color: white;
    width: 100%;
}

.downbtn {
    display: inline-block;
    background: #a86932;
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

                <div class="group-box">
                    <p class="group-title"><i class="layui-icon layui-icon-engine"></i>&nbsp;
                        &nbsp;
                        相关推荐</p>
                    <ul class="group-contents layui-row">

{list type:bt mode:rand total:10 title_len:40}
            <a href="{_url}" class="group-item layui-col-md3 m-md6"><img src="/template/{@var:cms_config_tpl_dir}/images/loads.jpg" data-src="{_pic}" h="210px">
                <p style="">{_title}</p>
            </a>
{/list}



                    </ul>
                </div>
                <script>
                    var detailImg = new Image();
                    var ImgEl = document.querySelector('.detail-img');
                    detailImg.src = ImgEl.getAttribute('data-img');

                    detailImg.onload = function() {
                        ImgEl.style.objectFit = 'cover';
                        ImgEl.src = ImgEl.getAttribute('data-img');
                    }

                    ;
                    detailImg.onerror = function() {
                        ImgEl.style.objectFit = 'cover';
                        ImgEl.src = '/template/{@var:cms_config_tpl_dir}/ylczs-hei/load.png';
                    }
                </script>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>