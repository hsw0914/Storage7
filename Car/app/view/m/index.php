<?php
define('PATH',$_SERVER['DOCUMENT_ROOT'].'/');

require PATH.'app/lib/db.php';
require PATH.'app/lib/func.php';
require PATH.'app/view/default/header.php';
require PATH.'app/view/general/index.php';
require PATH.'app/view/m/footer.php';
?>
<!---->
<!--<div class="main_con_wrap">-->
<!--    <div class="ani">-->
<!--        <ul class="ani-ul">-->
<!--            <li class="ani-li">-->
<!--                <a href="#">-->
<!--                    <div class="slide-text-wrap text-white">-->
<!--                        <h1>HAPPY WINTER SERVICE</h1>-->
<!--                        <hr>-->
<!--                        <h3>무상점검부터10%할인 서비스까지!</h3>-->
<!--                        <h3>렉서스 서비스와 함께 안전하고 따뜻한 겨울 보내세요.</h3>-->
<!--                    </div>-->
<!--                    <img src="/static/img/slide/slide1.jpg" alt="slide">-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="ani-li">-->
<!--                <a href="#">-->
<!--                    <div class="slide-text-wrap text-white">-->
<!--                        <h1>LEXUS CREATIVE MASTERS Ep.4</h1>-->
<!--                        <hr>-->
<!--                        <h3>수많은 레이어가 만들어내는 이미지로</h3>-->
<!--                        <h3>순간의 기억을 표현하는 김수연 장신구 작가</h3>-->
<!--                    </div>-->
<!--                    <img src="/static/img/slide/slide2.jpg" alt="slide">-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="ani-li">-->
<!--                <a href="#">-->
<!--                    <div class="slide-text-wrap text-white">-->
<!--                        <h1>NEW GENERATION ES 300h</h1>-->
<!--                        <hr>-->
<!--                        <h3>하이브리드의 대담한 반전</h3>-->
<!--                        <h3>ES 300h LAUNCHING</h3>-->
<!--                    </div>-->
<!--                    <img src="/static/img/slide/slide3.jpg" alt="slide">-->
<!--                </a>-->
<!--            </li>-->
<!--            <li class="ani-li">-->
<!--                <a href="#">-->
<!--                    <div class="slide-text-wrap text-white">-->
<!--                        <h1>LEXUS HYBRID SERVICE</h1>-->
<!--                        <hr>-->
<!--                        <h3>당신의 하이브리드에 품격을 더합니다</h3>-->
<!--                    </div>-->
<!--                    <img src="/static/img/slide/slide4.jpg" alt="slide">-->
<!--                </a>-->
<!--            </li>-->
<!--        </ul>-->
<!--        <div class="slide_background"></div>-->
<!--        <div class="ani-ab">-->
<!--            <div class="ani-index">-->
<!--                <a href="#" title="stop" class="ani-a1213"></a>-->
<!--                <a href="#" title="0" class="ani-button-1 ani-indexbutton 0"></a>-->
<!--                <a href="#" title="1" class="ani-button-2 ani-indexbutton 1"></a>-->
<!--                <a href="#" title="2" class="ani-button-3 ani-indexbutton 2"></a>-->
<!--                <a href="#" title="3" class="ani-button-2 ani-indexbutton 3"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="menu-scroll">-->
<!--        <ul class="menu">-->
<!--            <li><a href="#">스타렉스</a></li>-->
<!--            <li><a href="#">카니발</a></li>-->
<!--            <li><a href="#">쏘울</a></li>-->
<!--            <li><a href="#">레이</a></li>-->
<!--            <li><a href="#">버스</a></li>-->
<!--            <li><a href="#">생활복지차량</a></li>-->
<!--            <li><a href="#">기타차량</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!---->
<!--    <ul class="important-skill">-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="important-skill-wrap">-->
<!--                    <div class="important-skill-background"></div>-->
<!--                    <div class="important-skill-img-wrap"><img src="/static/img/nav/amazing.jpg" alt="img1"></div>-->
<!--                    <div class="important-skill-text">-->
<!--                        <h1>Amazing Technical</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="important-skill-wrap">-->
<!--                    <div class="important-skill-background"></div>-->
<!--                    <div class="important-skill-img-wrap"><img src="/static/img/nav/StarexHiroop.jpg" alt="img2"></div>-->
<!--                    <div class="important-skill-text">-->
<!--                        <h1>Perfect Design</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="important-skill-wrap">-->
<!--                    <div class="important-skill-background"></div>-->
<!--                    <div class="important-skill-img-wrap"><img src="/static/img/nav/box.jpg" alt="img3"></div>-->
<!--                    <div class="important-skill-text">-->
<!--                        <h1>창림모아츠 구매혜택</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<!--    <div class="pannel">-->
<!--        <div class="pannel-img-wrap">-->
<!--            <div class="pannel-img-background"></div>-->
<!--            <div class="pannel-img"></div>-->
<!--            <div class="pannel-img-text">-->
<!--                <h1>Skill Expert</h1>-->
<!--                <p>창림모아츠의 기술자들은 각 분야에서 30년이상</p>-->
<!--                <p>실력을 쌓아온 장인들 입니다</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    <ul class="technical">-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="technical-wrap">-->
<!--                    <div class="technical-background"></div>-->
<!--                    <div class="technical-img-wrap"><img src="/static/img/nav/technical1.jpg" alt="img3"></div>-->
<!--                    <div class="technical-text">-->
<!--                        <h1>창림모아츠 구매혜택</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="technical-wrap">-->
<!--                    <div class="technical-background"></div>-->
<!--                    <div class="technical-img-wrap"><img src="/static/img/nav/technical2.PNG" alt="img3"></div>-->
<!--                    <div class="technical-text">-->
<!--                        <h1>창림모아츠 구매혜택</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="technical-wrap">-->
<!--                    <div class="technical-background"></div>-->
<!--                    <div class="technical-img-wrap"><img src="/static/img/nav/technical3.PNG" alt="img3"></div>-->
<!--                    <div class="technical-text">-->
<!--                        <h1>창림모아츠 구매혜택</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="#">-->
<!--                <div class="technical-wrap">-->
<!--                    <div class="technical-background"></div>-->
<!--                    <div class="technical-img-wrap"><img src="/static/img/nav/technical4.PNG" alt="img3"></div>-->
<!--                    <div class="technical-text">-->
<!--                        <h1>창림모아츠 구매혜택</h1>-->
<!--                        <hr>-->
<!--                        <p>기대를 뛰어넘는 놀라움과 감동은 라이프</p>-->
<!--                        <p>스타일로 확대되어 일상 속에서 새로운</p>-->
<!--                        <p>영감과 삶의 가치를 제공할 것입니다.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </a>-->
<!--        </li>-->
<!--    </ul>-->
<?php
//require PATH.'app/view/m/footer.php';
//?>