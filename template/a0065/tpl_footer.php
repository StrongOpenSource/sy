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

    <div class="ycf-wrap">
        <div class="ycf-gap">
            <div class="ycf-sec clearfix">
                <div class="ycf-sec-hd clearfix">
                    <h4 class="ycf-sec-ttl">{base64}友情链接{/base64}</h4>
                </div>
                <div class="ycf-flinks">
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

    <div class="ycf-wrap">
        <div class="ycf-gap">
            <div class="ycf-ft">
                <div class="ycf-cr">
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
