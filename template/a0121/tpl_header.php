<?php exit();?>

    <div class="tx-branding">
        <div class="container">
            <div class="tx-brand-inner">
                <a class="tx-logo-link" href="/">
                    <span class="tx-logo-icon">🎬</span>
                    <span class="tx-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="tx-domain-tag">
                    <span class="tx-domain-badge">{base64}最新网址{/base64}</span>
                    <span class="tx-domain-val">{@var:permanent_domain}</span>
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

    <!-- PC 蓝紫渐变导航栏 -->
    <div class="tx-nav-block">
        <div class="container">
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}视频一区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:video no:1 count:8 order:7,1,8,5,2,3,4,6}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}视频二区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:video no:2 count:8 order:2,8,3,6,1,7,4,5}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}视频三区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:video no:3 count:8 order:6,2,8,1,4,7,3,5}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}视频四区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:video no:4 count:8 order:6,7,3,5,8,4,1,2}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}视频五区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:video no:5 count:8 order:2,7,4,6,5,8,1,3}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="tx-nav-row">
                <div class="tx-nav-zone">{base64}磁力一区{/base64}</div>
                <div class="tx-nav-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端导航 (data-nav-id 避免与PC端 id 重复) -->
    <div class="tx-mob-nav">
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}视频一区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:video no:1 count:8 order:7,1,8,5,2,3,4,6}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}视频二区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:video no:2 count:8 order:2,8,3,6,1,7,4,5}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}视频三区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:video no:3 count:8 order:6,2,8,1,4,7,3,5}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}视频四区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:video no:4 count:8 order:6,7,3,5,8,4,1,2}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}视频五区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:video no:5 count:8 order:2,7,4,6,5,8,1,3}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="tx-mob-row">
            <div class="tx-mob-zone">{base64}磁力一区{/base64}</div>
            <div class="tx-mob-links">
                {nav type:bt no:1 count:8}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
    </div>
    <script>
    (function(){
        function syncMobActive(){
            var pcActive = document.querySelector('.tx-nav-block a.active');
            if(pcActive && pcActive.id){
                var mob = document.querySelector('.tx-mob-nav a[data-nav-id="'+pcActive.id+'"]');
                if(mob) mob.classList.add('active');
                return;
            }
            var cur = window.location.href;
            var links = document.querySelectorAll('.tx-mob-nav a[data-nav-id]');
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
                <div class="tx-search-wrap">
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
            <div class="tx-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--tx-text-sub);margin-bottom:8px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="tx-tags">
                    {splite var:hot_video_search}
                    <a class="tx-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="tx-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--tx-text-sub);margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="tx-tags">
                    {splite var:hot_torrent_search}
                    <a class="tx-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
