<?php exit();?><!DOCTYPE html>
<html>
<head>
    <title>{@page_title}</title>
    <meta http-equiv="keywords" content="{@site_keyword}">
    <meta http-equiv="description" content="{@site_desc}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/common.css" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/hmlcss.css?v=1" type="text/css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/app.css" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
    {@common_head}
    {@json_code}
</head>

<body>
    {@include file:header}

    <div class="content">
        <div class="container">
            <div style="line-height:26px; text-align: center; padding: 5px; font-size:16px; margin: 5px 0 5px 0; word-break: break-all ;">
                <b>{@name}</b>
            </div>

{@palyer_js}

            <div style="padding:10px;">
                <textarea id="copy" style="display:none;"></textarea>
                <div style="background-color: #666; border-radius: 3px; padding: 3px 5px 3px 5px; text-align: center; cursor: pointer;"><span id="thisUrlID" style="color: #ffffff;"></span>
                    <br><a data-toggle="modal" style="color: #ffffff;" id="shareQrcode" onclick="copyHtmlLink();">{base64}👉点击复制链接分享给好友👈{/base64}</a>
                </div>
                <script>
                    function copyHtmlLink() {
                        var str = window.location.href;
                        copyText(str);
                    }
                    $(function () {
                        $('#thisUrlID').html(window.location.href);
                    });

                    function copyText(str) {
                        $('#copy').text(str).show();
                        var ele = document.getElementById("copy");
                        ele.select();
                        document.execCommand('copy', false, null);
                        $('#copy').hide();
                        alert(d('{base64_raw}复制成功！{/base64_raw}'));
                    }
                </script>
            </div>
            <div class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix">
                        <h3 class="mhlleset-title">{base64}猜你想看{/base64}</h3>
                    </div>
                    <ul class="thumbnail2-group clearfix">
                        {list type:video mode:rand total:12 title_len:24}
                        <li>
                            <a class="thumbnail2" href="{_url}">
                                <img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg">
                            </a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                                </p>
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