

        <footer class="footer">
            <div class="block-footer">
                <div class="wrap">
                    <div class="flex">
                        <div class="copyright">
                            <p>所有的影片皆从外部来源于网络收集。没有视频托管本服务器上。如果您有任何法律问题，请联系合适的视频所有者或主机的网站.你还可以与我们联系。</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <style>
            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                right: 30px;
                z-index: 99;
                border: none;
                outline: none;
                background-color: red;
                color: white;
                cursor: pointer;
                padding: 15px;
                border-radius: 10px;
            }

            #myBtn:hover {
                background-color: #555;
            }
        </style>
        <button onclick="topFunction()" id="myBtn" >返回顶部</button>
        <script>
            // 当网页向下滑动 20px 出现"返回顶部" 按钮
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                console.log(121);
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }

            // 点击按钮，返回顶部
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }
        </script>

        <style>
            .topd {
                position: fixed;
                top: 0;
                left: 50%;
                height: 80px;
                /*max-height: 80px;*/
                width: 100%;
                margin: 0 auto;
                max-width: 995px;
                transform: translate(-50%, 0px);
                z-index: 9999;
            }

            .bottomd {
                position: fixed;
                bottom: 25px;
                left: 50%;
                height: 80px;
                /*max-height: 80px;*/
                width: 100%;
                margin: 0 auto;
                max-width: 995px;
                transform: translate(-50%, 0px);
                z-index: 9999;
            }

            .leftd {
                position: fixed;
                top: 54%;
                transform: translateY(-50%);
                width: 120px;
                left: 0;
                z-index: 9999;
            }

            .rightd {
                position: fixed;
                top: 54%;
                transform: translateY(-50%);
                width: 120px;
                right: 0;
                z-index: 9999;
            }

            .close_btn {
                position: absolute;
                right: 0;
                top: 0;
                height: 20px;
                line-height: 20px;
                width: 40px;
                background: #f00;
                text-align: center;
            }

            .close_r {
                /* still bad on picking color */
                background: orange;
                color: red;
                /* make a round button */
                border-radius: 12px;
                /* center text */
                line-height: 20px;
                text-align: center;
                height: 20px;
                width: 20px;
                font-size: 18px;
                padding: 1px;
            }


            /* use cross as close button */
            .close_r::before {
                content: "\2716";
            }

            /* place the button on top-right */
            .close_r {
                top: -10px;
                right: -10px;
                position: absolute;
            }

            .close_l {
                /* still bad on picking color */
                background: orange;
                color: red;
                /* make a round button */
                border-radius: 12px;
                /* center text */
                line-height: 20px;
                text-align: center;
                height: 20px;
                width: 20px;
                font-size: 18px;
                padding: 1px;
            }


            /* use cross as close button */
            .close_l::before {
                content: "\2716";
            }

            /* place the button on top-right */
            .close_l {
                top: -10px;
                left: -10px;
                position: absolute;
            }

            .closebox1 {
                text-align: center;
                display: inherit;
                background-color: #0000007a;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox2 {
                text-align: center;
                display: inherit;
                background-color: #0000007a;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox3 {
                text-align: center;
                display: inherit;
                background-color: #0000007a;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            .closebox4 {
                text-align: center;
                display: inherit;
                background-color: #0000007a;
                color: #fff;
                padding: 4px 0;
                display: block;
            }

            @media screen and (max-width:750px) {

                .leftd {
                    width: 90px !important;
                }

                .rightd {
                    width: 90px !important;
                }

                .topd {
                    height: 60px;
                }

                .bottomd {
                    height: 60px;
                    bottom: 35px;
                }

                .topd img {
                    height: 60px;
                }

                .bottomd img {
                    height: 60px;
                }




            }
        </style>
        <script type="text/javascript">
            $(".close_l").on("click", function() {
                $(this).parent("div").hide();
            });
        </script>
        <script type="text/javascript">
            $(".close_r").on("click", function() {
                $(this).parent("div").hide();
            });
        </script>
        <script type="text/javascript">
            $(".closebox1").on("click", function() {
                $(".closebox1").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox2").on("click", function() {
                $(".closebox2").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox3").on("click", function() {
                $(".closebox3").parent("div").css("display", "none");
            });
        </script>
        <script type="text/javascript">
            $(".closebox4").on("click", function() {
                $(".closebox4").parent("div").css("display", "none");
            });
        </script>
    </div>



{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}