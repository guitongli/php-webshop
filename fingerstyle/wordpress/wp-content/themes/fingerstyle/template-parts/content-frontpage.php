<main>
		<div class="banner">
			<div class="container">
				<section class="description panel blue">
					<div class="intro">
						<h1>
							<span class='box'></span>
							<span class='equation'>FingerstyleChina is</span>
							<span class='text'></span>
							<span class='cursor'>_</span>
						</h1>


						<div class="arrow bounce"></div>
					</div>
				</section>

<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
);
$query = new WP_Query($args);
while ($query->have_posts()): $query->the_post();
    ?>
					<section class="panel red">
						<!-- <span class='banner-date'>
							<?php $custom_date = get_post_meta($post->ID, 'event_date', true);
    echo $custom_date;?>


						</span>
						<p class='banner-event'><?php the_title();?></p> -->


						<a href="<?php echo get_permalink($post->ID); ?>">
						<img src="<?php the_post_thumbnail_url('post-thumbnail');

    ?>" /></a>
					</section>
					<?php endwhile;
wp_reset_query();?>
				<!-- <section class="panel orange">
					<span class='banner-date'>
						20 Aug 2021
					</span>

					<p class='banner-event'>

						Masterclass / Competition w/ Tommy Emmanual
					</p>
					<img src="./assets/asset2.jpg" />
				</section>
				<section class="panel purple">

					<span class='banner-date'>20 Aug 2021</span>

					<p class='banner-event'>
						Guitar Festival
					</p>
					<img src="./assets/asset3.jpg" />
				</section> -->
			</div>
		</div>
		<div class="introduction">
			<div class="cInnerContent">
				<h2 class="header-section headline gs_reveal ipsType_center">
					Fingerstyle China
				</h2>

				<div class="features">
					<div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
						<div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromLeft">
							<div class="card">
								<img width="479" src="./assets/asset4.png" alt="" />
							</div>
						</div>

						<div class="ipsGrid_span7 ipsType_left">
							<h2 class="heading_large gs_reveal">

								<strong>Contests</strong>

							</h2>
							<p class="gs_reveal">
							<h3>International guitar contest series branded as "WAGF" and ukulele contests branded as
								"MAUF" provide yearly opportunies for all guitarists to showcase their original music
								and playing skills. </h2>
								<a href="#">learn more</a>
								</p>
						</div>
					</div>

					<div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
						<div class="ipsGrid_span7 ipsType_right">
							<h2 class="heading_large gs_reveal">

								<strong>Concerts</strong>
							</h2>
							<h3> With influence reaching all Chineses provinces we hold over 120 concerts in a year
								</h2>
								<a href="#">learn more</a>
						</div>

						<div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromRight">
							<div class="card">
								<img width="479" src="https://picsum.photos/479/479?index=2" alt="" />
							</div>
						</div>
					</div>

					<div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
						<div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromLeft">
							<div class="card">
								<img width="479" src="https://picsum.photos/479/479?index=3" alt="" />
							</div>
						</div>

						<div class="ipsGrid_span7 ipsType_left">
							<h2 class="heading_large gs_reveal">

								<strong>Guitar Education</strong>
							</h2>
							<h3 class="gs_reveal">
								We hold regular Masterclasses and publish guitar books tailored for guitar players of
								all levels
							</h3>
							<a href="#">download brochure (Chinese)</a>
						</div>
					</div>

					<div class="feature ipsSpacer_bottom_double ipsGrid ipsGrid_collapsePhone">
						<div class="ipsGrid_span7 ipsType_right">
							<h2 class="heading_large gs_reveal">
								<strong>Media Network</strong>
							</h2>
							<h3 class="gs_reveal">
								We connect a network of more than a million guitar lovers via wechat, weibo, offline
								events and local outreaches
							</h3>
							<a href="#">reach out</a>
						</div>

						<div class="featured-image-container ipsGrid_span5 gs_reveal gs_reveal_fromRight">
							<div class="card">
								<img width="479" src="https://picsum.photos/479/479?index=4" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<?php
get_template_part('template-parts/content', 'news');?>

		<div class="contact p-3">
			<h1 class="headline text-center">Get in Touch</h1>
			<div class="contact-container d-flex justify-content-around">
				<div class="contact-head col-sm-2 pb-5"><img src="./assets/color-logo.jpeg" class="img-fluid">
					 </div>

				<form action="" class="form-row col-sm-7 pb-5">
					<div class=" d-flex flex-column">
						<input type="email" class="form-control m-2" placeholder="Email*" />
						<input type="url" class="form-control  m-2" placeholder="URL" />
						<input type="text" class="form-control  m-2" placeholder="Message*" />
						<button type="submit" class="btn btn-primary mx-2">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>
