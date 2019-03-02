;(function($) {

    console.log('the hero scribs')

    $(function() {
        var eTop = $('.branding').offset().top; //get the offset top of the element
        // console.log('this one', eTop - $(window).scrollTop()); //position of the ele w.r.t window
      
        $(window).scroll(function() { //when window is scrolled
            let a = eTop - $(window).scrollTop()
          console.log('this other one', a/2);
          $('.hero-content').css('bottom', a/3)
        });
      });
  

    // let a = $('#navbar')

})(jQuery);
