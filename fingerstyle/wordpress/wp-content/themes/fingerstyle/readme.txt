<div class="grid-item border m-2 p-3 <?php the_tags();?>">
								<a href="#"
									>
								 
									<img
										src=" <?php the_post_thumbnail_url('post-thumbnail');?>"
										class="blog-preview"
								/>
							</a>
								<div
									class="blog-text d-flex align-items-center justify-content-around"
								>
									<div
										class="blog-date d-flex flex-column align-items-center"
									>
										<span class="day"><?php $custom_date = get_post_meta($post->ID, 'event_date', true);
                      echo $custom_date;?></span>
									</div>

									<div class="blog-headlines">
										<h3 class="blog-title">
											<?php the_title();?>
										</h3>
										<h4 class="blog-intro">
											<?php the_excerpt();?>
										</h4>
										 
										<a href="<?php echo get_permalink($post->ID);?>" class="p-1">read more...</a>
									</div>
								</div>
							</div>
				</div>  