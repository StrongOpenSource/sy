    <div id="app">

        <div class="box">
{ad area:hengfu1}
<div style="width: 100%;margin: 1px 0px;" class="{_class}">
    <a href="{_url}" target="_blank" rel="nofollow">
        <img src="{_image}" style="width: 100%;margin: 1px 0px;" class="{_class}"></a>
</div>
{/ad}
        </div>

        <header class="header">
            <a class="logo" href="/">
                <img src="/template/{@var:cms_config_tpl_dir}/picture/4d886eeccc9d503617a2d41fa747b048.png">
            </a>
            <form id="search" name="search" method="get" action="/index.php/vodsearch/-------------.html" onSubmit="return qrsearch();">
                <div class="soso">
                    <input type="text" id="wd" name="wd" class="keywd" placeholder="输入关键词" id="searchInput">
                    <button onclick="search($('#searchInput').val().trim());" type="submit">
                        <svg t="1655274004524" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="3068">
                            <path d="M1008.160651 931.256445l-177.567435-177.567436A464.412483 464.412483 0 1 0 639.131615 897.076798a57.521845 57.521845 0 1 0-43.071914-106.707191 350.758209 350.758209 0 1 1 118.100408-78.988332 10.976391 10.976391 0 0 0-0.83365 1.042063 6.530258 6.530258 0 0 1-0.83365 0.625237 54.465129 54.465129 0 0 0-5.696608 69.887653 58.286024 58.286024 0 0 0 7.850203 9.864857c1.042062 0.972592 2.223066 1.736771 3.3346 2.639892l212.719674 212.719674a54.604071 54.604071 0 0 0 76.904207 0 54.604071 54.604071 0 0 0 0.555766-76.904206z" p-id="3069"></path>
                        </svg>
                    </button>
                </div>
            </form>
        </header>
        <style>
            .menu a {
                background: #C3E0C6;
            }
        </style>
        <nav class="nav">
            <div class="menu" style="background: #C3E0C6;">
                <a href="/">网站首页</a>
{nav type:video no:v2 count:7} 
<a  rel="nofollow" style="color: #008A40;" href="{_class_link}">{_class_name}</a>
{/nav}
{nav type:bt no:1 count:2 name:国产种子,日本种子} 
<a  rel="nofollow" style="color: #008A40;" href="{_class_link}">{_class_name}</a>
{/nav}



            </div>
        </nav>
        <div class="box">
            <div class="txt">
                本站完全免费，欢迎访问!
            </div>
        </div>
        <div class="box">
            <div class="links">
{link area:link1}
                <a href="{_url}" style="background: #DFFFBF;color: #5A8F00;">{base64}{_text}{/base64}</a>
{/link}
            </div>
        </div>
        <style>
            .hotlink {
                border-radius: 6px;
                color: #fff;
                background: red;
                font-size: 14px;
                padding: 2px 5px;
            }
        </style>

        <style>
            .photo-two {
                display: inline-block;
                display: block;
                height: 90px;
                width: 90px;
                margin: 20px;
                text-align: center;

            }

            .photo-two a {
                line-height: 24px;
            }

            .photo-two img {
                border-radius: 12%;
                height: 90px;
                width: 90px;
            }

            .photo-name {
                font-weight: bold;
                color: #000;
                font-size: initial;
            }




            @media screen and (max-width:1280px) {
                .photo-two img {
                    border-radius: 12%;
                    height: 60px;
                    width: 60px;
                }

                .photo-two a {
                    line-height: 20px;
                }
            }



            @media screen and (max-width:980px) {

                .photo-two img {
                    border-radius: 12%;
                    height: 58px;
                    width: 58px;
                }




            }

            @media screen and (max-width:750px) {

                .photo-two {
                    width: 20%;
                    margin: 6px;
                }

                .photo-name {
                    font-size: small;

                }



            }
        </style>

        <style>
            .col6 {
                position: relative;
                min-height: 1px;
                width: 100%;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            .row6 {
                display: flex;
                flex-wrap: wrap;
            }


            @media screen and (max-width:750px) {
                .col6 {
                    width: 100% !important;
                }

                .col6 img {
                    height: 60px !important;
                }
            }

            @media (min-width: 768px) .col6 {
                width: 100%;
            }
        </style>

        <div class="box">

            <ul style="float:left;margin-left: -25px;">
{splite var:search_tags_torrent}
                <li style="display: inline-block; margin: 5px 2px 5px 2px;"><a href="/search.php?content=b64{_var_b64}&type=2" class="hotlink">{base64}{_var}{/base64}</a></li>
{/splite}
            </ul>
        </div>



