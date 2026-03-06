



        <footer id="colophon" class="site-footer br-bottom-10" role="contentinfo">
            <div class="row">
                <div class="one-column-footer">
                    <section id="custom_html-3" class="widget_text widget widget_custom_html">
                        <h2 class="widget-title">热门视频</h2>
                        <div class="textwidget custom-html-widget">
                            {splite var:hot_video_tags}
                            <span class=""><a href="/search.php?content={_var}&type=1" class="partners">{_var}</a></span>
                            {/splite}
                        </div>
                    </section>
                </div>
                <div class="one-column-footer">
                    <section id="custom_html-3" class="widget_text widget widget_custom_html">
                        <h2 class="widget-title ">友情链接</h2>
                        <div class="textwidget custom-html-widget">
                            <div class="linklist">
                                <ul style="padding:0;margin: 0 0 10px;">
                                    {link area:link_yqlj}
                                    <li class=""><a class="bai" href="{_url}" data-id="8199" target="_blank" style="color:;" rel="nofollow">{base64}{_text}{/base64}</a></li>
                                    {/link}
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="clear"></div>
                <div class="footer-menu-container">
                    <div class="menu-footer-container">
                        <ul id="menu-footer" class="menu">

                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26434">
                                tg:@</li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-26434">
                                合作邮箱:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer><!-- #colophon -->
    </div><!-- #page -->
    <a class="button" href="#" id="back-to-top" title="Back to top">
        <i class="fa fa-chevron-up"></i>
    </a>

    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload();
        });
    </script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" type="text/css" rel="stylesheet" />

{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}

</body>

</html>