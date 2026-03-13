<?php exit();?>

    <header class="qk-header">
        <div class="qk-wrap">
            <div class="qk-hd-inner">
                <div class="qk-brand">
                    <a class="qk-logo-link" href="/">
                        <span class="qk-site-title">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="qk-domain-badge">
                        <span class="qk-domain-label">{base64}最新网址{/base64}</span>
                        <span class="qk-domain-value">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="qk-wrap">
        <div class="qk-section">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="qk-wrap">
        <div class="qk-section">
            <nav class="qk-nav-panel">
                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}视频一区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:video no:3 count:8 order:7,5,4,8,1,3,2,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}视频二区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:video no:5 count:8 order:6,7,3,8,4,1,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}视频三区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:video no:2 count:8 order:5,6,4,2,8,3,7,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}视频四区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:video no:1 count:8 order:8,1,3,4,5,7,6,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}视频五区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:video no:4 count:8 order:2,5,7,6,1,8,4,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qk-nav-row">
                    <div class="qk-nav-tag">{base64}磁力一区{/base64}</div>
                    <div class="qk-nav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="qk-search-area">
                <div class="qk-search-wrap">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="qk-wrap">
        <div class="qk-section">
            <div class="qk-content-block clearfix">
                <h4 style="margin-bottom:10px;font-weight:800;color:var(--qk-yellow);"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="qk-tags-list">
                    {splite var:hot_video_search}
                    <a class="qk-tag-link" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="qk-wrap">
        <div class="qk-section">
            <div class="qk-content-block clearfix">
                <h4 style="margin-bottom:10px;font-weight:800;color:var(--qk-yellow);"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="qk-tags-list">
                    {splite var:hot_torrent_search}
                    <a class="qk-tag-link" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
