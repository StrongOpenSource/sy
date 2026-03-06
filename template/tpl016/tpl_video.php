<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>{@page_title}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
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

            <div class="headline">
                <h1>{@name}</h1>
            </div>
            <div class="block-video">
                <div class="video-holder">
                    <div class="player">
                        <div class="player-holder">
{@palyer_js}
                        </div>
                    </div>

                </div>
            </div>
            <div class="related-videos" id="list_videos_related_videos">
                <ul class="list-sort" id="list_videos_related_videos_filter_list">
                    <li><span>相关视频</span></li>
                </ul>
                <div class="box">
                    <div class="list-videos">
                        <div class="margin-fix" id="list_videos_related_videos_items">
{list type:video mode:rand total:12 title_len:40}
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
            </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>