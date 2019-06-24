<?php
if ( function_exists( 'add_image_size' ) ) { 

add_image_size( 'capa', 1920, 693, true );
add_image_size( 'capa-mobile', 768, 693, true );
add_image_size( 'superbanner', 412, 844, true );
}

// Desativa o Gutemberg para posts
add_filter('use_block_editor_for_post', '__return_false', 10);

// Desativa o Gutemberg para tipos de post personalizados
add_filter('use_block_editor_for_post_type', '__return_false', 10);

// Ativa os thumbnails e menus
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
}

add_action( 'after_setup_theme', 'register_custom_nav_menus' );
function register_custom_nav_menus() {
	register_nav_menus( array(
		'primary' => 'Menu principal',
		'menu2' => 'Menu secundário',
		'footer1' => 'Menu do rodapé 1',
		'footer2' => 'Menu do rodapé 2'
	) );
}

// Register Custom Navigation Walker
require_once get_template_directory() . '/ferramentas/bootstrap-wp-navwalker/class-wp-bootstrap-navwalker.php';