

<!-- 
                <h3 class="">热搜标签</h3>
                <ul class="related-queries">
                    <li class=""><a class="size-3 dibusoci" href=""  rel="nofollow" style="color:red;"><i class="la la-search"></i>国产视频</a></li>
                    <li class=""><a class="size-3 dibusoci" href=""  rel="nofollow" style="color:red;"><i class="la la-search"></i>国产传媒</a></li>
                </ul>
                <h3 class="d">友情链接</h3>
                <div class="related-sites linklist">
                    <li class=""><a href="" data-id="3483"  style="color:;" class="dibulj"><i class="la la-tag"></i>G奶急诊室</a></li>
                    <li class=""><a href="" data-id="3484"  style="color:;" class="dibulj"><i class="la la-tag"></i>水帘洞导航</a></li>
                </div> -->
            </div>
        </main>
        <center>
            <div style="width:100%; height:100%;"></div>
        </center>
        <footer class="footer">
            <div class="container">
                <ul class="footer-nav">
                    <!-- dropdownab.html -->
                </ul>
                <div class=""><a href="/cdn-cgi/l/email-protection#5f323a3138313e31666e666e1f38323e3633713c3032">业务邮箱:</a></div>
                <div class="">Copyright © {@site_name} All Rights Reserved.</div>
                <div class="">本站所有内容均来自互联网分享站点所提供的公开引用资源，未提供资源上传、存储服务。</div>
            </div>
        </footer>
    </div>
    <span style="cursor: pointer" class="btn-up" onclick="window.scrollTo(0,0);"><i class="la la-arrow-up"></i></span>
    <script src="/template/{@var:cms_config_tpl_dir}/js/validator.min.js"></script>
    <script src="/template/{@var:cms_config_tpl_dir}/js/scripts.js"></script>
    <script type='text/javascript' src='/template/{@var:cms_config_tpl_dir}/js/jquery.lazyload.js'></script>
    <script type="text/javascript">
        $(function() {
            $("img.lazy").lazyload();
        });
    </script>
    <!--
<link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/flag-icon.min2.css">
-->
    <link rel="stylesheet" href="/template/{@var:cms_config_tpl_dir}/css/line-awesome.min.css">
    <script>
        document.getElementById('search-form').addEventListener('submit', function(e) {
            e.preventDefault();
            var keyword = document.getElementById('wd').value;
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


{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}