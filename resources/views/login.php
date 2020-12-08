<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <title>Document</title>
</head>

<body>
    <div class="login__header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between">
                    <!-- <img src="" alt="" class="logo"> -->
                    <h4 class="login__header-title">Đăng ký</h4>
                    <a href="#" class="login__header-support">Cần trợ giúp?</a>
                </div>

            </div>
        </div>
    </div>
    <div class="login__body">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-10">
                    <img src="https://cf.shopee.vn/file/e963a4f6d9136744cf6a888b28c31706" alt="" class="login__body-img img-fluid" alt="Responsive image">
                    <form action="" class="login__body-form">
                        <h4 class="login__body-form--header">Đăng Nhập</h4>
                        <div class="form-group">
                            <input type="text" class="form-control login__body-form--header-input" id="formGroupExampleInput" placeholder="Email/Số điện thoại/Tên đăng nhập">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control login__body-form--header-input" id="formGroupExampleInput2" placeholder="Mật khẩu">
                        </div>
                        <!-- khi điền đủ thong tin bỏ class notlogin -->
                        <button class="btn-register-login notlogin">ĐĂNG NHẬP</button>
                        <div class="login__body-form--forgotpass justify-content-between d-flex">
                            <a href="#" class="form-forgotpass--link">Quên mật khẩu</a>
                            <a href="#" class="form-forgotpass--link">Đăng nhập với SMS</a>
                        </div>
                        <div class="login__body-form--dash d-flex justify-content-between align-items-center">
                            <div class="login__body-form--dash-lf"></div>
                            <span class="login__body-form--dash-content">HOẶC</span>
                            <div class="login__body-form--dash-lf"></div>
                        </div>
                        <div class="login__body-form--apps  d-flex justify-content-between align-items-center">
                            <button class="login__body-form--btnapp d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook"></i>
                                <div class="login__body-form--btnappname">Facebook</div>
                            </button>
                            <button class="login__body-form--btnapp  d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook"></i>
                                <div class="login__body-form--btnappname">Google</div>
                            </button>
                            <button class="login__body-form--btnapp  d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook"></i>
                                <div class="login__body-form--btnappname">Apple</div>
                            </button>
                        </div>
                        <div class="login__body-form--register d-flex flex-row justify-content-center">
                            <p class="login__body-form--register-content">Bạn mới biết đến Shopee?</p>
                            <a href="#" class="login__body-form--register-link">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>