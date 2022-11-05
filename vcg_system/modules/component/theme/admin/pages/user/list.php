<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">User List</h4>
            </div>
            <a href="javascript:void(0)" class="btn btn-primary add-brand"><i class="las la-plus mr-3"></i>Add
                User</a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive rounded col-md-12 pl-0">
            <table class="data-table table mb-0 tbl-server-info" id="brand-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Username</th>
                        <th>Name</th>
                        <th>Role</th>
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
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Username</label>
                            <input type="text" name="Username" class="form-control form-input" required placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Password</label>
                            <input type="text" name="Password" class="form-control form-input" required placeholder="Enter Oassword">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Confirm Password</label>
                            <input type="text" name="Confirm_Password" class="form-control form-input" required placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">First Name</label>
                            <input type="text" name="FirstName" class="form-control form-input" required placeholder="Enter Firstname">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Last Name</label>
                            <input type="text" name="LastName" class="form-control form-input" required placeholder="Enter Lastname ">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Roles</label>
                            <select name="user_role_index" class="form-control form-input role_list" id="role_list" data-style="py-0" ></select>  
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
                <form class="form-update-entry" data-id="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Update User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Username</label>
                            <input type="text" name="Username" class="form-control form-input" required placeholder="Enter Username">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Password</label>
                            <input type="text" name="Password" class="form-control form-input" placeholder="Enter Oassword">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Confirm Password</label>
                            <input type="text" name="Confirm_Password" class="form-control form-input" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">First Name</label>
                            <input type="text" name="FirstName" class="form-control form-input" required placeholder="Enter Firstname">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Last Name</label>
                            <input type="text" name="LastName" class="form-control form-input" required placeholder="Enter Lastname ">
                            </div>
                        </div>
                        <div class="modal-form">
                            <div class="form-group">
                            <label for="input_brand_name">Roles</label>
                            <select name="user_role_index" class="form-control form-input role_list" id="role_list_update" data-style="py-0" ></select>  
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
</div>
<script>
    $(document).ready(function(){
        // $('.data-table').DataTable();
        const brand = {
            data: {
                role: [
                    {name: 'Admin', role: 'admin' },
                    {name: 'Cashier', role: 'cashier' },
                    {name: 'Manager', role: 'manager' }
                ]
            },
            select:{
                role: null
            },
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
                this.loadSelect('#role_list');
                this.loadSelect('#role_list_update');
                
                return this;
            },
            loadSelect: function(param){
               const __self = this;
                __self.select.role = $(param).selectpicker({liveSearch: true});
                const roles = __self.data.role;
                let new_roles = '';
                if(roles.length){
                    for(let a = 0, count = roles.length; a < count; a++){
                        const l = roles[a];
                        new_roles += `<option value="${l.role}">${l.name}</option>`;
                        if(a == (count - 1)){
                            $(param).html(new_roles);
                            __self.select.role.selectpicker('refresh');
                        }
                    }
                }
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
                        url: "/api/users",
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
                                    loopdata.Fullname = `${loopdata.FirstName} ${loopdata.LastName}`
                                    loopdata.nAction = `
                                        <a class="badge bg-success mr-2 btn-table-action" title="edit" data-action="edit" href="javascript:void(0)">
                                            <i class="ri-pencil-line mr-0"></i>
                                        </a>
                                        
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
                        "data": "Username",
                        "className": "capitalize text-center",
                    },{
                        "data": "Fullname",
                        "className": "capitalize",
                    },{
                        "data": "user_role_index",
                        "className": "capitalize",
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
                    const password = $(this).find('input[name=Password]').val();
                    const confirm_password = $(this).find('input[name=Confirm_Password]').val();
                    const skipEntry = ['Confirm_Password'];
                    if(password != confirm_password){
                        utils.notify.setTitle("Error").setMessage("Password not match").setType("danger").load();
                    }else{
                        form_input.each(function(i){
                            const local = $(this);
                            const name = local.attr("name");
                            const value = local.val();
                            if(value && skipEntry.indexOf(name) == -1 ){
                                input[name] = value;
                            }
                            if(i == (count - 1)){
                                if(Object.keys(input).length){
                                    utils.request.set({data: input, url: "/api/users/add"}).send(function(res){
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
                    }
                })

                $(__self.table.main).on('click', 'tr td .btn-table-action', function(e){
                    const local = $(this);
                    const action = local.data('action');
                    const tdata = __self.datatable.main.row(jQuery(this.closest("tr"))).data();
                    const skipEntry = ['Password'];
                    $(__self.form.update).data('id', tdata.ID);
                    if(action == 'edit'){
                        const elemCount = $(__self.form.update).find('.form-input').length
                        $(__self.form.update).find('.form-input').each(function(i){
                            const l = $(this);
                            const name = l.attr('name');
                            if(skipEntry.indexOf(name) <= -1){
                                if(typeof tdata[name] !== 'undefined'){
                                    l.val(tdata[name]);
                                    l.attr('data-temp-value', tdata[name]);
                                }
                            }
                            if(i == (elemCount - 1)){
                                utils.modal.open(__self.modal.update);
                            }
                        })
                    }
                })

                $(__self.form.update).on('submit', function(e){
                    e.preventDefault();
                    const form_input = $(this).find('.form-input');
                    const input = {
                        data: {},
                        condition: []
                    }
                    const count = form_input.length;
                    const password = $(this).find('input[name=Password]').val();
                    const confirm_password = $(this).find('input[name=Confirm_Password]').val();
                    const skipEntry = ['Confirm_Password'];
                    const skipEntry2 = ['Password'];
                    const fid = $(this).data('id');
                    if(password && password != confirm_password){
                        utils.notify.setTitle("Error").setMessage("Password not match").setType("danger").load();
                    }else{
                        form_input.each(function(i){
                            const local = $(this);
                            const name = local.attr("name");
                            const value = local.val();
                            const curValue = local.data('temp-value');
                            if(typeof name !== 'undefined' && value != curValue && skipEntry.indexOf(name) == -1 ){
                                if(name == "Password" && password.length || name !== 'Password'){
                                     input.data[name] = value;
                                }
                               
                            }
                            if(i == (count - 1)){
                                if(Object.keys(input.data).length){
                                    input.condition = [["ID", '=', fid]];
                                    utils.request.set({data: input, url: "/api/users/update"}).send(function(res){
                                        if(res.status){
                                            utils.notify.setTitle("Success").setMessage("Successfully added new brand").setType("success").load();
                                            $(__self.form.update).trigger('reset');
                                            utils.modal.close(__self.modal.update);
                                            __self.loadTable();
                                        }else{
                                            utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
                                        }
                                    })
                                }else{
                                    $(__self.form.update).trigger('reset');
                                    utils.modal.close(__self.modal.update);
                                    utils.notify.setTitle("Error").setMessage("No update data").setType("danger").load();
                                }
                            }
                        })  
                    }
                })

                
            }
        }
        brand.load();
    })
</script>