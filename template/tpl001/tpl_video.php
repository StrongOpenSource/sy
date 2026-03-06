<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?3">
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/search.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/base.js"></script>
    {@common_head}
    {@json_code}
    </head>
    
    <body ontouchstart="" style="">
        {@include file:header}

        <div class="wrap">
            <div class="main">
                <h1 id="titleH">{@name}</h1>
{@palyer_js}
            </div>
        </div>
        <div class="wrap">
            <div class="mod play-list">
                <div class="title">
                    <h3>猜你喜欢视频</h3></div>
                <div class="row col5 clearfix" id="cnxh">
                    {list type:video mode:rand total:10 title_len:24}
                    <dl>
                        <dt>
                            <a href="{_url}" title="">
                                <img class="nature" src="{_pic}" data-original="{_pic}" alt="" style="transition: all 1s ease 0s; opacity: 1;">
                                <i>
                                </i>
                            </a>
                        </dt>
                        <dd>
                            <a href="{_url}" title="">
                                <h3>{_title}</h3></a>
                        </dd>
                    </dl>
                    {/list}
                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
    </body>
</html>