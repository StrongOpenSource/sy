<?php exit();?>
    <script>
        $("img.loadi").lazyload({
            effect: "fadeIn",
        });
        $("img.lazy").lazyload({
            effect: "fadeIn",
        });
    </script>

    <div class="container">
        <div class="content">
            <div class="mhlleset clearfix">
                <div class="mhlleset-main">
                    <div class="mhlleset-heading clearfix" style="overflow: hidden">
                        <h4 class="mhlleset-title">友情链接</h4>
                    </div>
                    <div class="txtguanggao2">
                        <dl class="first">

                            {link area:youqinglianjie}
                            <dd>
                                <a href="{_url}" target="_blank" rel="nofollow" class="pd5">{base64}{_text}{/base64}</a>
                            </dd>
                            {/link}
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="content">
            <div class="footer">
                <div class="copyright">
                    <p>{@var:footer_contact}</p>
                    <p>{base64}警告：此网站只适合于18岁或以上人士观看, 此网站内容可能令人反感；不可将此区域的内容派发，传阅，出售，出租，交给或者 借予年龄未满18岁的人士或将本网站内容向该人士出售、播放或放映；如果你是该影片的版权方所有者而要求删除影片的，请联系我们，我们会很快做出回复。{/base64}</p>
                    <p>© 2023-22024 {@var:site_name} All Rights Reserved.</p>
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