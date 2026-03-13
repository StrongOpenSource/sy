<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="qqmwrap">
        <div class="qqmpad">
            <div class="qqm-section">
                <div class="qqm-sec-head">
                    <h4 class="qqm-sec-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="qqm-flinks" style="margin-top:10px;">
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

    <div class="qqmwrap">
        <div class="qqmpad">
            <footer class="qqm-footer">
                <p>{base64}{@var:footer_contact}{/base64}</p>
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
