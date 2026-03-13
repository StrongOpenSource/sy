<?php exit();?>

    <header class="hd-outer">
        <div class="wp">
            <div class="hd-inner">
                <div class="hd-branding">
                    <a class="hd-logo-link" href="/">
                        <span class="hd-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="hd-domain-wrap">
                        <span class="hd-domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="hd-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="wp">
        <div class="sp">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="wp">
        <div class="sp">
            <div class="nav-panel">
                <div class="nav-strip">
                    <div class="nav-zone">{base64}视频一区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:3 count:8 order:6,8,4,3,2,7,5,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone">{base64}视频二区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:4 count:8 order:6,8,3,4,7,1,5,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone">{base64}视频三区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:5 count:8 order:4,5,7,1,2,6,8,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone">{base64}视频四区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:2 count:8 order:3,7,6,2,8,5,4,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone">{base64}视频五区{/base64}</div>
                    <div class="nav-items">
                        {nav type:video no:1 count:8 order:4,5,7,6,2,8,1,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-strip">
                    <div class="nav-zone">{base64}磁力一区{/base64}</div>
                    <div class="nav-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="sch-box">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="wp">
        <div class="sp">
            <div class="sec-block clearfix">
                <div class="sec-hd clearfix">
                    <h4 class="sec-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="hot-tags">
                    {splite var:hot_video_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="wp">
        <div class="sp">
            <div class="sec-block clearfix">
                <div class="sec-hd clearfix">
                    <h4 class="sec-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="hot-tags">
                    {splite var:hot_torrent_search}
                    <a class="hot-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
