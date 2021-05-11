	<?php

	shuffle($product_shuffle);

	//request method post
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if(isset($_POST['sale'])){
		$cart->addCart($_POST['user_id'], $_POST['item_id']);
		echo 'inserted';}
	}
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
									<form method="post">
										<input type="hidden" name='item_id' value = '<?php echo $item['item_id']??'1'?>'>
										<input type="hidden" name='user_id' value = '<?php echo $item['user_id']??'1'?>'>
										<button
										type="submit"
										class="btn btn-warning font-big"
										name='sale'
									>
										add to cart
									</button>
									</form>
								</div>
							</div>
						</div>
						
						<?php } ?>
					
				</div>
			
				</div>
			</section>