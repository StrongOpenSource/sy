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
        <div class="row-gap">
            <div class="module-block clearfix">
                <div class="module-head clearfix">
                    <h4 class="module-caption">{base64}友情链接{/base64}</h4>
                </div>
                <div class="friends-link">
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

    <div class="pg-wrap">
        <div class="row-gap">
            <div class="site-foot">
                <div class="copyright">
                    <p>
                        {base64}{@var:footer_contact}{/base64}
                    </p>
                </div>
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
