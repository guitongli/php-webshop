<?php get_header()?>
<div class="archive d-flex flex-column align-items-center">
<h1 class = 'headline mb-5 text-center'>
<?php the_category()?>
</h1 >
<h3 class= 'category-description mt-5'><?php $catID = get_the_category();
echo category_description( $catID[0] );?>
</h3>
<div class="blog-container m-5">
<?php if(have_posts()){
	while(have_posts()){
	   the_post();
        get_template_part('template-parts/content','archive');
	};
}
?>

</div> 
</div>
<?php get_footer()?>