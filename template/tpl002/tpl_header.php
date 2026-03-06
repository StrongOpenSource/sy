<?php exit();?>
        <div class="relative">
            <div class="fixed z-max w-full bg-gradient-to-b from-darkest">
                <div class="sm:container flex justify-between items-center mx-auto px-4">
                    <div class="lg:w-0 lg:flex-1">
                        <a class="text-4xl leading-normal" href="/">
                            <span style="visibility: visible;" class="font-serif">
                                {@var:logo_text}
                        </a>
                    </div>
                    <div class="relative xl:hidden flex items-center space-x-4">
                        <a class="mtoggleSearch rounded-md text-nord6 hover:text-primary focus:outline-none">
                            <span class="sr-only">搜索</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                        <div class="relative ml-4">
                            <a class="menu rounded-md text-nord6 hover:text-primary focus:outline-none">
                                <span class="sr-only">菜单</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </a>
                            <div class="menuDropdown z-max origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg hidden">
                                <div class="rounded-md text-nord0 bg-nord5 shadow-xs">
                                    <div class="py-1">
                                        <a href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4">首页</a>
                                        {nav type:video no:v1 count:8}
                                        <a href="{_class_link}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4">{_class_name}</a>
                                        {/nav}
                                        {nav type:bt no:1 count:2 name:国产BT,日本BT}
                                        <a href="{_class_link}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4">{_class_name}</a>
                                        {/nav}
                                        <a class="link flex items-center justify-between px-4 py-2 text-sm leading-5 text-nord0 hover:bg-nord4">
                                            <span>更多好站</span>
                                            <svg class="ml-2 h-5 w-5 text-nord0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
                                        <span class="linkDropdown hidden">
                                            {link area:link_haozhan}
                                            <a href="{_url}" rel="nofollow noopener noreferrer" target="_blank" class="block px-4 py-2 text-sm leading-5 text-nord5 bg-nord3 hover:bg-nord2">{base64}{_text}{/base64}</a>
                                            {/link}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="hidden xl:flex space-x-6 items-center">
                        <a href="/" class="text-base leading-6 font-medium text-nord6 hover:text-primary focus:outline-none">首页</a>
                        {nav type:video no:v1 count:8}
                        <a href="{_class_link}" class="text-base leading-6 font-medium text-nord6 hover:text-primary focus:outline-none">{_class_name}</a>
                        {/nav}
                        {nav type:bt no:1 count:2 name:国产BT,日本BT}
                        <a href="{_class_link}" class="text-base leading-6 font-medium text-nord6 hover:text-primary focus:outline-none">{_class_name}</a>
                        {/nav}
                        <div class="relative">
                            <a class="link text-nord6 group inline-flex items-center text-base leading-6 font-medium hover:text-primary focus:outline-none">
                                <span>更多好站</span>
                                <svg class="ml-1 h-5 w-5 text-nord6 group-hover:text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <div class="linkDropdown right-0 z-max origin-top-right absolute mt-2 w-56 rounded-md shadow-lg hidden">
                                <div class="rounded-md text-nord0 bg-nord5 shadow-xs">
                                    <div class="py-1">
                                        {link area:link_haozhan}
                                        <a href="{_url}" rel="nofollow noopener noreferrer" target="_blank" class="block px-4 py-2 text-sm leading-5 text-nord0 hover:bg-nord4">{base64}{_text}{/base64}</a>
                                        {/link}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="toggleSearch rounded-md text-nord6 hover:text-primary focus:outline-none">
                            <span class="sr-only">搜索</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </nav>
                </div>
                <form method="get" action="/search.php" class="search hidden">
                    <div class="sm:container mx-auto px-4">
                        <div class="flex justify-between items-center">
                            <div class="flex rounded-md shadow-sm w-full mx-auto">
                                <div class="flex items-stretch grow">
                                    <input name="content" type="text" placeholder="搜一搜" class="bg-nord1 appearance-none border-2 border-nord9 rounded-none rounded-l w-full py-2 px-4 text-nord9 leading-tight focus:outline-none focus:bg-nord0 focus:ring-0 focus:border-nord9" maxlength="50"></div>
                                <button class="-ml-px relative inline-flex items-center px-4 py-2 border-2 border-nord9 text-sm whitespace-nowrap leading-5 font-medium rounded-r-md text-norddark bg-nord9 hover:bg-opacity-90 focus:outline-none focus:border-nord8 active:bg-opacity-80 transition ease-in-out duration-150">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="ml-2">搜索</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="sm:container mx-auto px-4 py-16" style="padding-bottom: 2rem;">
            {ad area:hengfu1}
                <div style="width: 100%;margin: 1px 0px;" class="{_class}">
                <a href="{_url}" target="_blank" rel="nofollow" style="width: 100%;" class="{_class}">
                    <img src="{_image}" style="width: 100%;" class="{_class}"></a>
                </div>

            {/ad}

            <div class="appad">
                <div class="app-abk">
                    {ad area:tubiao1}
                    <a href="{_url}" target="_blank" class="app-abk-item">
                        <div class="app-img" style="margin-top:20px;">
                            <div class="lazy-image abk-image">
                                <img src="{_image}" style="display: inline;"></div>
                        </div>
                        <p>{base64}{_text}{/base64}</p>
                    </a>
                    {/ad}
                </div>
            </div>
        </div>