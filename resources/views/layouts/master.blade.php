</head>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <title>{{ ucfirst($title ?? '') }}</title>
</head>

<body>
    @include('../layouts/header')
    @section('body')

    @show
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-info')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }



        //click trái tim yêu thích
        $(document).ready(function() {
            $("#change-heart").click(function() {
                if ($('#heart').css('display') == 'none') {
                    $("#heart").css("display", "block");
                    $("#heart-hollow").css("display", "none");
                } else {
                    $("#heart-hollow").css("display", "block");
                    $("#heart").css("display", "none");
                }
            });
        });

        // GHI Tạm

        //check tất cả trong giở hàng
        document.getElementById("check-all").onclick = function() {
            //lấy ds checkbox
            var checkboxs = document.getElementsByName("check-one");
            if (document.getElementById("check-all").checked == true)
                for (var i = 0; i < checkboxs.length; i++) {
                    checkboxs[i].checked = true;
                }
            else
                for (var i = 0; i < checkboxs.length; i++) {
                    checkboxs[i].checked = false;
                }
        }
        //button tăng
        function UpQuantity(product) {
            var productName = product.getAttribute("data-cart");
            var quantity = document.getElementById("quantity_" + productName).value;
            document.getElementById("quantity_" + productName).value = parseInt(quantity) + 1;
            var price = document.getElementById("price_" + productName).innerHTML;
            // toltalprice_
            var totalprice = parseInt(price.substring(0, price.length - 4)) * (parseInt(quantity) + 1);
            //giá tổng
            var payall = document.getElementById("payall").innerHTML;
            var temp = payall.substring(0, payall.length - 4);
            var price_all = parseInt(temp.replace(/,/i, ''));
            var payallprice = price_all + parseInt(price.substring(0, price.length - 4));
            if (totalprice > 999) {
                totalprice = totalprice.toString().substring(0, totalprice.toString().length - 3) + "," + totalprice
                    .toString().substring(1);
            }
            if (payallprice > 999) {
                payallprice = payallprice.toString().substring(0, payallprice.toString().length - 3) + "," + payallprice
                    .toString().substring(1);
            }
            document.getElementById("payall").innerHTML = payallprice + ",000";
            document.getElementById("toltalprice_" + productName).innerHTML = totalprice + ",000";
        }
        //giảm số lượng
        function DownQuantity(product) {
            var productName = product.getAttribute("data-cart");
            var quantity = document.getElementById("quantity_" + productName).value;
            if (parseInt(quantity) > 1) {
                document.getElementById("quantity_" + productName).value = parseInt(quantity) - 1;
                var price = document.getElementById("price_" + productName).innerHTML;
                // toltalprice_
                var totalprice = parseInt(price.substring(0, price.length - 4)) * (parseInt(quantity) - 1);

                var payall = document.getElementById("payall").innerHTML;
                var temp = payall.substring(0, payall.length - 4);
                var price_all = parseInt(temp.replace(/,/i, ''));
                var payallprice = price_all - parseInt(price.substring(0, price.length - 4));
                if (totalprice > 999) {
                    totalprice = totalprice.toString().substring(0, totalprice.toString().length - 3) + "," + totalprice
                        .toString().substring(1);
                }
                if (payallprice > 999) {
                    payallprice = payallprice.toString().substring(0, payallprice.toString().length - 3) + "," +
                        payallprice.toString().substring(1);
                }
                document.getElementById("payall").innerHTML = payallprice + ",000";
                document.getElementById("toltalprice_" + productName).innerHTML = totalprice + ",000";
            }
        }

    </script>
</body>

</html>
