<?php get_header()?>
<div class="archive d-flex flex-column align-items-center">
<h1 class = 'headline text-center'>
<?php the_category();?>
</h1 >
<h3 class= 'category-description '><?php $catID = get_the_category();
echo category_description( $catID[0] );?>
</h3>

<?php if(have_posts()){
	while(have_posts()){
	   the_post();
        get_template_part('template-parts/content','archive');
	};
}
?>


<div class="test-area">


</div>
</div>
<?php get_footer()?>