<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <header class="site-header">
        <div class="wrap-outer">
            <div class="brand-block">
                <a class="brand-name-link" href="/">
                    <span class="brand-logo-mark">▶</span>
                    <span class="brand-title-str">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="domain-badge-wrap">
                    <span class="badge-tag">{base64}最新网址{/base64}</span>
                    <span class="badge-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="promo-banner-zone">
        <div class="wrap-outer">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <nav class="category-nav-area">
        <div class="wrap-outer">
            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}视频一区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:video no:2 count:8 order:5,1,8,6,3,2,4,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}视频二区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:video no:5 count:8 order:1,6,5,4,3,2,8,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}视频三区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:video no:1 count:8 order:4,3,2,7,5,6,8,1}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}视频四区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:video no:4 count:8 order:2,6,4,5,7,3,8,1}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}视频五区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:video no:3 count:8 order:7,4,8,3,6,2,1,5}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>

            <div class="nav-zone-row">
                <div class="nav-zone-label">{base64}磁力一区{/base64}</div>
                <div class="nav-zone-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </nav>

    <div class="searchbar-zone">
        <div class="wrap-outer">
            <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                <div class="searchbar-form-wrap">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </div>
            </form>
        </div>
    </div>

    <div class="hot-search-zone">
        <div class="wrap-outer">
            <div class="hot-search-block">
                <div class="hot-search-heading"><strong>{base64}🔥热搜视频{/base64}</strong></div>
                <div class="hot-search-taglist">
                    {splite var:hot_video_search}
                    <a href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </div>
            </div>
            <div class="hot-search-block">
                <div class="hot-search-heading"><strong>{base64}🔥热搜磁力{/base64}</strong></div>
                <div class="hot-search-taglist">
                    {splite var:hot_torrent_search}
                    <a href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </div>
            </div>
        </div>
    </div>
