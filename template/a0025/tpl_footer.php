<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="xh-wrap">
        <div class="xh-section">
            <div class="xh-content-unit clearfix">
                <div class="xh-unit-head clearfix">
                    <h4 class="xh-unit-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="xh-flink-panel">
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

    <div class="xh-wrap">
        <div class="xh-section">
            <footer class="xh-footer">
                <div class="xh-copy">
                    <p>
                        {base64}{@var:footer_contact}{/base64}
                    </p>
                </div>
            </footer>
        </div>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
