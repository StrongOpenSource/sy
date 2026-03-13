<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.ent-lazy").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="ent-wrap">
        <div class="ent-section">
            <div class="ent-panel ent-cf">
                <div class="ent-panel-hd">
                    <h4 class="ent-panel-title">
                        <span>{base64}友情链接{/base64}</span>
                    </h4>
                </div>
                <div class="ent-panel-bd">
                    <div class="ent-links-box">
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

    <div class="ent-wrap">
        <div class="ent-section">
            <div class="ent-foot">
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
