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
    });

    const bigImage = document.querySelector(".product-left__img--big");
    let firstImage = document.querySelector(".image-item__bg");
    if (!!bigImage) {
        bigImage.style.backgroundImage =
            firstImage && firstImage.style.backgroundImage;
    }
    document.querySelectorAll(".product-image__item").forEach(item => {
        item.addEventListener("mouseover", event => {
            let parent = event.currentTarget;
            let children = parent.querySelector(".image-item__bg");
            if (!!bigImage) {
                bigImage.style.backgroundImage =
                    bigImage && children.style.backgroundImage;
            }
        });
    });
});
