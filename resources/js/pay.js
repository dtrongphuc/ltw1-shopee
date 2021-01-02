$(document).ready(function() {
    $("#coplete_change").on("click", function(e) {
        $("#username").text($("#username_change").val());
        $("#phonenumber").text($("#phonenumber_change").val());
        $("#address").text($("#address_change").val());
        // alert($("#username_change").val());
    });
});