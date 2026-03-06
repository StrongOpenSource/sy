

    <div class="container22">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="/template/{@var:cms_config_tpl_dir}/picture/614f8720fadbd66c50566fe1b641be99.jpg" ></a>
                </div>
                <div class="search">
                    <button class="mobile-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20">
                            <metadata>
                                <x:xmpmeta xmlns:x="adobe:ns:meta/" x:xmptk="Adobe XMP Core 5.6-c138 79.159824, 2016/09/14-01:09:01">
                                    <rdf:rdf xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#">
                                        <rdf:description rdf:about></rdf:description>
                                    </rdf:rdf>
                                </x:xmpmeta>
                            </metadata>
                            <path class="cls-1" d="M1336.46,1385.91a8.41,8.41,0,0,0,4.89-1.57l4.24,4.25a1.424,1.424,0,0,0,1,.41,1.442,1.442,0,0,0,1-.41,1.418,1.418,0,0,0,0-2l-4.24-4.25a8.34,8.34,0,0,0,1.57-4.89A8.46,8.46,0,1,0,1336.46,1385.91Zm0-14.09a5.644,5.644,0,0,1,5.64,5.63,5.557,5.557,0,0,1-1.05,3.26l-0.55.78-0.78.56A5.636,5.636,0,1,1,1336.46,1371.82Zm-3.45,5.81a3.613,3.613,0,0,1,3.62-3.59,0.459,0.459,0,0,0,.46-0.46,0.45,0.45,0,0,0-.46-0.45,4.52,4.52,0,0,0-4.53,4.5,0.459,0.459,0,0,0,.46.46A0.45,0.45,0,0,0,1333.01,1377.63Z" transform="translate(-1328 -1369)"></path>
                        </svg>
                    </button>
                    <form id="search_form" action="/search.php" method="get">
                        <button type="submit" class="search-button">
                            <span>搜索</span>
                        </button>
                        <div class="advanced-search">
                            <div class="search-option">
                                <span class="start-option" data-icon-holder>
                                    <img src="/template/{@var:cms_config_tpl_dir}/picture/costom_search.svg">
                                </span>
                                <span class="search-arrow">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewbox="0 0 56 32" class="svg-icon">
                                        <path d="M54.672 3.648l-2.696-2.44c-0.936-0.808-2.024-1.208-3.28-1.208-1.264 0-2.344 0.4-3.232 1.208l-17.464 15.832-17.472-15.832c-0.88-0.808-1.96-1.208-3.232-1.208-1.248 0-2.328 0.4-3.264 1.208l-2.664 2.44c-0.912 0.824-1.368 1.816-1.368 2.968 0 1.168 0.456 2.152 1.368 2.936l23.4 21.208c0.864 0.824 1.936 1.24 3.232 1.24 1.272 0 2.36-0.416 3.272-1.24l23.4-21.208c0.88-0.808 1.328-1.784 1.328-2.936 0-1.128-0.448-2.12-1.328-2.968z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                            <div class="search-menu">
                                <span class="item js-change-search" data-action="/search.php">
                                    <img src="/template/{@var:cms_config_tpl_dir}/picture/videos.svg" class="svg-icon">
                                    <span>视频</span>
                                </span>
                            </div>
                        </div>
                        <div class="search-text">
                            <input type="text" id="wd" name="content" class="typehead" placeholder="请输入关键字..." value>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        <nav>
            <div class="navigation">
                <button class="button">
                    <span class="icon">
                        <span class="ico-bar"></span>
                        <span class="ico-bar"></span>
                        <span class="ico-bar"></span>
                    </span>
                </button>
                <ul class="primary">
                    <li>
                        <a href="/">网站首页</a>
                    </li>
{nav type:video no:v2 count:8} 
<li><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<li><a href="{_class_link}">{_class_name}</a></li>
{/nav}


                </ul>
            </div>
        </nav>
    </div>
