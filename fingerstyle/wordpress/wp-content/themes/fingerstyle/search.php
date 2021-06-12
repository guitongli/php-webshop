<?php
if(have_posts()){
	while(have_posts()){
		 
		 get_template_part('template-parts/content','archive');
}}

?> 
