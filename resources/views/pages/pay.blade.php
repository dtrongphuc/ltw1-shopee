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
            <form action="{{route('pay.toorder')}}" method="POST">
                @csrf
                <div class="pay__addressship">
                    <div class="pay__addressship-header d-flex align-items-center">
                        <div class="pay__addressship-header--icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <p class="pay__addressship-header--content">Địa Chỉ Nhận Hàng</p>
                    </div>
                    <div class="pay__addressship-info d-flex align-items-center justify-content-between">
                        @if (isset($userinfo))
                            <div class="pay__addressship-infouser  d-flex align-items-center">

                                <div class="pay__addressship-info--username">
                                    <strong id="username" >{{ $userinfo[0]->name }}</strong>
                                </div>
                                <div class="pay__addressship-info--phone" style="margin: 0 10px;">
                                    <strong id="phonenumber">(+84) {{ substr($userinfo[0]->phoneNumber, 1) }}</strong>
                                </div>
                                <div class="pay__addressship-info--address" id="address">
                                    {{ $userinfo[0]->address }}

                                </div>
                            </div>
                        @endif
                        <div class="">
                            <button type="button" class="btn pay__addressship-btnchange" data-toggle="modal"
                                data-target="#exampleModal">Thay đổi</button>
                        </div>

                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="shopee-modal__content">
                                    <div>
                                        <div class="shopee-popup-form address-modal">
                                            <div class="shopee-popup-form__header">
                                                <div class="shopee-popup-form__title">Chỉnh Sửa Địa Chỉ Giao Hàng</div>
                                            </div>
                                            <div class="shopee-popup-form__main">
                                                <div class="shopee-popup-form__main-container">
                                                    <div>
                                                    </div>
                                                    <div class="address-modal__form_input">
                                                        <div class="address-modal__form_input_name">
                                                            <div
                                                                class="address-modal__form_input_name_nameuser address-modal__form_input_name_nameuser-model">
                                                                <input
                                                                    class="address-modal__form_input_name_nameuser_model_input"
                                                                    type="text" placeholder="Họ và tên" id="username_change"
                                                                    value="{{ $userinfo[0]->name }}" name="username" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="address-modal__form_input">
                                                        <div class="address-modal__form_input_name">
                                                            <div
                                                                class="address-modal__form_input_name_nameuser address-modal__form_input_name_nameuser_model">
                                                                <input
                                                                    class="address-modal__form_input_name_nameuser_model_input"
                                                                    type="text" placeholder="Số điện thoại"
                                                                    id="phonenumber_change"
                                                                    value="(+84) {{ substr($userinfo[0]->phoneNumber, 1) }}" name="phonenumber"
                                                                    >
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="address-modal__form_input">
                                                        <div class="address-modal__form_input_name">
                                                            <div
                                                                class="address-modal__form_input_name_nameuser address-modal__form_input_name_nameuser_model">
                                                                <input
                                                                    class="address-modal__form_input_name_nameuser_model_input"
                                                                    type="text" placeholder="Địa chỉ" id="address_change"
                                                                    value="{{ $userinfo[0]->address }}" name="address" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="shopee-popup-form__footer">
                                                    <button class="cancel-btn" type="button" data-dismiss="modal">Trở Lại</button>
                                                    <button class="cancel-btn completed" type="button" data-dismiss="modal"
                                                        id="coplete_change">Hoàn thành</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                    @if (isset($products))
                        @foreach ($products as $product)
                            <div class="row d-flex justify-content-around"
                                style="border-bottom: #f5f5f5 solid 1px; padding-bottom: 15px">
                                <div class="col-md-5">
                                    <div class="cartbody__checkall d-flex align-items-center ">
                                        <div class="cartbody__products-img">
                                            <img src="images/products/hoodie_cart.jpg" alt=""
                                                style="width: 80px; height: 80px;">
                                        </div>
                                        <h5 class="cartbody__products-productname">
                                            {{ $product->productName }}
                                        </h5>
                                        <span class="cartbody__products-classify ml-auto">Phân
                                            loại:{{ $product->name }}</span>
                                    </div>
                                </div>
                                <div class="col-md-7 d-flex align-items-center ">
                                    <div class="container">
                                        <div class="row d-flex align-items-center justify-content-end"
                                            style="text-align: center;">
                                            <div class="col-3">
                                                <p class="cartbody__productsinfo-unitprice">
                                                    đ{{ number_format(floatval($product->price)) }}</p>
                                            </div>
                                            <div class="col-3">
                                                <div class="pay__amount">{{ $product->quantity }}</div>
                                            </div>
                                            <div class="col-3">
                                                <p class="cartbody__productsinfo-price">
                                                    đ{{ number_format(floatval($product->price * $product->quantity)) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

                <div class="cartfooter">
                    <div class="payfooter__totalpay d-flex align-items-center justify-content-end">
                        <p class="payfooter__totalpay-content">Tổng thanh toán:</p>
                        <div class="payfooter__totalpay-price">
                            <h3>đ{{ number_format(floatval($payall)) }}</h1>
                        </div>
                    </div>
                    <div class="payfooter_btnpay d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary cartfooter__buyproduct-btnbuy" id="btntoorder">Đặt hàng</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @include('../layouts/footer')
@stop
