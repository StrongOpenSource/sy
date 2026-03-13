<?php exit();?>

    <header class="mt-head">
        <div class="mt-wrap">
            <div class="mt-hd-row">
                <div class="mt-branding">
                    <a class="mt-logo-lnk" href="/">
                        <span class="mt-logo-txt">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="mt-domain-pill">
                        <span class="mt-domain-cap">{base64}最新网址{/base64}</span>
                        <span class="mt-domain-url">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="mt-hero-band">
        <div class="mt-wrap">
            <div class="mt-row">
                {ad area:hengfu1}
                <div style="width: 100%; margin: 2px 0; overflow: hidden; border-radius: 10px;" class="{_class}">
                    <a href="{_url}" target="_blank">
                        <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                    </a>
                </div>
                {/ad}

                <div class="mt-navbox">
                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}视频一区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:video no:5 count:8 order:3,2,4,7,5,8,6,1}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}视频二区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:video no:3 count:8 order:5,6,7,3,1,2,8,4}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}视频三区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:video no:4 count:8 order:2,1,6,7,4,5,8,3}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}视频四区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:video no:2 count:8 order:2,5,6,8,3,4,7,1}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}视频五区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:video no:1 count:8 order:4,2,8,3,5,1,6,7}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>

                    <div class="mt-nrow">
                        <div class="mt-zone">{base64}磁力一区{/base64}</div>
                        <div class="mt-ncols">
                            {nav type:bt no:1 count:8}
                            <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                            {/nav}
                        </div>
                    </div>
                </div>

                <div id="mt-sbox">
                    <div class="mt-srch">
                        <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                            <input type="text" placeholder="请输入搜索关键字..." name="content">
                            
                            <button name="type" value="1">{base64}搜视频{/base64}</button>
                            <button name="type" value="2">{base64}搜磁力{/base64}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-wrap">
        <div class="mt-row">
            <div class="mt-card xcf">
                <div class="mt-card-top">
                    <h4 class="mt-card-ttl">{base64}🔥 热搜视频{/base64}</h4>
                </div>
                <div class="mt-card-body">
                    <ul class="mt-tagcloud">
                        {splite var:hot_video_search}
                        <a class="mt-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-wrap">
        <div class="mt-row">
            <div class="mt-card xcf">
                <div class="mt-card-top">
                    <h4 class="mt-card-ttl">{base64}🔥 热搜磁力{/base64}</h4>
                </div>
                <div class="mt-card-body">
                    <ul class="mt-tagcloud">
                        {splite var:hot_torrent_search}
                        <a class="mt-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                        {/splite}
                    </ul>
                </div>
            </div>
        </div>
    </div>
