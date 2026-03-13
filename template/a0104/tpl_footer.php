<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="rw">
        <div class="rb">
            <div class="blk">
                <div class="blk-head">
                    <h4 class="blk-cap">{base64}友情链接{/base64}</h4>
                </div>
                <div class="blk-cnt">
                    <div class="flinks">
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

    <div class="rw">
        <div class="rb">
            <div class="bot">
                <div class="bot-txt">
                    <p>{base64}{@var:footer_contact}{/base64}</p>
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
