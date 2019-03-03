;(function($) {

    let ogPosition = $('.hero-content').css('top');

    console.log('ogPosition', ogPosition)

    // $(function() {
        let navBar = $('.branding').offset().top;
        let windowTop = $(window).scrollTop();

    //   const element = document.querySelector('.hero-content')
        // const style = getComputedStyle(element)

        $(window).scroll(function() { 
            if($('.branding').offset().top <= '10px') {
                $('#navbar').css('position','fixed')
                $('#navbar').css('top'     ,'20px')
            }
            console.log('f',$('.branding').offset().top);
            
                let newBottomPos = navBar - $(window).scrollTop();
                $('.hero-content').css('bottom', newBottomPos/2);
            });
  

            window.onscroll = function() {myFunction()};

            var header = document.getElementById("navbar");
            var sticky = header.offsetTop;
            
            function myFunction() {
              if (window.pageYOffset > sticky) {
                header.classList.add("sticky-nav");
                $('.active').css('margin-top', '81px')
            } else {
                header.classList.remove("sticky-nav");
                $('.active').css('margin-top', '0')
              }
            }


})(jQuery);
