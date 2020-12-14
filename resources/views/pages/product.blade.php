@extends('../layouts/master', ['title' => 'Sản phẩm'])
@section('body')
@parent
<main class="main main-product">
    <div class="container">
        <div class="main-product__wrapper">
            <div class="row">
                <div class="col-5">
                    <div class="main-product__left">
                        <div class="product-left__img product-left__img--big"></div>

                    </div>
                </div>
                <div class="col-7">
                    <section class="main-product__right">
                        <h4 class="product-right__title">Bàn phím Bluetooth Logitech K380 Multi-Device - Kết nối Bluetooth cùng lúc 3 thiết bị</h4>
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
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
