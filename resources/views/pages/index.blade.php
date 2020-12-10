<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')
<body>
    @include('../layouts/header')
    <main class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-2">
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
                <div class="col-10">
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