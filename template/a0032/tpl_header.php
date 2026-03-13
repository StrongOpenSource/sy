<?php exit();?>

    <header class="site-top">
        <div class="pg-wrap">
            <div class="site-top-inner">
                <a class="site-logo-link" href="/">
                    <span class="logo-text">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="domain-tag">
                    <span class="domain-tag-lbl">{base64}最新网址{/base64}</span>
                    <span class="domain-tag-url">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="pg-wrap">
        <div class="pg-section">
            {ad area:hengfu1}
            <div class="ad-slot {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-section">
            <nav class="cate-nav">
                <div class="cate-row">
                    <div class="cate-label">{base64}视频一区{/base64}</div>
                    <div class="cate-links">
                        {nav type:video no:4 count:8 order:7,5,8,4,2,6,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-label">{base64}视频二区{/base64}</div>
                    <div class="cate-links">
                        {nav type:video no:3 count:8 order:5,3,2,4,7,6,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-label">{base64}视频三区{/base64}</div>
                    <div class="cate-links">
                        {nav type:video no:1 count:8 order:8,5,7,2,1,3,6,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-label">{base64}视频四区{/base64}</div>
                    <div class="cate-links">
                        {nav type:video no:5 count:8 order:6,3,1,4,7,8,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-label">{base64}视频五区{/base64}</div>
                    <div class="cate-links">
                        {nav type:video no:2 count:8 order:5,8,7,6,3,2,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-label">{base64}磁力一区{/base64}</div>
                    <div class="cate-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="search-panel">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-section">
            <div class="content-block clearfix">
                <div class="block-header clearfix">
                    <h4 class="block-title"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="hot-tags">
                    {splite var:hot_video_search}
                    <a class="hot-tag-link" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-section">
            <div class="content-block clearfix">
                <div class="block-header clearfix">
                    <h4 class="block-title"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="hot-tags">
                    {splite var:hot_torrent_search}
                    <a class="hot-tag-link" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
