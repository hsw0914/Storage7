
</main>
<footer>
    <div class="footer_wrap">
        <ul>
            <li><a href="#">이용약관</a></li>
            <li><a href="#">개인정보취급방침</a></li>
            <li><a href="#">이메일무단수집거부</a></li>
            <li><a href="/app/view/company/index.php">회사소개</a></li>
        </ul>

        <a href="/" class="logo"><img src="/static/img/header/logo.PNG" alt="logo"></a>
        <p>COPYRIGHT(C)2011 BY CHANGRIM CORP ALL RIGHT RESERVED. 고객센터 031-359-8323</p>
        <p>창림모아츠(주) 경기도 화성시 항납읍 서해로 529-12.</p>
        <p>TEL. 031)359-8323 / FAX. 031)359-8324</p>
        <div class="footer-btn">
            <a href="/app/view/ascenter/index.php">A/S 센터</a>
            <a href="/app/view/quotation/index.php">온라인견적</a>
        </div>
    </div>
</footer>
</div>
<script>
//    모바일 구분

//    var src = {
//        css : ["/static/css/mobile_header.css", "/static/css/mobile.css", "/static/css/mobile_sub.css"]
//    }

    var filter = "win16|win32|win64|mac|macintel";
    if ( navigator.platform ) {
        if ( filter.indexOf( navigator.platform.toLowerCase() ) < 0 ) {
            location.href = "/app/view/m/index.php";
//            for ( i = 0,len = src.css.length; i < len; i ++) {
//                var link = document.createElement("link")
//                link.href = src.css[i]
//                link.rel = "stylesheet"
//                document.head.appendChild(link)
//            }
        }
    }
</script>
</body>
</html>