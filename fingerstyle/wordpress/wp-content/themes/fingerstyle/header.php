<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
    <?php
    wp_head();?>

</head>

<body>
	<header class="d-flex p-3 justify-content-between align-items-center">
		<div class="col-sm-4 my-2">
			<?php 
			if(function_exists('the_custom_logo')){
				// the_custom_logo();
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id);
			}?>
			<img src="<?= $logo[0]?>" class="logo img-fluid" />
			<a class ='site-title pt-lg-4 mb-0' href='<?php echo get_home_url()?>'><?php echo get_bloginfo('name');?></a>
		</div>
<div class="nav col-sm-8 justify-content-end my-2 pt-4" id="nav">
		<?php
		wp_nav_menu(array(
			'menu'=>'header',
			'container'=> '',
			'theme_location' =>'header',
			'items_wrap' => '<ul id="" class = "nav__items  d-flex text-light">%3$s</ul>'
		
			));
		?>
		
			<!-- <ul class="nav__items  d-flex text-light">
				<a class="nav__items__item mx-2">CONCERTS</a>
				<a class="nav__items__item mx-2">CONTESTS</a>
				<a class="nav__items__item mx-2">CALENDER</a>
				<a class="nav__items__item mx-2">CONNECT</a>
			</ul> -->
		</div>
		<div class="burger" id="burger">
			<span className="burger-line"></span>
		</div>
	</header>