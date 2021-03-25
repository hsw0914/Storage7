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
                <h1>고객센터</h1>
                <ul class="customer_list">
                    <li><a href="/app/view/customer/index.php">공지사항</a></li>
                    <li><a href="/app/view/customer/gallery.php">행사갤러리</a></li>
                    <li><a href="/app/view/customer/recruitment.php">채용정보</a></li>
                    <li><a href="/app/view/customer/news.php">보도자료</a></li>
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
                <ruby>CUSTOMER CENTER</ruby><h1>채용정보</h1>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/app/view/customer/index.php">고객센터</a></li>
                    <li><a href="/app/view/customer/recruitment.php" class="color-red">채용정보</a></li>
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

