<?php
// Theme Options
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
require_once get_template_directory() . '/options.php';
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );
function optionsframework_custom_scripts() { ?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});
	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}
});
</script>
<?php }
//Initial Settings
add_theme_support('post-thumbnails');
add_image_size( 'slider', 1370, 806, true );
add_image_size( 'services', 134, 134, true );
add_image_size( 'testimonial', 108, 108, true );

//Menus
register_nav_menu('main', 'Main navigation menu');
register_nav_menu('bottom', 'Bottom navigation menu');

//Slider
	$labels = array( 'name' => 'Slider', 'singular_name' => 'Slider', 'add_new' => 'Add New', 'add_new_item' => 'Add New Slider', 'edit_item' => 'Edit Slider', 'new_item' => 'New Slider', 'all_items' => 'All Sliders', 'view_item' => 'View Slider', 'search_items' => 'Search Sliders', 'not_found' =>  'No Sliders found', 'not_found_in_trash' => 'No Sliders found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Sliders' );
	
	$args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'slider' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array( 'title', 'thumbnail' ,'editor'), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/slider.png' );
	register_post_type( 'slider', $args );
	
//Services
	$labels = array( 'name' => 'Services', 'singular_name' => 'Services', 'add_new' => 'Add New', 'add_new_item' => 'Add New Service', 'edit_item' => 'Edit Services', 'new_item' => 'New Services', 'all_items' => 'All Services', 'view_item' => 'View Services', 'search_items' => 'Search Services', 'not_found' =>  'No Servicess found', 'not_found_in_trash' => 'No Services found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Services' );
	
	$args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'services' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array( 'title', 'thumbnail' ,'editor'), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/pin.png' );
	register_post_type( 'Services', $args );
	
//Testimonial
	$labels = array( 'name' => 'Testimonial', 'singular_name' => 'Testimonial', 'add_new' => 'Add New', 'add_new_item' => 'Add New Testimonial', 'edit_item' => 'Edit Testimonial', 'new_item' => 'New Testimonial', 'all_items' => 'All Testimonials', 'view_item' => 'View Testimonial', 'search_items' => 'Search Testimonials', 'not_found' =>  'No Testimonials found', 'not_found_in_trash' => 'No Testimonials found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Testimonials' );
	
	$args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'testimonial' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array( 'title', 'thumbnail' ,'editor'), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/testimonial.png' );
	register_post_type( 'Testimonial', $args );
	
//Client
	$labels = array( 'name' => 'Client', 'singular_name' => 'Client', 'add_new' => 'Add New', 'add_new_item' => 'Add New Client', 'edit_item' => 'Edit Client', 'new_item' => 'New Client', 'all_items' => 'All Clients', 'view_item' => 'View Client', 'search_items' => 'Search Clients', 'not_found' =>  'No Clients found', 'not_found_in_trash' => 'No Clients found in Trash', 'parent_item_colon' => '', 'menu_name' => 'Clients' );
	
	$args = array( 'labels' => $labels, 'public' => true, 'publicly_queryable' => true, 'show_ui' => true,  'show_in_menu' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'client' ), 'capability_type' => 'post', 'has_archive' => true, 'hierarchical' => false,'menu_position' => null,'supports' => array('thumbnail'), 'menu_icon' => get_bloginfo( 'template_url').'/inc/images/clients.png' );
	register_post_type( 'Client', $args );
		
//Widget Area

register_sidebar(array(
  'name' => __( 'Blog Sidebar' ),
  'id' => 'sidebar',
  'description' => __( 'Widgets in this area will be shown on the sidebar.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Footer Box 1' ),
  'id' => 'footer_box_1',
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Footer Box 2' ),
  'id' => 'footer_box_2',
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Footer Box 3' ),
  'id' => 'footer_box_3',
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

register_sidebar(array(
  'name' => __( 'Footer Box 4' ),
  'id' => 'footer_box_4',
  'description' => __( 'Widgets in this area will be shown on the footer.' ),
  'before_title' => '<h4>',
  'after_title' => '</h4>'
));

function excerpt( $num=50 )
{
	$limit = $num+1;
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerpt);
	$excerpt = implode(" ",$excerpt);
	echo $excerpt;
}
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"dropdown-menu\">\n";
  }
}