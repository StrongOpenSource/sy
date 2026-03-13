<?php exit();?>

    <header class="site-header">
        <div class="wrap">
            <div class="header-inner">
                <div class="brand-block">
                    <a class="brand-title" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-badge">
                        <span class="domain-tag">{base64}最新网址{/base64}</span>
                        <span class="domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="section-wrap">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;padding:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="section-wrap">
            <div class="nav-panel">
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}视频一区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:1 count:8 order:3,2,6,7,5,8,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}视频二区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:3 count:8 order:1,3,6,5,4,2,8,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}视频三区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:5 count:8 order:6,1,7,3,4,5,8,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}视频四区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:2 count:8 order:3,6,1,7,8,4,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}视频五区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:4 count:8 order:4,8,5,2,6,7,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-strip">
                    <div class="nav-zone-label">{base64}磁力一区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="search-bar">
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
            <div class="film-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="tag-cloud">
                    {splite var:hot_video_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="section-wrap">
            <div class="film-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
