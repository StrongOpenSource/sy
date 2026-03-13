<?php exit();?>

    <div class="dk-branding">
        <div class="container">
            <div class="dk-brand-inner">
                <a class="dk-logo-link" href="/">
                    <span class="dk-logo-icon">🎬</span>
                    <span class="dk-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="dk-domain-tag">
                    <span class="dk-domain-badge">{base64}最新网址{/base64}</span>
                    <span class="dk-domain-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%;margin:1px 0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <!-- PC 深色导航栏 -->
    <div class="dk-nav-block">
        <div class="container">
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}视频一区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:video no:1 count:8 order:1,6,4,3,5,2,7,8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}视频二区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:video no:2 count:8 order:6,8,4,7,2,5,3,1}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}视频三区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:video no:3 count:8 order:1,7,6,3,2,8,4,5}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}视频四区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:video no:4 count:8 order:3,8,1,6,7,4,5,2}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}视频五区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:video no:5 count:8 order:1,6,8,2,4,3,5,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="dk-nav-row">
                <div class="dk-nav-zone">{base64}磁力一区{/base64}</div>
                <div class="dk-nav-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端导航 -->
    <div class="dk-mob-nav">
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}视频一区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:video no:1 count:8 order:1,6,4,3,5,2,7,8}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}视频二区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:video no:2 count:8 order:6,8,4,7,2,5,3,1}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}视频三区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:video no:3 count:8 order:1,7,6,3,2,8,4,5}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}视频四区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:video no:4 count:8 order:3,8,1,6,7,4,5,2}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}视频五区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:video no:5 count:8 order:1,6,8,2,4,3,5,7}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="dk-mob-row">
            <div class="dk-mob-zone">{base64}磁力一区{/base64}</div>
            <div class="dk-mob-links">
                {nav type:bt no:1 count:8}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div id="site-search">
                <div class="dk-search-wrap">
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
            <div class="dk-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--dk-text-sub);margin-bottom:8px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="dk-tags">
                    {splite var:hot_video_search}
                    <a class="dk-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="dk-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--dk-text-sub);margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="dk-tags">
                    {splite var:hot_torrent_search}
                    <a class="dk-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
