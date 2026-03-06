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
            <h1 class=""> <i class="fa fa-folder-open"></i> {@class_name}</h1>


                                    {list type:bt mode:list title_len:24}

            <div class="small">
                <div class="small-ins"><a href="{_url}" class="athumb">
                        <div class="small-pic"><img class="lazyload" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}"></div>
                        <p><i class="la la-play-circle"></i>{_title}</p>
                    </a>
                </div>
            </div>


                                    {/list}




        </div>
        <style>
            a.dqy {
                background-color: rgb(227, 68, 73);
                color: rgb(255, 255, 255)
            }
        </style>
        <ul class="bottom-navi">


                            {link_first}<li class="shangyiye"><a class="syy" href="{_url}">首页</a></li>{/link_first}
                            {link_pre1}<li class="shangyiye"><a class="syy" href="{_url}">上一页</a></li>{/link_pre1}
                            {links_pre max:3}<li class="shangyiye"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_pre}
                            <li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;">{@page_cur}</a></li>
                            {links_next max:3}<li class="shangyiye"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_next}
                            {link_next1}<li class="shangyiye"><a class="syy" href="{_url}">下一页</a></li>{/link_next1}
                            {link_last}<li class="shangyiye"><a class="syy" href="{_url}">尾页</a></li>{/link_last}



        </ul>
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>