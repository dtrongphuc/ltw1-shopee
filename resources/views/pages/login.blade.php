<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')

<body>
    <div class="login__header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col d-flex justify-content-between align-items-center">
                    <div class="auth__titlelogo d-flex align-items-center">
                        <a href="">
                            <img src="images/logo/shopee-color.png" alt="" class="auth-img"> 
                        </a>
                        <h4 class="login__header-title">Đăng Nhập</h4>
                    </div>
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
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" class="form-control login__body-form--header-input" id="formGroupExampleInput" placeholder="Email/Số điện thoại/Tên đăng nhập" require>
                            <div class="invalid-feedback">
                                *Email/Số điện thoại/Tên đăng nhập không chính xác!
                            </div>
                        </div>

                        <div class="form-group  ">
                            <div class="login__body-form--password d-flex align-items-center">
                                <input type="password" class="form-control login__body-form--header-input input-password" id="inputpass" placeholder="Mật khẩu" require>
                                <div class="login__body-form--header-input-icon" onclick="hidepass()">
                                    <!-- khi hiện pass thì ẩn class 'fa-eye-slash' hiện class 'fa-eye'  -->
                                    <i class="far fa-eye-slash" id="icon-eye"></i>
                                </div>
                            </div>
                            <div class="input-error" style="display: none;">
                                *Mật khẩu sai!
                            </div>
                        </div>

                        <!-- khi điền đủ thong tin bỏ class notlogin -->
                        <button type="submit" class="btn-register-login notlogin">ĐĂNG NHẬP</button>
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
                            <button class="login__body-form--btnapp-fbook btn d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook iconfacebook"></i>
                                <div class="login__body-form--btnappname">Facebook</div>
                            </button>
                            <button class="login__body-form--btnapp-google btn d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook iconfacebook"></i>
                                <div class="login__body-form--btnappname">Google</div>
                            </button>
                            <button class="login__body-form--btnapp-apple btn d-flex flex-row justify-content-center align-items-center">
                                <i class="fab fa-facebook iconfacebook"></i>
                                <div class="login__body-form--btnappname">Apple</div>
                            </button>
                        </div>
                        <div class="login__body-form--register d-flex flex-row justify-content-center">
                            <p class="login__body-form--register-content">Bạn mới biết đến Shopee?</p>
                            <a href="http://127.0.0.1:8000/register" class="login__body-form--register-link">Đăng ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/footer')
    <script>
        function hidepass() {
            var x = document.getElementById("inputpass");
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
</body>

</html>