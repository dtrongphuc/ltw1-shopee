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