<?php exit();?>

    <header class="portal-header">
        <div class="main-wrap">
            <div class="portal-header-inner">
                <a class="portal-brand" href="/">
                    <span class="brand-wordmark">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="latest-domain">
                    <span class="domain-prefix">{base64}最新网址{/base64}</span>
                    <span class="domain-value">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="main-wrap">
        <div class="row-gap">
            {ad area:hengfu1}
            <div class="ad-area {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="main-wrap">
        <div class="row-gap">
            <nav class="nav-board">
                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}视频一区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:4 count:8 order:1,5,8,7,6,2,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}视频二区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:2 count:8 order:2,4,7,8,1,6,3,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}视频三区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:5 count:8 order:4,2,1,6,7,3,5,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}视频四区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:3 count:8 order:4,3,2,6,7,1,8,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}视频五区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:video no:1 count:8 order:6,8,4,2,1,3,7,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="nav-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="kw-search">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="main-wrap">
        <div class="row-gap">
            <div class="sect clearfix">
                <div class="sect-head clearfix">
                    <h4 class="sect-name"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="kw-tags">
                    {splite var:hot_video_search}
                    <a class="kw-tag-a" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="main-wrap">
        <div class="row-gap">
            <div class="sect clearfix">
                <div class="sect-head clearfix">
                    <h4 class="sect-name"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="kw-tags">
                    {splite var:hot_torrent_search}
                    <a class="kw-tag-a" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
