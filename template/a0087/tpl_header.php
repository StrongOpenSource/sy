<?php exit();?>

    <header class="tn-header">
        <div class="tn-shell">
            <div class="tn-header-core">
                <div class="tn-identity">
                    <a class="tn-logo-link" href="/">
                        <span class="tn-logo-penguin">▶</span>
                        <span class="tn-logo-wordmark">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="tn-domain-row">
                        <span class="tn-domain-flag">{base64}最新网址{/base64}</span>
                        <span class="tn-domain-str">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="tn-shell">
        <div class="tn-gap">
            {ad area:hengfu1}
            <div style="width:100%; margin:2px 0; overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block; border-radius:6px;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="tn-shell">
        <div class="tn-gap">
            <nav class="tn-navboard">
                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}视频一区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:video no:5 count:8 order:6,5,1,7,4,2,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}视频二区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:video no:2 count:8 order:6,7,4,2,1,5,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}视频三区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:video no:4 count:8 order:4,2,5,1,6,3,8,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}视频四区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:video no:3 count:8 order:5,7,1,3,4,6,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}视频五区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:video no:1 count:8 order:3,4,5,8,7,2,6,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="tn-navrow">
                    <div class="tn-zonetag">{base64}磁力一区{/base64}</div>
                    <div class="tn-catlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="tn-searchbox">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="tn-shell">
        <div class="tn-gap">
            <div class="tn-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--tnblue); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜视频{/base64}</p>
                <ul class="tn-tagpool">
                    {splite var:hot_video_search}
                    <a class="tn-tagitem" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="tn-shell">
        <div class="tn-gap">
            <div class="tn-block clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--tnblue); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜磁力{/base64}</p>
                <ul class="tn-tagpool">
                    {splite var:hot_torrent_search}
                    <a class="tn-tagitem" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
