	<?php 
	$brand = array_map(function($pro){return $pro['item_filter'];}, $product_shuffle) ;
	$unique = array_unique($brand); sort($unique);print_r($unique);
	shuffle($product_shuffle);?>
		
		<section id="filter">
				<div class="container">
					<h4 class="mont">special prices</h4>
					<div id="filters" class="button-group text-end me-auto">
						<button class="btn is-checked" data-filter="*">
							all categories
						</button>
						<?php array_map(function($filter){  
printf ('<button class="btn is-checked" data-filter=".%s">%s</button>',$filter, $filter);}, $unique);
						
						?>
						<!-- <button class="btn is-checked" data-filter=".metal">
							metal
						</button>
						<button class="btn is-checked" data-filter=".plastic">
							plastic
						</button>
						<button class="btn is-checked" data-filter=".crystal">
							crystal
						</button>
						<button class="btn is-checked" data-filter=".plant">
							plant
						</button> -->
					</div>
					<div class="grid">
						<?php array_map(function($item){ ?>
											
						<div class="grid-item <?php echo $item['item_filter']?? 'Others';?> border">
		
							<div class="item py-2" style="width: 300px">
								<div class="product mont">
									<a href='<?php printf("%s?item_id=%s","product.php",$item["item_id"]);?>'>
										<img
											src="<?php echo $item['item_image']?? './assets/carousel-1.jpeg';?>"
											alt="fliud"
											style="width: 300px"
										/>
									</a>
									<div class="text-center">
										<h6><?php echo $item['item_name']?? 'unknown';?></h6>
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
										<div class="price">
											<span><?php echo $item['item_price']?? 0; ?>$</span>
										</div>
										<button
											type="submit"
											class="btn btn-warning font-big"
										>
											add to cart
										</button>
									</div>
								</div>
							</div>
						</div> 
					<?php }, $product_shuffle)?>
					</div>
				</div>
			</section>