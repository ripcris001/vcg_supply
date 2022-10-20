<div class="contentPOS">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 order-xl-first order-last">

				<div class="card card-custom gutter-b bg-white border-0">
					<div class="card-body">
						<div class="col-md-12 mb-2 pl-0 pr-0">
							<form class="form-product-search">
								<label >Select Product</label>
								<label class="float-right"><a class="reset-search cursor-pointer">Reset</a></label>
								<fieldset class="form-group mb-0 d-flex barcodeselection">
									<select class="form-control w-25 input-search-option">
										<option value="product_barcode">Barcode</option>
										<option value="product_code">Code</option>
										<option value="product_name">Size</option>
										<option value="product_price">Price</option>
									</select>
									<input type="text" class="form-control border-dark input-search" placeholder="">
								</fieldset>
							</form>
						</div>
						<div class="d-flex justify-content-between colorfull-select">
							<div class="selectmain">
								<select class="brand-option w-150px bag-primary">
									<option disabled selected>Brand Option</option>
								</select>
							</div>
							<div class="selectmain">
								<select class="category-option w-150px bag-secondary">
									<option disabled selected>Category Option</option>
								</select>
							</div>
						</div>
					</div>	
					<div class="product-items">
						<div class="row product-item-entry">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-8 col-md-8">
				<div class="">
					<div class="card card-custom gutter-b bg-white border-0 table-contentpos">
						<div class="card-body">
							<div class="d-flex justify-content-between colorfull-select">
								<div class="selectmain">
									<label class="text-dark d-flex" >Choose a Customer 
										<span class="badge badge-secondary white rounded-circle"  data-toggle="modal" data-target="#choosecustomer">
											<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_122" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
												<g>
													<rect x="234.362" y="128" width="43.263" height="256"></rect>
													<rect x="128" y="234.375" width="256" height="43.25"></rect>
												</g>
											</svg>
										</span>

									</label>
									<select class="arabic-select select-down">
										<option value="1">walk in customer</option>
									</select>
								</div>
								<div class="d-flex flex-column selectmain">
									<label class="text-dark d-flex" >Shipping Address  
										<span class="badge badge-secondary white rounded-circle"  data-toggle="modal" data-target="#shippingpop">
											<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_21" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
												<g>
													<rect x="234.362" y="128" width="43.263" height="256"></rect>
													<rect x="128" y="234.375" width="256" height="43.25"></rect>
												</g>
											</svg>
										</span>
									</label>
									<select class="arabic-select select-down">
										<option value="1">Men's</option>
										<option value="2">Accessories</option>
									</select>
								</div>
							</div>
						</div>	
					</div>
					<div class="card card-custom gutter-b bg-white border-0 table-contentpos">
						<div class="card-body pb-0" >
							<div class="form-group row mb-0">
								<div class="col-md-12 pb-0">
									<label>Selected Product</label>
								</div>
							</div>
						</div>	
						<div class="table-datapos">
							<div class="table-responsive" id="printableTable">
								<table id="selected-product-table" class="display" style="width:100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Quantity</th>
											<th>Price</th>
											<th>Discount</th>
											<th>Subtotal</th>
											<th class=" text-right no-sort"></th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
						<div class="card-body" >
							<div class="form-group row mb-0">
								<div class="col-md-12 btn-submit d-flex justify-content-end">
									<button type="submit" class="btn btn-danger mr-2 confirm-delete" title="Delete">
										<i class="fas fa-trash-alt mr-2"></i>
										Suspand/Cancel
									</button>
									<button type="submit" class="btn btn-secondary white">
										<svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-folder-fill svg-sm mr-2" viewBox="0 0 16 16">
											<path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
										</svg>
										Draft Order
									</button>
								</div>
							</div>	
						</div>
					</div>	
				</div>	
			</div>
			<div class="col-xl-3 col-lg-4 col-md-4 transaction-summary">
				<div class="card card-custom gutter-b bg-white border-0">
					<div class="card-body" >
						<div class="shop-profile">
							<div class="media">
								<div class="bg-primary w-100px h-100px d-flex justify-content-center align-items-center">
									<h2 class="mb-0 white">VCG</h2>
								</div>
								<div class="media-body ml-3">
									<h3 class="title font-weight-bold"><?php  echo WEB_TITLE; ?></h3>
									<p class="phoonenumber">
										<?php  echo INFO_CONTACT_NUMBER; ?>
									</p>
									<p class="adddress">
										<?php  echo INFO_ADDRESS; ?>
									</p>
									<p class="countryname"></p>
								</div>
							</div>
						</div>
						<div class="resulttable-pos  mb-0 pb-0">
							<table class="table right-table">
								<tbody>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Total Items
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_total_item transaction_entry pb-0">0</td>

									</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Subtotal
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_sub_total transaction_entry currency pb-0">0</td>

									</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 pb-0">
											<div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
												DISCOUNT OVERALL(%)
												<span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#discountpop">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_31" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
														<g>
															<rect x="234.362" y="128" width="43.263" height="256"></rect>
															<rect x="128" y="234.375" width="256" height="43.25"></rect>
														</g>
													</svg>
												</span>
											</div>
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base"><span class="transaction_entry transaction_discount pb-0">0</span>%</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Discount Amount
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_entry transaction_discount_amount currency pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Additional Discount
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_entry transaction_additional_discount currency pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 pb-0">
											<div class="d-flex align-items-center font-size-h5 mb-0 font-size-bold text-dark">
												Shipping Cost
												<span class="badge badge-secondary white rounded-circle ml-2"  data-toggle="modal" data-target="#shippingcost">
													<svg xmlns="http://www.w3.org/2000/svg" class="svg-sm" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_11" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
														<g>
															<rect x="234.362" y="128" width="43.263" height="256"></rect>
															<rect x="128" y="234.375" width="256" height="43.25"></rect>
														</g>
													</svg>
												</span>
											</div>
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base text-primary font-size-base transaction_entry transaction_shipping_cost currency pb-0">0</td>
								</tr>
									<tr class="d-flex align-items-center justify-content-between">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Taxable Sale
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_entry transaction_taxable currency pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between seperator">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-dark pb-0">
											Tax(<span class="vat-percentage">0</span>%)
										</th>
										<td class="border-0 justify-content-end d-flex text-dark font-size-base transaction_entry transaction_tax currency">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between item-price ">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary  pb-0">
											Cash Payment
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base transaction_entry transaction_cash_payment currency  pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between item-price seperator">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">
											Card Payment
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base transaction_entry transaction_card_payment currency">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between item-price ">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary pb-0">
											TOTAL SALE
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base transaction_entry transaction_overall_total currency pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between item-price ">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary pb-0">
											TOTAL PAYMENT
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base transaction_entry transaction_total_payment currency pb-0">0</td>
									</tr>
									<tr class="d-flex align-items-center justify-content-between item-price ">
										<th class="border-0 font-size-h5 mb-0 font-size-bold text-primary">
											Balance
										</th>
										<td class="border-0 justify-content-end d-flex text-primary font-size-base transaction_entry transaction_amount_balance currency">0</td>
									</tr>
									
								</tbody>
							</table>
						</div>
						<div class="row p-3">
								<div class="col-md-3 pr-0 pl-0"> 
									<button class="btn btn-primary white btn-payment-modal" data-type="cash">
										<i class="fas fa-money-bill-wave mr-2"></i>
										 Cash
									</button>
								</div>
								<div class="col-md-3 pl-1 ml-1">
									<button class="btn btn-outline-primary btn-payment-modal" data-type="card">
										<i class="fas fa-credit-card mr-2"></i>
										 Card
									</button>
								</div>
								<div class="col-md-3 pl-1 ml-1">
									<button class="btn btn-outline-secondary btn-submit-transaction">
										<i class="fas fa-check mr-2"></i>
										 Submit
									</button>
								</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade text-left" id="payment-popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel11" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel11">Payment</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body">
				<table class="table right-table">
					<tbody>
						<tr class="d-flex align-items-center justify-content-between">
							<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
								Total Amount to Pay :
							</th>
							<td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary transaction_entry transaction_overall_total currency">
								0
							</td>
						</tr>
						<tr class="d-flex align-items-center justify-content-between">
							<th class="border-0 px-0 font-size-lg mb-0 font-size-bold text-primary">
								Payment Mode :
							</th>
							<td class="border-0 justify-content-end d-flex text-primary font-size-lg font-size-bold px-0 font-size-lg mb-0 font-size-bold text-primary">
								Cash
							</td>
						</tr>
					</tbody>
				</table>	  
				<form class="payment-method" data-type="cash">
					<div class="form-group row">
						<div class="col-md-12">
							<label  class="text-body">Received Amount</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="number" class="form-control payment_input" value="0" min="0" placeholder="Enter Amount ">
							</fieldset>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label  class="text-body">Note (If any)</label>
							<fieldset class="form-label-group ">
								<textarea class="form-control fixed-size input_remarks" id="horizontalTextarea" rows="5" placeholder="Enter Note"></textarea>

							</fieldset>
						</div>
					</div>
					<div class="form-group row justify-content-end mb-0">
						<div class="col-md-6  text-right">
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	  	  
</div>
<div class="modal fade text-left" id="shippingpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel12" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel12">Add Shipping Address</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">Country</label>
							<fieldset class="form-group mb-3">
								<select class="js-example-basic-single js-states form-control bg-transparent  p-0 border-0" name="state">
									<option value="AL">USA</option>

									<option value="WY">UK</option>
								</select>
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">State</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"   placeholder="Enter State ">
							</fieldset>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">City</label>
							<fieldset class="form-group mb-3">
								<select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
									<option value="AL">Bahreen</option>

									<option value="WY">Dubai</option>
								</select>
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">Postal Code</label>
							<fieldset class="form-group mb-3">
								<input type="number" name="text"  class="form-control"   placeholder="Enter Postal code">
							</fieldset>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">Address</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Address">
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">Phone Number</label>
							<fieldset class="form-group mb-3">
								<input type="number" name="text"  class="form-control"  placeholder="Enter Phone Number">
							</fieldset>
						</div>
					</div>
					<div class="form-group row justify-content-end mb-0">
						<div class="col-md-6  text-right">
							<a href="#" class="btn btn-primary">Add Address</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	  	  
