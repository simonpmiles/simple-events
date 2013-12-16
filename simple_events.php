<?php
/*
Plugin Name: Simple Events
Plugin URI: http://badgersaregreat.com
Description: A simple events plugin with minimal styling.
Version: 1.0
Author: Simon P Miles
Author URI: http://www.bigspring.co.uk
License: GPL2
*/

//process custom taxonomies if they exist
add_action( 'init', 'simple_events_setup', 0 );

//fire up the ACF plugin
define( 'ACF_LITE' , true );
include_once('advanced-custom-fields/acf.php' );

function simple_events_setup() {

	
	    $labels = array( 
	        'name' => _x( 'Events', 'events' ),
	        'singular_name' => _x( 'Event', 'events' ),
	        'add_new' => _x( 'Add New', 'events' ),
	        'add_new_item' => _x( 'Add New Event', 'events' ),
	        'edit_item' => _x( 'Edit Event', 'events' ),
	        'new_item' => _x( 'New Event', 'events' ),
	        'view_item' => _x( 'View Event', 'events' ),
	        'search_items' => _x( 'Search Event', 'events' ),
	        'not_found' => _x( 'No events found', 'events' ),
	        'not_found_in_trash' => _x( 'No events found in Trash', 'events' ),
	        'parent_item_colon' => _x( 'Parent Event:', 'events' ),
	        'menu_name' => _x( 'Events', 'event' ),
	    );
	
	    $args = array( 
	        'labels' => $labels,
	        'hierarchical' => true,
	        'description' => 'Product custom post type',
	        'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
/* 	        'taxonomies' => array( 'post_tag' ),  */
	        'public' => true,
	        'show_ui' => true,
	        'show_in_menu' => true,
	        'menu_position' => 5,
	        'menu_icon' => plugins_url() . '/simple-events/img/group.png',
	
	        
	        'show_in_nav_menus' => true,
	        'publicly_queryable' => true,
	        'exclude_from_search' => false,
	        'has_archive' => true,
	        'query_var' => true,
	        'can_export' => true,
	        'rewrite' => true,
	        'capability_type' => 'post'
	    );
	
	    register_post_type( 'events', $args );
	    
	    
	    
	    //register the events category taxonomy
		register_taxonomy('event_categories',array (
		  0 => 'events',
		),array( 'hierarchical' => true,'label' => 'Event Categories','show_ui' => true,'query_var' => true,'rewrite' => array('slug' => ''),'singular_label' => 'Event Category') );	    
	    
/**
 *  Register Field Groups
 *
 *  The register_field_group function accepts 1 array which holds the relevant data to register a field group
 *  You may edit the array as you see fit. However, this may result in errors if the array is not compatible with ACF
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_event-details',
		'title' => 'Event Details',
		'fields' => array (
			array (
				'key' => 'field_5200e14facb1f',
				'label' => 'Date',
				'name' => 'date',
				'type' => 'date_picker',
				'date_format' => 'yymmdd',
				'display_format' => 'dd/mm/yy',
				'first_day' => 1,
			),
			array (
				'key' => 'field_5200e169acb20',
				'label' => 'Time',
				'name' => 'time',
				'type' => 'text',
				'instructions' => 'Use the 24h clock',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e19aacb21',
				'label' => 'Venue Name',
				'name' => 'venue_name',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e1b0acb22',
				'label' => 'Address One',
				'name' => 'address_one',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
						array (
				'key' => 'field_5200e1b0acb30',
				'label' => 'Address Two',
				'name' => 'address_two',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e1b0acb31',
				'label' => 'Address Three',
				'name' => 'address_three',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),

			array (
				'key' => 'field_5200e1c3acb23',
				'label' => 'City',
				'name' => 'city',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e1d0acb24',
				'label' => 'Post Code',
				'name' => 'post_code',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e1e3acb25',
				'label' => 'Country',
				'name' => 'country',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e1f4acb26',
				'label' => 'Cost',
				'name' => 'cost',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e211acb27',
				'label' => 'Facebook Link',
				'name' => 'facebook_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e221acb28',
				'label' => 'Website Link',
				'name' => 'website_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5200e22cacb29',
				'label' => 'Google Maps Link',
				'name' => 'google_maps_link',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'events',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
				0 => 'custom_fields',
				1 => 'discussion',
				2 => 'comments',
				3 => 'slug',
				4 => 'author',
				5 => 'format',
				6 => 'categories',
				7 => 'tags',
				8 => 'send-trackbacks',
			),
		),
		'menu_order' => 1,
	));
}


//Template fallback
add_action("template_redirect", 'my_theme_redirect');

function my_theme_redirect() {
    global $wp;
    $plugindir = dirname( __FILE__ );
    $themepath = get_template_directory_uri();

    //Single event view
    if ($wp->query_vars["post_type"] == 'events' && is_singular('events')) {
	        $templatefilename = 'single-events.php';
	        if (file_exists($themepath . '/' . $templatefilename)) {
	            $return_template = $themepath . '/' . $templatefilename;
	        } else {
	            $return_template = $plugindir . '/simple-events-templates/' . $templatefilename;
	        }
        do_theme_redirect($return_template);
        
    //Archive event view
    } elseif ($wp->query_vars["post_type"] == 'events' && is_post_type_archive('events')) {
	        $templatefilename = 'archive-events.php';
	        if (file_exists($themepath . '/' . $templatefilename)) {
	            $return_template = $themepath . '/' . $templatefilename;
	        } else {
	            $return_template = $plugindir . '/simple-events-templates/' . $templatefilename;
	        }
        do_theme_redirect($return_template);
        

    //Taxonomy Page
    } elseif ($wp->query_vars["taxonomy"] == 'events_categories') {
        $templatefilename = 'taxonomy-events_categories.php';
        if (file_exists($themepath . '/' . $templatefilename)) {
            $return_template = $themepath . '/' . $templatefilename;
        } else {
            $return_template = $plugindir . '/simple-events-templates/' . $templatefilename;
        }
        do_theme_redirect($return_template);

    }
}

function do_theme_redirect($url) {
    global $post, $wp_query;
    if (have_posts()) {
        include($url);
        die();
    } else {
        $wp_query->is_404 = true;
    }
}


}//end simple_events_setup






