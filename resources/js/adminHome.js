$(document).ready(function() {
    document.querySelectorAll(".btn__edit-product").forEach(btn => {
        btn.addEventListener("click", () => {
            editsp(btn.dataset.productId);
        });
    });

    document.querySelector(".btn__add-type")?.addEventListener("click", () => {
        addInputType(".product-types__group");
    });

    document
        .querySelector(".btn__add-type--edit")
        ?.addEventListener("click", () => {
            addInputType(".product-types__group-edit");
        });

    document.querySelector(".btn-themSp")?.addEventListener("click", () => {
        Removeimput();
    });

    document
        .querySelector("#form-add-product")
        ?.addEventListener("submit", e => {
            e.preventDefault();
            submitThemSP();
        });
    document
        .querySelector("#form-edit-product")
        ?.addEventListener("submit", e => {
            e.preventDefault();
            submitSuaSP();
        });

    document.querySelectorAll(".SelectstatusOrder").forEach(select => {
        select.addEventListener("change", async () => {
            let id = select.dataset.orderId;
            var status = select.value;
            try {
                const response = await axios.post(
                    "/api/admin/statuschangeorder",
                    {
                        id,
                        status
                    }
                );
                if (response.status === 200) {
                    console.log(response);
                }
            } catch (e) {
                console.log("error", e.response);
            }
        });
    });

    function Removeimput() {
        //xóa hết tất cả cac div được tạo
        document.getElementById("error_productName").innerHTML = "";
        document.getElementById("error_productDescription").innerHTML = "";
        document.getElementById("error-productType").innerHTML = "";
        document.getElementById("error-image").innerHTML = "";

        var divRemove = document.querySelectorAll(".type-group");
        for (
            var indexRemove = 0;
            indexRemove < divRemove.length;
            indexRemove++
        ) {
            console.log("here");
            divRemove[indexRemove].remove();
        }
    }

    const addInputType = className => {
        let div = document.createElement("div");
        div.className = "type-group type-group--input";
        div.innerHTML = `
            <input class=" inputitem" type="text" name="product-type[]" placeholder='Nhập tên Phân Nhóm'>
            <input class=" inputitem" type="text" name="product-type-quantity[]" placeholder='Nhập Số Lượng'>
            <input class=" inputitem" type="text" name="product-type-price[]" placeholder='Nhập Giá'>
        `;
        document.querySelector(className).appendChild(div);
    };

    async function submitThemSP() {
        //lấy hình ảnh san phẩm
        let files = document.getElementById("upload").files;
        document.getElementById("error_productName").innerHTML = "";
        document.getElementById("error_productDescription").innerHTML = "";
        document.getElementById("error-productType").innerHTML = "";
        document.getElementById("error-image").innerHTML = "";
        if (document.querySelector("#product-name").value.trim() == "") {
            document.getElementById("error_productName").innerHTML =
                "Tên Sản Phẩm không được bỏ trống !!";
            return;
        }
        if (document.querySelector("#product-description").value.trim() == "") {
            document.getElementById("error_productDescription").innerHTML =
                "Mô Tả không được bỏ trống !!";
            return;
        }
        if (files.length == 0) {
            document.getElementById("error-image").innerHTML =
                "Sản Phẩm Phải có ít Nhất 1 hình ảnh !!";
            return;
        }
        if (document.querySelector("#product-type-name").value.trim() == "" || 
            document.querySelector("#product-type-quantity").value.trim() == "" ||
            document.querySelector("#product-type-price").value.trim() == "") {
            document.getElementById("error-productType").innerHTML =
                "Sản phẩm phải có ít nhất 1 phân nhóm !!";
            return;
        }
        

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
            let name = productTypeName[i].value;
            let quantity = productTypeQuantity[i].value;
            let price = productTypePrice[i].value;
            if (
                name.trim() != "" ||
                quantity.trim() != "" ||
                price.trim() != ""
            ) {
                typesGroup.push({
                    name: name,
                    quantity: quantity,
                    price: price
                });
            }
        }

        fdata.append("productTypes", JSON.stringify(typesGroup)); // tại sao chổ này lại dùng lại phải chuyển thành Json

        
        for (let i = 0; i < files.length; i++) {
            fdata.append("images[]", files[i]);
        }
        await postProduct(fdata);
    }

    async function postProduct(product) {
        const btnSubmit = document.querySelector(".btn__submit-AddProduct");
        try {
            btnSubmit.disabled = true;
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
                window.location.reload();
            }
        } catch (e) {
            console.log("error", e.response);
        } finally {
            btnSubmit.disabled = false;
        }
    }

    async function editsp(id) {
        document.getElementById("error_productName-edit").innerHTML = "";
        document.getElementById("error_productDescription-edit").innerHTML = "";
        document.getElementById("error-productType-edit").innerHTML = "";
        try {
            const response = await axios.post("/api/admin/get-Group-product", {
                id
            });
            if (response.status === 200) {
                let data = response.data;
                console.log(data);
                let dataproducttype = data[0];
                let datasp = data[1];

                //tạo dữ liệu cho sản phẩm
                document.getElementById("product-name-edit").value =
                    datasp[0].productName;
                document.getElementById("product-id-edit").value =
                    datasp[0].productId;
                document.getElementById("product-description-edit").value =
                    datasp[0].description;

                document.getElementById(datasp[0].categoryId).selected = true;
                //xóa hết tất cả cac div được tạo
                var divRemove = document.querySelectorAll(".type-group");
                for (
                    var indexRemove = 0;
                    indexRemove < divRemove.length;
                    indexRemove++
                ) {
                    divRemove[indexRemove].remove();
                }
                //tạo dữ liệu cho type
                
                for (var sldiv = 0; sldiv < dataproducttype.length; sldiv++) {
                    let div = document.createElement("div");
                    div.className = "type-group type-group--input";
                    div.innerHTML = `
                        <input class=" inputitem" type="text" name="product-type-edit[]" placeholder='Nhập tên Phân Nhóm' value= '${dataproducttype[sldiv]["name"]}'>
                        <input class=" inputitem" type="text" name="product-type-quantity-edit[]" placeholder='Nhập Số Lượng' value= '${dataproducttype[sldiv]["quantity"]}'>
                        <input class=" inputitem" type="text" name="product-type-price-edit[]" placeholder='Nhập Giá' value= ${dataproducttype[sldiv]["price"]}>
                    `;
                    document
                        .querySelector(".product-types__group-edit")
                        .appendChild(div);
                }
            }
        } catch (e) {
            console.log("error", e.response);
        }
    }

    async function submitSuaSP(e) {
       
        document.getElementById("error_productName-edit").innerHTML = "";
        document.getElementById("error_productDescription-edit").innerHTML = "";
        document.getElementById("error-productType-edit").innerHTML = "";
        document.getElementById("error-image-edit").innerHTML = "";
        if (document.querySelector("#product-name-edit").value.trim() == "") {
            document.getElementById("error_productName-edit").innerHTML =
                "Tên Sản Phẩm không được bỏ trống !!";
            return;
        }
        if (document.querySelector("#product-description-edit").value.trim() == "") {
            document.getElementById("error_productDescription-edit").innerHTML =
                "Mô Tả không được bỏ trống";
            return;
        }
        if (document.querySelector("#product-type-name-edit").value.trim() == "" || 
            document.querySelector("#product-type-quantity-edit").value.trim() == "" ||
            document.querySelector("#product-type-price-edit").value.trim() == "") {
            document.getElementById("error-productType-edit").innerHTML =
                "Sản phẩm phải có ít nhất 1 phân nhóm";
            return;
        }

        var fdata = new FormData();
        fdata.append(
            "productId",
            document.querySelector("#product-id-edit").value
        );
        fdata.append(
            "productName",
            document.querySelector("#product-name-edit").value
        );
        fdata.append(
            "productDescription",
            document.querySelector("#product-description-edit").value
        );

        fdata.append(
            "categoryId",
            document.querySelector(".add-product__category").value
        );

        let typesGroup = [];
        let productTypeName = document.getElementsByName("product-type-edit[]");
        let productTypeQuantity = document.getElementsByName(
            "product-type-quantity-edit[]"
        );
        let productTypePrice = document.getElementsByName(
            "product-type-price-edit[]"
        );

        for (
            let i = 0;
            i < productTypeName.length &&
            i < productTypePrice.length &&
            i < productTypeQuantity.length;
            i++
        ) {
            let name = productTypeName[i].value;
            let quantity = productTypeQuantity[i].value;
            let price = productTypePrice[i].value;
            if (
                name.trim() != "" ||
                quantity.trim() != "" ||
                price.trim() != ""
            ) {
                typesGroup.push({
                    name: name,
                    quantity: quantity,
                    price: price
                });
            }
        }

        fdata.append("productTypes", JSON.stringify(typesGroup));

         //lấy tất cả hình ảnh
         let files = document.getElementById("upload-edit").files;
        for (let i = 0; i < files.length; i++) {
            fdata.append("images[]", files[i]);
        }
        await postProductToEdit(fdata);
    }

    async function postProductToEdit(productEdit) {
        try {
            const response = await axios.post(
                "/api/admin/edit-product",
                productEdit,
                {
                    headers: {
                        "Content-Type": "multipart/form-data"
                    }
                }
            );
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
