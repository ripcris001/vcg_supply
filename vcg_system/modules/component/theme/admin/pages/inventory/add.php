<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Add Product Inventory</h4>
                </div>
            </div>
            <div class="card-body">
                <form class="form-add-product">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase order #</label>
                                <input type="text" name="po_number" class="form-control form-input form-required" placeholder="Enter Purchase order number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Purchase Date</label>
                                <input type="date" name="po_date" class="form-control form-input form-required" placeholder="Purchase order date">	
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Supplier</label>
                                <input type="text" name="po_supplier" class="form-control form-input" placeholder="Enter Supplier" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Note</label>
                                <textarea name="note" class="form-control form-input" cols="8"></textarea>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Select item</label>
                                <select name="select_product" id="product_list" class="form-control product_list" data-style="py-0" ></select>	
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Original Price</label>
                                <input type="number" name="select_quantity_price" class="form-control" placeholder="Enter Original Price">  
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Quantity</label>
                                <input type="number" name="select_quantity" class="form-control" placeholder="Enter Quantity">	
                            </div>
                        </div>
                        <div class="col-md-3 pt-3">
                            <a href="javascript:void(0)" class="btn btn-primary mt-4 pt-2 pb-2 btn-add-selected-product">Add</a>
                        </div>
                    	
                        <div class="col-md-12 pt-3">
                        	<h5 class="mb-2">Product List</h5>
                            <table class="data-table table mb-0 tbl-server-info" id="product-table">
				                <thead class="bg-white text-uppercase">
				                    <tr class="ligth ligth-data">
				                        <th>Product Name</th>
                                        <th>Remaining qty.</th>
				                        <th>Quantity</th>
                                        <th>Original Price</th>
				                        <th>brand</th>
				                        <th>Category</th>
				                        <th>Action</th>
				                    </tr>
				                </thead>
				            </table>
				            <br>
                        </div>
                    </div>                            
                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		const inventory = {
			data: {
				product: [],
				purchase_order: {
					selectedProduct: [],
					po_number: null,
					po_date: null
				}
			},
			select: {
				product : null
			},
			datatable:{
                main:null
            },
            table: {
                main: '#product-table'
            },
            form: {
                add: '.form-add-entry',
                update: '.form-update-entry'
            },
            load: function() {
                this.loadTable();
                this.event();
                this.getAllProduct();
                return this;
            },
            getAllProduct: function(){
            	const __self = this;
            	utils.request.set({data: [], url: '/api/product'}).send(function(res){
    				if(res.status){
    					__self.data.product = res.data;
    					__self.createSelect();
    				}else{
    					utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
    				}
    			})
            },
            createSelect: function(){
            	const __self = this;
            	__self.select.product = $('#product_list').selectpicker({liveSearch: true});
            	const product = __self.data.product;
            	let new_product = '';
            	if(product.length){
            		for(let a = 0, count = product.length; a < count; a++){
            			const l = product[a];
            			new_product += `<option value="${l.product_id}">${l.product_name} [ ${l.category} / ${l.brand} ]</option>`;
            			if(a == (count - 1)){
            				$('#product_list').html(new_product);
            				__self.select.product.selectpicker('refresh');
            			}
            		}
            	}
            	
            },
			loadTable: function(param) {
                if ($.fn.DataTable.isDataTable(this.table.main)) {
                    $(this.table.main).DataTable().destroy();
                }
                let tdData = param && param.length ? param : [];
                this.datatable.main = $(this.table.main).DataTable({
                    "processing": false,
                    "serverSide": false,
                    "searching": false,
                    "paginate": false,
                    "sort": false,
                    "info": false,
                    "data" : tdData,
                    "columns": [{
                        "data": "product_name",
                        "className": "capitalize text-center",
                    },{
                        "data": "remaining_stock"
                    },{
                        "data": "input_quantity"
                    },{
                        "data": "input_price"
                    },{
                        "data": "category"
                    },{
                        "data": "brand"
                    },{
                        "data": "nAction",
                        "className": "text-center",
                    }]
                });
            },
            event: function(){
                const s = this;
                $('.btn-add-selected-product').on('click', function(){
                	let errCount = 0;
                	const local = $(this);
                	const selectedProduct = local.closest('.form-add-product').find('select[name=select_product]')
                	const selectedQuantity = local.closest('.form-add-product').find('input[name=select_quantity]')
                    const selectedQuantityPrice = local.closest('.form-add-product').find('input[name=select_quantity_price]')
                	let input = {}
                	if(!selectedProduct.val()){
                		selectedProduct.closest('.bootstrap-select').addClass('form-error');
                		errCount++;
                	}
                	if(!selectedQuantity.val()){
                		selectedQuantity.addClass('form-error');
                		errCount++;
                	}

                	if(!errCount){
                		const product_id = selectedProduct.val();
                		const product_quantity = selectedQuantity.val();
                        const product_original_price = selectedQuantityPrice.val();
                		const product = utils.findObjectIndex(s.data.product, 'product_id', product_id);
                		if(product > -1){
                			const checkproduct = utils.findObjectIndex(s.data.purchase_order.selectedProduct, 'product_id', product_id);
                			if(checkproduct == -1){
                				input = s.data.product[product];
                				input.quantity = product_quantity;
                                input.original_price = product_original_price;
                				input.input_quantity = `<input type="number" value="${input.quantity}" data-id="${input.product_id}" name="selected-product-quantity" min=1 class="form-control custom-input" placeholder="Enter Size">`;
                                input.input_price = `<input type="number" value="${input.original_price}" data-id="${input.product_id}" required name="selected-product-price" min=1 class="form-control custom-input" placeholder="Enter Size">`;
                				input.nAction = `<a class="badge bg-warning mr-2 btn-remove" title="delete" href="javascript:void(0)">
                                                <i class="ri-delete-bin-line mr-0"></i>
                                            </a>`;
                				s.data.purchase_order.selectedProduct.push(input);
                				s.loadTable(s.data.purchase_order.selectedProduct);
                				selectedQuantity.val("");
                			}else{
                				utils.notify.setTitle("Error").setMessage("Product already selected").setType("danger").load();
                			}
                		}else{
                			utils.notify.setTitle("Error").setMessage("Product doesnt exist").setType("danger").load();
                		}
                	}
                })
                $('#product-table').on('change', 'input.custom-input', function(){
                	const local = $(this);
                	const id = local.data('id');
                    const name = local.attr("name");
                	let value = local.val()
                		value = value ? parseInt(value) : 0;
                	if(value <= 0){
                		local.val(1);
                	}
                	if(id){
                		const selectedProduct = utils.findObjectIndex(s.data.purchase_order.selectedProduct, 'product_id', id);
                		if(selectedProduct > -1){
                            if(name == 'selected-product-quantity'){
                                s.data.purchase_order.selectedProduct[selectedProduct].quantity = value;
                            }else if(name == 'selected-product-price'){
                                s.data.purchase_order.selectedProduct[selectedProduct].original_price = value;
                            }
                			
                		}else{
                			utils.notify.setTitle("Error").setMessage("Product doesnt exist").setType("danger").load();
                		}
                	}
                })
                $(s.table.main).on('click', 'tr td .btn-remove',  function() {
                	const local = $(this);
                	const tdata = s.datatable.main.row($(this.closest("tr"))).data();
                	const findProduct = utils.findObjectIndex(s.data.purchase_order.selectedProduct, 'product_id', tdata.product_id);
                	if(findProduct > -1){
                		s.data.purchase_order.selectedProduct.splice(findProduct, 1);
                		s.loadTable(s.data.purchase_order.selectedProduct);
                	}
                })
                $('.form-add-product').on('submit', function(e){
                	e.preventDefault();
                	const local = $(this);
            		const input = {};
                	const elemCount = local.find('.form-input').length;
                	if(s.data.purchase_order.selectedProduct.length){
                		if(local.hasClass('submitted')){
	                		utils.notify.setTitle("Notice").setMessage("Your request is being process please wait for a while!").setType("warning").load();
	                	}else{
	                		local.addClass("submitted");
	                		local.find('.form-input').each(function(i){
		                		const l = $(this);
		                		const name = l.attr('name');
		                		let value = l.val();
		                		if(name){
		                			input[name] = value;
		                		}else{
                                    console.log(name,value);
                                }
		                		if(i == (elemCount -1)){
		                			input.selectedProduct = s.data.purchase_order.selectedProduct;
		                			input.total_item = s.data.purchase_order.selectedProduct.length;
		                			input.status = "approved";
		                			const reviceSelectProduct = []
		                			for(let a = 0, count = input.selectedProduct.length; a < count; a++){
		                				const ldata = input.selectedProduct[a];
		                				reviceSelectProduct.push({
		                					brand: ldata.brand,
		                					category: ldata.category,
		                					product_design: ldata.product_design,
		                					product_id: ldata.product_id,
		                					quantity: ldata.quantity,
		                					product_name: ldata.product_name,
                                            original_price: ldata.original_price
		                				})
		                				if(a == (count -1)){
                                            console.log(input);
		                					input.selectedProduct = reviceSelectProduct;
		                					input.selectedProduct = JSON.stringify(input.selectedProduct);
			                				utils.request.set({data: input, url: '/api/inventory/add'}).send(function(res){
							    				if(res.status){
							    					utils.notify.setTitle("Success").setMessage(res.message).setType("primary").load();
							    					setTimeout(()=>{
							    						window.location.href = '/admin/inventory';
							    					}, 5000)
							    				}else{
							    					utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
							    					local.removeClass("submitted");
							    				}
							    			})
		                				}
		                			}
		                		}
		                	})
		                }
                	}else{
                		utils.notify.setTitle("Notice").setMessage("Please select atleast 1 product!").setType("warning").load();
                		local.removeClass("submitted");
                	}
                	
                })
            }
		}
		inventory.load();
	})
</script>