<?php exit();?>

    <header class="header">
        <div class="container">
            <div class="header-content">
                <div class="site-branding">
                    <a class="logo" href="/">
                        <span class="site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-info">
                        <span class="domain-label">{base64}最新网址{/base64}</span>
                        <span class="domain-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <nav class="nav-container" aria-label="频道导航">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:7,6,2,5,8,3,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:1,2,3,5,6,7,4,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:1,4,6,2,3,5,8,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:7,3,6,1,4,8,5,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:3,7,5,2,1,8,4,6}
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
            <div class="mhlleset-main clearfix">
                <h4 style="font-size:13px;font-weight:800;margin-bottom:8px;color:#1a3a6b;"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
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
                <h4 style="font-size:13px;font-weight:800;margin-bottom:8px;color:#1a3a6b;"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
