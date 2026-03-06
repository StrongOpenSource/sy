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

                <article class="movie">
                    <div class="movie-column">
                        <h1>{@name}</h1>
                        <div class="movie-player">
                            <div id="videoFrame">
                                <div id="player">
{@palyer_js}
                                </div>


                            </div>
                        </div>
                    </div>

                </article>
                <h2 class="d">推荐视频</h2>
                <div class="thumbs">
{list type:video mode:rand total:10 title_len:24}
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
{@js_tpl_code}
{@include file:footer}
</body>

</html>