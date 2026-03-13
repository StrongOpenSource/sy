<?php exit();?>

    <header class="qqm-topbar">
        <div class="qqmwrap">
            <div class="qqm-topbar-inner">
                <div class="qqm-brand">
                    <a class="qqm-logo-link" href="/">
                        <span class="qqm-logo-icon"></span>
                        <span class="qqm-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="qqm-domain-row">
                        <span class="qqm-domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="qqm-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="qqmwrap">
        <div class="qqmpad">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;padding:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="qqmwrap">
        <div class="qqmpad">
            <div class="qqm-catblock">
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}视频一区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:video no:3 count:8 order:2,5,6,3,4,8,7,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}视频二区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:video no:5 count:8 order:5,3,1,6,8,2,7,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}视频三区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:video no:2 count:8 order:1,3,8,5,6,4,2,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}视频四区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:video no:1 count:8 order:3,4,2,1,5,6,7,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}视频五区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:video no:4 count:8 order:1,3,6,4,5,2,8,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="qqm-catrow">
                    <div class="qqm-zone-lbl">{base64}磁力一区{/base64}</div>
                    <div class="qqm-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="qqm-searchbar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="搜索视频、磁力..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="qqmwrap">
        <div class="qqmpad">
            <div class="qqm-section">
                <h4 style="font-size:11px;color:var(--text-muted);margin-bottom:6px;font-weight:700;letter-spacing:1px;">{base64}🔥 热搜视频{/base64}</h4>
                <ul class="qqm-taglist">
                    {splite var:hot_video_search}
                    <a class="qqm-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="qqmwrap">
        <div class="qqmpad">
            <div class="qqm-section">
                <h4 style="font-size:11px;color:var(--text-muted);margin-bottom:6px;font-weight:700;letter-spacing:1px;">{base64}🔥 热搜磁力{/base64}</h4>
                <ul class="qqm-taglist">
                    {splite var:hot_torrent_search}
                    <a class="qqm-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
