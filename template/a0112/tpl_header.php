<?php exit();?>

    <header class="top-header">
        <div class="page-wrap">
            <div class="header-body">
                <div class="brand-block">
                    <a class="brand-link" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="addr-badge">
                        <span class="addr-lbl">{base64}最新网址{/base64}</span>
                        <span class="addr-str">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-wrap">
        <div class="sect-content">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="page-wrap">
        <div class="sect-content">
            <div class="cate-nav">
                <div class="cate-row">
                    <div class="zone-tag">{base64}视频一区{/base64}</div>
                    <div class="cate-items">
                        {nav type:video no:5 count:8 order:1,2,8,7,4,6,5,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="zone-tag">{base64}视频二区{/base64}</div>
                    <div class="cate-items">
                        {nav type:video no:4 count:8 order:5,3,8,4,7,2,1,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="zone-tag">{base64}视频三区{/base64}</div>
                    <div class="cate-items">
                        {nav type:video no:1 count:8 order:1,5,2,7,6,8,4,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="zone-tag">{base64}视频四区{/base64}</div>
                    <div class="cate-items">
                        {nav type:video no:3 count:8 order:6,3,5,2,4,7,1,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="zone-tag">{base64}视频五区{/base64}</div>
                    <div class="cate-items">
                        {nav type:video no:2 count:8 order:2,6,8,1,4,7,5,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="zone-tag">{base64}磁力一区{/base64}</div>
                    <div class="cate-items">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="seek-box">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrap">
        <div class="sect-content">
            <div class="sect-inner clearfix">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="hotwords">
                    {splite var:hot_video_search}
                    <a class="hotword" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="page-wrap">
        <div class="sect-content">
            <div class="sect-inner clearfix">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="hotwords">
                    {splite var:hot_torrent_search}
                    <a class="hotword" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
