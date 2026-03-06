            <div class="content">
                {ad area:hengfu1}
                <div style="width: 100%;margin: 1px 0px;" class="{_class}">
                    <a href="{_url}" target="_blank" rel="nofollow"  class="{_class}" style="width:100%;">
                    <img src="{_image}" class="{_class}" style="width:100%;"></a>
                </div>
                {/ad}
            </div>
            <div class="header">
                <div class="header-inner">
                    <div class="logo">
                        <a href="/">
                            <img src="/template/{@var:cms_config_tpl_dir}/images/logo.png"/></a>
                    </div>
                    <div class="search">
                        <form id="search_form" action="/search.php" method="get">
                            <span class="search-button">搜索</span>
                            <div class="search-text">
                                <input type="text" name="content" placeholder="搜索" /></div>
                        </form>
                    </div>
                </div>
            </div>
            <nav>
                <div class="navigation">
                    <button class="button">
                        <span class="icon">
                            <span class="ico-bar"></span>
                            <span class="ico-bar"></span>
                            <span class="ico-bar"></span>
                        </span>
                    </button>
                    <ul class="primary">
                        <li>
                            <a href="/" id="item1"></a>
                        </li>

                        {nav type:video no:v2 count:8}
                        <li>
                            <a href="{_class_link}">{_class_name}</a>
                        </li>
                        {/nav}
                        {nav type:bt no:1 count:2 name:国产磁力,日本种子}
                        <li>
                            <a href="{_class_link}" >{_class_name}</a>
                        </li>
                        {/nav}
                    </ul>
                </div>
            </nav>

            <div class="content">
                <div class="main-content">
                    <div class="main-container">
                        <div class="ylink">
                            <span>站长推荐</span>
                            <div>                                
                                {link area:link1}
                                <a href="{_url}" target="_blank" rel="nofollow">{base64}{_text}{/base64}</a>
                                {/link}
                            </div>
                        </div>
                        <div class="search-cloud1">
                            <font color="#1bbc9d">
                                <b>热门标签：</b>
                            </font>
                            {splite var:search_tags}
                                <a href="/search.php?content={_var}">{_var}</a>
                            {/splite}
                        </div>
                    </div>
                </div>
            </div>