/* js */
jQuery(function ($) {
    var url = location.href;
    var method = url.split('/');
    var cnt = 0;
    var windowWidthSize = $(window).width();
    var len = $('.sub_nav > li > a').length;
    img = 0;
    end = $('.ani-li').length-1;
    var scnt = 0;

    //header 메뉴 hover


    //이미지 슬라이드

    var slide = {
        slide: null,
        on : function () {
            slide.off();
            this.slide = setTimeout(function () {
                if ( img === 3 ) {
                    img = -1;
                }
                if ( scnt === 0 ) {
                    img++;
                }

                ani(img);

            },10000)
        },
        off : function () {
            clearTimeout(this.slide);
        }
    }

    function ani(img) {
        $(".ani-indexbutton").each(function(index, element) {
            if($(element).hasClass(img)) {
                $(".ani-indexbutton").not(this).css({
                    'background':'none',
                    'border':'1px solid #fff'
                });
                $(this).css({
                    'background-color':'#fff',
                    'border':'none'
                });
            }
        });
        slide.on();


        $(".ani-ul").css('margin-left','-'+img+'00%');

        $('.ani-li').removeClass('slide')
        $('.ani-li').eq(img).addClass('slide')

        $('.slide-text-wrap hr').css('width','0')
        $('.slide-text-wrap h1').css('transform','translateY(0)')
        $('.slide-text-wrap h3').css('transform','translateY(0)')
        $('.ani-li').eq(img).children().children('.slide-text-wrap').children('hr').animate({"width":"150px"},400)
    }

    ani(img);

    $(".ani-indexbutton").on("click", function(e){
        img = Number($(this).attr("title"));
        ani(img);
        e.preventDefault();
    })

    $(".ani-a1213").on("click", function(e){
        cnt++;
        if ( cnt % 2 == 1 ) {
            slide.off();
            $(".ani-a1213").css({
                width: 0,
                height: 0,
                "border-top":"5px solid transparent",
                "border-bottom":"5px solid transparent",
                "border-left":"8px solid white",
                "border-right":0
            })
            $(".ani-indexbutton").on("click", function(e){
                img = Number($(this).attr("title"));
                ani(img);
                $(".ani-a1213").css({
                    width: "8px",
                    height: "10px",
                    "border-top":0,
                    "border-bottom":0,
                    "border-left":"2px solid #fff",
                    "border-right":"2px solid #fff"
                })
                e.preventDefault();
            })
        }else if ( cnt % 2 == 0 ) {
            slide.on();
            $(".ani-a1213").css({
                width: "8px",
                height: "10px",
                "border-top":0,
                "border-bottom":0,
                "border-left":"2px solid #fff",
                "border-right":"2px solid #fff"
            })
        }
    })

    //  메뉴


    var filter = "win16|win32|win64|mac|macintel";
    if ( navigator.platform ) {
        if (!(filter.indexOf(navigator.platform.toLowerCase()) < 0)) {
            var nav = $('.ani');
            if (nav.length) {
                var $wrapTop = nav.offset().top
                var $window = $(window).scroll(function () {
                    if ($window.scrollTop() > $wrapTop) {
                        $('.header').addClass('fixed')
                        $('.header > a').css('display','none')
                        $('.top').css({
                            'opacity':'1',
                            'height':'40px'
                        })
                    } else {
                        if ($window.scrollTop() < $wrapTop) {
                            $('.header').removeClass('fixed')
                            $('.header > a').css('display','block')
                            $('.top').css({
                                'opacity':'0',
                                'height':'0'
                            })
                        }
                    }
                })
            }
        }else {

            $('.header > ul > li > a').not('a.catalogue').on('click', function (e) {e.preventDefault();})

            $('header > ul li').on('click', function (e) {
                var self = $(this);

                $('header .active_arrow').removeClass('active');

                var activeElement = self;
                activeElement.children('ul').stop().slideToggle(100, function () {
                    var toggleFlag = activeElement.children('ul').is(':visible');
                    if (toggleFlag) {
                        // show toggle callback
                        activeElement.find('.active_arrow').addClass('active');

                    } else {
                        // hide toggle callback
                        activeElement.find('.active_arrow').removeClass('active');
                    }
                });

                var diffElements = self.siblings()
                diffElements.children('ul').slideUp(100);
            })

            $('header > ul li').on('click', function (e) {
                e.stopPropagation();
            })
        }
    }

    // 탑
    var t = true;
    $('.top').on('click',function (a) {
        a.preventDefault()
        if (t) {
            t = false;
            $('html, body').animate({
                scrollTop: 0
            }, 500, function() {
                t = true;
            });
        }
    })

    // 팝업

    function popupOpen() {
        var popUrl = "../../app/view/general/popup.html";
        var popOption = "width=370, height=360, resizable=no, scrollbars=no, status=no;";
        window.open(popUrl, "", popOption);
    }

    // popupOpen();

    // 모바일 메뉴

    var isMenuActive = true;

    $('header .menu').on('click', function (e) {
        if (isMenuActive) {
            $(this).children().eq(0).css('transform', 'translateY(11px) rotate(-45deg)')
            $(this).children().eq(1).css('opacity', '0')
            $(this).children().eq(2).css('transform', 'translateY(-11px) rotate(45deg)')
            $('header > ul').animate({'margin-left':0},400)
            $('.all_background').css({'display':'block'},400)

            isMenuActive = false;
        } else {
            $(this).children().eq(0).css('transform', 'translateY(0) rotate(0)')
            $(this).children().eq(1).css('opacity', '1')
            $(this).children().eq(2).css('transform', 'translateY(-0) rotate(0)')
            $('header > ul').animate({'margin-left':'-100%'},400)
            $('.all_background').css({'display':'none'},400)

            isMenuActive = true;
        }
    })

    // menu hideen

    if ( navigator.platform ) {
        if (filter.indexOf(navigator.platform.toLowerCase()) < 0) {


        }
    }

})