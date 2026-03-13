<?php exit();?>

    <header class="fang-topbar">
        <div class="container">
            <div class="fang-topbar-inner">
                <a class="fang-logo-link" href="/">
                    <span class="fang-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="fang-domain-wrap">
                    <span class="fang-domain-cap">{base64}最新网址{/base64}</span>
                    <span class="fang-domain-val">{@var:permanent_domain}</span>
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
            <div class="fang-nav-panel">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:1,6,2,4,7,5,3,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:1,5,2,6,4,8,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:8,6,4,1,5,2,3,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:6,2,1,8,7,3,4,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:8,3,2,6,7,4,5,1}
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

            <div class="fang-search-strip">
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
