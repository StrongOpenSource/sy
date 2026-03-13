<?php exit();?>

    <header class="topbar">
        <div class="gw">
            <div class="topbar-inner">
                <div class="brand-block">
                    <a class="brand-logo" href="/">
                        <span class="brand-text">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="addr-badge">
                        <span class="addr-lbl">{base64}最新网址{/base64}</span>
                        <span class="addr-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="gw">
        <div class="gs">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="gw">
        <div class="gs">
            <div class="cnav-wrap">
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}视频一区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:video no:5 count:8 order:3,1,8,6,2,7,5,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}视频二区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:video no:2 count:8 order:2,5,1,6,7,8,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}视频三区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:video no:4 count:8 order:1,4,2,5,6,7,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}视频四区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:video no:3 count:8 order:6,8,2,4,3,7,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}视频五区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:video no:1 count:8 order:8,1,7,6,4,5,2,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="cnav-row">
                    <div class="cnav-zone">{base64}磁力一区{/base64}</div>
                    <div class="cnav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="kw-zone">
                <div class="qbox">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="gw">
        <div class="gs">
            <div class="vsec">
                <div class="vsec-hdr">
                    <h4 class="vsec-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <div class="vsec-body">
                    <ul class="htags clrfix">
                        {splite var:hot_video_search}
                        <a class="htag-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="gw">
        <div class="gs">
            <div class="vsec">
                <div class="vsec-hdr">
                    <h4 class="vsec-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <div class="vsec-body">
                    <ul class="htags clrfix">
                        {splite var:hot_torrent_search}
                        <a class="htag-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
