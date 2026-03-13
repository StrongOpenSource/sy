<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="yw-wrapper">
        <div class="yw-flinks">
            <div class="yw-flinks-title">{base64}友情链接{/base64}</div>
            <div class="yw-flinks-list">
                {link area:link1}
                <a href="{_url}" target="_blank" rel="nofollow">{base64}{_text}{/base64}</a>
                {/link}
            </div>
        </div>
    </div>

    <div class="yw-footer">
        <div class="yw-wrapper">
            <p>{base64}{@var:footer_contact}{/base64}</p>
        </div>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
