<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="pg-wrap">
        <div class="pg-inner">
            <div class="sec-block fix">
                <div class="sec-body fix">
                    <div class="sec-head fix">
                        <h4 class="sec-title">{base64}友情链接{/base64}</h4>
                    </div>
                    <div class="flinks-panel">
                        <dl class="flinks-list">
                            {link area:link1}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="fl-lnk">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="foot-bar">
        <div class="pg-wrap">
            <div class="foot-txt">
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
