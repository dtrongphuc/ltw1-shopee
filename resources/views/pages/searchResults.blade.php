@extends('../layouts/master', ['title' => 'Tìm kiếm'])
    @section('body')
    @parent
    @inject('helper', 'App\Http\Controllers\HomeController')
    <main class="main main-home">
        <div class="container p-6">
            <div class="row m--6">
                <div class="col-2 p-6">
                    <ul class="categories">
                        <li class="category-item category-item--heading">
                            <i class="fas fa-list"></i>
                            <p class="ms-2">Tất cả danh mục</p>
                        </li>
                        <li class="category-item {{Request::has('category') ? "" : "category-item--active"}}">
                            <a href="/">Tất cả</a>
                        </li>
                    </ul>
                </div>
                <div class="col-10 p-6" id="products">
                    <div class="col-12 p-6">
                        <div class="main-filter d-flex">
                            <div class="main-filter__left d-flex align-items-center">
                                <p class="main-filter__left--title">Sắp xếp theo</p>
                                <ul class="main-filter__left--list">
                                    <li class="filter-list__item {{!Request::has('filter') || Request::has('filter') && Request::get('filter') == 'popular' ? "filter-list__item--active" : ""}}" id="sort-popular">
                                        <a href="{{request()->fullUrlWithQuery(['filter' => 'popular'])}}">Phổ biến</a>
                                    </li>
                                    <li class="filter-list__item {{Request::has('filter') && Request::get('filter') == 'new' ? "filter-list__item--active" : ""}}" id="sort-new">
                                        <a href="{{request()->fullUrlWithQuery(['filter' => 'new'])}}">Mới nhất</a>
                                    </li>
                                    <li class="filter-list__item {{Request::has('filter') && Request::get('filter') == 'selling' ? "filter-list__item--active" : ""}}" id="sort-selling">
                                        <a href="{{request()->fullUrlWithQuery(['filter' => 'selling'])}}">Bán chạy</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-filter__right"></div>
                        </div>
                    </div>

                    <div class="col-12 p-6">
                        <div class="main-products">
                            <div class="row m--6">
                                @if(isset($productSearch))
                                    @foreach($productSearch as $product)
                                    <div class="col-2-4">
                                        <div class="product-item">
                                            <a class="product-item__link" href="{{'/product/'.$product->productId.'/'}}" >
                                                <div class="product-item__img">
                                                    <img src="{{$helper->getFirstImageProduct($product->productId)}}" alt="">
                                                </div>
                                                <p class="product-item__layout product-item__heading">{{$product -> productName}}</p>
                                                <div class="product-item__layout d-flex align-items-center justify-content-between mt-3">
                                                    <div class="d-inline-flex">
                                                        <p class="product-item__price product-item__price--small text-decoration-underline font">đ</p>
                                                        <p class="product-item__price">{{number_format($product->price , 0, ',', '.')}}</p>
                                                    </div>
                                                    <p class="product-item__sold">Đã bán {{$product -> sold}}</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif 
                            </div>
                        </div>
                    </div>
                    {{ $productSearch->links() }}
                </div>
            </div>
        </div>
    </main>
@stop