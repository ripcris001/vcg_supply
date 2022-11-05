<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Inventory Page</h4>
            </div>
            <a href="/admin/inventory/add" class="btn btn-primary"><i class="las la-plus mr-3"></i>Add
                Inventory</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive rounded col-md-12 pl-0">
            <table class="data-table table mb-0 tbl-server-info" id="brand-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>PO#</th>
                        <th>Total Item</th>
                        <th>Purchase Order Date</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="modal fade" id="addEntry" tabindex="-1" role="dialog" aria-labelledby="addBrand" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form class="form-add-entry">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add new brand</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Brand Name</label>
                            <input type="text" name="brand_name" class="form-control form-input" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="updateEntry" tabindex="-1" role="dialog" aria-labelledby="addBrand" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="email">Category Name</label>
                            <input type="email" class="form-control" id="email1">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        // $('.data-table').DataTable();
        const brand = {
            datatable:{
                main:null
            },
            table: {
                main: '#brand-table'
            },
            form: {
                add: '.form-add-entry',
                update: '.form-update-entry'
            },
            modal: {
                add: '#addEntry',
                update: '#updateEntry',
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
                        url: "/api/inventory",
                        type: "post",
                        dataSrc: function(source){
                            const arr = [];
                            const count = source.data && source.data.length ? source.data.length : 0;
                            if(count){
                                for(let a = 0; a < count; a++){
                                    const loopdata = source.data[a];
                                    let createLoginAccount = "";
                                    if(!loopdata.User_ID){
                                        // createLoginAccount = `<a class="btn btn-secondary btn-create-login"> <i data-feather="plus-square"> </i>Create Login</a>`;
                                    }
                                    loopdata.brand_id = `<div class="text-center">${loopdata.brand_id}</div>`;
                                    loopdata.nAction = `
                                        <a class="badge bg-info mr-2 btn-view-po" title="edit" href="javascript:void(0)">
                                            <i class="ri-eye-line mr-0"></i>
                                        </a>                                                  
                                    ${createLoginAccount}
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
                        "data": "po_number",
                        "className": "uppercase text-center",
                    },{
                        "data": "total_item"
                    },{
                        "data": "po_date"
                    },{
                        "data": "date_created"
                    },{
                        "data": "status"
                    },{
                        "data": "nAction",
                        "className": "text-center",
                    }]
                });
            },
            event: function(){
                const __self = this;
                $('.add-brand').click(function(){
                    $(__self.modal.add).modal("show");  
                })
                $(__self.form.add).on('submit', function(e){
                    e.preventDefault();
                    const form_input = $(this).find('.form-input');
                    const input = {}
                    const count = form_input.length;
                    form_input.each(function(i){
                        const local = $(this);
                        const name = local.attr("name");
                        const value = local.val();
                        if(value){
                            input[name] = value;
                        }
                        if(i == (count - 1)){
                            if(Object.keys(input).length){
                                utils.request.set({data: input, url: "/api/brand/add"}).send(function(res){
                                    if(res.status){
                                        utils.notify.setTitle("Success").setMessage("Successfully added new brand").setType("success").load();
                                        $(__self.form.add).trigger('reset');
                                        utils.modal.close(__self.modal.add);
                                        __self.loadTable();
                                    }else{
                                        utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
                                    }
                                })
                                
                            }else{
                                utils.notify.setTitle("Error").setMessage("Test Error").setType("danger").load();
                            }
                        }
                    })
                })
                 $(__self.table.main).on('click', 'tr td .btn-view-po',  function() {
                    const local = $(this);
                    const tdata = __self.datatable.main.row($(this.closest("tr"))).data();
                    window.location.href = `/admin/inventory/view?purchase_order=${tdata.id}`;
                })
            }
        }
        brand.load();
    })
</script>