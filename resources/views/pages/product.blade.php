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
                        <div class="mt-4">
                            <ul class="product-right__footer">
                                <li>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
    </div>
</main>
@stop
