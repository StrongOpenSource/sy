<?php exit();?>

    <header class="ddg-hd">
        <div class="ddg-wrap">
            <div class="ddg-hd-in">
                <div class="ddg-brand">
                    <a class="ddg-logo" href="/">
                        <span class="ddg-sname">{base64}{@var:tpl_page_title}{/base64}<span class="ddg-sname-dot"></span></span>
                    </a>
                    <div class="ddg-mirror">
                        <span class="ddg-mirror-lbl">{base64}最新网址{/base64}</span>
                        <span class="ddg-mirror-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ddg-wrap">
        <div class="ddg-sp">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="ddg-wrap">
        <div class="ddg-sp">
            <div class="ddg-cat">
                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}视频一区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:video no:4 count:8 order:7,8,5,4,6,2,1,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}视频二区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:video no:2 count:8 order:8,2,6,5,4,3,1,7}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}视频三区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:video no:1 count:8 order:5,3,4,8,2,7,6,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}视频四区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:video no:5 count:8 order:6,5,7,2,8,4,1,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}视频五区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:video no:3 count:8 order:7,1,5,3,6,2,4,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ddg-cat-row">
                    <div class="ddg-cat-zone">{base64}磁力一区{/base64}</div>
                    <div class="ddg-cat-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="ddg-sch">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="ddg-wrap">
        <div class="ddg-sp">
            <div class="ddg-mod clearfix">
                <div class="ddg-mod-hd clearfix">
                    <h4 class="ddg-mod-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="ddg-hotlist">
                    {splite var:hot_video_search}
                    <a class="ddg-hkw" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="ddg-wrap">
        <div class="ddg-sp">
            <div class="ddg-mod clearfix">
                <div class="ddg-mod-hd clearfix">
                    <h4 class="ddg-mod-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="ddg-hotlist">
                    {splite var:hot_torrent_search}
                    <a class="ddg-hkw" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
