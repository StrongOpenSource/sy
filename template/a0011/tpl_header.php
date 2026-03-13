<?php exit();?>

    <nav class="tb-header">
        <div class="container">
            <div class="tb-header-inner">
                <div class="tb-logo-wrap" href="/">
                    <a class="tb-logo-wrap" href="/">
                        <span class="tb-site-title">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="tb-domain-badge">
                        <span class="lbl">{base64}最新网址{/base64}</span>
                        <span class="url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="nav-wrapper">
                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}视频一区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:4 count:8 order:8,2,6,5,3,7,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}视频二区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:2 count:8 order:2,4,7,8,3,6,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}视频三区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:5 count:8 order:8,3,7,4,6,5,1,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}视频四区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:3 count:8 order:8,1,5,4,7,2,6,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}视频五区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:1 count:8 order:2,1,8,5,4,6,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-section-row">
                    <div class="nav-zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="nav-zone-links">
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

    <div class="container">
        <div class="content">
            <div class="sect-block">
                <div class="sect-inner">
                    <div class="sect-head">
                        <h4 class="sect-heading"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                    </div>
                    <ul class="tag-cloud">
                        {splite var:hot_video_search}
                        <a class="tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="sect-block">
                <div class="sect-inner">
                    <div class="sect-head">
                        <h4 class="sect-heading"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                    </div>
                    <ul class="tag-cloud">
                        {splite var:hot_torrent_search}
                        <a class="tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
