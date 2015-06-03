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

    $('.contact-content').removeClass('show');
    $('.Projects-content-pop').removeClass('show');
}

function pop(event) {
    var id = '#' + $(this).data("id");
    event.preventDefault();

    $(id).addClass('show');
}
// Handlers
// =================================================

$('.close').on(eventType, function() {
    close.call(this, event);
});
$('.scrollto').on(eventType, function() {
    anchorScroll.call(this, event);
});

$('.link-pop').on(eventType, function() {

    pop.call(this, event);
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






var map;

function initialize() {
    var myLatlng = new google.maps.LatLng(4.173581, -73.6033703);
    var mapOptions = {

        scrollwheel: false,
        navigationControl: false,
        mapTypeControl: false,
        scaleControl: false,

        zoom: 13,
        center: myLatlng,
        styles: [{"featureType":"all","elementType":"geometry.fill","stylers":[{"lightness":"82"},{"saturation":"-100"}]},{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"administrative.neighborhood","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#879299"}]}]
    };
    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var infowindow = new google.maps.InfoWindow({
        content: 'EntreLagos <br> Km 3 Vía el Cairo',
        position: myLatlng
    });
    infowindow.open(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
