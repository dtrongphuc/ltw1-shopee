<header>
    <div class="header">
        <div class="container">
            <div class="row">
                <nav class="header__navbar">
                    <ul class="header_narbar-list ">
                        <!-- <li class="header__navbar-item header__navbar-item-separate">Kênh Người Bán</li>
                            <li class="header__navbar-item header__navbar-item-separate">Tải ứng Dụng</li> -->
                        <li class="header__navbar-item header__navbar-item--strong" style="display:inline-block;">
                            Kết nối
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-facebook" style="color: white;"></i>
                            </a>
                            <a href="" class="header__navbar-icon-link">
                                <i class="header__navbar-icon fab fa-instagram-square" style="color: white;"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="header_narbar-list ">
                        <!-- <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon far fa-bell"></i>
                                    Thông Báo
                                </a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="" class="header__navbar-item-link">
                                    <i class="header__navbar-icon far fa-question-circle"></i>
                                    Trợ Giúp
                                </a>
                            </li> -->
                        @guest
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item-separate">
                                <a href="/register">Đăng ký</a>
                            </li>
                            <li class="header__navbar-item header__navbar-item--strong">
                                <a href="/login">Đăng nhập</a>
                            </li>
                        @endguest
                        @auth
                            @if(\Auth::user()->role == 1)
                                <li class="header__navbar-item header__navbar-item--strong header__navbar-item-separate header__navbar-item--relative">
                                    <a href="/admin">Quản lý</a>
                                </li>   
                            @endif
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item--user">
                                <div class="header__avatar">
                                    <img src="{{cloudinary()->getImage(\Auth::user()->avatar)}}" alt="">
                                </div>
                                <a href="/user/account">{{explode('@',\Auth::user()->email)[0]}}</a>
                                <div class="header__user-menu">
                                    <ul class="user-menu__list">
                                        <li class="user-menu__item">
                                            <a href="/user/account">Tài khoản của tôi</a>
                                        </li>
                                        <li class="user-menu__item">
                                            <a href="{{route('logout')}}">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </nav>
                <div class="center-header">
                    <a href="/" class="d-block">
                        <img src="{{ URL::asset('images/logo/logo.png') }}" alt="logo shoppe" class="logo">
                    </a>
                    <div class="d-flex align-items-center justify-content-between flex-grow-1">
                        <div class="search-keyword">
                            <form action="{{ route('search') }}" method="GET">
                                <div class="search">
                                    <input class="input-search" type="text" name="keyword" placeholder="Tìm sản phẩm">
                                    <button type="submit" class="button-search d-flex align-items-center justify-content-center">
                                        <i class="fas fa-search search-icon"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cart-button">
                        <a class="header-cart" href="/cart">
                            <i class="fas fa-shopping-cart" style="color: white; margin-top: 10px;"></i>
                            <div class="header-cart__count" style="display: {{isset($cartQuantity) && $cartQuantity > 0 ? "block" : "none"}};">{{isset($cartQuantity) ? $cartQuantity : 0}}</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>