<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="bound">
        <div class="bound-gap">
            <div class="blk-wrap zf">
                <div class="blk-body zf">
                    <div class="blk-head zf">
                        <h4 class="blk-name">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="ext-block">
                        <dl>
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="ext-link">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-foot">
        <div class="bound">
            <div class="foot-notice">
                <p>{base64}{@var:footer_contact}{/base64}</p>
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
