;(function($) {

    $('.map').mouseover(()=> {
        $('.map-hover').fadeIn(0)
    })
    $('.map').mouseleave(()=> {
        $('.map-hover').fadeOut(0)
    })

    $('.paint').mouseover(()=> {
        $('.paint-hover').fadeIn(0)
    })
    $('.paint').mouseleave(()=> {
        $('.paint-hover').fadeOut(0)
    })

    $('.insta').mouseover(()=> {
        $('.insta-hover').fadeIn(0)
    })
    $('.insta').mouseleave(()=> {
        $('.insta-hover').fadeOut(0)
    })

    $('.contact').mouseover(()=> {
        $('.contact-hover').fadeIn(0)
    })
    $('.contact').mouseleave(()=> {
        $('.contact-hover').fadeOut(0)
    })


    // Display the sections
    $('.paint').click(()=> {
        $('.active').fadeOut(100)
        $('.active').removeClass('active')
        setTimeout(()=> { 
            $('.the-gallery').addClass('active')
            $('.active').fadeIn(100)
            setTimeout(()=> { 
                $('html,body').animate({
                    scrollTop: $(".the-gallery").position().top - 225},
                    'slow');
            }, 200);
        }, 100);
    })

    $('.map').click(()=> {
        $('.active').fadeOut(100)
        $('.active').removeClass('active')
        setTimeout(()=> { 
            $('.the-map').addClass('active')
            $('.active').fadeIn(100)
            setTimeout(()=> { 
                $('html,body').animate({
                    scrollTop: $(".the-map").position().top - 225},
                    'slow');
            }, 200);
        }, 100);
    })

    $('.contact').click(()=> {
        $('.active').fadeOut(100)
        $('.active').removeClass('active')
        setTimeout(()=> { 
            $('.the-contact').addClass('active')
            $('.active').fadeIn(100)
            setTimeout(()=> { 
                $('html,body').animate({
                    scrollTop: $(".the-contact").position().top - 225},
                    'slow');
            }, 200);
        }, 100);
    })

    $('.insta').click(()=> {
        $('.active').fadeOut(100)
        $('.active').removeClass('active')
        setTimeout(()=> { 
            $('.the-instagram').addClass('active')
            $('.active').fadeIn(100)
            setTimeout(()=> { 
                $('html,body').animate({
                    scrollTop: $(".the-instagram").position().top - 2225},
                    'slow');
            }, 200);
        }, 100);
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
