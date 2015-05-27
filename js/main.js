$(function () {
    /* SLIDER */
    if ($('.slider').length > 0) {
        $('.slider').flexslider({
            animation: "none",
            slideshow: true,
            prevText: "<",
            nextText: ">"
        });
    }

    $(window).scroll(function() { checkPos(); });
});
function checkPos() {
    var scrolled = $(window).scrollTop(),
        $nav = $('.nav');
    console.log(scrolled);
    if(scrolled > 200){
        $nav.addClass('out');
    }else{
        $nav.removeClass('out');
    }

}