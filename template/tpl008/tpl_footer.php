

        
        <style>
            .search_tags a {
                background: #4c4c4c;
                font-size: 1rem;
                color: #fff;
            }

            .search_tags a:hover {
                background-color: #37bf91 !important;
                color: #ffffff !important;
            }
        </style>
        <div class="container container--big" style="padding: 10px 10px 10px;">
            <div class="trailer__cols">
                <div class="trailer__col">
                    <div class="btn-group">
                        
                        {splite var:hot_video_tags}
                        <div class="btn-group__item search_tags"><a class="btn btn--primary btn--sm" href="/search.php?content={_var}">{_var}</a></div>
                        {/splite}
                    </div>
                </div>
            </div>
        </div>
        <div style="width: 100%; text-align:center; margin-left: auto; margin-right: auto" class="header1280">
            <h3>友情链接</h3>
            <div class="grid-container">

                {link area:link_yqlj}
                <div class="grid-item" style="background: #;">
                    <a href="{_url}" data-id="8071" target="_blank" style="color:;">{base64}{_text}{/base64}</a>
                </div>
                {/link}
            </div>
        </div>

        <footer class="page__footer">
            <div class="footer">
                <div class="container">
                    <div class="footer__menu">
                        <nav class="menu">
                            <ul class="menu__list">
                                <li class="menu__item">
                                    <a class="menu__link">广告合作：</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="copyright">
                        <p class="copyright__text">
                            <strong class="copyright__mark">All rights reserved.&copy; 2022 {@var:site_name}</strong>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <a href="#" id="back-to-top" class="scroll-top btn btn--primary">&uarr;</a>
    <script data-cfasync="false" src="/template/{@var:cms_config_tpl_dir}/js/email-decode.min.js"></script>
    <script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/side.js" defer></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload();
        });
    </script>


    {ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}