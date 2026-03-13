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

    <div class="content-body">
        <div class="links-module">
            <div class="links-module-hd">{base64}友情链接{/base64}</div>
            <div>
                <dl class="flink-list">
                    {link area:link1}
                    <dd>
                        <a href="{_url}" target="_blank" rel="nofollow">{base64}{_text}{/base64}</a>
                    </dd>
                    {/link}
                </dl>
            </div>
        </div>
    </div>

    <div class="site-footer-bar">
        <p>
            {base64}{@var:footer_contact}{/base64}
        </p>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
