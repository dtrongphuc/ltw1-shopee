@extends('../layouts/master', ['title' => 'Thông tin cá nhân'])
@section('body')
@parent
<div class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="main-info__left">
                    <div class="info__left-header d-flex align-items-center">
                        <div class="info__left-header--img">
                            <img src="images/products/hoodie_cart.jpg" alt="" class="info__left-imguser">
                        </div>
                        <div class="info__left-header--updatename">
                            <p class="info__left-header--name">Nguyễn Hiếu Nghĩa</p>
                            <div class="info__left-header--updtae d-flex align-items-center">
                                <i class="fas fa-pencil-alt"></i>
                                <p class="info__left-header--content">Sửa hồ sơ</p>
                            </div>
                        </div>
                    </div>
                    <div class="info__left-category">
                        <div class="info__categor-update d-flex align-items-center">
                            <i class="fas fa-user-circle icon-user"></i>
                            <p class="info__categor-update--content">Tài khoản của tôi</p>
                        </div>
                        <div class="info__categor-favorite d-flex align-items-center">
                            <i class="fab fa-gratipay icon-favorite"></i>
                            <p class="info__categor-favorite--content">Sản phẩm yêu thích</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9">
                <div class="main__right">
                    <div class="main__right-header">
                        <h4 class="main__right-header--contentlarge">Hồ Sơ Của Tôi</h4>
                        <p class="main__right-header--contentsmall">Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
                    </div>
                    <div class="main__right-body row">
                        <div class="right__info col-8">
                            <form>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label ">Tên đăng nhập/Email</label>
                                    <input type="email" class="col-sm-8 form-control" id="inputEmail3" placeholder="Email">

                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tên người dùng</label>
                                    <input type="email" class="col-sm-8 form-control" id="inputEmail3" placeholder="Tên người dùng">
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-4 col-form-label">Password</label>
                                    <input type="password" class="col-sm-6 form-control" id="inputPassword3" placeholder="Password">
                                    <button type="button" class="col-sm-2 info__btn-changepass" data-toggle="modal" data-target="#exampleModal">
                                        <u>Thay đổi</u>
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Đổi mật khẩu</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="" class="register__body-form">
                                                        <div class="form-group">
                                                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mật khẩu cũ" require>
                                                            <div class="invalid-feedback">
                                                                *Mật khẩu phải 8 kí tự trở lên
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mật khẩu mới" require>
                                                            <div class="invalid-feedback">
                                                                *Mật khẩu phải 8 kí tự trở lên
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="nhập lại mật khẩu" require>
                                                            <div class="invalid-feedback">
                                                                *nhập lại mật khẩu không khớp
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Giới tính</label>
                                    <div class="col-sm-8 form-radio d-flex align-items-center">
                                        <div class="custom-control custom-radio d-flex align-items-center">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio1">Nam</label>
                                        </div>
                                        <div class="custom-control custom-radio d-flex align-items-center" style="margin-left: 20px;">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadio2">Nữ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group d-flex align-items-center justify-content-center">
                                    <button type="submit" class="btn btn-primary btn-changeinfo">Lưu thay đổi</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <div class="info__right-uploadimg">
                                <img src="images/products/hoodie_cart.jpg" alt="" class="info__right-uploadimgimg" width="100px" height="100px">
                                <input type="file" class="info__right-uploadimg--btnupload"></input>
                                <p class="info__right-uploadimg--note">Dụng lượng file tối đa 1 MB</p>
                                <p class="info__right-uploadimg--note">Định dạng:.JPEG, .PNG</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../layouts/footer')
@stop