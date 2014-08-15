<?php
/**
 * Custom Fields
 *
 * @package cece
 * 
**/


if(function_exists("register_field_group")){
	register_field_group(array (
		'id' => 'acf_format-gallery',
		'title' => 'Format Gallery',
		'fields' => array (
			array (
				'key' => 'field_51b01e988b9a1',
				'label' => 'Upload gallery image',
				'name' => 'post_upload_gallery',
				'type' => 'gallery',
				'preview_size' => 'thumbnail',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'gallery',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group( array (
		'id' => 'acf_format-image',
		'title' => 'Format Image',
		'fields' => array (
			array(
				'key' => 'field_90210',
				'label' => 'Upload Image',
				'name' => 'post_upload_image',
				'type' => 'image',
				'column_width' => '',
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'image',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array(
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_format-video',
		'title' => 'Format Video',
		'fields' => array (
			array (
				'key' => 'field_55',
				'label' => 'Add Video',
				'name' => 'add_video_url',
				'type' => 'text',
				'instructions' => 'Paste video page URL',
				'default_value' => '',
				'formatting' => 'html',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_format',
					'operator' => '==',
					'value' => 'video',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}

/* Add-Ons */
function ti_register_fields(){
	include_once('add-ons/acf-gallery/gallery.php');
	include_once('add-ons/acf-repeater/repeater.php');
	include_once('add-ons/acf-flexible-content/flexible-content.php');
}
add_action('acf/register_fields', 'ti_register_fields'); 
