<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')
<body>
    @include('../layouts/header')
    <main class="main mt-4">
        <div class="container p-6">
            <div class="row m--6">
                <div class="col-2 p-6">
                    <ul class="categories">
                        <li class="category-item category-item--heading">
                            <i class="fas fa-list"></i>
                            <p class="ml-2">Tất cả danh mục</p>
                        </li>
                        <li class="category-item category-item--active">
                            <a href="">Thiết bị điện tử</a>
                        </li>
                        <li class="category-item">
                            <a href="">Thiết bị âm thanh</a>
                        </li>
                        <li class="category-item">
                            <a href="">Tai nghe</a>
                        </li>
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
                                                <img src="https://cf.shopee.vn/file/bdec9f8272db39f28e55675ff2264796_tn" alt="">
                                            </div>
                                            <p class="product-item__heading"></p>
                                            <p class="product-item__price"></p>
                                            <div class="d-flex">
                                                
                                            </div>
                                            <p class="product-item__place"></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>