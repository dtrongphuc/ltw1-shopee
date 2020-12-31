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

    const btnTypes = document.querySelectorAll(".product-types__btn");
    btnTypes &&
        btnTypes.forEach(btnType => {
            btnType.addEventListener("click", () => {
                removeActiveBtn();
                btnType.classList.add("product-types__btn--active");
            });
        });
    const removeActiveBtn = () => {
        btnTypes.forEach(btnType => {
            if (btnType.classList.contains("product-types__btn--active")) {
                btnType.classList.remove("product-types__btn--active");
            }
        });
    };

    const rateStars = document.querySelectorAll(".new-review__rate--wrapper");
    rateStars &&
        rateStars.forEach((starWrapper, index) => {
            starWrapper.addEventListener("click", () => {
                document
                    .querySelectorAll(".new-review__rate--wrapper > div")
                    .forEach(star => (star.style.width = "0%"));
                for (let i = 0; i <= index; i++) {
                    let star = rateStars[i].querySelector("div");
                    star.style.width = "100%";
                }
                document.querySelector("#post-rate").value = index + 1;
            });
        });
});
