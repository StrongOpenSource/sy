<?php exit();?>

    <header class="db-header">
        <div class="container">
            <div class="db-header-inner">
                <a class="db-logo-link" href="/">
                    <span class="db-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="db-domain-row">
                    <span class="db-domain-lbl">{base64}最新网址{/base64}</span>
                    <span class="db-domain-txt">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

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

    <div class="container">
        <div class="content">
            <div class="db-nav-frame">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:3,1,5,4,2,7,8,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:1,5,2,8,4,6,3,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:2,5,8,3,6,7,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:1,5,4,2,3,8,6,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:8,4,1,7,5,3,6,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}磁力一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div class="db-search-area">
                <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h4 style="font-size:13px;color:#666;margin-bottom:6px;font-family:sans-serif;">{base64}🔥 热搜视频{/base64}</h4>
            <ul class="grid-container">
                {splite var:hot_video_search}
                <a class="grid-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h4 style="font-size:13px;color:#666;margin-bottom:6px;font-family:sans-serif;">{base64}🔥 热搜磁力{/base64}</h4>
            <ul class="grid-container">
                {splite var:hot_torrent_search}
                <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </ul>
        </div>
    </div>
