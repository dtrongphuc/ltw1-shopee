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
    <title>Quên mật khẩu</title>
</head>
<body>
    <div class="auth__header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                    <div class="auth__titlelogo d-flex align-items-center">
                        <a href="">
                            <img src="images/logo/shopee-color.png" alt="" class="auth-img"> 
                        </a>
                        <h4 class="auth__header-title">Quên mật khẩu</h4>
                    </div>
                    <a href="#" class="auth__header-support">Cần trợ giúp?</a>
                </div>

            </div>
        </div>
    </div>
    <div class="auth__body">
        <div class="container position-relative">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-10">
                    <img src="https://cf.shopee.vn/file/e963a4f6d9136744cf6a888b28c31706" alt="" class="auth__body-img img-fluid" alt="Responsive image">
                    <div class="auth-body__form">
                        <h4 class="auth__body-form--header">Đặt lại mật khẩu</h4>
                        <div class="alert alert-success auth-alert__success" role="alert">Đổi mật khẩu thành công</div>
                        <div class="alert alert-danger auth-alert__error" role="alert"></div>
                        <form id="reset-password-form" method="POST" action="{{route('password.update')}}" class="auth__body-form">
                            @csrf
                            <input type="hidden" value="{{ urldecode(request()->get('email')) }}" name="email">
                            <input type="hidden" value="{{ $token }}" name="token">
                            <div class="mb-2">
                                <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                <input type="password" name="password" id="password" class="form-control auth__body-form--header-input" placeholder="Mât khẩu" require>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="mb-2">
                                <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                <input type="password" name="r_password" id="r_password" class="form-control auth__body-form--header-input" placeholder="Nhập lại mật khẩu" require>
                                <div class="invalid-feedback"></div>
                            </div>
                            <!-- khi điền đủ thong tin bỏ class notlogin -->
                            <button type="submit" class="btn-auth__submit btn-register-login notlogin">
                                <span class="spinner-border spinner-border-sm spinner-loading" role="status" aria-hidden="true"></span>
                                GỬI
                            </button>
                            <div class="auth__body-form--register d-flex flex-row justify-content-center">
                                <p class="auth__body-form--register-content">Bạn mới biết đến Shopee?</p>
                                <a href="/register" class="auth__body-form--register-link">Đăng ký</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>