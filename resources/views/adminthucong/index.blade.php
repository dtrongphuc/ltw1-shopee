<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Quản Lý Sản Phẩm</title>
</head>

<body>
    <div class="box-content showLeft" id="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="./admin">ADMIN</a>
            </div>
            <ul class="list-item">
               
                <li class="item active">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./admin">Quản Lý Danh Mục / Sản Phẩm</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./chartstatistical">Quản lý thống kê</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="/userManagement">Quản lý người dùng</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./orderManagement">Quản lý Đơn Hàng</a>
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
                        Thành Phú
                        <img style="margin-left: 10px;" class="avatar" src="../images/av.png" />
                    </a>

                    <div class="dropdown-menu " style="top: 8px !important;" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="card-body-DM">
                    <div class='category'>
                        <div><h5>Quản Lý Danh Mục</h5></div>
                        <div style='display: flex;'>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#themDM">Thêm Danh Mục</button>
                        </div>
                    </div>

                    <div class="table-responsive">
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
                                    <td style='text-align: center; width: 50px;'>{{$i+1}}</td>
                                    <td style='text-align: center; width: 125px;'>{{$category[$i]->categoryId}}</td>
                                    <td style='width: 300px;'>{{$category[$i]->categoryName}}</td>
                                    <td></td>
                                    <td style='text-align: center; center; width: 80px;'><i class="fas fa-trash-alt"></i></td>
                                    <td style='text-align: center; center; width: 80px;'>
                                    <button type="button"  data-toggle="modal" data-target="#suaDM"><i class="fas fa-edit"></i></button>
                                    </td>    
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Quản lÝ Sản Phẩm -->
                <div class="card-body-SP">
                    <div class='category'>
                        <div><h5>Quản Lý Sản Phẩm</h5></div>
                        <div>
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#themSP">Thêm Sản Phẩm</button>
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
                                    <th>Số Lượng</th>
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
                                    <td>{{$i+1}}</td>
                                    <td>{{$sanpham[$i]->productId}}</td>
                                    <td>{{$sanpham[$i]->productName}}</td>
                                    <td>{{$sanpham[$i]->categoryName}}</td>
                                    <td>{{$sanpham[$i]->price}}</td>
                                    <td>{{$sanpham[$i]->quantity}}</td>
                                    <td>{{$sanpham[$i]->likeCount}}</td>
                                    <td>{{$sanpham[$i]->rate}}</td>
                                    <td>{{$sanpham[$i]->sold}}</td>
                                    <td>{{$sanpham[$i]->postAt}}</td>
                                    <td><i class="fas fa-trash-alt"></i></td>
                                    <td>
                                    <button type="button"  data-toggle="modal" data-target="#suaSP"><i class="fas fa-edit"></i></button>
                                    </td>    
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                    <nav aria-label="Page navigation example" class="pag">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
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

                <div class="modal-body row">
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Tên Sản Phẩm</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập tên Sản Phẩm'>
                    </div>
                    
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Giá</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập Giá Sản Phẩm'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Số Lượng</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập Số Lượng Sản Phẩm'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Mô tả</label>
                        <textarea class="col-md-9 inputitem" id="w3review" name="w3review" rows="4" cols="50">asdas</textarea>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Danh Mục Sản Phẩm</label>
                        <select name="cars" id="cars" class="col-md-9 inputitem">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" style="width:100px;" data-dismiss="modal" onclick="checkForm()">Sửa</button>
                </div>
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

                <div class="modal-body row">
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Tên Sản Phẩm</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập tên Sản Phẩm'>
                    </div>
                    
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Giá</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập Giá Sản Phẩm'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Số Lượng</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập Số Lượng Sản Phẩm'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Mô tả</label>
                        <textarea class="col-md-9 inputitem" id="w3review" name="w3review" rows="4" cols="50">asdas</textarea>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Danh Mục Sản Phẩm</label>
                        <select name="cars" id="cars" class="col-md-9 inputitem">
                        @foreach($category as $cate)
                            <option value={{$cate->categoryId}}>{{$cate->categoryName}}</option>
                        @endforeach
                        </select>
                    </div>  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" style="width:100px;" data-dismiss="modal" onclick="checkForm()">Thêm</button>
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

                <div class="modal-body row">
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Tên Danh Mục</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập tên Danh Mục'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Mô tả</label>
                        <textarea class="col-md-9 inputitem" id="w3review" name="w3review" rows="4" cols="50">asdas</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" style="width:100px;" data-dismiss="modal" onclick="checkForm()">Thêm</button>
                </div>
            </div>

        </div>
    </div>


    <!-- Modal Sửa Danh Mục -->
    <div id="suaDM" class="modal fade" role="dialog">
        <div class="modal-dialog" style="max-width: 1000px !important;">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Sửa Danh Mục</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body row">
                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Tên Danh Mục</label>
                        <input class="col-md-9 inputitem" type="text" placeholder='Nhập tên Danh Mục'>
                    </div>

                    <div class="col-md-12 itemadd">
                        <label class="col-md-2 labelitem" for="">Mô tả</label>
                        <textarea class="col-md-9 inputitem" id="w3review" name="w3review" rows="4" cols="50">asdas</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-success" style="width:100px;" data-dismiss="modal" onclick="checkForm()">Sửa</button>
                </div>
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#btnReposiveLeft").click(function() {
                if ($("#box-content").hasClass("showLeft")) {
                    $("#box-content").removeClass("showLeft");
                } else {
                    $("#box-content").addClass("showLeft");
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>