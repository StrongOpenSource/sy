<?php exit();?>

    <header class="cm-header">
        <div class="cm-shell">
            <div class="cm-header-core">
                <div class="cm-identity">
                    <a class="cm-logo-link" href="/">
                        <span class="cm-logo-mark">▶</span>
                        <span class="cm-logo-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="cm-domain-block">
                        <span class="cm-domain-tag">{base64}最新网址{/base64}</span>
                        <span class="cm-domain-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="cm-shell">
        <div class="cm-gap">
            {ad area:hengfu1}
            <div style="width:100%; margin:2px 0; overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block; border-radius:6px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="cm-shell">
        <div class="cm-gap">
            <nav class="cm-navboard">
                <div class="cm-navrow">
                    <div class="cm-zone">{base64}视频一区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:video no:5 count:8 order:5,6,8,4,7,2,1,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cm-navrow">
                    <div class="cm-zone">{base64}视频二区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:video no:2 count:8 order:3,5,6,2,8,7,4,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cm-navrow">
                    <div class="cm-zone">{base64}视频三区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:video no:4 count:8 order:5,8,3,7,4,6,1,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cm-navrow">
                    <div class="cm-zone">{base64}视频四区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:video no:1 count:8 order:3,7,8,5,4,2,6,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cm-navrow">
                    <div class="cm-zone">{base64}视频五区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:video no:3 count:8 order:4,8,1,7,3,6,5,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cm-navrow">
                    <div class="cm-zone">{base64}磁力一区{/base64}</div>
                    <div class="cm-catlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="cm-searchbar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="cm-shell">
        <div class="cm-gap">
            <div class="cm-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--jade); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜视频{/base64}</p>
                <ul class="cm-tagpool">
                    {splite var:hot_video_search}
                    <a class="cm-tagitem" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="cm-shell">
        <div class="cm-gap">
            <div class="cm-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--jade); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜磁力{/base64}</p>
                <ul class="cm-tagpool">
                    {splite var:hot_torrent_search}
                    <a class="cm-tagitem" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
