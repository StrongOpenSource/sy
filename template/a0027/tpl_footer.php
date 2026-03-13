<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="yy-wrap">
        <div class="yy-section">
            <div class="yy-content-block clearfix">
                <div class="yy-block-bar clearfix">
                    <h4 class="yy-block-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="yy-flinks">
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

    <div class="yy-wrap">
        <div class="yy-section">
            <footer class="yy-footer">
                <div class="yy-footer-copy">
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
