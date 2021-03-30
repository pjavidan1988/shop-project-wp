jQuery(document).ready(function($) {
    $(".open-cart").click(function() {
        $(".open-cart").toggleClass("active-cart");
        $(".cart").fadeToggle();
    });

    if( $(".sale-timeout-counter").length)
    {
        $(".sale-timeout-counter").startTimer();
    }
    if( $(".selectpicker").length)
    {
        $('.selectpicker').selectpicker({
            size: 10
        });
    }

    if( $("#owl-example").length)
    {
        $("#owl-example").owlCarousel();
    }
    if( $(".fancybox").length)
    {
        $(".fancybox").fancybox();
    }
    if( $(".zoom").length)
    {
        $(".zoom").elevateZoom();
    }



});