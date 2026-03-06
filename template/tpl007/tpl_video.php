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
                    <article id="post-151058" class="post-151058 post type-post status-publish format-standard has-post-thumbnail hentry category-amateur">
                        <div style="background: #000;position: relative;overflow: hidden;">
                            <div id="lmplay"></div>
                        </div>
                        <div class="title-block box-shadow">
                            <h1 class="entry-title" itemprop="name">{@class_name} - {@name}</h1>

                            <div id="player">
{@palyer_js}

                            </div>
                        </div>
                        <div class="under-video-block">
                            <h2 class="widget-title">同类视频</h2>
                            <div>


                            {list type:video mode:rand total:8 title_len:24}
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
                        </div>
                        <div class="clear"></div>
                    </article>
                </main>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>