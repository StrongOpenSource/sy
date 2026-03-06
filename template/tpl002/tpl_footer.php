
        
        <div class="mt-8 mb-5 lg:mb-10">
            <a href="#">
                <span class="sr-only">返回顶部</span>
                <svg class="w-8 h-8 mx-auto text-nord6 hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path>
                </svg>
            </a>
        </div>
        <footer aria-labelledby="footerHeading" class="sm:container mx-auto px-4">
            <div class="max-w-7xl mx-auto py-12 lg:py-16">
                <h2 id="footerHeading" class="sr-only">页尾</h2>
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-4 xl:col-span-1">
                        <a class="text-4xl leading-normal" href="/">
                            <span style="visibility: visible;" class="font-serif">
                                {@var:logo_text}
                            </span>
                        </a>
                        <p class="text-gray-500 text-base">{base64}{@var:site_statement}{/base64}</p></div>
                    <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{base64}在线视频{/base64}</h3>
                                <ul class="mt-4 space-y-4">
                                    {nav type:video no:v2 count:4}
                                        <li><a href="{_class_link}" class="text-base text-gray-500 hover:text-primary">{_class_name}</a></li>
                                    {/nav}
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">{base64}磁力种子{/base64}</h3>
                                <ul class="mt-4 space-y-4">
                                    {nav type:bt no:1 count:4}
                                        <li><a href="{_class_link}" class="text-base text-gray-500 hover:text-primary">{_class_name}</a></li>
                                    {/nav}
                                </ul>
                            </div>
                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">链接</h3>
                                <ul class="mt-4 space-y-4">
                                    <li>
                                        <a href="{@var:link_fix_url}"  class="text-base text-gray-500 hover:text-primary">地址发布</a></li>
                                    <li>
                                        <a href="{@var:link_contact}" class="text-base text-gray-500 hover:text-primary">联系我们</a></li>
                                    <li>
                                        <a href="{@var:link_adv}" class="text-base text-gray-500 hover:text-primary">投放广告</a></li>
                                    <li>
                                        <a href="{@var:link_backup_url}" class="text-base text-gray-500 hover:text-primary">备用地址</a></li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">也可看看</h3>
                                <ul class="mt-4 space-y-4">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-12 border-t border-gray-700 pt-8">
                    <p class="text-base text-gray-400 xl:text-center">{base64}Copyright © {@var:site_name} All rights reserved{/base64}</p></div>
            </div>
        </footer>

{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}