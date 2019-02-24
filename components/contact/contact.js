;(function($) {

    

    $('.submit-btn').mouseover(()=> {
        console.log('on')
        $('#”contact-form”').attr('id','hover-state')
        $('.alt-contact').addClass('alt-contact-hover')
    })
    $('.submit-btn').mouseleave(()=> {
        console.log('off')
        $('#hover-state').attr('id','”contact-form”')
        $('.alt-contact').removeClass('alt-contact-hover')

    })


})(jQuery);
