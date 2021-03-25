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
                <h1>회사소개</h1>
                <ul class="company_list">
                    <li><a href="/app/view/company/index.php">인사말</a></li>
                    <li><a href="/app/view/company/vision.php">연혁 및 비전</a></li>
                    <li><a href="/app/view/company/certified.php">인증 현황</a></li>
                    <li><a href="/app/view/company/delivery.php">주요납품실적</a></li>
                    <li><a href="/app/view/company/map.php">찾아오시는길</a></li>
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
                <ruby>COMPANY</ruby><h1>찾아오시는길</h1>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/app/view/company/index.php">회사소개</a></li>
                    <li><a href="/app/view/company/map.php" class="color-red">찾아오시는길</a></li>
                </ul>
            </div>
            <div class="sub_con_images">
                <div id="daumRoughmapContainer1546065668932" class="root_daum_roughmap root_daum_roughmap_landing" style="width: 100%;"></div>
                <script charset="UTF-8" class="daum_roughmap_loader_script" src="http://dmaps.daum.net/map_js_init/roughmapLoader.js"></script>
                <script charset="UTF-8">
                    new daum.roughmap.Lander({
                        "timestamp" : "1546065668932",
                        "key" : "rjxo",
                        "mapWidth" : "100%",
                        "mapHeight" : "400"
                    }).render();
                </script>
            </div>
        </div>
    </div>
</div>

<?php

require PATH.'app/view/m/footer.php';

?>
