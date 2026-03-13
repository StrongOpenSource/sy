<?php exit();?>

    <div class="tp-branding">
        <div class="container">
            <div class="tp-branding-inner">
                <a class="tp-logo-link" href="/">
                    <span class="tp-logo-icon">🎬</span>
                    <span class="tp-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="tp-domain-pill">
                    <span class="tp-domain-badge">{base64}最新网址{/base64}</span>
                    <span class="tp-domain-text">{@var:permanent_domain}</span>
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

    <!-- PC: 绿色顶部导航栏 -->
    <div class="gn-bar">
        <div class="container">
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}视频一区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:video no:1 count:8 order:6,2,8,5,1,3,4,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}视频二区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:video no:2 count:8 order:5,6,7,2,4,8,1,3}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}视频三区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:video no:3 count:8 order:5,7,1,8,2,4,6,3}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}视频四区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:video no:4 count:8 order:4,2,7,5,6,3,1,8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}视频五区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:video no:5 count:8 order:7,5,2,4,6,1,8,3}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="gn-bar-row">
                <div class="gn-zone-label">{base64}磁力一区{/base64}</div>
                <div class="gn-zone-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端：白底导航行 -->
    <div class="gn-mob-rows">
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}视频一区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:video no:1 count:8 order:6,2,8,5,1,3,4,7}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}视频二区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:video no:2 count:8 order:5,6,7,2,4,8,1,3}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}视频三区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:video no:3 count:8 order:5,7,1,8,2,4,6,3}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}视频四区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:video no:4 count:8 order:4,2,7,5,6,3,1,8}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}视频五区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:video no:5 count:8 order:7,5,2,4,6,1,8,3}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="gn-mob-strip">
            <div class="gn-mob-label">{base64}磁力一区{/base64}</div>
            <div class="gn-mob-items">
                {nav type:bt no:1 count:8}
                <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div id="srch-zone">
                <div class="g-search-box">
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
            <div class="g-section">
                <h4 style="font-size:13px;font-weight:700;color:var(--g-text);margin-bottom:8px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="g-tag-cloud">
                    {splite var:hot_video_search}
                    <a class="g-tag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="g-section">
                <h4 style="font-size:13px;font-weight:700;color:var(--g-text);margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="g-tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="g-tag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
