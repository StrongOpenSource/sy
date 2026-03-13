<?php exit();?>

    <header class="kgtopbar">
        <div class="kgwrap">
            <div class="kgtopbar-inner">
                <div class="kg-brand">
                    <a class="kg-logo" href="/">
                        <span class="kg-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="kg-domain">
                        <span class="kg-domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="kg-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="kgwrap">
        <div class="kgpad">
            {ad area:hengfu1}
            <div style="width:100%;margin:0;padding:0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="kgwrap">
        <div class="kgpad">
            <div class="kgnav-block">
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}视频一区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:video no:2 count:8 order:1,7,2,4,8,6,3,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}视频二区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:video no:5 count:8 order:8,2,3,1,4,6,7,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}视频三区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:video no:3 count:8 order:6,1,8,7,4,2,3,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}视频四区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:video no:4 count:8 order:6,3,4,8,1,2,5,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}视频五区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:video no:1 count:8 order:6,3,4,8,1,2,7,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="kgnav-row">
                    <div class="kgzone-name">{base64}磁力一区{/base64}</div>
                    <div class="kgzone-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="kgsearch">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="kgwrap">
        <div class="kgpad">
            <div class="kgsection">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="kgtags">
                    {splite var:hot_video_search}
                    <a class="kgtag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="kgwrap">
        <div class="kgpad">
            <div class="kgsection">
                <h4 style="font-size:12px;color:var(--text-muted);margin-bottom:5px;font-weight:700;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="kgtags">
                    {splite var:hot_torrent_search}
                    <a class="kgtag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
