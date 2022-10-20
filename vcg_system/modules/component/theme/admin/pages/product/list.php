<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Product List</h4>
            </div>
            <a href="/admin/product/add" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add
                Purchase</a>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
            <table class="data-table table mb-0 tbl-server-info" id="product-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Size</th>
                        <th>Brand</th>
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
                return this;
            },
            loadTable: function() {
                if ($.fn.DataTable.isDataTable(this.table.main)) {
                    $(this.table.main).DataTable().destroy();
                }
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
                        dataSrc: function(source){
                            console.log(source);
                            const arr = [];
                            const count = source.data && source.data.length ? source.data.length : 0;
                            if(count){
                                for(let a = 0; a < count; a++){
                                    const loopdata = source.data[a];
                                    let createLoginAccount = "";
                                    loopdata.display_price = utils.currency(loopdata.product_price);
                                    loopdata.nAction = `
                                        <div class="d-flex">
                                            <a class="badge bg-success mr-2" title="edit" href="javascript:void(0)">
                                                <i class="ri-pencil-line mr-0"></i>
                                            </a>
                                            <a class="badge bg-warning mr-2" title="delete" href="javascript:void(0)">
                                                <i class="ri-delete-bin-line mr-0"></i>
                                            </a>
                                        </div>
                                    `;
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
                        "data": "product_name",
                        "className": 'uppercase'
                    },{
                        "data": "brand",
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
            }
        }
        product.load();
    })
</script>