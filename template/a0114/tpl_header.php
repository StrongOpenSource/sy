<?php exit();?>

    <header class="rn-header">
        <div class="rn-wrap">
            <div class="rn-header-inner">
                <div class="rn-brand">
                    <a class="rn-logo" href="/">
                        <span class="rn-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="rn-domain">
                        <span class="rn-domain-lbl">{base64}最新网址{/base64}</span>
                        <span class="rn-domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="rn-wrap">
        <div class="rn-section">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="rn-wrap">
        <div class="rn-section">
            <div class="rn-catenav">
                <div class="rn-catrow">
                    <div class="rn-zone">{base64}视频一区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:video no:3 count:8 order:4,6,7,2,5,3,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="rn-catrow">
                    <div class="rn-zone">{base64}视频二区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:video no:4 count:8 order:5,6,2,7,8,1,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="rn-catrow">
                    <div class="rn-zone">{base64}视频三区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:video no:5 count:8 order:8,7,2,1,4,3,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="rn-catrow">
                    <div class="rn-zone">{base64}视频四区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:video no:1 count:8 order:7,1,2,4,5,6,3,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="rn-catrow">
                    <div class="rn-zone">{base64}视频五区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:video no:2 count:8 order:5,7,3,1,8,4,2,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="rn-catrow">
                    <div class="rn-zone">{base64}磁力一区{/base64}</div>
                    <div class="rn-zonelinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="rn-search">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rn-wrap">
        <div class="rn-section">
            <div class="rn-inner clearfix">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="rn-tags">
                    {splite var:hot_video_search}
                    <a class="rn-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="rn-wrap">
        <div class="rn-section">
            <div class="rn-inner clearfix">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="rn-tags">
                    {splite var:hot_torrent_search}
                    <a class="rn-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
