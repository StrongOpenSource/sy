<?php exit();?>

    <header class="portal-header">
        <div class="shell">
            <div class="header-core">
                <div class="identity-block">
                    <a class="portal-logo" href="/">
                        <span class="logo-icon">▶</span>
                        <span class="logo-wordmark">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-badge">
                        <span class="badge-label">{base64}最新网址{/base64}</span>
                        <span class="badge-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="shell">
        <div class="block-gap">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 2px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block; border-radius: 3px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="shell">
        <div class="block-gap">
            <nav class="category-nav">
                <div class="cat-row">
                    <div class="zone-label">{base64}视频一区{/base64}</div>
                    <div class="cat-links">
                        {nav type:video no:3 count:8 order:3,1,5,4,2,7,8,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="zone-label">{base64}视频二区{/base64}</div>
                    <div class="cat-links">
                        {nav type:video no:2 count:8 order:4,8,7,3,2,1,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="zone-label">{base64}视频三区{/base64}</div>
                    <div class="cat-links">
                        {nav type:video no:1 count:8 order:7,6,8,5,3,1,4,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="zone-label">{base64}视频四区{/base64}</div>
                    <div class="cat-links">
                        {nav type:video no:5 count:8 order:8,4,6,3,7,5,2,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="zone-label">{base64}视频五区{/base64}</div>
                    <div class="cat-links">
                        {nav type:video no:4 count:8 order:5,6,8,1,3,2,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="zone-label">{base64}磁力一区{/base64}</div>
                    <div class="cat-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="query-bar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="shell">
        <div class="block-gap">
            <div class="content-block clearfix">
                <p style="font-size:13px; font-weight:700; color:var(--ink-mid); margin-bottom:8px;">{base64}🔥热搜视频{/base64}</p>
                <ul class="keyword-cloud">
                    {splite var:hot_video_search}
                    <a class="kw-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="shell">
        <div class="block-gap">
            <div class="content-block clearfix">
                <p style="font-size:13px; font-weight:700; color:var(--ink-mid); margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</p>
                <ul class="keyword-cloud">
                    {splite var:hot_torrent_search}
                    <a class="kw-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
