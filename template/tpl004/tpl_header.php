<?php exit();?>

    <div class="container">
        <div class="content">

            {ad area:hengfu1}
            <div style="width: 100%;margin: 1px 0px;" class="{_class}">
            <a href="{_url}" target="_blank">
            <img src="{_image}" width="100%" class="{_class}"></a>
        </div>
            {/ad}
        </div>
    </nav>


    <nav class="header" style="height: 60px; text-align: center; width:100%;max-width: 1100px; margin-right: auto; margin-left: auto;">
        <div class="navbar-header" style="display: inline-block;">
            <div class="container" style="margin: 0px;">
                <a class="logo" href="/" style="text-decoration:none">
                    <span style="font-size:26px; font-weight:800; color:#ffffff; line-height:30px;">{@var:tpl_page_title}</span>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <div class="mhlleset">
                <div id="menu" class="menu-hml">
                    <div class="area">
                        <dl class="first"><dt><a href="javascript:void(0);">视频一区</a></dt>
                            {nav type:video no:4 count:8 order:3,4,5,6,7,8,1,2}
                            <dd><a href="{_class_link}">{_class_name}</a></dd>
                            {/nav}
                        </dl>
                    </div>

                    <div class="area">
                        <dl class="first"><dt><a href="javascript:void(0);">视频二区</a></dt>
                            {nav type:video no:3 count:8 order:3,4,5,6,7,8,1,2}
                            <dd><a href="{_class_link}">{_class_name}</a></dd>
                            {/nav}
                        </dl>
                    </div>
                    <div class="area">
                        <dl class="first"><dt><a href="javascript:void(0);">视频三区</a></dt>
                            {nav type:video no:2 count:8 order:3,4,5,6,7,8,1,2}
                            <dd><a href="{_class_link}">{_class_name}</a></dd>
                            {/nav}
                        </dl>
                    </div>
                    <div class="area">
                        <dl class="first"><dt><a href="javascript:void(0);">视频四区</a></dt>
                            {nav type:video no:1 count:8 order:3,4,5,6,7,8,1,2}
                            <dd><a href="{_class_link}">{_class_name}</a></dd>
                            {/nav}
                        </dl>
                    </div>
                    <div class="area">
                        <dl class="first"><dt><a href="javascript:void(0);">磁力一区</a></dt>
                            {nav type:bt no:1 count:8}
                            <dd><a href="{_class_link}">{_class_name}</a></dd>
                            {/nav}
                        </dl>
                    </div>

                </div>
                <div id="ddab">
                    <div class="seach">
                        <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                            <input type="text" placeholder="请输入搜索关键字..." name="content">
                            <button name="type" value="1">搜视频</button>
                            <button name="type" value="2">搜磁力</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <div class="app mhlleset">
                <ul>
                    {ad area:tubiao1}
                    <li>
                        <a href="{_url}" rel="nofollow" target="_blank">
                            <img src="{_image}"><span>{base64}{_text}{/base64}</span>
                        </a>
                    </li>
                    {/ad}
                </ul>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="content">
            <h4><strong>本站推荐</strong></h4>
            <div class="txtguanggao">
            {link area:benzhantuijian}
                <a href="{_url}" target="_blank" rel="nofollow" class="dh" style="text-decoration: none">{base64}{_text}{/base64}</a>
            {/link}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h4><strong>合作伙伴</strong></h4>
            <div class="txtguanggao2">
            {link area:hezuohuoban}
                <a href="{_url}" target="_blank" rel="nofollow" class="dh" style="text-decoration: none">{base64}{_text}{/base64}</a>
            {/link}
            </div>
        </div>
    </div>


    <div class="container">
        <div class="content">
            <div class="mhlleset-main clearfix">
                <h4><strong>🔥热搜视频</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_video_search}
                    <a class="grid-item" href="/search.php?content={_var}" rel="nofollow">{_var}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="content">
            <div class="mhlleset-main clearfix">
                <h4><strong>🔥热搜磁力</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content={_var}&type=2" rel="nofollow">{_var}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>


<!-- 对联代码，保留下样式        <script type="text/javascript">
            function closeClick(id) {
                document.getElementById(id).style.display = "none";
            }
        </script>
        <div id="lefttd" class="lefttd"><span onclick="closeClick('lefttd');" style="background-color:black;color:white">关闭广告</span>
            <a href="https://***.cc/" target="_blank" onclick="gtag('event', '左飘', {'event_category': '点击', 'event_label': ' ','value': 5});">
                <img src="/template/{@var:cms_config_tpl_dir}/images/xcdl.gif" style="width:100%;">
            </a>
        </div>
        <div id="rightd" class="rightd"><span onclick="closeClick('rightd');" style="background-color:black;color:white">关闭广告</span>
            <a href="https://***.cc/" target="_blank" onclick="gtag('event', '右飘', {'event_category': '点击', 'event_label': '196体育','value': 6});">
                <img src="/template/{@var:cms_config_tpl_dir}/images/xcdl.gif" style="width:100%;">
            </a>
    </div> -->


