<?php exit();?><!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>{@page_title}</title>
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/app.css">
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/set.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/app.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/lang.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/home.js"></script>
{@common_head}
{@json_code}
</head>

<body class="relative">

    {@include file:header}
        <div class="sm:container mx-auto px-4 content-without-search pb-12">
            <h1 class="text-center text-2xl text-nord4 mb-6">{@class_name}</h1>
            <div class="flex justify-between mb-6">
                <div class="relative">
                    <a class="text-nord6 group inline-flex items-center text-base leading-6 font-medium hover:text-primary focus:outline-none">
                        <span>当前 {@page_cur} / {@page_total} 页</span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">


                {list type:bt mode:list title_len:24}
                <div class="thumbnail group">
                    <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                        <a href="{_url}">
                            <img class="lozad w-full" data-src="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/loading.png">
                        </a>
                    </div>
                    <div class="my-2 text-sm text-nord4 truncate">
                        <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                </div>

                {/list}
            </div>
            <nav class="flex items-center justify-between mt-6">
                <div class="flex justify-between flex-1 md:hidden">

                    {link_pre1}
                    <a href="{_url}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-nord4 rounded-lg leading-5 bg-nord2 active:bg-nord1 transition ease-in-out duration-150">上一页</a>
                    {/link_pre1}
                    
                    <form action="/list.php" method="GET" class="relative">
                        <input type="text" name="page" id='pca' class="bg-nord1 appearance-none w-28 border-2 border-nord3 rounded-lg px-3 py-2 text-nord4 leading-5 focus:outline-none focus:text-nord9 focus:bg-nord0 focus:ring-0 focus:border-nord9" maxlength="4">
                        <input type="hidden" name="id" value="{@var:raw_class_id}">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm">/ {@page_total}</span></div>
                    </form>
                    {link_next1}
                    <a href="{_url}" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-nord4 rounded-lg leading-5 bg-nord2 active:bg-nord1 transition ease-in-out duration-150">下一页</a>
                    {/link_next1}
                    </div>
                <div class="hidden md:flex-1 md:flex md:items-center md:justify-center">
                    <span class="relative z-0 inline-flex shadow-sm">


                        {link_pre1}
                        <a href="{_url}" class="relative inline-flex items-center px-2 py-2 text-sm font-medium text-nord4 rounded-lg leading-5 hover:bg-nord1 active:bg-nord1 transition ease-in-out duration-150">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        {/link_pre1}


                        {links_pre max:3}
                        <a href="{_url}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-nord4 leading-5 rounded-lg hover:bg-nord1 focus:z-10 focus:outline-none active:bg-nord1 transition ease-in-out duration-150">{_page_no}</a>
                        {/links_pre}

                        <span aria-current="page">
                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium rounded-lg text-nord6 bg-primary cursor-default leading-5">{@page_cur}</span></span>

                        {links_next max:3}
                        <a href="{_url}" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-nord4 leading-5 rounded-lg hover:bg-nord1 focus:z-10 focus:outline-none active:bg-nord1 transition ease-in-out duration-150">{_page_no}</a>
                        {/links_next}


                        {link_next1}
                        <a href="{_url}" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-nord4 rounded-lg leading-5 hover:bg-nord1 active:bg-nord1 transition ease-in-out duration-150" aria-label="pagination.next">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                        </a>
                        {/link_next1}
                </div>
            </nav>

            <div class="hidden md:flex md:flex-col md:items-center md:justify-center mt-4 text-nord9 space-y-6">
                <div>使用键盘上的 ← 与 → 键来转页</div>
                <div>
                    <form action="/list.php" method="GET" class="relative">
                        <input type="hidden" name="id" value="{@var:raw_class_id}">
                        <input type="text" name="page" id='pcb' class="bg-nord1 appearance-none w-28 border-2 border-nord3 rounded-lg px-3 py-2 text-nord4 leading-5 focus:outline-none focus:text-nord9 focus:bg-nord0 focus:ring-0 focus:border-nord9" maxlength="4">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <span class="text-gray-500 sm:text-sm" id="price-currency">/ {@page_total}</span></div>
                    </form>
                </div>
            </div>

            <script type="text/javascript">window.document.onkeydown = disableRefresh;
                window.onload = function() {
                    document.getElementById('pca').value = j.p.c;
                    document.getElementById('pcb').value = j.p.c;
                };
                function disableRefresh(evt) {
                    evt = (evt) ? evt: window.event
                    if (evt.keyCode) {
                        if (evt.keyCode == 37) {
                            window.location.href = j.p.p1.a;
                        }
                        if (evt.keyCode == 39) {
                            window.location.href = j.p.n1.a;
                        }
                    }
                }
            </script>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>
