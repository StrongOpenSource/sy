<?php exit();?><!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>{@page_title}</title>
        <meta http-equiv="keywords" content="{@site_keyword}">
        <meta http-equiv="description" content="{@site_desc}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/app.css?4">
        <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.js"></script>
        <script src="/template/{@var:cms_config_tpl_dir}/js/set.js"></script>
        <script src="/template/{@var:cms_config_tpl_dir}/js/app.js"></script>
        <script src="/template/{@var:cms_config_tpl_dir}/js/lang.js"></script>
        <script src="/template/{@var:cms_config_tpl_dir}/js/home.js?3"></script>
{@common_head}
{@json_code}
    <body class="relative">

        {@include file:header}
        <div class="is-home  pb-12">
            <div class="flex flex-col justify-center content-center text-center py-6">
                <div class="container mx-auto px-4 max-w-xl">
                    <h1 class="text-3xl tracking-tight leading-10 font-serif text-zinc-50 sm:text-4xl sm:leading-none mb-8" style="visibility: visible;">搜索你想看的
                        <span class="text-primary">视频</span></h1>
                    <form class="w-full mx-auto" method="get" action="search.php">
                        <div class="flex rounded-md shadow-sm w-full mx-auto">
                            <div class="relative flex items-stretch grow focus-within:z-10">
                                <input name="content" type="text" class="block w-full rounded-none rounded-l-md p-3 border border-gray-300 transition ease-in-out duration-150 sm:leading-5 focus:outline-none focus:border-primary focus:ring focus:ring-nord11 focus:ring-opacity-50 placeholder-gray-400" placeholder="搜一搜" maxlength="50"></div>
                            <button class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm leading-5 font-medium rounded-r-md text-gray-700 bg-gray-50 hover:text-gray-500 hover:bg-white focus:outline-none focus:ring-blue-500 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="ml-2 w-full">搜索</span></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:video index:1}" class="text-nord4 hover:text-primary">{@class_name type:video index:1}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:video index:1}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:video index:1 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>



            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:video index:2}" class="text-nord4 hover:text-primary">{@class_name type:video index:2}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:video index:2}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:video index:2 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>



            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:video index:3}" class="text-nord4 hover:text-primary">{@class_name type:video index:3}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:video index:3}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:video index:3 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>




            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:video index:4}" class="text-nord4 hover:text-primary">{@class_name type:video index:4}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:video index:4}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:video index:4 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>




            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:bt index:1}" class="text-nord4 hover:text-primary">{base64}国产磁力{/base64}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:bt index:1}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:bt index:1 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>


            <div class="sm:container mx-auto mb-4 px-4">
                <div class="flex items-center justify-between pt-10 pb-6">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-nord6 sm:text-3xl sm:truncate"><a href="{@class_link type:bt index:2}" class="text-nord4 hover:text-primary">{base64}日本磁力{/base64}</a></h2></div>
                    <div class="flex">
                        <a href="{@class_link type:bt index:2}" class="text-nord4 hover:text-primary">更多
                            <svg class="w-6 h-6 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                        {list type:bt index:2 total:8 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" src="{_pic}"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                        {/list}
                </div>
            </div>


        </div>

{@js_tpl_code}
{@include file:footer}
    </body>

</html>