<?php 

function mestre_css() {
    // Registrar e também carregar o estilo
	wp_enqueue_style( 'mestre_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'mestre_css' );
add_theme_support( 'post-thumbnails' );
function mestre_aulas() {
    register_post_type('Aulas', array(
        'labels' => array(
            'name' => 'Aula',
            'singular_name' => 'Aula',
        ),
        'public' => true,
        'has_archive' => true,
        'post_status'   => 'draft',
        'rewrite' => array('slug' => 'aula'), // Customize o slug
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    ));
}
add_action('init', 'mestre_aulas');


