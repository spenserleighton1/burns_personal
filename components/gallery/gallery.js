;(function($) {

    $('.gallery-box').on('click', function() {
        $('.modal-content').attr('src', $(this).find('img').attr('src'));
        $('#myModal').css('display', 'flex');   
        $('#title').text($(this).find('img').attr('title'));   
        $('#description').text($(this).find('img').attr('description'));   
        $('#year').text($(this).find('img').attr('year'));   

        $('gallery-details').attr('height', $('.modal-content').height());
    });		

   

    // Get the modal
    var modal = document.getElementById('myModal');
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    // When the user clicks on <span> (x), close the modal
    span.onclick = function() { 
    modal.style.display = "none";
    }

})(jQuery);