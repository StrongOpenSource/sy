<?php exit();?>

    <header class="top-header">
        <div class="frame">
            <div class="top-inner">
                <div class="brand-cluster">
                    <a class="brand-link" href="/">
                        <span class="site-icon"></span>
                        <span class="site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="domain-tag-wrap">
                        <span class="domain-pill">{base64}最新网址{/base64}</span>
                        <span class="domain-text">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="frame">
        <div class="frame-gap">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="frame">
        <div class="frame-gap">
            <nav class="channel-nav">
                <div class="ch-row">
                    <div class="ch-zone">{base64}视频一区{/base64}</div>
                    <div class="ch-items">
                        {nav type:video no:3 count:8 order:6,2,8,3,1,4,7,5}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ch-row">
                    <div class="ch-zone">{base64}视频二区{/base64}</div>
                    <div class="ch-items">
                        {nav type:video no:5 count:8 order:5,1,7,3,6,8,2,4}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ch-row">
                    <div class="ch-zone">{base64}视频三区{/base64}</div>
                    <div class="ch-items">
                        {nav type:video no:4 count:8 order:1,8,3,5,6,2,4,7}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ch-row">
                    <div class="ch-zone">{base64}视频四区{/base64}</div>
                    <div class="ch-items">
                        {nav type:video no:1 count:8 order:7,3,4,6,1,8,2,5}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ch-row">
                    <div class="ch-zone">{base64}视频五区{/base64}</div>
                    <div class="ch-items">
                        {nav type:video no:2 count:8 order:3,5,1,6,2,4,8,7}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ch-row">
                    <div class="ch-zone">{base64}磁力一区{/base64}</div>
                    <div class="ch-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id="{_class_id}">{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div class="search-block">
                <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="frame">
        <div class="frame-gap">
            <div class="hot-panel gf">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="hot-tags">
                    {splite var:hot_video_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="frame">
        <div class="frame-gap">
            <div class="hot-panel gf">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="hot-tags">
                    {splite var:hot_torrent_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
