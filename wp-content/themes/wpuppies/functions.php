<?php 
function wpuppies_assets() {
    // Déclarer le JS
	wp_enqueue_script( 
        'bootstrap', 
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', 
        array(), 
        '1.0',
        array('strategy'  => 'defer', 'in_footer' => true)
        
    );

    
    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style( 
        'wpuppies',
        get_stylesheet_uri(),
        array('bootstrap'),
        '1.0'
    );
    wp_enqueue_style(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );
    // Déclarer le fichier CSS à un autre emplacement
    // wp_enqueue_style( 
    //     'wpup', 
    //     get_template_directory_uri() . 'style.css',
    //     array(), 
    //     '1.0'
    // );
}
add_action( 'wp_enqueue_scripts', 'wpuppies_assets' );
add_theme_support( 'post-thumbnails' );