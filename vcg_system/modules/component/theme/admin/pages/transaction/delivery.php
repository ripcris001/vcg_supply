<!-- MultiStep stylesheet -->
<link href="<?php echo CUSTOMASSEST; ?>/plugin/multi-step/main.css" rel="stylesheet">

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Delivery List</h4>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive rounded col-md-12 pl-0">
            <table class="data-table table mb-0 tbl-server-info" id="brand-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>ID</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="modal fade" id="updateEntry" tabindex="-1" role="dialog" aria-labelledby="addBrand" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <form class="form-update-entry">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Delivery</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class=" col-sm-11  text-center p-0 mt-3 mb-2">
                                <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                    <h2><strong>Delivery Status</strong></h2>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 mx-0">
                                            <div id="msform">
                                                <!-- progressbar -->
                                                <ul class="p-0 d-flex justify-content-center ml-1 mr-1"
                                                    id="progressbar">
                                                    <li class="prg fa fa-box" id="placed">
                                                        <strong class="progressbar-icon-text">Product Placed</strong>
                                                    </li>
                                                    <li class="prg fa fa-truck-ramp-box" id="pick_up">
                                                        <strong class="progressbar-icon-text">Pick up by
                                                            courier</strong>
                                                    </li>
                                                    <li class="prg fa fa-truck" id="shipped">
                                                        <strong class="progressbar-icon-text">Product Shipped</strong>
                                                    </li>
                                                    <li class="prg fa fa-house" id="delivered">
                                                        <strong class="progressbar-icon-text">Delivered</strong>
                                                    </li>
                                                </ul>
                                                <!-- fieldsets -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="modal-form">
                            <div class="form-group">
                                <label for="email">Update Status</label>
                                <select class="form-control form-input" name="delivery_status">
                                    <option value="placed">Product Placed</option>
                                    <option value="pick_up">Pick up by
                                        courier</option>
                                    <option value="shipped">Product Shipped</option>
                                    <option value="delivered">Delivered</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Note:</label>
                                <textarea class="form-control form-input" name="note" col="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="email">Date:</label>
                                <input type="datetime-local" class="form-control form-input" name="date" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    // $('.data-table').DataTable();
    const transaction = {
        progress: ['placed', 'pick_up', 'shipped', 'delivered'],
        delivery: {
            id: null,
            data: {
                shipping: null,
                delivery_status: null
            }
        },
        datatable: {
            main: null
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
        reset: function() {
            const data = {
                id: null,
                data: {
                    shipping: null,
                    delivery_status: null
                }
            }
            this.delivery = data;
            $(this.modal.update).find('.prg').removeClass("active");
            return this;
        },
        loadTable: function() {
            if ($.fn.DataTable.isDataTable(this.table.main)) {
                $(this.table.main).DataTable().destroy();
            }
            const filter = {
                value: {
                    transaction_type: "delivery"
                }
            }
            filter.value = JSON.stringify(filter.value);
            this.datatable.main = $(this.table.main).DataTable({
                "processing": true,
                "serverSide": false,
                "searching": true,
                "paginate": true,
                "sort": true,
                "info": true,
                "ajax": {
                    url: "/api/transaction",
                    type: "post",
                    data: filter,
                    dataSrc: function(source) {
                        const arr = [];
                        const count = source.data && source.data.length ? source.data
                            .length : 0;
                        if (count) {
                            for (let a = 0; a < count; a++) {
                                const loopdata = source.data[a];
                                loopdata.customer = JSON.parse(loopdata.customer);
                                loopdata.shipping = JSON.parse(loopdata.shipping);
                                let createLoginAccount = "";
                                if (!loopdata.User_ID) {
                                    // createLoginAccount = `<a class="btn btn-secondary btn-create-login"> <i data-feather="plus-square"> </i>Create Login</a>`;
                                }
                                loopdata.overall_total = utils.currency(loopdata
                                    .overall_total);
                                loopdata.nAction = `
                                    <div class="text-center align-items-center">
                                        <a class="badge bg-info mr-2 tbl-action" data-action="update-status" href="javascript:void(0)">
                                            <i class="ri-eye-line mr-0"></i>
                                        </a>
                                    </div>`;
                                if (loopdata.delivery_status !== 'delivered') {
                                    arr.push(loopdata);
                                }
                                if (a == (count - 1)) {
                                    return arr;
                                }
                            }
                        } else {
                            return arr;
                        }
                    }
                },
                "columns": [{
                    "data": "transaction_id",
                    "className": "text-center",
                }, {
                    "data": "overall_total",
                    "className": "capitalize",
                }, {
                    "data": "transaction_type"
                }, {
                    "data": "date_created"
                }, {
                    "data": "nAction"
                }]
            });
        },
        event: function() {
            const __self = this;
            $('.add-brand').click(function() {
                $(__self.modal.add).modal("show");
            })
            $(__self.form.update).on('submit', function(e) {
                e.preventDefault();
                const form_input = $(this).find('.form-input');
                const input = {
                    note: ""
                }
                const count = form_input.length;
                form_input.each(function(i) {
                    const local = $(this);
                    const name = local.attr("name");
                    const value = local.val();
                    if (value) {
                        input[name] = value;
                    }
                    if (i == (count - 1)) {
                        const final = __self.delivery.data;
                        final.delivery_status = input.delivery_status;
                        final.shipping.delivery_progress.push(input);
                        final.shipping = JSON.stringify(final.shipping);
                        console.log("final", final);
                        if (Object.keys(final).length) {
                            const finaldata = {
                                condition: [
                                    ["id", '=', __self.delivery.id]
                                ],
                                data: final
                            }
                            utils.request.set({
                                data: finaldata,
                                url: "/api/transaction/update"
                            }).send(function(res) {
                                if (res.status) {
                                    utils.notify.setTitle("Success").setMessage(
                                            "Successfully update delivery status"
                                        )
                                        .setType("success").load();
                                    $(__self.form.add).trigger('reset');
                                    utils.modal.close(__self.modal.update);
                                    __self.reset();
                                    __self.loadTable();
                                } else {
                                    utils.notify.setTitle("Error").setMessage(
                                            res.message).setType("danger")
                                        .load();
                                }
                            })
                        } else {
                            utils.notify.setTitle("Error").setMessage("Test Error")
                                .setType("danger").load();
                        }
                    }
                })
            })
            $('table').on('click', 'tr td .tbl-action', function() {
                const local = $(this);
                const action = local.data('action');
                if (action == 'update-status') {
                    const tdata = __self.datatable.main.row(jQuery(this.closest("tr"))).data();
                    console.log(tdata);
                    __self.delivery.id = tdata.id;
                    __self.delivery.data.shipping = tdata.shipping;
                    __self.delivery.data.delivery_status = tdata.delivery_status;
                    if (__self.progress.indexOf(tdata.delivery_status) > -1) {
                        const index = __self.progress.indexOf(tdata.delivery_status);
                        $('#msform').find('.prg').each(function(i) {
                            const l = $(this);
                            const id = l.attr('id');
                            if (__self.progress[index] == id) {
                                l.addClass('active');
                                $(__self.form.update).find(
                                    `.form-input[name=delivery_status]`).find(
                                    `option[value=${id}]`).attr("disabled", true);
                                const nxtid = (index + 1);
                                $(__self.form.update).find(
                                    `.form-input[name=delivery_status]`).val(__self
                                    .progress[nxtid]).change();
                            }
                            if (i <= index) {
                                l.addClass('active');
                                $(__self.form.update).find(
                                    `.form-input[name=delivery_status]`).find(
                                    `option[value=${id}]`).attr("disabled", true);
                            }
                        })
                    }
                    utils.modal.open(__self.modal.update);
                }
            })
            $(__self.form.update).on('reset', function(e) {
                const local = $(this);
                local.find('select[name=delivery_status]').find('option').removeAttr(
                    "disabled");
                utils.modal.close(__self.modal.update);
                __self.reset();
            })

            $(__self.modal.update).on('hidden.bs.modal', function() {
                $(__self.form.update).trigger('reset');
            })
        }
    }
    transaction.load();
})
</script>