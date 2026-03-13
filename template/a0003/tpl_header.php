<?php exit();?>

    <nav class="header">
        <div class="container">
            <div class="header-content">
                <div class="site-branding">
                    <a class="logo" href="/">
                        <span class="site-name">{base64}国产区{/base64}</span>
                    </a>
                    <div class="domain-info">
                        <span class="domain-label">{base64}最新域名{/base64}</span>
                        <span class="domain-url">88pp.com</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%;margin:8px 0;overflow:hidden;border-radius:10px;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <nav class="nav-container">
                <div class="nav-row">
                    <span class="nav-label">{base64}视频一区{/base64}</span>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:5,4,8,6,2,7,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <span class="nav-label">{base64}视频二区{/base64}</span>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:1,3,8,4,5,6,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <span class="nav-label">{base64}视频三区{/base64}</span>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:6,2,3,8,1,5,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <span class="nav-label">{base64}视频四区{/base64}</span>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:5,2,7,6,4,8,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <span class="nav-label">{base64}视频五区{/base64}</span>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:1,2,5,7,6,3,8,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nav-row">
                    <span class="nav-label">{base64}磁力一区{/base64}</span>
                    <div class="nav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="seach">
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
            <div class="mhlleset-main clearfix" style="margin:12px 0;border-radius:var(--rnd-lg);">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_video_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="mhlleset-main clearfix" style="margin:12px 0;border-radius:var(--rnd-lg);">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>