<?php exit();?>

    <div class="site-topbar">
        <div class="topbar-inner">
            <a href="/" class="brand-block" style="text-decoration:none;">
                <span class="brand-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                <div class="brand-domain-row">
                    <span class="domain-badge">{base64}最新网址{/base64}</span>
                    <span class="domain-value">{@var:permanent_domain}</span>
                </div>
            </a>
        </div>
    </div>

    <div class="banner-strip">
        <div class="page-wrap">
            {ad area:hengfu1}
            <div class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="cat-nav-block">
        <div class="cat-nav-inner">

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}视频一区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:video no:5 count:8 order:1,2,3,7,6,4,8,5}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}视频二区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:video no:2 count:8 order:7,1,3,2,8,4,5,6}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}视频三区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:video no:1 count:8 order:1,7,6,4,3,2,8,5}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}视频四区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:video no:4 count:8 order:6,3,5,2,8,7,4,1}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}视频五区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:video no:3 count:8 order:2,6,4,1,7,5,3,8}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="cat-row-group">
                <div class="cat-row-line">
                    <div class="cat-zone-label">{base64}磁力一区{/base64}</div>
                    <div class="cat-link-strip">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="search-zone">
        <div class="search-zone-inner">
            <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                <div class="search-input-row">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </div>
            </form>
        </div>
    </div>

    <div class="hot-tags-block">
        <div class="hot-tags-inner">
            <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
            <div class="tag-flow">
                {splite var:hot_video_search}
                <a class="tag-pill" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>

    <div class="hot-tags-block" style="border-top: 1px solid #f0f1f3;">
        <div class="hot-tags-inner">
            <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
            <div class="tag-flow">
                {splite var:hot_torrent_search}
                <a class="tag-pill" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>
