
        <div class="mb-5 lg:mb-10">
    <a href="#">
        <span class="sr-only">返回顶部</span>
        <svg class="w-8 h-8 mx-auto text-nord6 hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path>
        </svg>
    </a>
</div>

<div id="friendtitle" style="display:flex;flex-direction:row;justify-content:center;background-color: #ffffff;">

<div style="display:flex;flex-direction:column;width:1210px;">
    <div><h2 style="display: inline-block;font-weight:bold;font-size:20px;margin-bottom: 10px;color:#ff9905;margin: 5px auto 5px;">友情链接<h2></div>
        <div style="display: flex;flex-wrap: wrap;margin:5px;" >
         <!--*401~400 上方合作夥伴--> 
         
         <ul class="masterhavor" style="width:100%;">


            {link area:link_yqlj}

                                        <li class="masterhavorli3" style="background:#a9c7c6;">
                                       <a href="{_url}" target="_blank" class="masterhavora">
                                           <span style="color:#5e6062">{base64}{_text}{/base64}<span></a>
                                        </li>


            {/link}




            </ul>
    </div>
    </div>
</div>




<footer aria-labelledby="footerHeading" class="sm:container mx-auto px-4">
    <div class="max-w-7xl mx-auto py-12 lg:py-16">
        <h2 id="footerHeading" class="sr-only">页尾</h2>
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="space-y-4 xl:col-span-1">
                        <a class="text-4xl leading-normal" href="/">
                            <span style="visibility: visible;" class="font-serif">
                        <!--<img class="img" src="/template/{@var:cms_config_tpl_dir}/picture/logo.png" alt="logo" style="display: inline;">-->
                        <img class="img" src="/template/{@var:cms_config_tpl_dir}/picture/155eb7af175ea06cc08cee0cdf896075.png" alt="logo" style="display: inline;width:200px;height:65px;">
                    </span>
                        </a>
                        <p class="text-gray-500 text-base">
                           {base64}{@var:bottom_statement}{/base64}
                        </p>
                    </div>
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
                                    {link area:link_yekeyikan}
                                    <li><a href="{_url}" target="_blank" class="text-base text-gray-500 hover:text-primary">{base64}{_text}{/base64}</a></li>
                                    {/link}
                                </ul>
        </div>
    </div>
                    </div>
                </div>
                <div class="my-12 border-t border-gray-700 pt-8">
                    <p class="text-base text-gray-400 xl:text-center">
                        Copyright © 2024 {@var:site_name} All rights reserved
                    </p>
                </div>
            </div>
            </footer>

{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}