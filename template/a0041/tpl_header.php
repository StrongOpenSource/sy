<?php exit();?>

    <header class="rlw-topbar">
        <div class="rlwwrap">
            <div class="rlw-topbar-inner">
                <div class="rlw-brand">
                    <a class="rlw-logo-link" href="/">
                        <span class="rlw-logo-icon"></span>
                        <span>
                            <span class="rlw-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                        </span>
                    </a>
                    <div class="rlw-domain-row">
                        <span class="rlw-domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="rlw-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="rlw-navbar">
        <div class="rlwwrap">
            <div class="rlw-navbar-inner"></div>
        </div>
    </nav>

    <div class="rlwwrap">
        <div class="rlwpad">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;padding:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="rlwwrap">
        <div class="rlwpad">
            <div class="rlw-catblock">
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}视频一区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:video no:2 count:8 order:3,6,2,7,5,4,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}视频二区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:video no:4 count:8 order:3,6,5,8,4,2,1,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}视频三区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:video no:1 count:8 order:4,2,5,7,3,1,6,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}视频四区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:video no:3 count:8 order:1,4,5,3,8,2,7,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}视频五区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:video no:5 count:8 order:7,1,2,5,3,6,8,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="rlw-catrow">
                    <div class="rlw-zone-lbl">{base64}磁力一区{/base64}</div>
                    <div class="rlw-zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="rlw-searchbar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rlwwrap">
        <div class="rlwpad">
            <div class="rlw-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥 热搜视频{/base64}</h4>
                <ul class="rlw-taglist">
                    {splite var:hot_video_search}
                    <a class="rlw-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="rlwwrap">
        <div class="rlwpad">
            <div class="rlw-section">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥 热搜磁力{/base64}</h4>
                <ul class="rlw-taglist">
                    {splite var:hot_torrent_search}
                    <a class="rlw-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
