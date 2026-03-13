<?php exit();?>

    <div class="mn-branding">
        <div class="container">
            <div class="mn-brand-inner">
                <a class="mn-logo-link" href="/">
                    <span class="mn-logo-icon">🎬</span>
                    <span class="mn-site-name">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="mn-domain-pill">
                    <span class="mn-domain-badge">{base64}最新网址{/base64}</span>
                    <span class="mn-domain-val">{@var:permanent_domain}</span>
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

    <!-- PC 胶囊导航栏 -->
    <div class="mn-nav-block">
        <div class="container">
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}视频一区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:video no:1 count:8 order:4,3,5,2,7,8,1,6}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}视频二区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:video no:2 count:8 order:8,4,6,1,3,7,2,5}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}视频三区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:video no:3 count:8 order:1,8,7,2,3,5,6,4}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}视频四区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:video no:4 count:8 order:7,3,6,2,5,4,8,1}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}视频五区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:video no:5 count:8 order:5,2,4,7,6,3,1,8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
            <div class="mn-nav-row">
                <div class="mn-nav-zone">{base64}磁力一区{/base64}</div>
                <div class="mn-nav-links">
                    {nav type:bt no:1 count:8}
                    <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                    {/nav}
                </div>
            </div>
        </div>
    </div>

    <!-- 移动端导航 (data-nav-id 避免与PC端 id 重复) -->
    <div class="mn-mob-nav">
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}视频一区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:video no:1 count:8 order:4,3,5,2,7,8,1,6}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}视频二区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:video no:2 count:8 order:8,4,6,1,3,7,2,5}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}视频三区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:video no:3 count:8 order:1,8,7,2,3,5,6,4}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}视频四区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:video no:4 count:8 order:7,3,6,2,5,4,8,1}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}视频五区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:video no:5 count:8 order:5,2,4,7,6,3,1,8}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
        <div class="mn-mob-row">
            <div class="mn-mob-zone">{base64}磁力一区{/base64}</div>
            <div class="mn-mob-links">
                {nav type:bt no:1 count:8}
                <a href="{_class_link}" data-nav-id='{_class_id}'>{_class_name}</a>
                {/nav}
            </div>
        </div>
    </div>
    <script>
    (function(){
        /* 找出 PC 导航中已被 CMS 标记为 active 的链接 id，
           再把移动端对应 data-nav-id 的链接也加上 active 类 */
        function syncMobActive(){
            var pcActive = document.querySelector('.mn-nav-block a.active');
            if(pcActive && pcActive.id){
                var mobLink = document.querySelector('.mn-mob-nav a[data-nav-id="' + pcActive.id + '"]');
                if(mobLink) mobLink.classList.add('active');
                return;
            }
            /* 兜底：对比当前页面 URL 与链接 href */
            var cur = window.location.href;
            var mobLinks = document.querySelectorAll('.mn-mob-nav a[data-nav-id]');
            for(var i=0;i<mobLinks.length;i++){
                var href = mobLinks[i].getAttribute('href');
                if(href && cur.indexOf(href) !== -1 && href !== '/'){
                    mobLinks[i].classList.add('active');
                    break;
                }
            }
        }
        if(document.readyState === 'loading'){
            document.addEventListener('DOMContentLoaded', syncMobActive);
        } else {
            syncMobActive();
        }
    })();
    </script>

    <div class="container">
        <div class="content">
            <div id="site-srch">
                <div class="mn-search-wrap">
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
            <div class="mn-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--mn-text-sub);margin-bottom:8px;">{base64}🔥热搜视频{/base64}</h4>
                <ul class="mn-tags">
                    {splite var:hot_video_search}
                    <a class="mn-tag" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="mn-section">
                <h4 style="font-size:13px;font-weight:600;color:var(--mn-text-sub);margin-bottom:8px;">{base64}🔥热搜磁力{/base64}</h4>
                <ul class="mn-tags">
                    {splite var:hot_torrent_search}
                    <a class="mn-tag" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>