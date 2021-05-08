	<?php
	$product_shuffle=$product->getData();
	shuffle($product_shuffle);
	?>
		<section id="top">
				<div class="container py-5">
					<h4>recommendations</h4>
					<hr />
					<div class="owl-carousel owl-theme">
						<?php
						foreach($product_shuffle as $item){
						
						?>
					
					<div class="item py-2 additional">
							<div class="product mont">
								<a href='<?php printf("%s?item_id=%s","product.php",$item["item_id"]);?>'>
									<img
									class='img-fluid item-img'
										src="<?php echo $item['item_image']??"./asset/carousel-1.jpeg"?>"
										alt="fluid"
									/>
								</a>
								<div class="text-center">
									<h6><?php echo $item['item_name']?? 'Unknown'?></h6>
									<div class="rating text-warning font-small">
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
										<span><i class="fas fa-star"></i></span>
									</div>
									<div class="price">$<span><?php echo $item['item_price']?? 'unknown'?></span></div>
									<button
										type="submit"
										class="btn btn-warning font-big"
									>
										add to cart
									</button>
								</div>
							</div>
						</div>
						
						<?php } ?>
					
				</div>
			
				</div>
			</section>