
            <style>
                .cpa {
                    display: none;
                }

                .cpa_item .icon {
                    display: block;
                    width: 45px;
                    height: 45px;
                    -webkit-transition: all .3s;
                    -moz-transition: all .3s;
                    -o-transition: all .3s;
                    transition: all .3s;
                }

                .cpa_item .icon img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 5px;
                }

                .cpa_item .name {
                    width: 100%;
                    text-align: center;
                    margin-top: 8px;
                    overflow: hidden;
                    white-space: nowrap;
                    text-overflow: ellipsis;
                }

                .cpa_item {
                    width: 8%;
                    padding: 10px 5px;
                    font-size: 12px;
                    display: inline-flex;
                    flex-direction: column;
                    align-items: center;
                    transition: font-weight, background, transform .3s;
                }

                @media (max-width: 480px) {
                    .cpa_item {
                        width: 19%;
                        padding: 10px 5px;
                        font-size: 12px;
                        display: inline-flex;
                        flex-direction: column;
                        align-items: center;
                        transition: font-weight, background, transform .3s;
                    }

                    .cpa {
                        display: block;
                    }

                }

                .toplink {
                    border-radius: 0px 20px 20px 0px;
                    cursor: pointer;
                    display: inline-block;
                    border: 2px solid #4983ef;
                    color: white;
                    font-size: 14px;
                    padding: 2px 4px;
                    margin: 2px;
                    background: #002ec4;
                }

                .fontlink {
                    margin-left: 10px;
                    cursor: pointer;
                    display: inline-block;
                    border: 2px solid #fffd00;
                    color: white;
                    font-size: 18px;
                    padding: 2px 4px;
                    margin: 2px;
                    font-weight: bold;
                }

                .fontlink:nth-child(1) {
                    color: #dc3545;
                    font-weight: bold;
                }

                .fontlink:nth-child(2) {
                    color: #007bff;
                    font-weight: bold;
                }

                .fontlink:nth-child(3) {
                    color: #28a745;
                    font-weight: bold;
                }

                .fontlink:nth-child(4) {
                    color: #ffc107;
                    font-weight: bold;
                }

                .fontlink:nth-child(5) {
                    color: #DB7093;
                    font-weight: bold;
                }

                .fontlink:nth-child(6) {
                    color: #4169E1;
                    font-weight: bold;
                }

                .fontlink:nth-child(7) {
                    color: #FFD700;
                    font-weight: bold;
                }

                .fontlink:nth-child(8) {
                    color: #00CED1;
                    font-weight: bold;
                }

                .fontlink:nth-child(9) {
                    color: #FF4500;
                    font-weight: bold;
                }

                .fontlink:nth-child(10) {
                    color: #3CB371;
                    font-weight: bold;
                }

                .fontlink:nth-child(11) {
                    color: #40E0D0;
                    font-weight: bold;
                }

                .fontlink:nth-child(12) {
                    color: #1E90FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(13) {
                    color: #0000FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(14) {
                    color: #8A2BE2;
                    font-weight: bold;
                }

                .fontlink:nth-child(15) {
                    color: #FF00FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(16) {
                    color: #6B8E23;
                    font-weight: bold;
                }

                .fontlink:nth-child(17) {
                    color: #FF8C00;
                    font-weight: bold;
                }

                .fontlink:nth-child(18) {
                    color: #A0522D;
                    font-weight: bold;
                }

                .fontlink:nth-child(19) {
                    color: #B22222;
                    font-weight: bold;
                }

                .fontlink:nth-child(20) {
                    color: #008080;
                    font-weight: bold;
                }

                .fontlink:nth-child(21) {
                    color: #dc3545;
                    font-weight: bold;
                }

                .fontlink:nth-child(22) {
                    color: #007bff;
                    font-weight: bold;
                }

                .fontlink:nth-child(23) {
                    color: #28a745;
                    font-weight: bold;
                }

                .fontlink:nth-child(24) {
                    color: #ffc107;
                    font-weight: bold;
                }

                .fontlink:nth-child(25) {
                    color: #DB7093;
                    font-weight: bold;
                }

                .fontlink:nth-child(26) {
                    color: #4169E1;
                    font-weight: bold;
                }

                .fontlink:nth-child(27) {
                    color: #FFD700;
                    font-weight: bold;
                }

                .fontlink:nth-child(28) {
                    color: #00CED1;
                    font-weight: bold;
                }

                .fontlink:nth-child(29) {
                    color: #FF4500;
                    font-weight: bold;
                }

                .fontlink:nth-child(30) {
                    color: #3CB371;
                    font-weight: bold;
                }


                .fontlink:nth-child(31) {
                    color: #40E0D0;
                    font-weight: bold;
                }

                .fontlink:nth-child(32) {
                    color: #1E90FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(33) {
                    color: #0000FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(34) {
                    color: #8A2BE2;
                    font-weight: bold;
                }

                .fontlink:nth-child(35) {
                    color: #FF00FF;
                    font-weight: bold;
                }

                .fontlink:nth-child(36) {
                    color: #6B8E23;
                    font-weight: bold;
                }

                .fontlink:nth-child(37) {
                    color: #FF8C00;
                    font-weight: bold;
                }

                .fontlink:nth-child(38) {
                    color: #A0522D;
                    font-weight: bold;
                }

                .fontlink:nth-child(39) {
                    color: #B22222;
                    font-weight: bold;
                }

                .fontlink:nth-child(40) {
                    color: #008080;
                    font-weight: bold;
                }
            </style>
            <div class="container">
                <section>
                    <div class="wrap">
                        <div class="block-text">

                        </div>
                </section>
            </div>
            <div class="stui-pannel__head clearfix" style="margin-bottom: 0; margin-top: 10px;">
                <h5 class="title">

                </h5>
            </div>
<!--             <div class="container">

                <section>
                    <div class="wrap">
                        <div class="block-text">

                            <a href="httpG0"  rel="nofollow" style="margin-left:10px;" class="fontlink">小马拉大车</a>
                            <a href="httpQG0"  rel="nofollow" style="margin-left:10px;" class="fontlink">人兽性爱</a>

                        </div>
                    </div>
                </div>
            </div> -->
        </div>

    <div class="footer">
        <div class="container">
            <div class="copyright">
                <p>Copyright © 2010-2028 保留所有权利</p>
            </div>
        </div>
    </div>


{ad area:dipiao}
{/ad}

<!--{@debug}-->
<!--{@source_debug}-->
{@site_tongji}

{ad area:js}
{/ad}