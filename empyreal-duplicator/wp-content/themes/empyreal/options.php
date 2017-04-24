<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {

	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'options_framework_theme'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_framework_theme'),
		'two' => __('Two', 'options_framework_theme'),
		'three' => __('Three', 'options_framework_theme'),
		'four' => __('Four', 'options_framework_theme'),
		'five' => __('Five', 'options_framework_theme')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_framework_theme'),
		'two' => __('Pancake', 'options_framework_theme'),
		'three' => __('Omelette', 'options_framework_theme'),
		'four' => __('Crepe', 'options_framework_theme'),
		'five' => __('Waffle', 'options_framework_theme')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the posts into an array
	$options_posts = array();
	$options_posts_obj = get_posts(array('posts_per_page'=> -1));
	$options_posts[''] = 'Select a post';
	foreach ($options_posts_obj as $post) {
		$options_posts[$post->ID] = $post->post_title;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/inc/images/';
	
	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

	$options = array();

	$options[] = array(
		'name' => __('Basic Settings', 'options_framework_theme'),
		'type' => 'heading');

	$options[] = array(
		'name' => __('Logo', 'options_framework_theme'),
		'id' => 'logo',
		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Copyrights','options_framework_theme'),
		'id' => 'copyrights',
		'std' => 'Copyrights',
		'type' => 'text');
	
	
	$options[] = array(
		'name' => __('Home Page Settings', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Welcome Text in Home page', 'options_framework_theme'),
		'id' => 'welcome',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('About Us', 'options_framework_theme'),
		'id' => 'about_us',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('Cloud Technologies', 'options_framework_theme'),
		'id' => 'cloud',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	$options[] = array(
		'name' => __('IT Managed', 'options_framework_theme'),
		'id' => 'it_managed',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
	if ( $options_posts ) {
	
		$options[] = array(
		'name' => __('Latest Technologies Post', 'options_framework_theme'),
		'id' => 'latest_technologies',
		'type' => 'select',
		'options' => $options_posts);
	}
		
	$options[] = array(
		'name' => __('Titles', 'options_framework_theme'),
		'type' => 'heading');	
		
	$options[] = array(
		'name' => __('Service Title','options_framework_theme'),
		'id' => 'service_title',
		'std' => 'Our Services',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Testimonial title','options_framework_theme'),
		'id' => 'testimonial_title',
		'std' => 'Testimonials',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Sharing Settings', 'options_framework_theme'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Facebook','options_framework_theme'),
		'id' => 'facebook',
		'std' => '#Facebook',
		'type' => 'text');

	$options[] = array(
		'name' => __('Twitter','options_framework_theme'),
		'id' => 'twitter',
		'std' => '#Twitter',
		'type' => 'text');
	
		$options[] = array(
		'name' => __('Instagram','options_framework_theme'),
		'id' => 'instagram',
		'std' => '#Instagram',
		'type' => 'text');
		
	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

	return $options;
}