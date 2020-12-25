@extends('../layouts/master', ['title' => 'Sản phẩm'])
@section('body')
@parent
<main class="main main-product">
    <div class="container">
        <div class="main-product__wrapper">
            <div class="main-product__left">
                <div class="product-left__img product-left__img--big"></div>
                <div class="product-left__images">
                    <div class="product-images__slider">
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/1.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/2.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/3.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/4.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/5.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/6.jfif')">
                            </div>
                            <div class="image-item__border"></div>
                        </div>
                    </div>
                    <button class="product-images__ctn product-images__ctn--left">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button class="product-images__ctn product-images__ctn--right">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
            </div>
            <section class="main-product__right">
                <div>
                    <h4 class="product-right__title">Bàn phím Bluetooth Logitech K380 Multi-Device - Kết nối
                        Bluetooth cùng lúc 3 thiết bị</h4>
                    <div class="product-right__statistic">
                        <ul class="product-statistic__list">
                            <li class="statistic-item">
                                <a href="#">
                                    <div class="d-flex align-items-center">
                                        <span class="statistic-item__number statistic-item__number--red">4.9</span>
                                        <div style="margin-bottom: 3px">
                                            <i class="fas fa-star statistic-item__star"></i>
                                            <i class="fas fa-star statistic-item__star"></i>
                                            <i class="fas fa-star statistic-item__star"></i>
                                            <i class="fas fa-star statistic-item__star"></i>
                                            <i class="fas fa-star statistic-item__star"></i>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="statistic-item">
                                <a href="">
                                    <div class="d-flex align-items-center">
                                        <span class="statistic-item__number">1,6k</span>
                                        <p class="statistic-item__text">Đánh Giá</p>
                                    </div>
                                </a>
                            </li>
                            <li class="statistic-item">
                                <div class="d-flex align-items-center">
                                    <span class="statistic-item__number">4,1k</span>
                                    <p class="statistic-item__text">Đã Bán</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="product-right__price">
                        <p class="product-right__price--unit">đ</p>
                        <p class="product-right__price--currency">579.000</p>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <p class="product-right__subtitle">Loại</p>
                        <div class="d-flex align-items-center product-types">
                            <button disabled class="product-types__btn product-types__btn--disable">
                                Xanh
                                <i class="fas fa-check product-types__check"></i>
                            </button>
                            <button class="product-types__btn">
                                Trắng
                                <i class="fas fa-check product-types__check"></i>
                            </button>
                            <button class="product-types__btn">
                                Đen
                                <i class="fas fa-check product-types__check"></i>
                            </button>
                            <button class="product-types__btn product-types__btn--active">
                                Hồng
                                <i class="fas fa-check product-types__check"></i>
                            </button>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <p class="product-right__subtitle">Số lượng</p>
                        <div class="d-flex align-items-center product-quantity">
                            <button class="product-quantity__btn down-default" id="down">-</button>
                            <input type="text" class="product-quantity__input" name="product-quantity" value="1"
                                pattern="[0-9]+" id="quantify">
                            <button class="product-quantity__btn" id="up">+</button>
                        </div>
                        <p class="product-right__quantity--text">73 sản phẩm có sẵn</p>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <button class="product-cart__btn product-cart__btn--outline">
                            <i class="fas fa-cart-plus"></i>
                            Thêm Vào Giỏ Hàng
                        </button>
                        <button class="product-cart__btn product-cart__btn--fullred">Mua Ngay</button>
                    </div>
                    <div class="mt-4">
                        <div class="product-favorite">
                            <div id="change-heart">
                                <i class="far fa-heart heart-icon" id="heart-hollow"></i>
                                <i class="fas fa-heart heart-icon heart-icon--full" id="heart"></i>
                            </div>
                            <p>Đã thích (639)</p>
                        </div>
                    </div>
                    <div class="mt-4">
                        <div class="product-right__footer">
                            <div>
                                <div class="mall-icon mall-icon--return"></div>
                                <div class="product-right__footer--text">7 ngày miễn phí trả hàng</div>
                            </div>
                            <div>
                                <div class="mall-icon mall-icon--secure"></div>
                                <div class="product-right__footer--text">Hàng chính hãng 100%</div>
                            </div>
                            <div>
                                <div class="mall-icon mall-icon--deliver"></div>
                                <div class="product-right__footer--text">Miễn phí vận chuyển</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        
        <div class="main-product__intro">
            <div class="product-intro__heading">Mô tả sản phẩm</div>
            <div class="product-intro__wrapper">
                <p>"Bánh Quy Bơ Thập Cẩm LU mang hương vị thơm ngon, hấp dẫn, đậm mùi bơ, là món bánh bổ dưỡng được
                    nhiều người yêu thích.</p>
                <p>1 Hộp Trà Sen</p>
                <p>1 Ly Sứ</p>
                <p>1 hộp Bánh Lu Bơ Pháp 540G</p>
                <p>Bánh được làm từ những nguyên liệu chọn lọc, giàu chất dinh dưỡng, cung cấp nguồn năng lượng cho cơ
                    thể khi cần thiết. </p>
                <p>Hương vị bơ thơm lừng, vị sữa béo ngậy hòa cùng vị ngọt đậm, cho bạn những phút giây tận hưởng tuyệt
                    vời.</p>
                <p>Sau mỗi bữa sáng bạn chỉ cần nhâm nhi khoảng 2 cái bánh nhỏ cùng 1 cốc trà nóng hoặc 1 ly sữa tươi là
                    đảm bảo chất dinh dưỡng cho cả ngày.</p>
                <p>Bánh thích hợp cho những người bận rộn, những bữa ăn nhẹ hay nhâm nhi cùng tách trà nóng bên người
                    thân, bạn bè.</p>
                <p>Với thiết kế sang trọng, đây sẽ là món quà ý nghĩa để dành tặng thầy cô nhân ngày Nhà giáo Việt Nam
                </p>
                <p>Xuất xứ: Việt Nam</p>
                <p>Hạn sử dụng : 12 tháng tính từ ngày sản xuất</p>
            </div>
        </div>
        <div class="main-product__review">
            <div class="product-review__heading">Đánh giá sản phẩm</div>
            <div class="product-review__star">
                <div class="review-star__text">
                    <span class="review-star__text--score">4.7</span>
                    <span class="review-star__text--max-score">trên 5</span>
                </div>
                <div class="review-star__icon">
                    <div class="star-icon__wrapper">
                        <div style="width: 100%">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                                viewBox="0 0 511.98685 511" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                        fill="#ee4d2d" data-original="#ffc107" style="" class="" />
                                </g>
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                            viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M48.856,22.731c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757  c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996  L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.623C1.71,16.82,0.603,17.753,0.178,19.06  c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.702  c-0.232,1.353,0.313,2.694,1.424,3.502c1.11,0.809,2.555,0.914,3.772,0.273l10.814-5.686c0.461-0.242,1.011-0.242,1.472,0  l10.815,5.686c0.528,0.278,1.1,0.415,1.669,0.415c0.739,0,1.475-0.231,2.103-0.688c1.111-0.808,1.656-2.149,1.424-3.502  L39.651,32.66c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.731z M37.681,32.998l2.065,12.042c0.104,0.606-0.131,1.185-0.629,1.547  c-0.499,0.361-1.12,0.405-1.665,0.121l-10.815-5.687c-0.521-0.273-1.095-0.411-1.667-0.411s-1.145,0.138-1.667,0.412l-10.813,5.686  c-0.547,0.284-1.168,0.24-1.666-0.121c-0.498-0.362-0.732-0.94-0.629-1.547l2.065-12.042c0.199-1.162-0.186-2.348-1.03-3.17  L2.48,21.299c-0.441-0.43-0.591-1.036-0.4-1.621c0.19-0.586,0.667-0.988,1.276-1.077l12.091-1.757  c1.167-0.169,2.176-0.901,2.697-1.959l5.407-10.957c0.272-0.552,0.803-0.881,1.418-0.881c0.616,0,1.146,0.329,1.419,0.881  l5.407,10.957c0.521,1.058,1.529,1.79,2.696,1.959l12.092,1.757c0.609,0.089,1.086,0.491,1.276,1.077  c0.19,0.585,0.041,1.191-0.4,1.621l-8.749,8.528C37.866,30.65,37.481,31.835,37.681,32.998z"
                                    fill="#ee4d2d" data-original="#000000" style="" class="" />

                            </g>
                        </svg>
                    </div>
                    <div class="star-icon__wrapper">
                        <div style="width: 100%">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                                viewBox="0 0 511.98685 511" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                        fill="#ee4d2d" data-original="#ffc107" style="" class="" />
                                </g>
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                            viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M48.856,22.731c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757  c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996  L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.623C1.71,16.82,0.603,17.753,0.178,19.06  c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.702  c-0.232,1.353,0.313,2.694,1.424,3.502c1.11,0.809,2.555,0.914,3.772,0.273l10.814-5.686c0.461-0.242,1.011-0.242,1.472,0  l10.815,5.686c0.528,0.278,1.1,0.415,1.669,0.415c0.739,0,1.475-0.231,2.103-0.688c1.111-0.808,1.656-2.149,1.424-3.502  L39.651,32.66c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.731z M37.681,32.998l2.065,12.042c0.104,0.606-0.131,1.185-0.629,1.547  c-0.499,0.361-1.12,0.405-1.665,0.121l-10.815-5.687c-0.521-0.273-1.095-0.411-1.667-0.411s-1.145,0.138-1.667,0.412l-10.813,5.686  c-0.547,0.284-1.168,0.24-1.666-0.121c-0.498-0.362-0.732-0.94-0.629-1.547l2.065-12.042c0.199-1.162-0.186-2.348-1.03-3.17  L2.48,21.299c-0.441-0.43-0.591-1.036-0.4-1.621c0.19-0.586,0.667-0.988,1.276-1.077l12.091-1.757  c1.167-0.169,2.176-0.901,2.697-1.959l5.407-10.957c0.272-0.552,0.803-0.881,1.418-0.881c0.616,0,1.146,0.329,1.419,0.881  l5.407,10.957c0.521,1.058,1.529,1.79,2.696,1.959l12.092,1.757c0.609,0.089,1.086,0.491,1.276,1.077  c0.19,0.585,0.041,1.191-0.4,1.621l-8.749,8.528C37.866,30.65,37.481,31.835,37.681,32.998z"
                                    fill="#ee4d2d" data-original="#000000" style="" class="" />

                            </g>
                        </svg>
                    </div>
                    <div class="star-icon__wrapper">
                        <div style="width: 100%">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                                viewBox="0 0 511.98685 511" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                        fill="#ee4d2d" data-original="#ffc107" style="" class="" />
                                </g>
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                            viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M48.856,22.731c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757  c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996  L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.623C1.71,16.82,0.603,17.753,0.178,19.06  c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.702  c-0.232,1.353,0.313,2.694,1.424,3.502c1.11,0.809,2.555,0.914,3.772,0.273l10.814-5.686c0.461-0.242,1.011-0.242,1.472,0  l10.815,5.686c0.528,0.278,1.1,0.415,1.669,0.415c0.739,0,1.475-0.231,2.103-0.688c1.111-0.808,1.656-2.149,1.424-3.502  L39.651,32.66c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.731z M37.681,32.998l2.065,12.042c0.104,0.606-0.131,1.185-0.629,1.547  c-0.499,0.361-1.12,0.405-1.665,0.121l-10.815-5.687c-0.521-0.273-1.095-0.411-1.667-0.411s-1.145,0.138-1.667,0.412l-10.813,5.686  c-0.547,0.284-1.168,0.24-1.666-0.121c-0.498-0.362-0.732-0.94-0.629-1.547l2.065-12.042c0.199-1.162-0.186-2.348-1.03-3.17  L2.48,21.299c-0.441-0.43-0.591-1.036-0.4-1.621c0.19-0.586,0.667-0.988,1.276-1.077l12.091-1.757  c1.167-0.169,2.176-0.901,2.697-1.959l5.407-10.957c0.272-0.552,0.803-0.881,1.418-0.881c0.616,0,1.146,0.329,1.419,0.881  l5.407,10.957c0.521,1.058,1.529,1.79,2.696,1.959l12.092,1.757c0.609,0.089,1.086,0.491,1.276,1.077  c0.19,0.585,0.041,1.191-0.4,1.621l-8.749,8.528C37.866,30.65,37.481,31.835,37.681,32.998z"
                                    fill="#ee4d2d" data-original="#000000" style="" class="" />

                            </g>
                        </svg>
                    </div>
                    <div class="star-icon__wrapper">
                        <div style="width: 100%">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                                viewBox="0 0 511.98685 511" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                        fill="#ee4d2d" data-original="#ffc107" style="" class="" />
                                </g>
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                            viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M48.856,22.731c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757  c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996  L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.623C1.71,16.82,0.603,17.753,0.178,19.06  c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.702  c-0.232,1.353,0.313,2.694,1.424,3.502c1.11,0.809,2.555,0.914,3.772,0.273l10.814-5.686c0.461-0.242,1.011-0.242,1.472,0  l10.815,5.686c0.528,0.278,1.1,0.415,1.669,0.415c0.739,0,1.475-0.231,2.103-0.688c1.111-0.808,1.656-2.149,1.424-3.502  L39.651,32.66c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.731z M37.681,32.998l2.065,12.042c0.104,0.606-0.131,1.185-0.629,1.547  c-0.499,0.361-1.12,0.405-1.665,0.121l-10.815-5.687c-0.521-0.273-1.095-0.411-1.667-0.411s-1.145,0.138-1.667,0.412l-10.813,5.686  c-0.547,0.284-1.168,0.24-1.666-0.121c-0.498-0.362-0.732-0.94-0.629-1.547l2.065-12.042c0.199-1.162-0.186-2.348-1.03-3.17  L2.48,21.299c-0.441-0.43-0.591-1.036-0.4-1.621c0.19-0.586,0.667-0.988,1.276-1.077l12.091-1.757  c1.167-0.169,2.176-0.901,2.697-1.959l5.407-10.957c0.272-0.552,0.803-0.881,1.418-0.881c0.616,0,1.146,0.329,1.419,0.881  l5.407,10.957c0.521,1.058,1.529,1.79,2.696,1.959l12.092,1.757c0.609,0.089,1.086,0.491,1.276,1.077  c0.19,0.585,0.041,1.191-0.4,1.621l-8.749,8.528C37.866,30.65,37.481,31.835,37.681,32.998z"
                                    fill="#ee4d2d" data-original="#000000" style="" class="" />

                            </g>
                        </svg>
                    </div>
                    <div class="star-icon__wrapper">
                        <div style="width: 70%">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                                viewBox="0 0 511.98685 511" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path xmlns="http://www.w3.org/2000/svg"
                                        d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0"
                                        fill="#ee4d2d" data-original="#ffc107" style="" class="" />
                                </g>
                            </svg>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:svgjs="http://svgjs.com/svgjs" version="1.1" width="1.2rem" height="1.2rem" x="0" y="0"
                            viewBox="0 0 49.94 49.94" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path xmlns="http://www.w3.org/2000/svg"
                                    d="M48.856,22.731c0.983-0.958,1.33-2.364,0.906-3.671c-0.425-1.307-1.532-2.24-2.892-2.438l-12.092-1.757  c-0.515-0.075-0.96-0.398-1.19-0.865L28.182,3.043c-0.607-1.231-1.839-1.996-3.212-1.996c-1.372,0-2.604,0.765-3.211,1.996  L16.352,14c-0.23,0.467-0.676,0.79-1.191,0.865L3.069,16.623C1.71,16.82,0.603,17.753,0.178,19.06  c-0.424,1.307-0.077,2.713,0.906,3.671l8.749,8.528c0.373,0.364,0.544,0.888,0.456,1.4L8.224,44.702  c-0.232,1.353,0.313,2.694,1.424,3.502c1.11,0.809,2.555,0.914,3.772,0.273l10.814-5.686c0.461-0.242,1.011-0.242,1.472,0  l10.815,5.686c0.528,0.278,1.1,0.415,1.669,0.415c0.739,0,1.475-0.231,2.103-0.688c1.111-0.808,1.656-2.149,1.424-3.502  L39.651,32.66c-0.088-0.513,0.083-1.036,0.456-1.4L48.856,22.731z M37.681,32.998l2.065,12.042c0.104,0.606-0.131,1.185-0.629,1.547  c-0.499,0.361-1.12,0.405-1.665,0.121l-10.815-5.687c-0.521-0.273-1.095-0.411-1.667-0.411s-1.145,0.138-1.667,0.412l-10.813,5.686  c-0.547,0.284-1.168,0.24-1.666-0.121c-0.498-0.362-0.732-0.94-0.629-1.547l2.065-12.042c0.199-1.162-0.186-2.348-1.03-3.17  L2.48,21.299c-0.441-0.43-0.591-1.036-0.4-1.621c0.19-0.586,0.667-0.988,1.276-1.077l12.091-1.757  c1.167-0.169,2.176-0.901,2.697-1.959l5.407-10.957c0.272-0.552,0.803-0.881,1.418-0.881c0.616,0,1.146,0.329,1.419,0.881  l5.407,10.957c0.521,1.058,1.529,1.79,2.696,1.959l12.092,1.757c0.609,0.089,1.086,0.491,1.276,1.077  c0.19,0.585,0.041,1.191-0.4,1.621l-8.749,8.528C37.866,30.65,37.481,31.835,37.681,32.998z"
                                    fill="#ee4d2d" data-original="#000000" style="" class="" />

                            </g>
                        </svg>
                    </div>
                </div>
            </div>
            <div>
                <ul class="product-review__list">
                    <li class="product-review__item">
                        <div class="d-flex align-items-start">
                            <a href="#" class="review-item__user d-block">
                                <div>
                                    <img src="../images/user.jfif" alt="" class="review-item__avatar">
                                </div>
                            </a>
                            <div class="review-item__main ms-3">
                                <a href="#" class="review-item__name">trangtran27.9.99</a>
                                <div class="review-item__rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-item__text">
                                    Sức chịu tốt. Nhỏ xinh , dễ lắp ráp, có tầng để thêm đồ tiện lợi.
                                </div>
                                <div class="review-item__footer">2020-12-08 01:03</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-review__item">
                        <div class="d-flex align-items-start">
                            <a href="#" class="review-item__user d-block">
                                <div>
                                    <img src="../images/user.jfif" alt="" class="review-item__avatar">
                                </div>
                            </a>
                            <div class="review-item__main ms-3">
                                <a href="#" class="review-item__name">trangtran27.9.99</a>
                                <div class="review-item__rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-item__text">
                                    Sức chịu tốt. Nhỏ xinh , dễ lắp ráp, có tầng để thêm đồ tiện lợi.
                                </div>
                                <div class="review-item__footer">2020-12-08 01:03</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-review__item">
                        <div class="d-flex align-items-start">
                            <a href="#" class="review-item__user d-block">
                                <div>
                                    <img src="../images/user.jfif" alt="" class="review-item__avatar">
                                </div>
                            </a>
                            <div class="review-item__main ms-3">
                                <a href="#" class="review-item__name">trangtran27.9.99</a>
                                <div class="review-item__rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-item__text">
                                    Sức chịu tốt. Nhỏ xinh , dễ lắp ráp, có tầng để thêm đồ tiện lợi.
                                </div>
                                <div class="review-item__footer">2020-12-08 01:03</div>
                            </div>
                        </div>
                    </li>
                    <li class="product-review__item">
                        <div class="d-flex align-items-start">
                            <a href="#" class="review-item__user d-block">
                                <div>
                                    <img src="../images/user.jfif" alt="" class="review-item__avatar">
                                </div>
                            </a>
                            <div class="review-item__main ms-3">
                                <a href="#" class="review-item__name">trangtran27.9.99</a>
                                <div class="review-item__rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="review-item__text">
                                    Sức chịu tốt. Nhỏ xinh , dễ lắp ráp, có tầng để thêm đồ tiện lợi.
                                </div>
                                <div class="review-item__footer">2020-12-08 01:03</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</main>
@stop
