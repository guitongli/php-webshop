
<div class="blog d-flex border m-2 align-items-center">
                                 <a href="#"
											>

											<img
												src=" <?php the_post_thumbnail_url('post-thumbnail');?>"
												class="blog-hero"
										/>
									</a>
										<div
											class="blog-text d-flex align-items-center justify-content-around"
										>
											

											<div class="blog-headlines">
											<div
												class="blog-date d-flex flex-column"
											>
												<span class="day"><?php $custom_date = get_post_meta($post->ID, 'event_date', true);
                                              echo $custom_date;?></span>
											</div>
											<a href="<?php echo get_permalink($post->ID); ?>" class="p-1">	<h3 class="blog-preview-title">
													<?php the_title();?>
												</h3>
												<h4 class="blog-intro">
													<?php the_excerpt();?>
												</h4></a>

											 
											</div>
										</div>
									
						



           



</div>
