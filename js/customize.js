// 自行加入的JS請寫在這裡
$(function() {
  // 首頁輪播
  $('.col-12 .c-mpSlider.is-b .sliderBlock').slick({
    mobileFirst: true,
    dots: false,
    arrow: true,
    infinite: true,
    speed: 500,
    autoplay: false,
    fade: true,
    lazyLoaded: true,
    lazyLoad: 'ondemand',
    ease: 'ease'
  });
  $('.col-8-4 .c-mpSlider.is-a .sliderBlock').slick({
    mobileFirst: true,
    dots: false,
    arrow: true,
    infinite: true,
    speed: 500,
    autoplay: false,
    fade: true,
    lazyLoaded: true,
    lazyLoad: 'ondemand',
    ease: 'ease'
  });

  var $carousel = $('.col-12 .c-mpSlider.is-a .sliderBlock').slick({
    mobileFirst: true,
    dots: false,
    arrow: false,
    infinite: true,
    speed: 1000,
    autoplaySpeed: 5000,
    autoplay: true,
    fade: true,
    lazyLoaded: true,
    lazyLoad: 'ondemand',
    ease: 'ease',
    pauseOnHover: false
  });
  /* The first slide will not get the animation,
  therefore I add and remove a class that will trigger the css animation */
  $carousel.find('.slick-current').addClass('start');
  /* I use a set-timeoutfunction to hinder optimization
  of adding and removing classes */
  setTimeout(function() {
    $carousel.find('.start').removeClass('start');
  }, 0)
  $('.c-videos ul').slick({
    mobileFirst: true,
    dots: true,
    arrow: false,
    infinite: true,
    speed: 300,
    autoplay: false,
    fade: true,
    lazyLoaded: true,
    lazyLoad: 'ondemand',
    ease: 'ease'
  });
  // 廣告輪播
  $('.c-adSlider .container').slick({
    mobileFirst: true,
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    arrow: true,
    lazyLoaded: true,
    lazyLoad: 'ondemand',
    ease: 'ease',
    responsive: [{
      breakpoint: 1000,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true
      }
    }, {
      breakpoint: 640,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: true
      }
    }, {
      breakpoint: 320,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: true
      }
    }]
  });
  //燈箱slick+lightBox組合
  $('.cp_slider').slick({
    dots: true,
    infinite: true,
    speed: 500,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 1500,
    pauseOnHover: true,
    pauseOnFocus: true,
    focusOnSelect: true,
    accessibility: true,
    lazyLoad: 'ondemand',
    ease: 'ease',
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    }, {
      breakpoint: 545,
      settings: {
        arrows: true,
        slidesToShow: 2,
        slidesToScroll: 2
      }
    }, {
      breakpoint: 480,
      settings: {
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }]
  });
  $('.cp_slider').slickLightbox({
    caption: 'caption',
    lazyLoad: 'ondemand',
    useHistoryApi: 'true',
    ease: 'ease',
    lazy: true
  });

  // cp_photo
  $('.Slider-for').on('init reInit afterChange', function(event, slick, currentSlide) {
    var i = (currentSlide ? currentSlide : 0) + 1;
    $('.controls').html(i + '/' + slick.slideCount);
  });
  $('.Slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    swipe: false,
    swipeToSlide: false,
    lazyLoad: 'ondemand',
    asNavFor: '.Slider-nav',
    infinite: true
  });
  $('.Slider-nav').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    asNavFor: '.Slider-for',
    dots: true,
    arrows: true,
    lazyLoad: 'ondemand',
    focusOnSelect: true,
    infinite: true
  });

});

/*-----------------------------------*/
////////////////unimenu////////////////
/*-----------------------------------*/
// $('nav.topnav__units').hide();

function openuni() {
  $('nav.topnav__units').css('top', '0px');
  $('nav.topnav__units').slideDown(600, 'easeOutQuart');
  $('body').addClass('noscroll');
  $(this).hide();
}

function closeuni() {
  $('nav.topnav__units').fadeOut(400, function() {
    $(this).css('top', '-2000px');
  });
  $('body').removeClass('noscroll');
}
$('nav.topnav__units .close,nav.topnav__units .overlay').click(function(event) {
  closeuni();
});
$('nav.topnav__units>ul>li:last-child>ul>li:last-child a').focusout(function() {
  closeuni();
});


$('.topnav__unitslink').click(function(event) {
  openuni();
});

$('.c-marquee ul').slick({
  dots: false,
  infinite: true,
  vertical: true,
  verticalSwiping: true,
  speed: 1000,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  pauseOnHover: true,
  autoplaySpeed: 1500,
  speed: 1000,
  focusOnSelect: true,
});

$(".adSearch__btn").click(function(e) {
  $(".adSearch__form").slideToggle();
  e.preventDefault();
});
$(".adSearch__form .btn_grp button:last-child").focusout(function(e) {
  $(".adSearch__form").slideUp();
});

$(function() {
  $('.left_block nav ul>li>a').each(function() {
    $(".left_block nav ul ul").hide();
    $(".left_block nav ul ul li a.active").parent('li').parent('ul').show();

    function leftnav(e) {
      $(this).parent('li').siblings().children('a').removeClass('active');
      $(this).toggleClass('active');
      $(this).parent('li').siblings().children('ul').slideUp();
      $(this).next('ul').slideToggle();
      e.preventDefault();
    }
    $(this).click(leftnav);
    $(this).keyup(leftnav);
  });
});
$(function() {
  var ww = $(window).outerWidth();
  if (ww <= 768) {
    $(".left_block .left_title").click(function(e) {
      $(this).next("ul").slideToggle();
    });
  } else {}
});
// $(function(){
//   $('.list__qa>ul>li').each(function() {
//     $(this).find('.list__a').hide();
//     var _qaItem = $(this).children('.list__q').children('a');
//     // var _scrollTop= $(this).offset().top - 55;
//     _qaItem.each(function() {
//       function qa(e){
//         // $('html, body').stop(true, true).animate({ scrollTop: _scrollTop }, 800, 'easeOutExpo');
//         $(this).parents('li').siblings().children('.list__q').children('a').removeClass('active');
//         $(this).toggleClass('active');
//         $(this).parents('li').siblings().children('.list__a').slideUp();
//         $(this).parents('.list__q').next('.list__a').slideToggle();
//         e.preventDefault();
//       }
//       $(this).click(qa);
//       $(this).keyup(qa);
//     });
//   });
// });

// 收合
$(".list__qa li").each(function() {
  var _question = $(this).children('.list__q').children('a');
  var _switch = _question.children('.switch');
  var _answer = $(this).children('.list__a');
  _answer.hide();

  function accordion(e) {
    if (_answer.is(':visible')) {
      _answer.slideUp();
      _switch.text('展開').removeClass('close');
    } else {
      _answer.slideDown();
      _switch.text('收合').addClass('close');
    }
    e.preventDefault();
  }
  _question.click(accordion);
});