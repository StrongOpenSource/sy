<?php exit();?>

    <header class="ent-header">
        <div class="ent-wrap">
            <div class="ent-hd-inner">
                <div class="ent-brand">
                    <a class="ent-logo-a" href="/">
                        <span class="ent-logo-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="ent-domain-badge">
                        <span class="ent-domain-hint">{base64}最新网址{/base64}</span>
                        <span class="ent-domain-text">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ent-wrap">
        <div class="ent-section">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 2px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}

            <div class="ent-navboard">
                <div class="ent-navrow">
                    <div class="ent-zone">{base64}视频一区{/base64}</div>
                    <div class="ent-links">
                        {nav type:video no:3 count:8 order:4,5,3,1,8,6,7,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ent-navrow">
                    <div class="ent-zone">{base64}视频二区{/base64}</div>
                    <div class="ent-links">
                        {nav type:video no:2 count:8 order:2,5,4,6,7,3,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ent-navrow">
                    <div class="ent-zone">{base64}视频三区{/base64}</div>
                    <div class="ent-links">
                        {nav type:video no:4 count:8 order:6,3,7,1,4,8,5,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ent-navrow">
                    <div class="ent-zone">{base64}视频四区{/base64}</div>
                    <div class="ent-links">
                        {nav type:video no:1 count:8 order:8,4,5,3,2,6,1,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ent-navrow">
                    <div class="ent-zone">{base64}视频五区{/base64}</div>
                    <div class="ent-links">
                        {nav type:video no:5 count:8 order:4,3,2,6,7,5,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ent-navrow">
                    <div class="ent-zone">{base64}磁力一区{/base64}</div>
                    <div class="ent-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ent-srch">
                <div class="ent-searchbar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="ent-wrap">
        <div class="ent-section">
            <div class="ent-panel ent-cf">
                <div class="ent-panel-hd">
                    <h4 class="ent-panel-title">
                        <span>{base64}🔥 热搜视频{/base64}</span>
                    </h4>
                </div>
                <div class="ent-panel-bd">
                    <ul class="ent-taglist">
                        {splite var:hot_video_search}
                        <a class="ent-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="ent-wrap">
        <div class="ent-section">
            <div class="ent-panel ent-cf">
                <div class="ent-panel-hd">
                    <h4 class="ent-panel-title">
                        <span>{base64}🔥 热搜磁力{/base64}</span>
                    </h4>
                </div>
                <div class="ent-panel-bd">
                    <ul class="ent-taglist">
                        {splite var:hot_torrent_search}
                        <a class="ent-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
