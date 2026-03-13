<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({
                    effect: "fadeIn",
                    threshold: 200
                });
                $("img.lazy").lazyload({
                    effect: "fadeIn",
                    threshold: 200
                });
            });
        }
    </script>

    <div class="pg-wrap">
        <div class="pg-block">
            <div class="section-wrap clearfix">
                <div class="section-body">
                    <div class="section-hd clearfix">
                        <h4 class="section-ttl">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="flink-box">
                        <dl class="first">
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="pd5">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pg-wrap">
        <div class="pg-block">
            <footer class="site-footer">
                <div class="copyright">
                    <p>
                        {base64}{@var:footer_contact}{/base64}
                    </p>
                </div>
            </footer>
        </div>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
