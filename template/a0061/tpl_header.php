<?php exit();?>

    <header class="site-header">
        <div class="container">
            <div class="brand-block">
                <a class="brand-link" href="/">
                    <span class="brand-title">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="latest-domain-wrap">
                    <span class="latest-domain-tag">{base64}最新网址{/base64}</span>
                    <span class="latest-domain-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div class="banner-zone {_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="nav-container">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:8,3,5,4,1,6,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:4,8,6,2,3,5,7,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:6,1,5,2,4,7,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:4,3,2,5,6,7,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:2,5,7,3,1,6,8,4}
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
            <div class="mhlleset-main clearfix">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
