<section class="shop-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="shop-category">
                    <div class="category-title">
                        <a href="#">Shop Department</a>
                    </div>
                    <div class="shop-category-menu">
                        <ul class="category-list">

                        </ul>
                    </div>
                </div>
                <div class="shop-sidebar">
                    <!-- <div class="brand-sidebar-item">
                        <h3>Brand</h3>
                        <ul class="brand-input-checkbox">
    
                        </ul>
                    </div> -->
                    <!-- <div class="discount-sidebar-item">
                        <h3>With Discount</h3>
                        <ul class="discount-input-checkbox">
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Any</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">No</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Yes</label>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-9 col-md-12 product-list">

            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
$(document).ready(function() {
    const isCart = <?php isset($data->cart) ? print(1) : print(0); ?>;
    const addtocard = {
        data: {
            cart_id: 0,
            customer_id: <?php isset($customerLogin->customer_id) ? print($customerLogin->customer_id) : print(0); ?>,
            product_list: [],
            cart_status: 'pending'
        },
        new: function() {
            this.data = {
                cart_id: 0,
                customer_id: <?php isset($customerLogin->customer_id) ? print($customerLogin->customer_id) : print(0); ?>,
                product_list: [],
                cart_status: 'pending'
            }
            return this
        }
    }
    if (isCart) {
        const cartData = <?php print_r(isset($data->cart) ? json_encode($data->cart) : 0); ?>;
        if (cartData !== 0) {
            cartData.product_list = JSON.parse(cartData.product_list);
            addtocard.data = cartData;
        }

    }

    const product = {
        target: {
            product: $('.product-list'),
            category: $('.category-list'),
            brand: $('.brand-input-checkbox')
        },
        data: [],
        productdata: [],
        search: {},
        init: function() {
            const __self = this;
            let param = window.location.search;
            __self.search = {
                category: null,
                brand: null
            }
            if (param.length) {
                param = param.replace('?', '');
                param = param.split("&");
                const count = param.length;
                for (let a = 0; a < count; a++) {
                    let local = param[a];
                    if (local.length) {
                        local = local.split("=");
                        if (Object.keys(__self.search).indexOf(local[0]) > -1) {
                            __self.search[local[0]] = local[1];
                        }
                    }
                }
            }
            __self.getproduct(__self.search)
            this.getcategory()
            this.getbrand()
            this.event();
        },
        getbrand: function() {
            const __self = this;
            utils.request.set({
                data: [],
                url: "/api/brand"
            }).send(function(res) {
                let outputData = [];
                if (res.status) {
                    outputData = res.data
                }
                __self.generateBrandContainer(outputData);
            });
        },
        getcategory: function(data = null) {
            const __self = this;
            const input = {}
            utils.request.set({
                data: [],
                url: "/api/category"
            }).send(function(res) {
                let outputData = [];
                if (res.status) {
                    outputData = res.data
                }
                __self.generateCategoryContainer(outputData);
            })
        },
        setData: function(data) {
            // console.log(data);
            this.data = data;
            return this;
        },
        getproduct: function(data = {}) {
            console.log(data);
            const __self = this;
            utils.request.set({
                data: Object.keys(data).length > 0 ? data : {},
                url: "/api/product"
            }).send(function(res) {
                let outputData = [];
                if (res.status) {
                    outputData = res.data;
                    __self.productdata = res.data;
                }
                __self.generateProductContainer(outputData);
            })
        },
        generateBrandContainer: function(param = []) {
            const __self = this;
            const data = param;
            let html = "";
            const count = data.length;
            for (let a = 0; a < count; a++) {
                const local = data[a];
                // console.log(local);
                html += `
                        <li class="checkbox">
                        <input type="checkbox" class="input">
                        <label class="label" data-id="${local.brand_id}">${local.brand_name}</label></li>
                    `
                if (a == (count - 1)) {
                    __self.target.brand.html(html);
                }
            }
        },
        generateCategoryContainer: function(param = []) {
            const __self = this;
            const data = param;
            let html = "";
            const count = data.length;
            for (let a = 0; a < count; a++) {
                const local = data[a];
                // console.log(local);
                html += `
                        <li><a class="cat1 product-category capitalize" data-id="${local.cat_id}">${local.cat_name}</a></li>
                    `;
                if (a == (count - 1)) {
                    __self.target.category.html(html);
                }
            }
        },
        generateProductContainer: function(param = []) {
            const __self = this;
            const data = param;
            let html = "";
            if (param.length) {
                const count = data.length;
                for (let a = 0; a < count; a++) {
                    const local = data[a];
                    const remaining_qty = local.remaining_stock;
                    tempHtml = `
                                <li>Price: <span class="denomitaion"><span class="denomitaion">₱</span>${utils.currency(local.product_price)}</span></li>
                                <li>Category: <span class="capitalize">${local.category}</span></li>
                                <li>Brand: <span class="capitalize">${local.brand}</span></li>
                                <li>Remaining Qty.: <span class="capitalize">${remaining_qty > 0 ? remaining_qty : "Sold out" }</span></li>

                            `;
                    local.product_description = JSON.parse(local.product_description);
                    if (Object.keys(local.product_description).length) {
                        const lOData = Object.keys(local.product_description);
                        const lCount = lOData.length;
                        for (let b = 0; b < lCount; b++) {
                            const index = lOData[b];
                            const value = local.product_description[index];
                            tempHtml += `<li><span class="capitalize">${index}</span>: ${value}</li>`;
                        }
                    }
                    html += `
                        <div class="shop-item-box" data-product-id="${local.product_id}">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="shop-image">
                                        <a href="#">
                                            <img src="<?php echo $theme->assetPath; ?>${local.product_image ? local.product_image : "/img/shop/blank.png"}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="shop-content">
                                        <h3>
                                            <a href="#" class="uppercase">${local.product_name}</a>
                                        </h3>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <a href="#" class="rating-count">0 reviews</a>
                                        </div>
                                        <ul class="shop-list">
                                            ${tempHtml}
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <ul class="shop-btn-list">
                                        <li>
                                            <span><span class="denomitaion">₱</span>${local.product_price}</span>
                                        </li>
                                        <li>
                                            <a class="${remaining_qty ? "" : "disabled"} btn-add-to-cart" data-id="${local.product_id}" data-customer-id="<?php isset($customerLogin->customer_id) ? print($customerLogin->customer_id) : print(0); ?>">Add To Cart</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>`;
                    if (a == (count - 1)) {
                        __self.target.product.html(html);
                    }
                }
            } else {
                html = `
                        <div class="shop-item-box">
                            No Product found!
                        </div>`;
                __self.target.product.html(html);
            }
        },
        event: function() {
            const __self = this;
            $('.category-list').on('click', '.product-category', function() {
                const local = $(this);
                const id = local.attr("data-id");
                local.closest('.category-list').find('li.active').removeClass('active');
                local.closest('li').addClass('active');
                let Url = ""
                if (id != 0) {
                    Url = "/product?category=" + id;
                    window.location.href = Url;

                }
            })
            $('.product-list').on('click', '.btn-add-to-cart', function() {
                const local = $(this);
                const customer = local.data('customer-id');
                const produc_id = local.data('id');
                if (customer) {
                    const product_list = addtocard.data.product_list;
                    const findIndex = utils.findObjectIndex(product_list, "product_id",
                        produc_id);
                    let productInfo = utils.findObjectIndex(__self.productdata,
                        "product_id",
                        produc_id);
                    productInfo = (typeof __self.productdata[productInfo] !== 'undefined') ?
                        __self.productdata[productInfo] : {}
                    if (findIndex > -1) {
                        utils.notify.setTitle("Error").setMessage(
                                "Product already exist on cart").setType("danger")
                            .load();
                    } else {
                        const inputProduct = {
                            "product_id": productInfo.product_id,
                            "transaction": {
                                "id": productInfo.product_id,
                                "quantity": 1,
                                "subtotal": productInfo.product_price,
                                "price": productInfo.product_price
                            },
                            "info": {
                                "brand": productInfo.brand,
                                "category": productInfo.brand,
                                "product_name": productInfo.product_name,
                                "product_price": productInfo.product_price
                            }
                        }
                        addtocard.data.product_list.push(inputProduct);
                        addtocard.data.product_list = JSON.stringify(addtocard.data
                            .product_list);
                        utils.request.set({
                            data: addtocard.data,
                            url: "/api/product/addtocart"
                        }).send(function(res) {
                            if (res.status) {
                                utils.notify.setTitle("Succes").setMessage(res.message)
                                    .setType("success")
                                    .load();
                                addtocard.new();
                                __self.getPendingCart();
                            } else {
                                utils.notify.setTitle("Error").setMessage(res.message)
                                    .setType("danger")
                                    .load();
                                addtocard.data.product_list = JSON.parse(addtocard.data
                                    .product_list);
                            }
                        })
                    }
                } else {
                    utils.notify.setTitle("Error").setMessage(
                            "Please login inorder to add product to car").setType("danger")
                        .load();
                }
            })
        },
        getPendingCart: function() {
            utils.request.set({
                data: {
                    "customer_id": <?php isset($customerLogin->customer_id) ? print($customerLogin->customer_id) : print(0); ?>
                },
                url: "/api/product/getpendingcart"
            }).send(function(res) {
                if (res.status) {
                    const data = res.data;
                    data.product_list = JSON.parse(data.product_list);
                    addtocard.data = data;
                } else {

                }
            })
        }
    }

    product.init();

    /* main task
        create post request from product api using jquery post
    */

});
</script>