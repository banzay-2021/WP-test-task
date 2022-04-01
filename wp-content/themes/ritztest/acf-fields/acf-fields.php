<?php

if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_623ce778c1a22',
		'title' => 'Color Mark',
		'fields' => array(
			array(
				'key' => 'field_623ce8e31e79a',
				'label' => 'Color Mark',
				'name' => 'color_mark',
				'type' => 'text',
				'instructions' => 'Marker color for Post Category
bg-red, bg-blue, bg-solid, bg-black',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => 10,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:ritz',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:kayaks',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:marine',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => array(
			0 => 'discussion',
			1 => 'comments',
			2 => 'slug',
			3 => 'author',
			4 => 'featured_image',
		),
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

	acf_add_local_field_group(array(
		'key' => 'group_62430d0ecd673',
		'title' => 'Our Favourites',
		'fields' => array(
			array(
				'key' => 'field_6243538f74e6e',
				'label' => 'Status New',
				'name' => 'status_new',
				'type' => 'text',
				'instructions' => '0 - old product
1- NEW product',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62430e668a764',
				'label' => 'Show at Our Favourites',
				'name' => 'show_at_our_favourites',
				'type' => 'text',
				'instructions' => '0 - product NO show at section Our Favourites
1 - product show at section Our Favourites',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435dac2f64f',
				'label' => 'Points',
				'name' => 'points',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 0,
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435dba2f650',
				'label' => 'Product Type',
				'name' => 'product_type',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435e3f2f651',
				'label' => 'Colour',
				'name' => 'colour',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_62435e492f652',
				'label' => 'Construction',
				'name' => 'construction',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '6',
				),
			),
			array(
				array(
					'param' => 'post_category',
					'operator' => '==',
					'value' => 'category:keep-updated',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;