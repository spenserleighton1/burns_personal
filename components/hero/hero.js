;(function($) {

    let ogPosition = $('.hero-content').css('top');

    console.log('ogPosition', ogPosition)

    $(function() {
        var eTop = $('.branding').offset().top; //get the offset top of the element
        // console.log('this one', eTop - $(window).scrollTop()); //position of the ele w.r.t window
      
        $(window).scroll(function() { //when window is scrolled
            let a = eTop - $(window).scrollTop()
        //   console.log('this other one', a/4);
          $('.hero-content').css('bottom', a/2)
        });
      });
  

    // let a = $('#navbar')

})(jQuery);
