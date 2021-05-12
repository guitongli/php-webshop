

<?php if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['delete-cart-submit'])){
$deletedRecord = $cart->deleteCart($_POST['item_id']);

	}
}?>

<main id="main-site">
			<!-- shoppint cart section-->

			<div id="cart" class="py-3"> 
				<div class="container-fluid w-75">
					<h5 class="sand font-big">Shopping Cart</h5>
					<!--shopping cart items-->

					<div class="row">
						<div class="col-sm-9">
							<?php 
 
							foreach($product->getData('cart') as $item):
							$currentProduct=$product->getProduct($item['item_id']);
							//  print_r ($cart);
								$subtotal[]=array_map(function($item){
								 
								 ?>
						
							<!--cart item-->
							<div class="row border-top py-3 mt-3">
								<div class="col-sm-3">
									<img
										src="<?php echo $item['item_image']?>"
										alt="cart1"
										class="img-fluid"
										height="height:120px"
									/>
								</div>
								<div class="col-sm-7">
									<h5><?php echo $item['item_name']?></h5>
									<small><?php echo $item['item_filter']?></small>
									<!--product rating-->
									<div class="d-flex">
										<div
											class="rating text-warning font-small"
										>
											<span
												><i class="fas fa-star"></i
											></span>
											<span
												><i class="fas fa-star"></i
											></span>
											<span
												><i class="fas fa-star"></i
											></span>
											<span
												><i class="fas fa-star"></i
											></span>
											<span
												><i class="fas fa-star"></i
											></span>
										</div>
										<a href="" class="sand font-small"
											>2 ratings</a
										>
									</div>
									<!--product rating-->

									<!--product quantity-->
									<div class="qty d-flex pt-2">
										<div class="d-flex sand w-25">
											<div class="col-6">
												<div class="qty d-flex">
													<h6 class="py-2 sand">
														Qty
													</h6>
													<div
														class="px-4 d-flex sand"
													>
														<button
															class="qty-up border bg-light"
															data-id="<?php echo $item['item_id']?? 0;?>"
														>
															<i
																class="fas fa-angle-up"
															></i></button
														><input
															type="text"
															class="qty-input border px-4 w-100 bg-light green-font"
															value="1"
															placeholder="1" autocomplete="off"
															data-id="<?php echo $item['item_id']?? 0;?>"
														/>
														<button
															class="qty-down border bg-light"
															data-id="<?php echo $item['item_id']?? 0;?>"
														>
															<i
																class="fas fa-angle-down"
															></i>
														</button>
													</div>
													<form method='POST'>
													<input type="hidden" value='<?php echo $item['item_id']?>' name='item_id'>
													<button
														type="submit"
														name='delete-cart-submit'
														class="btn text-danger px-3 border-right"
													>
														Delete
													</button>
														</form>
													<button
														type="submit"
														class="btn text-danger"
													>
														Save
													</button>
												
												</div>
											</div>
										</div>
									</div>
									<!--product quantity--> 
								</div>
								<div class="col-sm-2 text-right">
									<div class="sand text-danger">
										$ <span class="product-price"><?php echo $item['item_price']?></span>
									</div>
								</div>
							</div> 
							<?php 
							return $item['item_price'];
						},$currentProduct);
 
						// closing map function
						endforeach;
						print_r($subtotal);
						?>
						</div>
						<!--subtotal section-->

						<div class="col-sm-3">
							<div class="sub-total text-center mt-3 border">
								<h6 class="font-small text-success py-3">
									<i class="fas fa-check"></i>&nbsp;Free
									delivery
								</h6>
								<div class="border-top py-4">
									<h5 class="font-small">
										Subtotal (<?php echo isset($subtotal)?count($subtotal):0;?>
									 items) &nbsp;
										<div class="text-danger">
											$
											<span
												class="text-danger"
												id="deal-price"
												><?php echo isset($subtotal)?$cart->getSum($subtotal):0;?></span
											>
										</div>
									</h5>
									<button
										type="submit"
										class="btn btn-warning m-3"
									>
										Proceed to Buy
									</button>
								</div>
							</div>
						</div>
						<!--subtotal section-->
					</div>
					<!--shopping cart items-->
				</div>
			</div>
			<!-- shoppint cart section-->
	
		</main>