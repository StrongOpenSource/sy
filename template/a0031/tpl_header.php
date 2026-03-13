<?php exit();?>

    <header class="site-header">
        <div class="wrap">
            <div class="site-header-inner">
                <a class="brand-logo" href="/">
                    <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="brand-badge">
                    <span class="badge-lbl">{base64}最新网址{/base64}</span>
                    <span class="badge-domain">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="wrap">
        <div class="blk">
            {ad area:hengfu1}
            <div class="ad-zone {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wrap">
        <div class="blk">
            <nav class="cat-nav-wrap">
                <div class="cat-row">
                    <div class="cat-zone">{base64}视频一区{/base64}</div>
                    <div class="cat-items">
                        {nav type:video no:1 count:8 order:5,7,1,2,6,3,4,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone">{base64}视频二区{/base64}</div>
                    <div class="cat-items">
                        {nav type:video no:4 count:8 order:6,3,5,2,7,8,1,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone">{base64}视频三区{/base64}</div>
                    <div class="cat-items">
                        {nav type:video no:5 count:8 order:2,1,6,4,7,5,3,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone">{base64}视频四区{/base64}</div>
                    <div class="cat-items">
                        {nav type:video no:2 count:8 order:5,8,3,1,6,4,7,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone">{base64}视频五区{/base64}</div>
                    <div class="cat-items">
                        {nav type:video no:3 count:8 order:4,3,7,2,6,5,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cat-row">
                    <div class="cat-zone">{base64}磁力一区{/base64}</div>
                    <div class="cat-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="srch-box">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="blk">
            <div class="section-block clearfix">
                <div class="section-hd clearfix">
                    <h4 class="section-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="tag-cloud">
                    {splite var:hot_video_search}
                    <a class="tag-cloud-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wrap">
        <div class="blk">
            <div class="section-block clearfix">
                <div class="section-hd clearfix">
                    <h4 class="section-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="tag-cloud-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
