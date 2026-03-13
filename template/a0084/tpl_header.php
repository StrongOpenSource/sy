<?php exit();?>

    <header class="vx-header">
        <div class="vx-wrap">
            <div class="vx-header-inner">
                <div class="vx-brand">
                    <a class="vx-logo-link" href="/">
                        <span class="vx-logo-dot"></span>
                        <span class="vx-logo-text">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="vx-domain-chip">
                        <span class="vx-chip-pill">{base64}最新网址{/base64}</span>
                        <span class="vx-chip-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="vx-wrap">
        <div class="vx-gap">
            {ad area:hengfu1}
            <div style="width:100%; margin:2px 0; overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block; border-radius:10px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="vx-wrap">
        <div class="vx-gap">
            <nav class="vx-nav-board">
                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}视频一区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:video no:1 count:8 order:8,7,4,6,2,3,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}视频二区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:video no:2 count:8 order:1,4,6,3,8,5,7,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}视频三区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:video no:3 count:8 order:2,8,3,1,4,5,7,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}视频四区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:video no:4 count:8 order:8,7,6,2,1,3,5,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}视频五区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:video no:5 count:8 order:3,8,2,6,5,1,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="vx-nav-row">
                    <div class="vx-zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="vx-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="vx-search-wrap">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="vx-wrap">
        <div class="vx-gap">
            <div class="vx-section clearfix">
                <p style="font-size:12px; font-weight:600; color:var(--muted); letter-spacing:0.5px; text-transform:uppercase; margin-bottom:8px;">{base64}🔥 热搜视频{/base64}</p>
                <ul class="vx-tagcloud">
                    {splite var:hot_video_search}
                    <a class="vx-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="vx-wrap">
        <div class="vx-gap">
            <div class="vx-section clearfix">
                <p style="font-size:12px; font-weight:600; color:var(--muted); letter-spacing:0.5px; text-transform:uppercase; margin-bottom:8px;">{base64}🔥 热搜磁力{/base64}</p>
                <ul class="vx-tagcloud">
                    {splite var:hot_torrent_search}
                    <a class="vx-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
