$(document).ready(function() {
    var slNhomThemSP = 0;
    var slNhomSuaSP = 0;

    document.querySelectorAll(".btn__edit-product").forEach(btn => {
        btn.addEventListener("click", () => {
            editsp(btn.dataset.productId);
        });
    });

    document.querySelectorAll(".btn__AddGroup-product").forEach(btn => {
        btn.addEventListener("click", () => {
            addinputthemsp();
        });
    });

    // document.querySelectorAll(".btn__AddGroup-Editproduct").forEach(btn => {
    //     btn.addEventListener("click", () => {
    //         themNhomSuaSP();
    //     });
    // });

    // document.querySelectorAll(".btn__submit-AddProduct").forEach(btn => {
    //     btn.addEventListener("click", () => {
    //         submitThemSP();
    //     });
    // });

    //
    //
    document.querySelector(".btn__add-type").addEventListener("click", () => {
        addInputType();
    });

    document.querySelectorAll(".btn__submit-EditProduct").forEach(btn => {
        btn.addEventListener("submit", e => {
            e.preventDefault();
            submitSuaSP();
        });
    });

    document
        .querySelector("#form-add-product")
        .addEventListener("submit", e => {
            e.preventDefault();
            submitThemSP();
        });

    // document.querySelectorAll('.SelectstatusOrder').forEach(select => {
    //     select.addEventListener('change', async () => {
    //         let id = select.dataset.orderId;
    //         var status = select.getElementsByClassName("SelectstatusOrder").value;
    //         console.log(status);
    //         try {
    //             const response = await axios.post('/api/admin/statuschangeorder', {
    //                 id,
    //                 status
    //             });
    //             if (response.status === 200) {
    //                 console.log(response);
    //             }
    //         } catch (e) {
    //             console.log('error', e.response);
    //         }
    //     });
    // });

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
        document
            .getElementById("content-phanNhom-themsp" + slNhomThemSP)
            .appendChild(inputName);
        document
            .getElementById("content-phanNhom-themsp" + slNhomThemSP)
            .appendChild(inputQuantity);
        document
            .getElementById("content-phanNhom-themsp" + slNhomThemSP)
            .appendChild(inputPrice);
        document
            .getElementById("content-phanNhom-themsp" + slNhomThemSP)
            .appendChild(bntRemove);
        document
            .getElementById("btnremove-themsp" + slNhomThemSP)
            .appendChild(icon);
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
        document
            .getElementById("content-phanNhom-suaSP" + slNhomSuaSP)
            .appendChild(inputName);
        document
            .getElementById("content-phanNhom-suaSP" + slNhomSuaSP)
            .appendChild(inputQuantity);
        document
            .getElementById("content-phanNhom-suaSP" + slNhomSuaSP)
            .appendChild(inputPrice);
        document
            .getElementById("content-phanNhom-suaSP" + slNhomSuaSP)
            .appendChild(bntRemove);
        document
            .getElementById("btnremove-suaSP" + slNhomSuaSP)
            .appendChild(icon);
    }

    const addInputType = () => {
        console.log("add");
        let div = document.createElement("div");
        div.className = "col-md-8 type-group";
        div.innerHTML = `
            <input class="col-md-3 inputitem" type="text" name="product-type[]" placeholder='Nhập tên Phân Nhóm'>
            <input class="col-md-3 inputitem" type="text" name="product-type-quantity[]" placeholder='Nhập Số Lượng'>
            <input class="col-md-2 inputitem" type="text" name="product-type-price[]" placeholder='Nhập Giá'>
            <button id="btnremove-themsp1" type="button" class="icon-remove-input-themsp btn__remove-type">
                <i class="fas fa-minus-circle"></i>
            </button>
        `;
        document.querySelector(".product-types__group").appendChild(div);

        document
            .querySelector(".type-group:last-child > .btn__remove-type")
            .addEventListener("click", e => {
                console.log(e.currentTarget);
            });
    };

    async function submitThemSP() {
        // var arrayPhanNhom = [];
        // var tensp = document.forms["formInfoAdd"]["tenSP"].value;
        // var mota = document.forms["formInfoAdd"]["motaSP"].value;
        // var cate = document.forms["formInfoAdd"]["category"].value;

        // for (var z = 0; z <= slNhomThemSP; z++) {
        //     var check = document.forms["formInfoAdd"]["tenNhom-themsp" + z].value;
        //     if(check == "")
        //         continue;
        //     arrayPhanNhom.push({
        //         tennhom: document.forms["formInfoAdd"]["tenNhom-themsp" + z].value,
        //         slnhom: document.forms["formInfoAdd"]["SLNhom-themsp" + z].value,
        //         gianhom: document.forms["formInfoAdd"]["GiaNhom-themsp" + z].value
        //     })
        // }
        // slNhomThemSP = 0;
        // var sanpham = {
        //     tensp: tensp,
        //     mota: mota,
        //     danhmuc: cate,
        //     mangNhom: arrayPhanNhom
        // };
        var fdata = new FormData();
        fdata.append(
            "productName",
            document.querySelector("#product-name").value
        );
        fdata.append(
            "productDescription",
            document.querySelector("#product-description").value
        );

        fdata.append(
            "categoryId",
            document.querySelector(".add-product__category").value
        );

        let typesGroup = [];
        let productTypeName = document.getElementsByName("product-type[]");
        let productTypeQuantity = document.getElementsByName(
            "product-type-quantity[]"
        );
        let productTypePrice = document.getElementsByName(
            "product-type-price[]"
        );
        for (
            let i = 0;
            i < productTypeName.length &&
            i < productTypePrice.length &&
            i < productTypeQuantity.length;
            i++
        ) {
            typesGroup.push({
                name: productTypeName[i].value,
                quantity: productTypeQuantity[i].value,
                price: productTypePrice[i].value
            });
        }

        fdata.append("productTypes", JSON.stringify(typesGroup));

        let files = document.getElementById("upload").files;
        for (let i = 0; i < files.length; i++) {
            fdata.append("images[]", files[i]);
        }

        await postProduct(fdata);
    }

    async function postProduct(product) {
        try {
            const response = await axios.post(
                "/api/admin/new-product",
                product,
                {
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                }
            );
            if (response.status === 200) {
                console.log(response);
                //window.location.reload();
            }
        } catch (e) {
            console.log("error", e.response);
        }
    }

    function editsp(id) {
        async function GetGroupProduct(id) {
            try {
                const response = await axios.post(
                    "/api/admin/get-Group-product",
                    {
                        id
                    }
                );
                if (response.status === 200) {
                    let datasp = response.data;

                    for (var sldiv = 0; sldiv < datasp.length; sldiv++) {
                        var sldivdatontai =
                            document.getElementById("themPhanNhom-suaSP")
                                .childElementCount - 1;
                        if (sldivdatontai < datasp.length) {
                            themNhomSuaSP();
                        }
                        var inputTen = document.getElementsByName(
                            "tenNhom-suaSP" + sldiv
                        )[0];
                        inputTen.setAttribute("value", datasp[sldiv]["name"]);
                        var inputsl = document.getElementsByName(
                            "SLNhom-suaSP" + sldiv
                        )[0];
                        inputsl.setAttribute(
                            "value",
                            datasp[sldiv]["quantity"]
                        );
                        var inputgia = document.getElementsByName(
                            "GiaNhom-suaSP" + sldiv
                        )[0];
                        inputgia.setAttribute(
                            "value",
                            parseFloat(datasp[sldiv]["price"])
                        );
                    }
                    for (
                        var indexRemove = datasp.length;
                        indexRemove < sldivdatontai;
                        indexRemove++
                    ) {
                        var divRemove = document.getElementById(
                            "content-phanNhom-suaSP" + indexRemove
                        );
                        divRemove.remove();
                    }
                }
            } catch (e) {
                console.log("error", e.response);
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

        var sldivdatontai =
            document.getElementById("themPhanNhom-suaSP").childElementCount - 1;
        for (var z = 0; z < sldivdatontai; z++) {
            var check = document.forms["editSPForm"]["tenNhom-suaSP" + z].value;
            if (check == "") continue;
            arrayPhanNhom.push({
                tennhom:
                    document.forms["editSPForm"]["tenNhom-suaSP" + z].value,
                slnhom: document.forms["editSPForm"]["SLNhom-suaSP" + z].value,
                gianhom: document.forms["editSPForm"]["GiaNhom-suaSP" + z].value
            });
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
            const response = await axios.post("/api/admin/edit-product", {
                sanphamSua
            });
            if (response.status === 200) {
                console.log(response);
                window.location.reload();
            }
        } catch (e) {
            console.log("error", e.response);
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
