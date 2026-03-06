<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,viewport-fit=cover" />
    <title>{@page_title}</title>
    <link href="/template/{@var:cms_config_tpl_dir}/css/css.css" rel="stylesheet">
    <link href="/template/{@var:cms_config_tpl_dir}/css/g.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/favicon.ico">
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/style.css">
<script src="/template/{@var:cms_config_tpl_dir}/js/common.js" type="application/javascript"></script>
{@common_head}
{@json_code}
</head>

<body>
{@include file:header}



    <table border="0" align="center" cellpadding="0" cellspacing="0" id="daohang1">
        <tr>
            <td>
                <h3>{@class_name}</h3>
            </td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2">
{list type:bt mode:list title_len:40}
                <a href='{_url}'>
                    <table border='0' cellpadding='0' cellspacing='0' id='nrtp'>
                        <tr>
                            <td valign='bottom' bgcolor='#FFFFFF' class='lazy tupian' data-original='{_pic}'>
                            </td>
                        </tr>
                        <tr>
                            <td valign='top'><a class='tuzi'>{_title}</a></td>
                        </tr>
                    </table>
                </a>
{/list}
        </tr>
    </table>
    <div class="feny">
        {link_first}<a href="{_url}">首页</a>{/link_first}&nbsp;
        {links_pre max:3}<a href="{_url}">{_page_no}</a>{/links_pre}&nbsp;
        &nbsp;<b>{@page_cur}</b>&nbsp;
        {links_next max:3}<a href="{_url}">{_page_no}</a>{/links_next}&nbsp;
        {link_last}<a href="{_url}">尾页</a>{/link_last}
    </div>

    <div class="ydfen">
        {link_first}<a href="{_url}">首页</a>{/link_first}
        {link_pre1}<a href="{_url}">上一页</a>{/link_pre1}
        <b>{@page_cur}/{@page_total}</b>
        {link_next1}<a href="{_url}">下一页</a>{/link_next1}
        {link_last}<a href="{_url}">尾页</a>{/link_last}
    </div>
{@js_tpl_code}
{@include file:footer}
</body>

</html>