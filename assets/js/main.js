(function ($)
  { "use strict"

/* 1. Proloder */
    $(window).on('load', function () {
      $('#preloader-active').delay(450).fadeOut('slow');
      $('body').delay(450).css({
        'overflow': 'visible'
      });
    });

/* 2. sticky And Scroll UP */
    $(window).on('scroll', function () {
      var scroll = $(window).scrollTop();
      if (scroll < 400) {
        $(".header-sticky").removeClass("sticky-bar");
        $('#back-top').fadeOut(500);
      } else {
        $(".header-sticky").addClass("sticky-bar");
        $('#back-top').fadeIn(500);
      }
    });
  // Scroll Up
    $('#back-top a').on("click", function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  // Active Menu
    $('.menu-main li').click(function() {
      $(this).siblings('li').removeClass('active');
      $(this).addClass('active');
    });
  

/* 3. slick Nav */
// mobile_menu
    var menu = $('ul#navigation');
    if(menu.length){
      menu.slicknav({
        prependTo: ".mobile_menu",
        closedSymbol: '+',
        openedSymbol:'-'
      });
    };


/* 4. MainSlider-1 */
    // h1-hero-active
    function mainSlider() {
      var BasicSlider = $('.slider-active');
      BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
      });
      BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
      });
      BasicSlider.slick({
        autoplay: false,
        autoplaySpeed: 4000,
        dots: false,
        fade: true,
        arrows: true, 
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        responsive: [{
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: true
            }
          }
        ]
      });

      function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
          var $this = $(this);
          var $animationDelay = $this.data('delay');
          var $animationType = 'animated ' + $this.data('animation');
          $this.css({
            'animation-delay': $animationDelay,
            '-webkit-animation-delay': $animationDelay
          });
          $this.addClass($animationType).one(animationEndEvents, function () {
            $this.removeClass($animationType);
          });
        });
      }
    }
    mainSlider();

/* 5. Testimonial Active*/
  var testimonial = $('.h1-testimonial-active');
    if(testimonial.length){
    testimonial.slick({
        dots: false,
        infinite: true,
        speed: 1000,
        autoplay:false,
        arrows: false,
        prevArrow: '<button type="button" class="slick-prev"><i class="ti-angle-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next"><i class="ti-angle-right"></i></button>',
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: false,
              arrow:true
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false,
              arrow:false
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              dots: false,
              arrow:false
            }
          }
        ]
      });
    }


/* 6. Nice Selectorp  */
  var nice_Select = $('select');
    if(nice_Select.length){
      nice_Select.niceSelect();
    }

/* 7. data-background */
    $("[data-background]").each(function () {
      $(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
      });


/* 10. WOW active */
    new WOW().init();


    
// 11. ---- Mailchimp js --------//  
    function mailChimp() {
      $('#mc_embed_signup').find('form').ajaxChimp();
    }
    mailChimp();



// 12 Pop Up Img
    var popUp = $('.single_gallery_part, .img-pop-up');
      if(popUp.length){
        popUp.magnificPopup({
          type: 'image',
          gallery:{
            enabled:true
          }
        });
      }

})(jQuery);


function calculate() {

  var city = $("#city").val();
  var propertyArea = $("#propertyArea").val();
  var number_of_months = $("#number_of_months").val();
  var avg_month_rent = $("#avg_month_rent").val();
  var deposit = $("#deposit").val();
  
  var final_deposite = (deposit * 0.10);
  var sum_final_deposite = 0;
  var number_of_year = 0;

  var number_of_year = number_of_months / 12;
  number_of_year = Math.ceil(number_of_year);

  for(i=0;i<number_of_year;i++) {
    sum_final_deposite = sum_final_deposite + final_deposite ;
  }

  var avg_rent = (avg_month_rent) / number_of_months;
  var totalamt = (avg_rent * number_of_months) + (sum_final_deposite);
  
  var stamp = ((totalamt * 0.25) / 100);
  stampduty = Math.ceil(stamp);

  if (stampduty < 100) {
    stampduty = 100;
  }

  var reg_charg = 0;
  var asp_charges = 0;
  var service_charges = 0;
  var reg_charg = 0;

  if (propertyArea == 1) {
      $(".propertyArea").html("URBAN");
      var reg_charg = 1000;
      $("#reg_charg").html(reg_charg);

  } else {
      $(".propertyArea").html("RURAL");
      var reg_charg = 1000;
      $("#reg_charg").html(reg_charg);
  }

  if (city == 1) {
      service_charges = 1000; //Mumbai
  } else if (city == 2) {
      service_charges = 1000; //Pune
  } else if (city == 3) {
      service_charges = 1000; //Thane
  } else if (city == 4) {
      service_charges = 1000; //Navi-Mumbai
  }

  var total_charges = stampduty + service_charges + reg_charg + asp_charges;

  $("#service_charges").html(service_charges);
  $(".number_of_months").html(number_of_months);
  $(".avg_month_rent").html(avg_month_rent);
  $(".deposit").html(deposit);
  $("#asp_charges").html(asp_charges);
  $("#total_charges").html(total_charges);
  $("#stamp_duty").html(stampduty);

}

$('#add_rent').click(function(){
	var avg_rate_data = $('#rent_submit').serializeArray();
	var sum_month = 0 ;
	var sum_total = 0 ;
	var total_rent = 0 ;
	var j = 0;
	for (i = 0; i <= 4; i++) {
		if($('#rent_'+[i]).val() > 0 || $('#month_'+[i]).val() > 0){
			sum_month += parseFloat($('#month_'+[i]).val());
			total_rent += parseFloat($('#rent_'+[i]).val());
			sum_total += ($('#month_'+[i]).val() * $('#rent_'+[i]).val());
		}
	}

  $('#number_of_months').val(sum_month);
	$('#avg_month_rent').val(sum_total);

});