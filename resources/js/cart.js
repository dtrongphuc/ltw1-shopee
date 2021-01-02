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

const {
    startCase,
    padStart
} = require("lodash");
const {
    compile
} = require("vue-template-compiler");

//tăng số lượng
$(document).ready(function() {
    $("[name=btnupdown]").on("click", function(event) {
        event.preventDefault();
        let id = $(this).attr("id");
        let productid = $(this).attr("data-id");
        let productname = $(this).attr("data-productname"); //id.substring(3);
        let quantity = $("#quantity_" + productname).val();
        if (parseInt(quantity) == 1 && id.substring(0, 2) == "dw")
            return;
        $.ajax({
            url: "api/cart/UpQuantity",
            type: "POST",
            data: {
                quantity: parseInt(quantity), // nếu id là up thì tăng 1 - id là down giảm 1
                productid: productid,
                updown: id.substring(0, 2),
            },
            success: function(response) { //trả ra giá đã tăng or đã giảm
                //alert(response);
                $("#quantity_" + productname).val(response);
                UpPriceFromQuantity(productname, response, id.substring(0, 2));

            }
        });
    });
});

function UpPriceFromQuantity(productname, quantity, statusid) {
    let price = $("#price_" + productname).text();
    let price_after = parseInt(price.substring(0, price.length - 3)) * quantity;
    $("#toltalprice_" + productname).text(StringToMoney(price_after.toString()) + ",000");
    let pay = $("#payall").text();
    var price_all = parseInt(pay.substring(0, pay.length - 4).replace(/,/i, ''));
    let payprice = 0;
    if (statusid == "dw")
        payprice = parseInt(price_all) - parseInt(price.substring(0, price.length - 3));
    else payprice = parseInt(price_all) + parseInt(price.substring(0, price.length - 3));
    $("#payall").text(StringToMoney(payprice.toString()) + ",000");
}

function StringToMoney(str) {
    if (str.length > 6)
        str = str.substring(0, str.length - 3) + "," + str.substring(0, str.length - 6) + "," + str.substring(1);
    if (str.length > 3)
        str = str.substring(0, str.length - 3) + "," + str.substring(1);
    return str;
}