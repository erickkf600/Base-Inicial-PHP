/*MENU MOBILE*/
$(document).ready(function(){
    $(".menu-icon").click(function(){
      $(".undnav").toggleClass("mostar");
    });

  $(window).scroll(function () {
    var top = $(document).scrollTop();
    var height = 100;
    if (top > height) {
      $('.header').addClass('upHeader');
      $('#linebar').addClass('NavTopUp');
    } else {
      $('.header').removeClass('upHeader');
      $('#linebar').removeClass('NavTopUp');
    }
  });
});

/*hamburger menu*/
function myFunction(x) {
    x.classList.toggle("change");
}
var swiper = new Swiper('.swiper-container', {
      slidesPerView: 4,
      spaceBetween: 30,
      slidesPerGroup: 1,
      loop: true,
      speed: 2000,
      autoplay: {
        disableOnInteraction: false,
      },
      breakpoints: {
      1024: {
        spaceBetween: 40,
        slidesPerView: 3
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30
      },
      420: {
        slidesPerView: 2,
        spaceBetween: 10
      }
    },
    navigation: {
      nextEl: '.proximo',
      prevEl: '.voltar',
    },
 });

var swiper = new Swiper('#logos', {
  slidesPerView: 5,
  spaceBetween: -60,
  slidesPerGroup: 3,
  loop: true,
  speed: 5000,
  autoplay: {
    disableOnInteraction: false,
  },
  breakpoints: {
    1024: {
      slidesPerView: 3
    },
    768: {
      slidesPerView: 3,
      spaceBetween: -70
    },
    420: {
      slidesPerView: 2,
      spaceBetween: -40
    }
  },
  navigation: {
    nextEl: '.proximo',
    prevEl: '.voltar',
  },
});

var swiper = new Swiper('#categorias', {
  slidesPerView: 7,
  slidesPerGroup: 3,
  breakpoints: {
    1024: {
      spaceBetween: 40,
      slidesPerView: 3
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    420: {
      slidesPerView: 2,
      spaceBetween: 10
    }
  },
});



//FORMULARIO
$(document).ready(function(){
  var current_fs, next_fs, previous_fs; //fieldsets
  var left, opacity, scale; //fieldset properties which we will animate
  var animating; //flag to prevent quick multi-click glitches

  $(".next").click(function () {
    if (animating) return false;
    animating = true;

    current_fs = $(this).parent();
    next_fs = $(this).parent().next();

    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

    //show the next fieldset
    next_fs.show();
    //hide the current fieldset with style
    current_fs.animate({ opacity: 0 }, {
      step: function (now, mx) {
        //as the opacity of current_fs reduces to 0 - stored in "now"
        //1. scale current_fs down to 80%
        scale = 1 - (1 - now) * 0.2;
        //2. bring next_fs from the right(50%)
        left = (now * 50) + "%";
        //3. increase opacity of next_fs to 1 as it moves in
        opacity = 1 - now;
        current_fs.css({
          'transform': 'scale(' + scale + ')',
          'position': 'absolute'
        });
        next_fs.css({ 'left': left, 'opacity': opacity });
      },
      duration: 800,
      complete: function () {
        current_fs.hide();
        animating = false;
      },
      //this comes from the custom easing plugin
      easing: 'easeInOutBack'
    });
  });
});

