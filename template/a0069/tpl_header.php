<?php exit();?>

    <header class="ifg-hd">
        <div class="ifg-wrap">
            <div class="ifg-hd-in">
                <div class="ifg-brand">
                    <a class="ifg-logo" href="/">
                        <span class="ifg-sname-main">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="ifg-mirror">
                        <span class="ifg-mirror-lbl">{base64}最新网址{/base64}</span>
                        <span class="ifg-mirror-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="ifg-wrap">
        <div class="ifg-sp">
            {ad area:hengfu1}
            <div style="width:100%;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="ifg-wrap">
        <div class="ifg-sp">
            <div class="ifg-nav-outer">
                <div class="ifg-nav-inner">
                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}视频一区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:video no:1 count:8 order:7,3,2,6,4,1,5,8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}视频二区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:video no:3 count:8 order:4,8,2,7,5,3,1,6}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}视频三区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:video no:2 count:8 order:3,5,6,8,4,1,7,2}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}视频四区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:video no:5 count:8 order:1,8,6,5,3,2,7,4}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}视频五区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:video no:4 count:8 order:7,6,8,4,2,5,1,3}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="ifg-nav-strip">
                        <div class="ifg-nav-lbl">{base64}磁力一区{/base64}</div>
                        <div class="ifg-nav-links">
                            {nav type:bt no:1 count:8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>
            </div>

            <div id="ddab">
                <div class="ifg-sch">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="ifg-wrap">
        <div class="ifg-sp">
            <div class="ifg-sec clearfix">
                <div class="ifg-sec-hd clearfix">
                    <h4 class="ifg-sec-ttl"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="ifg-tags">
                    {splite var:hot_video_search}
                    <a class="ifg-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="ifg-wrap">
        <div class="ifg-sp">
            <div class="ifg-sec clearfix">
                <div class="ifg-sec-hd clearfix">
                    <h4 class="ifg-sec-ttl"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="ifg-tags">
                    {splite var:hot_torrent_search}
                    <a class="ifg-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
