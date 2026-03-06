<?php exit();?><!DOCTYPE html>
<html>
    <head>
        <title>{@page_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="keywords" content="{@site_keyword}">
        <meta http-equiv="description" content="{@site_desc}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="/template/{@var:cms_config_tpl_dir}/css/all-responsive-metal.css?6" rel="stylesheet" type="text/css" />
        <link href="/template/{@var:cms_config_tpl_dir}/css/jquery.fancybox-metal.css" rel="stylesheet" type="text/css" />
        <script src="/template/{@var:cms_config_tpl_dir}/js/common.js?5"></script>
{@common_head}
{@json_code}
    <body>
        <div class="container">
            {@include file:header}
            <div class="content">
                <div class="main-content">
                    <div class="main-container">
                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:video index:1}">{@class_name type:video index:1}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:video index:1 total:8 title_len:24}

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
                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:video index:2}">{@class_name type:video index:2}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:video index:2 total:8 title_len:24}

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
                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:video index:3}">{@class_name type:video index:3}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:video index:3 total:8 title_len:24}

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

                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:video index:4}">{@class_name type:video index:4}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:video index:4 total:8 title_len:24}

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
                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:bt index:1}">{base64}国产磁力{/base64}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:bt index:1 total:8 title_len:24}

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

                        <div id="list_videos_most_recent_videos">
                            <div class="headline">
                                <h2>
                                    <a href="{@class_link type:bt index:2}">{base64}日本种子{/base64}</a></h2>
                            </div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_most_recent_videos_items">
                                    {list type:bt index:2 total:8 title_len:24}

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
{@js_tpl_code}
{@include file:footer}
        </div>
    </body>
</html>