<!DOCTYPE html>
<html>
<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta name="theme-color" content="black">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="yandex-verification" content="80cbcd45c3508a31" />
    <meta property="og:image:width" content="600">
    <meta property="og:image:height" content="250">
    <meta name="referrer" content="always">
    <meta name="yandex-verification" content="500931ff0feda175" />
    <link rel="shortcut icon" href="/static/template/{@var:cms_config_tpl_dir}/yazhou/ico.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/site.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/bootstrap-wokao.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/toastr.css" rel="stylesheet">
    <script src="/template/{@var:cms_config_tpl_dir}/js/head.js"></script>
    <script async src="/template/{@var:cms_config_tpl_dir}/js/4590085a8ad543ef88439ef9613c499d.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>
{@include file:header}

            <h3 class="title editable bottom-5" name="title" data-url="#">{@name}</h3>
            <div class='meta bottom-10 visible-lg'>
            </div>
            <div id='node-content'>

                    <div style="text-align: center;width: 100%;padding-top: 20px; color: #fff;" id="vedeoinfo">
   
{@palyer_js}

                    </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="clearfix p-0 m-0">
                <h3><i class='glyphicon glyphicon-thumbs-up'></i> 更多推薦</h3>
{list type:video mode:rand total:8 title_len:40}
                <div class='col-lg-3 col-md-3 col-sm-4 col-xs-6 item'>
                    <div class='block'>
                        <div class='block-layer'>
                            <div class='media-image'>
                                <a href="{_url}"  ><img class="img img-responsive lazy" src="{_pic}"></a>
                            </div>
                        </div>
                        <div class='block-layer block-inner'>
                            <div class=' block-title'>
                                <a href="{_url}" >{_title}!</a>
                            </div>
                        </div>
                    </div>
                </div>
{/list}
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>