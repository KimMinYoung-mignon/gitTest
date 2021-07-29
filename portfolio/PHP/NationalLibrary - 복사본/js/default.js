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


});








