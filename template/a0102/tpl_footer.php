<?php exit();?>

    <script>
        if (typeof jQuery !== 'undefined') {
            jQuery(document).ready(function($) {
                $("img.loadi").lazyload({ effect: "fadeIn", threshold: 200 });
                $("img.lazy").lazyload({ effect: "fadeIn", threshold: 200 });
            });
        }
    </script>

    <div class="gw">
        <div class="gs">
            <div class="vsec">
                <div class="vsec-hdr">
                    <h4 class="vsec-ttl">{base64}友情链接{/base64}</h4>
                </div>
                <div class="vsec-body">
                    <div class="fl-area">
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

    <div class="gw">
        <div class="gs">
            <div class="ftr">
                <div class="ftr-copy">
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
