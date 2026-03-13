<?php exit();?>

    <header class="site-header">
        <div class="wrap">
            <div class="header-inner">
                <div class="brand-wrap">
                    <a class="brand-logo" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="latest-domain-block">
                        <span class="tag-label">{base64}最新网址{/base64}</span>
                        <span class="tag-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="section-pad">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="section-pad">
            <nav class="category-nav" role="navigation" aria-label="内容分类导航">

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}视频一区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:video no:2 count:8 order:8,1,3,7,5,2,4,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}视频二区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:video no:4 count:8 order:4,5,8,1,2,6,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}视频三区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:video no:5 count:8 order:3,2,1,6,4,7,8,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}视频四区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:video no:3 count:8 order:6,8,3,5,4,1,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}视频五区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:video no:1 count:8 order:2,1,5,8,7,4,3,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone-label">{base64}磁力一区{/base64}</div>
                    <div class="cat-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

            </nav>

            <div id="ddab">
                <div class="search-bar-wrap">
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
        <div class="section-pad">
            <div class="tag-cloud-section">
                <div class="section-tag-title"><h4><strong>{base64}🔥热搜视频{/base64}</strong></h4></div>
                <ul class="tag-cloud-list">
                    {splite var:hot_video_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="section-pad">
            <div class="tag-cloud-section">
                <div class="section-tag-title"><h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4></div>
                <ul class="tag-cloud-list">
                    {splite var:hot_torrent_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
