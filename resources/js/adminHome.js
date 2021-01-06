const { countBy } = require("lodash");
let idproductEdit;
$(document).ready(function() {

    document.querySelectorAll(".btn__edit-product").forEach(btn => {
        btn.addEventListener("click", () => {
            editsp(btn.dataset.productId);
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
    

    // document.querySelectorAll(".btn__add-type-edit").addEventListener("click", () => {
    //     addInputType();
    // });

    // document.querySelectorAll(".btn__submit-EditProduct").forEach(btn => {
    //     btn.addEventListener("submit", e => {
    //         e.preventDefault();
    //         submitSuaSP();
    //     });
    // });

    document
        .querySelector("#form-add-product")
        .addEventListener("submit", e => {
            e.preventDefault();
            submitThemSP();
        });
        document
        .querySelector("#form-edit-product")
        .addEventListener("submit", e => {
            e.preventDefault();
            submitSuaSP();
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


    const addInputType = () => {
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
    };

    async function submitThemSP() {
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
        let productTypeQuantity = document.getElementsByName("product-type-quantity[]");
        let productTypePrice = document.getElementsByName("product-type-price[]");

        for (let i = 0; i < productTypeName.length && i < productTypePrice.length && i < productTypeQuantity.length;i++) {
            let name = productTypeName[i].value;
            let quantity = productTypeQuantity[i].value;
            let price = productTypePrice[i].value;
            if(name.trim() != "" || quantity.trim() != "" || price.trim() != "")
            {
                typesGroup.push({
                    name: name,
                    quantity: quantity,
                    price: price
                });
            }
            
        }

        fdata.append("productTypes", JSON.stringify(typesGroup)); // tại sao chổ này lại dùng lại phải chuyển thành Json

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
                window.location.reload();
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
                    let data = response.data;
                    let dataproducttype = data[0];
                    let datasp = data[1];
                    console.log(datasp[0].productId);
                    //tạo dữ liệu cho sản phẩm
                    document.getElementById("product-name-edit").value = datasp[0].productName;
                    document.getElementById("product-id-edit").value = datasp[0].productId;
                    document.getElementById("product-description-edit").value = datasp[0].description;
                    document.getElementById(datasp[0].categoryId).selected = true;
                    //xóa hết tất cả cac div được tạo
                    var divRemove = document.querySelectorAll(".type-group-edit");
                    for (var indexRemove = 0; indexRemove < divRemove.length; indexRemove++) {
                        
                        divRemove[indexRemove].remove();
                    }
                    //tạo dữ liệu cho type
                    
                    for (var sldiv = 0; sldiv < dataproducttype.length; sldiv++) {
                        let div = document.createElement("div");
                        div.className = "col-md-8 type-group-edit";
                    

                        div.innerHTML = `
                        <input class="col-md-3 inputitem" type="text" name="product-type-edit[]" placeholder='Nhập tên Phân Nhóm' value= '${dataproducttype[sldiv]['name']}'>
                        <input class="col-md-3 inputitem" type="text" name="product-type-quantity-edit[]" placeholder='Nhập Số Lượng' value= '${dataproducttype[sldiv]['quantity']}'>
                        <input class="col-md-2 inputitem" type="text" name="product-type-price-edit[]" placeholder='Nhập Giá' value= ${dataproducttype[sldiv]['price']}>
                    `;
                    document.querySelector(".product-types__group-edit").appendChild(div);
                    }
                }
            } catch (e) {
                console.log("error", e.response);
            }
        }
        GetGroupProduct(id);
    }

    async function submitSuaSP(e) {
        
        var fdata = new FormData();
        console.log(idproductEdit);
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
        let productTypeQuantity = document.getElementsByName("product-type-quantity-edit[]");
        let productTypePrice = document.getElementsByName("product-type-price-edit[]");

        for (let i = 0; i < productTypeName.length && i < productTypePrice.length && i < productTypeQuantity.length;i++) {
            let name = productTypeName[i].value;
            let quantity = productTypeQuantity[i].value;
            let price = productTypePrice[i].value;
            if(name.trim() != "" || quantity.trim() != "" || price.trim() != "")
            {
                typesGroup.push({
                    name: name,
                    quantity: quantity,
                    price: price
                });
            }
        }

        fdata.append("productTypes", JSON.stringify(typesGroup)); 

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
