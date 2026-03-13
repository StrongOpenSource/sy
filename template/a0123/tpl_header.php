<?php exit();?>

    <div class="site-hd">
        <div class="container">
            <div class="hd-inner">
                <div class="site-branding">
                    <a class="logo" href="/">
                        <span class="site-nm">{base64}{@var:tpl_page_title}{/base64}</span>
                    </a>
                    <div class="latest-domain">
                        <span class="domain-tag">{base64}最新网址{/base64}</span>
                        <span class="domain-val">{@var:permanent_domain}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            {ad area:hengfu1}
            <div style="width: 100%; margin: 1px 0; overflow: hidden;" class="{_class}">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" class="{_class}" style="display: block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="nav-wrapper">
                <div class="nav-row">
                    <div class="nav-label">{base64}视频一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:4 count:8 order:3,8,4,6,7,2,1,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频二区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:5 count:8 order:1,3,7,4,6,2,8,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频三区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:1 count:8 order:1,6,5,2,8,7,3,4}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频四区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:2 count:8 order:4,6,7,2,3,5,8,1}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}视频五区{/base64}</div>
                    <div class="nav-links">
                        {nav type:video no:3 count:8 order:3,5,1,7,4,6,8,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="nav-row">
                    <div class="nav-label">{base64}磁力一区{/base64}</div>
                    <div class="nav-links">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </div>

            <div id="sch-box">
                <div class="seach">
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
            <div class="mhlleset-main clearfix">
                <h4 style="font-size:14px;font-weight:700;color:var(--clr-text2);margin-bottom:10px;"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_video_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="mhlleset-main clearfix">
                <h4 style="font-size:14px;font-weight:700;color:var(--clr-text2);margin-bottom:10px;"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                <ul class="grid-container">
                    {splite var:hot_torrent_search}
                    <a class="grid-item" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