</div>	
<div class="modal fade text-left" id="choosecustomer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel13" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel13">Add Customer</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">Customer Name</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Customer Name">
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">Company Name</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Company Name">
							</fieldset>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-4">
							<label  class="text-body">Tax Number</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Tax">
							</fieldset>
						</div>
						<div class="col-md-4">
							<label  class="text-body">Email</label>
							<fieldset class="form-group mb-3">
								<input type="email" name="text"  class="form-control"  placeholder="Enter Mail">
							</fieldset>
						</div>
						<div class="col-md-4">
							<label  class="text-body">Phone Number</label>
							<fieldset class="form-group mb-3">
								<input type="email" name="text"  class="form-control"  placeholder="Enter Phone Number">
							</fieldset>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label  class="text-body">Address</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Address">
							</fieldset>
						</div>
					</div>
					<div class="form-group row justify-content-end mb-0">
						<div class="col-md-6  text-right">
							<a href="#" class="btn btn-primary">Add Customer</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	  	  
</div>	
<div class="modal fade text-left" id="folderpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel14" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel14">Draft Orders</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body pos-ordermain">
				<div class="row">
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title">Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="pos-order">
							<h3 class="pos-order-title" >Order 1</h3>
							<div class="orderdetail-pos">
								<p>
									<strong>Customer Name</strong>
									Sophia Hale
								</p>
								<p>
									<strong>Address</strong>
									9825 Johnsaon Dr.Columbo,MD21044
								</p>
								<p>
									<strong>Payment Status</strong>
									Pending
								</p>
								<p>
									<strong>Total Items</strong>
									10
								</p>
								<p>
									<strong>Amount to Pay</strong>
									$722
								</p>
							</div>
							<div class="d-flex justify-content-end">
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-edit"></i></a>
								<a href="#" class="confirm-delete ml-3" title="Delete"><i class="fas fa-trash-alt"></i></a>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="modal-footer border-0">
				<div class="row">
					<div class="col-12">
						<a href="#" class="btn btn-primary">Submit</a>
					</div>
				</div>
			</div>
		</div>
	</div>	  	  
