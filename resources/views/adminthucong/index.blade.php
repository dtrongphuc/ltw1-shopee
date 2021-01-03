<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
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
                        <div>
                            <h5>Quản Lý Danh Mục</h5>
                        </div>
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
                                        <td style='width: 300px;'>{{$category[$i]->description}}</td>
                                        <td style='text-align: center; width: 80px;'><a href="{{'/delete-category/'.$category[$i]->categoryId}}"><i class="fas fa-trash-alt"></i></a></td>
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
                                                                    <textarea class="col-md-9 inputitem" id="w3review" name="motaDM" cols="50">{{$category[$i]->description}}</textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                                                                <button type="submit" class="btn btn-success" style="width:100px;">Sửa</button>
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
                    </div>
                </div>

                <!-- Quản lÝ Sản Phẩm -->
                <div class="card-body-SP" id="productadmin">
                    <div class='category'>
                        <div>
                            <h5>Quản Lý Sản Phẩm</h5>
                        </div>
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
                                        <td>{{$i+1}}</td>
                                        <td>{{$sanpham[$i]->productId}}</td>
                                        <td style="width: 300px;">{{$sanpham[$i]->productName}}</td>
                                        <td>{{$sanpham[$i]->categoryName}}</td>
                                        <td>{{$sanpham[$i]->price}}</td>
                                        <td>{{$sanpham[$i]->quantity}}</td>
                                        <td>{{$sanpham[$i]->likeCount}}</td>
                                        <td>{{$sanpham[$i]->rate}}</td>
                                        <td>{{$sanpham[$i]->sold}}</td>
                                        <td>{{$sanpham[$i]->postAt}}</td>
                                        <td><a href="{{'/delete-product/'.$sanpham[$i]->productId}}"><i class="fas fa-trash-alt"></i></a></td>
                                        <td>
                                            <button type="button" data-toggle="modal" data-target="#suaSP" onclick="editsp(<?php echo $sanpham[$i]->productId ?>);"><i class="fas fa-edit"></i></button>
                                            <!-- Modal sua san pham -->
                                            <div id="suaSP" class="modal fade" role="dialog">
                                                <div class="modal-dialog" style="max-width: 1000px !important;">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Sửa Thông Tin Sản Phẩm</h4><button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <form name="editSPForm">
                                                            <div class="modal-body row">
                                                                <div class="col-md-12 itemadd">
                                                                    <label class="col-md-2 labelitem" for="">Tên Sản Phẩm</label>
                                                                    <input class="col-md-9 inputitem" type="text" placeholder='Nhập tên Sản Phẩm' value="{{$sanpham[$i]->productName}}">
                                                                </div>

                                                                <div class="col-md-12 itemadd" style="display: flex;">
                                                                    <label class="col-md-2 labelitem" for="">Mô tả</label>
                                                                    <textarea class="col-md-9 inputitem" id="w3review" name="w3review" rows="10" cols="50">{{$sanpham[$i]->description}}</textarea>
                                                                </div>
                                                                <div class="col-md-12 itemadd" id="themPhanNhom">
                                                                    <label class="col-md-2 labelitem" for="">Phân Nhóm</label>
                                                                    <div class='col-md-8' id="content-phanNhom">
                                                                        <input class="col-md-3 inputitem" type="text" name="tenNhom0" placeholder='Nhập tên Phân Nhóm'>
                                                                        <input class="col-md-3 inputitem" type="text" name="SLNhom0" placeholder='Nhập Số Lượng'>
                                                                        <input class="col-md-2 inputitem" type="text" name="GiaNhom0" placeholder='Nhập Giá'>
                                                                        <button type="button" class='inputitem-icon btn ' id="btnAddInput" onclick="addinput()" style="display: inline-block;"><i class="fas fa-plus"></i></button>
                                                                    </div>
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
                                                                <button type="submit" class="btn btn-success" style="width:100px;">Sửa</button>
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
                <form name="formInfoAdd">
                    <div class="modal-body row">
                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Tên Sản Phẩm</label>
                            <input class="col-md-9 inputitem" name="tenSP" type="text" placeholder='Nhập tên Sản Phẩm'>
                        </div>

                        <div class="col-md-12 itemadd " style="display: flex;">
                            <label class="col-md-2 labelitem" for="">Mô tả</label>
                            <textarea class="col-md-9 inputitem" name="motaSP" rows="10" cols="50"></textarea>
                        </div>
                        <div class="col-md-12 itemadd" id="themPhanNhom">
                            <label class="col-md-2 labelitem" for="">Phân Nhóm</label>
                            <div class='col-md-8' id="content-phanNhom">
                                <input class="col-md-3 inputitem" type="text" name="tenNhom0" placeholder='Nhập tên Phân Nhóm'>
                                <input class="col-md-3 inputitem" type="text" name="SLNhom0" placeholder='Nhập Số Lượng'>
                                <input class="col-md-2 inputitem" type="text" name="GiaNhom0" placeholder='Nhập Giá'>
                                <button type="button" class='inputitem-icon btn ' id="btnAddInput" onclick="addinput()" style="display: inline-block;"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>

                        <div class="col-md-12 itemadd">
                            <label class="col-md-2 labelitem" for="">Danh Mục Sản Phẩm</label>
                            <select name="category" id="cars" class="col-md-9 inputitem">
                                @foreach($category as $cate)
                                <option value={{$cate->categoryId}}>{{$cate->categoryName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" style="width:100px;" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-success" style="width:100px;" onclick="submitThemSP();">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        // document.getElementById("btnAddInput").addEventListener("click", function() {
        //     var ip = document.createElement("INPUT");
        //     ip.setAttribute("type", "text");
        //     document.body.appendChild(ip);
        //     alert("asd");
        // });
        var i = 0;


        function addinput() {
            i++;
            var inputName = document.createElement("INPUT");
            var inputQuantity = document.createElement("INPUT");
            var inputPrice = document.createElement("INPUT");
            var bntRemove = document.createElement("BUTTON");
            var icon = document.createElement("I");

            //set id cho buntton
            bntRemove.setAttribute("id", "btnremove");
            bntRemove.setAttribute("type", "button");

            //set type
            inputName.setAttribute("type", "text");
            inputQuantity.setAttribute("type", "text");
            inputPrice.setAttribute("type", "text");

            //Name
            inputName.setAttribute("Name", "tenNhom" + i);
            inputQuantity.setAttribute("Name", "SLNhom" + i);
            inputPrice.setAttribute("Name", "GiaNhom" + i);

            //style
            inputName.setAttribute("Class", "inputitem");
            inputQuantity.setAttribute("Class", "inputitem");
            inputPrice.setAttribute("Class", "inputitem");
            inputName.setAttribute("placeholder", "Nhập Tên Sản Phẩm");
            inputQuantity.setAttribute("placeholder", "Nhập Số Lượng");
            inputPrice.setAttribute("placeholder", "Nhập Giá");
            bntRemove.setAttribute("Class", "icon-remove-input", "btn");
            icon.setAttribute("Class", "fas fa-minus-circle");

            //x.setAttribute("value", "asd");
            document.getElementById("content-phanNhom").appendChild(inputName);
            document.getElementById("content-phanNhom").appendChild(inputQuantity);
            document.getElementById("content-phanNhom").appendChild(inputPrice);
            document.getElementById("content-phanNhom").appendChild(bntRemove);
            document.getElementById("btnremove").appendChild(icon);

        }


        function submitThemSP() {
            var arrayPhanNhom = [];
            var tensp = document.forms["formInfoAdd"]["tenSP"].value;
            var mota = document.forms["formInfoAdd"]["motaSP"].value;
            var cate = document.forms["formInfoAdd"]["category"].value;


            for (var z = 0; z <= i; z++) {
                arrayPhanNhom.push({
                    tennhom: document.forms["formInfoAdd"]["tenNhom" + z].value,
                    slnhom: document.forms["formInfoAdd"]["tenNhom" + z].value,
                    gianhom: document.forms["formInfoAdd"]["tenNhom" + z].value
                })
            }
            i = 0;
            var sanpham = {
                tensp: tensp,
                mota: mota,
                danhmuc: cate,
                mangNhom: arrayPhanNhom
            };
        }

        function editsp(id) {
            alert(id);

        }

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