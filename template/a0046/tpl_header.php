<?php exit();?>

    <header class="site-topbar">
        <div class="layout-wrap">
            <div class="topbar-row">
                <div class="brand-block">
                    <a class="brand-logo" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="mirror-info">
                        <span class="mirror-label">{base64}最新网址{/base64}</span>
                        <span class="mirror-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="layout-wrap">
        <div class="layout-inner">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="layout-wrap">
        <div class="layout-inner">
            <nav class="channel-box">
                <div class="channel-row">
                    <div class="zone-lbl">{base64}视频一区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:video no:2 count:8 order:2,1,8,5,7,3,6,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="channel-row">
                    <div class="zone-lbl">{base64}视频二区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:video no:3 count:8 order:4,6,8,5,2,1,3,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="channel-row">
                    <div class="zone-lbl">{base64}视频三区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:video no:1 count:8 order:2,4,5,6,8,1,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="channel-row">
                    <div class="zone-lbl">{base64}视频四区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:video no:5 count:8 order:3,4,1,8,6,2,7,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="channel-row">
                    <div class="zone-lbl">{base64}视频五区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:video no:4 count:8 order:5,6,3,4,8,2,1,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="channel-row">
                    <div class="zone-lbl">{base64}磁力一区{/base64}</div>
                    <div class="zone-nav">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div class="search-panel">
                <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                    <input type="text" placeholder="请输入搜索关键字..." name="content">
                    
                    <button name="type" value="1">{base64}搜视频{/base64}</button>
                    <button name="type" value="2">{base64}搜磁力{/base64}</button>
                </form>
            </div>
        </div>
    </div>

    <div class="layout-wrap">
        <div class="layout-inner">
            <div class="hotword-block cf">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="hotword-list">
                    {splite var:hot_video_search}
                    <a class="hotword-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="layout-wrap">
        <div class="layout-inner">
            <div class="hotword-block cf">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="hotword-list">
                    {splite var:hot_torrent_search}
                    <a class="hotword-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
