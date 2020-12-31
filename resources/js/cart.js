//  //check tất cả trong giở hàng
//  document.getElementById("check-all").onclick = function() {
//          //lấy ds checkbox
//          var checkboxs = document.getElementsByName("check-one");
//          if (document.getElementById("check-all").checked == true)
//              for (var i = 0; i < checkboxs.length; i++) {
//                  checkboxs[i].checked = true;
//              }
//          else
//              for (var i = 0; i < checkboxs.length; i++) {
//                  checkboxs[i].checked = false;
//              }
//      }

//button tăng
// function UpQuantity(product) {
//     var productName = product.getAttribute("data-cart");
//     var quantity = document.getElementById("quantity_" + productName).value;
//     document.getElementById("quantity_" + productName).value = parseInt(quantity) + 1;
//     var price = document.getElementById("price_" + productName).innerHTML;
//     // toltalprice_
//     var totalprice = parseInt(price.substring(0, price.length - 4)) * (parseInt(quantity) + 1);
//     //giá tổng
//     var payall = document.getElementById("payall").innerHTML;
//     var temp = payall.substring(0, payall.length - 4);
//     var price_all = parseInt(temp.replace(/,/i, ''));
//     var payallprice = price_all + parseInt(price.substring(0, price.length - 4));
//     if (totalprice > 999) {
//         totalprice = totalprice.toString().substring(0, totalprice.toString().length - 3) + "," + totalprice
//             .toString().substring(1);
//     }
//     if (payallprice > 999) {
//         payallprice = payallprice.toString().substring(0, payallprice.toString().length - 3) + "," + payallprice
//             .toString().substring(1);
//     }
//     document.getElementById("payall").innerHTML = payallprice + ",000";
//     document.getElementById("toltalprice_" + productName).innerHTML = totalprice + ",000";
// }

// //giảm số lượng
// function DownQuantity(product) {
//     var productName = product.getAttribute("data-cart");
//     var quantity = document.getElementById("quantity_" + productName).value;
//     if (parseInt(quantity) > 1) {
//         document.getElementById("quantity_" + productName).value = parseInt(quantity) - 1;
//         var price = document.getElementById("price_" + productName).innerHTML;
//         // toltalprice_
//         var totalprice = parseInt(price.substring(0, price.length - 4)) * (parseInt(quantity) - 1);

//         var payall = document.getElementById("payall").innerHTML;
//         var temp = payall.substring(0, payall.length - 4);
//         var price_all = parseInt(temp.replace(/,/i, ''));
//         var payallprice = price_all - parseInt(price.substring(0, price.length - 4));
//         if (totalprice > 999) {
//             totalprice = totalprice.toString().substring(0, totalprice.toString().length - 3) + "," + totalprice
//                 .toString().substring(1);
//         }
//         if (payallprice > 999) {
//             payallprice = payallprice.toString().substring(0, payallprice.toString().length - 3) + "," +
//                 payallprice.toString().substring(1);
//         }
//         document.getElementById("payall").innerHTML = payallprice + ",000";
//         document.getElementById("toltalprice_" + productName).innerHTML = totalprice + ",000";
//     }


// }
$(document).ready(function() {
    $("button").on("click", function(event) {
        event.preventDefault();
        let id = $(this).attr("id");
        let productname = id.substring(3);
        let quantity = $("#quantity_" + productname).val();

        // var _token = $('input[name="_token"]').val();
        // $.ajax({
        //     url: "{{ route('cart.upquantify') }}",
        //     method: "POST",
        //     data: {
        //         quantity: quantity,
        //     },
        //     success: function(data) { //dữ liệu nhận về
        //         alert(data);
        //     }
        // });
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // });
        $.ajax({
            url: "api/cart/UpQuantity",
            type: "POST",
            data: {
                quantity: quantity
            },
            success: function(response) {
                alert(response);
            }
        });

    });
});

// function printdata(data) {
//     alert(data);
// }