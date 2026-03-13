<?php exit();?>

    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <div class="brand-wrap">
                    <a class="site-logo-link" href="/">
                        <span class="site-title-text">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="newest-domain-box">
                        <span class="nd-badge">{base64}最新网址{/base64}</span>
                        <span class="nd-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%; margin:1px 0; overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="nav-wrapper">
                <div class="nav-strip">
                    <div class="nav-tag">{base64}视频一区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:4 count:8 order:5,4,7,8,1,3,2,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-tag">{base64}视频二区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:3 count:8 order:3,2,8,4,1,5,6,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-tag">{base64}视频三区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:1 count:8 order:7,5,3,1,8,4,6,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-tag">{base64}视频四区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:5 count:8 order:6,3,1,4,2,8,7,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-tag">{base64}视频五区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:2 count:8 order:8,1,4,6,2,7,3,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-tag">{base64}磁力一区{/base64}</div>
                    <div class="nav-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

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
            <div class="mhlleset-main clearfix">
                <h4 style="font-size:15px; font-weight:700; color:var(--fg); margin-bottom:10px;">{base64}🔥热搜视频{/base64}</h4>
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
            <div class="mhlleset-main clearfix">
                <h4 style="font-size:15px; font-weight:700; color:var(--fg); margin-bottom:10px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>