
        <footer class="footer">
            <span>© 2025 {@site_name}</span>
        </footer>
        <style>
            .topic {
                position: fixed;
                top: 0;
                left: 50%;
                height: 80px;
                width: 100%;
                margin: 0 auto;
                max-width: 995px;
                transform: translate(-50%, 0px);
                z-index: 9999;
            }

            .bdpic {
                position: fixed;
                bottom: 0px;
                left: 50%;
                /*height: 80px; */
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
                width: 90px;
                left: 0;
                z-index: 9999;
            }

            .rightd {
                position: fixed;
                top: 54%;
                transform: translateY(-50%);
                width: 90px;
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

            .topic img {
                height: 100px;
            }

            .bdpic img {
                height: 100px;
            }

            @media screen and (max-width:750px) {

                .leftd {
                    width: 70px !important;
                }

                .rightd {
                    width: 70px !important;
                }

                .topic img {
                    height: 70px;
                }

                /*.bdpic {    bottom: 50px; }*/
                .bdpic img {
                    height: 70px;
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