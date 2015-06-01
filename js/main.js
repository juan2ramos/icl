var $root = $('html'),
    $home = $('#home'),
    $header = $('#Header'),
    homeHeight = $home.height(),
    $number = $('.Number'),
    $nav = $('.nav--fixed')
eventType = ((document.ontouchstart !== null) ? 'click' : 'touchstart');


/* SLIDER */
function navSlide() {
    var scroll_top = $(window).scrollTop();

    var scrolled = $(window).scrollTop();
    if (scrolled > 200) {
        $nav.addClass('open');
    } else {
        $nav.removeClass('open');
    }
}
function anchorScroll(event) {
    var id     = $(this).attr("href")
        ;
    if(id == "#contacto"){
        $('.contact-content').addClass('show')
    }else{
        var target = $(id).offset().top;
        $('html, body').animate({
            scrollTop: target
        }, 500);

    }

    event.preventDefault();
}
function close(event) {

    $('.contact-content').removeClass('show')
}
// Handlers
// =================================================

$('.close').on(eventType, function() {
    close.call(this, event);
});
$('.scrollto').on(eventType, function() {
    anchorScroll.call(this, event);
});

$(window).scroll(navSlide);

$(window).load(function () {
    if ($('.slider').length > 0) {
        $('.slider').flexslider({
            animation: "none",
            slideshow: true,
            prevText: "<",
            nextText: ">"
        });
    }
    navSlide();

});
