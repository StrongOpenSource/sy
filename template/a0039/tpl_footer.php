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

    <div class="pgbox">
        <div class="rowpad">
            <div class="filmblock clearfix">
                <div class="filmblock-hd clearfix">
                    <h4 class="filmblock-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="rellinks">
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

    <div class="pgbox">
        <footer class="pgbase">
            <div class="copyright">
                <p>
                    {base64}{@var:footer_contact}{/base64}
                </p>
            </div>
        </footer>
    </div>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
