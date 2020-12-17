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
                            <div class="image-item__bg" style="background-image: url('../images/products/1.jfif')"></div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/2.jfif')"></div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/3.jfif')"></div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/4.jfif')"></div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/5.jfif')"></div>
                            <div class="image-item__border"></div>
                        </div>
                        <div class="product-image__item">
                            <div class="image-item__bg" style="background-image: url('../images/products/6.jfif')"></div>
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
                            <button class="product-quantity__btn">-</button>
                            <input type="text" class="product-quantity__input" name="product-quantity" value="1"
                                pattern="[0-9]+">
                            <button class="product-quantity__btn">+</button>
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
                    <div class="mt-5">
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
                <p>"Bánh Quy Bơ Thập Cẩm LU mang hương vị thơm ngon, hấp dẫn, đậm mùi bơ, là món bánh bổ dưỡng được nhiều người yêu thích.</p>
                <p>1 Hộp Trà Sen</p>
                <p>1 Ly Sứ</p>        
                <p>1 hộp Bánh Lu Bơ Pháp 540G</p>
                <p>Bánh được làm từ những nguyên liệu chọn lọc, giàu chất dinh dưỡng, cung cấp nguồn năng lượng cho cơ thể khi cần thiết. </p>
                <p>Hương vị bơ thơm lừng, vị sữa béo ngậy hòa cùng vị ngọt đậm, cho bạn những phút giây tận hưởng tuyệt vời.</p>
                <p>Sau mỗi bữa sáng bạn chỉ cần nhâm nhi khoảng 2 cái bánh nhỏ cùng 1 cốc trà nóng hoặc 1 ly sữa tươi là đảm bảo chất dinh dưỡng cho cả ngày.</p>
                <p>Bánh thích hợp cho những người bận rộn, những bữa ăn nhẹ hay nhâm nhi cùng tách trà nóng bên người thân, bạn bè.</p>
                <p>Với thiết kế sang trọng, đây sẽ là món quà ý nghĩa để dành tặng thầy cô nhân ngày Nhà giáo Việt Nam</p>
                <p>Xuất xứ: Việt Nam</p>
                <p>Hạn sử dụng : 12 tháng tính từ ngày sản xuất</p>
            </div>
        </div>
        <div class="main-product__review">
            
        </div>
    </div>
</main>
@stop
