<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="csawrap">
        <div class="csapad">
            <div class="csa-section">
                <div class="csa-sec-head">
                    <h4 class="csa-sec-title">{base64}友情链接{/base64}</h4>
                </div>
                <div class="csa-flinks" style="margin-top:10px;">
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

    <div class="csawrap">
        <div class="csapad">
            <footer class="csa-footer">
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
