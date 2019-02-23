;(function($) {
    var p = $("#about");
    console.log(p.scrollTop())
    // $( "p:last" ).text( "scrollTop:" + p.scrollTop() );
    $(document).scroll(function(){
        var scrollPost = $(document).scrollTop();
        // alert(scrollPost);
        // console.log(scrollPost)
        // console.log($(window).height())
        if(scrollPost > 20) {
            $('#about').css('display','none');
        } else {
            $('#about').css('display','block');

        }
    });

})(jQuery);