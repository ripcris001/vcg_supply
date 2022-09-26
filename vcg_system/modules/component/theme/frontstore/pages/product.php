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
                    <div class="brand-sidebar-item">
                        <h3>Brand</h3>
                        <ul class="brand-input-checkbox">
    
                        </ul>
                    </div>
                    <div class="discount-sidebar-item">
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
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 product-list">
                
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function(){
        const product = {
            target: { 
                product: $('.product-list'),
                category: $('.category-list'),
                brand: $('.brand-input-checkbox')
            },
            data: [],
            search: {},
            init: function(){
                const __self = this;
                let param = window.location.search;
                __self.search = {
                    category: null,
                    brand: null
                }
                if(param.length){
                    param = param.replace('?', '');
                    param = param.split("&");
                    const count = param.length;
                    for(let a = 0; a < count; a++){
                        let local = param[a];
                        if(local.length){
                            local = local.split("=");
                            if(Object.keys(__self.search).indexOf(local[0]) > -1){
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
            getbrand: function(){
                const __self = this; 
                $.post( "/api/brand", function( brand ) { 
                    brand = JSON.parse(brand);
                    // console.log(brand);
                    __self.generateBrandContainer(brand.data);
                });
            },
            getcategory: function(data = null){
                const __self = this; 
                const input = {}
                $.post( "/api/category", function( cat ) { 
                    cat = JSON.parse(cat);
                    // console.log(cat);
                    __self.generateCategoryContainer(cat.data);
                });
            },
            setData: function(data){
                // console.log(data);
                this.data = data;
                return this;
            },
            getproduct: function(data = {}){
                const __self = this; 
                $.post( "/api/product", Object.keys(data).length > 0 ? data : {}, function( res ) { 
                    res = JSON.parse(res);
                    // console.log(res);
                    __self.generateProductContainer(res.data);
                });
            },
            generateBrandContainer: function(param = []){
                const __self = this;
                const data = param;
                let html = "";
                const count = data.length;
                for(let a = 0; a < count; a++){
                    const local = data[a];
                    // console.log(local);
                    html += `
                        <li class="checkbox">
                        <input type="checkbox" class="input">
                        <label class="label" data-id="${local.brand_id}">${local.brand_name}</label></li>
                    `
                    if(a == (count -1)){
                        __self.target.brand.html(html);
                    }
                }
            },
            generateCategoryContainer: function(param = []){
                const __self = this;
                const data = param;
                let html = "";
                const count = data.length;
                for(let a = 0; a < count; a++){
                    const local = data[a];
                    // console.log(local);
                    html += `
                        <li><a class="cat1 product-category" data-id="${local.cat_id}">${local.cat_name}</a></li>
                    `;
                    if(a == (count -1)){
                        __self.target.category.html(html);
                    }
                }
            },
            generateProductContainer: function(param = []){
                const __self = this;
                const data = param;
                let html = "";
                if(param.length){
                    const count = data.length;
                    for(let a = 0; a < count; a++){
                        const local = data[a];
                        tempHtml = "";
                        local.product_description = JSON.parse(local.product_description);
                        if(Object.keys(local.product_description).length){
                            const lOData = Object.keys(local.product_description);
                            const lCount = lOData.length;
                            for(let b =0; b < lCount; b++){
                                const index = lOData[b];
                                const value = local.product_description[index];
                                tempHtml += `<li>${index}: ${value}</li>`;
                            }
                        }
                        html += `
                        <div class="shop-item-box" data-product-id="${local.product_id}">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-sm-3">
                                    <div class="shop-image">
                                        <a href="#">
                                            <img src="<?php echo $theme->assetPath; ?>${local.product_image}" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="shop-content">
                                        <h3>
                                            <a href="#">${local.product_name}</a>
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
                                            <a href="cart.html">Add To Cart</a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">Add To Wishlist</a>
                                        </li>
                                        <li>
                                            <a href="compare.html">Add To Compare</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>`;
                        if(a == (count -1)){
                            __self.target.product.html(html);
                        }
                    }
                } else{
                    html = `
                        <div class="shop-item-box">
                            No Product found!
                        </div>`;
                    __self.target.product.html(html);
                }
            }, event: function(){
                const __self = this;
                $('.category-list').on('click', '.product-category', function(){
                    const local = $(this);
                    const id = local.attr("data-id");
                    local.closest('.category-list').find('li.active').removeClass('active');
                    local.closest('li').addClass('active');
                    let Url = ""
                    if(id != 0) {
                        Url = "/product?category=" + id;
                        window.location.href = Url;

                    }
                    console.log(id)


                })
            }
        }

        product.init();

        /* main task
            create post request from product api using jquery post
        */

    });
</script>