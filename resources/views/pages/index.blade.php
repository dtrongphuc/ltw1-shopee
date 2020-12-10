<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')
<body>
    @include('../layouts/header')
    <main class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
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
                <div class="col-12">
                    <div class="main-products">
                        <div class="row">
                            <div class="col-3">
                                <div class="product-item">
                                    Product
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item">
                                    Product
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item">
                                    Product
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item">
                                    Product
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item">
                                    Product
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="product-item">
                                    Product
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