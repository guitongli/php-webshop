<?php
$item_id=$_GET['item_id']?? 1;
foreach($product->getData() as $item):
	if($item['item_id']==$item_id):
?>

<section id="product" class="py-3">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-12">
							<img
								src="<?php echo $item['item_image']??'./assets/carousel-1.jpeg'?>"
								alt="banner-1"
								class="img-fluid"
							/>
							<div
								class="form-row d-flex pt-4 justify-content-between font-big sand"
							>
								<div class="col px-2">
									<button
										type="submit"
										class="btn btn-danger form-control"
									>
										Buy
									</button>
								</div>
								<div class="col px-2">
									<button
										type="submit"
										class="btn btn-warning form-control"
									>
										Add to Cart
									</button>
								</div>
							</div>
						</div>
						<div class="col-sm-6 py-5">
							<h5><?php echo $item['item_name']??'Unknown';?></h5>
							<small>category: <?php echo $item['item_filter']??'Unknown';?> </small>
							<div class="rating text-warning font-small">
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<span><i class="fas fa-star"></i></span>
								<a href="" class="px-2 sand font-small"
									>rating</a
								>
							</div>
							<hr class="m-0" />

							<table class="my-3">
								<tr class="sand">
									<td>MRP</td>
									<td><strike>$<?php echo $item['item_price']??'Unknown';?></strike></td>
								</tr>
								<tr class="sand">
									<td>Deal Price</td>
									<td class="font-big text-danger">
										$<span>6</span
										><small class="text-dark"
											>&nbsp;&nbsp;inclusive taxes</small
										>
									</td>
								</tr>
								<tr class="sand">
									<td>You Save</td>
									<td class="font-big text-danger">
										$<span>6</span
										><small class="text-dark"
											>&nbsp;&nbsp;inclusive taxes</small
										>
									</td>
								</tr>
							</table>

							<div id="policy">
								<div class="d-flex">
									<div class="return text-center mr-5">
										<div class="green-font my-2">
											<span
												class="fa fa-retweet border p-3 rounded-pill"
											></span>
										</div>
										<a href="" class="sand font-small">
											10 days replacement</a
										>
									</div>
									<div class="return text-center mr-5">
										<div class="green-font my-2">
											<span
												class="fa fa-check-double border p-3 rounded-pill"
											></span>
										</div>
										<a href="" class="sand font-small">
											quality garantied</a
										>
									</div>
									<div class="return text-center mr-5">
										<div class="green-font my-2">
											<span
												class="fa fa-truck border p-3 rounded-pill"
											></span>
										</div>
										<a href="" class="sand font-small">
											2 day delivery</a
										>
									</div>
								</div>
								<hr />
								<!-- product details -->
								<div
									id="details"
									class="sand d-flex flex-column text-dark"
								>
									<small>Deliver by tomorrow</small>
									<small>sold by <a href="#">me</a></small>
									<small
										><i
											class="fas fa-map-marker-alt light-font"
										></i
										>&nbsp;&nbsp;Deliver to 41414
									</small>
								</div>
								<!-- color and options -->

								<div class="row">
									<div class="col-6">
										<div class="color my-3">
											<div
												class="d-flex justify-content-between"
											>
												<h6>color</h6>
												<div
													class="p-2 dark-bg rounded-circle"
												>
													<button
														class="btn font-small"
													></button>
												</div>
												<div
													class="p-2 light-bg rounded-circle"
												>
													<button
														class="btn font-small"
													></button>
												</div>
												<div
													class="p-2 green-bg rounded-circle"
												>
													<button
														class="btn font-small"
													></button>
												</div>
											</div>
										</div>
									</div>

									<!-- product quantity section-->
									<div class="col-6">
										<div class="qty d-flex">
											<h6>Qty</h6>
											<div class="px-4 d-flex sand">
												<button
													class="qty-up border light-bg"
													data-id="pro3"
												>
													<i
														class="fas fa-angle-up"
													></i></button
												><input
													type="text"
													class="qty-input border px-2 w-50 light-bg disabled"
													value="1"
													placeholder="1"
													data-id="pro3"
												/>
												<button
													class="qty-down border light-bg"
													data-id="pro3"
												>
													<i
														class="fas fa-angle-down"
													></i>
												</button>
											</div>
										</div>
									</div>
									<!-- product quantity section-->
								</div>
								<div class="size my-3">
									<h6>Size</h6>
									<div
										class="d-flex justify-content-between w-75"
									>
										<div class="border p-2">
											<button class="btn p-0">
												4gb ram
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<h6>Product Description</h6>
							<hr />
							<p class="sand">
								Lorem ipsum dolor, sit amet consectetur
								adipisicing elit. Ad ullam eius in inventore
								itaque beatae, facilis, provident amet labore
								nesciunt vel voluptates minus expedita incidunt
								quia nostrum rem animi consectetur!
							</p>
						</div>
					</div>
				</div>
			</section>

			<?php 
			endif;
			endforeach;
			?>