//tăng số lượng
$(document).ready(function() {
    $("[name=btnupdown]").on("click", function(event) {
        event.preventDefault();
        let id = $(this).attr("id");
        let productid = $(this).attr("data-id");
        // let productname = $(this).attr("data-productname"); //id.substring(3);
        // alert(productname);
        let quantity = $("#quantity_" + productid).val();
        //alert(quantity);
        if (parseInt(quantity) == 1 && id.substring(0, 2) == "dw") return;
        $.ajax({
            url: "api/cart/UpQuantity",
            type: "POST",
            data: {
                _token: $('[name="_token"]').val(),
                quantity: parseInt(quantity), // nếu id là up thì tăng 1 - id là down giảm 1
                productid: productid,
                updown: id.substring(0, 2)
            },
            success: function(response) {
                //trả ra giá đã tăng or đã giảm
                //alert(response);
                $("#quantity_" + productid).val(response);
                UpPriceFromQuantity(productid, response, id.substring(0, 2));
                //alert(quantity);
            }
        });
    });
});

function UpPriceFromQuantity(productid, quantity, statusid) {
    //lấy giá của 1 sp
    let price = $("#price_" + productid).text();
    //giá của 1 sp nhân số lượng
    let price_after = parseInt(price.replace(/,/g, "")) * quantity;
    $("#toltalprice_" + productid).text(
        new Intl.NumberFormat().format(price_after)
    );
    //lấy tổng tien2 tất cả sp đã chọn
    let pay = $("#payall").text();
    let price_all = pay.replace(/,/g, "");
    let payprice = 0;
    //nếu id dw là giảm thì trừ ra ngc lại cộng lên
    if (statusid == "dw")
        payprice = parseInt(price_all) - parseInt(price.replace(/,/g, ""));
    else payprice = parseInt(price_all) + parseInt(price.replace(/,/g, ""));
    $("#payall").text(new Intl.NumberFormat().format(payprice));
}
