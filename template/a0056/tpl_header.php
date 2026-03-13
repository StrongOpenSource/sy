<?php exit();?>

    <header class="site-header">
        <div class="container">
            <div class="site-header-inner">
                <div class="site-branding">
                    <a class="brand-logo" href="/">
                        <span class="brand-icon">🎬</span>
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="site-domain-wrap">
                        <span class="domain-tag">{base64}最新网址{/base64}</span>
                        <span class="domain-str">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;overflow:hidden;border-radius:10px;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;border-radius:10px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="category-nav-block">
                <div class="category-row">
                    <div class="category-zone">{base64}视频一区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:1 count:8 order:7,4,1,6,5,3,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-zone">{base64}视频二区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:4 count:8 order:1,4,5,3,6,7,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-zone">{base64}视频三区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:3 count:8 order:2,3,1,8,7,4,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-zone">{base64}视频四区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:5 count:8 order:8,1,2,4,6,7,5,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-zone">{base64}视频五区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:2 count:8 order:5,8,4,7,3,1,2,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="category-row">
                    <div class="category-zone">{base64}磁力一区{/base64}</div>
                    <div class="category-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="search-bar-wrap">
                <div class="search-wrap">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="hot-search-panel">
                <h4><strong>{base64}🔥 热搜视频{/base64}</strong></h4>
                <ul class="tag-list">
                    {splite var:hot_video_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="hot-search-panel">
                <h4><strong>{base64}🔥 热搜磁力{/base64}</strong></h4>
                <ul class="tag-list">
                    {splite var:hot_torrent_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
