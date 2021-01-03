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
                            <div class="info__categor-favorite d-flex align-items-center">
                                <i class="fas fa-shopping-basket icon-purchaseorder"></i>
                                <a href="">
                                    <p class="info__categor-favorite--content">Đơn mua</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-9">
                    <div class="main__right">
                        <div class="favorite__header">
                            <h4 class="favorite__header-content">Đơn mua</h4>
                        </div>
                        <div class="order__body">
                            {{-- @foreach ($bills as $bill)
                                --}}
                                @for ($bill = 1; $bill <= count($bills); $bill++)
                                    <div class="order__body-order">
                                        <div class="order__body-status d-flex justify-content-between">
                                            <div class="order__body-status-stt">{{$bill}}</div>
                                            <div class="order__body-status-content">ĐANG GIAO</div>
                                        </div>
                                        {{-- {{ $bills[$bill] }} --}}
                                        @foreach ($bills[$bill] as $detailbill)
                                            <div class="order__body-infoproduct d-flex align-items-cente">
                                                <div class="infoproduct__img p-2">
                                                    <img src="images/products/hoodie_cart.jpg" alt="" width="80px"
                                                        height="80px">
                                                </div>
                                                <div class="infoproduct__info p-2 ">
                                                    <h5 class="infoproduct__info-name">{{ $detailbill->productName }}</h5>
                                                    <p class="infoproduct__info-type">Phân loại hàng: black,36</p>
                                                    <p class="infoproduct__info-quantity">{{ $detailbill->quantity }}</p>
                                                </div>
                                                <div class="infoproduct__info-price ml-auto p-2 align-self-center">
                                                    <p>{{ number_format(floatval($detailbill->totalPrice)) }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="order__footer d-flex align-items-end justify-content-end">
                                            <div class="order__footerd-border d-flex align-items-end ">
                                                <p class="order__footer-content">Tổng số tiền: </p>
                                                <div class="order__footer-totalprice d-flex">
                                                    <p>đ</p>
                                                    <h4 class="order__footer-totalprice--price">128.000</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--
                                @endforeach --}}
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('../layouts/footer')
@stop
