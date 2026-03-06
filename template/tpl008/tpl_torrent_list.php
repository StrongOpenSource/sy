<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>{@page_title}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="/template/{@var:cms_config_tpl_dir}/css/main.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min2.2.4.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
    <style>
        .pagination ul {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .pagination ul li {
            display: inline;
        }

        .pagination ul li a {
            float: left;
            background-color: #ffffff !important;
            color: #4a545a !important;
            height: 32px;
            font-size: 22px;
            line-height: 32px;
            margin-bottom: 8px !important;
            margin-right: 8px !important;
            position: relative;
            display: inline-block;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            min-width: 58px;
            margin: 0;
            padding: 0 16px;
            overflow: hidden;
            font-weight: 500;
            letter-spacing: .04em;
            white-space: nowrap;
            text-align: center;
            text-transform: uppercase;
            text-decoration: none;
            vertical-align: middle;
            background: 0 0;
            border: none;
            border-radius: 2px;
            outline: 0;
            cursor: pointer;
            -webkit-transition: all .2s cubic-bezier(.4, 0, .2, 1), -webkit-box-shadow .2s cubic-bezier(.4, 0, 1, 1);
            transition: all .2s cubic-bezier(.4, 0, .2, 1), -webkit-box-shadow .2s cubic-bezier(.4, 0, 1, 1);
            transition: all .2s cubic-bezier(.4, 0, .2, 1), box-shadow .2s cubic-bezier(.4, 0, 1, 1);
            transition: all .2s cubic-bezier(.4, 0, .2, 1), box-shadow .2s cubic-bezier(.4, 0, 1, 1), -webkit-box-shadow .2s cubic-bezier(.4, 0, 1, 1);
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            will-change: box-shadow;
            zoom: 1;
            -webkit-user-drag: none;
        }

        .pagination ul a.dqy,
        .pagination ul a:hover {
            background-color: #37bf91 !important;
            color: #ffffff !important;
        }

        @media screen and (max-width: 48em) {
            .navbar {
                display: block;
            }

            .nav_left {
                width: 25%;
                float: left;
            }

            .navbar__logo {
                width: 50%;
                float: left;
            }

            .nav_right {
                float: right;
            }

            .logo__mark {
                line-height: 1.375em;
            }
        }

        @media (max-width: 30em) {
            .cards__item {
                width: 50%;
            }
        }
        }
    </style>
{@common_head}
{@json_code}
</head>

<body class="page finished loaded">

    {@include file:header}


        <main class="page__main">
            <div class="cards">
                <div class="container container--big">
                    <div class="heading">
                        <div class="heading__item">
                            <h1 class="heading__title">
                                {@class_name}</h1>
                        </div>
                    </div>
                    <div class="cards__list" data-items="true">
                        {list type:bt mode:list title_len:40}
                        <div class="cards__item cards_common" data-item-id="69408">
                            <a href="{_url}" class="card">
                                <span class="card__content">
                                    <img src="/template/{@var:cms_config_tpl_dir}/picture/lazy.svg" data-original="{_pic}" class="card__image lazy"/>
                                    <span class="card__icon">
                                        <svg class="icon icon--play" width="32px" height="32px">
                                            <use xlink:href="/template/{@var:cms_config_tpl_dir}/fonts/site.svg#play"></use>
                                        </svg>
                                    </span>
                                </span>
                                <span class="card__footer">
                                    <span class="card__title">{_title}</span>
                                </span>
                            </a>
                        </div>
                        {/list}
                    </div>
                    <div class="pagination">
                        <ul>


                            {link_first}<li class="shangyiye"><a href="{_url}">首页</a></li>{/link_first}
                            {link_pre1}<li class="fenyeyema"><a href="{_url}">上一页</a></li>{/link_pre1}
                            {links_pre max:3}<li class="fenyeyema"><a href="{_url}">{_page_no}</a></li>{/links_pre}
                            <li class="fenyeyema dangqianye"><a class="fyym dqy" href="javascript:;">{@page_cur}</a></li>
                            {links_next max:3}<li class="fenyeyema"><a href="{_url}">{_page_no}</a></li>{/links_next}
                            {link_next1}<li class="xiayiye"><a href="{_url}">下一页</a></li>{/link_next1}
                            {link_last}<li class="xiayiye"><a href="{_url}">尾页</a></li>{/link_last}
                        </ul>
                    </div>
                </div>
                <div class="article">
                    <div class="container container--small">
                    </div>
                </div>
            </div>
        </main>
{@js_tpl_code}
{@include file:footer}
</body>

</html>