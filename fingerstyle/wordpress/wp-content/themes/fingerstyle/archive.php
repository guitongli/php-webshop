<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
		the_title();
	}
}
?>

<?php get_header()?>
<div class="test-area">


</div>
<?php get_footer()?>