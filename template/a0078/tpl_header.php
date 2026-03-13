<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <header class="topbar-header">
        <div class="pg-wrap">
            <div class="site-brand-block">
                <a class="site-brand-link" href="/">
                    <span class="brand-icon-box">▶</span>
                    <span class="brand-name-str">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="site-domain-strip">
                    <span class="strip-tag">{base64}最新网址{/base64}</span>
                    <span class="strip-url">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="banner-zone">
        <div class="pg-wrap">
            {ad area:hengfu1}
            <div style="width:100%;margin:1px 0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <nav class="main-nav-section">
        <div class="pg-wrap">
            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}视频一区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:video no:5 count:8 order:7,3,4,2,8,1,5,6}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}视频二区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:video no:4 count:8 order:5,6,8,1,3,2,7,4}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}视频三区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:video no:1 count:8 order:8,2,5,4,1,6,7,3}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}视频四区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:video no:3 count:8 order:5,8,7,2,1,3,4,6}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}视频五区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:video no:2 count:8 order:4,3,7,8,5,1,6,2}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-strip-row">
                <span class="nav-strip-zone">{base64}磁力一区{/base64}</span>
                <div class="nav-strip-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </nav>

    <div class="searchbar-area">
        <div class="pg-wrap">
            <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                <div class="search-input-row">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </div>
            </form>
        </div>
    </div>

    <div class="hotsearch-area">
        <div class="pg-wrap">
            <div class="hotsearch-row">
                <span class="hotsearch-label">{base64}🔥热搜视频{/base64}</span>
                <span class="hotsearch-tagrow">
                    {splite var:hot_video_search}
                    <a href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </span>
            </div>
            <div class="hotsearch-row">
                <span class="hotsearch-label">{base64}🔥热搜磁力{/base64}</span>
                <span class="hotsearch-tagrow">
                    {splite var:hot_torrent_search}
                    <a href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </span>
            </div>
        </div>
    </div>
