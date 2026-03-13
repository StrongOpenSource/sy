<?php exit();?>

    <nav class="top-bar">
        <div class="pg-wrap">
            <div class="top-bar-inner">
                <div class="brand-group">
                    <a class="brand-anchor" href="/">
                        <span class="brand-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="mirror-info">
                        <span class="mirror-tag">{base64}最新网址{/base64}</span>
                        <span class="mirror-addr">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="pg-wrap">
        <div class="row-gap">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="pg-wrap">
        <div class="row-gap">
            <div class="cate-wrap">
                <div class="cate-row">
                    <div class="cate-zone">{base64}视频一区{/base64}</div>
                    <div class="cate-list">
                        {nav type:video no:5 count:8 order:8,7,4,2,3,5,6,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-zone">{base64}视频二区{/base64}</div>
                    <div class="cate-list">
                        {nav type:video no:1 count:8 order:1,6,5,4,8,7,3,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-zone">{base64}视频三区{/base64}</div>
                    <div class="cate-list">
                        {nav type:video no:2 count:8 order:6,3,1,5,7,2,8,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-zone">{base64}视频四区{/base64}</div>
                    <div class="cate-list">
                        {nav type:video no:4 count:8 order:4,5,1,2,7,3,8,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-zone">{base64}视频五区{/base64}</div>
                    <div class="cate-list">
                        {nav type:video no:3 count:8 order:5,8,1,2,7,3,4,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="cate-row">
                    <div class="cate-zone">{base64}磁力一区{/base64}</div>
                    <div class="cate-list">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="search-wrap">
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
        <div class="row-gap">
            <div class="module-block clearfix">
                <div class="module-head clearfix">
                    <h4 class="module-caption"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="tag-cloud">
                    {splite var:hot_video_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="pg-wrap">
        <div class="row-gap">
            <div class="module-block clearfix">
                <div class="module-head clearfix">
                    <h4 class="module-caption"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="tag-cloud">
                    {splite var:hot_torrent_search}
                    <a class="tag-entry" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
