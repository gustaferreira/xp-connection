(function() {


 
  // preloader
  $.fakeLoader({
      spinner: "spinner2",
      bgColor: "#fff"
  });


  // meu carrossel swiper
  $(document).ready(function () {
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1,
        },
        780: {
          slidesPerView: 1,
        }
      }
    });
  });

  // meu carrossel swiper
  $(document).ready(function () {
    var swiper = new Swiper(".mySwiper2", {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,
      },
      breakpoints: {
        0: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 1,
        },
        780: {
          slidesPerView: 1,
        }
      }
    });
  });



password.onchange = validatePassword;


  // navbar presa
  $(window).on("scroll", function() {

      var onScroll = $(this).scrollTop();

      if( onScroll > 50) {
          $(".navbar").addClass("navbar-fixed");
      }
      else {
          $(".navbar").removeClass("navbar-fixed");
      }

  });

  // esconder nav
  $('.navbar-nav>li>a').on('click', function(){
      $('.navbar-collapse').collapse('hide');
  });

  // numero aparencendo
  $('.number-counter').each(function () {
        $(this).prop('Counter',0).animate({
            Counter: $(this).text()
        }, {
            duration: 5000,
            easing: 'swing',
            step: function (now) {
                $(this).text(Math.ceil(now));
            }
        });
    });

})();