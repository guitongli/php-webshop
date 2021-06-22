<div class="blog-container d-flex flex-column align-items-center">
          
  <h2 class='event-date'><?php $custom_post_type = get_post_meta($post->ID, 'event_date', true);
    echo $custom_post_type;
       ?></h2> 
       <h1 class="blog-title headline"><?= the_title()?></h1>
           <h2 class='excerpt'><?php the_excerpt(); ?></h2>
               
                <?php the_content();
              
      
                the_tags('<span class=" mt-5 tag"><i class="fa fa-tag"></i>','</span><span class="tag"><i class="fa fa-tag"></i>','</span>');
                
?>
 <div class="meta-data publish-date"><span>Pushlished on <?php the_date()?></span><span class = 'date'></span><span class = 'tag'></span></div>

            </div>
            
          
          

</div>

            