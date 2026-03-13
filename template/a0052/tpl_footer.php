<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="outer">
        <div class="outer-pad">
            <div class="module-wrap cfix">
                <div class="module-card cfix">
                    <div class="module-top cfix">
                        <h4 class="module-name">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="ext-links">
                        <dl>
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="ext-href">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-foot">
        <div class="outer">
            <div class="foot-info">
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
