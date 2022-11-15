<div class="row">                  
   <div class="col-lg-12">
      <div class="card card-block card-stretch card-height print rounded">
         <div class="card-header d-flex justify-content-between bg-primary header-invoice">
            <div class="iq-header-title">
               <h4 class="card-title mb-0">Purchase Order # <span class="transaction-info" data-action="po_number"></span></h4>
            </div>
            <div class="invoice-btn">
               <!-- <button type="button" class="btn btn-primary-dark mr-2 btn-print"><i class="las la-print"></i> Print</button> -->
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-sm-12">                                  
                  <img src="<?php echo INFO_LOGO_2; ?>" class="logo-invoice img-fluid mb-3">
                  
                  <p class="customer-note"></p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="table-responsive-sm">
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">Date Created</th>
                              <th scope="col">Purchase Date</th>
                              <th scope="col">Total Item</th>
                              <th scope="col">Status</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="transaction-info" data-action="date_created"></td>
                              <td class="transaction-info" data-action="po_date"></td>
                              <td class="transaction-info" data-action="total_item"></td>
                              <td><span class="badge badge-danger transaction-info" data-action="status">Unpaid</span></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <h5 class="mb-3">Order Summary</h5>
                  <div class="table-responsive-sm">
                     <table class="table product-list">
                        <thead>
                           <tr>
                              <th class="text-center" scope="col">#</th>
                              <th scope="col">Item</th>
                              <th class="text-center" scope="col">Original Price</th>
                              <th class="text-center" scope="col">Brand</th>
                              <th class="text-center" scope="col">Category</th>
                              <th class="text-center" scope="col">Quantity</th>
                           </tr>
                        </thead>
                        <tbody></tbody>
                     </table>
                  </div>
               </div>                              
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <b class="text-danger">Notes:</b>
                  <p class="mb-0 transaction-info" data-action="note"></p>
               </div>
            </div>
            <div class="row mt-4 mb-3">
               <!-- <div class="offset-lg-8 col-lg-4">
                  <div class="or-detail rounded">
                     <div class="p-3">
                        <h5 class="mb-3">Order Details</h5>
                        <div class="mb-2">
                           <h6>Total Item</h6>
                           <p class="transaction-info"  data-action="total_item">0</p>
                        </div>
                        <div class="mb-2">
                           <h6>Date</h6>
                           <p>12 August 2020</p>
                        </div>
                        <div class="mb-2">
                           <h6>Sub Total</h6>
                           <p class="transaction-info" data-action="sub_total">0.00</p>
                        </div>
                        <div class="mb-2">
                           <h6>Shipping Fee</h6>
                           <p class="transaction-info" data-action="shipping_cost">0.00</p>
                        </div>
                        <div>
                           <h6>Discount</h6>
                           <p><span class="transaction-info" data-action="discount">0</span>%</p>
                        </div>
                     </div>
                     <div class="ttl-amt py-2 px-3 d-flex justify-content-between align-items-center">
                        <h6>Total</h6>
                        <h3 class="text-primary font-weight-700 transaction-info" data-action="overall_total">0.00</h3>
                     </div>
                  </div>
               </div> -->
            </div>                            
         </div>
      </div>
   </div>                                    
</div>
<script type="text/javascript">
   $(document).ready(function(){
      let transData = <?php print_r($data->purchase_order ? json_encode($data->purchase_order) : ""); ?>;
         transData =  JSON.parse(transData);
      const transaction = {
         data: [],
         init: function(){
            this.event();
            this.loadSummary();
            return this;
         },
         setData: function(data){
            if(data && Object.keys(data).length){
               data.selectedProduct = JSON.parse(data.selectedProduct);
               this.data = data ? data : [];
            }
            return this;
         },
         loadSummary: function(){
            const __self = this;
            const transaction = __self.data;
            // transaction.customer = JSON.parse(transaction.customer)
            // transaction.payment = JSON.parse(transaction.payment)
            // transaction.shipping = JSON.parse(transaction.shipping)
            const find = $('.transaction-info');
            const currencyData = ['overall_total', 'discount_amount', 'sub_total', 'shipping_cost', 'cash_payment', 'amount_payed']
            find.each(function(i){
               const local = $(this);
               const action = local.data('action');
               const value = transaction[action];
               console.log(action, value);
               if(Object.keys(transaction).indexOf(action) > -1){
                  if(currencyData.indexOf(action) > -1){
                     local.addClass('currency').html(utils.currency(transaction[action]));
                  }else{
                     if(action == 'note'){
                        local.html(transaction[action] && transaction[action].length ? transaction[action] : "No notes.");
                     }else{
                        local.html(transaction[action]);
                     }
                  }
               }else{
                  console.log(action,'?')
               }
            })
            this.loadOrderSummary(transaction);
         },
         loadOrderSummary: function(data){
            const __self = this;
            let html = "";
            const selectedProduct = data.selectedProduct;
            if(selectedProduct.length){
               for(let a = 0, count = selectedProduct.length; a < count; a++){
                  const loopdata = selectedProduct[a];
                  console.log(loopdata);
         
                  html += `
                     <tr>
                        <th class="text-center" scope="row">${a+1}</th>
                        <td>
                           <h6 class="mb-0">${loopdata.product_name}</h6>
                          
                        </td>
                        <td class="text-center currency">${utils.currency(loopdata.original_price ? loopdata.original_price : 0)}</td>
                        <td class="text-center capitalize">${loopdata.category}</td>
                        <td class="text-center capitalize">${loopdata.brand}</td>
                        <td class="text-center capitalize"><b>${loopdata.quantity}</b></td>
                     </tr>
                  `;

                  if(a == (count - 1)){
                     $('.product-list').find('tbody').html(html);
                  }
               }
            }
            console.log(selectedProduct)
         },
         event: function(){
            const s = this;
            $('.btn-print').click(function(){
               const data = s.data;
               console.log('data',data);
               window.open(`/pos/print/transaction?transaction_id=${data.transaction_id}`, '_blank', 'location=yes,height=700,width=1000,scrollbars=yes,status=yes')
            })
         }
      }
      transaction.setData(transData).init();
   })
</script>