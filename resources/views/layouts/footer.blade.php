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
                        <ul class="header__narbar-list">
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
                        <ul class="header__navbar-list">
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
                </div>
            </div>
        </div>
    </header>
</body>

</html>

.header{
height: var(--header-height);
background-color: var(--primary-color);
}

.grid{
width: 1200px;
max-width: 100%;
margin: 0 auto;
}

.header__navbar{
display: flex;
justify-content: space-between;
}

.header__narbar-list{
list-style: none;
padding-left: 0;
margin-top: 4px;
margin-bottom: 8px;
}

.header__navbar-item{
margin: 0 8px;
position: relative;
min-height: 26px;
}

.header__navbar-item,
.header__navbar-item-link{
display: inline-block;
font-size: 15px;
color: var(--secondary-color);
text-decoration: none;
font-weight: 300;
}

.header__navbar-item,
.header__navbar-item-link,
.header__navbar-icon-link{
display: inline-flex;
align-items: center;
}

.header__navbar-item--strong{
font-weight: 400;
}

.header__navbar-item-separate{
border-right: 2px solid hsla(0,0%,100%,.22);
padding: 0 .4375rem;
font-size: .8125rem;
display: inline-block;
height: fit-content;
min-height: auto !important;
}

.header__navbar--icon-link{
color: white;
text-decoration: none;
height: 13px;
}

.header__navbar-icon{
font-size: 1.8rem;
margin: 0 4px;
}