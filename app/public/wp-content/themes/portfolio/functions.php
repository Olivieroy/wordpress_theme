<?php

function theme_styles() {
    // appeler le fichier master.css dans le dossier assets/css 
    wp_enqueue_style( 'master_css', get_template_directory_uri() . '/assets/css/master.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

function theme_js() {
    // appeler le fichier master.js dans le dossier assets/js 
    wp_enqueue_script( 'master_js', get_template_directory_uri() . '/assets/js/master.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );


function theme_supports() {
    // ajouter la prise en charge des images mises en avant
    add_theme_support( 'post-thumbnails' );
    // ajouter automatiquement le titre du site dans l'en-tête du site
    add_theme_support( 'title-tag' );
    // ajouter le menu
    register_nav_menu( 'header-menu', __( 'Header Menu' ) );
    //ajouter un logo
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_supports' );


// Tiltle tag
function theme_slug_setup() {
    add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );