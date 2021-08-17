$(function(){    ////////// 돋보기 시작

    $('.button_search').click(function(){          //돋보기 클릭하면 검색창 뜸
        // $(this).show('active');
        $('.mobile_search').fadeIn('active');
    });


    $('.m_cancle').click(function(){                //돋보기 창 닫기
        $('.mobile_search').fadeOut('active');
    });

});




$(function(){    ////////// 햄버거버튼 시작



    $('.button_menu').click(function(){          //햄버거버튼 클릭하면 검색창 뜸
        // $(this).show('active');
        $('.mobile_menu').fadeIn('active');
    });

    $('.m_menu_cancle').click(function(){                //햄버거버튼 창 닫기
        $('.mobile_menu').fadeOut('active');
    });



});


  

$(function(){    ////////// language 토글
    $('.menu_languge_btn').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('.languge_choice').slideToggle('active');
    
    });
});


$(function(){    ////////// 햄버거버튼 내 하단 nav 시작

    $('.m_TopMenu_Text_1').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_1').slideToggle('active');
    });


    $('.m_TopMenu_Text_2').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_2').slideToggle('active');
    });


    $('.m_TopMenu_Text_3').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_3').slideToggle('active');
    })


    $('.m_TopMenu_Text_4').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_4').slideToggle('active');
    })

    $('.m_TopMenu_Text_5').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_5').slideToggle('active');
    })


    $('.m_TopMenu_Text_6').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_6').slideToggle('active');
    })


    $('.m_TopMenu_Text_7').click(function(){               //클릭시 옵션 드롭다운
        $(this).toggleClass('active');                     //열림 화살표 변경
        $('#m_TopMenu_ul_7').slideToggle('active');
    })





    var slides = document.querySelector('.slides'),
    slide = document.querySelectorAll('.slides li'),
    currentIdx = 0,
    slideCount = slide.length,
    prevBtn = document.querySelector('.prev'), 
    slideWidth = 300,
    slideMargin = 30,
    nextBtn = document.querySelector('.next');
    
  
    slides.style.width = (slideWidth + slideMargin)*slideCount - slideMargin + 'px';
  
    function moveSlide(num) {
        slides.style.left = -num * 330 + 'px';
        currentIdx = num;
    }
  
    nextBtn.addEventListener('click', function(){
        if(currentIdx < slideCount - 3){
            moveSlide(currentIdx + 1 );
        } else {
            moveSlide(0);
        }
    });
  
    prevBtn.addEventListener('click', function(){
        if(currentIdx > 0){
            moveSlide(currentIdx - 1 );
        } else {
            moveSlide(slideCount - 3);
        }
    });





    

    $(window).resize(function(){
        if(window.innerWidth < 840)
        var m_slides = document.querySelector('.slides'),
        m_slide = document.querySelectorAll('.slides li'),
        m_currentIdx = 0,
        m_slideCount = m_slide.length,
        m_prevBtn = document.querySelector('.prev'), 
        m_slideWidth = 230,
        m_slideMargin = 20,
        m_nextBtn = document.querySelector('.next');
        
    
        m_slides.style.width = (m_slideWidth + m_slideMargin)*m_slideCount - m_slideMargin + 'px';
    
        function moveSlide(num) {
            m_slides.style.left = -num * 250 + 'px';
            m_currentIdx = num;
        }
    
        m_nextBtn.addEventListener('click', function(){
            if(m_currentIdx < m_slideCount - 3){
                moveSlide(m_currentIdx + 1 );
            } else {
                moveSlide(0);
            }
        });
    
        m_prevBtn.addEventListener('click', function(){
            if(m_currentIdx > 0){
                moveSlide(m_currentIdx - 1 );
            } else {
                moveSlide(m_slideCount - 3);
            }
        });
    }).resize();




    $(window).resize(function(){
        if(window.innerWidth < 788)
        var m_m_slides = document.querySelector('.slides'),
        m_m_slide = document.querySelectorAll('.slides li'),
        m_m_currentIdx = 0,
        m_m_slideCount = m_m_slide.length,
        m_m_prevBtn = document.querySelector('.prev'), 
        m_m_slideWidth = 350,
        m_m_slideMargin = 20,
        m_m_nextBtn = document.querySelector('.next');
        
    
        m_m_slides.style.width = (m_m_slideWidth + m_m_slideMargin)*m_m_slideCount - m_m_slideMargin + 'px';
    
        function moveSlide(num) {
            m_m_slides.style.left = -num * 370 + 'px';
            m_m_currentIdx = num;
        }
    
        m_m_nextBtn.addEventListener('click', function(){
            if(m_m_currentIdx < m_m_slideCount - 3){
                moveSlide(m_m_currentIdx + 1 );
            } else {
                moveSlide(0);
            }
        });
    
        m_m_prevBtn.addEventListener('click', function(){
            if(m_m_currentIdx > 0){
                moveSlide(m_m_currentIdx - 1 );
            } else {
                moveSlide(m_m_slideCount - 3);
            }
        });
    }).resize();
});







