<?php exit();?>

    <header class="yy-header">
        <div class="yy-wrap">
            <div class="yy-hd-inner">
                <div class="yy-brand">
                    <a class="yy-logo-link" href="/">
                        <span class="yy-site-title">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="yy-domain-flag">
                        <span class="yy-domain-hint">{base64}最新网址{/base64}</span>
                        <span class="yy-domain-text">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="yy-wrap">
        <div class="yy-section">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="yy-wrap">
        <div class="yy-section">
            <nav class="yy-nav-panel">
                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}视频一区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:video no:4 count:8 order:1,7,5,8,4,6,2,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}视频二区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:video no:3 count:8 order:6,5,4,1,3,2,7,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}视频三区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:video no:1 count:8 order:7,4,6,2,8,3,1,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}视频四区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:video no:5 count:8 order:5,8,2,7,6,1,4,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}视频五区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:video no:2 count:8 order:2,3,6,5,7,1,8,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="yy-nav-row">
                    <div class="yy-nav-zone">{base64}磁力一区{/base64}</div>
                    <div class="yy-nav-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="yy-search-mod">
                <div class="yy-search-panel">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="yy-wrap">
        <div class="yy-section">
            <div class="yy-content-block clearfix">
                <h4 style="margin-bottom:8px;font-weight:700;color:var(--yy-orange-dk);font-size:14px;"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="yy-hotlist">
                    {splite var:hot_video_search}
                    <a class="yy-hotlist-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="yy-wrap">
        <div class="yy-section">
            <div class="yy-content-block clearfix">
                <h4 style="margin-bottom:8px;font-weight:700;color:var(--yy-orange-dk);font-size:14px;"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="yy-hotlist">
                    {splite var:hot_torrent_search}
                    <a class="yy-hotlist-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
