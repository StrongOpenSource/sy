<?php exit();?>

    <header class="topbar">
        <div class="wrapper">
            <div class="topbar-inner">
                <div class="brand-row">
                    <a class="brand-link" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-pill">
                        <span class="domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="domain-txt">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wrapper">
        <div class="sec-pad">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;padding:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrapper">
        <div class="sec-pad">
            <div class="nav-block">
                <div class="nav-row">
                    <div class="zone-tag">{base64}视频一区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:1 count:8 order:8,7,6,2,1,5,4,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="zone-tag">{base64}视频二区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:4 count:8 order:5,7,6,1,4,3,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="zone-tag">{base64}视频三区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:3 count:8 order:4,3,7,2,8,1,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="zone-tag">{base64}视频四区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:5 count:8 order:7,5,2,6,8,4,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="zone-tag">{base64}视频五区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:2 count:8 order:8,4,3,7,1,2,5,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="search-zone">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="sec-pad">
            <div class="content-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="hot-tags">
                    {splite var:hot_video_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="sec-pad">
            <div class="content-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="hot-tags">
                    {splite var:hot_torrent_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
