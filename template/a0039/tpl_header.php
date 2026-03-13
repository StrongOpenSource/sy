<?php exit();?>

    <header class="sitetop">
        <div class="pgbox">
            <div class="sitetop-inner">
                <a class="sitebrand" href="/">
                    <span class="brandname">{base64}{@var:tpl_page_title}{/base64}</span>
                </a>
                <div class="newurl-badge">
                    <span class="newurl-lbl">{base64}最新网址{/base64}</span>
                    <span class="newurl-val">{@var:permanent_domain}</span>
                </div>
            </div>
        </div>
    </header>

    <div class="pgbox">
        <div class="rowpad">
            {ad area:hengfu1}
            <div class="bannerslot {_class}" style="width:100%;overflow:hidden;">
                <a href="{_url}" target="_blank">
                    <img src="{_image}" width="100%" style="display:block;">
                </a>
            </div>
            {/ad}
        </div>
    </div>

    <div class="pgbox">
        <div class="rowpad">
            <nav class="catboard">
                <div class="catline">
                    <div class="cattag">{base64}视频一区{/base64}</div>
                    <div class="catlinks">
                        {nav type:video no:3 count:8 order:1,8,7,4,5,6,3,2}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="catline">
                    <div class="cattag">{base64}视频二区{/base64}</div>
                    <div class="catlinks">
                        {nav type:video no:2 count:8 order:3,1,5,4,7,8,2,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="catline">
                    <div class="cattag">{base64}视频三区{/base64}</div>
                    <div class="catlinks">
                        {nav type:video no:1 count:8 order:2,5,1,8,4,7,3,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="catline">
                    <div class="cattag">{base64}视频四区{/base64}</div>
                    <div class="catlinks">
                        {nav type:video no:5 count:8 order:8,3,4,7,1,2,6,5}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="catline">
                    <div class="cattag">{base64}视频五区{/base64}</div>
                    <div class="catlinks">
                        {nav type:video no:4 count:8 order:1,4,3,2,5,8,7,6}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>

                <div class="catline">
                    <div class="cattag">{base64}磁力一区{/base64}</div>
                    <div class="catlinks">
                        {nav type:bt no:1 count:8}
                        <a href="{_class_link}" id='{_class_id}'>{_class_name}</a>
                        {/nav}
                    </div>
                </div>
            </nav>

            <div id="ddab">
                <div class="querybar">
                    <form id="search" name="search" method="get" action="/search.php" onsubmit="return qrsearch();">
                        <input type="text" placeholder="请输入搜索关键字..." name="content">
                        
                        <button name="type" value="1">{base64}搜视频{/base64}</button>
                        <button name="type" value="2">{base64}搜磁力{/base64}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="pgbox">
        <div class="rowpad">
            <div class="filmblock clearfix">
                <div class="filmblock-hd clearfix">
                    <h4 class="filmblock-title"><strong>{base64}🔥热搜视频{/base64}</strong></h4>
                </div>
                <ul class="hotkeys">
                    {splite var:hot_video_search}
                    <a class="hotkey-btn" href="/search.php?content=b64{_var_b64}" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>

    <div class="pgbox">
        <div class="rowpad">
            <div class="filmblock clearfix">
                <div class="filmblock-hd clearfix">
                    <h4 class="filmblock-title"><strong>{base64}🔥热搜磁力{/base64}</strong></h4>
                </div>
                <ul class="hotkeys">
                    {splite var:hot_torrent_search}
                    <a class="hotkey-btn" href="/search.php?content=b64{_var_b64}&type=2" rel="nofollow">{base64}{_var}{/base64}</a>
                    {/splite}
                </ul>
            </div>
        </div>
    </div>
