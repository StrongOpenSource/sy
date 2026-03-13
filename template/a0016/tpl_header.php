<?php exit();?>

    <div class="yw-topbar">
        <div class="yw-wrapper">
            <div class="yw-brand">
                <a class="yw-site-logo" href="/">
                    <em>{base64}{@var:tpl_page_title}{/base64}</em>
                </a>
                <div class="yw-domain-badge">
                    <span class="lbl">{base64}最新网址{/base64}</span>
                    <span class="url">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="yw-wrapper">
        {ad area:hengfu1}
        <div class="yw-adzone {_class}">
            <a href="{_url}" target="_blank">
                <img src="{_image}" width="100%" height="100%" style="display:block;">
            </a>
        </div>
        {/ad}
    </div>

    <nav class="yw-mainnav">
        <div class="yw-wrapper">
            <div style="width:100%;">
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}视频一区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:video no:2 count:8 order:3,2,7,1,6,4,5,8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}视频二区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:video no:1 count:8 order:5,8,2,6,7,4,1,3}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}视频三区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:video no:3 count:8 order:3,2,6,1,4,8,5,7}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}视频四区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:video no:4 count:8 order:7,3,5,8,1,6,2,4}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}视频五区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:video no:5 count:8 order:3,7,1,2,4,5,6,8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
                <div class="yw-nav-row">
                    <div class="yw-nav-section">
                        <span class="sec-label">{base64}磁力一区{/base64}</span>
                        <div class="yw-nav-links">
                            {nav type:bt no:1 count:8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="yw-searchbar">
        <div class="yw-wrapper">
            <div id="ddab">
                <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();" class="yw-search-form">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="yw-hotsearch">
        <div class="yw-wrapper">
            <div class="yw-hotsearch-inner">
                <strong>{base64}🔥热搜视频{/base64}</strong>
                {splite var:hot_video_search}
                <a class="yw-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>

    <div class="yw-hotsearch">
        <div class="yw-wrapper">
            <div class="yw-hotsearch-inner">
                <strong>{base64}🔥热搜磁力{/base64}</strong>
                {splite var:hot_torrent_search}
                <a class="yw-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </div>
        </div>
    </div>
