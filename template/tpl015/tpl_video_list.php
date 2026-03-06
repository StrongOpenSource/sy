<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <title>{@page_title}</title>
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    </script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/normalize.css">
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/styles.css">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}
                <div class="heading">
                    <h1>{@class_name}</h1>
                </div>
                <div class="thumbs">
{list type:video mode:list title_len:24}
                    <div class="thumb">
                        <a href="{_url}" >
                            <div class="thumb-img">
                                <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.gif" original="{_pic}" >
                                                            </div>
                            <div class="thumb-title">{_title}</div>
                        </a>
                    </div>
{/list}
                </div>
                <ul class="pagination pages">

{link_first}<li class="fenyeyema"><a class="syy" href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li class="fenyeyema"><a class="syy" href="{_url}">上一页</a></li>{/link_pre1}
{links_pre max:3}<li class="fenyeyema"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="fenyeyema dangqianye"><a  class="fyym dqy"  href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li class="fenyeyema"><a class="syy" href="{_url}">{_page_no}</a></li>{/links_next}
{link_next1}<li class="fenyeyema"><a class="syy" href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li class="fenyeyema"><a class="syy" href="{_url}">尾页</a></li>{/link_last}

                    
                </ul>
{@js_tpl_code}
{@include file:footer}
</body>

</html>