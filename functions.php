<?php
// Main options
add_action( 'init', 'Miguel' );
function Miguel() {
    ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
    if (function_exists('acf_add_options_page')) {
        $parent = acf_add_options_page(array(
            'page_title' 	=> 'Configuración',
            'menu_title'	=> 'Configuración',
            'menu_slug' 	=> 'configuracion',
            'redirect'		=> false
        ));
    }

    register_post_type(
        'Carrera', array(
            'labels'        =>  array('name' => 'Carreras', 'singular_name' => 'Carrera'),
            'public'        =>  TRUE,
            'rewrite'       =>  array( 'slug' => 'Carrera' ),
            'menu_icon'     =>  'dashicons-book-alt',
            'has_archive'   =>  TRUE,
            'hierarchical'  =>  true,
            'supports'      =>  array( 'title', 'editor', 'excerpt' , 'revisions', 'thumbnail','page-attributes'),

        )

    );
}

// Add theme support for post thumbnails
add_theme_support( 'post-thumbnails' );