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
                                <img src="{{ cloudinary()->getImage('avatars/' . $user->avatar) }}" alt=""
                                    class="info__left-imguser">
                            </div>
                            <div class="info__left-header--updatename">
                                <p class="info__left-header--name">{{ explode('@', \Auth::user()->email)[0] }}</p>
                                <div class="info__left-header--updtae d-flex align-items-center">
                                    <i class="fas fa-pencil-alt"></i>
                                    <p class="info__left-header--content">Sửa hồ sơ</p>
                                </div>
                            </div>
                        </div>
                        <div class="info__left-category">
                            <div class="info__categor-update d-flex align-items-center">
                                <i class="fas fa-user-circle icon-user"></i>
                                <a href="/user/account">
                                    <p class="info__categor-update--content">Tài khoản của tôi</p>
                                </a>
                            </div>
                            {{-- <div class="info__categor-update d-flex align-items-center">
                                <i class="fas fa-user-circle icon-user"></i>
                                <a href="/user/change-password">
                                    <p class="info__categor-update--content">Đổi mật khẩu</p>
                                </a>
                            </div> --}}
                            <div class="info__categor-favorite d-flex align-items-center">
                                <i class="fab fa-gratipay icon-favorite"></i>
                                <a href="/user/favorite">
                                    <p class="info__categor-favorite--content">Sản phẩm yêu thích</p>
                                </a>
                            </div>
                            <div class="info__categor-favorite d-flex align-items-center">
                                <i class="fas fa-shopping-basket icon-purchaseorder"></i>
                                <a href="/user/purchase">
                                    <p class="info__categor-favorite--content">Đơn mua</p>
                                </a>
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

                        <form autocomplete="off" action="{{ route('update.account') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="main__right-body row">
                                <div class="right__info col-8">
                                    @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                            {{ $errors->first() }}
                                        </div>
                                    @endif
                                    @if (session()->has('message'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session()->get('message') }}
                                        </div>
                                    @endif

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label ">Tên đăng nhập/Email</label>
                                        <input type="email" class="col-sm-8 form-control" name="email"
                                            value="{{ $user->email }}" placeholder="Email">

                                    </div>

                                    <div class="form-group row">
                                        <label for="name" class="col-sm-4 col-form-label">Tên người dùng</label>
                                        <input type="text" class="col-sm-8 form-control" name="name"
                                            value="{{ $user->name }}" placeholder="Tên người dùng">
                                    </div>

                                    <div class="form-group row">
                                        <label for="phoneNumber" class="col-sm-4 col-form-label">Số điện thoại</label>
                                        <input type="text" class="col-sm-8 form-control" name="phoneNumber"
                                            value="{{ $user->phoneNumber }}" placeholder="Số điện thoại">
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-4 col-form-label">Địa chỉ</label>
                                        <input type="text" class="col-sm-8 form-control" name="address"
                                            value="{{ $user->address }}" placeholder="Địa chỉ">
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-sm-4 col-form-label">Mật khẩu</label>
                                        <input type="password" class="col-sm-6 form-control" name="password"
                                            placeholder="Mật khẩu" autocomplete="new-password" value="*************">
                                        <button type="button" class="col-sm-2 info__btn-changepass" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <u>Thay đổi</u>
                                        </button>
                                        <!-- Modal -->

                                    </div>
                                    <div class="form-group row">
                                        <label for="gender" class="col-sm-4 col-form-label">Giới tính</label>
                                        <div class="col-sm-8 form-radio d-flex align-items-center">
                                            <div class="custom-control custom-radio d-flex align-items-center">
                                                <input id="male" type="radio" {{ $user->gender == 'male' ? 'checked' : '' }}
                                                    name="gender" class="custom-control-input" value="male">
                                                <label class="custom-control-label" for="male">Nam</label>
                                            </div>
                                            <div class="custom-control custom-radio d-flex align-items-center"
                                                style="margin-left: 20px;">
                                                <input type="radio" id="female"
                                                    {{ $user->gender == 'female' ? 'checked' : '' }} name="gender"
                                                    class="custom-control-input" value="female">
                                                <label class="custom-control-label" for="female">Nữ</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Ngày tháng năm sinh -->
                                    <div class="form-group row">
                                        <label for="birthday" class="col-sm-4 col-form-label">Ngày sinh</label>
                                        <input type="text"
                                            pattern="^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$"
                                            class="col-sm-8 form-control" name="birthday" placeholder="Ngày sinh"
                                            value="{{ isset($user->birthday) ? \Carbon\Carbon::createFromFormat('Y-m-d', $user->birthday)->format('d/m/Y') : '' }}">
                                    </div>
                                    <!-- End Ngày tháng năm sinh -->

                                    <div class="form-group d-flex align-items-center justify-content-center">
                                        <button type="submit" class="btn btn-primary btn-changeinfo">Lưu thay đổi</button>
                                    </div>


                                </div>
                                <div class="col-4">
                                    <div class="info__right-uploadimg">
                                        <div class="d-flex justify-content-center">
                                            <img id="img-info"
                                                src="{{ cloudinary()->getImage('avatars/' . $user->avatar) }}" alt=""
                                                class="info__right-uploadimgimg" width="100px" height="100px">
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <label for="apply" class="lable-upload">
                                                <input class="info__right-uploadimg--btnupload" type="file" name=""
                                                    id="apply" accept="image/*" onchange="readURL(this);">Get file
                                            </label>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="info__right-uploadimg--note">Dụng lượng file tối đa 1 MB</p>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <p class="info__right-uploadimg--note">Định dạng:.JPEG, .PNG</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <input type="text" class="form-control" placeholder="Mật khẩu cũ" require>
                                                <div class="invalid-feedback">
                                                    *Mật khẩu phải 8 kí tự trở lên
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                                <input type="text" class="form-control" placeholder="Mật khẩu mới" require>
                                                <div class="invalid-feedback">
                                                    *Mật khẩu phải 8 kí tự trở lên
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <!-- thêm  class 'is-invalid' để hiển thị thông báo khi nhập sai  -->
                                                <input type="text" class="form-control" placeholder="nhập lại mật khẩu"
                                                    require>
                                                <div class="invalid-feedback">
                                                    *nhập lại mật khẩu không khớp
                                                </div>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary btn-changeinfo">Lưu thay
                                            đổi</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
