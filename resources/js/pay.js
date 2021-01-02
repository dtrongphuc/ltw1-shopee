$(document).ready(function() {
    $("#coplete_change").on("click", function(e) {
        $("#username").text($("#username_change").val());
        $("#phonenumber").text($("#phonenumber_change").val());
        $("#address").text($("#address_change").val());
        // alert($("#username_change").val());
    });

    // $("#btntoorder").on("click", function(e) {
    //     let username = $("#username").text();
    //     let phonenumber = $("#phonenumber").text();
    //     let address = $("#address").text();
    //     $("#changehref").attr("href", "/pay/paytoorder/" + username + "/" + phonenumber + "/" + address);
    // });
});