<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="./myStyle.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Home</title>
</head>

<body>
    <div class="box-content">
        <div class="left">
            <div class="headerleft">
                <a class="text-light" href="#">ADMIN</a>
            </div>
            <ul class="list-item">
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="#">Quản lý sản phẩm</a>
                </li>
                <li class="item active">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="./">Quản lý thống kê</a>
                </li>
                <li class="item">
                    <i class="fas fa-fw fa-table"></i>
                    <a href="#">Quản lý người dùng</a>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="header-right">
                <div class="dropdown show dropdown-content">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Thành Phú
                        <img style="margin-left: 10px;" class="avatar" src="../images/av.png" />
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">Profile</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>
            </div>

            <div class="content-right">
                <div class="box-content-right">
                    <p class="title">Quản lý sản phẩm</p>
                </div>

            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>