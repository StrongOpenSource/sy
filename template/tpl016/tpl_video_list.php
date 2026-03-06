<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/template/{@var:cms_config_tpl_dir}/css/css.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>

{@include file:header}

            <div class="main-content">
                <div class="main-container">
                    <div id="list_videos_common_videos_list">
                        <div class="headline">
                            <h1> {@class_name}</h1>
                        </div>
                        <div class="box">
                            <div class="list-videos">
                                <div class="margin-fix" id="list_videos_common_videos_list_items">


{list type:video mode:list title_len:40}
                                <div class="item ">
                                    <a href="{_url}" >
                                        <div class="img">
                                            <img class="thumb lazy-load" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" data-original="{_pic}" width="320" height="180" />
                                        </div>
                                        <strong class="title">{_title}</strong>
                                    </a>
                                </div>
{/list}

                                </div>
                            </div>
                        </div>
                        <div class="pagination" id="list_videos_common_videos_list_pagination">
                            <div class="pagination-holder">
                                <ul>
{link_first}<li class="fenyeyema"><a class="fyym" href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li class="fenyeyema"><a class="fyym" href="{_url}">上一页</a></li>{/link_pre1}
{links_pre max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;" style="background-color: #816a2e;">{@page_cur}</a></li>
{links_next max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_next}
{link_next1}<li class="fenyeyema"><a class="fyym" href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li class="fenyeyema"><a class="fyym" href="{_url}">尾页</a></li>{/link_last}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>