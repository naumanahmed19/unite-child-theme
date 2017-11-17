<?php 

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
 
    // update path
    $path = get_stylesheet_directory() . '/inc/acf/acf-core/';
    
    // return
    return $path;
    
}
 

// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/inc/acf/acf-core/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
//add_filter('acf/settings/show_inc', '__return_false');


// 4. Include ACF
include_once( get_stylesheet_directory() . '/inc/acf/acf-core/acf.php' );


//define( 'ACF_LITE', true );


function xv_radio_img($img_name=''){

	return '<img src="'.get_template_directory_uri() .'/inc/assets/images/'.$img_name.'"/>';
}

if( function_exists('acf_add_local_field_group') ):
	
	acf_add_local_field_group(array (
		'key' => 'group_5a0d4c8eb956d',
		'title' => 'Film Options',
		'fields' => array (
			array (
				'key' => 'field_5a0d4c98cf92e',
				'label' => 'Ticket Price',
				'name' => 'ticket_price',
				'type' => 'number',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => 'Price',
				'prepend' => '$',
				'append' => '',
				'min' => '',
				'max' => '',
				'step' => '',
			),
			array (
				'key' => 'field_5a0d4d13cf92f',
				'label' => 'Release Date',
				'name' => 'release_date',
				'type' => 'date_picker',
				'instructions' => '',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array (
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'display_format' => 'd/m/Y',
				'return_format' => 'd/m/Y',
				'first_day' => 1,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'film',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => 1,
		'description' => '',
	));
	
	endif;
