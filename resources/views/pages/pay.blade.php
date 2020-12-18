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
                        <h4 class="cart-title">Thanh toán</h4>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="cartbody">
    <div class="container" style="padding-bottom: 70px;">
        <div class="pay__addressship">
            <div class="pay__addressship-header d-flex align-items-center">
                <div class="pay__addressship-header--icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <p class="pay__addressship-header--content">Địa Chỉ Nhận Hàng</p>
            </div>
            <div class="pay__addressship-info d-flex align-items-center justify-content-between">

                <div class="pay__addressship-infouser  d-flex align-items-center">

                    <div class="pay__addressship-info--username">
                        <strong>Nguyễn hiếu nghĩa</strong>
                    </div>
                    <div class="pay__addressship-info--phone" style="margin: 0 10px;">
                        <strong>(+84) 947094472</strong>
                    </div>
                    <div class="pay__addressship-info--address">
                        L22 cư xá Phú Lâm A, Phường 12, Quận 6, TP. Hồ Chí Minh

                    </div>
                </div>
                <div class="">
                    <button type="button" class="btn pay__addressship-btnchange" data-toggle="modal" data-target="#exampleModal">Thay đổi</button>
                </div>

            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cartbody__headeroflist ">
            <div class="row d-flex justify-content-around align-items-center" style="text-align: center;">
                <div class="col-md-5">
                    <div class="cartbody__checkall d-flex align-items-center">
                        <span class="cartbody__checkall-content">Sản phẩm</span>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-end">
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Đơn giá</h5>
                            </div>
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Số lượng</h5>

                            </div>
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Thành Tiền</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cartbody__products">
            <div class="row d-flex justify-content-around">
                <div class="col-md-5">
                    <div class="cartbody__checkall d-flex align-items-center ">
                        <div class="cartbody__products-img">
                            <img src="images/products/hoodie_cart.jpg" alt="" style="width: 80px; height: 80px;">
                        </div>
                        <h5 class="cartbody__products-productname">
                            QUẦN BAGGY JEANS ĐEN TRƠN RÁCH GỐI (có hình chụp thật)
                        </h5>
                        <span class="cartbody__products-classify ml-auto">Loại: Đen, XL</span>
                    </div>
                </div>
                <div class="col-md-7 d-flex align-items-center ">
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-end" style="text-align: center;">
                            <div class="col-3">
                                <p class="cartbody__productsinfo-unitprice">đ180.000</p>
                            </div>
                            <div class="col-3">
                                <div class="pay__amount">1</div>
                            </div>
                            <div class="col-3">
                                <p class="cartbody__productsinfo-price">đ180.000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cartfooter">
            <div class="payfooter__totalpay d-flex align-items-center justify-content-end">
                <p class="payfooter__totalpay-content">Tổng thanh toán:</p>
                <div class="payfooter__totalpay-price">
                    <h3>đ150.000.000</h1>
                </div>
            </div>
            <div class="payfooter_btnpay d-flex justify-content-end">
                <button class="btn btn-primary cartfooter__buyproduct-btnbuy">Mua hàng</button>
            </div>

        </div>
    </div>
</div>
@include('../layouts/footer')
@stop