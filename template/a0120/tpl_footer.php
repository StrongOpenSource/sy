<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="xx-wrap">
        <div class="xx-section">
            <div class="xx-card clearfix">
                <div class="xx-cardhead clearfix">
                    <h4 class="xx-cardtitle">{base64}友情链接{/base64}</h4>
                </div>
                <div class="xx-friendlinks">
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

    <div class="xx-footer">
        <div class="xx-wrap">
            <p>
                {base64}{@var:footer_contact}{/base64}
            </p>
        </div>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
