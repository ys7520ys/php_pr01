// ----------header speech_bubble 호버 이펙트 start----------
// header nav 동작 함수수
$('.mainNav li').on('mouseenter', function() {
  var index = $(this).index(); // 현재 li의 인덱스 값값
  $('.speech_bubble').stop(true, true).css('opacity', '1'); // 동작하던 애니메이션을 정지시킴
  if (index === 0) { // 첫 번째 li 호버 시 동작할 함수
    $('.speech_bubble').css({
      'left': '36%',
    });
    $('.speech_bubble p').text('이야기 섹션으로 스크롤됩니다'); // li의 값에 따라서 "텍스트"를 변경
    setTimeout(function(){
      $('.speech_bubble').css({
        'top': '120px'
      });
    },200)
  } else if (index === 1) { // 두 번째 li 호버 시 동작할 함수
    $('.speech_bubble').css({
      'left': '46%',
    });
    $('.speech_bubble p').text('위기 섹션으로 스크롤됩니다'); // li의 값에 따라서 "텍스트"를 변경
    setTimeout(function(){
      $('.speech_bubble').css({
        'top': '120px'
      });
    },200)
  } else if (index === 2) { // 세 번째 li 호버 시 동작할 함수
    $('.speech_bubble').css({
      'left': '56%',
    });
    $('.speech_bubble p').text('상황 섹션으로 스크롤됩니다'); // li의 값에 따라서 "텍스트"를 변경
    setTimeout(function(){
      $('.speech_bubble').css({
        'top': '120px'
      });
    },200)
  } else if (index === 3) { // 네 번째 li 호버 시 동작할 함수
    $('.speech_bubble').css({
      'left': '65%',
    });
    $('.speech_bubble p').text('캠페인 섹션으로 스크롤됩니다'); // li의 값에 따라서 "텍스트"를 변경
    setTimeout(function(){
      $('.speech_bubble').css({
        'top': '120px'
      });
    },200)
  }
});
// header nav 영역을 벗어날 시 동작할 함수

$('header ul').on('mouseleave', function() {
  $('.speech_bubble').stop(true, true).css({
    'top': '-100px', // nav 영역을 벗어나야지만 상단으로 이동함
    'opacity': '0'
  });
});
// header logo 동작 함수
/*
$('header .logo a').on('mouseenter',function() {
  $('.speech_bubble').stop(true, true).css({
    'left': '140px',
  });
  $('.speech_bubble p').text('최상단으로 스크롤됩니다'); // logo speech_bubble "텍스트"를 변경
  setTimeout(function(){
    $('.speech_bubble').stop(true, true).css({
      'top': '120px',
      'opacity': '1',
    });
  },200)
})
*/
$('header .logo a').on('mouseout',function() {
  $('.speech_bubble').stop(true, true).css({
    'top': '-100px',
    'left': '140px',
    'opacity': '1'
  });
})
// ----------header speech_bubble 호버 이펙트 end----------






$('.firstSection .text_box a').on('mouseenter', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).parents('.img_box').css({
    // 'box-shadow': '0px 15px 15px rgba(0, 0, 0, 0.5)',
    'outline':'solid 5px #3c3c3c'
  });
  $(this).parents('.img_box').children('img').css({
    'scale':'1.1',
    'filter':'invert(1)',
  })
  $(this).parents('.text_box').css({
    'background-color':'#3c3c3c'
  })
});
$('.firstSection .text_box a').on('mouseout', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).parents('.img_box').css({
    // 'box-shadow': 'none',
    'outline':'solid 0px rgba(0,0,0,0)'
  });
  $(this).parents('.img_box').children('img').css({
    'scale':'1',
    'filter':'invert(0)',
  })
  $(this).parents('.text_box').css({
    'background-color':'rgba(0,0,0,0)'
  })
});




$('.secondSection .img_box a').on('mouseenter', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).closest('div').css({
    'outline':'solid 5px #3c3c3c'
  });
  $(this).siblings('img').css({
    'filter':'invert(0.8)',
    'scale':'1.1',
  })
});
$('.secondSection .img_box a').on('mouseout', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).closest('div').css({
    'outline':'solid 5px rgba(0,0,0,0)'
  });
  $(this).siblings('img').css({
    'filter':'invert(0)',
    'scale':'1'
  })
});





