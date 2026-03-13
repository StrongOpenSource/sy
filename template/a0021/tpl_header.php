<?php exit();?>

    <header class="pk-header">
        <div class="pk-wrap">
            <div class="pk-hd-inner">
                <div class="pk-brand">
                    <a class="pk-logo-link" href="/">
                        <span class="pk-site-title">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="pk-domain-tag">
                        <span class="pk-domain-hint">{base64}最新网址{/base64}</span>
                        <span class="pk-domain-text">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="pk-wrap">
        <div class="pk-section">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="pk-wrap">
        <div class="pk-section">
            <nav class="pk-nav-panel">
                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}视频一区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:video no:1 count:8 order:2,6,5,1,8,7,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}视频二区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:video no:2 count:8 order:8,7,3,4,6,2,1,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}视频三区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:video no:3 count:8 order:2,6,1,5,4,7,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}视频四区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:video no:5 count:8 order:3,4,1,2,6,8,5,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}视频五区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:video no:4 count:8 order:1,4,6,5,2,3,8,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="pk-nav-line">
                    <div class="pk-nav-zone">{base64}磁力一区{/base64}</div>
                    <div class="pk-nav-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="pk-srch-wrap">
                <div class="pk-search-bar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="pk-wrap">
        <div class="pk-section">
            <div class="pk-block clearfix">
                <h4 style="margin-bottom:10px;font-weight:800;color:var(--pk-rose-dk);"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="pk-tag-cloud">
                    {splite var:hot_video_search}
                    <a class="pk-tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="pk-wrap">
        <div class="pk-section">
            <div class="pk-block clearfix">
                <h4 style="margin-bottom:10px;font-weight:800;color:var(--pk-rose-dk);"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="pk-tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="pk-tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
