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
    <title>Đơn Hàng</title>
</head>

<body>
    <div class="box-content showLeft" id="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="/admin">ADMIN</a>
            </div>
            <ul class="list-item">
                <li class="item ">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="/admin">Quản Lý Danh Mục / Sản Phẩm</a>
                </li>
                <li class="item ">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./chartstatistical">Quản lý thống kê</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./usermanagement">Quản lý người dùng</a>
                </li>
                <li class="item active">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./ordermanagement">Quản lý Đơn Hàng</a>
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
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="box-content-right">
                    <p class="title">Đơn Hàng</p>
                </div>
                <div class="card-body" id="orderAdmin">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Địa Chỉ</th>
                                    <th>Tổng Tiền</th>
                                    <th>Ngày Đặt</th>
                                    <th>Dự Kiến Giao Hàng</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($orders as $od)
                                <tr>
                                    <td>{{$od ->id}}</td>
                                    <td>{{$od ->customerName}}</td>
                                    <td>{{$od ->phoneNumber}}</td>
                                    <td>{{$od ->address}}</td>
                                    <td>{{$od ->totalPrice}}</td>
                                    <td>{{$od ->createAt}}</td>
                                    <td>{{$od ->expectedAt}}</td>
                                    <td>
                                        <select name="statusOrder" class="SelectstatusOrder" data-order-id="{{$od->id}}">
                                            <option value="0" @if($od->status == 0) selected @endif>Chờ Xử Lý</option>
                                            <option value="1" @if($od->status == 1) selected @endif>Hủy</option>
                                            <option value="2" @if($od->status == 2) selected @endif>Đang Xử Lý</option>
                                            <option value="3" @if($od->status == 3) selected @endif>Đang Giao Hàng</option>
                                            <option value="4" @if($od->status == 4) selected @endif>Hoàn Thành</option>
                                        </select>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{$orders->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type=" text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>