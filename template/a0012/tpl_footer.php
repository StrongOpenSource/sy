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
        <div class="sect">
            <div class="module-section clearfix">
                <div class="module-body">
                    <div class="module-header clearfix">
                        <h4 class="module-ttl">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="friend-links-list">
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

    <div class="wrap">
        <div class="site-footer">
            <div class="site-copyright">
                <p>
                    {base64}{@var:footer_contact}{/base64}
                </p>
            </div>
        </div>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
