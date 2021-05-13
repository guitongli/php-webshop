

<?php if($_SERVER['REQUEST_METHOD']=='POST'){
	if(isset($_POST['delete-wishlist-submit'])){
 $cart->deleteWishlist($_POST['item_id']);

    };
    if(isset($_POST['cart-submit'])){
 $cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');

    };
   
}?>

<main id="main-site">
			<!-- shoppint cart section-->

			<div id="cart" class="py-3"> 
				<div class="container-fluid w-75">
					<h5 class="sand font-big">Wishlist</h5>
					<!--shopping cart items-->

					<div class="row">
						<div class="col-sm-9">
							<?php 
 
							foreach($product->getData('wishlist') as $item):
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
												
												
													<form method='POST'>
													<input type="hidden" value='<?php echo $item['item_id']?>' name='item_id'>
													<button
														type="submit"
														name='delete-wishlist-submit'
														class="btn text-danger pl-0 pr-3 border-right"
													>
														Delete
													</button>
														</form>
													
                                                    <form method='POST'>
													<input type="hidden" value='<?php echo $item['item_id']?>' name='item_id'>
													<button
														type="submit"
														class="btn text-danger text-nowrap pb-3"
                                                        name='cart-submit'
													>
														add to cart
													</button>
														</form>
                                                        
												
												</div>
											</div>
										</div>
									</div>
									<!--product quantity--> 
								</div>
								<div class="col-sm-2 text-right">
									<div class="sand text-danger">
										$ <span class="product-price" data-id='<?php echo $item['item_id']?>'> <?php echo $item['item_price']?></span>
									</div>
								</div>
							</div> 
							<?php 
							return $item['item_price'];
						},$currentProduct);
 
						// closing map function
						endforeach;
						// print_r($subtotal);
						?>
						</div>
					</div>
					<!--shopping cart items-->
				</div>
			</div>
			<!-- shoppint cart section-->
	
		</main>