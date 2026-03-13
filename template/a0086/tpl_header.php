<?php exit();?>

    <header class="qd-header">
        <div class="qd-shell">
            <div class="qd-header-core">
                <div class="qd-identity">
                    <a class="qd-logo-link" href="/">
                        <span class="qd-logo-emblem">▶</span>
                        <span class="qd-logo-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="qd-domain-strip">
                        <span class="qd-domain-label">{base64}最新网址{/base64}</span>
                        <span class="qd-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="qd-shell">
        <div class="qd-gap">
            {ad area:hengfu1}
            <div style="width:100%; margin:2px 0; overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block; border-radius:5px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="qd-shell">
        <div class="qd-gap">
            <nav class="qd-navboard">
                <div class="qd-navrow">
                    <div class="qd-zone">{base64}视频一区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:video no:4 count:8 order:8,5,6,1,3,2,4,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qd-navrow">
                    <div class="qd-zone">{base64}视频二区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:video no:1 count:8 order:8,6,2,3,4,1,5,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qd-navrow">
                    <div class="qd-zone">{base64}视频三区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:video no:3 count:8 order:6,5,2,8,7,1,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qd-navrow">
                    <div class="qd-zone">{base64}视频四区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:video no:2 count:8 order:4,7,8,6,1,3,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qd-navrow">
                    <div class="qd-zone">{base64}视频五区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:video no:5 count:8 order:1,4,7,2,3,5,8,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="qd-navrow">
                    <div class="qd-zone">{base64}磁力一区{/base64}</div>
                    <div class="qd-catlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="qd-querybox">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="qd-shell">
        <div class="qd-gap">
            <div class="qd-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--crimson); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜视频{/base64}</p>
                <ul class="qd-tagpool">
                    {splite var:hot_video_search}
                    <a class="qd-tagitem" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="qd-shell">
        <div class="qd-gap">
            <div class="qd-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--crimson); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜磁力{/base64}</p>
                <ul class="qd-tagpool">
                    {splite var:hot_torrent_search}
                    <a class="qd-tagitem" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