$('.thirdSection .card_box a').on('mouseenter', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).parents('.text_box').siblings('.img_box').children('img').css({
    'scale': '1.1',
    'filter': 'invert(1)',
  });
  $(this).parents('.text_box').siblings('.img_box').parents('.deco_').css({
    'border-radius': '10px',
    'outline':'solid 5px #3c3c3c'
  });
  $(this).parents('.text_box').css({
    'background-color':'#3c3c3c',
    // 'outline':'solid 5px #3c3c3c',
  })
  $(this).parents('.text_box').find('h2, p, a').css({
    'color':'white'
  })
});
$('.thirdSection .card_box a').on('mouseout', function() {
  // 부모 중 .img_box를 찾은 후 내부의 <img> 요소 선택
  $(this).parents('.text_box').siblings('.img_box').children('img').css({
    'scale': '1',
    'filter': 'invert(0)',
  });
  $(this).parents('.text_box').siblings('.img_box').parents('.deco_').css({
    'border-radius': '10px',
    'outline':'solid 5px rgba(0,0,0,0)'
  });
  $(this).parents('.text_box').css({
    'background-color':'rgba(0,0,0,0)',
  })
  $(this).parents('.text_box').find('h2, p, a').css({
    'color':'black'
  })
});








$('.fourthSection .card a').on('mouseenter', function() {
  // 현재 이벤트가 발생한 .card 내부의 .img_box와 .text_box만 선택
  $(this).parents('.card').css({
    // 'border':'solid 1px rgb(172, 172, 172)',
    // 'box-shadow': '0px 10px 15px rgba(0, 0, 0, 0.3)', 
    'background-color':'#3c3c3c'
  });
  $(this).parents('.card').children('.text_box').children('h2,p,a').css({
    'color':'white'
  })
  $(this).parents('.card').children('.img_box').css({
    'filter':'invert(0.75)'
  })
});
$('.fourthSection .card').on('mouseleave', function() {
  // 현재 이벤트가 발생한 .card 내부의 .img_box와 .text_box만 선택
  $(this).css({
    // 'border':'solid 1px #fff',
    // 'box-shadow': '0px 10px 15px rgba(0, 0, 0, 0)',
    'background-color':'rgba(0,0,0,0)'
  });
  $(this).children('.text_box').children('h2,p,a').css({
    'color':'black'
  })
  $(this).children('.img_box').css({
    'filter':'invert(0)'
  })
});




$('.menuBtn').on('click',function(){
  $('.sidebar').css({
    'right':'0px'
  })
});
$('.menuCloseBtn').on('click',function(){
  $('.sidebar').css({
    'right':'-500px'
  })
  $('.subCategory').fadeOut()
  $('.subMain').fadeIn()
})




/* sidebarSubmenu 동작 */
$('.subMain > li:nth-of-type(1) > a').on('click',function(){
  $('ul.sub1').fadeIn()
  $('.subMain').fadeOut()
})
$('.subMain > li:nth-of-type(2) > a').on('click',function(){
  $('ul.sub2').fadeIn()
  $('.subMain').fadeOut()
})
$('.subMain > li:nth-of-type(3) > a').on('click',function(){
  $('ul.sub3').fadeIn()
  $('.subMain').fadeOut()
})
$('.subMain > li:nth-of-type(4) > a').on('click',function(){
  $('ul.sub4').fadeIn()
  $('.subMain').fadeOut()
})
$('.subMain > li:nth-of-type(5) > a').on('click',function(){
  $('ul.sub5').fadeIn()
  $('.subMain').fadeOut()
})
$('.subMain > li:nth-of-type(6) > a').on('click',function(){
  $('ul.sub6').fadeIn()
  $('.subMain').fadeOut()
})
$('.backCategory').on('click',function(){
  $('.subCategory').fadeOut()
  $('.subMain').fadeIn()
})












// 페이지 전환

$(function () {
  // 페이지가 로드될 때 body에 'loaded' 클래스를 추가
  $('main').addClass('loaded');

  // 페이지 전환 시 페이드아웃 효과 적용
  $('.subCategory li a:not(.backCategory), .logo a, .gotoLogin, section a').on('click', function (e) {
    e.preventDefault();
    const target = $(this).attr('href');
    $('.sidebar').css({
      'right':'-500px'
    })

    $('main').removeClass('loaded'); // 등장 애니메이션 제거
    setTimeout(function () {
      window.location.href = target; // 페이지 이동
    }, 500); // transition과 일치하는 시간 설정
    setTimeout(function() {
      $('main').addClass('loaded');
      $('.subCategory').fadeOut()
      $('.subMain').fadeIn()
    }, 600)
  });
});

if (window.location.pathname === '/index.php' || window.location.pathname === '/') {
  // 특정 스타일 추가
  $('.mainNav li').fadeIn();
} else{
  $('.mainNav li').fadeOut()
}


