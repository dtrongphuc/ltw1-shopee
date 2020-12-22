$(document).ready(function() {
    let maxItems = $(".product-images__slider").children("div").length;
    $(".product-images__slider").slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: maxItems >= 5 ? 5 : maxItems,
        adaptiveHeight: true,
        slidesToScroll: 1,
        prevArrow: $(".product-images__ctn--left"),
        nextArrow: $(".product-images__ctn--right")
        // responsive: [
        //   {
        //     breakpoint: 1024,
        //     settings: {
        //       slidesToShow: 3,
        //       slidesToScroll: 3,
        //       infinite: true,
        //       dots: true
        //     }
        //   },
        //   {
        //     breakpoint: 600,
        //     settings: {
        //       slidesToShow: 2,
        //       slidesToScroll: 2
        //     }
        //   },
        //   {
        //     breakpoint: 480,
        //     settings: {
        //       slidesToShow: 1,
        //       slidesToScroll: 1
        //     }
        //   }
        //   // You can unslick at a given breakpoint now by adding:
        //   // settings: "unslick"
        //   // instead of a settings object
        // ]
    });
});
