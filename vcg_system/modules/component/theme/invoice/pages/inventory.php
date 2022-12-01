<div class="invoice-container">
    <main>
        <div class="as-invoice invoice_style14">
            <div class="download-inner" id="download_section">
                <header class="as-header header-layout10">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="javascript:void(0)">
                                    <img src="<?php echo INFO_LOGO_2; ?>" alt="VCG Tire Supply">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <h1 class="big-title">Purchase order</h1>
                            <span class="transaction-po_number">
                                <b>Purchase #: </b>
                            </span>
                            <span class="transaction-date">
                                <b>Date: </b>
                            </span>
                        </div>
                    </div>
                </header>
                <div class="address-bg1 mt-4">
                    <div class="row gx-0 justify-content-between">
                        <div class="col-6">
                            <div class="invoice-left border-right">
                                <b>Supplier:</b>
                                <address class="po_supplier">

                                </address>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="invoice-right">
                                <b>VCG Tire Supply:</b>
                                <address>
                                    <?php echo INFO_ADDRESS; ?><br>
                                    <?php echo INFO_EMAIL; ?><br>
                                    <?php echo INFO_TELE_CONTACT_NUMBER; ?>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between my-4">
                    <div class="col-6">
                        <div class="text-start">
                            <b>Order Date:</b>
                            <br>
                            <span class="transaction-info" data-action="date_created"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="text-end">
                            <b>Transaction Type:</b>
                            <br>
                            <span class="transaction-type"></span>
                        </div>
                    </div>
                </div>
                <table class="invoice-table table-stripe3 product-list">
                    <thead>
                        <tr>
                            <th>Product Name.</th>
                            <th>Product Description</th>
                            <th>Original Price</th>
                            <th>Qty</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
                <div class="row justify-content-between">
                    <div class="col-auto delivery-address">

                    </div>
                    <div class="col-auto">
                        <table class="total-table">
                            <tr>
                                <th>Sub Total:</th>
                                <td class="transaction-info currency" data-action="sub_total">0.00</td>
                            </tr>
                            <tr>
                                <th>Discount:</th>
                                <td class="transaction-info currency" data-action="discount_amount">0.00</td>
                            </tr>
                            <tr>
                                <th>Shipping Fee:</th>
                                <td class="transaction-info currency" data-action="shipping_cost">0.00</td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td class="transaction-info currency" data-action="overall_total">0.00</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <p class="company-address style2">
                    <b>
                        VCG Titre Supply:</b>
                    <br>
                    <?php  echo INFO_ADDRESS; ?>
                </p>
                <p class="invoice-note mt-3">
                    <svg width="13" height="16" viewBox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.22969 12.6H9.77031V11.4H3.22969V12.6ZM3.22969 9.2H9.77031V8H3.22969V9.2ZM1.21875 16C0.89375 16 0.609375 15.88 0.365625 15.64C0.121875 15.4 0 15.12 0 14.8V1.2C0 0.88 0.121875 0.6 0.365625 0.36C0.609375 0.12 0.89375 0 1.21875 0H8.55156L13 4.38V14.8C13 15.12 12.8781 15.4 12.6344 15.64C12.3906 15.88 12.1063 16 11.7812 16H1.21875ZM7.94219 4.92V1.2H1.21875V14.8H11.7812V4.92H7.94219ZM1.21875 1.2V4.92V1.2V14.8V1.2Z"
                            fill="#1CB9C8" />
                    </svg>
                    <b>
                        NOTE: </b>
                    This is computer generated receipt and does not require physical signature.
                </p>
                <div class="footer-info">
                    <div class="row gx-0 justify-content-center">
                        <div class="col-auto">
                            <span class="info left">
                                Call: <?php  echo INFO_TELE_CONTACT_NUMBER; ?></span>
                        </div>
                        <div class="col-auto">
                            <span class="info right">
                                <?php  echo INFO_WEBSITE; ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<script type="text/javascript">
