$(document).ready(function(){
    $('#landing_wrapper').css('margin-left', '-250px').animate({opacity: '1'}, 500);
    $('#blur_wrapper').toggleClass('blurred');
    $('#popUpBackground').animate({opacity: '0.5'}, 500).animate({zIndex: '99'}, {queue: false, duration: 0});
});

$(document).ready(function(){
    $('#landing_wrapper').click(function(){
        $(this).animate({opacity: '0'}, 500).delay(500).animate({marginLeft: '-2000px'},0);
        $('#blur_wrapper').toggleClass('blurred');
        $('#popUpBackground').animate({opacity: '0'}, 500).animate({zIndex: '-100'}, 500);
    })
})