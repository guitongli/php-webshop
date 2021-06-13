<?php
the_category();
if(have_posts()){
	while(have_posts()){
	   the_post();
        get_template_part('template-parts/content','archive');
	};
}
?>

<?php get_header()?>
<div class="test-area">


</div>
<?php get_footer()?>