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
    // nút tăng số lượng 
$(document).ready(function() {
    $("#up").click(function() {
        var str = (parseInt($("#quantity").val()) + 1).toString();
        var price = (parseInt($("#price").text()) * (parseInt($("#quantity").val()) + 1))
            .toString();
        $("#quantity").val(str);
        // console.log(price.length);
        if (price.length > 3) {
            $("#toltalprice").text(price.substring(0, price.length - 3) + ',' + price.substring(
                price.length - 3, price.length) + ',000');
        } else $("#toltalprice").text(price + ',000');
        $('.down-default').css('cursor', 'pointer');
    });
});

//giảm số lượng
$(document).ready(function() {
    $("#down").click(function() {
        var str = (parseInt($("#quantity").val()) - 1).toString();
        var price = (parseInt($("#price").text()) * (parseInt($("#quantity").val()) - 1))
            .toString();
        if (parseInt(str) <= 0)
            $('.down-default').css('cursor', 'not-allowed');
        else {
            $("#quantity").val(str);
            if (price.length > 3) {
                $("#toltalprice").text(price.substring(0, price.length - 3) + ',' + price
                    .substring(price.length - 3, price.length) + ',000');
            } else $("#toltalprice").text(price + ',000');
        }

    });
});