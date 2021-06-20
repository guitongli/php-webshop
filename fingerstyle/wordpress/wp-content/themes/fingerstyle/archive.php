<?php get_header()?>
<?php
the_category();
if(have_posts()){
	while(have_posts()){
	   the_post();
        get_template_part('template-parts/content','archive');
	};
}
?>


<div class="test-area">


</div>
<?php get_footer()?>