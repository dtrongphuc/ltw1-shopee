<!DOCTYPE html>
<html lang="vn">
@extends('../layouts/master')

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
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-10">
                    <img src="https://cf.shopee.vn/file/e963a4f6d9136744cf6a888b28c31706" alt="" class="login__body-img img-fluid" alt="Responsive image">
                    <form action="" class="register__body-form">
                        <h4 class="login__body-form--header">Đăng Ký</h4>
                        <div class="form-group">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" class="form-control login__body-form--header-input" placeholder="Tên người dùng" require>
                            <div class="invalid-feedback">
                                *tên đăng nhập ko đúng quy định
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" class="form-control login__body-form--header-input" placeholder="Email/Số điện thoại/Tên đăng nhập" require>
                            <div class="invalid-feedback">
                                *Email/Số điện thoại/Tên đăng nhập không chính xác!
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" class="form-control login__body-form--header-input" placeholder="Mât khẩu ko phải 8 kí tự trở lên" require>
                            <div class="invalid-feedback">
                                *Mật khẩu phải 8 kí tự trở lên
                            </div>
                        </div>
                        <div class="form-group">
                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                            <input type="text" class="form-control login__body-form--header-input" placeholder="Mât khẩu ko phải 8 kí tự trở lên" require>
                            <div class="invalid-feedback">
                                *Nhập lại mật khẩu ko trùng khớp
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
                            <a href="http://127.0.0.1:8000/login" class="login__body-form--register-link">Đăng nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @include('../layouts/footer')
</body>

</html>