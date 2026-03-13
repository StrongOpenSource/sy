<?php exit();?>

    <nav class="site-header">
        <div class="wrap">
            <div class="header-inner">
                <div class="branding-block">
                    <a class="site-logo" href="/">
                        <span class="logo-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="newest-domain">
                        <span class="domain-tag">{base64}最新网址{/base64}</span>
                        <span class="domain-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="wrap">
        <div class="section-gap">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 2px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block; border-radius: 8px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="section-gap">
            <div class="nav-panel">
                <div class="nav-strip">
                    <div class="zone-badge">{base64}视频一区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:2 count:8 order:3,7,8,5,6,1,2,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="zone-badge">{base64}视频二区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:5 count:8 order:2,3,7,5,6,4,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="zone-badge">{base64}视频三区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:4 count:8 order:2,7,8,4,6,3,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="zone-badge">{base64}视频四区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:3 count:8 order:4,5,1,6,8,7,3,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="zone-badge">{base64}视频五区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:1 count:8 order:1,8,6,4,3,7,5,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="zone-badge">{base64}磁力一区{/base64}</div>
                    <div class="zone-links">
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
        <div class="section-gap">
            <div class="film-section clearfix">
                <h4 class="section-title" style="font-size:15px; margin-bottom:10px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="tag-cloud">
                    {splite var:hot_video_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="section-gap">
            <div class="film-section clearfix">
                <h4 class="section-title" style="font-size:15px; margin-bottom:10px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
