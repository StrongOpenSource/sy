



        <div class="friendTitle" id="friendTitle" style="">
                <h1 id="tuijianH1" style="">热门站点</h1>
        </div>
        <div class="group-box">
            <div class="group-contents layui-row bg-card">
{link area:link_rmzd}
<a target="_blank" href="{_url}" style="color:#fff !important;background:#3965aa !important;" class="mylink-y"  rel="nofollow">{base64}{_text}{/base64}</a>
{/link}
            </div>
            <br />

        </div>

        <div class="tags-box container">
            <div class="tags">
                <span class="tags-1 has-text-centered">
                    <div class="label2" id="biaoqian2">
{splite var:search_tags_video}
<a href="/search.php?content=b64{_var_b64}&type=1">{base64}{_var}{/base64}</a>
{/splite}

                    </div>
                </span>
            </div>
        </div>

        <div>
            <div class="return_top">
                <i class="layui-icon layui-icon-top"></i>
            </div>
        </div>
        <div class="bottom">

            <div class="wrap" style="text-align:center;">
                {base64}  
                警告：本站不存儲任何視頻資源，不提供資源的下載，本站資源均來自互聯網采集，僅供海外華人和個人學習使用。
                {/base64}
            </div>
        </div>



        <script>
            if (window.scrollY > 500) {
                document.querySelector(".return_top").style.display = 'block';
            }
            window.addEventListener("scroll", function() {
                var scroTop = window.scrollY;
                if (scroTop > 500) {
                    document.querySelector(".return_top").style.display = 'block';
                } else {
                    document.querySelector(".return_top").style.display = 'none';
                }
            });
            $('.return_top').click(function() {
                $("html,body").animate({
                    scrollTop: 0
                }, "fast");
            });
        </script>


{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}