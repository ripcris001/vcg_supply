<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Add New Product</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="form-add-product">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Size *</label>
                                <input type="text" name="product_name" class="form-control form-input form-required" placeholder="Enter Size">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Brand *</label>
                                <select name="product_brand" class="selectpicker form-control form-input product_brand form-required" data-style="py-0">
                                    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category *</label>
                                <select name="product_category" class="selectpicker form-control form-input product_category form-required" data-style="py-0">
                                </select>
                            </div>
                        </div> 
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Design *</label>
                                <input type="text" name="product_design" class="form-control form-input" placeholder="Enter Design" data-errors="Please Enter Design.">
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Price *</label>
                                <input type="text" name="product_price" class="form-control form-input" placeholder="Enter Price" data-errors="Please Enter Price." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Code *</label>
                                <input type="text" name="product_code" class="form-control form-input" placeholder="Enter Code" data-errors="Please Enter Code.">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="form-group">
                                <label>Barcode *</label>
                                <input type="text" name="product_barcode" class="form-control form-input" placeholder="Enter Barcode" data-errors="Please Enter Barcode.">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description / Product Details</label>
                                <div class="description-list mb-1"></div>
                                <div class="description-form">
                                    <div class="row">
                                        <input type="text" name="title" class="form-control col-md-3 ml-3 des-form-input" placeholder="Title">
                                        <input type="text" name="description" class="form-control col-md-7 ml-1 des-form-input" placeholder="Description">
                                        <button type="button" class="btn btn-primary col-md-1 mr-2 ml-1 btn-add-description">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                            
                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        const product = {
            form: {
                add: '.form-add-product'
            },
            init: function(){
                this.getCategory();
                this.getBrand();
                this.event();
            }, 
            event: function(){
                const s = this;
                $('.description-form').on('click', '.btn-add-description', function(){
                    const input = {}
                    const count = $('.description-form').find('.des-form-input').length
                    let errCount = 0;
                    $('.description-form').find('.des-form-input').each(function(e){
                        const local = $(this);
                        const name = local.attr("name");
                        const value = local.val();
                        const attrReq = local.attr('required');
                        if(name && value.length){
                            input[name] = value;
                        }else{
                            if(attrReq){
                                 errCount++;
                                local.addClass("form-error")
                            }
                        }
                    })
                    if(!errCount){
                        $('.description-form').find('.des-form-input').val("");
                        s.displatDesData('.description-list', input);
                    }
                })
                $('.description-list').on('click', '.btn-remove-description', function(){
                    $(this).closest('.row').remove();
                })
                $(s.form.add).on('submit', function(e){
                    e.preventDefault();
                    const local = $(this);
                    const input = {
                        product_description: {}
                    }
                    let errCount = 0;
                    const pd = $('.description-list').find('.des-form-valid');
                    const cpd = pd.length;
                    $(s.form.add).find('.form-input').each(function(){
                        const localdata = $(this);
                        const name = localdata.attr('name');
                        const value = localdata.val();
                        const attrReq = local.attr('required');
                        if(name && value && value.length){
                            input[name] = value;
                        }else{
                            if(attrReq){
                                errCount++;
                                local.addClass("form-error")
                            }
                        }
                    })
                    if(cpd){
                        pd.each(function(){
                            const local = $(this);
                            const title = local.find('.des-form-input-valid[name=title]').val();
                            const desc = local.find('.des-form-input-valid[name=description]').val();
                            if(title.length && desc.length){
                                input.product_description[title] = desc;
                            }
                        })
                    }
                    if(!errCount){
                        input.product_description = JSON.stringify(input.product_description);
                        utils.request.set({data: input, url: '/api/product/add'}).send(function(res){
                            if(res.status){
                                utils.notify.setTitle("Success").setMessage(res.message).setType("success").load();
                                setTimeout(function(){
                                    window.location.href = "/admin/product"
                                }, 1500)
                            }else{
                                utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
                            }
                        })
                    }else{
                        utils.notify.setTitle("Error").setMessage("Please fill in the require field!").setType("danger").load();
                    }
                })
            },
            getBrand: function(){
                const __self = this;
                const input = {}
                    input.target = ".product_brand";
                    input.data = [];
                    input.index = "brand_id";
                    input.value = "brand_name";
                utils.request.set({data: [], url: '/api/brand'}).send(async function(res){
                    if(res.status){
                        input.data = res.data;
                    }else{
                        input.data = [];
                    }
                    await __self.loadSelect(input);
                })
            },
            getCategory: function(){
                const __self = this;
                const input = {}
                    input.target = ".product_category";
                    input.data = [];
                    input.index = "cat_id";
                    input.value = "cat_name";
                utils.request.set({data: [], url: '/api/category'}).send(function(res){
                    if(res.status){
                        input.data = res.data;
                    }else{
                        input.data = [];
                    }
                    __self.loadSelect(input);
                })
            },
            loadSelect: function(data){
                return new Promise((resolve, reject) => {
                    let mainData = data.data ? data.data : [];
                    let html = `<option disabled selected>Select Option</option>`;
                    if(mainData.length){
                        const count = mainData.length;
                        for(let a = 0; a < count; a++){
                            const loopdata = mainData[a];
                            html += `<option value="${loopdata[data.index]}">${loopdata[data.value]}</option>`;
                            if(a == (count -1)){
                                $(data.target).html(html);
                                resolve({status: true});
                            }
                        }
                    }else{
                        resolve({status: true});
                    }
                })
            },
            displatDesData: function(target, data){
                const __self = this;
                let html = '';
                    html += `
                        <div class="row pb-1 des-form-valid">
                            <input type="text" name="title" class="form-control col-md-3 ml-3 des-form-input-valid" placeholder="Title" value="${data.title}">
                            <input type="text" class="form-control col-md-7 ml-1 des-form-input-valid" placeholder="Description" name="description" value="${data.description}">
                            <button type="button" class="btn btn-danger col-md-1 mr-2 ml-1 btn-remove-description">Remove</button>
                        </div>
                    `
                $(target).append(html);
            }
        }
        product.init();
    })
</script>