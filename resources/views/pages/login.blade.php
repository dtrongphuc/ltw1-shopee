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
    <title>Đăng nhập</title>
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
                        <h4 class="auth__header-title">Đăng Nhập</h4>
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
                        <h4 class="auth__body-form--header">Đăng Nhập</h4>
                        <div class="alert alert-danger auth-alert__error" role="alert"></div>
                        <form id="login-form" method="POST" action="{{route('auth.check')}}" class="auth__body-form">
                            <div class="mb-2">
                                <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                <input id="email" type="text" name="email" class="form-control auth__body-form--header-input" placeholder="Email" require>
                                <div class="invalid-feedback"> </div>
                            </div>
    
                            <div class="mb-2">
                                <div class="auth__body-form--password d-flex align-items-center">
                                    <input type="password" name="password" class="form-control auth__body-form--header-input input-password" id="password" placeholder="Mật khẩu" require>
                                    <div class="auth__body-form--header-input-icon" onclick="hidepass()">
                                        <!-- khi hiện pass thì ẩn class 'fa-eye-slash' hiện class 'fa-eye'  -->
                                        <i class="far fa-eye-slash" id="icon-eye"></i>
                                    </div>
                                </div>
                                <div class="input-error" style="display: none;"></div>
                            </div>
    
                            <!-- khi điền đủ thong tin bỏ class notlogin -->
                            <button type="submit" class="btn-register-login notlogin">ĐĂNG NHẬP</button>
                            <div class="auth__body-form--forgotpass justify-content-between d-flex">
                                <a href="forgot-password" class="form-forgotpass--link">Quên mật khẩu</a>
                            </div>
                            <div class="auth__body-form--dash d-flex justify-content-between align-items-center">
                                <div class="auth__body-form--dash-lf"></div>
                                <span class="auth__body-form--dash-content">HOẶC</span>
                                <div class="auth__body-form--dash-lf"></div>
                            </div>
                            <div class="auth__body-form--apps  d-flex justify-content-between align-items-center">
                                <button class="auth__body-form--btnapp-fbook btn d-flex flex-row justify-content-center align-items-center">
                                    <i class="fab fa-facebook iconfacebook"></i>
                                    <div class="auth__body-form--btnappname">Facebook</div>
                                </button>
                                <button class="auth__body-form--btnapp-google btn d-flex flex-row justify-content-center align-items-center">
                                    <i class="fab fa-facebook iconfacebook"></i>
                                    <div class="auth__body-form--btnappname">Google</div>
                                </button>
                                <button class="auth__body-form--btnapp-apple btn d-flex flex-row justify-content-center align-items-center">
                                    <i class="fab fa-facebook iconfacebook"></i>
                                    <div class="auth__body-form--btnappname">Apple</div>
                                </button>
                            </div>
                            <div class="auth__body-form--register d-flex flex-row justify-content-center">
                                <p class="auth__body-form--register-content">Bạn mới biết đến Shopee?</p>
                                <a href="http://127.0.0.1:8000/register" class="auth__body-form--register-link">Đăng ký</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function hidepass() {
            var x = document.getElementById("password");
            var icon = document.getElementById("icon-eye");
            if (x.type === "password") {
                x.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                x.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
    <script src="{{ URL::asset('js/app.js') }}"></script>
</body>

</html>