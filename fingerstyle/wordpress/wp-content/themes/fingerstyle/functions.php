<?php

// function theme_support (){


add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');
// add_action('after_setup_theme', 'theme_support');


function menus(){
    $locations = array(
        'header' => 'header menu',
        'footer' => 'footer menu'
    );
    register_nav_menus($locations);
    
}

add_action('init', 'menus');

function fc_register_styles(){

    $version= wp_get_theme()->get('Version');
    wp_enqueue_style('scss', get_template_directory_uri()."/style.css", array('bootstrap', 'fontawesome'),"1.0",'all');
    wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css", array(),$version,'all');
    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(),"5.15.3",'all');
    wp_enqueue_style('owlcarousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(),"2.3.4",'all');
    wp_enqueue_style('owlcarousel-theme', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css", array(),"2.3.4",'all');
}

add_action('wp_enqueue_scripts', 'fc_register_styles');

function fc_register_scripts(){
    $version= wp_get_theme()->get('Version');
    wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js", array(),"5.0.0", true);
    wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js", array(),"3.6.0", true);
    wp_enqueue_script('popper', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js", array(),"2.9.1", true);
    wp_enqueue_script('owlcarousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js", array(),"2.3.4", true);
    wp_enqueue_script('gsap', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js", array(),"3.6.1", true);
    wp_enqueue_script('scrolltrigger', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js", array(),"3.6.1", true);
    wp_enqueue_script('textplugin', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/TextPlugin.min.js", array(),"3.6.1", true);
    wp_enqueue_script('easepack', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/EasePack.min.js", array(),"3.6.1", true);
    wp_enqueue_script('smoothscrollbar', "https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.6.1/smooth-scrollbar.min.js", array(),"8.6.1", true);
    wp_enqueue_script('isotope', "https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js", array(),"3.0.6", true);
    wp_enqueue_script('snap', get_template_directory_uri()."/assets/js/snap.js", array('jquery'),"1.0", true);
    wp_enqueue_script('index', get_template_directory_uri()."/assets/js/index.js", array('jquery'),"1.0", true);
    }

add_action('wp_enqueue_scripts', 'fc_register_scripts');
?>