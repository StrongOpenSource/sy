<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>人人撸</title>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min3.2.1.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/crypto.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/openssl.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/css/styles.css" as="style">
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/js/functions.js" as="script">
    <link rel=preload href="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js" as="script">
    <link rel="icon" href="/template/{@var:cms_config_tpl_dir}/icon.png">
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
            <h1 class=""> <i class="fa fa-folder-open"></i> {@class_name type:video index:1}</h1>
                        {list type:video index:1 total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                        {/list}
        </div>


        <div class="cont-wrapper">
            <h1 class=""> <i class="fa fa-folder-open"></i> {@class_name type:video index:2}</h1>
                        {list type:video index:2 total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                        {/list}
        </div>



        <div class="cont-wrapper">
            <h1 class=""> <i class="fa fa-folder-open"></i> {@class_name type:video index:3}</h1>
                        {list type:video index:3 total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                        {/list}
        </div>




        <div class="cont-wrapper">
            <h1 class=""> <i class="fa fa-folder-open"></i> {@class_name type:video index:4}</h1>
                        {list type:video index:4 total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                        {/list}
        </div>




        <div class="cont-wrapper">
            <h1 class=""> <i class="fa fa-folder-open"></i>{base64}国产种子{/base64}</h1>
                        {list type:bt index:1 total:10 title_len:24}
            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>
                        {/list}
        </div>



        <div class="cont-wrapper">
            <h1 class=""> <i class="fa fa-folder-open"></i>{base64}日本磁力{/base64}</h1>
                        {list type:bt index:2 total:10 title_len:24}
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
{@js_tpl_code}
{@include file:footer}
</body>

</html>