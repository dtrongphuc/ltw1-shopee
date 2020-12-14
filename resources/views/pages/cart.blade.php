@extends('../layouts/master', ['title' => 'Trang chủ'])
@section('body')
@parent
<div class="cart">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cart__header-left d-flex align-items-center">
                    <div class="cart__header-logo">
                        <img src="images/logo/shopee-color.png" alt="" class="cart-logo">
                    </div>
                    <div class="cart__header-title">
                        <h4 class="cart-title">Giỏ Hàng</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cart__header-search d-flex justify-content-between">
                    <input class="form-control cart__header-input form-control" value="1" type="search" placeholder="Search" aria-label="Search">
                    <span class="cart-search d-flex align-items-center justify-content-center">
                        <i class="fas fa-search search-icon"></i>
                    </span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="cartbody">
    <div class="container">
        <div class="cartbody__headeroflist">
            <div class="row d-flex justify-content-around">
                <div class="col-md-6">
                    <div class="cartbody__checkall d-flex align-items-center">
                        <div class="cartbody__checkall-check">
                            <input type="checkbox">

                        </div>
                        <span class="cartbody__checkall-content">Sản phẩm</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="cartbody__headercolumn d-flex justify-content-around">
                        <h5 class="cartbody__headercolumn-unitprice">Đơn giá</h5>
                        <h5 class="cartbody__headercolumn-amount">Số lượng</h5>
                        <h5 class="cartbody__headercolumn-price">Số tiền</h5>
                        <h5 class="cartbody__headercolumn-manipulation">Thao tác</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="cartbody__products">
            <div class="row d-flex justify-content-around">
                <div class="col-md-6">
                    <div class="cartbody__checkall d-flex align-items-center">
                        <div class="cartbody__products-check">
                            <input type="checkbox">

                        </div>
                        <div class="cartbody__products-img"></div>
                        <h5 class="cartbody__products-productname">
                            QUẦN BAGGY JEANS ĐEN TRƠN RÁCH GỐI (có hình chụp thật)
                        </h5>
                        <span class="cartbody__products-classify">Phân loại: Đen, XL</span>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="cartbody__productsinfo d-flex justify-content-around">
                        <p class="cartbody__productsinfo-unitprice">đ180.000</p>
                        <div class="cartbody__productsinfo-amount">
                            <button class="cartbody__productsinfo-amount--down"></button>
                            <input class="cartbody__productsinfo-amount--content"></input>
                            <button class="cartbody__productsinfo-amount--up"></button>
                        </div>
                        <h5 class="cartbody__productsinfo-price">đ180.000</h5>
                        <span class="cartbody__productsinfo-manipulation">Xóa</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop