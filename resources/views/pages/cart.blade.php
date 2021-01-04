@extends('../layouts/master', ['title' => 'Giỏ hàng'])
@section('body')
@parent
@inject('helper', 'App\Http\Controllers\HomeController')
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
        <div class="cartbody__headeroflist ">
            <div class="row d-flex justify-content-around align-items-center" style="text-align: center;">
                <div class="col-md-5">
                    <div class="cartbody__checkall d-flex align-items-center">
                        <div class="cartbody__checkall-check">
                            <!-- <input type="checkbox"> -->
                        </div>
                        <span class="cartbody__checkall-content">Sản phẩm</span>
                    </div>

                </div>
                <div class="col-md-7">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Đơn giá</h5>
                            </div>
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Số lượng</h5>

                            </div>
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Số tiền</h5>

                            </div>
                            <div class="col-3">
                                <h5 class="cartbody__headercolumn">Thao tác</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cartbody__products">
            @if(isset($products))
                @foreach( $products as $product)
                <div class="row d-flex justify-content-around" style="border-bottom: #f5f5f5 solid 1px; padding-bottom: 15px">
                    <div class="col-md-5">
                        <a href="{{'/product/'.$product->id}}">
                            <div class="cartbody__checkall d-flex align-items-center ">
                                <div class="cartbody__products-check">
                                </div>
                                <div class="cartbody__products-img">
                                    <img src="{{cloudinary()->getImage($product->productImage)}}" alt="" style="width: 80px; height: 80px;">
                                </div>
                                <h5 class="cartbody__products-productname">
                                    {{$product->productName}}
                                </h5>
                                <span class="cartbody__products-classify ml-auto">Phân loại: {{$product->name}}</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-md-7 d-flex align-items-center">
                        <div class="container">
                            <div class="row d-flex align-items-center" style="text-align: center;">
                                <div class="col-3 d-flex justify-content-center">
                                    <p class="cartbody__productsinfo-unitprice" id="price_{{$product->id}}">{{number_format(floatval($product->price))}}</p>
                                    <p class="cartbody__productsinfo-unitprice">đ</p>
                                </div>
                                <div class="col-3">
                                    <div class="cartbody__productsinfo-amount">
                                        <button class="cartbody__productsinfo-amount--downup down-default" name="btnupdown" data-id={{$product->id}} id="dw_{{$product->productName}}" data-cart="{{$product->productName}}" >
                                            <span>&#8722</span>
                                        </button>
                                        <input class="cartbody__productsinfo-amount--content" value="{{$product->quantity}}" id="quantity_{{$product->id}}" readonly>
                                        <button class="cartbody__productsinfo-amount--downup" name="btnupdown" data-id={{$product->id}} id="up_{{$product->productName}}" data-cart="{{$product->productName}}" >
                                            <span>&#43</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-3 d-flex justify-content-center">
                                    <p class="cartbody__productsinfo-price">đ</p>
                                    <p class="cartbody__productsinfo-price" id="toltalprice_{{$product->id}}">{{number_format(floatval($product->price * $product->quantity))}}</p>
                                </div>
                                <div class="col-3">
                                    <a href="{{'/cart/delete/'.$product->id}}">
                                        <span class="cartbody__productsinfo-manipulation">Xóa</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>

        <div class="cartfooter">
            <div class="row d-flex justify-content-between align-items-center">
                <div class="col-md-6">
                    <div class="cartfooter__selectproduct d-flex align-items-center">
                        {{-- <button class="btn cartfooter__selectproduct-deleteall">Xóa</button> --}}
                        <button class="btn cartfooter__selectproduct-favoriteall">Lưu vào mục đã thích</button>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cartfooter__buyproduct d-flex align-items-center justify-content-end">
                        <div class="cartfooter__buyproduct-totalmoney d-flex align-items-center">
                            <p class="cartfooter__buyproduct-totalmoney--content">Tổng tiền hàng:</p>
                            <div class="cartfooter__buyproduct-totalmoney--money d-flex">
                                <h3>đ</h3>
                                <h3 id="payall">{{number_format(floatval($payall))}}</h3>
                            </div>
                        </div>
                        <a href="{{'/pay'}}">
                            <button class="btn btn-primary cartfooter__buyproduct-btnbuy">Mua hàng</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('../layouts/footer')

@stop
