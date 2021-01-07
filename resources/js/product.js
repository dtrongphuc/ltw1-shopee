document.addEventListener("DOMContentLoaded", () => {
    const initCarousel = () => {
        let maxItems = document.querySelectorAll(".product-image__item").length;
        var mySwiper = new Swiper(".swiper-container", {
            // Optional parameters
            direction: "horizontal",
            loop: false,
            slidesPerView: maxItems >= 5 ? 5 : maxItems,
            // Navigation arrows
            navigation: {
                nextEl: ".product-images__ctn--right",
                prevEl: ".product-images__ctn--left"
            }
        });
    };

    if (!!document.querySelector(".product-images__slider")) {
        initCarousel();
    }

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

    //Chọn phân loại hàng
    const fetchProductType = async typeId => {
        try {
            const response = await axios.post("/api/product/type", { typeId });
            if (response.status === 200) {
                return response?.data;
            }
        } catch (e) {
            console.log(e.response);
        }
    };

    const btnTypes = document.querySelectorAll(".product-types__btn");
    btnTypes &&
        btnTypes.forEach(btnType => {
            btnType.addEventListener("click", async () => {
                removeActiveBtn();
                btnType.classList.add("product-types__btn--active");
                let { price, quantity } = await fetchProductType(
                    btnType.dataset.typeId
                );
                document.querySelector(
                    ".product-right__price--currency"
                ).innerHTML = price
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                document.querySelector(
                    ".product-right__quantity--text"
                ).innerHTML = `${quantity} sản phẩm có sẵn`;

                document.querySelector(
                    ".product-quantity__input"
                ).max = quantity;
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
            if (response.status === 200) {
                console.log(response);
                document.querySelector(".header-cart__count").innerHTML =
                    response.data?.count;
                document.querySelector(".header-cart__count").style.display =
                    "block";
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

    //tăng giảm số lượng
    $("#down_dtproduct").click(function() {
        let quantity_present = parseInt(
            document.getElementById("quantity").value
        );
        if (quantity_present == 1) {
            document.getElementById("down_dtproduct").style.cursor =
                "not-allowed";
            return;
        }
        document.getElementById("quantity").value = quantity_present - 1;
    });
    $("#up_dtproduct").click(function() {
        let quantity_present = parseInt(
            document.getElementById("quantity").value
        );
        console.log(quantity_present + 1);
        if (quantity_present == 1) {
            document.getElementById("down_dtproduct").style.cursor = "pointer";
        }
        document.getElementById("quantity").value = quantity_present + 1;
    });
});
