@extends('../layouts/master', ['title' => 'Thông tin cá nhân'])
@section('body')
@parent
<div class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="main-info__left">
                    <div class="info__left-header d-flex align-items-center">
                        <div class="info__left-header--img">
                            <img src="images/products/hoodie_cart.jpg" alt="" class="info__left-imguser">
                        </div>
                        <div class="info__left-header--updatename">
                            <p class="info__left-header--name">Nguyễn Hiếu Nghĩa</p>
                            <div class="info__left-header--updtae d-flex align-items-center">
                                <i class="fas fa-pencil-alt"></i>
                                <p class="info__left-header--content">Sửa hồ sơ</p>
                            </div>
                        </div>
                    </div>
                    <div class="info__left-category">
                        <div class="info__categor-update d-flex align-items-center">
                            <i class="fas fa-user-circle icon-user"></i>
                            <a href="">
                                <p class="info__categor-update--content">Tài khoản của tôi</p>
                            </a>
                        </div>
                        <div class="info__categor-favorite d-flex align-items-center">
                            <i class="fab fa-gratipay icon-favorite"></i>
                            <a href="">
                                <p class="info__categor-favorite--content">Sản phẩm yêu thích</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="main__right">
                    <div class="favorite__header">
                        <h4 class="favorite__header-content">Sản phẩm yêu thích</h4>
                    </div>
                    <div class="favorite__body">
                        <div class="favorite__body-product d-flex align-items-center">
                            <div class="favorite__product-img p-2">
                                <img src="images/products/hoodie_cart.jpg" alt="hình sản phẩm" width="80px" height="80px">
                            </div>
                            <div class="favorite__product-infopeoduct align-items-end flex-column p-2">
                                <div class="favorite__product-infopeoduct--name p-2">
                                    Áo hoodie trơn nam vải nỉ lót bông form rộng
                                </div>
                                <div class="favorite__product-infopeoduct--price mt-auto p-2">₫159.000</div>
                            </div>
                            <div class="favorite__product-infopeoduct-btndelete ml-auto p-2">
                                <span class="delte-product">Xóa</span>
                            </div>
                        </div>
                        <div class="favorite__body-product d-flex align-items-center">
                            <div class="favorite__product-img p-2">
                                <img src="images/products/hoodie_cart.jpg" alt="hình sản phẩm" width="80px" height="80px">
                            </div>
                            <div class="favorite__product-infopeoduct align-items-end flex-column p-2">
                                <div class="favorite__product-infopeoduct--name p-2">
                                    Áo hoodie trơn nam vải nỉ lót bông form rộng
                                </div>
                                <div class="favorite__product-infopeoduct--price mt-auto p-2">₫159.000</div>
                            </div>
                            <div class="favorite__product-infopeoduct-btndelete ml-auto p-2">
                                <span class="delte-product">Xóa</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../layouts/footer')
@stop