</div>	
<div class="modal fade text-left" id="discountpop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel122" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel122">Add Discount</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-12">
						<label  class="text-body">Discount (%)</label>
						<fieldset class="form-group mb-3 d-flex">
							<input type="number" name="text" class="form-control bg-white input-discount" placeholder="Enter Discount" max="100">
							<a href="javascript:void(0)" class="btn-secondary btn ml-2 white pt-1 pb-1 d-flex align-items-center justify-content-center btn-add-discount">Apply</a>
						</fieldset>
						<!-- <div class="p-3 bg-light-dark d-flex justify-content-between border-bottom">
							<h5 class="font-size-bold mb-0">Discount Applied of:</h5>
							<h5 class="font-size-bold mb-0">$20</h5>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>	  	  
</div>	
<div class="modal fade text-left" id="shippingcost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1444" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable  modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel1444">Add Shipping Cost</h3>
				<button type="button" class="close rounded-pill btn btn-sm btn-icon btn-light btn-hover-primary m-0" data-dismiss="modal" aria-label="Close">
					<svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
					</svg>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">Customer</label>
							<fieldset class="form-group mb-3">
								<input type="text" name="text"  class="form-control"  placeholder="Enter Customer " value="David Jones" disabled>
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">Shipping Address</label>
							<fieldset class="form-group mb-3">
								<select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
									<option value="AL">928 Johnsaon Dr Columbo,MD 21044</option>

									<option value="WY">933 Johnsaon Dr Columbo,MD 21044</option>
								</select>
							</fieldset>
						</div>

					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label  class="text-body">Shipping Charges</label>
							<fieldset class="form-group mb-3">
								<input type="number" name="text"  class="form-control"  placeholder="Enter Shipping Charges">
							</fieldset>
						</div>
						<div class="col-md-6">
							<label  class="text-body">Shipping Status</label>
							<fieldset class="form-group mb-3">
								<select class="js-example-basic-single js-states form-control bg-transparent p-0 border-0" name="state">
									<option value="AL">Packed</option>

									<option value="WY">Open</option>
								</select>
							</fieldset>
						</div>

					</div>
					<div class="form-group row">
						<div class="col-md-12">
							<label  class="text-body">Shipping Charges</label>
							<fieldset class="form-label-group ">
								<textarea class="form-control fixed-size"  rows="5" placeholder="Textarea"></textarea>

							</fieldset>
						</div>
					</div>
					<div class="form-group row justify-content-end mb-0">
						<div class="col-md-6  text-right">
							<a href="#" class="btn btn-primary">Update Order</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	  	  