<!--     <h1 class="htitle">
        <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">c</font>
        </font>
    </h1> -->
    <div class="content">
        <div class="main-content">
            <div class="main-container">
                <style>
                    .text-top {
                        cursor: pointer;
                        color: inherit;
                        display: inline-block;
                        border: 2px solid #e6ff16;
                        background: #ff0101;
                        color: #fff;
                        font-size: 16px;
                        padding: 5px 7px;
                        margin: 5px;
                    }

                    .toptext {
                        display: none;
                    }

                    .footlink {
                        font-size: 13px;
                        display: block;
                        float: left;
                        margin-left: 1px;
                        width: 8%;
                        text-align: center;
                        height: 24px;
                        line-height: 24px;
                        overflow: hidden;
                        color: #0061ff !important;
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
                        bottom: 25px;
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

                    /*.layout-column{*/
                    /*    margin-top: 100px;*/
                    /*}*/

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
                        margin: 10px;
                        text-align: center;
                        width: 58px;
                    }

                    .photo-two a {
                        line-height: 12px;
                    }

                    .photo-two img {
                        border-radius: 12%;
                        height: 60px;
                        width: 60px;
                    }

                    .photo-name {
                        font-size: large;
                        font-weight: bold;
                        color: rgb(255, 255, 255);
                        font-size: small;
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

                    .close_btn {
                        position: absolute;
                        right: 0;
                        top: 0;
                        height: 20px;
                        line-height: 20px;
                        width: 40px;
                        background: #f00;
                        text-align: center;
                    }

                    .close_r {
                        /* still bad on picking color */
                        background: orange;
                        color: red;
                        /* make a round button */
                        border-radius: 12px;
                        /* center text */
                        line-height: 20px;
                        text-align: center;
                        height: 20px;
                        width: 20px;
                        font-size: 18px;
                        padding: 1px;
                    }


                    /* use cross as close button */
                    .close_r::before {
                        content: "\2716";
                    }

                    /* place the button on top-right */
                    .close_r {
                        top: -10px;
                        right: -10px;
                        position: absolute;
                    }

                    .close_l {
                        /* still bad on picking color */
                        background: orange;
                        color: red;
                        /* make a round button */
                        border-radius: 12px;
                        /* center text */
                        line-height: 20px;
                        text-align: center;
                        height: 20px;
                        width: 20px;
                        font-size: 18px;
                        padding: 1px;
                    }


                    /* use cross as close button */
                    .close_l::before {
                        content: "\2716";
                    }

                    /* place the button on top-right */
                    .close_l {
                        top: -10px;
                        left: -10px;
                        position: absolute;
                    }

                    .closebox1 {
                        text-align: center;
                        display: inherit;
                        background-color: #0600031c;
                        color: #fff;
                        padding: 4px 0;
                        display: block;
                    }

                    .closebox2 {
                        text-align: center;
                        display: inherit;
                        background-color: #0600031c;
                        color: #fff;
                        padding: 4px 0;
                        display: block;
                    }

                    .closebox3 {
                        text-align: center;
                        display: inherit;
                        background-color: #0600031c;
                        color: #fff;
                        padding: 4px 0;
                        display: block;
                    }

                    .closebox4 {
                        text-align: center;
                        display: inherit;
                        background-color: #0600031c;
                        color: #fff;
                        padding: 4px 0;
                        display: block;
                    }



                    @media screen and (max-width:1280px) {
                        .footlink {
                            width: 10%
                        }

                        .photo-two img {
                            border-radius: 12%;
                            height: 60px;
                            width: 60px;
                        }
                    }



                    @media screen and (max-width:980px) {
                        .bads {
                            width: 100%;
                            /*bottom:75px;*/
                        }

                        .tads {
                            width: 100%;
                        }

                        /*    .layout-column{*/
                        /*    margin-top: 80px;*/
                        /*}*/

                        .toptext {
                            display: block;
                        }

                        .toptext {
                            display: block;
                        }

                        .footlink {
                            width: 16.5%
                        }

                        .photo-two img {
                            border-radius: 12%;
                            height: 58px;
                            width: 58px;
                        }
                    }

                    @media screen and (max-width:990px) {
                        .add img {
                            height: 65px !important;
                        }
                    }


                    @media screen and (max-width:750px) {
                        .text-top {
                            font-size: 12px;
                            padding: 1px 3px;
                        }


                        .bads {
                            width: 100%;
                            /*bottom:75px;*/
                        }

                        .tads {
                            width: 100%;
                        }



                        .footlink {
                            width: 24%
                        }

                        .photo-two img {
                            border-radius: 12%;
                            height: 52px;
                            width: 52px;
                        }

                        .duilian {
                            display: none;
                        }

                        .ads img {
                            height: 50px !important;
                            width: 100% !important;
                        }

                        .ads bigimg {
                            height: 78px !important;
                        }

                        .leftd {
                            width: 90px !important;
                        }

                        .rightd {
                            width: 90px !important;
                        }

                        .bottomads img {
                            height: 55px !important;
                        }

                        .topads img {
                            height: 55px !important;
                            margin-top: 10px;
                        }

                    }

                    .col6 {
                        position: relative;
                        min-height: 1px;
                        width: 100%;
                        -webkit-box-sizing: border-box;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                    }

                    .row6 {
                        display: flex;
                        flex-wrap: wrap;
                    }


                    @media screen and (max-width:750px) {
                        .col6 {
                            width: 100% !important;
                        }
                    }

                    @media (min-width: 768px) .col6 {
                        width: 100%;
                    }
                </style>
<!--                 <div class="slick slick-visible slick-arrow-center" style="display: flex;flex-wrap: wrap;margin-right: 5px;margin-left: 5px;">

                    <div class="photo-two"><a href="ht13161160"  onclick="gtag('event', '小图标', {'event_category': '点击', 'event_label': '绿茶','value': 500});"><img src="/template/{@var:cms_config_tpl_dir}/picture/0517ecf1e63d6396440dede190ae3f9a.jpg"><br><span class="photo-name" style="background: #;color: #;">绿茶</span></a>
                    </div>

                    <div class="photo-two"><a href="ht717"  onclick="gtag('event', '小图标', {'event_category': '点击', 'event_label': '好色TV','value': 500});"><img src="/template/{@var:cms_config_tpl_dir}/picture/9e72363378c424ffeaedd50f4c3b820b.jpg"><br></div>

                </div>
 -->


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


{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}


                
                <div class="section-title">
                    <h2 class="title">站长推荐</h2>
                </div>
                <div style="border-top: 2px solid #f33;"></div>
{link area:link1}
<a href="{_url}"  class="linkfont" style="background: #;color: #ABF7FF;" target="_blank">{base64}{_text}{/base64}</a>
{/link}



<!--                 <div class="section-title">
                    <h2 class="title">合作伙伴</h2>
                </div>
                <div style="border-top: 2px solid #f33;"></div>
                <a href="httpr/"  class="linkfont" style="background: #;color: #C45EFF;" onclick="gtag('event', '合作伙伴', {'event_category': '点击', 'event_label': '日女大全','value': 500});"> 日女大全</a>
                <a href="htsonz"  class="linkfont" style="background: #;color: #C45EFF;" onclick="gtag('event', '合作伙伴', {'event_category': '点击', 'event_label': '口袋福利','value': 500});"> 口袋福利</a>
 -->

                <div class="section-title">
                    <h2 class="title">热搜标签</h2>
                </div>
                <div style="border-top: 2px solid #f33;"></div>
                <div class="button2s are-small" style="justify-content: center;">
{splite var:search_tags_torrent}
<a class="button2 is-black has-text-weight-bold" href="/search.php?content=b64{_var_b64}&type=2"  style="background: #;color: #;">{base64}{_var}{/base64}</a>
{/splite}

                </div>
                <style>
                    .button2 {
                        margin: 3px;
                        position: relative;
                        vertical-align: top;
                        line-height: 1.5;
                        /*height: 2.5em; */
                        box-shadow: none;
                        display: inline-flex;
                        -webkit-appearance: none;
                        align-items: center;
                        border: 1px solid transparent;
                        background-color: #000;
                        border-color: #dbdbdb;
                        border-width: 1px;
                        color: #fff;
                        cursor: pointer;
                        justify-content: center;
                        padding-bottom: calc(0.5em - 1px);
                        padding-left: 1em;
                        padding-right: 1em;
                        padding-top: calc(0.5em - 1px);
                        text-align: center;
                        white-space: nowrap;
                    }

                    .button2.is-danger {
                        background-color: #f14668;
                        border-color: transparent;
                        color: #fff;
                    }

                    .button2s.are-small .button2:not(.is-normal):not(.is-medium):not(.is-large) {
                        border-radius: 2px;
                        font-size: 12px;

                    }


                    @media screen and (max-width:750px) {
                        .button2 {
                            17%
                        }

                        .button2s.are-small .button2:not(.is-normal):not(.is-medium):not(.is-large) {
                            padding: 1px;
                        }


                    }
                </style>
            </div>
        </div>
    </div>



