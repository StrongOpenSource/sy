<?php exit();?>

    <header class="site-header">
        <div class="wrap">
            <div class="header-inner">
                <div class="brand-wrap">
                    <a class="brand-logo" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-badge">
                        <span class="domain-hint">{base64}最新网址{/base64}</span>
                        <span class="domain-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="sect">
            {ad area:hengfu1}
            <div style="width: 100%; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="sect">
            <nav class="category-nav">
                <div class="category-row">
                    <div class="category-title">{base64}视频一区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:1 count:8 order:5,4,3,6,8,1,7,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="category-row">
                    <div class="category-title">{base64}视频二区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:5 count:8 order:5,8,7,4,1,2,6,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="category-row">
                    <div class="category-title">{base64}视频三区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:4 count:8 order:6,8,3,1,5,4,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="category-row">
                    <div class="category-title">{base64}视频四区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:2 count:8 order:1,8,3,5,7,4,6,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="category-row">
                    <div class="category-title">{base64}视频五区{/base64}</div>
                    <div class="category-links">
                        {nav type:video no:3 count:8 order:7,5,3,6,2,4,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="category-row">
                    <div class="category-title">{base64}磁力一区{/base64}</div>
                    <div class="category-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="search-box">
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
        <div class="sect">
            <div class="module-section clearfix">
                <h4 class="module-ttl" style="margin-bottom:10px;"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="hot-tags">
                    {splite var:hot_video_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="sect">
            <div class="module-section clearfix">
                <h4 class="module-ttl" style="margin-bottom:10px;"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="hot-tags">
                    {splite var:hot_torrent_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
