<div class="row">                  
   <div class="col-lg-12">
      <div class="card card-block card-stretch card-height print rounded">
         <div class="card-header d-flex justify-content-between bg-primary header-invoice">
            <div class="iq-header-title">
               <h4 class="card-title mb-0">Tranaction # <span class="transaction-info" data-action="transaction_id"></span></h4>
            </div>
            <div class="invoice-btn">
               <button type="button" class="btn btn-primary-dark mr-2 btn-print"><i class="las la-print"></i> Print</button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-sm-12">                                  
                  <img src="<?php echo INFO_LOGO_2; ?>" class="logo-invoice img-fluid mb-3">
                  <h5 class="mb-0">Hello, <span class="customer-name">?</span></h5>
                  <p class="customer-note"></p>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="table-responsive-sm">
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">Order Date</th>
                              <th scope="col">Order Type</th>
                              <th scope="col">Order ID</th>
                              <th scope="col">Shipping Address</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="transaction-info" data-action="date_created"></td>
                              <td><span class="badge badge-danger transaction-info" data-action="transaction_type">Unpaid</span></td>
                              <td class="transaction-info" data-action="transaction_id"></td>
                              <td>
                                 <p class="mb-0 shipping-info">
                                 </p>
                              </td>
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
                              <th class="text-center" scope="col">Quantity</th>
                              <th class="text-center" scope="col">Price</th>
                              <th class="text-center" scope="col">Totals</th>
                           </tr>
                        </thead>
                        <tbody></tbody>
                     </table>
                  </div>
               </div>                              
            </div>
            <div class="row">
               <div class="col-sm-12 delivery-display">
                 
               </div>
            </div>
            <div class="row mt-4 mb-3">
               <div class="offset-lg-8 col-lg-4">
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
               </div>
            </div>                            
         </div>
      </div>
   </div>                                    
</div>
<script type="text/javascript">
   $(document).ready(function(){
      let transData = <?php print_r($data->transaction ? json_encode($data->transaction) : ""); ?>;
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
            transaction.customer = JSON.parse(transaction.customer)
            transaction.payment = JSON.parse(transaction.payment)
            transaction.shipping = JSON.parse(transaction.shipping)
            const find = $('.transaction-info');
            console.log(transaction);
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
                     local.html(transaction[action]);
                  }
               }else{
                  console.log(action,'?')
               }
            })
            $('.shipping-info').addClass('capitalize').html(`${transaction.shipping.shipping_id ? transaction.shipping.info.shipping_address : "#"}`);
            $('.customer-name').addClass('capitalize').html(`${transaction.customer.customer_id ? transaction.customer.info.customer_name : "Walk-in Customer"}`);
            if(transaction.transaction_type == "delivery"){
                $('.delivery-display').html(`<b class="text-danger">Delivery Notes:</b>
                  <p class="mb-0 delivery-note">${transaction.shipping.info.shipping_note}</p>`)
            }
           
            this.loadOrderSummary(transaction);
         },
         loadOrderSummary: function(data){
            const __self = this;
            let html = "";
            const selectedProduct = data.selectedProduct;
            if(selectedProduct.length){
               for(let a = 0, count = selectedProduct.length; a < count; a++){
                  const loopdata = selectedProduct[a];
                  loopdata.display = {
                     price: utils.currency(loopdata.transaction.price),
                     subtotal: utils.currency(loopdata.transaction.subtotal)
                  }

                  html += `
                     <tr>
                        <th class="text-center" scope="row">${a+1}</th>
                        <td>
                           <h6 class="mb-0">${loopdata.info.product_name}</h6>
                           <p class="mb-0"> ${loopdata.info.category} / ${loopdata.info.brand}
                           </p>
                        </td>
                        <td class="text-center">${loopdata.transaction.quantity}</td>
                        <td class="text-center currency">${loopdata.display.price}</td>
                        <td class="text-center currency"><b>${loopdata.display.subtotal}</b></td>
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