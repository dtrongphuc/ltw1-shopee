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
                    <div class="main__right-body">
                        <form>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên đăng nhập/Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tên người dùng</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                </div>
                                <button type="button" data-toggle="modal" data-target="#exampleModal">
                                    Thay đổi
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('../layouts/footer')
@stop