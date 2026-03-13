<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.mt-lz").lazyload({
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

    <div class="mt-wrap">
        <div class="mt-row">
            <div class="mt-card xcf">
                <div class="mt-card-top">
                    <h4 class="mt-card-ttl">{base64}友情链接{/base64}</h4>
                </div>
                <div class="mt-card-body">
                    <div class="mt-flinks">
                        <dl class="first">
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-wrap">
        <div class="mt-row">
            <div class="mt-footer">
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
