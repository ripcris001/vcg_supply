<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Product Inventory List</h4>
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div class="col-md-3 pl-0">
                <div class="form-group">
                    <select name="product_category" id="product_category" class="form-control product_category select-product-filter" data-style="py-0" ></select> 
                </div> 
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
            <table class="data-table table mb-0 tbl-server-info" id="product-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>ID</th>
                        <th>Size</th>
                        <th>Brand</th>
                        <th>Remaining qty.</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('.data-table').DataTable();
        const product = {
            filter: {
                value:{
                     category: null
                }
            },
            datatable:{
                main:null
            },
            table: {
                main: '#product-table'
            },
            form: {
                addRewardForm: '.addRewardForm',
                restockForm: '.restockForm',
                updateForm: '.updateForm'
            },
            modal: {
                addReward: '#addReward',
                restockModal: '#restockModal',
                updateModal: '#updateModal'
            },
            load: function() {
                this.loadTable();
                this.event();
                this.getCategory();
                return this;
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
            loadTable: function() {
                if ($.fn.DataTable.isDataTable(this.table.main)) {
                    $(this.table.main).DataTable().destroy();
                }
                const filter =  {};
                filter.value = JSON.stringify(this.filter.value);
                this.datatable.main = $(this.table.main).DataTable({
                    "processing": true,
                    "serverSide": false,
                    "searching": true,
                    "paginate": true,
                    "sort": true,
                    "info": true,
                    "ajax": {
                        url: "/api/product",
                        type: "post",
                        data: filter,
                        dataSrc: function(source){
                            const arr = [];
                            const count = source.data && source.data.length ? source.data.length : 0;
                            if(count){
                                for(let a = 0; a < count; a++){
                                    const loopdata = source.data[a];
                                    let createLoginAccount = "";
                                    loopdata.display_price = utils.currency(loopdata.product_price);
                                    loopdata.nAction = "No action";
                                    // loopdata.nAction = `
                                    //     <div class="d-flex">
                                    //         <a class="badge bg-success mr-2" title="edit" href="javascript:void(0)">
                                    //             <i class="ri-pencil-line mr-0"></i>
                                    //         </a>
                                    //         <a class="badge bg-warning mr-2" title="delete" href="javascript:void(0)">
                                    //             <i class="ri-delete-bin-line mr-0"></i>
                                    //         </a>
                                    //     </div>
                                    // `;
                                    arr.push(loopdata);
                                    if(a == (count -1)){
                                        return arr;
                                    }
                                }
                            }else{
                                return arr;
                            }
                        }
                    },
                    "columns": [{
                        "data": "product_id"
                    },{
                        "data": "product_name",
                        "className": 'uppercase'
                    },{
                        "data": "brand",
                        "className": 'uppercase'
                    },{
                        "data": "remaining_stock",
                        "className": 'uppercase'
                    },{
                        "data": "category",
                        "className": 'uppercase'
                    },{
                        "data": "display_price",
                        "className": 'currency'
                    },{
                        "data": "nAction",
                        "className": "text-center"
                    }]
                });
            },
            event: function(){
                const __self = this;
                $('.select-product-filter').on('change', function(){
                    const local = $(this);
                    const value = local.val()
                    __self.filter.value.category = value;
                    __self.loadTable();
                })
            }
        }
        product.load();
    })
</script>