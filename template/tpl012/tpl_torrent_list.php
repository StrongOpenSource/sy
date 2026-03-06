<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="robots" content="index, follow" />
    <meta charset="UTF-8" />
    <meta name="referrer" content="always">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{@page_title}</title>
    <link media="all" href="/template/{@var:cms_config_tpl_dir}/css/autoptimize.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/iconfont.css" rel="stylesheet">
    <style>
        @media (min-width: 768px) {
            .topo-menu ul a {
                display: block;
                padding: 0 10px;
                line-height: 42px;
                color: #fff;
                font-size: 18px;
                font-weight: 500;
                width: 122.01px;
                height: 42px;
                border-radius: 10px;
                text-align: center;
                font-size: 1rem;
            }

            .logo-nome {
                color: #fff;
                background-color: #161616;
                font-size: 26px;
                font-weight: 600;
                height: 40px;
                display: inline-block;
                padding: 10px 0px 0;
            }
        }

        .paginacao li a.dqy {
            color: #FF0000;
        }
    </style>
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body class="archive category category-porn category-58">


    {@include file:header}



    <div class="meio">
        <div class="container">
            <h3><i class="iconfont icon-all"></i> {@class_name}</h3>
            <div class="videos">

{list type:bt mode:list title_len:40}
                <div class="video">
                    <div class="video-thumb">
                        <a href="{_url}" class="thumb">
                            <img width="352" height="198" src='/template/{@var:cms_config_tpl_dir}/picture/lazysizes.svg' data-src="{_pic}" class="lazyload">
                            <span class="video-play "></span>
                            <span class="video-preview"></span>
                            <span class="video-slider"></span>
                        </a>
                    </div>
                    <a>
                        <span class="video-titulo">{_title}</span>
                    </a>
                    <div class="clearfix"></div>
                </div>
{/list}
                <div class="clearfix">
                </div>
            </div>



            <ul class="paginacao">



{link_first}<li><a href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li><a href="{_url}">上一页</a></li>{/link_pre1}
{links_pre max:3}<li><a href="{_url}">{_page_no}</a></li>{/links_pre}
<li><a href="javascript:;" class="dqy">{@page_cur}</a></li>
{links_next max:3}<li><a href="{_url}">{_page_no}</a></li>{/links_next}
{link_next1}<li><a href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li><a href="{_url}">尾页</a></li>{/link_last}
            </ul>
{@js_tpl_code}
{@include file:footer}
</body>

</html>