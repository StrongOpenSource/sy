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
            <div class="flex">
                <div class="hidden lg:flex h-full ml-6 order-last" style="max-width: 300px; min-width: 300px;">
                    <div>
                        {list type:video mode:rand total:12 title_len:40}
                        <div class="flex mb-6">
                            <div class="flex-none mr-4" style="width: 165px;">
                                <div>
                                    <div class="thumbnail group">
                                        <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                            <a href="{_url}">
                                                <img class="lozad w-full" data-src="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/loading.png"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-1" style="width: 119px;">
                                <div class="flex flex-wrap content-center h-full">
                                    <div class="max-h-14 overflow-y-hidden text-sm">
                                        <a href="{_url}" class="text-secondary">{_title}</a></div>
                                </div>
                            </div>
                        </div>
                        {/list}
                    </div>
                </div>
                <div class="flex-1 order-first">
                    <div class="mt-4">
                        <h1 class="text-base lg:text-lg text-nord6" style="word-break: break-all;overflow-wrap: break-word;">{@name}</h1>
                    </div>


        <div id="video-container"></div>
{@palyer_js}
                    <div class="sm:mx-0 mb-8 rounded-0 sm:rounded-lg"  style="margin-top: 30px;">
                        <div class="mb-4 border-b border-gray-700">
                            <nav class="-mb-px flex space-x-2 sm:space-x-3">
                                <a class="group inline-flex items-center whitespace-nowrap pb-4 px-2 border-b-2 border-transparent font-medium text-sm text-gray-500 border-red-400 text-red-400">
                                    <svg class="hidden sm:block -ml-0.5 mr-2 h-5 w-5 text-gray-500 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                    </svg>
                                    <span>推荐内容</span>
                                </a>
                            </nav>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-5">
                            {list type:video mode:rand total:16 title_len:24}
                            <div class="thumbnail group">
                                <div class="relative aspect-w-16 aspect-h-9 rounded overflow-hidden shadow-lg">
                                    <a href="{_url}">
                                        <img class="lozad w-full" data-src="{_pic}" src="/template/{@var:cms_config_tpl_dir}/picture/loading.png"></a>
                                </div>
                                <div class="my-2 text-sm text-nord4 truncate">
                                    <a class="text-secondary group-hover:text-primary" href="{_url}">{_title}</a></div>
                            </div>
                            {/list}
                        </div>
                    </div>
                </div>
            </div>
        </div>
{@js_tpl_code}
{@include file:footer}
</body>
</html>
