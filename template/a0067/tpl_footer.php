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

    <div class="ddg-wrap">
        <div class="ddg-sp">
            <div class="ddg-mod clearfix">
                <div class="ddg-mod-hd clearfix">
                    <h4 class="ddg-mod-ttl">{base64}友情链接{/base64}</h4>
                </div>
                <div class="ddg-flink">
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

    <div class="ddg-wrap">
        <div class="ddg-sp">
            <div class="ddg-ft">
                <div class="ddg-cpr">
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
