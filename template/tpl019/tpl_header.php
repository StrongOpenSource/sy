    <style>
        * {
            padding: 0;
            margin: 0;
        }

        body {
            /*background: #355c7d;  fallback for old browsers */
            /*background: -webkit-linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);  Chrome 10-25, Safari 5.1-6 */
            /*background: linear-gradient(to right, #355c7d, #6c5b7b, #c06c84);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(#b73a7c, rgb(82 55 192 / 25%)), url('/template/{@var:cms_config_tpl_dir}/images/photo.jpg');
            /*background: #000000d6;*/
            background-attachment: fixed;
            background-size: 100% auto;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
        }

        body::-webkit-scrollbar {
            /*滚动条整体样式*/
            width: 7px;
            /*高宽分别对应横竖滚动条的尺寸*/
            height: 1px;
        }

        body body::-webkit-scrollbar-thumb {
            /*滚动条里面小方块*/
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
            background: #535353;
        }

        body::-webkit-scrollbar-track {
            /*滚动条里面轨道*/
            -webkit-box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.2);
            border-radius: 0px;
            background: #041618;
        }

        .wrap {
            margin-left: 13%;
            width: 74%;
        }

        header {
            width: 100%;
            padding: 5px 0;
            background-color: rgba(0, 0, 0, 0.3);
        }

        header img {
            width: 200px;
            vertical-align: middle;
        }

        header h1 {
            display: inline !important;
        }

        .header-title {
            font-size: 24px;
            color: #fff;
            font-weight: bold;
            font-style: italic;
            font-family: SimSun STSong;
        }

        .layui-nav-child {
            z-index: 1000 !important;
        }

        .search-wrap {
            margin-left: 20px;
            vertical-align: middle;
            float: right;
            display: none;
        }

        .search-wrap input {
            vertical-align: middle;
            display: inline-block;
            border: 2px solid #eee;
            border-right: 0;
            padding-left: 15px;
            width: 200px;
            height: 30px;
            border-radius: 20px 0 0 20px;
            background-color: #ddd;
            color: #444;
            font-size: medium;
        }

        .search-wrap #searchBtn {
            vertical-align: middle;
            display: inline-block;
            background: #1E9fff;
            color: #efefef;
            border: 0;
            height: 34px;
            margin-left: -8px;
            padding: 0 15px 0 12px;
            border-radius: 0 20px 20px 0;
            font-size: 1.1rem;
            cursor: pointer;
        }

        .search-wrap #menuBtn {
            display: none;
        }

        .clear {
            clear: both;
        }

        div[carousel-item] img {
            width: 100%;
            height: 100%;
        }

        carousel-item .notice {
            padding: 5px !important;
        }

        .layui-nav-child dd {
            z-index: 1100;
        }

        .cat-wrap {
            margin: 10px 0;
        }

        .cat-wrap a:hover {
            color: red !important;
            font-style: italic;
        }

        .cat-title {
            display: inline-block;
            background: rgba(30, 159, 255, 0.7);
            text-align: center;
            padding: 5px 10px;
            border-radius: 5px;
            color: #efefef;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .cat-item {
            display: inline-block;
            background: rgba(1, 1, 1, 0.1);
            text-align: center;
            padding: 5px 10px;
            border-radius: 5px;
            color: #eee;
            margin-left: 10px;
            margin-bottom: 5px;
        }

        @media screen and (max-device-width: 760px) {
            .wrap {
                margin: 0;
                width: 100%;
            }

            header {
                padding: 20px 0;
            }

            header img {
                width: 30%;
            }

            .header-title {
                margin-left: 5px;
                font-size: 1.2rem;
                line-height: 1.2rem;
            }

            .layui-nav {
                display: none;
            }

            .search-wrap {
                margin-top: 1px;
                float: right;
            }

            .search-wrap input {
                width: 180px;
            }

            .search-wrap #menuBtn {
                display: inline-block;
                background-color: red;
                vertical-align: middle;
                display: inline-block;
                color: #efefef;
                border: 0;
                height: 34px;
                margin-left: 5px;
                padding: 0 15px 0 12px;
                border-radius: 5px;
                font-size: 1.1rem;
                cursor: pointer;
                margin-right: 5px;
            }

            .redbg a {
                background-color: red !important;
            }
        }
    </style>
    <style>
        .group-box {
            padding: 5px 1%;
            margin: 15px 0 0 0;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            border-radius: 4px;
        }

        .group-title {
            font-size: 20px;
            line-height: 20px;
            color: #fff;
            border-bottom: 1px solid #efefef;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding: 8px 10px 15px 5px;
            font-weight: bold;
        }

        .group-title a {
            float: right;
            font-size: 16px;
            color: #ddd;
        }

        .group-contents {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            padding: 10px 0 0 0;
        }

        .group-item {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            display: inline-block;
            margin-bottom: 10px;
            padding: 0 0.5%;
        }

        .group-item img {
            width: 100%;
            height: 210px;
            border-radius: 4px;
            margin-bottom: 4px;
        }

        .group-item p {
            width: 98%;
            padding: 4px 1%;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            color: #eee;
            font-size: 16px;
            line-height: 16px;
            overflow: hidden;
        }

        .group-item .score {
            position: absolute;
            left: 0;
            top: -5px;
            z-index: 99;
        }

        .group-item:hover p {
            color: #fff;
            font-weight: bold;
        }

        .group-item-novel {
            margin-bottom: 0 !important;
            padding: 10px 0px 5px 0px !important;
            border-bottom: 1px solid #aaa;
        }

        .group-item-novel:nth-child(-n+1) {
            border-top: none !important;
        }

        .group-item-novel:last-child {
            border-bottom: none !important;
        }

        @media screen and (max-device-width: 760px) {
            .m-md6 {
                position: relative;
                width: 50%;
                float: left;
            }

            .m-md12 {
                position: relative;
                width: 100%;
                float: left;
            }

            .m-md6 img {
                height: 120px !important;
            }

            .group-item p {
                font-size: 0.9rem !important;
            }

            .group-box {
                border-radius: 0 !important;
                border-left: none !important;
                border-right: none !important;
                border-botttom: 1px solid #efefef;
                margin-top: 0;
            }

            #cats {
                display: none;
            }
        }

        ul {
            /* 取消ul預設的內縮及樣式 */
            margin: 0;
            padding: 0;
            list-style: none;
        }

        ul.drop-down-menu {
            /*border: #ccc 1px solid;*/
            display: inline-block;
            font-family: 'Open Sans', Arial, sans-serif;
            font-size: 13px;
        }

        ul.drop-down-menu li {
            position: relative;
            white-space: nowrap;
            /*border-right: #ccc 1px solid;*/
            margin: 2px;
        }

        ul.drop-down-menu>li:last-child {
            border-right: none;
        }

        ul.drop-down-menu>li {
            float: left;
            /* 只有第一層是靠左對齊*/
        }

        ul.drop-down-menu a {
            background-color: #b84b89;
            color: #fff;
            display: block;
            text-align: center;
            /*padding: 0 30px;*/
            text-decoration: none;
            line-height: 40px;
            border-right: 1px solid;
        }



        ul.drop-down-menu ul {
            /*border: #ccc 1px solid;*/
            position: absolute;
            z-index: 99;
            left: -1px;
            top: 100%;
            min-width: 180px;
        }

        ul.drop-down-menu ul li {
            border-bottom: #ccc 1px solid;
        }

        ul.drop-down-menu ul li:last-child {
            border-bottom: none;
        }

        ul.drop-down-menu ul ul {
            /*第三層以後的選單出現位置與第二層不同*/
            z-index: 999;
            top: 10px;
            left: 90%;
        }

        ul.drop-down-menu ul {
            /*隱藏次選單*/
            display: none;
        }

        ul.drop-down-menu li:hover>ul {
            /* 滑鼠滑入展開次選單*/
            display: block;
        }

        ul.drop-down-menu {
            list-style-type: none; /* 去掉默认的列表样式 */
            padding: 0; /* 去掉内边距 */
            margin: 0; /* 去掉外边距 */
            display: flex; /* 使用 flexbox 布局 */
            flex-wrap: wrap; /* 允许换行 */
        }

        ul.drop-down-menu > li {
            width: 90px; /* 大屏幕下的宽度 */
            text-align: center; /* 文字居中 */

        }

        /* 小屏幕样式 */
        @media (max-width: 768px) {
            ul.drop-down-menu > li {
                width: 23%; /* 小屏幕下的宽度 */
            }
        }
        @media only screen and (max-width:601px) {
            .b1 {
                display: none;
            }

        }
    </style>
    <div class="wrap">
{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}

