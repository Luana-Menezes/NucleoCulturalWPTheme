<?php

function load_scripts(){
	wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-main', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css' );


	wp_register_script( 'jquery-two', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'popper-min', get_template_directory_uri() . '/js/popper.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'bootstrap-min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'parceiros', get_template_directory_uri() . '/js/parceiros.js', array('jquery-two'), null, true );
	wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/releases/v5.7.2/js/all.js', array('jquery-two'), null, true );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

register_nav_menus( array(
	'primary' => __( 'Menu Principal', 'NucleoCulturalWPTheme' ),
) );

// Brand Image on navbar
require_once get_template_directory() . '/inc/brand-logo-customize.php';



