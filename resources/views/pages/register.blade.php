<!DOCTYPE html>
<html lang="vn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>Đăng ký</title>
</head>
<body>
    <div class="login__header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                    <div class="auth__titlelogo d-flex align-items-center">
                        <a href="./">
                            <img src="images/logo/shopee-color.png" alt="" class="auth-img">
                        </a>
                        <h4 class="login__header-title">Đăng Ký</h4>
                    </div>
                    <a href="#" class="login__header-support">Cần trợ giúp?</a>
                </div>
            </div>
        </div>
    </div>
    <div class="login__body">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-10">
                    <img src="https://cf.shopee.vn/file/e963a4f6d9136744cf6a888b28c31706" alt="" class="login__body-img img-fluid" alt="Responsive image">
                    <form id="register-form" method="post" action="{{url('register')}}" class="register__body-form">
                        @csrf
                        <h4 class="login__body-form--header">Đăng Ký</h4>
                        <div class="mb-2">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" name="username" id="username" class="form-control login__body-form--header-input" placeholder="Tên đăng nhập" require>
                            <div class="invalid-feedback">
                                *tên đăng nhập ko đúng quy định
                            </div>
                        </div>
                        <div class="mb-2">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" name="email" id="email" class="form-control login__body-form--header-input" placeholder="Email" require>
                            <div class="invalid-feedback">
                                *Email không hợp lệ!
                            </div>
                        </div>
                        <div class="mb-2">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" name="password" id="password" class="form-control login__body-form--header-input" placeholder="Mât khẩu" require>
                            <div class="invalid-feedback">
                                *Mât khẩu phải 8 kí tự trở lên
                            </div>
                        </div>
                        <div class="mb-2">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" name="r_password" id="r_password" class="form-control login__body-form--header-input" placeholder="Nhập lại mật khẩu" require>
                            <div class="invalid-feedback">
                                *Mật khẩu không trùng khớp
                            </div>
                        </div>
                        <!-- khi điền đủ thong tin bỏ class notlogin -->
                        <button type="submit" class="btn-register-login notlogin">ĐĂNG KÝ</button>
                        <div class="login__body-form--dash d-flex justify-content-between align-items-center">
                            <div class="login__body-form--dash-lf"></div>
                            <span class="login__body-form--dash-content">HOẶC</span>
                            <div class="login__body-form--dash-lf"></div>
                        </div>
                        <div class="body-form--rules">
                            <div class="body-form--rules-content">
                                <p>Bằng việc đăng kí, bạn đã đồng ý với Shopee về Điều khoản dịch vụ & Chính sách bảo mật</p>
                            </div>
                        </div>
                        <div class="login__body-form--register d-flex flex-row justify-content-center">
                            <p class="login__body-form--register-content">Bạn mới biết đến Shopee?</p>
                            <a href="./login" class="login__body-form--register-link">Đăng nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ URL::asset('js/app.css') }}"></script>
</body>

</html>