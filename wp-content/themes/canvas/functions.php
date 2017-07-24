<?php

function canvas_theme_styles() {
  wp_enqueue_style( 'canvas-bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style( 'canvas-theme', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'canvas-swiper', get_template_directory_uri() . '/css/swiper.css');
  wp_enqueue_style( 'canvas-dark', get_template_directory_uri() . '/css/dark.css');
  wp_enqueue_style( 'canvas-font-icons', get_template_directory_uri() . '/css/font-icons.css');
  wp_enqueue_style( 'canvas-animate', get_template_directory_uri() . '/css/animate.css');
  wp_enqueue_style( 'canvas-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_style( 'canvas-responsive', get_template_directory_uri() . '/css/responsive.css');
}
add_action( 'wp_enqueue_scripts', 'canvas_theme_styles' );

function canvas_theme_scripts() {
    wp_enqueue_script( 'canvas_jquery', get_template_directory_uri() . '/js/jquery.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'canvas_plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'canvas_functions', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'canvas_theme_scripts' );

//Navigation Menus

add_filter( 'show_admin_bar', '__return_false' );
add_theme_support( 'post-thumbnails' );

add_theme_support( 'menus' );

function register_theme_menus() {
  register_nav_menus(
    array(
      'primary'  => __( 'Primary' )
    )
  );

}
add_action( 'init', 'register_theme_menus' );

// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => __( 'Portfolio', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => __( 'Portfolio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Portfolio', 'text_domain' ),
		'name_admin_bar'        => __( 'Portfolio', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'add_new_item'          => __( 'Add New', 'text_domain' ),
		'add_new'               => __( 'New Item', 'text_domain' ),
		'new_item'              => __( 'New Portfolio', 'text_domain' ),
		'edit_item'             => __( 'Edit Portfolio', 'text_domain' ),
		'update_item'           => __( 'Update Portfolio', 'text_domain' ),
		'view_item'             => __( 'View Portfolio', 'text_domain' ),
		'view_items'            => __( 'View', 'text_domain' ),
		'search_items'          => __( 'Search', 'text_domain' ),
		'not_found'             => __( 'No items found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No items found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Portfolio', 'text_domain' ),
		'description'           => __( 'Portfolio Items', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
    'rewrite'               => array( 'slug' => 'portfolio-single', 'with_front' => false ),
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );

// class Microdot_Walker_Nav_Menu extends Walker_Nav_Menu {
//     public function start_lvl( &$output, $depth = 0, $args = array() ) {
//         $output .= '<div class="mega-menu-content style-2 clearfix"><ul class="mega-menu-column col-md-6">';
//     }
//
//     public function end_lvl( &$output, $depth = 0, $args = array() ) {
//         $output .= '</ul></div>';
//     }
//
//     public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
//         $classes = array();
//         if( !empty( $item->classes ) ) {
//             $classes = (array) $item->classes;
//         }
//
//         $active_class = '';
//         if( in_array('current-menu-item', $classes) ) {
//             $active_class = ' class="active"';
//         } else if( in_array('current-menu-parent', $classes) ) {
//             $active_class = ' class="active-parent"';
//         } else if( in_array('current-menu-ancestor', $classes) ) {
//             $active_class = ' class="active-ancestor"';
//         }
//
//         $url = '';
//         if( !empty( $item->url ) ) {
//             $url = $item->url;
//         }
//
//         $output .= '<li class="mega-menu" '. $active_class . '><a href="' . $url . '"class="sf-with-ul">' . $item->title . '</a>';
//     }
//
//     public function end_el( &$output, $item, $depth = 0, $args = array() ) {
//         $output .= '</li>';
//     }
// }

?>
