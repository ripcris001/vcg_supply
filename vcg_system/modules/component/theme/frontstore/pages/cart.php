<section class="cart-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <form>
                    <div class="cart-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody class="cart-body">
                                <tr>
                                    <td class="product-thumbnail" colspan="5">
                                        <center>Cart is Empty</center>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart-buttons">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-sm-7 col-md-7">

                            </div>
                            <div class="col-lg-5 col-sm-5 col-md-5 text-right">
                                <a href="javascript:void(0)" class="default-btn btn-update">
                                    Update Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="cart-totals">
                    <h3>Cart Totals</h3>
                    <ul>
                        <li>Subtotal <span class="summary-data currency subtotal" data-action="subtotal">0.00</span>
                        </li>
                        <li>Shipping <span class="summary-data currency shipping" data-action="shipping">0.00</span>
                        </li>
                        <li>Total <span class="summary-data currency total" data-action="total">0.00</span></li>
                        <li>Payable Total <span class="summary-data currency total" data-action="payable">0.00</span>
                        </li>
                    </ul>
                    <a href="#" class="default-btn btn-checkout">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(document).ready(function() {
    const isCart = <?php isset($data->cart) ? print(1) : print(0); ?>;
    const cartObj = {
        cart: {},
        init: function() {
            this.genCart();
            this.event();
            this.loadSummary();
            return this;
        },
        loadSummary: function() {
            const s = this;
            const data = s.cart.product_list;
            const summary = {
                total: 0,
                subtotal: 0,
                shipping: 0,
                payable: 0
            }
            if (isCart) {
                const count = data.length;
                if (count) {
                    for (let a = 0; a < count; a++) {
                        const local = data[a];
                        summary.subtotal += parseFloat(local.transaction.subtotal);
                    }
                }
            }
            summary.payable = summary.total;
            summary.total = summary.subtotal - summary.shipping;
            Object.keys(summary).forEach(key => {
                const value = summary[key];
                $('.cart-totals').find(`.summary-data.${key}`).html(utils.currency(value));
            });
        },
        genCart: function() {
            let html = "";
            if (isCart) {
                const cartdata = this.cart.product_list;
                if (cartdata.length) {
                    for (let a = 0, count = cartdata.length; a < count; a++) {
                        const local = cartdata[a];
                        html += `
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#" class="remove" data-id="${local.product_id}"><i class="bx bx-x"></i></a>
                                <a href="#">
                                    <img src="<?php echo $theme->assetPath; ?>/img/shop/blank.png" alt="item">
                                </a>
                            </td>
                            <td class="product-name">
                                <a href="products-details.html">${local.info.product_name}</a>
                            </td>
                            <td class="product-price">
                                <span class="unit-amount currency">${utils.currency(local.info.product_price)}</span>
                            </td>
                            <td class="product-quantity">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class="bx bx-minus"></i></span>
                                    <input type="text" value="${local.transaction.quantity}" data-product-id="${local.product_id}">
                                    <span class="plus-btn"><i class="bx bx-plus"></i></span>
                                </div>
                            </td>
                            <td class="product-subtotal">
                                <span class="subtotal-amount currency">${utils.currency(local.transaction.subtotal)}</span>
                            </td>
                        </tr>`;
                        if (a == (count - 1)) {
                            $('.table').find('.cart-body').html(html);
                        }
                    }
                }
            }

        },
        event: function() {
            const s = this;
            $('.table').find('.product-quantity').on('click', '.bx-minus', function() {
                const prodl = s.cart.product_list;
                const input = $(this).closest('.input-counter').find('input');
                let value = input.val();
                const prod = input.data('product-id');
                value = parseInt(value);
                if (value > 0) {
                    value = value - 1;
                    input.val(value).change();
                    const idx = utils.findObjectIndex(prodl, 'product_id', prod);
                    if (idx > -1) {
                        const proddata = prodl[idx];
                        s.cart.product_list[idx].transaction.quantity = value;
                        s.cart.product_list[idx].transaction.subtotal = parseFloat(s.cart
                                .product_list[idx].transaction.price) * s.cart.product_list[idx]
                            .transaction.quantity;
                    }
                } else {
                    input.val(0);
                }
                s.loadSummary()
            })
            $('.table').find('.product-quantity').on('click', '.bx-plus', function() {
                const prodl = s.cart.product_list;
                const input = $(this).closest('.input-counter').find('input');
                let value = input.val();
                const prod = input.data('product-id');
                value = parseInt(value);
                if (value >= 0) {
                    value = value + 1;
                    input.val(value);
                    const idx = utils.findObjectIndex(prodl, 'product_id', prod);
                    if (idx > -1) {
                        const proddata = prodl[idx];
                        s.cart.product_list[idx].transaction.quantity = value;
                        s.cart.product_list[idx].transaction.subtotal = parseFloat(s.cart
                                .product_list[idx].transaction.price) * s.cart.product_list[idx]
                            .transaction.quantity;
                    }
                } else {
                    input.val(0);
                }
                s.loadSummary()
            })
            $('.btn-update').on('click', function() {
                const data = s.cart;
                if (isCart) {
                    const cart_id = data.cart_id;
                    const final = {
                        cart_status: data.cart_status,
                        product_list: data.product_list
                    }
                    final.product_list = JSON.stringify(final.product_list);
                    if (Object.keys(final).length) {
                        const finaldata = {
                            condition: [
                                ["cart_id", '=', cart_id]
                            ],
                            data: final
                        }
                        utils.request.set({
                            data: finaldata,
                            url: "/api/product/updatetocart"
                        }).send(function(res) {
                            if (res.status) {
                                utils.notify.setTitle("Success").setMessage(
                                        "Successfully update cart"
                                    )
                                    .setType("success").load();
                                window.location.reload();
                            } else {
                                utils.notify.setTitle("Error").setMessage(
                                        res.message).setType("danger")
                                    .load();
                            }
                        })
                    }
                } else {
                    utils.notify.setTitle("Error").setMessage("Cart is empty").setType("danger")
                        .load();
                }
            })

            $('.btn-checkout').on('click', function() {
                const data = s.cart;
                if (isCart) {
                    const cart_id = data.cart_id;
                    const final = {
                        cart_status: "processing",
                    }
                    final.product_list = JSON.stringify(final.product_list);
                    if (Object.keys(final).length) {
                        const finaldata = {
                            condition: [
                                ["cart_id", '=', cart_id]
                            ],
                            data: final
                        }
                        utils.request.set({
                            data: finaldata,
                            url: "/api/product/updatetocart"
                        }).send(function(res) {
                            if (res.status) {
                                utils.notify.setTitle("Success").setMessage(
                                        "Successfully update cart"
                                    )
                                    .setType("success").load();
                                window.location.reload();
                            } else {
                                utils.notify.setTitle("Error").setMessage(
                                        res.message).setType("danger")
                                    .load();
                            }
                        })
                    }
                } else {
                    utils.notify.setTitle("Error").setMessage("Cart is empty").setType("danger")
                        .load();
                }
            })

        }
    }
    if (isCart) {
        const cartData = <?php print_r(isset($data->cart) ? json_encode($data->cart) : 0); ?>;
        if (cartData !== 0) {
            cartData.product_list = JSON.parse(cartData.product_list);
            cartObj.cart = cartData;
        }
    }

    cartObj.init();

})
</script>