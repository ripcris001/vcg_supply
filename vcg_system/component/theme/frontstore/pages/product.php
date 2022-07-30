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
                            <!-- <li><a href="#" class="cat1">Batteries</a></li>
                            <li><a href="#">Tires Collection</a></li>
                            <li><a href="#">Wheels</a></li>
                            <li><a href="#">Oil & Lubricants</a></li>
                            <li><a href="#">Interior Parts</a></li>
                            <li><a href="#">Diversion</a></li>
                            <li><a href="#">Electronics</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Brake Rotors</a></li>
                            <li><a href="#">Pistons Liners</a></li>
                            <li><a href="#">Oil & Lubricants</a></li>
                            <li><a href="#">Batteries</a></li>
                            <li><a href="#">Door Handles</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="shop-sidebar">
                    <div class="brand-sidebar-item">
                        <h3>Brand</h3>
                        <ul class="brand-input-checkbox">
                            <!-- <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Brandix</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Red Gate</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Sunset</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Spector</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">TransTech</label>
                            </li>
                            <li class="checkbox">
                                <input type="checkbox" class="input">
                                <label class="label">Turbo Electric</label>
                            </li> -->
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
            init: function(){
                this.getproduct()
                this.getcategory()
                this.getbrand()
            
            },
            getbrand: function(){
                const __self = this; 
                $.post( "/api/brand", function( brand ) { 
                    brand = JSON.parse(brand);
                    console.log(brand);
                    __self.generateBrandContainer(brand.data);
                });
            },
            getcategory: function(){
                const __self = this; 
                $.post( "/api/category", function( cat ) { 
                    cat = JSON.parse(cat);
                    console.log(cat);
                    __self.generateCategoryContainer(cat.data);
                });
            },
            setData: function(data){
                console.log(data);
                this.data = data;
                return this;
            },
            getproduct: function(){
                const __self = this; 
                $.post( "/api/product", function( res ) { 
                    res = JSON.parse(res);
                    console.log(res);
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
                    console.log(local);
                    html += `
                    <li class="checkbox"> <a><label class="label">Brandix</label></a></li>
                    `
                    if(a == (count -1)){
                        __self.target.category.html(html);
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
                    console.log(local);
                    html += `
                        <li><a href="#" class="cat1" data-id="${local.cat_id}">${local.cat_name}</a></li>
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
                                        <img src="${local.product_image}" alt="image">
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
            }
        }

        product.init();

        /* main task
            create post request from product api using jquery post
        */

    });
</script>