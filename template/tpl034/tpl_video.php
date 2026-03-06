<!doctype html>
<html>

<head>
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" type="text/css" href="/template/{@var:cms_config_tpl_dir}/css/style.css" />
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery_lazyload.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/lazyload.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}
            <div class="pl-box">


                <div class="ewave-pannel clearfix">
                    <div class="ewave-pannel__head clearfix">
                        <h5 class="title" style="font-size: 16px;">{@name}</h5>
                    </div>

{@palyer_js}
                </div>
            </div>
            <div class="ewave-pannel clearfix">
                <div class="ewave-pannel__head clearfix"> <span class="hidden-sm hidden-xs pull-right"></span>
                    <h3 class="title">推荐视频</h3>
                </div>
                <ul class="ewave-vodlist clearfix">
{list type:video mode:rand total:10 title_len:40}
                    <li class="ewave-vodlist__item"> <a class="ewave-vodlist__thumb lazyload" href="{_url}"  data-original="{_pic}"> <span class="play hidden-xs"></span> <span class="pic-text"></span> </a>
                        <h4 class="ewave-vodlist__title"><a href="{_url}" >{_title}</a></h4>
                    </li>
{/list}

                </ul>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>