<?php exit();?>

    <header class="ycf-hd">
        <div class="ycf-wrap">
            <div class="ycf-hd-in">
                <div class="ycf-brand">
                    <a class="ycf-logo" href="/">
                        <span class="ycf-sname">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="ycf-latest">
                        <span class="ycf-latest-tag">{base64}最新网址{/base64}</span>
                        <span class="ycf-latest-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ycf-wrap">
        <div class="ycf-gap">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="ycf-wrap">
        <div class="ycf-gap">
            <div class="ycf-nav">
                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}视频一区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:video no:2 count:8 order:1,6,8,7,3,2,4,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}视频二区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:video no:5 count:8 order:6,7,3,1,2,4,5,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}视频三区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:video no:1 count:8 order:4,7,6,5,1,3,2,8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}视频四区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:video no:4 count:8 order:1,2,7,5,8,6,4,3}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}视频五区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:video no:3 count:8 order:5,8,3,2,6,4,7,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="ycf-nav-row">
                    <div class="ycf-nav-tag">{base64}磁力一区{/base64}</div>
                    <div class="ycf-nav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="ycf-sch">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="ycf-wrap">
        <div class="ycf-gap">
            <div class="ycf-sec clearfix">
                <div class="ycf-sec-hd clearfix">
                    <h4 class="ycf-sec-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="ycf-keywords">
                    {splite var:hot_video_search}
                    <a class="ycf-kw" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="ycf-wrap">
        <div class="ycf-gap">
            <div class="ycf-sec clearfix">
                <div class="ycf-sec-hd clearfix">
                    <h4 class="ycf-sec-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="ycf-keywords">
                    {splite var:hot_torrent_search}
                    <a class="ycf-kw" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
