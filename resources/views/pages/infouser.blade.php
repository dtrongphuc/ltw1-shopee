@extends('../layouts/master', ['title' => 'Thông tin cá nhân'])
@section('body')
@parent
<div class="main-info">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="main-info__left">
                    <div class="info__left-header">
                        <div class="info__left-header--img">
                            <img src="" alt="">
                        </div>
                        <div class="info__left-header--updatename">
                            <p class="info__left-header--name">Nguyễn Hiếu Nghĩa</p>
                            <p class="info__left-header--updtae">Hồ sơ chỉnh sửa</p>
                        </div>
                    </div>
                    <div class="info__left-category">
                        <div class="info__categor-update">
                            <i class="fas fa-user-circle"></i>
                            <p class="info__categor-update--content">Tài khoản của tôi</p>
                        </div>
                        <div class="info__categor-favorite">
                            <i class="fab fa-gratipay"></i>
                            <p class="info__categor-favorite--content">Sản phẩm yêu thích</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-10"></div>
        </div>
    </div>
</div>

@include('../layouts/footer')
@stop