</div>
    <header style="padding-top: 10px; padding-bottom: 15px;">

            
            <div class="wrap">
                <a href="/">
                    <img src="/template/{@var:cms_config_tpl_dir}/picture/eacbe1d3fdba2e254b802b7c82b4b1b7.jpg" >
                </a>
                <div class="search-wrap" style="display: block;margin-top: 5px;">
                    <form action="/search.php" method="get">
                        <input type="search" name="content" placeholder="搜索 Search...">
                        <button id="searchBtn" type="button"><i class="layui-icon"></i></button>
                    </form>
                </div>
                <div class="nav-content" style="margin-top: 10px;">
                    <ul class="drop-down-menu">
                        <li style="line-height: 48px;"><a href="/">网站首页</a></li>

{nav type:video no:v2 count:8} 
                        <li class style="line-height: 48px;"> <a href="{_class_link}">{_class_name}</a> </li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
                        <li class style="line-height: 48px;"> <a href="{_class_link}">{_class_name}</a> </li>
{/nav}
                    </ul>
                </div>
            </div>
        
    </header>

    <div class="wrap">
        <style>
            .links-top {
                overflow: hidden;
                margin: auto;
                background: #2c2e2f;
                box-shadow: 0 3px 6px 2px rgba(0, 0, 0, .03)
            }

            .links-top ul li {
                float: left;
                padding: 10px 0;
                width: 10%;
                text-align: center
            }

            .links-top ul li img {
                margin: 0 auto;
                padding: 4px;
                width: 56px;
                height: 56px;
                border-radius: 15px;
            }

            /*.links-top ul li img{background-color: #666666;-webkit-transition: background-color .4s;transition: background-color .4s;}*/
            .links-top ul li img:hover {
                background-color: #FF9800;
            }

            .links-top ul a {
                font-size: 14px;
                color: #bdbdbd;
            }

            .links-top ul a:hover {
                color: #FF9800;
            }

            @media (max-width:544px) {
                .leftd {
                    width: 90px !important;
                }

                .rightd {
                    width: 90px !important;
                }

                .links {
                    padding: 0 5px
                }

                .links-top ul li {
                    width: 25%
                }

                .links-box .panel-heading .btn {
                    padding: 0 10px
                }

                .links-element ul {
                    overflow: hidden;
                    padding: 10px 0 10px 10px
                }

                .links-top ul a {
                    font-size: 13px;
                }
            }

            .bads {
                position: fixed;
                bottom: 0;
                left: 50%;
                height: 8%;
                width: 995px;
                margin: 0 auto;
                transform: translate(-50%, 0px);
                z-index: 9999;
            }

            .tads {
                position: fixed;
                top: 0;
                left: 50%;
                height: 8%;
                width: 995px;
                margin: 0 auto;
                transform: translate(-50%, 0px);
                z-index: 9999;
            }

            .bottomads img {
                height: 55px !important;
            }

            .topads img {
                height: 55px !important;
                margin-top: 10px;
            }

            .leftd {
                position: fixed;
                top: 54%;
                transform: translateY(-50%);
                width: 120px;
                left: 0;
                z-index: 9999;
            }

            .rightd {
                position: fixed;
                top: 54%;
                transform: translateY(-50%);
                width: 120px;
                right: 0;
                z-index: 9999;
            }

            .closebox1 {
                text-align: center;
                display: inherit;
                background-color: #00000024;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox2 {
                text-align: center;
                display: inherit;
                background-color: #00000024;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox3 {
                text-align: center;
                display: inherit;
                background-color: #00000024;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox4 {
                text-align: center;
                display: inherit;
                background-color: #00000024;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            @media screen and (max-width:980px) {
                .bads {
                    width: 100%;
                }

                .tads {
                    width: 100%;
                }
        </style>

        <style>
            .photo-one {
                display: flex;
                flex-wrap: wrap;
                background-color: rgba(73, 91, 103, 0.37);
                padding-bottom: 10px;
                width: 100%;
                height: 100%;
                margin-top: 10px;
            }

            .photo-two {
                display: inline-block;
                display: block;
                height: 90px;
                margin: 20px;
                text-align: center;
                width: 80px;
            }

            .photo-two a {
                line-height: 20px;
            }

            .photo-two img {
                border-radius: 12%;
                height: 80px;
                width: 80px;
            }

            .photo-name {

                font-weight: bold;
                color: rgb(255, 255, 255);
                font-size: larger;
            }




            @media screen and (max-width:1280px) {
                .photo-two img {
                    border-radius: 12%;
                    height: 60px;
                    width: 60px;
                }
            }



            @media screen and (max-width:980px) {
                .photo-name {
                    font-size: 14px;
                }

                .photo-two img {
                    border-radius: 12%;
                    height: 58px;
                    width: 58px;
                }
            }

            @media screen and (max-width:750px) {

                .photo-two {
                    width: 18%;
                    margin: 10px;
                }
            }
        </style>

<!--         <div class="group-box" style="background: rgba(220, 173, 173, 0.4);">
            <div style="display: flex;flex-wrap: wrap;margin-right: 5px;margin-left: 5px;">
                <div class="photo-two"><a href="htdc=yrga9517"  onclick="gtag('event', '小图标', {'event_category': '点击', 'event_label': ' 欲漫涩','value': 500});"><img src="/template/{@var:cms_config_tpl_dir}/picture/bcfd0062f2beba8341ef9270062e4a18.jpeg"><br><span class="photo-name" style="color:#FFF;"> 欲漫涩</span></a></div>
                <div class="photo-two"><a href="hc=MTXQ38"  onclick="gtag('event', '小图标', {'event_category': '点击', 'event_label': '鉴黄师','value': 500});"><img src="/template/{@var:cms_config_tpl_dir}/picture/9794a7c1c8490e9d7dcfbd0bea87eae0.png"><br><span class="photo-name" style="color:#FFF;">鉴黄师</span></a></div>
            </div>
        </div> -->
        <div class="group-box" style="background: rgba(220, 173, 173, 0.4);">
            <p class="group-title"><i class="layui-icon layui-icon-link"></i>&nbsp;&nbsp;合作网站</p>
            <div class="group-contents layui-row">

{link area:link_hzwz}
                <a class="group-item layui-col-xs3 layui-col-md2" href="{_url}"; rel="nofollow" target="_blank">
                    <p style="text-align:center;    background: #;color: #;">{base64}{_text}{/base64}</p>
                </a>
{/link}
            </div>
        </div>
        <div style="width: 100%;">

        </div>

        <div class="topads">
        </div>

        <div class="bottomads">
        </div>

        <script type="text/javascript">
            $(".close_l").on("click", function() {
                $(this).parent("div").hide();
            });
        </script>
        <script type="text/javascript">
            $(".close_r").on("click", function() {
                $(this).parent("div").hide();
            });
        </script>
        <script type="text/javascript">
            $(".closebox1").on("click", function() {
                $(".closebox1").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox2").on("click", function() {
                $(".closebox2").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox3").on("click", function() {
                $(".closebox3").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox4").on("click", function() {
                $(".closebox4").parent("div").css("display", "none");
            });
        </script>

        <div style="margin-bottom: 20px;"></div>