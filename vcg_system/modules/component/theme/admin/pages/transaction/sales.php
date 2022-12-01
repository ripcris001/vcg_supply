<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Sales List</h4>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="table-responsive rounded col-md-12 pl-0">
            <table class="data-table table mb-0 tbl-server-info" id="brand-table">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>Date</th>
                        <th>Total Sales</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Total</th>
                        <th class="currency text-right"></th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
    // $('.data-table').DataTable();
    const transaction = {
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
        loadTable: function() {
            if ($.fn.DataTable.isDataTable(this.table.main)) {
                $(this.table.main).DataTable().destroy();
            }
            this.datatable.main = $(this.table.main).DataTable({
                "processing": true,
                "serverSide": false,
                "searching": true,
                "paginate": false,
                "sort": true,
                "info": true,
                "ajax": {
                    url: "/api/transaction/sales",
                    type: "post",
                    dataSrc: function(source) {
                        const arr = [];
                        const count = source.data && source.data.length ? source.data
                            .length : 0;
                        if (count) {
                            for (let a = 0; a < count; a++) {
                                const loopdata = source.data[a];
                                let createLoginAccount = "";
                                if (!loopdata.User_ID) {
                                    // createLoginAccount = `<a class="btn btn-secondary btn-create-login"> <i data-feather="plus-square"> </i>Create Login</a>`;
                                }
                                loopdata.overall_total = utils.currency(loopdata
                                    .overall);
                                loopdata.overall_total = `<span class="currency">${utils.currency(loopdata.overall ? loopdata
                                    .overall : 0)}</span>`;
                                loopdata.nAction = `
                                    No Action    
                                `;
                                arr.push(loopdata);
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
                    "data": "date_created",
                    "className": "text-left",
                }, {
                    "data": "overall_total",
                    "className": "text-right",
                }],
                footerCallback: function(row, data, start, end, display) {
                    var api = this.api();
                    const rowData = api.column(1).rows().data();
                    const count = rowData.length;
                    let totalAmount = 0;
                    if (rowData.length) {
                        for (let a = 0; a < count; a++) {
                            if (typeof rowData[a] !== 'undefined') {
                                const rad = rowData[a];
                                const amount = typeof rad.overall !== 'undefined' ?
                                    parseFloat(rad.overall) : 0;
                                totalAmount += amount;
                            }
                            if (a === (count - 1)) {
                                $(api.column(1).footer()).html(utils.currency(totalAmount));
                            }
                        }
                    }
                },
            });
        },
        event: function() {
            const __self = this;
            $('.add-brand').click(function() {
                $(__self.modal.add).modal("show");
            })
            // $('table').on('click', 'tr td .tbl-action', function() {
            //     const local = $(this);
            //     const action = local.data('action');
            //     if (action == 'view-transaction') {
            //         const tdata = __self.datatable.main.row(jQuery(this.closest("tr"))).data();
            //         console.log(tdata);
            //         window.location.href =
            //             `/admin/transaction/view?transaction=${tdata.transaction_id}`;
            //     }
            // })
        }
    }
    transaction.load();
})
</script>