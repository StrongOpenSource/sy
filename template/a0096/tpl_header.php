<?php exit();?>

    <header class="qt-header">
        <div class="container">
            <div class="qt-header-inner">
                <a class="qt-logo-link" href="/">
                    <span class="qt-logo-badge"></span>
                    <span class="qt-brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="qt-domain-pill">
                    <span class="qt-domain-tag">{base64}最新网址{/base64}</span>
                    <span class="qt-domain-url">{@var:permanent_domain}</span>
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
            <div class="qt-nav-wrap">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:8,3,6,4,1,5,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:6,8,2,1,7,5,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:2,8,6,4,5,1,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:5,6,4,2,1,8,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:1,4,2,5,7,8,3,6}
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

            <div class="qt-search-box">
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
            <h4 style="font-size:13px;color:#999;margin-bottom:6px;">{base64}🔥 热搜视频{/base64}</h4>
            <ul class="grid-container">
                {splite var:hot_video_search}
                <a class="grid-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <h4 style="font-size:13px;color:#999;margin-bottom:6px;">{base64}🔥 热搜磁力{/base64}</h4>
            <ul class="grid-container">
                {splite var:hot_torrent_search}
                <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                {/splite}
            </ul>
        </div>
    </div>
