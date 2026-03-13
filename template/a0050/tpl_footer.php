<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="w-box">
        <div class="w-pad">
            <div class="item-section cf">
                <div class="item-inner cf">
                    <div class="item-hd cf">
                        <h4 class="item-ttl">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="ref-links">
                        <dl>
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="ref-lnk">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foot-area">
        <div class="w-box">
            <div class="foot-copy">
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