</div>
<script>
	jQuery(document).ready(function(){
		const main = {
			data: {
				product: [],
				brand: [],
				category: []
			},
			filter: {
				category: null,
				brand: null,
				product_barcode : null,
				product_code : null,
				product_name : null,
				product_price : null,
			},
			load: function(){
				this.getBrand();
				this.getCategory();
				this.getProduct(this.filter);
				this.event();
			},
			resetSearchFilter:function(){
				this.filter.product_barcode = null;
				this.filter.product_code = null;
				this.filter.product_name = null;
				this.filter.product_price = null;
			},
			reloadProductList: function(){
				this.getProduct(this.filter);
			},
			checkSearchInput: function(){
				const __self = this;
				const searchParam = ['product_barcode', 'product_code', 'product_name', 'product_price'];
				let activeSearchCount = 0;
				for(let a = 0, count = searchParam.length; a < count; a++){
					const value = searchParam[a];
					if(__self.filter[value]){
						activeSearchCount++;
					}
					if(a == (count -1)){
						return activeSearchCount;
					}
				}
			},
			getBrand: function(){
				const __self = this;
				utils.request.set({data: [], url: '/api/brand'}).send(function(res){
					if(res.status){
						__self.data.brand = res.data;
						__self.loadSelect({data: res.data, tag: 'brand', target: '.brand-option', title: 'Brand', index: 'brand_id', value: 'brand_name'})
					}
				})
			},
			getCategory: function(){
				const __self = this;
				utils.request.set({data: [], url: '/api/category'}).send(function(res){
					if(res.status){
						__self.data.category = res.data;
						__self.loadSelect({data: res.data, tag: 'category', target: '.category-option', title: 'Category', index: 'cat_id', value: 'cat_name'})
					}
				})
			},
			getProduct: function(param = {}){
				const __self = this;
				utils.request.set({data: Object.keys(param).length > 0 ? param : {} , url: '/api/product'}).send(function(res){
					if(res.status){
						__self.data.product = res.data;
						__self.loadProduct({data: res.data, target: '.product-item-entry'})
					}
				})
			},
			loadSelect: function(param){	
				const __self = this;
				if(param.data){
					let html = `<option disabled>${param.title ? param.title + " " : ""}Option</option>`;
					const count = param.data.length;
					const input = [{text: `<span class="capitalize">All ${param.title}</span>`, value:'all', selected: true}]
					for(let a = 0; a < count; a++){
						const loopdata = param.data[a];
						input.push({text: `<span class="capitalize">${loopdata[param.value]}</span>`, value: loopdata[param.index]})
						if(a == (count -1)){
							jQuery(param.target).html(html);
							jQuery(param.target).multipleSelect({
								filter: true,
								filterAcceptOnEnter: true, 
								data: input,
								onClick: function(onclickParam){
									if(param.tag){
										switch (param.tag){
											case "brand": __self.onChangeBrand(onclickParam); break;
											case "category": __self.onChangeCategory(onclickParam); break
										}
									}
								}
							})
						}
					}
				}
			},
			loadProduct: function(param){
				if(param.data){
					let html = "";
					const count = param.data.length;
					if(param.data && param.data.length){
						for(let a = 0; a < count; a++){
							const loopdata = param.data[a];
							const assetPath = '/vcg_system/modules/component/theme/frontstore/assets'
							html += `
								<div class="product-container col-xl-4 col-lg-2 col-md-3 col-sm-4 col-6">
									<div class="capitalize product-data cursor-pointer" data-id="${loopdata.product_id}">
										<div class="productCard">
											<div class="productThumb">
												<img class="img-fluid" src="${assetPath}/${loopdata.product_image ? loopdata.product_image : 'img/shop/blank.png'}" alt="ix">
											</div>
											<div class="productContent">
												<span>${loopdata.product_name}<span><br>
												<span class="capitalize">${loopdata.brand} / ${loopdata.category}</span>
											</div>
										</div>
									</div>
								</div>
							`;
							if(a == (count -1)){
								jQuery(param.target).html(html);
							}
						}
					}else{
						html = `
						<div class="col-xl-12 col-lg-2 col-md-3 col-sm-4 col-6 ml-2">
							<div class="productCard">
								<div class="productContent">
									No Product found!
								</div>
							</div>
						</div>
						`;
						jQuery(param.target).html(html);
					}
					
				}
			},
			event: function(){
				const s = this;
				jQuery('.product-items').on('dblclick', '.product-data', function(){
					const local = jQuery(this);
					const id = local.data('id');
					const findID = utils.findObjectIndex(s.data.product, "product_id", id);
					if(findID > -1){
						transaction.addSelectedProduct(s.data.product[findID]);
					}
				})
				jQuery('.product-items').on('click', '.product-data',function(){
					jQuery('.product-items').find('.active-product').removeClass('active-product');
					jQuery(this).closest('.product-container').addClass('active-product');
				})
				jQuery('.form-product-search').on('submit', function(e){
					e.preventDefault();
					const local = jQuery(this);
					const inputSearch = local.find('.input-search').val();
					const inputSearchOption = local.find('.input-search-option').val();
					if(inputSearch.length || !s.data.product.length){
						s.resetSearchFilter();
						if(inputSearch){
							s.filter[inputSearchOption] = inputSearch;
						}
						s.getProduct(s.filter);
					}
				})
				jQuery('.form-product-search').on('change', '.input-search-option', function(e){
					const local = jQuery(this);
					const inputSearch = local.closest('fieldset').find('.input-search').val();
					const inputSearchOption = local.val();
					if(inputSearch.length || !s.data.product.length){
						s.resetSearchFilter();
						if(inputSearch){
							s.filter[inputSearchOption] = inputSearch;
						}
						s.getProduct(s.filter);
					}
				})
				jQuery('.form-product-search').on('click', '.reset-search', function(){
					s.resetSearchFilter();
					s.getProduct(s.filter);
					jQuery('.form-product-search').find('.input-search').val("");
				})
			},
			onChangeBrand: function(param){
				const __self = this;
				if(Object.keys(param).length){
					if(param.value == 'all'){
						__self.filter.brand = null;
					}else{
						__self.filter.brand = param.value;
					}
					__self.getProduct(__self.filter);
				}
			},
			onChangeCategory: function(param){
				const __self = this;
				if(Object.keys(param).length){
					if(param.value == 'all'){
						__self.filter.category = null;
					}else{
						__self.filter.category = param.value;
					}
					__self.getProduct(__self.filter);
				}
			}
		}
		const transaction = {
			info:{
				vat: 12
			},
			data: {
				transaction: {
					selectedProduct: [],
					total_item: 0,
            		sub_total: 0,
            		discount: 0,
            		discount_amount: 0,
            		additional_discount: 0,
            		shipping_cost: 0,
            		taxable: 0,
		      		tax:0,
            		overall_total:0,
            		cash_payment: 0,
            		card_payment: 0,
            		total_payment: 0,
            		amount_payed:0,
            		amount_balance:0,
            		customer: {
            			info: {},
            			status: 'walkin',
            			shipping_address: "",
            			shipping_cost: 0
            		},
            		payment: [],
				},
				currencyData: ['sub_total', 'discount_amount', 'additional_discount', 'tax', 'overall_total', 'total_payment', 'taxable', 'shipping_cost', 'cash_payment','amount_balance']
			},
			datatable:{
                main:null
            },
            table: {
            	main: '#selected-product-table'
            },
            resetTransaction: function(){
            	const __self = this;
            	const transaction = {
            		selectedProduct: [],
					total_item: 0,
            		sub_total: 0,
            		discount: 0,
            		discount_amount: 0,
            		additional_discount: 0,
            		shipping_cost: 0,
            		taxable: 0,
		      		tax:0,
            		overall_total:0,
            		cash_payment: 0,
            		card_payment: 0,
            		total_payment: 0,
            		amount_payed:0,
            		amount_balance:0,
            		customer: {
            			info: {},
            			status: 'walkin',
            			shipping_address: "",
            			shipping_cost: 0
            		},
            		payment: []
            	}
            	__self.data.transaction = transaction;
            	__self.resetDisplay();
            },
            resetDisplay:function(){
            	const __self = this;
            	__self.generateTotal();
            	__self.loadTable();
            },
            load: function(){
            	this.loadTable();
            	this.event();
            	this.loadInfo();
            },
            loadInfo:function(){
            	jQuery('.transaction-summary').find('.vat-percentage').html(this.info.vat);
            },
            loadTable: function() {
                if (jQuery.fn.DataTable.isDataTable(this.table.main)) {
                    jQuery(this.table.main).DataTable().destroy();
                }
                this.datatable.main = jQuery(this.table.main).DataTable({
                    "processing": true,
                    "searching": false,
                    "paginate": false,
                    "sort": true,
                    "info": false,
                    "data" : [],
                    "columns": [{
                        "data": "name"
                    },{
                        "data": "qty"
                    },{
                        "data": "price"
                    },{
                        "data": "discount"
                    },{
                        "data": "subtotal"
                    },{
                        "data": "nAction"
                    }]
                });
            },
            addSelectedProduct: function(data){
            	const __self = this;
            	if(Object.keys(data).length){
            		const findID = utils.findObjectIndex(__self.data.transaction.selectedProduct, "product_id", data.product_id);
            		if(findID > -1){
            			utils.notify.setTitle("Error").setMessage("Product Already added").setType("danger").load();
            		}else{
            			if(data.remaining_stock <= 0){
            				utils.notify.setTitle("Error").setMessage(`Product [<span class="capitalize">${data.product_name}</span>] out of stock!`).setType("danger").load();
            			}else{
            				data.transaction = {
            					id: data.product_id,
            					quantity: 1,
            					subtotal: data.product_price ? parseFloat(data.product_price) * 1 : 0,
            					price: data.product_price ? parseFloat(data.product_price) : 0
            				}
            				__self.data.transaction.selectedProduct.push(data);
            				__self.addRow(data);
            			}
            		}
            	}
            },
            addRow: function(data){
            	const __self = this
            	const input = {
            		id: data.product_id ? parseInt(data.product_id) : null,
            		name: data.product_name ? data.product_name : "",
            		qty: `<input type="number" value="${data.transaction.quantity}" min="0" max="${data.remaining_stock ? parseInt(data.remaining_stock) : 1}"  class="input-integer input-quantity form-control border-dark" placeholder="" data-id="${data.product_id}" required>`,
                    discount: 0,
                    price: `<span class="currency">${data.product_price ? utils.currency(data.product_price) : utils.currency(0)}</span>`,
                    subtotal: `<span class="subtotal currency">${data.transaction.subtotal}</span>`,
                    nAction: `
                    	<div class="card-toolbar text-right">
							<a href="#" class="confirm-delete" title="Delete" data-id="${data.product_id}">
								<i class="fas fa-trash-alt"></i>
							</a>
						</div>
					`
            	}
            	__self.datatable.main.row.add(input).draw();
            	__self.generateTotal();
            },
            event: function(){
            	const s = this
            	jQuery(s.table.main).on('input', 'tr td .input-quantity',  function() {
            		const local = jQuery(this);
                    const tdata = s.datatable.main.row(jQuery(this.closest("tr"))).data();
                    let value = local.val();
                    	value = value ? parseInt(value) : "";
                    let subtotal = 0;
                    if(tdata.id){
                    	const product_id = utils.findObjectIndex(s.data.transaction.selectedProduct, "product_id", tdata.id);
                    	if(product_id > -1){
                    		const product_details = s.data.transaction.selectedProduct[product_id];
                    		if(product_details.remaining_stock < value){
                    			value = product_details.remaining_stock;
                    			local.val(value);
                    		}else if(value < 0){
                    			value = 0;
                    			local.val(value);
                    		}
                    		subtotal = parseFloat(product_details.product_price) * value;
                    		s.data.transaction.selectedProduct[product_id].transaction.quantity = value;
                    		s.data.transaction.selectedProduct[product_id].transaction.subtotal = subtotal;
                    		local.closest('tr').find('.subtotal').html(utils.currency(subtotal));
                    		// console.log(s.data.selectedProduct);
                    		s.generateTotal();
                    	}
                    }
                })
                jQuery('.btn-add-discount').click(function(){
                	const local = jQuery(this);
                	const input = local.closest('fieldset').find('.input-discount')
                	let value = input.val(); 
                	if(value){
                		value = parseInt(value);
                		if(value < 0){
	                		s.data.transaction.discount = 0;
	                		input.val(0);
	                	}else if(value > 100){
	                		s.data.transaction.discount = 100;
	                		input.val(100);
	                		utils.modal.close("#discountpop")
	                		utils.notify.setTitle("Success").setMessage("Sucessfully added discount").setType("success").load()
	                	}else{
	                		s.data.transaction.discount = value;
	                		utils.modal.close("#discountpop")
	                		utils.notify.setTitle("Success").setMessage("Sucessfully added discount").setType("success").load();
	                	}
	                	s.generateTotal()
                	}
                })
                jQuery('#payment-popup').on('submit', '.payment-method', function(e){
                	e.preventDefault();
                	const local = jQuery(this);
                	const transaction = s.data.transaction;
                	const payment_type = local.data('type');
                	const input_remarks = local.find('.input_remarks').val();
                	let value = local.find('.payment_input').val();
                	if(value.length){
                		value = parseFloat(value);
                		if(value < 0){
                			value = 0;
                		}
                		const checkPayment = utils.findObjectIndex(transaction.payment, "mode", payment_type);
                		if(checkPayment > -1){
                			s.data.transaction.payment[checkPayment].amount = parseFloat(value);
                		}else{
                			s.data.transaction.payment.push({amount: value, mode: payment_type, remarks: ""});
                		}
                		local.trigger('reset');
                		utils.modal.close('#payment-popup');
                		s.generateTotal();
                	}
                })
                jQuery('.btn-payment-modal').click(function(){
                	const local = jQuery(this);
                	const selectedProduct = s.data.transaction.selectedProduct;
                	const type = local.data('type');
                	if(selectedProduct.length){
                		if(type == 'cash'){
                			utils.modal.open('#payment-popup')
                		}else if(type == 'card'){

                		}
                	}else{
                		utils.notify.setTitle("Warning").setMessage("Please add product first!").setType("warning").load();
                	}
                })
                jQuery('.btn-submit-transaction').click(function(){
                	const transaction = s.data.transaction;
                	const selectedProduct = transaction.selectedProduct;
                	const balance = transaction.amount_balance;
                	if(selectedProduct.length){
                		if(balance <= 0){
                			transaction.customer = JSON.stringify(transaction.customer);
                			transaction.payment = JSON.stringify(transaction.payment);
                			transaction.selectedProduct = JSON.stringify(transaction.selectedProduct);
                			utils.request.set({data: transaction, url: '/api/transaction/add'}).send(function(res){
                				console.log(res);
                				if(res.status){
                					s.resetTransaction();
                					main.reloadProductList();
                					utils.notify.setTitle("Success").setMessage(res.message).setType("success").load();
                				}else{
                					transaction.customer = JSON.parse(transaction.customer);
                					transaction.payment = JSON.parse(transaction.payment);
                					transaction.selectedProduct = JSON.parse(transaction.selectedProduct);
                					utils.notify.setTitle("Error").setMessage(res.message).setType("danger").load();
                				}
                			})
                		}else{
                			utils.notify.setTitle("Warning").setMessage("Please settle your remaining balance!").setType("danger").load();
                		}
                	}else{
                		utils.notify.setTitle("Warning").setMessage("Please add product first!").setType("warning").load();
                	}
                })
            },
            generateTotal: function(){
            	const __self = this;
            	const transaction = __self.data.transaction;
            	const selectedProduct = transaction.selectedProduct;
            	const payment = transaction.payment;
            	const currencyValue = __self.data.currencyData;
            	transaction.sub_total = 0;
            	transaction.cash_payment = 0;
            	transaction.card_payment = 0;
            	transaction.total_payment = 0;
            	transaction.total_item = selectedProduct.length;
            	transaction.discount = transaction.discount;
            	if(selectedProduct.length){
            		for(let a = 0, count = selectedProduct.length; a < count; a++){
	            		const loopdata = selectedProduct[a];
	            		transaction.sub_total += loopdata.transaction.subtotal;
	            		// console.log(loopdata);
	            	}
            	}
            	if(payment.length){
            		for(let a = 0, count = payment.length; a < count; a++){
	            		const loopdata = payment[a];
	            		if(loopdata.mode == "cash"){
	            			transaction.cash_payment += parseFloat(loopdata.amount);
	            			transaction.total_payment += parseFloat(loopdata.amount);
	            		}else if(loopdata.mode = 'card'){
	            			transaction.card_payment += parseFloat(loopdata.amount);
	            			transaction.total_payment += parseFloat(loopdata.amount);
	            		}
	            	}
            	}
            	
            	//integrate vat
            	transaction.tax = __self.calculateDiscount(transaction.sub_total, __self.info.vat);
            	transaction.taxable = transaction.sub_total - transaction.tax;
            	transaction.discount_amount = __self.calculateDiscount(transaction.sub_total, transaction.discount);


            	// calculate overall
             	transaction.overall_total = (transaction.sub_total + transaction.shipping_cost) - (transaction.discount_amount + transaction.additional_discount);
            	transaction.overall_total = parseFloat(transaction.overall_total).toFixed(2);
            	transaction.overall_total = parseFloat(transaction.overall_total);

            	transaction.amount_balance = transaction.overall_total - transaction.total_payment;
            	transaction.amount_payed = transaction.total_payment;
            	if(transaction.amount_balance < 0){
            		transaction.amount_balance = 0;
            		transaction.amount_payed = transaction.overall_total;
            	}
            	// last process
            	const tObj = Object.keys(transaction);
            	for(let a = 0, count = tObj.length; a < count; a++){
            		const index = tObj[a];
            		jQuery('.transaction-summary').find(`.transaction_entry.transaction_${index}`).html(
            			currencyValue.indexOf(index) > -1 ? utils.currency(transaction[index]) : transaction[index]
            		);
            		jQuery('.modal').find(`.transaction_entry.transaction_${index}`).html(
            			currencyValue.indexOf(index) > -1 ? utils.currency(transaction[index]) : transaction[index]
            		);

            	}
            	// __self.data.transaction = transaction;
            	// console.log("__self.data.transaction", __self.data.transaction);
            },
            calculateDiscount: function(total, percentage){
            	let overall = (total/100)*percentage;
            		overall = parseFloat(overall).toFixed(2)
            	return parseFloat(overall);
            }
		}
		main.load();
		transaction.load()
	})
</script>