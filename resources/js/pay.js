$(document).ready(function() {
    $("#coplete_change").on("click", function(e) {
        $("#username").text($("#username_change").val());
        $("#phonenumber").text($("#phonenumber_change").val());
        $("#address").text($("#address_change").val());
        // alert($("#username_change").val());
    });

    //test
    const btnOrder = document.querySelector("#btntoorder");

    btnOrder?.addEventListener("click", async () => {
        document.getElementById("validator-pay").innerHTML = "";
        let OrderData = {
            userName: document.getElementById("username").innerHTML,
            phoneNumber: document.getElementById("phonenumber").innerHTML,
            addRess: document.getElementById("address").innerHTML
        };
        try {
            const response = await axios.post("/pay/paytoorder", OrderData);
            //chuyển trang
            window.location.href = "user/purchase";
            // console.log(response);
        } catch (e) {
            let messageObj = e?.response?.data?.errors;
            console.log(messageObj);
            document.getElementById("validator-pay").innerHTML = Object.values(
                messageObj
            )[0];
            // console.log(2);
        }
    });
});
