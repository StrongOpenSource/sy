<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="/template/{@var:cms_config_tpl_dir}/css/all-responsive-metal.css?6" rel="stylesheet" type="text/css" />
        <link href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-metal.css" rel="stylesheet" type="text/css" />
        <script src="/template/{@var:cms_config_tpl_dir}/js/common.js?5"></script>
{@common_head}
{@json_code}
    </head>
    
    <body>
        <div class="container">
            {@include file:header}
            <div class="content">
                <div class="main-content">
                    <div class="main-container">
                        <div class="headline">
                            <h1>{@name}</h1></div>
{@palyer_js}
                        <div class="related-videos" id="list_videos_related_videos" style="margin-top: 20px;">
                            <ul class="list-sort" id="list_videos_related_videos_filter_list">
                                <li>
                                    <span>相关视频</span></li>
                            </ul>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_related_videos_items">
                                    {list type:video mode:rand total:8 title_len:24}
                                        <div class="item">
                                            <a href="{_url}">
                                                <div class="img">
                                                    <img class="thumb lazy-load" referrerpolicy="no-referrer" src="{_pic}" /></div>
                                                <strong class="title">{_title}</strong>
                                            </a>
                                        </div>
                                    {/list}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
    </body>
</html>