    <div class="new_content">

        <div class="body">


{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}

            <div class="content top left">
                <div class="logo">
                    <a href="/">
                        <img src="/template/{@var:cms_config_tpl_dir}/picture/103.svg">
                        <span style="color:#f9f06b">{@site_name}</span>
                    </a>
                </div>

                <div class="nav">
                    <a href="/" class="">网站首页</a>
{nav type:video no:v2 count:7} 
<a href="{_class_link}" class="">{_class_name}</a>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
<a href="{_class_link}" class="">{_class_name}</a>
{/nav}





                </div>

            </div>

        </div>

        <div class="body">
            <div class="content bottom right">

                <div class="search">
                    <form action="/search.php" accept-charset="UTF-8" method="get">
                        <input name="content" required placeholder="输入关键字.." autocomplete="off" value="">
                        <button type="submit">搜索</button>
                    </form>

                    <div class="links links-vip" style="margin-bottom:10px;">
{link area:link1}
<a class="jzhh" href="{_url}"  style="">{base64}{_text}{/base64}</a>
{/link}
                    </div>
                    &nbsp;热门搜索：
{splite var:search_tags_torrent}
<a href="/search.php?content=b64{_var_b64}&type=2" class="tag" >{base64}{_var}{/base64}</a>
{/splite}
                </div>

            </div>
        </div>

