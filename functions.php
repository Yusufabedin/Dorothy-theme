<?php

function dorothy_enqueue_assets(){
	wp_enqueue_style("font-awesome.min.css", get_template_directory_uri() ."/assets/css/fontawesome.css", array(), '5.10', 'all');
	// wp_enqueue_style("normalize.min.css",  "https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css", array(), '5.0.0', 'all');
    wp_enqueue_style("responsive-css",  "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css", array(), '2.1.1', 'all');
     wp_enqueue_style("bostrapcdn", "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css", array(), '2.1.1', 'all');
	
  wp_enqueue_style("style",get_stylesheet_uri() );


// wp_enqueue_script("kit.fontawesome", "https://kit.fontawesome.com/d7804158f3.js", array("jquery"), '2.2.0',false);
wp_enqueue_script("owl.carousel.min.js","http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js", array(), '2.2.0',true);
	wp_enqueue_script("OwlCarousel2", "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js", array("jquery"), '1.0',true);
	wp_enqueue_script("main.js", get_template_directory_uri() . "/assets/js/main.js", array("jquery"),1.1, true);

}
add_action("wp_enqueue_scripts", "dorothy_enqueue_assets");


function dorothy_support(){
  	add_theme_support( 'post-thumbnails' );

	// Add theme support for Custom Logo.
	 $logo = array(
		 'height'      => 100,
		 'width'       => 400,
		 'flex-height' => true,
		 'flex-width'  => true,
		 'header-text' => array( 'site-title', 'site-description' ),
		 );
 add_theme_support( 'custom-logo', $logo );

    add_theme_support(
		'post-formats',
		array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		)
	);
    	add_theme_support(
		'html5',
		array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    // This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'top'    => __( 'Top Menu', 'mydorothy' ),
			'social' => __( 'Social Links Menu', 'mydorothy' ),
		)
	);



}
add_action("after_setup_theme", "dorothy_support");

