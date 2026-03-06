<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-type" name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width" />
        <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css?3">
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/search.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
        <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/base.js"></script>
    {@common_head}
    {@json_code}
    </head>

    <body ontouchstart>
        {@include file:header}
        
        <div class="wrap">
            <div class="mod channel-list">
                <div class="title">
                    <h3 id="type">
                        <i class="icon-fire"></i>
                        <a href="{@class_link}">{@class_name}</a>
                    </h3>
                    <span class="total">
                        共有<em id="size">{@class_total}</em>个视频
                    </span>
                </div>
                <div class="row col5 clearfix" id="ShowBox">
                    {list type:video mode:list title_len:24}
                    <dl>
                        <dt>
                            <a href="{_url}" title="" >
                                <img class="nature" src="{_pic}" data-original="{_pic}" alt="" style="transition: all 1s ease 0s; opacity: 1" />
                                <i>
                                </i>
                            </a>
                        </dt>
                        <dd>
                            <a href="{_url}" title="" >
                                <h3>{_title}</h3></a>
                        </dd>
                    </dl>
                    {/list}
                </div>
            </div>
        </div>

        <div class="wrap">
            <div class="pagination">
                {link_first}<a href="{_url}">首页</a>&nbsp;{/link_first}
                {link_pre1}<a href="{_url}">上一页</a>&nbsp;{/link_pre1}
                {links_pre max:3}<a href="{_url}">{_page_no}</a>&nbsp;{/links_pre}
                <b class="p_c">{@page_cur}/{@page_total}</b>&nbsp;
                {links_next max:3}<a href="{_url}">{_page_no}</a>&nbsp;{/links_next}
                {link_next1}<a href="{_url}">下一页</a>&nbsp;{/link_next1}
                {link_last}<a href="{_url}">尾页</a>&nbsp;{/link_last}
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
    </body>
</html>