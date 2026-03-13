<?php exit();?>

    <header class="dkbar">
        <div class="rw">
            <div class="dkbar-row">
                <div class="mk-brand">
                    <a class="mk-logo" href="/">
                        <span class="mk-name">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="mk-url-badge">
                        <span class="mk-url-lbl">{base64}最新网址{/base64}</span>
                        <span class="mk-url-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="rw">
        <div class="rb">
            {ad area:hengfu1}
            <div style="width:100%;margin:1px 0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="rw">
        <div class="rb">
            <div class="nstrip">
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}视频一区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:video no:1 count:8 order:2,7,1,8,3,4,5,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}视频二区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:video no:2 count:8 order:6,8,2,1,5,7,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}视频三区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:video no:5 count:8 order:3,2,4,1,7,8,5,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}视频四区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:video no:4 count:8 order:1,3,8,7,4,6,2,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}视频五区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:video no:3 count:8 order:3,7,1,8,2,4,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
                <div class="nstrip-row">
                    <div class="nstrip-tag">{base64}磁力一区{/base64}</div>
                    <div class="nstrip-set">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="sch-area">
                <div class="kwform-wrap">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="rw">
        <div class="rb">
            <div class="blk">
                <div class="blk-head">
                    <h4 class="blk-cap"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <div class="blk-cnt">
                    <ul class="fltags clfix">
                        {splite var:hot_video_search}
                        <a class="fltag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="rw">
        <div class="rb">
            <div class="blk">
                <div class="blk-head">
                    <h4 class="blk-cap"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <div class="blk-cnt">
                    <ul class="fltags clfix">
                        {splite var:hot_torrent_search}
                        <a class="fltag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
