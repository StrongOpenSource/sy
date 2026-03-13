<?php exit();?>

    <header class="siteheader">
        <div class="centerbox">
            <div class="siteheader-inner">
                <a class="sitename-link" href="/">
                    <span class="sitename-text">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="newaddr-tag">
                    <span class="newaddr-lbl">{base64}最新网址{/base64}</span>
                    <span class="newaddr-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="centerbox">
        <div class="vgap">
            {ad area:hengfu1}
            <div class="promostrip {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="centerbox">
        <div class="vgap">
            <nav class="navboard">
                <div class="navboard-row">
                    <div class="navboard-zone">{base64}视频一区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:video no:4 count:8 order:8,5,4,7,6,1,2,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="navboard-row">
                    <div class="navboard-zone">{base64}视频二区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:video no:2 count:8 order:1,7,8,6,2,4,3,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="navboard-row">
                    <div class="navboard-zone">{base64}视频三区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:video no:3 count:8 order:6,4,8,2,7,3,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="navboard-row">
                    <div class="navboard-zone">{base64}视频四区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:video no:1 count:8 order:8,5,1,6,7,3,2,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="navboard-row">
                    <div class="navboard-zone">{base64}视频五区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:video no:5 count:8 order:6,5,4,2,7,3,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="navboard-row">
                    <div class="navboard-zone">{base64}磁力一区{/base64}</div>
                    <div class="navboard-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="searchform">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="centerbox">
        <div class="vgap">
            <div class="contentrow clearfix">
                <div class="contentrow-hd clearfix">
                    <h4 class="contentrow-title"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="kwpanel">
                    {splite var:hot_video_search}
                    <a class="kwpanel-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="centerbox">
        <div class="vgap">
            <div class="contentrow clearfix">
                <div class="contentrow-hd clearfix">
                    <h4 class="contentrow-title"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="kwpanel">
                    {splite var:hot_torrent_search}
                    <a class="kwpanel-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
