<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>人人撸</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min3.2.1.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/crypto.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/openssl.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link rel=preload href="/style/css/styles.css" as="style">
    <link rel=preload href="/style/js/functions.js" as="script">
    <link rel=preload href="/style/js/jquery.lazyload.js" as="script">
    <link rel="icon" href="/style/icon.png">
    <link href="/template/{@var:cms_config_tpl_dir}/css/styles.css" type="text/css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes" />
    <meta name="apple-touch-fullscreen" content="YES" />

    <style>
        body {
            background-color: darkgray;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}
        <div class="cont-wrapper">
            <h1 class="">{@name}</h1>
            <div class="wrapper-video">
                <div class="video-ins">
                    <div class="video-cl">
                        <div id="videoplayer">

{@palyer_js}
                        </div>

                    </div>
                </div>
            </div>
            <h2 class="">你可能喜欢的内容</h2>
            <div class="smalls">

                            {list type:video mode:rand total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                            {/list}
            </div>
        </div>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>