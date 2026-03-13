<?php exit();?>

    <header class="sx-header">
        <div class="sx-brand-strip">
            <div class="sx-brand-inner">
                <a class="sx-logolink" href="/">
                    <span class="sx-logo-cube">▶</span>
                    <span class="sx-logo-label">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
            </div>
        </div>
    </header>

    <div class="sx-wrap">
        {ad area:hengfu1}
        <div style="width:100%; overflow:hidden;" class="{_class}">
            <a href="{_url}" target="_blank">
                <img src="{_image}" width="100%" class="{_class}" style="display:block; border-radius:5px;">
            </a>
        </div>
        {/ad}
    </div>

    <div class="sx-wrap">
        <div class="sx-spacing">
            <nav class="sx-navboard">
                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}视频一区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:video no:3 count:8 order:5,8,1,6,3,7,2,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}视频二区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:video no:2 count:8 order:1,3,7,8,2,4,5,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}视频三区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:video no:4 count:8 order:8,1,4,5,6,2,7,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}视频四区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:video no:1 count:8 order:3,4,8,5,2,1,7,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}视频五区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:video no:5 count:8 order:5,3,2,4,7,1,8,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="sx-navrow">
                    <div class="sx-rowlabel">{base64}磁力一区{/base64}</div>
                    <div class="sx-rowlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="sx-searchpanel">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="sx-wrap">
        <div class="sx-spacing">
            <div class="sx-module clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--sx-orange); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜视频{/base64}</p>
                <ul class="sx-keywords">
                    {splite var:hot_video_search}
                    <a class="sx-kw" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="sx-wrap">
        <div class="sx-spacing">
            <div class="sx-module clearfix">
                <p style="font-size:12px; font-weight:700; color:var(--sx-orange); letter-spacing:0.5px; margin-bottom:8px;">{base64}🔥 热搜磁力{/base64}</p>
                <ul class="sx-keywords">
                    {splite var:hot_torrent_search}
                    <a class="sx-kw" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
