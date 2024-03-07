<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('foce-style', get_stylesheet_directory_uri() . '/css/style.css' );// le css du theme enfant
    wp_enqueue_style('swiper-style', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css',array(),'11.0','all');// le css fournit avec swiper
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );
function theme_enqueue_scripts() {
    wp_enqueue_script('scripts', get_theme_file_uri() . '/scripts/script.js',array('jquery'),1.0,true );// defilement au scroll
    wp_enqueue_script('script_swiper', get_theme_file_uri() . '/scripts/swiper.js',array(),1.0,true );// script du carrousel
    wp_enqueue_script('menu', get_theme_file_uri() . '/scripts/menu.js',array(),1.0,true );// script d'ouverture et fermeture du menu
    wp_enqueue_script('parallax-effect', get_theme_file_uri() . '/scripts/parallax.js',array(),1.0,true );// parallax du header et de la section #place 
    wp_enqueue_script('simpleparallax', get_theme_file_uri() . '/library/simpleParallax.min.js',array(),5.5,true);// la librairie .js de SimpleParallax
    wp_enqueue_script('swiper', get_theme_file_uri() . '/library/swiper-bundle.min.js',array(),11.0,true);// la librairie .js de Swipper
}

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}