<?php exit();?>        <div id="foot">
            <div class="footer">
                <div class="wrap">
                    <div class="menu clearfix">
                        <div class="spreadimage" onclick="open_url('{@var:cooperation}')">
                            <i class="icon-collaborate"></i>
                            <p class="spreadp1">合作加盟</p>
                            <p class="spreadp2">优质合作伙伴共同成长</p></div>
                        <div class="spreadimage" onclick="open_url('{@var:qa}')">
                            <i class="icon-familiar"></i>
                            <p class="spreadp1">常见问题</p>
                            <p class="spreadp2">及时在线解决问题</p></div>
                        <div class="spreadimage" onclick="open_url('{@var:service}')">
                            <i class="icon-service"></i>
                            <p class="spreadp1">在线客服</p>
                            <p class="spreadp2">7*24小时免费在线咨询</p></div>
                        <div class="spreadimage" onclick="open_url('{@var:telegram}')">
                            <i class="icon-telegram"></i>
                            <p class="spreadp1">{base64}加入电报{/base64}</p>
                            <p class="spreadp2">一起观看讨论最新视频</p></div>
                    </div>
                    <p>{base64}警告︰本网站只适合十八岁或以上人士观看。<br>
                        站点申明：我们立足于美利坚合众国，受北美法律保护,未满18岁或被误导来到这里，请立即离开！<br>
                        本站由SeyouCMS强力驱动{/base64}
                    </p>
                </div>
            </div>
        </div>

{ad area:dipiao}
{/ad}
<script type="text/javascript">
function open_url(url){
    if(url != ''){
        window.open(url, '_blank');
    }
    
}
</script>
<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}