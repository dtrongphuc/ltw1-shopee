<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('images/icons/favicon.png') }}" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Quản Lý Người Dùng</title>
</head>

<body>
    <div class="box-content showLeft" id="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="/admin">ADMIN</a>
            </div>
            <ul class="list-item">
                <li class="item ">
                    <i class="fab fa-product-hunt"></i>
                    <a href="/admin">Quản Lý Danh Mục / Sản Phẩm</a>
                </li>
                <li class="item">
                    <i class="fas fa-chart-pie"></i>
                    <a href="./chartstatistical">Quản lý thống kê</a>
                </li>
                <li class="item active">
                    <i class="fas fa-users-cog"></i>
                    <a href="./usermanagement">Quản lý người dùng</a>
                </li>
                <li class="item">
                    <i class="fas fa-file-invoice-dollar"></i>
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
                        <a class="dropdown-item" href="/">Trở về trang chủ</a>
                        <a class="dropdown-item" href="/logout">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="box-content-right">
                    <p class="title">Quản lý Người Dùng</p>
                </div>
                <div class="card-body" id="userAdmin">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã</th>
                                    <th>Email</th>
                                    <th>Tên</th>
                                    <th>Số Điện Thoại</th>
                                    <th>Giới Tính</th>
                                    <th>Ngày Sinh</th>
                                    <th>Địa Chỉ</th>
                                    <th>Ngày Xác Nhận Email</th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0 ; $i < $users->count(); $i++)
                                    <tr>
                                        <td>{{((Request::get('page') != null ? Request::get('page') : 1)-1)*10 + $i + 1}}</td>
                                        <td>{{$users[$i]->id}}</td>
                                        <td>{{$users[$i]->email}}</td>
                                        <td>{{$users[$i]->name}}</td>
                                        <td>{{$users[$i]->phoneNumber}}</td>
                                        @if($users[$i]->gender == "male")
                                        <td>Nam</td>
                                        @elseif ($users[$i]->gender == "female")
                                        <td>Nữ</td>
                                        @else
                                        <td>Giới Tính Khác</td>
                                        @endif
                                        <td>{{$users[$i]->birthday}}</td>
                                        <td>{{$users[$i]->address}}</td>
                                        <td>{{$users[$i]->email_verified_at}}</td>
                                        @if($users[$i]->role == 0)
                                        <td>Khách Hàng</td>
                                        @else
                                        <td>Quản Lý</td>
                                        @endif
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                    <div>
                        {{$users->links()}}
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