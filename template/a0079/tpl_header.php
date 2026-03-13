<?php exit();?>

    <nav class="portal-head">
        <div class="pg-wrap">
            <div class="ph-inner">
                <div class="ph-branding">
                    <a class="ph-logo-link" href="/">
                        <span class="ph-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="ph-domain-strip">
                        <span class="ph-domain-label">{base64}最新网址{/base64}</span>
                        <span class="ph-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="pg-wrap">
        <div class="pg-block">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 2px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-block">
            <div class="nav-board">
                <div class="nav-stripe">
                    <div class="zone-tag">{base64}视频一区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:2 count:8 order:1,8,2,3,6,5,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-stripe">
                    <div class="zone-tag">{base64}视频二区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:4 count:8 order:7,6,2,5,1,3,4,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-stripe">
                    <div class="zone-tag">{base64}视频三区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:1 count:8 order:4,7,8,5,6,2,3,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-stripe">
                    <div class="zone-tag">{base64}视频四区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:5 count:8 order:6,4,8,5,1,7,3,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-stripe">
                    <div class="zone-tag">{base64}视频五区{/base64}</div>
                    <div class="zone-links">
                        {nav type:video no:3 count:8 order:5,2,3,8,4,1,6,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-stripe">
                    <div class="zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="zone-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="srchzone">
                <div class="qk-search">
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
        <div class="pg-block">
            <div class="content-block cf">
                <div class="cb-header">
                    <h4 class="cb-title">{base64}🔥热搜视频{/base64}</h4>
                </div>
                <div class="cb-body">
                    <ul class="kw-cloud">
                        {splite var:hot_video_search}
                        <a class="kw-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-block">
            <div class="content-block cf">
                <div class="cb-header">
                    <h4 class="cb-title">{base64}🔥热搜磁力{/base64}</h4>
                </div>
                <div class="cb-body">
                    <ul class="kw-cloud">
                        {splite var:hot_torrent_search}
                        <a class="kw-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
