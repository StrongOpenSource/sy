<?php exit();?>

    <div class="pg-wrap">
        <div class="flink-panel">
            <div class="flink-panel-head">{base64}友情链接{/base64}</div>
            <dl class="flink-list">
                {link area:link1}
                <dd>
                    <a href="{_url}" target="_blank" rel="nofollow">{base64}{_text}{/base64}</a>
                </dd>
                {/link}
            </dl>
        </div>
    </div>

    <footer class="site-footer">
        <div class="pg-wrap">
            <div class="copyright">
                <p>
                    {base64}{@var:footer_contact}{/base64}
                </p>
            </div>
        </div>
    </footer>

{ad area:dipiao}
{/ad}

{@site_tongji}

{ad area:js}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
