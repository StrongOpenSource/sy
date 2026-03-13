<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="zw">
        <div class="zp">
            <div class="docpanel">
                <div class="docpanel-hd">
                    <h4 class="docpanel-ttl">{base64}友情链接{/base64}</h4>
                </div>
                <div class="docpanel-body">
                    <div class="friendlinks">
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

    <div class="zw">
        <div class="zp">
            <div class="sitebottom">
                <div class="sitebottom-copy">
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
