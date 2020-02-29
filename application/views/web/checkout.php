<div class="top_site_main" style="background-image:url(images/banner/top-heading.jpg);">
			<div class="banner-wrapper container article_heading">
				<div class="breadcrumbs-wrapper">
					<ul class="phys-breadcrumb">
						<li><a href="index-2.html" class="home">Home</a></li>
						<li>Checkout</li>
					</ul>
				</div>
				<h1 class="heading_primary">Checkout</h1></div>
		</div>
		<section class="content-area">
			<div class="container">
				<div class="row">
					<div class="site-main col-sm-12">
						<div class="entry-content">
							<div class="travel_tour">
								<div class="travel_tour-info-login-form">
									<div class="travel_tour-info">Returning customer?
										<a href="#" class="showlogin">Click here to login</a></div>
								</div>
								<div class="travel_tour-info-coupon-message">
									<div class="travel_tour-info">Have a coupon?
										<a href="#" class="showcoupon">Click here to enter your code</a></div>
								</div>
								<form name="checkout" method="post" class="checkout travel_tour-checkout" action="#">
									<div class="row">
										<div class="col-md-7 columns">
											<div class="col2-set" id="customer_details">
												<div class="col-1">
													<div class="travel_tour-billing-fields">
														<h3>Billing Details</h3>
														<p class="form-row form-row form-row-first validate-required" id="billing_first_name_field">
															<label for="billing_first_name" class="">First Name
																<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="">
														</p>
														<p class="form-row form-row form-row-last validate-required" id="billing_last_name_field">
															<label for="billing_last_name" class="">Last Name
																<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
														</p>
														<div class="clear"></div>
														<p class="form-row form-row form-row-wide" id="billing_company_field">
															<label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="">
														</p>
														<p class="form-row form-row form-row-first validate-required validate-email" id="billing_email_field">
															<label for="billing_email" class="">Email Address
																<abbr class="required" title="required">*</abbr></label><input type="email" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
														</p>
														<p class="form-row form-row form-row-last validate-required validate-phone" id="billing_phone_field">
															<label for="billing_phone" class="">Phone
																<abbr class="required" title="required">*</abbr></label><input type="tel" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
														</p>
														<div class="clear"></div>
														<p class="form-row form-row form-row-wide address-field update_totals_on_change validate-required travel_tour-validated" id="billing_country_field">
															<label for="billing_country" class="">Country
																<abbr class="required" title="required">*</abbr></label>
															<select name="billing_country" id="billing_country" class="country_to_state country_select">
																<option value="">Select a country…</option>
																<option value="AF">Afghanistan</option>
																<option value="AL">Albania</option>
																<option value="DZ">Algeria</option>
																<option value="AS">American Samoa</option>
																<option value="AD">Andorra</option>
																<option value="AO">Angola</option>
																<option value="AI">Anguilla</option>
																<option value="AQ">Antarctica</option>
															</select>
														</p>
														<p class="form-row form-row form-row-wide address-field validate-required" id="billing_address_1_field">
															<label for="billing_address_1" class="">Address
																<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="">
														</p>

														<p class="form-row form-row address-field validate-postcode form-row-first" id="billing_postcode_field">
															<label for="billing_postcode" class="">Postcode / ZIP</label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="" value="">
														</p>
														<p class="form-row form-row address-field validate-required form-row-last" id="billing_city_field">
															<label for="billing_city" class="">Town / City
																<abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="" value="">
														</p>

														<div class="clear"></div>
														<p class="form-row form-row-wide create-account travel_tour-validated">
															<input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1">
															<label for="createaccount" class="checkbox">Create an account?</label>
														</p>
													</div>
												</div>
												<div class="col-2">
													<div class="travel_tour-shipping-fields">
														<h3>Additional Information</h3>
														<p class="form-row form-row notes" id="order_comments_field">
															<label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="2" cols="5"></textarea>
														</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-5 columns">
											<div class="order-wrapper">
												<h3 id="order_review_heading">Your order</h3>
												<div id="order_review" class="travel_tour-checkout-review-order">
													<table class="shop_table travel_tour-checkout-review-order-table">
														<thead>
														<tr>
															<th class="product-name">Tour</th>
															<th class="product-total">Total</th>
														</tr>
														</thead>
														<tbody>
														<tr class="cart_item">
															<td class="product-name">
																Woo Album #1&nbsp;
																<strong class="product-quantity">× 1</strong></td>
															<td class="product-total">
																$9
															</td>
														</tr>
														</tbody>
														<tfoot>

														<tr class="cart-subtotal">
															<th>Subtotal</th>
															<td>
																<span class="travel_tour-Price-amount amount"><span class="travel_tour-Price-currencySymbol">$</span>9.00</span>
															</td>
														</tr>


														<tr class="order-total">
															<th>Total</th>
															<td>
																<strong><span class="travel_tour-Price-amount amount"><span class="travel_tour-Price-currencySymbol">$</span>9.00</span></strong>
															</td>
														</tr>


														</tfoot>
													</table>

													<div id="payment" class="travel_tour-checkout-payment">
														<ul class="wc_payment_methods payment_methods methods">
															<li class="wc_payment_method payment_method_bacs">
																<input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked">
																<label for="payment_method_bacs">
																	Direct Bank Transfer </label>
															</li>
															<li class="wc_payment_method payment_method_cheque">
																<input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
																<label for="payment_method_cheque">
																	Check Payments </label>
															</li>
															<li class="wc_payment_method payment_method_cod">
																<input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod">
																<label for="payment_method_cod">
																	Cash on Delivery </label>
															</li>
														</ul>
														<div class="form-row place-order">
															<input type="submit" class="button alt" name="travel_tour_checkout_place_order" id="place_order" value="Place order">
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>