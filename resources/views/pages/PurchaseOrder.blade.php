@extends('../layouts/master', ['title' => 'Đơn mua'])
@section('body')
@parent
@inject('helper', 'App\Http\Controllers\HomeController')
<div class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="main-info__left">
                    <div class="info__left-header d-flex align-items-center">
                        <div class="info__left-header--img">
                            <img src="{{ cloudinary()->getImage($user->avatar) }}" alt="" class="info__left-imguser">
                        </div>
                        <div class="info__left-header--updatename">
                            <p class="info__left-header--name">{{ explode('@', \Auth::user()->email)[0] }}</p>
                            <div class="info__left-header--update d-flex align-items-center">
                                <a href="/user/account" class="d-flex align-items-center">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p class="info__left-header--content">Sửa hồ sơ</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="info__left-category">
                        <div class="info__categor-update d-flex align-items-center">
                            <i class="fas fa-user-circle icon-user"></i>
                            <a href="/user/account">
                                <p class="info__categor-update--content">Tài khoản của tôi</p>
                            </a>
                        </div>
                        <div class="info__categor-favorite d-flex align-items-center">
                            <i class="fab fa-gratipay icon-favorite"></i>
                            <a href="/user/favorite">
                                <p class="info__categor-favorite--content">Sản phẩm yêu thích</p>
                            </a>
                        </div>
                        <div class="info__categor-favorite d-flex align-items-center">
                            <i class="fas fa-shopping-basket icon-purchaseorder"></i>
                            <a href="/user/purchaseorder">
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
                        @if (isset($bills) && count($bills) > 0)
                        {{-- @for ($bill = count($bills); $bill >= 1; $bill--) --}}
                        @foreach ($bills as $bill)

                        <div class="order__body-order">
                            <div class="order__body-status d-flex justify-content-end">
                                {{-- <div class="order__body-status-stt">
                                                    {{ $bill }}
                            </div> --}}
                            <div class="order__body-status-content">
                                @if ($bill[0]->status == 0)
                                CHỜ XỬ LÝ
                                @elseif($bill[0]->status == 1)
                                HỦY
                                @elseif($bill[0]->status == 2)
                                ĐANG XỬ LÝ
                                @elseif($bill[0]->status == 3)
                                ĐANG GIAO HÀNG
                                @else
                                HOÀN THÀNH
                                @endif
                            </div>
                        </div>
                        {{-- {{ $bills[$bill] }}
                        --}}
                        @foreach ($bill as $detailbill)
                        <div class="order__body-infoproduct d-flex align-items-center">
                            <a href="{{ '/product/' . $detailbill->productId }}" class="infoproduct__img p-2">
                                <img src="{{ cloudinary()->getImage($detailbill->productImage) }}" alt="" width="80px" height="80px">
                            </a>
                            <a href="{{ '/product/' . $detailbill->productId }}" class="p-2">
                                <div class="infoproduct__info ">
                                    <h5 class="infoproduct__info-name">
                                        {{ $detailbill->productName }}
                                    </h5>
                                    <p class="infoproduct__info-type">Phân loại hàng:
                                        {{ $detailbill->name }}
                                    </p>
                                    <p class="infoproduct__info-quantity">x
                                        {{ $detailbill->quantity }}
                                    </p>
                                </div>
                            </a>
                            <div class="infoproduct__info-price ml-auto p-2 align-self-center">
                                <p>{{ number_format(floatval($detailbill->totalPrice)) }}đ</p>
                            </div>
                        </div>
                        <div class="order__body">
                            @if (isset($bills) && count($bills) > 0)
                                {{-- @for ($bill = count($bills); $bill >= 1; $bill--) --}}
                                    @foreach ($bills as $bill)

                                        <div class="order__body-order">
                                            <div class="order__body-status d-flex justify-content-end">
                                                {{-- <div class="order__body-status-stt">
                                                    {{ $bill }}
                                                </div> --}}
                                                <div class="order__body-status-content">
                                                    @if ($bill[0]->status == 0)
                                                        CHỜ XỬ LÝ
                                                    @elseif($bill[0]->status == 1)
                                                        HỦY
                                                    @elseif($bill[0]->status == 2)
                                                        ĐANG XỬ LÝ
                                                    @elseif($bill[0]->status == 3)
                                                        ĐANG GIAO HÀNG
                                                    @else
                                                        HOÀN THÀNH
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- {{ $bills[$bill] }}
                                            --}}
                                            @foreach ($bill as $detailbill)
                                                <div class="order__body-infoproduct d-flex align-items-center">
                                                    <a href="{{ '/product/' . $detailbill->productId }}"
                                                        class="infoproduct__img p-2">
                                                        <img src="{{ cloudinary()->getImage($detailbill->productImage) }}"
                                                            alt="" width="80px" height="80px">
                                                    </a>
                                                    <a href="{{ '/product/' . $detailbill->productId }}" class="p-2">
                                                        <div class="infoproduct__info ">
                                                            <h5 class="infoproduct__info-name">
                                                                {{ $detailbill->productName }}</h5>
                                                            <p class="infoproduct__info-type">Phân loại hàng:
                                                                {{ $detailbill->name }}
                                                            </p>
                                                            <p class="infoproduct__info-quantity">x
                                                                {{ $detailbill->quantity }}</p>
                                                        </div>
                                                    </a>
                                                    <div class="infoproduct__info-price ml-auto p-2 align-self-center">
                                                        <p>{{ number_format(floatval($detailbill->totalPrice)) }}đ</p>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="order__footer d-flex align-items-end justify-content-end">
                                                <div class="order__footerd-border d-flex align-items-end ">
                                                    <p class="order__footer-content">Tổng số tiền: </p>
                                                    <div class="order__footer-totalprice d-flex">
                                                        <p>đ</p>
                                                        <h4 class="order__footer-totalprice--price">
                                                            {{ number_format(floatval($bill[0]->billTotalPrice)) }}
                                                        </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @endforeach
                                    {{--
                                @endfor --}}
                            @else
                                <div class="notify__not-found mt-4">
                                    <img src="{{ URL::asset('images/not-found.png') }}" alt="">
                                    <p>Chưa có đơn mua</p>
                        @endforeach
                        <div class="order__footer d-flex align-items-end justify-content-end">
                            <div class="order__footerd-border d-flex align-items-end ">
                                <p class="order__footer-content">Tổng số tiền: </p>
                                <div class="order__footer-totalprice d-flex">
                                    <p>đ</p>
                                    <h4 class="order__footer-totalprice--price">
                                        {{ number_format(floatval($bill[0]->billTotalPrice)) }}
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{--
                                @endfor --}}
                    @else
                    <div class="notify__not-found mt-4">
                        <img src="{{ URL::asset('images/not-found.png') }}" alt="">
                        <p>Chưa có đơn mua</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('../layouts/footer')
@stop