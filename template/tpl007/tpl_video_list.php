<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>{@page_title}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js" type="application/javascript"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/html.css?3" rel="stylesheet" type="text/css" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/style.css" rel="stylesheet" type="text/css" />
    <script></script>
    <style>
        #dplayer button {
            border-color: #000 !important;
            background-color: #000 !important;
        }

        #dplayer .dplayer-menu,
        #dplayer .dplayer-menu-show {
            display: none !important;
        }

        .pages ul a.dqy,
        .pages ul a.syy,
        .pages ul a.xyy {
            border-color: #F3ACBD !important;
            background-color: #F3ACBD !important;
            color: #fff;
        }

        #site-navigation>ul>li>a {
            padding: 0 0.5em;
        }
    </style>
{@common_head}
{@json_code}
</head>

<body class="home blog wp-embed-responsive hfeed">
    <div id="page">

        {@include file:header}

        <div id="content" class="site-content row">
            <div id="primary" class="content-area ">
                <main id="main" class="site-main " role="main">
                    <header class="page-header">
                        <h2 class="widget-title"><span class="">当前位置：</span><a href="/" style="color: #fff;" class="">首页</a> &gt; <a href="{@class_link}" style="color: #fff;" class="">{@class_name}</a></h2>
                    </header>
                    <div class="videos-list">


                        {list type:video mode:list title_len:24}
                        <article class="loop-video thumb-block full-width post-151135 post type-post status-publish format-standard has-post-thumbnail hentry category-amateur ">
                            <a href="{_url}">
                                <div class="post-thumbnail">
                                    <div class="post-thumbnail-container">
                                        <img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" data-original="{_pic}">
                                    </div>
                                </div>
                                <header class="entry-header"><span>{_title}</span></header>
                            </a>
                        </article>
                        {/list}


                    </div>
                    <div class="pagination pages">
                        <ul>
                            {link_first}
                            <li class="xiayiye"><a class="xyy" href="{_url}">首页</a></li>
                            {/link_first}
                            {link_pre1}
                            <li class="xiayiye"><a class="xyy" href="{_url}">上一页</a></li>
                            {/link_pre1}
                            {links_pre max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_pre}
                            <li class="fenyeyema diyiye dangqianye"><a class="fyym dyy dqy" href="javascript:;">{@page_cur}</a></li>
                            {links_next max:3}<li class="fenyeyema"><a class="fyym" href="{_url}">{_page_no}</a></li>{/links_next}
                            {link_next1}
                            <li class="xiayiye"><a class="xyy" href="{_url}">上一页</a></li>
                            {/link_next1}
                            {link_last}
                            <li class="xiayiye"><a class="xyy" href="{_url}">尾页</a></li>
                            {/link_last}

                        </ul>
                    </div>
                    <div class="clear"></div>
                </main>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>