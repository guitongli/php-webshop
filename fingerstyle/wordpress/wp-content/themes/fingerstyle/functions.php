<?php

add_action('admin_init', 'custom_metabox');
function custom_metabox(){
    add_meta_box('event_date','Event Date', 'custom_metabox_field','post', 'normal','low');
}

function custom_metabox_field(){
    global $post;
    $data = get_post_custom($post->ID);
    // var_dump($data['event_date']);
    $val=isset($data['event_date'])? 
   esc_attr( $data['event_date'][0]):'';
    echo '<input type="date" name="event_date" id="event_date" value="'.$val.'"/>';
}

add_action('save_post','save_date');
function save_date(){
    global $post;
//     if(define('DOING_AUTOSAVE') && DOING_AUTOSAVE){
// return $post->ID;        
//     }
    update_post_meta($post->ID,'event_date',$_POST['event_date']);
}



// function custom_metabox (){
//     add_meta_box('event-date','Event Date', [$this, 'meta_box_html'], ['post'],'side');
// };

// function custom_metabox_field(){
//     echo 'hi';
// };
// class wpc_event_date {
//     public function __construct(){
//         add_action('add_meta_boxes', [$this, 'create_meta_box']);
//         add_action('save_post',[$this, 'save_date']);
//     }
//     public function create_meta_box(){
//         add_meta_box('event_date','Event Date', [$this, 'meta_box_html'], ['post']);
//     }

//     public function save_date($post_id){
//         if(isset($_POST['event_date'])){
// $event_date=sanitize_text_field($_POST['event_date']);
// update_post_meta($spot_id,'event_date', $event_date);
//         }
//         var_dump($_POST['event_date']);
//         echo "hello";
//     }
//     public function meta_box_html(){
//         var_dump(get_post_meta(get_the_ID(),'event_date', true))

//       <label for="event_date">Event Date</label>
// <input name ='event_date' type="date"/> -->

//     }
// }
// new wpc_event_date();



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
    wp_enqueue_style('scss', get_template_directory_uri()."/assets/css/style.css", array('bootstrap', 'fontawesome'),"",'all');
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
    wp_enqueue_script('snap', get_template_directory_uri()."/assets/js/snap.js", array('jquery'),"", true);
    wp_enqueue_script('index', get_template_directory_uri()."/assets/js/index.js", array('jquery'),"", true);
    }

add_action('wp_enqueue_scripts', 'fc_register_scripts');
function widget_areas(){
    register_sidebar(
        array(
            'before_title' => '',
            'after_title'=>'',
            'before_widget' => '',
            'after_widget' => '',

 
            'name'=>'Sidebar Area',
            'id'=> 'sidebar-1',
            'description' => 'widget area'
        
        )
        );
}
add_action('widgets_init', 'widget_areas');


?>