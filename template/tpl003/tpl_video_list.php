<?php exit();?><!DOCTYPE html>
<html>
    <head>
        <title>{@page_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
                        <div id="list_videos_common_videos_list">
                            <div class="headline">
                                <h1>{@class_name}</h1></div>
                            <div class="box">
                                <div class="list-videos">
                                    <div class="margin-fix" id="list_videos_common_videos_list_items">
                                    {list type:video mode:list title_len:24}
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


                        <div class="pagination" id="list_videos_common_videos_list_pagination">
                            <div class="pagination-holder">
                                <ul>
                                    {link_first}<li class="next"><a href="{_url}">首页</a></li>{/link_first}
                                    {link_pre1}<li class="next"><a href="{_url}">上一页</a></li>{/link_pre1}
                                    {links_pre max:3}<li class="next"><a href="{_url}">{_page_no}</a></li>{/links_pre}
                                    <li class="page-current"><a href="javascript:;">{@page_cur}</a></li>
                                    {links_next max:3}<li class="next"><a href="{_url}">{_page_no}</a></li>{/links_next}
                                    {link_next1}<li class="next"><a href="{_url}">下一页</a></li>{/link_next1}
                                    {link_last}<li class="next"><a href="{_url}">尾页</a></li>{/link_last}
                                </ul>
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