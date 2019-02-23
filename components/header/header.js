;(function($) {

    $('.map').mouseover(()=> {
        $('.map-hover').fadeIn(1)
    })
    $('.map').mouseleave(()=> {
        $('.map-hover').fadeOut(1)
    })

    $('.paint').mouseover(()=> {
        $('.paint-hover').fadeIn(1)
    })
    $('.paint').mouseleave(()=> {
        $('.paint-hover').fadeOut(1)
    })

    $('.insta').mouseover(()=> {
        $('.insta-hover').fadeIn(1)
    })
    $('.insta').mouseleave(()=> {
        $('.insta-hover').fadeOut(1)
    })

    $('.contact').mouseover(()=> {
        $('.contact-hover').fadeIn(1)
    })
    $('.contact').mouseleave(()=> {
        $('.contact-hover').fadeOut(1)
    })



  $(document).ready(function(){

      $('#mobile-menu').click(function(){
          $(this).toggleClass('open');

          $('.mobile-menu').fadeToggle();
          $('.utility-menu').fadeToggle();
      });

  });


  $(window).load(function(){


  });


  $(window).resize(function(){


  });

  /**
   * Optional Pinned Header
   */
  $(window).scroll(function (event) {
      var scroll = $(window).scrollTop();

      if(scroll > 84){
          $('header').addClass('scroll');
      } else {
          $('header').removeClass('scroll');
      }
  });

})(jQuery);
