<?php exit();?>

    <header class="gs-topbar">
        <div class="gs-wrap gs-topbar-inner">
            <div class="gs-brand">
                <a class="gs-brand-logo" href="/">
                    <span class="gs-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="gs-domain-badge">
                    <span class="gs-domain-label">{base64}最新网址{/base64}</span>
                    <span class="gs-domain-url">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="gs-banner-wrap">
        <div class="gs-wrap">
            {ad area:hengfu1}
            <div class="gs-banner-zone {_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" class="{_class}" alt="">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <nav class="gs-nav-panel">
        <div class="gs-wrap">
            <div class="gs-nav-inner">
                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}视频一区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:video no:4 count:8 order:7,4,1,2,3,6,5,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}视频二区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:video no:1 count:8 order:6,2,8,5,3,4,7,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}视频三区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:video no:3 count:8 order:7,2,4,6,5,3,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}视频四区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:video no:2 count:8 order:1,7,3,2,5,8,4,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}视频五区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:video no:5 count:8 order:6,3,7,1,2,8,5,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="gs-nav-row">
                    <div class="gs-nav-tag">{base64}磁力一区{/base64}</div>
                    <div class="gs-nav-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="gs-search-zone">
        <div class="gs-wrap">
            <form id="search" name="search" class="gs-search-form" method="get" action="/search.php" onsubmit="return qrsearch();">
                <input type="text" placeholder="请输入搜索关键字..." name="content">
                
                <button name="type" value="1">{base64}搜视频{/base64}</button>
                <button name="type" value="2">{base64}搜磁力{/base64}</button>
            </form>
        </div>
    </div>

    <div class="gs-hot-zone">
        <div class="gs-wrap">
            <div class="gs-hot-header">{base64}🔥 热搜视频{/base64}</div>
            <div class="gs-tag-cloud">
                {splite var:hot_video_search}
                <a href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>

    <div class="gs-hot-zone">
        <div class="gs-wrap">
            <div class="gs-hot-header">{base64}🔥 热搜磁力{/base64}</div>
            <div class="gs-tag-cloud">
                {splite var:hot_torrent_search}
                <a href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>