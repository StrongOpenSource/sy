<?php exit();?>

    <div class="mg-branding">
        <div class="container">
            <div class="mg-brand-inner">
                <a class="mg-logo-link" href="/">
                    <span class="mg-logo-icon">🎬</span>
                    <span class="mg-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="mg-domain-tag">
                    <span class="mg-domain-badge">{base64}最新网址{/base64}</span>
                    <span class="mg-domain-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width:100%;margin:1px 0;overflow:hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <!-- PC 深色红边导航栏 -->
    <div class="mg-nav-block">
        <div class="container">
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}视频一区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:video no:1 count:8 order:8,1,5,2,6,4,3,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}视频二区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:video no:2 count:8 order:1,3,5,6,2,7,4,8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}视频三区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:video no:3 count:8 order:3,5,8,6,4,1,7,2}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}视频四区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:video no:4 count:8 order:6,7,5,8,2,3,1,4}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}视频五区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:video no:5 count:8 order:6,3,1,8,4,5,2,7}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mg-nav-row">
                <div class="mg-nav-zone">{base64}磁力一区{/base64}</div>
                <div class="mg-nav-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端导航 (data-nav-id 避免与PC端 id 重复) -->
    <div class="mg-mob-nav">
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}视频一区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:video no:1 count:8 order:8,1,5,2,6,4,3,7}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}视频二区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:video no:2 count:8 order:1,3,5,6,2,7,4,8}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}视频三区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:video no:3 count:8 order:3,5,8,6,4,1,7,2}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}视频四区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:video no:4 count:8 order:6,7,5,8,2,3,1,4}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}视频五区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:video no:5 count:8 order:6,3,1,8,4,5,2,7}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mg-mob-row">
            <div class="mg-mob-zone">{base64}磁力一区{/base64}</div>
            <div class="mg-mob-links">
                {nav type:bt no:1 count:8}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
    </div>
    <script>
    (function(){
        function syncMobActive(){
            var pcActive = document.querySelector('.mg-nav-block a.active');
            if(pcActive && pcActive.id){
                var mob = document.querySelector('.mg-mob-nav a[data-nav-id="'+pcActive.id+'"]');
                if(mob) mob.classList.add('active');
                return;
            }
            var cur = window.location.href;
            var links = document.querySelectorAll('.mg-mob-nav a[data-nav-id]');
            for(var i=0;i<links.length;i++){
                var h = links[i].getAttribute('href');
                if(h && h !== '/' && cur.indexOf(h) !== -1){ links[i].classList.add('active'); break; }
            }
        }
        if(document.readyState==='loading') document.addEventListener('DOMContentLoaded',syncMobActive);
        else syncMobActive();
    })();
    </script>

    <div class="container">
        <div class="content">
            <div id="site-srch">
                <div class="mg-search-wrap">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="mg-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--mg-text-sub);margin-bottom:8px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="mg-tags">
                    {splite var:hot_video_search}
                    <a class="mg-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="mg-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--mg-text-sub);margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="mg-tags">
                    {splite var:hot_torrent_search}
                    <a class="mg-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
