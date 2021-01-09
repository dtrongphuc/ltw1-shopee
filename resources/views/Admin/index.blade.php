<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Quản Lý Sản Phẩm</title>
</head>

<body>
    <div class="box-content showLeft" id="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="/admin">ADMIN</a>
            </div>
            <ul class="list-item">

                <li class="item active">
                    <i class="fab fa-product-hunt"></i>
                    <a href="/admin">Quản Lý Danh Mục / Sản Phẩm</a>
                </li>
                <li class="item">
                    <i class="fas fa-chart-pie"></i>
                    <a href="admin/chartstatistical">Quản lý thống kê</a>
                </li>
                <li class="item">
                    <i class="fas fa-users-cog"></i>
                    <a href="admin/usermanagement">Quản lý người dùng</a>
                </li>
                <li class="item">
                    <i class="fas fa-file-invoice-dollar"></i>
                    <a href="admin/ordermanagement">Quản lý Đơn Hàng</a>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="header-right">
                <div style="cursor: pointer;">
                    <span><i class="fa fa-bars" id="btnReposiveLeft"></i></span>

                </div>
                <div class="dropdown show dropdown-content">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin
                        <img style="margin-left: 10px;" class="avatar" src="{{cloudinary()->getImage(\Auth::user()->avatar)}}" />
                    </a>

                    <div class="dropdown-menu " style="top: 8px !important;" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/">Trở về trang chủ</a>
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="card-body-DM">
                    <div class='category'>
                        <div>
                            <h5>Quản Lý Danh Mục</h5>
                        </div>
                        <div style='display: flex;'>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#themDM">Thêm Danh Mục</button>
                        </div>
                    </div>

                    <div class="table-responsive" id="categoryadmin">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã Danh Mục</th>
                                    <th>Tên Danh Mục</th>
                                    <th>Mô tả</th>
                                    <th>Xóa</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0 ; $i < $category->count(); $i++)
                                    <tr>
                                        <td style='text-align: center; width: 50px;'>{{$i + 1}}</td>
                                        <td style='text-align: center; width: 125px;'>{{$category[$i]->categoryId}}</td>
                                        <td style='width: 300px;'>{{$category[$i]->categoryName}}</td>
                                        <td style='width: 300px;'>{{$category[$i]->description}}</td>
                                        <td style='text-align: center; width: 80px;'><a href="{{'/admin/delete-category/'.$category[$i]->categoryId}}"><i class="fas fa-trash-alt"></i></a></td>
                                        <td style='text-align: center; width: 80px;'>
                                            <button type="button" data-toggle="modal" data-target="#suaDM"><i class="fas fa-edit"></i></button>
                                            <!-- Modal Sửa Danh Mục -->
                                            <div id="suaDM" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="max-width: 1000px !important;">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Sửa Danh Mục</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <form action="{{route('edit.category')}}" method="POST">
                                                            @csrf
                                                            <div class="modal-body row">
                                                                <div class="col-md-12 itemadd">
                                                                    <label class="col-md-2 labelitem" for="">Tên Danh Mục</label>
                                                                    <input class="col-md-9 inputitem" name="tenDM" type="text" placeholder='Nhập tên Danh Mục' value="{{$category[$i]->categoryName}}">
                                                                    <input type="hidden" name="IdDM" value="{{$category[$i]->categoryId}}">
                                                                </div>

                                                                <div class="col-md-12 itemadd">
                                                                    <label class="col-md-2 labelitem" for="">Mô tả</label>
                                                                    <textarea class="col-md-9 inputitem" name="motaDM" cols="50">{{$category[$i]->description}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                                                                <button type="submit" class="btn btn-success btn__submit-EditProduct" style="width:100px;">Sửa</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                        <div>
                            {{-- {{$category->links()}} --}}
                        </div>
                    </div>
                </div>

                <!-- Quản lÝ Sản Phẩm -->
                <div class="card-body-SP" id="productadmin">
                    <div class='category'>
                        <div>
                            <h5>Quản Lý Sản Phẩm</h5>
                        </div>
                        <div>
                            <button type="button" class="btn btn-info btn-lg btn-themSp" data-toggle="modal" data-target="#themSP">Thêm Sản Phẩm</button>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã Sản Phẩm</th>
                                    <th>Tên Sản Phẩm</th>
                                    <th>Loại Danh Mục</th>
                                    <th>Giá</th>
                                    <th>SL</th>
                                    <th>Lược thích</th>
                                    <th>Đánh Giá</th>
                                    <th>Đã bán</th>
                                    <th>Thời Gian Đăng</th>
                                    <th>Xóa</th>
                                    <th>Sửa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0 ; $i < $sanpham->count(); $i++)
                                    <tr>
                                        <td style='text-align: center;'>{{((Request::get('page') != null ? Request::get('page') : 1)-1)*6 + $i + 1}}</td>
                                        <td style=' text-align: center; width: 110px;'>{{$sanpham[$i]->productId}}</td>
                                        <td style="width: 300px;">{{$sanpham[$i]->productName}}</td>
                                        <td>{{$sanpham[$i]->categoryName}}</td>
                                        <td>{{$sanpham[$i]->price}}</td>
                                        <td>{{$sanpham[$i]->quantity}}</td>
                                        <td>{{$sanpham[$i]->likeCount}}</td>
                                        <td>{{$sanpham[$i]->rate}}</td>
                                        <td>{{$sanpham[$i]->sold}}</td>
                                        <td>{{$sanpham[$i]->postAt}}</td>
                                        <td><a href="{{'/admin/delete-product/'.$sanpham[$i]->productId}}"><i class="fas fa-trash-alt"></i></a></td>
                                        <td>
                                            <button type="button" class="btn__edit-product" data-product-id="{{$sanpham[$i]->productId}}" data-toggle="modal" data-target="#suaSP"><i class="fas fa-edit"></i></button>

                                        </td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{$sanpham->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Thêm Danh Mục -->
    <div id="themDM" class="modal fade" role="dialog">
        <div class="modal-dialog" style="max-width: 1000px !important;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm Danh Mục</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('add.category')}}" method="POST">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Tên Danh Mục</label>
                            <input class="col-md-9 inputitem" type="text" name="tenDM" placeholder='Nhập tên Danh Mục'>

                        </div>

                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Mô tả</label>
                            <textarea class="col-md-9 inputitem" rows="4" cols="50" name="motaDM"></textarea>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success" style="width:100px;">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Modal Thêm san pham -->
    <div id="themSP" class="modal fade" role="dialog">
        <div class="modal-dialog" style="max-width: 1000px !important;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Thêm Sản Phẩm</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form name="formInfoAdd" enctype="multipart/form-data" id="form-add-product" method="POST">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="product-name">Tên Sản Phẩm</label>
                            <input class="col-md-9 inputitem " name="product-name" id="product-name" type="text" placeholder='Nhập tên Sản Phẩm'>
                            <p id="error_productName" class="col-md-9 text-danger error_input--admin"></p>
                        </div>

                        <div class="col-md-12 itemadd " style="display: flex;">
                            <label class="col-md-2 labelitem" for="product-description">Mô tả</label>
                            <textarea class="col-md-9 inputitem" name="product-description" id='product-description' rows="10" cols="50"></textarea>
                        </div>
                        <p id="error_productDescription" class="col-md-9 text-danger error_input--admin" style="padding-left: 176px;"></p>

                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="upload">Hình Ảnh</label>
                            <input class="col-md-9" style="padding: 0;" type="file" id="upload" name="upload" accept="image/*" multiple>
                            <p id="error-image" class="col-md-9 text-danger error_input--admin"></p>
                        </div>
                        <div class="col-md-12 itemadd" style="display: flex;">
                            <label class=" labelitem" for="" style="width: 164px;">Phân Nhóm</label>
                            <div class="product-types__group">
                                <div class=' type-group--input'>
                                    <input class=" inputitem" id="product-type-name" type="text" name="product-type[]" placeholder='Nhập tên Phân Nhóm'>
                                    <input class=" inputitem" id="product-type-quantity" type="text" name="product-type-quantity[]" placeholder='Nhập Số Lượng'>
                                    <input class=" inputitem" id="product-type-price" type="text" name="product-type-price[]" placeholder='Nhập Giá'>
                                    <button type="button" class='inputitem-icon btn btn__add-type' name="btn-addInput-themsp" style="display: inline-block;">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                                <p id="error-productType" class="col-md-9 text-danger error_input--admin"></p>
                            </div>
                        </div>

                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Danh Mục Sản Phẩm</label>
                            <select name="category" class="col-md-9 inputitem add-product__category">
                                @foreach($category as $cate)
                                <option value={{$cate->categoryId}}>{{$cate->categoryName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success btn__submit-AddProduct" style="width:100px;">
                            <span class="spinner-border spinner-border-sm spinner-loading" role="status" aria-hidden="true"></span>
                            Thêm
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Modal sua san pham -->
    <div id="suaSP" class="modal fade" role="dialog">
        <div class="modal-dialog" style="max-width: 1000px !important;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sửa Thông Tin Sản Phẩm</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form name="formInfoEdit" enctype="multipart/form-data" id="form-edit-product" method="POST">
                    @csrf
                    <div class="modal-body row">
                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="product-name">Tên Sản Phẩm</label>
                            <input class="col-md-9 inputitem" name="product-name" id="product-name-edit" type="text" placeholder='Nhập tên Sản Phẩm'>
                            <input id="product-id-edit" type="hidden">
                            <p id="error_productName-edit" class="col-md-9 text-danger error_input--admin"></p>
                        </div>

                        <div class="col-md-12 itemadd " style="display: flex;">
                            <label class="col-md-2 labelitem" for="product-description">Mô tả</label>
                            <textarea class="col-md-9 inputitem" name="product-description" id='product-description-edit' rows="10" cols="50"></textarea>
                        </div>
                        <p id="error_productDescription-edit" class="col-md-9 text-danger error_input--admin" style="padding-left: 176px;"></p>
                        <div class="col-md-12 itemadd">
                            <input type="file" id="upload-edit" name="upload" accept="image/*" multiple>
                        </div>
                        <div class="col-md-12 itemadd " style="display: flex;">
                            <label class="col-md-2 labelitem" for="" style="width: 164px;">Phân Nhóm</label>
                            <div class='product-types__group-edit'>
                                <div class="type-group--input">
                                    <input class=" inputitem" id="product-type-name-edit" type="text" name="product-type-edit[]" placeholder='Nhập tên Phân Nhóm'>
                                    <input class=" inputitem" id="product-type-quantity-edit" type="text" name="product-type-quantity-edit[]" placeholder='Nhập Số Lượng'>
                                    <input class="inputitem" id="product-type-price-edit" type="text" name="product-type-price-edit[]" placeholder='Nhập Giá'>
                                    <button type="button" class='inputitem-icon btn btn__add-type--edit' name="btn-addInput-suaSP" style="display: inline-block;">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <p id="error-productType-edit" class="col-md-9 text-danger error_input--admin"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Danh Mục Sản Phẩm</label>
                            <select name="category" class="col-md-9 inputitem add-product__category-edit" id="select-edit-category">
                                @foreach($category as $cate)
                                <option id="{{$cate->categoryId}}" value="{{$cate->categoryId}}">{{$cate->categoryName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-success btn__submit-AddProduct btn-product__submit--edit" style="width:100px;">
                            <span class="spinner-border spinner-border-sm spinner-loading" role="status" aria-hidden="true"></span>
                            Sửa
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script type=" text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>