front page
<?php get_header()?>
<div class="test-area">
<?php if(have_posts()){
	while(have_posts()){
		the_post();
		
		get_template_part('template-parts/content','archive');
	}
}
?>


</div>
<?php get_footer()?>