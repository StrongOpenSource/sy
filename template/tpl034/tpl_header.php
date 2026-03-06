    <div class="container">
        <div class="row">

{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}

            
            <div class="ewave-header__top clearfix">
                <div class="ewave-header__logo"> <a class="logo" href="/" style="background-image:url(/template/{@var:cms_config_tpl_dir}/images/logo.png);"></a> </div>
                <div class="ewave-header__type">   </div>
                <div class="ewave-header__search">
                    <form id="search" name="search" action="/search.php">
                        <input type="text" id="wd" name="content" class="mac_wd form-control" value="" placeholder="请输入影片名..." />
                        <button class="submit" id="searchbutton" type="submit"></button>
                    </form>
                </div>
                <ul class="ewave-header__user hidden-xs">
                </ul>
            </div>
            <div class="ewave-header__menu clearfix" style="margin-bottom: 10px;">
                <ul class="clearfix">
                    <li class=""><a href="/">网站首页</a></li>
{nav type:video no:v2 count:8} 
                    <li><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产磁力,日本磁力} 
                    <li><a href="{_class_link}">{_class_name}</a></li>
{/nav}

                </ul>
            </div>
            <div class="foornav">
                <ul>
                    <li class=""><a href="/">首页</a></li>

{nav type:video no:v1 count:8} 
                    <li><a href="{_class_link}">{_class_name}</a></li>
{/nav}
{nav type:bt no:1 count:2 name:国产BT,日本BT} 
                    <li><a href="{_class_link}">{_class_name}</a></li>
{/nav}


                </ul>
            </div>
            <div class="flink clearfix"  style="margin-bottom: 10px;">
                <div class="divTags">
{link area:link1}
                    <a href="{_url}"  rel="noopener nofollow">{base64}{_text}{/base64}</a>
{/link}
                </div>
            </div>

            <div class="flink clearfix" style="margin-bottom: 10px;">
                <div class="divTag">
{splite var:search_tags_torrent}
                    <a href="/search.php?content=b64{_var_b64}&type=2" >{base64}{_var}{/base64}</a>

{/splite}
                </div>
            </div>