<!DOCTYPE html>
<html>
<head lang="zh-cn">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{@page_title}</title>
    <meta name="keywords" content="{@site_keyword}" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/ate.css" type="text/css" />
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/zui.css" type="text/css" />
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>
<body>

{@include file:header}
            <div class="appel"><span id="aui"></span></div>
            <div class="appel">
                <div class="appel-heading clearfix">
                    <h3 class="appel-title">{@class_name}</h3>
                </div>
                <div class="appel-max">
                    <ul class="thumbnail-group clearfix">
{list type:video mode:list title_len:40}
                        <li><a class="thumbnail" href="{_url}"><img class="loadi" data-original="{_pic}" src="/template/{@var:cms_config_tpl_dir}/images/loading.svg"><span class="video-grade"></span></a>
                            <div class="video-info">
                                <h5><a href="{_url}">{_title}</a></h5>
                            </div>
                        </li>
{/list}
                    </ul>
                </div>
                <div class="text-center clearfix">
                    <div class="appel">
                        <center>共{@class_total}条数据,当前{@page_cur}/{@page_total}页</center>
                    </div>
                    <ul class="pagination pagination-lg " style="font-size: 15px;display:block; list-style-type:none;margin:5px;">
{link_first}<li class="page-item disabled fenye"><a href="{_url}">首页</a></li>{/link_first}
{link_pre1}<li class="page-item disabled fenye"><a href="{_url}">上一页</a></li>{/link_pre1}
<li class="page_current"><a class="page_current" href="javascript:;">{@page_cur}</a></li>
{link_next1}<li class="page-item disabled fenye"><a href="{_url}">下一页</a></li>{/link_next1}
{link_last}<li class="page-item disabled fenye"><a href="{_url}">尾页</a></li>{/link_last}
                        <li class="page-item fenye" style="margin-top: 10px;">
                            <input type="text" id="jump_page" style="width: 62px;height:33px;color: black;border: 1px solid #26645D;" />
                            <button class="page_link" style="width: 70px;height:33px;color: #fff;background-color:#26645D;border:0px;" type="button" onclick="location.href='/list.php?id={@var:raw_class_id}&page=__jump__'.replace('__jump__',document.getElementById('jump_page').value)">跳转</button>
                        </li>
                    </ul>
                </div>
            </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>
