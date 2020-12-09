<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>hearder chạy thử</title>
</head>

<body>
    <header>
        <div>
            <div class="header">
                <div class="grid">
                    <nav class="header__navbar">
                        <ul class="header_narbar-list ">
                            <li class="header__navbar-item header__navbar-item-separate">Kênh Người Bán</li>
                            <li class="header__navbar-item header__navbar-item-separate">Tải ứng Dụng</li>
                            <li class="header__navbar-item ">
                                Kết Nối
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-facebook"></i>
                                </a>
                                <a href="" class="header__navbar-icon-link">
                                    <i class="header__navbar-icon fab fa-instagram-square"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="header_narbar-list ">
                            <li class="header__navbar-item">
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
                            </li>
                            <li class="header__navbar-item header__navbar-item--strong header__navbar-item-separate">Đăng Ký</li>
                            <li class="header__navbar-item header__navbar-item--strong">Đăng Nhập</li>
                        </ul>
                    </nav>
                    <div class="center-header">
                        <img src="logoshoppe.png" alt="logo shoppe" width="230px" height="50px">
                        <div class="search">
                            <input class="input-search" type="text" placeholder="Tìm sản Phẩm, Thương Hiệu, và tên shoppe">
                            <span class="button-search"><i class="fas fa-search search-icon"></i></span>
                        </div>
                        <div class="cart-button"><i class="fas fa-shopping-cart"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

</html>