document.addEventListener("DOMContentLoaded", function() {
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

    //click trái tim yêu thích
    const productId = document.querySelector("section.product");
    const likeCount = document.querySelector(".product-favorite > p");
    $("#change-heart")?.click(function() {
        if ($("#heart").css("display") == "none") {
            axios
                .post(
                    "/product/add-favorite",
                    {
                        productId: productId.dataset.id
                    },
                    {
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            )
                        }
                    }
                )
                .then(res => {
                    if (res.status === 200) {
                        $("#heart").css("display", "block");
                        $("#heart-hollow").css("display", "none");
                        if (!!likeCount) {
                            likeCount.innerHTML = `Đã thích (${res.data?.count})`;
                        }
                    }
                })
                .catch(err => {
                    console.log(err.response);
                });
        } else {
            axios
                .post(
                    "/product/remove-favorite",
                    {
                        productId: productId.dataset.id
                    },
                    {
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                                "content"
                            )
                        }
                    }
                )
                .then(res => {
                    if (res.status === 200) {
                        $("#heart-hollow").css("display", "block");
                        $("#heart").css("display", "none");
                        if (!!likeCount) {
                            likeCount.innerHTML = `Đã thích (${res.data?.count})`;
                        }
                    }
                })
                .catch(err => {
                    console.log(err.response);
                });
        }
    });

    //Mua hàng
    const btnAddToCart = document.querySelector("#addToCart");
    const btnBuyNow = document.querySelector("#buyNow");

    btnAddToCart?.addEventListener("click", async () => {
        document.querySelector(
            ".product-validator__notification > p"
        ).innerHTML = "";
        document.querySelector(
            ".product-validator__notification"
        ).style.display = "none";

        let cartData = {
            productId: productId?.dataset.id,
            quantity: document.querySelector(".product-quantity__input").value,
            type: document.querySelector(".product-types__btn--active")?.dataset
                .typeId
        };

        try {
            const response = await axios.post("/product/add-to-cart", cartData);
            console.log(response);
        } catch (e) {
            let messageObj = e?.response?.data?.errors;
            document.querySelector(
                ".product-validator__notification > p"
            ).innerHTML = Object.values(messageObj)[0];
            document.querySelector(
                ".product-validator__notification"
            ).style.display = "block";
        }
    });

    btnBuyNow?.addEventListener("click", async () => {
        document.querySelector(
            ".product-validator__notification > p"
        ).innerHTML = "";
        document.querySelector(
            ".product-validator__notification"
        ).style.display = "none";

        let cartData = {
            productId: productId?.dataset.id,
            quantity: document.querySelector(".product-quantity__input").value,
            type: document.querySelector(".product-types__btn--active")?.dataset
                .typeId
        };

        try {
            const response = await axios.post("/product/add-to-cart", cartData);
            if (response.status === 200) {
                window.location.href = "/cart";
            }
        } catch (e) {
            let messageObj = e?.response?.data?.errors;
            document.querySelector(
                ".product-validator__notification > p"
            ).innerHTML = Object.values(messageObj)[0];
            document.querySelector(
                ".product-validator__notification"
            ).style.display = "block";
        }
    });
});
