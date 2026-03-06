
<!--     <div class="exclusive">
        <h2 class="ftitle"><i class="fas fa-search"></i> 视频标签</h2>
        <ul class="resou">
            <li class=""><a class="" href="/index.php?m=vod-search-wd-%E4%B9%B1%E4%BC%A6.htm"><i class="la la-search"></i> 乱伦</a></li>
            <li class=""><a class="" href="/index.php?m=vod-search-wd-%E7%86%9F%E5%A5%B3.htm"><i class="la la-search"></i> 熟女</a></li>
        </ul>
        <div class="waibuurl" style="margin-top: 5px;">
            <h2 class="ftitle">友情链接 </h2>
            <span class=""><a class="fen" href="https://www.avjishi2024.com/为人民服务/" data-id="4231" target="_blank" style="color:;" rel="nofollow">AV集市</a></span>
            <span class=""><a class="fen" href="https://發辦結艱.sejie8.de/懷鴿檻車檔" data-id="4183" target="_blank" style="color:;" rel="nofollow">色界吧</a></span>
            <span class=""><a class="fen" href="https://xn--uxqu3irshyw7b.prams-pm.xyz/?sbyj" data-id="4142" target="_blank" style="color:;" rel="nofollow">PORNMOSS</a></span>
        </div>
    </div> -->
    <footer>
        <div class="exclusive hangman" style="text-align: center;">
            <div class="revealed d">{@site_name}</div>
        </div>
    </footer>
    <script>
        document.getElementById('search_form').addEventListener('submit', function(e) {
            e.preventDefault();
            var keyword = document.getElementById('search_input').value;
            var cleanedKeyword = keyword.replace('-', '');
            if (cleanedKeyword === '') {
                alert('请输入搜索关键词！');
                e.preventDefault();
            } else {
                var search_url = '/search.php?content=' + encodeURIComponent(cleanedKeyword);
                window.location.href = search_url;
            }
        });
    </script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/common.js"></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js'></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload();
        });
    </script>
    <link href="/template/{@var:cms_config_tpl_dir}/css/all.min.css" rel="stylesheet">
    <!--<script type="text/javascript" src="/template/{@var:cms_config_tpl_dir}/js/addthis_widget.js"></script>-->



{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}