    <div class="mm-content">
        <header class="header-container border_bootom">
            <div class="row" style="position: relative">
                <div><a href="/">
                        <div class="header_title size_xxxl c_pink" id="logoname">
                            {@site_name} </div>
                    </a></div>
            </div>
        </header>
        <style>
            .row-item {
                height: 44px;
                padding: 8px 16px !important;
                box-sizing: content-box;
            }

            .type-title {
                width: 120px;
                font-size: 16px;
                text-align: center;
                display: inline-block;
                float: left;
            }

            .type-title span {
                display: block;
                width: 100%;
                height: 44px;
                line-height: 44px;
                background: #cd5c4e;
                color: #fff;
                border-radius: 8px;
            }

            .type-item {
                display: inline-block;
                width: calc(100% - 120px);
                height: 44px;
                line-height: 44px;
            }

            .type-item li {
                display: inline-block;
                width: 12.5%;
                text-align: center;
                font-size: 16px;
                float: left;
            }

            @media screen and (max-width: 768px) {
                .type-title {
                    width: 80px;
                    font-size: 14px;
                }

                .type-item {
                    display: inline-block;
                    width: calc(100% - 80px);
                    height: 22px;
                    line-height: 22px;
                }

                .type-item li {
                    width: 25%;
                    font-size: 12px;
                }
            }
        </style>
        <div class="row">
            <div class="row-item odd">
                <div class="col-lg-12">
                    <form action="/vodsearch/-------------.html" method="get" autocomplete="off">
                        <div class="input-group">
                            <input type="text" class="form-control" id="wd" name="wd" placeholder="万部影片任你搜索" value="">
                            <span class="input-group-btn"><button class="btn btn-default" type="submit">搜索</button></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="row-item odd">
                <div class="type-title">
                    <span>
                        在线一区 </span>
                </div>
                <div class="type-item">
                    <ul>
{nav type:video no:3 count:8} 
                        <li class="item"><a href="{_class_link}" >{_class_name}</a></li>
{/nav}
                    </ul>
                </div>
            </div>



            <div class="row-item odd">
                <div class="type-title">
                    <span>
                        在线二区 </span>
                </div>
                <div class="type-item">
                    <ul>
{nav type:video no:1 count:8} 
                        <li class="item"><a href="{_class_link}" >{_class_name}</a></li>
{/nav}
                    </ul>
                </div>
            </div>

            <div class="row-item odd">
                <div class="type-title">
                    <span>
                        在线三区 </span>
                </div>
                <div class="type-item">
                    <ul>
{nav type:video no:4 count:8} 
                        <li class="item"><a href="{_class_link}" >{_class_name}</a></li>
{/nav}
                    </ul>
                </div>
            </div>

            <div class="row-item odd">
                <div class="type-title">
                    <span>
                        在线四区 </span>
                </div>
                <div class="type-item">
                    <ul>
{nav type:video no:2 count:8} 
                        <li class="item"><a href="{_class_link}" >{_class_name}</a></li>
{/nav}
                    </ul>
                </div>
            </div>

            <div class="row-item odd">
                <div class="type-title">
                    <span>
                        磁力一区 </span>
                </div>
                <div class="type-item">
                    <ul>
{nav type:bt no:1 count:8} 
                        <li class="item"><a href="{_class_link}" >{_class_name}</a></li>
{/nav}
                    </ul>
                </div>
            </div>


        </div>
    </div>
    <style>
        .app {
            margin: 10px 0;
        }

        .app_title {
            text-align: center;
            line-height: 35px;
            font-size: 15px;
            color: #cd5c4e;
            font-weight: bolder;
        }

        .app ul li {
            margin: 10px 0;
            float: left;
            width: 8.33%;
            text-align: center;
            list-style-type: none
        }

        .app ul li img {
            margin: 0 auto;
            width: 56px;
            height: 56px;
            display: block;
            border-radius: 8px
        }

        .app ul li a {
            font: 12px/28px Tahoma, 'Microsoft Yahei', Simsun;
            color: #666;
            overflow: hidden;
            white-space: nowrap;
        }

        .app ul li a:hover {
            color: #FD4C5D;
            font-weight: bolder;
        }

        @media screen and (max-width:640px) {
            .app ul li {
                width: 25%
            }
        }

        @media screen and (min-width:768px) {
            .app {
                display: none
            }
        }
    </style>
    <div class="container">
        <div class="row">
            <style>
                .toplinks {
                    width: 100%;
                    overflow: hidden;
                    display: block;
                    box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .05);
                    margin: 10px 0;
                }

                .toplinks a {
                    width: 9.8%;
                    float: left;
                    border-radius: 3px;
                    line-height: 30px;
                    height: 30px;
                    text-align: center;
                    font-size: 14px;
                    color: #fff;
                    display: inline-block;
                    background-color: #cd5c4e;
                    margin: 1px;
                    transition-duration: .3s;
                }

                .toplinks a:hover {
                    background: #DC3545;
                    color: #FFF
                }

                @media screen and (max-width: 960px) {
                    .toplinks a {
                        width: 24.4%;
                        float: left;
                        border-radius: 3px;
                        line-height: 30px;
                        height: 30px;
                        text-align: center;
                        font-size: 13px;
                        color: #fff;
                        display: inline-block;
                        background-color: #cd5c4e;
                        margin: 1px;
                        transition-duration: .3s;
                    }
                }
            </style>
            <div class="layout-box clearfix">
