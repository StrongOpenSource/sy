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

    <div class="layout-wrap">
        <div class="layout-inner">
            <div class="block-section cf">
                <div class="block-main cf">
                    <div class="block-hd cf">
                        <h4 class="block-ttl">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="links-panel">
                        <dl class="link-items">
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="link-a">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="btm-bar">
        <div class="layout-wrap">
            <div class="btm-copy">
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
