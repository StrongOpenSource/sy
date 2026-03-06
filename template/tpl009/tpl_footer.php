
        <div id="wrapper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <footer class="site-footer" id="colophon">
                            <ul class="navbar-nav ml-auto youqinglj">
                                {splite var:hot_torrent_tags}
                                <li class="link-menu">
                                    <a href="/search.php?content={_var}&type=2" class="btn ljbtn" style="color: #007bff;">{base64}{_var}{/base64}</a>
                                </li>
                                {/splite}
                            </ul>
                            <ul class="navbar-nav ml-auto youqinglj">
                                <li class=" link-menu">
                                    <a class="btn btn-black ljbtn" style="    background-color: #007bff!important;color: #fff;border-color: #007bff!important;">合作伙伴：</a>
                                </li>
                                {link area:link_hzhb}
                                <li class="link-menu">
                                    <a href="{_url}" target="_blank" rel="nofollow" class="btn ljbtn" style="color:;">{base64}{_text}{/base64}</a>
                                </li>
                                {/link}
                            </ul>
                            <div class="footer-menu-container" style="display:none;">
                                <div class="menu-footer-menu-container">
                                    <ul id="menu-footer-menu" class="menu">
                                        <li id="menu-item-18" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-18"><a href="###">18 U.S.C 2257</a></li>
                                        <li id="menu-item-19" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19"><a href="###">DMCA</a></li>
                                        <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-20"><a href="###">Privacy Policy</a></li>
                                        <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="###">Terms of Use</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div class="site-info" style="font-size: 18px;text-align: center;">
                                All rights reserved. Powered {@var:site_name}
                            </div>
                        </footer>
                        <!-- #colophon -->
                    </div>
                    <!--col end -->
                </div>
                <!-- row end -->
            </div>
            <!-- container end -->
        </div>
        <!-- wrapper end -->
    </div>
    <!-- modal.html -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/lazyload.min.js' id='lazyload-js'></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/theme.min.js?ver=1.1.0.1650361592' id='vtt-scripts-js'></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/readmore.min.js?ver=2.2.1' id='vtt-readmore-js'></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/vtt-main-js.js?ver=1.0.1' id='vtt-main-js'></script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" type="text/css" rel="stylesheet" />



{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}