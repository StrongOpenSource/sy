<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <title>{@page_title}</title>
    <meta name="robots" content="index,nofollow" />
    <meta name="referrer" content="always" />
    <base >
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#111">
    <link rel="icon" href="/style/ico.png" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/common.css" type="text/css" rel="stylesheet" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/styles.css" type="text/css" rel="stylesheet" />
    <link href="/template/{@var:cms_config_tpl_dir}/css/engine.css" type="text/css" rel="stylesheet" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/libs.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <style>
        .dangqianye a,
        .dangqianye a:hover {
            background: var(--accent);
            color: #fff;
            border-color: var(--accent);
        }

        .pagination__pages a {
            font-size: 22px;
        }

        .footer {
            font-size: 18px;
        }
    </style>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}

                <section class="sect">
                    <div class="sect__header d-flex ai-center">
                        <h2 class="sect__title flex-grow-1">
                            <span class="fal fa fa-bars"></span>{@class_name}
                        </h2>
                    </div>
                    <div class="sect__content">
                        <div id="m-cont">


{list type:video mode:list title_len:40}                            <li class="d-flex fd-column grid-item">
                                <a class="thumb d-flex fd-column grid-item" href="{_url}">
                                    <div class="thumb__desc">
                                        <h3 class="thumb__title line-clamp">{_title}</h3>
                                    </div>
                                    <div class="thumb__img img-fit-cover img-responsive order-first icon-at-left img-video"><img class="lazy" src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" original="{_pic}">
                                    </div>
                                </a>
                            </li>
{/list}


                            <div class="pagination ignore-select" id="pagination">
                                <div class="pagination__pages d-flex jc-center" style="list-style: none;">
{link_first}<li class="syy"><a href="{_url}">首页</a></li>{/link_first}
{links_pre max:3}<li class="shangyiye"><a href="{_url}">{_page_no}</a></li>{/links_pre}
<li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;">{@page_cur}</a></li>
{links_next max:3}<li class="shangyiye"><a href="{_url}">{_page_no}</a></li>{/links_next}
{link_last}<li class="xyy"><a href="{_url}">尾页</a></li>{/link_last}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
{@js_tpl_code}
{@include file:footer}
</body>

</html>