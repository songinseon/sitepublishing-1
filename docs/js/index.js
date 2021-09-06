console.clear();


var swiper = new Swiper(".mySwiper1", {
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".swiper-container2", {
  slidesPerView: 3,
  spaceBetween: 30,
  slidesPerGroup: 1,
  loop: true,
  loopFillGroupWithBlank: true,
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// 스크롤시 상단바색 변경
$(window).scroll(function () {
  var scrollValue = $(document).scrollTop();
  console.log(scrollValue);

  if (scrollValue > 100) {
    $(".top-bar").css("background-color", "rgba(0,0,0,0.9)");
    $(".top-bar").removeClass("absolute");
    $(".top-bar").addClass("fixed");
    $(".top-bar").css("transform", "translateY(100%)");
  } else {
    $(".top-bar").css("background-color", "");
    $(".top-bar").removeClass("fixed");
    $(".top-bar").addClass("absolute");
    $(".top-bar").css("transform", "");
  }

  if (scrollValue >= 2800 && scrollValue < 10000) {
    $(".section-4__img-box-bn").addClass("fixed");
  } else {
    $(".section-4__img-box-bn").removeClass("fixed");
    $(".section-4__img-box-bn").addClass("sticky");
  }

});


// 스크롤 트리거
gsap.to('.section-3__bn1-text', {
  y: -40,
  scrollTrigger: {
    trigger: '.section-3',
    // markers:true,
    start: '0% 50%',
    end: '100% 30%',
    toggleActions: 'restart pause resume reverse'
  },
  duration: 1
});

gsap.to('.section-3__bn2-text', {
  x: 55,
  scrollTrigger: {
    trigger: '.section-3',
    // markers:true,
    start: '0% 50%',
    end: '100% 30%',
    toggleActions: 'restart pause resume reverse'
  },
  duration: 1
});

// 영상탭
function Box1__init() {
  $('.box-1__head > ul > li').click(function () {
    let $this = $(this);
    let thisIndex = $this.index();

    $this.siblings('.active').removeClass('active');
    $this.addClass('active');
    let $box1 = $this.closest('.box-1');
    let $box1Main = $box1.find('.box-1__main');

    $box1Main.find(' > ul > li.active').removeClass('active');
    $box1Main.find(' > ul > li').eq(thisIndex).addClass('active');
  });
}

// 탑버튼
$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      $('#topBtn').fadeIn();
    } else {
      $('#topBtn').fadeOut();
    }
  });
  $("#topBtn").click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 300);
    return false;
  });
});

Box1__init();