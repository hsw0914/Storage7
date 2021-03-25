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
                <h1>온라인견적</h1>
                <ul class="quotation_list">
                    <li><a href="/app/view/quotation/index.php">온라인견적</a></li>
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
                <ruby>QUOTATION</ruby><h1>온라인견적</h1>
                <ul>
                    <li><a href="/">HOME</a></li>
                    <li><a href="/app/view/quotation/index.php" class="color-red">온라인견적</a></li>
                </ul>
            </div>
            <div class="sub_con_images">
                <form action="/app/controll/add_file.php" method="post" enctype="multipart/form-data"  class="form-inline">
                    <div class="guest">
                        <h1>고객 정보</h1>
                        <div class="form-list">
                            <label for="name">담당자 성함</label> <input type="text" id="name" required>
                        </div>
                        <div class="form-list">
                            <label for="company">회사명</label> <input type="text" id="company" required>
                        </div>
                        <div class="form-list">
                            <label for="email">이메일 주소</label> <input type="email" id="email" required>
                        </div>
                        <div class="form-list">
                            <label>휴대전화</label>
                            <select required>
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="017">017</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select> -
                            <input type="text" size="4" maxlength="4" class="num" required> -
                            <input type="text" size="4" maxlength="4" class="num" required>
                        </div>

                        <div class="form-list form-list-last">
                            <label>연락처</label>
                            <select required>
                                <option value="02">02</option>
                                <option value="031">031</option>
                                <option value="032">032</option>
                                <option value="033">033</option>
                                <option value="041">041</option>
                                <option value="042">042</option>
                                <option value="043">043</option>
                                <option value="051">051</option>
                                <option value="052">052</option>
                                <option value="053">053</option>
                                <option value="054">054</option>
                                <option value="055">055</option>
                                <option value="061">061</option>
                                <option value="062">062</option>
                                <option value="063">063</option>
                                <option value="064">064</option>
                            </select> -
                            <input type="text" size="4" maxlength="4" class="num" required> -
                            <input type="text" size="4" maxlength="4" class="num" required>
                        </div>
                    </div>
                    <div class="production">
                        <h1>제작 정보</h1>
                        <div class="form-list">
                            <label for="title" class="title-label">제목</label> <input type="text" id="title" required>
                        </div>
                        <div class="form-list">
                            <label for="company">희망 견적가</label>
                            <select class="amount" required>
                                <option value="▒▒ 선택해주세요 ▒▒" selected="">▒▒ 선택해주세요 ▒▒</option>
                                <option value="1000만원이하">1000만원이하</option>
                                <option value="1000~1500만원">1000~1500만원</option>
                                <option value="1500~2000만원">1500~2000만원</option>
                                <option value="2000~2500만원">2000~2500만원</option>
                                <option value="2500~3000만원">2500~3000만원</option>
                                <option value="가격고려">가격고려</option>
                            </select>
                        </div>
                        <div class="form-list">
                            <label for="file">첨부 파일</label> <input type="file" id="file">
                        </div>
                        <div class="form-list form-list-last">
                            <label for="content"  class="area-label">의뢰 내용</label>
                            <textarea id="content" style="vertical-align: top;"></textarea>
                        </div>
                        <input type="submit" value="전송">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php

require PATH.'app/view/m/footer.php';

?>

