<?php exit();?>

    <header class="xx-header">
        <div class="xx-wrap">
            <div class="xx-header-inner">
                <div class="xx-brand">
                    <a class="xx-logo" href="/">
                        <span class="xx-sitename">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="xx-domain-wrap">
                        <span class="xx-domain-tag">{base64}最新网址{/base64}</span>
                        <span class="xx-domain-txt">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="xx-wrap">
        <div class="xx-section">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="xx-wrap">
        <div class="xx-section">
            <div class="xx-catnav">
                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}视频一区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:video no:3 count:8 order:4,8,2,7,1,6,5,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}视频二区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:video no:4 count:8 order:2,7,6,4,5,8,1,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}视频三区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:video no:2 count:8 order:7,1,6,4,8,3,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}视频四区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:video no:1 count:8 order:1,3,5,8,2,7,4,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}视频五区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:video no:5 count:8 order:2,4,5,8,1,3,7,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="xx-catrow">
                    <div class="xx-catlabel">{base64}磁力一区{/base64}</div>
                    <div class="xx-catlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="xx-searchbox">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="xx-wrap">
        <div class="xx-section">
            <div class="xx-inner clearfix">
                <h4><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="xx-tagcloud">
                    {splite var:hot_video_search}
                    <a class="xx-tagitem" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="xx-wrap">
        <div class="xx-section">
            <div class="xx-inner clearfix">
                <h4><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="xx-tagcloud">
                    {splite var:hot_torrent_search}
                    <a class="xx-tagitem" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
