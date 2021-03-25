<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');

require PATH.'app/lib/db.php';
require PATH.'app/lib/func.php';
require PATH.'app/view/default/header.php';

?>

<div class="main_con_wrap">
    <div class="sub_ani">
        <embed src="/static/swfs/subvisual.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" height="214">
    </div>
    <div class="main_con">
        <div class="sub_menu_wrap">
            <div class="sub_menu">
                <h1>A/S 센터</h1>
                <ul class="ascenter_list">
                    <li><a href="/app/view/ascenter/index.php">A/S 정보</a></li>
                    <li><a href="/app/view/ascenter/find.php">A/S 지정점찾기</a></li>
                    <li><a href="/app/view/ascenter/contact.php">A/S 문의</a></li>
                </ul>
            </div>
            <address class="tel">
                <h5>CUSTOMER CENTER</h5>
                <h1>031) 359-8323</h1>
                <p>평일 : 08:30 ~ 17:30</p>
                <p>주말, 공휴일 휴무</p>
            </address>
        </div>
        <div class="sub_con">
            <div class="sub_con_header">
                <ruby>A/S CENTER</ruby><h1>A/S 문의</h1>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/app/view/ascenter/index.php">A/S 센터</a></li>
                    <li><a href="/app/view/ascenter/contact.php" class="color-red">A/S 문의</a></li>
                </ul>
            </div>
            <div class="sub_con_images">

            </div>
        </div>
    </div>
</div>

<?php

require PATH.'app/view/m/footer.php';

?>

