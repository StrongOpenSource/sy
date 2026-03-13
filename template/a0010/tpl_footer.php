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

    <div class="wrap">
        <div class="section-pad">
            <div class="content-block cf">
                <div class="block-header">
                    <h4 class="block-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="friendly-links-panel">
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

    <div class="wrap">
        <div class="section-pad">
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
