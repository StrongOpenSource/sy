    <div class="relative">
        <div class="fixed z-max w-full bg-gradient-to-b from-darkest">
            <div class="sm:container flex justify-between items-center mx-auto px-4">
                <div class="lg:w-0 lg:flex-1">
                    <a class="text-4xl leading-normal" href="/">
                        <span style="visibility: visible;" class="font-serif">
                    <!--    <img class="img" src="/template/{@var:cms_config_tpl_dir}/picture/logo.png" alt="logo" style="display: inline;">-->
                    <img class="img" src="/template/{@var:cms_config_tpl_dir}/picture/155eb7af175ea06cc08cee0cdf896075.png" alt="logo" style="display: inline;width:200px;height:65px;">
                    </span>
                    </a>
                </div>
                <div class="relative xl:hidden flex items-center space-x-4">
                    <a class="mtoggleSearch rounded-md text-nord6 hover:text-primary focus:outline-none" name="titleTag">
                        <span class="sr-only">搜索</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    <!--<div class="relative z-max madou-login">
                    <img width="35" height="35" src="/template/{@var:cms_config_tpl_dir}/picture/touxiang.png" style="border-radius:50%;">
                </div>-->
                    <div class="relative ml-4">
                        <a class="menu rounded-md text-nord6 hover:text-primary focus:outline-none" name="titleTag">
                            <span class="sr-only">菜单</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </a>
                        <div class="menuDropdown z-max origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg hidden">
                            <div class="rounded-md text-nord0 bg-nord5 shadow-xs">
                                <div class="py-1">
                                    <a href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4" name="titleTag">首页</a>
                                    {nav type:video no:v1 count:8}
                                    <a href="{_class_link}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4" name="titleTag">{_class_name}</a>
                                    {/nav}
                                    {nav type:bt no:1 count:2 name:国产BT,日本BT}
                                    <a href="{_class_link}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-nord4" name="titleTag">{_class_name}</a>
                                    {/nav}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <nav class="hidden xl:flex space-x-6 items-center">
                    {nav type:video no:v1 count:8}
                    <a href="{_class_link}" class="text-base leading-6 font-medium text-nord6 hover:text-primary focus:outline-none" name="titleTag">{_class_name}</a>
                    {/nav}
                    {nav type:bt no:1 count:2 name:国产BT,日本BT}
                    <a href="{_class_link}" class="text-base leading-6 font-medium text-nord6 hover:text-primary focus:outline-none" name="titleTag">{_class_name}</a>
                    {/nav}

                    <a class="toggleSearch rounded-md text-nord6 hover:text-primary focus:outline-none" name="titleTag">
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
                                <input name="content" type="text" placeholder="搜一搜" class="bg-nord1 appearance-none border-2 border-nord9 rounded-none rounded-l w-full py-2 px-4 text-nord9 leading-tight focus:outline-none focus:bg-nord0 focus:ring-0 focus:border-nord9" maxlength="50">
                            </div>
                            <button class="-ml-px relative inline-flex items-center px-4 py-2 border-2 border-nord9 text-sm whitespace-nowrap leading-5 font-medium rounded-r-md text-norddark bg-nord9 hover:bg-opacity-90 focus:outline-none focus:border-nord8 active:bg-opacity-80 transition ease-in-out duration-150">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="ml-2">搜索</span>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div style="display:flex;flex-direction:row;justify-content:center;background-color: ##ffffff;">
        <div style="display:flex;flex-direction:column;width:1210px;" class="headerTop">
            <div class="hbanner">
{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow" style="width: 100%;" class="{_class}">
        <img src="{_image}" style="width: 100%;" class="{_class}"></a>
</div>
{/ad}
            </div>
        </div>
    </div>
    <style>
        .bg-gradient-to-b {
            background-image: linear-gradient(to bottom, #a9c7c6, #a9c7c6 100vh, #a9c7c6 200vh);
        }

        a[name="whiteTag"] {
            color: white;
        }

        a[name="titleTag"] {
            font-weight: bold;
        }

        /*白色调整*/
        body {
            background-image: linear-gradient(to bottom, #ffffff, #ffffff 100vh, #ffffff 200vh);
        }

        .text-zinc-50 {
            color: #11141e;
        }

        .text-nord6 {
            color: #11141e;
        }

        .text-secondary {
            color: #11141e;
        }

        .text-nord4 {
            color: #11141e;
        }

        .text-gray-500 {
            color: #11141e;
        }

        .text-gray-400 {
            color: #11141e;
        }

        .play_title {
            color: #11141e;
        }

        .play-notice {
            color: #11141e;
        }

        .play-sort-btn {
            color: #11141e;
        }

        .bg-nord1 {
            background-color: rgb(256 256 256 / var(--tw-border-opacity));
        }

        /*tag style*/
        @media (min-width: 320px) {
            .grid-cols-txt-102 {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 5px 5px;
            }

            .fs-12-162 {
                font-size: 14px;
            }
        }

        @media (min-width: 640px) {
            .grid-cols-txt-102 {
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 5px 5px;
            }

            .fs-12-162 {
                font-size: 14px;
            }
        }

        @media (min-width: 768px) {
            .grid-cols-txt-102 {
                grid-template-columns: repeat(6, minmax(0, 1fr));
                gap: 5px 5px;
            }

            .fs-12-162 {
                font-size: 14px;
            }
        }

        @media (min-width: 1024px) {
            .grid-cols-txt-102 {
                grid-template-columns: repeat(10, minmax(0, 1fr));
                gap: 5px 5px;
            }

            .fs-12-162 {
                font-size: 15px;
            }
        }

        .item-tags-txt2 span {
            width: 100%;
            padding: 4px 0;
            overflow: hidden;
            border-radius: 4px;
            background-color: #081321;
        }

        *,
        :before,
        :after {
            box-sizing: border-box;
        }

        .tagAreaa {
            color: #fff;
            text-decoration: none;
        }

        .item-tags-txt2 span b {
            clear: both;
            text-align: center;
            color: #fedb71;
        }

        .line-one2 {
            display: -webkit-box;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }

        .item-tags-txt2 span:hover {
            animation-name: changeColor;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;

        }

        .item-tags-txt2 span:hover b {
            color: #111;
            font-weight: bold;
        }

        .item-tags-txt2 span:hover em {
            color: #222;
        }



        .headerTop {
            margin-top: 100px;
        }

        .z-max {
            z-index: 99998;
        }



        @keyframes changeColor {
            from {
                opacity: 1.0;
            }

            50% {
                opacity: 0.4;
            }

            to {
                opacity: 1.0;
            }
        }

        .masterhavor {
            list-style: none;
            padding-left: 0;
        }

        .masterhavor li:hover {
            animation-name: changeColor;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;

        }



        .masterhavorli {
            white-space: nowrap;
            overflow: hidden;
            width: 23%;
            max-width: 190px;
            text-align: center;
            margin: 2px;
            float: left;
            padding: 5px;
            border-radius: 10px;

        }

        .masterhavora span {
            font-size: 20px;
            font-weight: bold;
        }


        .masterhavorli2 {
            white-space: nowrap;
            overflow: hidden;
            width: 23%;
            max-width: 190px;
            text-align: center;
            margin: 2px;
            float: left;
            padding: 5px;
            border-radius: 10px;

        }


        .masterhavorli3 {
            white-space: nowrap;
            overflow: hidden;
            width: 23%;
            max-width: 190px;
            text-align: center;
            margin: 2px;
            float: left;
            padding: 5px;
            border-radius: 10px;
        }

        .masterhavora3 {
            font-size: 14px;
            font-weight: bold;
            color: black;
        }

        .masterhavorli4 {
            white-space: nowrap;
            overflow: hidden;
            width: 23%;
            max-width: 190px;
            text-align: center;
            margin: 2px;
            float: left;
            padding: 5px;
            border-radius: 10px;


        }


        .rightd {
            position: fixed;
            top: 54%;
            transform: translateY(-50%);
            width: 120px;
            height: 120px;
            right: 0;
            z-index: 9999;
        }

        .lefttd {
            position: fixed;
            top: 54%;
            transform: translateY(-50%);
            width: 120px;
            height: 120px;
            left: 0;
            z-index: 9999;
        }

        .undertd {
            position: fixed;
            top: 86.5%;
            left: 50%;
            height: 10%;
            width: 1170px;
            margin: 0 auto;
            transform: translate(-50%, 0px);
            z-index: 9999;
        }

        .toptd {
            position: fixed;
            top: 0;
            left: 50%;
            height: 10%;
            width: 1170px;
            transform: translate(-50%, 0px);
            z-index: 99999;
        }


        .photo-two {
            display: inline-block;
            display: block;
            height: 90px;
            margin: 10px;
            text-align: center;
        }

        .photo-two a {
            line-height: 12px;

        }

        .photo-two img {
            border-radius: 12%;
            height: 60px;
            width: 60px;
        }



        @media screen and (max-width:1280px) {

            .photo-two img {
                border-radius: 12%;
                height: 60px;
                width: 60px;
            }

            .rightd {
                width: 100px;
                height: 100px;
            }

            .lefttd {

                width: 100px;
                height: 100px;
            }

            .undertd {

                height: 10%;
                width: 100%;

            }

            .toptd {
                height: 10%;
                width: 100%;
            }
        }

        @media screen and (max-width:980px) {

            .headerTop {
                margin-top: 15px;
            }

            /*上方橫幅廣告--*/
            .hbanner {
                margin-top: 50px;
            }

            .photo-two {
                width: 20%;
                margin: 4px;
            }

            .photo-two img {
                border-radius: 12%;
                height: 58px;
                width: 58px;
            }

            .rightd {

                width: 90px;
                height: 90px;

            }

            .lefttd {
                width: 90px;
                height: 90px;
            }

            .undertd {

                height: 10%;
                width: 100%;

            }

            .toptd {
                height: 10%;
                width: 100%;
            }


        }

        @media screen and (max-width:750px) {


            .masterhavora span {
                font-size: 10px;
            }

            .photo-two img {
                border-radius: 12%;
                height: 52px;
                width: 52px;
            }

            .rightd {
                width: 90px;
                height: 90px;
            }

            .lefttd {
                width: 90px;
                height: 90px;
            }

            .undertd {

                height: 10%;
                width: 100%;

            }

            .toptd {
                height: 10%;
                width: 100%;
            }
        }
    </style>