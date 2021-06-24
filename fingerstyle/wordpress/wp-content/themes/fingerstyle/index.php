
<?php get_header()?> 
<?php
if(have_posts()){
	while(have_posts()){
		the_post();
		the_content();
        the_title();
		the_excerpt();
		
        get_template_part('template-parts/content','archive');
	};
}
?>


 
<?php get_footer()?>