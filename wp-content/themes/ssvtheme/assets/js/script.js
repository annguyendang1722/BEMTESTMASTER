/*jslint browser: true*/
/*global $, jQuery, Modernizr, enquire*/
(function (window, document, $) {
  var $html = $("html"),
    mobileOnly = "screen and (max-width:47.9375em)", // 767px.
    mobileLandscape = "(min-width:30em)", // 480px.
    tablet = "(min-width:48em)"; // 768px.
  // Contact form 7 redirect after submit.
  // document.addEventListener( 'wpcf7mailsent', function( event ) {
  //   if ( '5' == event.detail.contactFormId ) {
  //       window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-subscribe/';
  //   }else if('204' == event.detail.contactFormId){
  //       window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-contact/';
  //   }else if('210' == event.detail.contactFormId) {
  //       window.location.href = window.location.protocol + '//' + window.location.hostname + '/thank-you-request/';
  //   }
  // }, false );

  // Function here.
  // $('.box-faq__question').each(function() {
  //   $(this).on('click', function (e) {
  //     if ($(this).hasClass('is-show')) {
  //       $('.box-faq__question').removeClass('is-show');
  //       $('.box-faq__answer').slideUp();
  //       $(this).next().slideUp();
  //     } else {
  //       $('.box-faq__question').removeClass('is-show');
  //       $(this).addClass('is-show');
  //       $('.box-faq__answer').slideUp();
  //       $(this).next().slideDown();
  //     }
  //   });
  // });

  // Js code.
  $(document).ready(function () {
    // Remove attr title.
    $("a, img").removeAttr("title");

    // Add placeholder to quiz validate form.
    $(".wpcf7-quiz").attr("placeholder", "text-here");

    // Table responsive
    var $table = $("table");
    if ($table.length && !$table.parent().hasClass("table-responsive")) {
      $table
        .not($table.find("table"))
        .wrap('<div class="table-responsive"></div>');
    }

    var $jsBanner = $(".js-slider");
    $jsBanner.slick({
      dots: true,
      autoplay: false,
      speed: 800,
      fade: true,
      autoplaySpeed: 2000,
      prevArrow:
        '<span class="slick-prev slick-arrow" aria-label="Previous" type="span"></span>',
      nextArrow:
        '<span class="slick-next slick-arrow" aria-label="Next" type="span"></span>',
    });



    $('.sliders5').slick({
      dots: false,
      touchMove: false,
      infinite: false,
      speed: 300,
       autoplay:true,
      autoplaySpeed:3000,
      slidesToShow: 5,
         loop:true,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1
          }
        }
      ]
      });

      $('.sliders1').slick({
        dots: false,
        touchMove: false,
        infinite: false,
        loop:true,
        speed: 300,
         autoplay:true,
        autoplaySpeed:3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
        ]
        });
        
              $('.sliders1').slick({
        dots: false,
        touchMove: false,
        infinite: false,
        loop:true,
        speed: 300,
         autoplay:true,
        autoplaySpeed:3000,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 1,
              infinite: true,
              dots: true
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1
            }
          }
        ]
        });

    // Block Accordions

    var $accordions = $('.js-accordions');

    $accordions.click(function() {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
        $(this).siblings(".accordions__content").slideUp(200);
      } else {
        $(".js-accordions").removeClass("active");
        $(this).addClass("active");
        $(".accordions__content").slideUp(300);
        $(this).siblings(".accordions__content").slideDown(300);
      }
    })

    // Block Toggles

    var $toggles = $('.js-toggles');

    $toggles.click(function() {
      $(this).toggleClass('active');
      $(this).next(".accordions__content").slideToggle(200);
    });
    // js counter data farm
    $('.number').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
            $(this).text(Math.ceil(now));
          }
      });
    });
    $('.gallery__item').fancybox();
    
    $('.js-btn-all').click(function(){
      $('.js-gallery-item-click').removeClass('hide');
    })
    $('.js-btn-awesome').click(function(){
      $('.js-gallery-item-click').removeClass('hide');

      $('.js-gallery-item-click').each(function(){
        if(!$(this).hasClass('js-gallery-item-awesome')){
          $(this).addClass('hide');
        }
      })
    })
    $('.js-btn-responsive').click(function(){
      $('.js-gallery-item-click').removeClass('hide');

      $('.js-gallery-item-click').each(function(){
        if(!$(this).hasClass('js-gallery-item-responsive')){
          $(this).addClass('hide');
        }
      })
    })
    $('.js-btn-creative').click(function(){
      $('.js-gallery-item-click').removeClass('hide');

      $('.js-gallery-item-click').each(function(){
        if(!$(this).hasClass('js-gallery-item-creative')){
          $(this).addClass('hide');
        }
      })
    })
    $('.js-btn-animated').click(function(){
      $('.js-gallery-item-click').removeClass('hide');

      $('.js-gallery-item-click').each(function(){
        if(!$(this).hasClass('js-gallery-item-animated')){
          $(this).addClass('hide');
        }
      })
    })

    
    $('.js-slider').slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
      arrows: true,
      responsive: [
        {
          breakpoint: 1023,
          settings: {
            arrows: false,
          }
        }
      ]
    });





  });
})(this, this.document, this.jQuery);
