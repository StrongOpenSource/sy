
    
    <div class="footer">
        <div class="wrapper">
            <div class="sstags">
                <ul>
                {splite var:hot_torrent_tags}
                <li class=""><a class="" href="/search.php?content=b64{_var_b64}&type=2">{base64}{_var}{/base64}</a></li>
                {/splite}


                </ul>
            </div>
            <h3 style="padding: 0;margin: 0 0 8px 8px;color: #fff"><span class="">友情链接</span></h3>
            <div class="linklist">
                <ul style="padding:0;margin: 0 0 10px;">
                {link area:link_yqlj2}
                    <li class=""><a class="bai" href="{_url}" target="_blank" style="color:;" rel="nofollow">{base64}{_text}{/base64}</a></li>
                {/link}
                </ul>
            </div>

            <p class="">
                All rights reserved. Powered {@var:site_name}</p>
            <ul>
                <li><a class="">广告合作:</a></li>
                <li><a class="">商务TG:@</a></li>
            </ul>
        </div>
    </div>
    <script data-cfasync="false" src="/template/{@var:cms_config_tpl_dir}/js/email-decode.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/functions.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js"></script>
    <script type="text/javascript">
        $(function() {
            $("img").lazyload();
        });
    </script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/font-awesome.min.css" rel="stylesheet">




{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}