<?php exit();?>
        <div id="head">
            <div id="topBox" style="margin-top: 0px;">
                <div class="wrap">
                    <div class="mod clearfix">
                        <div class="row col2">
                            {ad area:hengfu1}
                            <dl style="margin: 0px; margin-top: 1px;" class="{_class}">
                                <dt class="{_class}">
                                    <a href="{_url}" target="_blank" rel="nofollow"  class="{_class}">
                                        <img src="{_image}" class="{_class}"></a>
                                </dt>
                                <dd>广告</dd>
                            </dl>
                            {/ad}
                        </div>
                    </div>
                </div>
            </div>

            <div id="header">
                <div class="nav-wrap">
                    <div class="nav clearfix">
                        <ul class="logo">
                            <li class="domain">
                                <a href="/">
                                    <img src="/template/tpl001/image/logo.png" width="175" height="61.6"></a>
                            </li>
                            <li class="url">正确的网址
                                <span>
                                    {base64}{@var:correct_domain}{/base64}</span>
                            </li>
                        </ul>
                        <div class="hide_mobile">
                            <ul class="btn-icon ">
                                <li>
                                    <div onclick="open_url('{@var:apple_app_url}')">
                                        <i class="icon-apple"></i>
                                        <span class="title">苹果APP下载</span>
                                        <div class="pc">
                                            <span class="subtitle">海量超清视频，永久免费</span></div>
                                    </div>
                                </li>
                                <li>
                                    <div onclick="open_url('{@var:android_app_url}')">
                                        <i class="icon-android"></i>
                                        <span class="title">安卓APP下载</span>
                                        <div class="pc">
                                            <span class="subtitle">关注微博，获取新网址</span></div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="copyUrl(d('{@var:share_text_base64}'));">
                                        <i class="icon-desktop"></i>
                                        <span class="title">分享好友</span>
                                        <div class="pc">
                                            <span class="subtitle">将本站分享好友</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="open_url('{@var:fix_domain}')">
                                        <i class="icon-url"></i>
                                        <span class="title">官方永久网址</span>
                                        <div class="pc">
                                            <span class="subtitle">收藏发布页，获取新网址</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{@var:backhome_email}">
                                        <i class="icon-email"></i>
                                        <span class="title">邮箱获取网址</span>
                                        <div class="pc">
                                            <span class="subtitle">发送文字到邮箱获取新网址</span></div>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="hide_pc">
                            <ul class="btn-icon">
                                <li>
                                    <div onclick="open_url('{@var:apple_app_url}')">
                                        <i class="icon-apple"></i>
                                        <span class="title">苹果APP</span></div>
                                </li>
                                <li>
                                    <div onclick="open_url('{@var:android_app_url}')">
                                        <i class="icon-android"></i>
                                        <span class="title">安卓APP</span></div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" onclick="copyUrl(d('{@var:share_text_base64}'));">
                                        <i class="icon-desktop"></i>
                                        <span class="title">分享好友</span>
                                        <div class="tips">点击浏览器
                                            <em class="icon-safari"></em>
                                            <br>选择
                                            <font color="#ffbf00">添加到主屏幕</font></div>
                                    </a>
                                </li>
                                <li>
                                    <a onclick="open_url('{@var:fix_domain}')">
                                        <i class="icon-url"></i>
                                        <span class="title">永久网址</span></a>
                                </li>
                                <li>
                                    <a href="{@var:backhome_email}">
                                        <i class="icon-email"></i>
                                        <span class="title">邮箱获取</span>
                                        <div class="tips">
                                            <p>
                                            </p>商务合作TG:@</div>
                                    </a>
                                </li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>

            <div class="wrap">
                <div style="margin: 30px 5px 10px;">
                    <ul>
                        <li>
                            {link area:link1}
                                <a class="site_link" href="{_url}" target="_blank">{base64}{_text}{/base64}</a>
                            {/link}
                        </li>
                    </ul>
                </div>
            </div>

            <div class="wrap">
                <div class="menu clearfix">
                    <dl>
                        <dt><a href="javascript:void(0);">线路1</a></dt>
                        {nav type:video no:1 count:8 order:3,4,5,6,7,8,1,2}
                        <dd><a href="{_class_link}">{_class_name}</a></dd>
                        {/nav}
                    </dl>
                    <dl>
                        <dt><a href="javascript:void(0);">线路2</a></dt>
                        {nav type:video no:2 count:8}
                        <dd><a href="{_class_link}">{_class_name}</a></dd>
                        {/nav}
                    </dl>
                    <dl>
                        <dt><a href="javascript:void(0);">线路3</a></dt>
                        {nav type:video no:3 count:8}
                        <dd><a href="{_class_link}">{_class_name}</a></dd>
                        {/nav}
                    </dl>
                    <dl>
                        <dt><a href="javascript:void(0);">线路4</a></dt>
                        {nav type:video no:4 count:8}
                        <dd><a href="{_class_link}">{_class_name}</a></dd>
                        {/nav}
                    </dl>

                    <dl>
                        <dt><a href="javascript:void(0);">磁力1</a></dt>
                        {nav type:bt no:1 count:8}
                        <dd><a href="{_class_link}">{_class_name}</a></dd>
                        {/nav}
                    </dl>

                        <div class="search">
                            <div class="container">
                                <div class="input">
                                    <input type="text" placeholder="请输入要搜索的内容" autocomplete="off" id="search-input">
                                    <div class="picker">视频<i class="icon-searchsarrows"></i></div>
                                    <ul class="picker-list" style="display: none;">
                                        <li>视频</li>
                                        <li>磁力</li>
                                    </ul>
                                </div>
                                <div class="searchs">
                                    <i class="icon-searchs"></i>
                                </div>
                            </div>
                            <span class="searchotword">
                                {splite var:search_tags}
                                    <a href="/search.php?content={_var}">{_var}</a>
                                {/splite}
                            </span>
                        </div>
                </div>
            </div>


<div class="appad">
    <div class="app-abk">
        {ad area:tubiao1}
        <a href="{_url}" target="_blank" class="app-abk-item">
            <div class="app-img">
                <div class="lazy-image abk-image">
                    <img src="{_image}" style="display: inline;"></div>
            </div>
            <p>{base64}{_text}{/base64}</p>
        </a>
        {/ad}
    </div>
</div>
            <div id="topBox" style="margin-top: 10px;">
                <div class="wrap">
                    <div class="mod clearfix">
                        <div class="row col2">
                            {ad area:hengfu2}
                            <dl style="margin: 0px;" class="{_class}">
                            <dt class="{_class}">
                                <a href="{_url}" target="_blank" rel="nofollow"  class="{_class}">
                                    <img src="{_image}" class="{_class}"></a>
                            </dt>
                            <dd>广告</dd></dl>
                            {/ad}
                        </div>
                    </div>
                </div>
            </div>
        </div>


