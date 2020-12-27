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
                            <li class="header__navbar-item header__navbar-item--strong">
                                <a href="/login">hnihihi</a>
                            </li>
                            @endauth
                        </ul>
                    </nav>
                    <div class="center-header">
                        <a href="/" class="d-block">
                            <img src="{{ URL::asset('images/logo/logo.png') }}"
                                alt="logo shoppe" class="logo">
                        </a>
                        <div class="d-flex align-items-center justify-content-between flex-grow-1">
                            <div class="search-keyword">
                                <div class="search">
                                    <input class="input-search" type="text"
                                        placeholder="Tìm sản Phẩm, Thương Hiệu, và tên shoppe">
                                    <span class="button-search d-flex align-items-center justify-content-center"><i
                                            class="fas fa-search search-icon"></i></span>

                                </div>
                                <div class="bottom-header">
                                    <ul class="bottom-items">
                                        <li class="category-item--header"><a href="#" class="category-item--a">vòng cổ
                                                chữ A</a>
                                        </li>
                                        <li class="category-item--header"><a href="#" class="category-item--a">vòng cổ
                                                chữ A</a>
                                        </li>
                                        <li class="category-item--header"><a href="#" class="category-item--a">vòng cổ
                                                chữ A</a>
                                        </li>
                                        <li class="category-item--header"><a href="#" class="category-item--a">vòng cổ
                                                chữ A</a>
                                        </li>
                                        <li class="category-item--header"><a href="#" class="category-item--a">vòng cổ
                                                chữ A</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cart-button">
                                <span><i class="fas fa-shopping-cart"
                                        style="color: white; margin-top: 10px;"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