//header menu
register_sidebar( array(
	'name'          => __( 'header', 'lovem' ),
	'id'            => 'header',
	'description'   => '',
	'class'         => '',
	'before_widget' => '
                 <div class="menu">
                <ul>',
	'after_widget'  => '</ul>
            </div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );

register_sidebar( array(
	'name'          => __( 'footer', 'lovem' ),
	'id'            => 'footer',
	'description'   => '',
	'class'         => '',
	'before_widget' => '
            <div class="footer_menu">
                <ul>',
	'after_widget'  => '</ul>
            </div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
) );


//coustom post type

function cptui_register_my_cpts() {

	/**
	 * Post Type: banners.
	 */

	$labels = array(
		"name" => __( "banners", "lovem" ),
		"singular_name" => __( "banner", "lovem" ),
	);

	$args = array(
		"label" => __( "banners", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "banner", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
	);

	register_post_type( "banner", $args );

	/**
	 * Post Type: Dorothys.
	 */

	$labels = array(
		"name" => __( "Dorothys", "lovem" ),
		"singular_name" => __( "Dorothy", "lovem" ),
	);

	$args = array(
		"label" => __( "Dorothys", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "dorothy", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "dorothy", $args );

	/**
	 * Post Type: Fictions.
	 */

	$labels = array(
		"name" => __( "Fictions", "lovem" ),
		"singular_name" => __( "Fiction", "lovem" ),
	);

	$args = array(
		"label" => __( "Fictions", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "fiction", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title" ),
	);

	register_post_type( "fiction", $args );

	/**
	 * Post Type: Visits.
	 */

	$labels = array(
		"name" => __( "Visits", "lovem" ),
		"singular_name" => __( "visits", "lovem" ),
	);

	$args = array(
		"label" => __( "Visits", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "visit_me", "with_front" => true ),
		"query_var" => true,
		"supports" => false,
	);

	register_post_type( "visit_me", $args );

	/**
	 * Post Type: Others_Says.
	 */

	$labels = array(
		"name" => __( "Others_Says", "lovem" ),
		"singular_name" => __( "others_Say", "lovem" ),
	);

	$args = array(
		"label" => __( "Others_Says", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "others_say", "with_front" => true ),
		"query_var" => true,
		"menu_icon" => "dashicons-format-quote",
		"supports" => array( "title" ),
	);

	register_post_type( "others_say", $args );

	/**
	 * Post Type: Footers.
	 */

	$labels = array(
		"name" => __( "Footers", "lovem" ),
		"singular_name" => __( "footer", "lovem" ),
	);

	$args = array(
		"label" => __( "Footers", "lovem" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "footer", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "footer", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


//coustom field

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5d7627fd7bb7c',
	'title' => 'Author',
	'fields' => array(
		array(
			'key' => 'field_5d762830a3fe6',
			'label' => 'dorothy',
			'name' => 'dorothy',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d762cfbffaac',
			'label' => 'author_title',
			'name' => 'author_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
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
			'key' => 'field_5d762d46ffaad',
			'label' => 'author_details',
			'name' => 'author_details',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => '',
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d762dd4ffaae',
			'label' => 'button',
			'name' => 'button',
			'type' => 'url',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'url',
		),
		array(
			'key' => 'field_5d762e47ffaaf',
			'label' => 'author_background',
			'name' => 'author_background',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'full',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'dorothy',
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
));

acf_add_local_field_group(array(
	'key' => 'group_5d760a260bab3',
	'title' => 'Banner',
	'fields' => array(
		array(
			'key' => 'field_5d760a51c0b7e',
			'label' => 'Banner Logo',
			'name' => 'banner_logo',
			'type' => 'image',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d760d8f2f36f',
			'label' => 'Banner Details',
			'name' => 'banner_details',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'Enter Banner Details',
			'maxlength' => '',
			'rows' => 5,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d760eccf58f4',
			'label' => 'header title',
			'name' => 'header_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'enter header',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'banner',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'permalink',
		1 => 'the_content',
		2 => 'excerpt',
		3 => 'discussion',
		4 => 'comments',
		5 => 'revisions',
		6 => 'slug',
		7 => 'author',
		8 => 'format',
		9 => 'page_attributes',
		10 => 'featured_image',
		11 => 'categories',
		12 => 'tags',
		13 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5d7649218b674',
	'title' => 'fiction',
	'fields' => array(
		array(
			'key' => 'field_5d76493f7c86d',
			'label' => 'title',
			'name' => 'title',
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
			'key' => 'field_5d7649607c86e',
			'label' => 'book',
			'name' => 'book',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d7649987c86f',
			'label' => 'read_text',
			'name' => 'read_text',
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
			'key' => 'field_5d7649b87c870',
			'label' => 'play_icon',
			'name' => 'play_icon',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_sets' => array(
				0 => 'far',
			),
			'custom_icon_set' => '',
			'default_label' => '',
			'default_value' => '',
			'save_format' => 'class',
			'allow_null' => 1,
			'show_preview' => 1,
			'enqueue_fa' => 1,
			'fa_live_preview' => '',
			'choices' => array(
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'fiction',
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
));

acf_add_local_field_group(array(
	'key' => 'group_5d7737af2b41c',
	'title' => 'footer',
	'fields' => array(
		array(
			'key' => 'field_5d7737bfec407',
			'label' => 'facebook',
			'name' => 'facebook',
			'type' => 'url',
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
		),
		array(
			'key' => 'field_5d7738a1ec409',
			'label' => 'footer_tag',
			'name' => 'footer_tag',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
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
			'key' => 'field_5d7739baa0db1',
			'label' => 'twitter',
			'name' => 'twitter',
			'type' => 'url',
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
		),
		array(
			'key' => 'field_5d77618075491',
			'label' => 'linkedin',
			'name' => 'linkedin',
			'type' => 'url',
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
		),
		array(
			'key' => 'field_5d78a17043c9c',
			'label' => 'fonts',
			'name' => 'fonts',
			'type' => 'font-awesome',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'icon_sets' => array(
				0 => 'far',
			),
			'custom_icon_set' => '',
			'default_label' => '&lt;i class="fab"&gt;&lt;/i&gt; facebook-f',
			'default_value' => 'fab fa-facebook-f',
			'save_format' => 'class',
			'allow_null' => 0,
			'show_preview' => 1,
			'enqueue_fa' => 1,
			'fa_live_preview' => '',
			'choices' => array(
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'footer',
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
));

acf_add_local_field_group(array(
	'key' => 'group_5d772f351c55c',
	'title' => 'other_say',
	'fields' => array(
		array(
			'key' => 'field_5d773005f36b9',
			'label' => 'discription',
			'name' => 'discription',
			'type' => 'textarea',
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
			'maxlength' => '',
			'rows' => 8,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5d773037f36ba',
			'label' => 'title_h',
			'name' => 'title_h',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'write your title',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d776781f7a0b',
			'label' => 'img_icon',
			'name' => 'img_icon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'others_say',
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
));

acf_add_local_field_group(array(
	'key' => 'group_5d768b973fe4e',
	'title' => 'visit_me',
	'fields' => array(
		array(
			'key' => 'field_5d768c531308f',
			'label' => 'visit me on',
			'name' => 'visit_me_on',
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
			'placeholder' => 'visitme',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d768cd713090',
			'label' => 'visit_button',
			'name' => 'visit_button',
			'type' => 'url',
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
		),
		array(
			'key' => 'field_5d768d3413091',
			'label' => 'amazon',
			'name' => 'amazon',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'url',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'visit_me',
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
));

endif;

?> 