<?php exit();?>

    <header class="topbar">
        <div class="box">
            <div class="topbar-inner">
                <a class="brand-anchor" href="/">
                    <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="domain-pill">
                    <span class="domain-pill-lbl">{base64}最新网址{/base64}</span>
                    <span class="domain-pill-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="box">
        <div class="gap">
            {ad area:hengfu1}
            <div class="promo-slot {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="box">
        <div class="gap">
            <nav class="zone-nav">
                <div class="zone-row">
                    <div class="zone-chip">{base64}视频一区{/base64}</div>
                    <div class="zone-items">
                        {nav type:video no:2 count:8 order:3,7,1,2,6,8,4,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="zone-row">
                    <div class="zone-chip">{base64}视频二区{/base64}</div>
                    <div class="zone-items">
                        {nav type:video no:1 count:8 order:7,6,3,2,8,1,4,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="zone-row">
                    <div class="zone-chip">{base64}视频三区{/base64}</div>
                    <div class="zone-items">
                        {nav type:video no:3 count:8 order:2,3,1,8,7,4,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="zone-row">
                    <div class="zone-chip">{base64}视频四区{/base64}</div>
                    <div class="zone-items">
                        {nav type:video no:4 count:8 order:5,7,1,2,8,3,4,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="zone-row">
                    <div class="zone-chip">{base64}视频五区{/base64}</div>
                    <div class="zone-items">
                        {nav type:video no:5 count:8 order:1,4,8,6,5,2,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="zone-row">
                    <div class="zone-chip">{base64}磁力一区{/base64}</div>
                    <div class="zone-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="lookup-bar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="gap">
            <div class="module clearfix">
                <div class="module-top clearfix">
                    <h4 class="module-heading"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="hotword-list">
                    {splite var:hot_video_search}
                    <a class="hotword-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="box">
        <div class="gap">
            <div class="module clearfix">
                <div class="module-top clearfix">
                    <h4 class="module-heading"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="hotword-list">
                    {splite var:hot_torrent_search}
                    <a class="hotword-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
