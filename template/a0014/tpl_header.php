<?php exit();?>

    <nav class="site-header">
        <div class="wrap">
            <div class="header-inner">
                <div class="brand-block">
                    <a class="brand-link" href="/">
                        <!-- <span class="brand-icon">X</span> -->
                        <span class="brand-title">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="current-domain-badge">
                        <span class="badge-tag">{base64}最新网址{/base64}</span>
                        <span class="badge-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="wrap">
        <div class="section-wrap">
            {ad area:hengfu1}
            <div class="ad-banner {_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="section-wrap">
            <div class="category-panel">
                <div class="category-row">
                    <div class="category-zone-label">{base64}视频一区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:video no:2 count:8 order:4,5,1,8,3,6,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                
                <div class="category-row">
                    <div class="category-zone-label">{base64}视频二区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:video no:5 count:8 order:1,2,3,8,6,7,4,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                
                <div class="category-row">
                    <div class="category-zone-label">{base64}视频三区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:video no:4 count:8 order:5,2,1,3,6,8,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                
                <div class="category-row">
                    <div class="category-zone-label">{base64}视频四区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:video no:1 count:8 order:1,2,4,8,6,3,5,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                
                <div class="category-row">
                    <div class="category-zone-label">{base64}视频五区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:video no:3 count:8 order:7,1,5,3,4,6,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                
                <div class="category-row">
                    <div class="category-zone-label">{base64}磁力一区{/base64}</div>
                    <div class="category-links-row">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="search-panel">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="section-wrap">
            <div class="block-inner">
                <div class="block-header">
                    <h4 class="block-heading"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="tags-cloud">
                    {splite var:hot_video_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="section-wrap">
            <div class="block-inner">
                <div class="block-header">
                    <h4 class="block-heading"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="tags-cloud">
                    {splite var:hot_torrent_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
