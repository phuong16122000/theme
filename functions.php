
<?php
function team06_theme_support(){
  //Adds dynamic title tag support
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','team06_theme_support');

function team06_menus(){

    $location = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($location);
}

add_action('init','team06_menus');



function team06_register_styles(){
    $version = wp_get_theme()->get( 'version' );

    wp_enqueue_style('style' , get_stylesheet_uri(), array('bootstrap'), $version, 'all'); 
    wp_enqueue_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" , array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'team06_register_styles');



function team06_register_scripts(){
  
    wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('main',get-stylesheet_uri(). "/assets/js/main.js", array(), '1.0', true);

    
}

add_action( 'wp_enqueue_scripts', 'team06_register_styles');


function team06_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'decription' => 'Sidebar Widget Area'
        )
    );

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
            'name' => 'Footer Area',
            'id' => 'footer-1',
            'decription' => 'Footer Widget Area'
        )
    );
}

add_action( 'widgets_init', 'team06_widget_areas');
?>
