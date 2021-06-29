
var $sd = jQuery.noConflict();
$sd(function () {
    $sd('.customer-logos').slick({
        slidesToShow: 4,
        slidesToScroll: 2,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: true,
        prevArrow: $("#prevArrowSlickPartners"),
        nextArrow: $("#nextArrowSlickPartners"),
        pauseOnHover: true,
        responsive: [{
            breakpoint: 900,
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: 770,
            settings: {
                slidesToShow: 2
            }
        }]
    });
});