<div class="row">
    <div class="col-lg-12">
        <div class="d-flex flex-wrap align-items-center justify-content-between mb-4">
            <div>
                <h4 class="mb-3">Purchase List</h4>
            </div>
            <!-- <a href="page-add-purchase.html" class="btn btn-primary add-list"><i class="las la-plus mr-3"></i>Add
                Purchase</a> -->
        </div>
    </div>
    <div class="col-lg-12">
        <div class="table-responsive rounded mb-3">
            <table class="data-table table mb-0 tbl-server-info">
                <thead class="bg-white text-uppercase">
                    <tr class="ligth ligth-data">
                        <th>
                            <div class="checkbox d-inline-block">
                                <input type="checkbox" class="checkbox-input" id="checkbox1">
                                <label for="checkbox1" class="mb-0"></label>
                            </div>
                        </th>
                        <th>Date</th>
                        <th>Reference No</th>
                        <th>Supplier</th>
                        <th>Purchase Status</th>
                        <th>Total</th>
                        <th>Paid</th>
                        <th>Balance</th>
                        <th>Payment Status</th>
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
        // /api/product/list
    })
</script>