$(document).ready(function() {
    let transData = <?php print_r($data->purchase_order ? json_encode($data->purchase_order) : ""); ?>;

    if (typeof transData.customer === 'string') {
        transData.customer = JSON.parse(transData.customer);
    }
    if (typeof transData.payment === 'string') {
        transData.payment = JSON.parse(transData.payment);
    }
    if (typeof transData.shipping === 'string') {
        transData.shipping = JSON.parse(transData.shipping);
    }

    const transaction = {
        data: [],
        init: function() {
            this.loadSummary();
            return this;
        },
        setData: function(data) {
            console.log(data);
            if (data && Object.keys(data).length) {
                data.selectedProduct = JSON.parse(data.selectedProduct);
                this.data = data ? data : [];
            }
            return this;
        },
        loadSummary: function() {
            const __self = this;
            const transaction = __self.data;
            transaction.customer = (typeof transaction.customer === 'string') ? JSON.parse(transaction
                .customer) : transaction.customer;
            transaction.payment = (typeof transaction.payment === 'string') ? JSON.parse(transaction
                    .payment) : transaction
                .payment
            transaction.shipping = (typeof transaction.shipping === 'string') ? JSON.parse(transaction
                    .shipping) : transaction
                .shipping
            const find = $('.transaction-info');
            console.log(transaction);
            const currencyData = ['overall_total', 'discount_amount', 'sub_total', 'shipping_cost',
                'cash_payment', 'amount_payed'
            ]
            find.each(function(i) {
                const local = $(this);
                const action = local.data('action');
                const value = transaction[action];
                console.log(action, value);
                if (Object.keys(transaction).indexOf(action) > -1) {
                    if (currencyData.indexOf(action) > -1) {
                        local.addClass('currency').html(utils.currency(transaction[action]));
                    } else {
                        local.html(transaction[action]);
                    }
                } else {
                    console.log(action, '?')
                }
            })
            $('.transaction-type').addClass('capitalize').html(
                `${transaction.po_number ? transaction.po_number.toUpperCase(): "#"}`);
            $('.transaction-po_number').html(
                `<b>Purchase #: </b>${transaction.po_number ? transaction.po_number.toUpperCase(): "#"}`
            );
            $('.transaction-date').html(`<b>Date: </b>${transaction.date_created}`);
            $('.shipping-info').addClass('capitalize').html(
                `${"#"}`
            );
            $('.delivery-note').addClass('capitalize').html(
                `${"#"}`
            );
            $('.customer-name').addClass('capitalize').html(
                `${"Walk-in Customer"}`
            );

            let customer_info = ``;
            let delivery_info = ``;

            customer_info = `
            		${transaction.po_supplier}<br><br><br><br>
            	`


            $('.delivery-address').html(delivery_info);
            $('.po_supplier').addClass('capitalize').html(customer_info);
            this.loadOrderSummary(transaction);
            this.print();
        },
        loadOrderSummary: function(data) {
            const __self = this;
            let html = "";
            const selectedProduct = data.selectedProduct;
            if (selectedProduct.length) {
                let overallTotal = 0;
                for (let a = 0, count = selectedProduct.length; a < count; a++) {
                    const loopdata = selectedProduct[a];
                    loopdata.original_price = loopdata.original_price ? parseFloat(loopdata
                        .original_price) : 0;
                    loopdata.quantity = loopdata.quantity ? parseInt(loopdata.quantity) : 0;
                    loopdata.display = {
                        price: utils.currency(loopdata.original_price),
                        subtotal: loopdata.original_price * loopdata.quantity
                    }
                    overallTotal += loopdata.display.subtotal;
                    html += `
                  	<tr>
						<td>${loopdata.product_name}</td>
						<td>${loopdata.category} / ${loopdata.brand}</td>
						<td class="currency">${utils.currency(loopdata.display.price)}</td>
						<td>${loopdata.quantity}</td>
						<td class="currency">${utils.currency(loopdata.display.subtotal)}</td>
					</tr>
                  `;

                    if (a == (count - 1)) {
                        $('.product-list').find('tbody').html(html);
                        $('.transaction-info[data-action=sub_total]').html(utils.currency(
                            overallTotal));
                        $('.transaction-info[data-action=overall_total]').html(utils.currency(
                            overallTotal));
                    }
                }
            }
        },
        print: function() {
            window.onafterprint = window.close;
            window.print();
        }
    }
    transaction.setData(transData).init();
})
</script>