<!--                 <div class="app">
                    <ul>
                        <li><a  href="hop"><img class="lazy" data-original="/template/{@var:cms_config_tpl_dir}/picture/绿茶直播.jpg" src="https://pic.tp9091.top/app/绿茶直播.jpg">绿茶直播</a></li>
                        <li><a  href="hp"><img class="lazy" data-original="/template/{@var:cms_config_tpl_dir}/picture/春梦直播.gif" src="https://pic.tp9091.top/app/春梦直播.gif">春梦直播</a></li>
                    </ul>
                    <div style="clear:both"></div>
                </div> -->
                <ul class="toplinks">
                    <a href="http习资料/"  onclick="fetchClickToCount(229 , 1);">秘密研究所</a>
                    <a href="httl"  onclick="fetchClickToCount(161 , 1);">必备福利</a>
                </ul>
                <div style="margin:10px 0">

                    <style>
                        #hengfu {
                            animation: hengfu 2.5s 3.15s infinite;
                        }

                        @keyframes hengfu {
                            10% {
                                transform: rotate(1deg);
                            }

                            20% {
                                transform: rotate(-1deg);
                            }

                            30% {
                                transform: rotate(1deg);
                            }

                            40% {
                                transform: rotate(-1deg);
                            }

                            50%,
                            100% {
                                transform: rotate(0deg);
                            }
                        }
                    </style>
                </div>
                <style>
                    .tags-box .tags .tag {
                        margin-bottom: 4px;
                        margin-right: 2px;
                    }

                    .tags {
                        width: 100%;
                        align-items: center;
                        display: flex;
                        flex-wrap: wrap;
                        /*justify-content: flex-start;*/
                        justify-content: space-evenly;
                    }

                    .has-text-centered {
                        text-align: center !important;
                    }

                    .tag:not(body).is-danger {
                        background-color: #32a3b1;
                        color: #fff;
                    }

                    .tag:not(body) {
                        align-items: center;
                        background-color: #f5f5f5;
                        border-radius: 4px;
                        color: #4a4a4a;
                        display: inline-flex;
                        /*   font-size: .75rem;
      height: 2em; */
                        justify-content: center;
                        line-height: 1.5;
                        padding-left: .75em;
                        padding-right: .75em;
                        white-space: nowrap;
                    }
                </style>
                <div class="tags-box">
                    <div class="tags" id="biaoqian1">
                    </div>
                </div>
            </div>
        </div>
    </div>

