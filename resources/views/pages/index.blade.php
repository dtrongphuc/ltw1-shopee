@extends('../layouts/master', ['title' => 'Trang chủ'])
    @section('body')
    @parent
        <main class="main main-home">
            <div class="container p-6">
                <div class="row m--6">
                    <div class="col-2 p-6">
                        <ul class="categories">
                            <li class="category-item category-item--heading">
                                <i class="fas fa-list"></i>
                                <p class="ml-2">Tất cả danh mục</p>
                            </li>
                            @foreach($category as $cate)
                            <li class="category-item category-item--active">
                                <a href="">{{$cate -> categoryName}}</a>
                            </li>
                            @endforeach

                            <!-- <li class="category-item">
                                <a href="">Thiết bị âm thanh</a>
                            </li>
                            <li class="category-item">
                                <a href="">Tai nghe</a>
                            </li> -->

                        </ul>
                    </div>
                    <div class="col-10 p-6">
                        <div class="col-12 p-6">
                            <div class="main-filter d-flex">
                                <div class="main-filter__left d-flex align-items-center">
                                    <p class="main-filter__left--title">Sắp xếp theo</p>
                                    <ul class="main-filter__left--list">
                                        <li class="filter-list__item filter-list__item--active">Phổ biến</li>
                                        <li class="filter-list__item">Mới nhất</li>
                                        <li class="filter-list__item">Bán chạy</li>
                                        <li class="filter-list__item filter-list__item--select">
                                            Giá
                                            <i class="fas fa-chevron-down"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="main-filter__right"></div>
                            </div>
                        </div>
                        <div class="col-12 p-6">
                            <div class="main-products">
                                <div class="row m--6">
                                    <div class="col-2-4">
                                        <div class="product-item">
                                            <a class="product-item__link" href="">
                                                <div class="product-item__img">
                                                    <img src="https://cf.shopee.vn/file/bdec9f8272db39f28e55675ff2264796_tn"
                                                        alt="">
                                                </div>
                                                <p class="product-item__layout product-item__heading">Tai Nghe Bluetooth Chụp Tai Hoco W23 Có Khe Cắm Thẻ Nhớ</p>
                                                <div class="product-item__layout d-flex align-items-center justify-content-between mt-3">
                                                    <div class="d-inline-flex">
                                                        <p class="product-item__price product-item__price--small text-decoration-underline font">đ</p>
                                                        <p class="product-item__price">289.000</p>
                                                    </div>
                                                    <svg height="12" viewBox="0 0 20 12" width="20"
                                                        class="shopee-svg-icon icon-free-shipping">
                                                        <g fill="none" fill-rule="evenodd" transform="">
                                                            <rect fill="#00bfa5" fill-rule="evenodd" height="9" rx="1"
                                                                width="12" x="4"></rect>
                                                            <rect height="8" rx="1" stroke="#00bfa5" width="11" x="4.5"
                                                                y=".5"></rect>
                                                            <rect fill="#00bfa5" fill-rule="evenodd" height="7" rx="1"
                                                                width="7" x="13" y="2"></rect>
                                                            <rect height="6" rx="1" stroke="#00bfa5" width="6" x="13.5"
                                                                y="2.5"></rect>
                                                            <circle cx="8" cy="10" fill="#00bfa5" r="2"></circle>
                                                            <circle cx="15" cy="10" fill="#00bfa5" r="2"></circle>
                                                            <path
                                                                d="m6.7082481 6.7999878h-.7082481v-4.2275391h2.8488017v.5976563h-2.1405536v1.2978515h1.9603297v.5800782h-1.9603297zm2.6762505 0v-3.1904297h.6544972v.4892578h.0505892c.0980164-.3134765.4774351-.5419922.9264138-.5419922.0980165 0 .2276512.0087891.3003731.0263672v.6210938c-.053751-.0175782-.2624312-.038086-.3762568-.038086-.5122152 0-.8758247.3017578-.8758247.75v1.8837891zm3.608988-2.7158203c-.5027297 0-.8536919.328125-.8916338.8261719h1.7390022c-.0158092-.5009766-.3446386-.8261719-.8473684-.8261719zm.8442065 1.8544922h.6544972c-.1549293.571289-.7050863.9228515-1.49238.9228515-.9864885 0-1.5903965-.6269531-1.5903965-1.6464843 0-1.0195313.6165553-1.6669922 1.5872347-1.6669922.9580321 0 1.5366455.6064453 1.5366455 1.6083984v.2197266h-2.4314412v.0351562c.0221328.5595703.373095.9140625.9169284.9140625.4110369 0 .6924391-.1376953.8189119-.3867187zm2.6224996-1.8544922c-.5027297 0-.853692.328125-.8916339.8261719h1.7390022c-.0158091-.5009766-.3446386-.8261719-.8473683-.8261719zm.8442064 1.8544922h.6544972c-.1549293.571289-.7050863.9228515-1.49238.9228515-.9864885 0-1.5903965-.6269531-1.5903965-1.6464843 0-1.0195313.6165553-1.6669922 1.5872347-1.6669922.9580321 0 1.5366455.6064453 1.5366455 1.6083984v.2197266h-2.4314412v.0351562c.0221328.5595703.373095.9140625.9169284.9140625.4110369 0 .6924391-.1376953.8189119-.3867187z"
                                                                fill="#fff"></path>
                                                            <path d="m .5 8.5h3.5v1h-3.5z" fill="#00bfa5"></path>
                                                            <path d="m0 10.15674h3.5v1h-3.5z" fill="#00bfa5"></path>
                                                            <circle cx="8" cy="10" fill="#047565" r="1"></circle>
                                                            <circle cx="15" cy="10" fill="#047565" r="1"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <div class="product-item__layout d-flex align-items-center justify-content-between">
                                                    <i class="far fa-heart product-item__like"></i>
                                                    <p class="product-item__sold">Đã bán 21,8k</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- Phân trang -->
        <div class="shopee-page-controller">
            <button class="shopee-icon-button shopee-icon-button--left ">
                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-left">
                    <g>
                        <path d="m8.5 11c-.1 0-.2 0-.3-.1l-6-5c-.1-.1-.2-.3-.2-.4s.1-.3.2-.4l6-5c .2-.2.5-.1.7.1s.1.5-.1.7l-5.5 4.6 5.5 4.6c.2.2.2.5.1.7-.1.1-.3.2-.4.2z">
                        </path>
                    </g>
                </svg>
            </button>
            <button class="shopee-button-solid shopee-button-solid--primary ">1</button>
            <button class="shopee-button-no-outline">2</button>
            <button class="shopee-button-no-outline">3</button>
            <button class="shopee-button-no-outline">4</button>
            <button class="shopee-button-no-outline">5</button>
            <button class="shopee-button-no-outline shopee-button-no-outline--non-click">...</button>
            <button class="shopee-icon-button shopee-icon-button--right ">
                <svg enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0" class="shopee-svg-icon icon-arrow-right">
                    <path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z">
                    </path>
                </svg>
            </button>
        </div>
    </main>
@stop