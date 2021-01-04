$(document).ready(function() {
    var slNhomThemSP = 0;
    var slNhomSuaSP = 0;

    document.querySelectorAll('.btn__edit-product').forEach(btn => {
        btn.addEventListener('click', () => {
            editsp(btn.dataset.productId);  
        })
    });
    document.querySelectorAll('.btn__AddGroup-product').forEach(btn => {
        btn.addEventListener('click', () => {
            addinputthemsp();  
        })
    });
    document.querySelectorAll('.btn__AddGroup-Editproduct').forEach(btn => {
        btn.addEventListener('click', () => {
            themNhomSuaSP();  
        })
    });
    document.querySelectorAll('.btn__submit-AddProduct').forEach(btn => {
        btn.addEventListener('click', () => {
            submitThemSP();  
        })
    });
    document.querySelectorAll('.btn__submit-EditProduct').forEach(btn => {
        btn.addEventListener('submit', e => {
            e.preventDefault();
            submitSuaSP();  
        })
    });

    function addinputthemsp() {
        slNhomThemSP++;
        var divinput = document.createElement("div");
        var inputName = document.createElement("INPUT");
        var inputQuantity = document.createElement("INPUT");
        var inputPrice = document.createElement("INPUT");
        var bntRemove = document.createElement("BUTTON");
        var icon = document.createElement("i");

        //set id cho buntton
        divinput.setAttribute("id", "content-phanNhom-themsp" + slNhomThemSP);
        bntRemove.setAttribute("id", "btnremove-themsp" + slNhomThemSP);


        //set type
        inputName.setAttribute("type", "text");
        inputQuantity.setAttribute("type", "text");
        inputPrice.setAttribute("type", "text");
        bntRemove.setAttribute("type", "button");


        //Name
        inputName.setAttribute("Name", "tenNhom-themsp" + slNhomThemSP);
        inputQuantity.setAttribute("Name", "SLNhom-themsp" + slNhomThemSP);
        inputPrice.setAttribute("Name", "GiaNhom-themsp" + slNhomThemSP);

        //style
        inputName.setAttribute("Class", "inputitem");
        inputQuantity.setAttribute("Class", "inputitem");
        inputPrice.setAttribute("Class", "inputitem");
        inputName.setAttribute("placeholder", "Nhập Tên Sản Phẩm");
        inputQuantity.setAttribute("placeholder", "Nhập Số Lượng");
        inputPrice.setAttribute("placeholder", "Nhập Giá");
        bntRemove.setAttribute("Class", "icon-remove-input-themsp", "btn");
        icon.setAttribute("Class", "fas fa-minus-circle");

        //x.setAttribute("value", "asd");

        document.getElementById("themPhanNhom-themsp").appendChild(divinput);
        document.getElementById("content-phanNhom-themsp" + slNhomThemSP).appendChild(inputName);
        document.getElementById("content-phanNhom-themsp" + slNhomThemSP).appendChild(inputQuantity);
        document.getElementById("content-phanNhom-themsp" + slNhomThemSP).appendChild(inputPrice);
        document.getElementById("content-phanNhom-themsp" + slNhomThemSP).appendChild(bntRemove);
        document.getElementById("btnremove-themsp" + slNhomThemSP).appendChild(icon);
    }

    function themNhomSuaSP() {
        slNhomSuaSP++;
        var divinput = document.createElement("div");
        var inputName = document.createElement("INPUT");
        var inputQuantity = document.createElement("INPUT");
        var inputPrice = document.createElement("INPUT");
        var bntRemove = document.createElement("BUTTON");
        var icon = document.createElement("i");

        //set id cho buntton
        divinput.setAttribute("id", "content-phanNhom-suaSP" + slNhomSuaSP);
        bntRemove.setAttribute("id", "btnremove-suaSP" + slNhomSuaSP);


        //set type
        inputName.setAttribute("type", "text");
        inputQuantity.setAttribute("type", "text");
        inputPrice.setAttribute("type", "text");
        bntRemove.setAttribute("type", "button");


        //Name
        inputName.setAttribute("Name", "tenNhom-suaSP" + slNhomSuaSP);
        inputQuantity.setAttribute("Name", "SLNhom-suaSP" + slNhomSuaSP);
        inputPrice.setAttribute("Name", "GiaNhom-suaSP" + slNhomSuaSP);

        //style
        inputName.setAttribute("Class", "inputitem");
        inputQuantity.setAttribute("Class", "inputitem");
        inputPrice.setAttribute("Class", "inputitem");
        inputName.setAttribute("placeholder", "Nhập Tên Sản Phẩm");
        inputQuantity.setAttribute("placeholder", "Nhập Số Lượng");
        inputPrice.setAttribute("placeholder", "Nhập Giá");
        bntRemove.setAttribute("Class", "icon-remove-input-themsp", "btn");
        icon.setAttribute("Class", "fas fa-minus-circle");

        //x.setAttribute("value", "asd");

        document.getElementById("themPhanNhom-suaSP").appendChild(divinput);
        document.getElementById("content-phanNhom-suaSP" + slNhomSuaSP).appendChild(inputName);
        document.getElementById("content-phanNhom-suaSP" + slNhomSuaSP).appendChild(inputQuantity);
        document.getElementById("content-phanNhom-suaSP" + slNhomSuaSP).appendChild(inputPrice);
        document.getElementById("content-phanNhom-suaSP" + slNhomSuaSP).appendChild(bntRemove);
        document.getElementById("btnremove-suaSP" + slNhomSuaSP).appendChild(icon);
    }


    async function submitThemSP() {
        var arrayPhanNhom = [];
        var tensp = document.forms["formInfoAdd"]["tenSP"].value;
        var mota = document.forms["formInfoAdd"]["motaSP"].value;
        var cate = document.forms["formInfoAdd"]["category"].value;


        for (var z = 0; z <= slNhomThemSP; z++) {
            var check = document.forms["formInfoAdd"]["tenNhom-themsp" + z].value;
            if(check == "")
                continue;
            arrayPhanNhom.push({
                tennhom: document.forms["formInfoAdd"]["tenNhom-themsp" + z].value,
                slnhom: document.forms["formInfoAdd"]["SLNhom-themsp" + z].value,
                gianhom: document.forms["formInfoAdd"]["GiaNhom-themsp" + z].value
            })
        }
        slNhomThemSP = 0;
        var sanpham = {
            tensp: tensp,
            mota: mota,
            danhmuc: cate,
            mangNhom: arrayPhanNhom
        };
        await postProduct(sanpham);
    }

    async function postProduct(sanpham) {
        try {
            const response = await axios.post('/api/admin/new-product', {
                sanpham
            });
            if (response.status === 200) {
                console.log(response);
                window.location.reload();
            }
        } catch (e) {
            console.log('error', e.response);
        }
    }

    function editsp(id) {
        async function GetGroupProduct(id) {
            try {
                const response = await axios.post('/api/admin/get-Group-product', {
                    id
                });
                if (response.status === 200) {
                    let datasp = response.data;

                    for (var sldiv = 0; sldiv < datasp.length; sldiv++) {
                        var sldivdatontai = document.getElementById("themPhanNhom-suaSP").childElementCount - 1;
                        if (sldivdatontai < datasp.length) {
                            themNhomSuaSP();
                        }
                        var inputTen = document.getElementsByName("tenNhom-suaSP" + sldiv)[0];
                        inputTen.setAttribute("value", datasp[sldiv]['name']);
                        var inputsl = document.getElementsByName("SLNhom-suaSP" + sldiv)[0];
                        inputsl.setAttribute("value", datasp[sldiv]['quantity']);
                        var inputgia = document.getElementsByName("GiaNhom-suaSP" + sldiv)[0];
                        inputgia.setAttribute("value", parseFloat(datasp[sldiv]['price']));
                    }
                    for (var indexRemove = datasp.length; indexRemove < sldivdatontai; indexRemove++) {
                        var divRemove = document.getElementById("content-phanNhom-suaSP" + indexRemove);
                        divRemove.remove();
                    }
                }
            } catch (e) {
                console.log('error', e.response);
            }
        }
        GetGroupProduct(id);
    }

    async function submitSuaSP(e) {
        
        var arrayPhanNhom = [];
        var id = document.forms["editSPForm"]["idproductSua"].value;
        var tensp = document.forms["editSPForm"]["tensuaSP"].value;
        var mota = document.forms["editSPForm"]["motasuaSP"].value;
        var cate = document.forms["editSPForm"]["categorysuaSP"].value;

        var sldivdatontai = document.getElementById("themPhanNhom-suaSP").childElementCount - 1;
        for (var z = 0; z < sldivdatontai; z++) {
            var check = document.forms["editSPForm"]["tenNhom-suaSP" + z].value;
            if(check == "")
                continue;
            arrayPhanNhom.push({
                tennhom: document.forms["editSPForm"]["tenNhom-suaSP" + z].value,
                slnhom: document.forms["editSPForm"]["SLNhom-suaSP" + z].value,
                gianhom: document.forms["editSPForm"]["GiaNhom-suaSP" + z].value
            })
        }
        var slNhomSuaSP = 0;
        var sanphamSua = {
            id: id,
            tensp: tensp,
            mota: mota,
            danhmuc: cate,
            mangNhom: arrayPhanNhom
        };
        await postProductToEdit(sanphamSua);
    }

    async function postProductToEdit(sanphamSua) {
        try {
            const response = await axios.post('/api/admin/edit-product', {
                sanphamSua
            });
            if (response.status === 200) {
                console.log(response);
                window.location.reload();
            }
        } catch (e) {
            console.log('error', e.response);
        }
    }

    $("#btnReposiveLeft").click(function() {
        if ($("#box-content").hasClass("showLeft")) {
            $("#box-content").removeClass("showLeft");
        } else {
            $("#box-content").addClass("showLeft");
        }
    });
});