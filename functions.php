<?php
add_action('widgets_init', 'portefolio_sidebars');
add_action('after_setup_theme', 'portefolio_setup');
add_action('init', 'create_post_type');
add_action('init', 'add_taxonomies');

if(! function_exists('add_taxonomies')){
	function add_taxonomies(){
		register_taxonomy('techniques', 'work', array(
			'label'=> 'Techniques utilisées',
			'hierarchical'=>true,
			'query_var'=>true,
			'rewrite'=>true
		));
	
	}
}

if(! function_exists('create_post_type')){
	function create_post_type(){
		register_post_type('works', 
			array(
				'labels'=>array(
							'name' => __('Works'),
							'singular_name' => __('Works'),
						),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'custom-fields'),
				'public' => true,
				'taxonomies'=> array('techniques'),
				'has_archive' => true,
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
		   
		register_post_type('profile', 
			array(
				'labels'=>array(
							'name' => __('Profil'),
							'singular_name' => __('Profil'),
						),
				'supports' => array('title', 'editor', 'thumbnail', 'post-formats', 'page-attributes', 'custom-fields'),
				'public' => true,
				'has_archive' => true,
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
		
		register_post_type('skills', 
			array(
				'labels'=>array(
							'name' => __('Skills'),
							'singular_name' => __('Skills'),
						),
				'supports' => array('title', 'editor', 'custom-fields', 'page-attributes'),
				'public' => true,
				'has_archive' => true,
				'taxonomies'=> array('skillsInfo'),
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
		
		register_post_type('experiences', 
			array(
				'labels'=>array(
							'name' => __('Expériences'),
							'singular_name' => __('Expériences'),
						),
				'supports' => array('title', 'editor', 'custom-fields', 'page-attributes'),
				'public' => true,
				'has_archive' => true,
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
		register_post_type('education', 
			array(
				'labels'=>array(
							'name' => __('Education'),
							'singular_name' => __('Education'),
						),
				'supports' => array('title', 'editor', 'custom-fields', 'page-attributes'),
				'public' => true,
				'has_archive' => true,
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
		
		register_post_type('contact', 
			array(
				'labels'=>array(
							'name' => __('Contact'),
							'singular_name' => __('Contact'),
						),
				'supports' => array('title', 'editor'),
				'public' => true,
				'has_archive' => true,
				'hierarchical'=>true,
				'menu_position'=>true
			)
		);
			
	}
}

if(! function_exists('portefolio_setup')){
	function portefolio_setup(){
		add_theme_support('automatic-feed-links');
		add_theme_support('post-thumbnails');
		add_theme_support('post-formats', array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
		
		//Intègre le menu de navigation dans une sidebar pour aller dans les pages qui intéresse
		register_nav_menu('header menu', __('Header Menu', 'portfolio'));
		
		//Pour la dimension de l'image à la une
		if(function_exists('add_image_size')){
			add_image_size('folio-work', 640, 480, false);
		}
		
		register_taxonomy( 'Techniques',
			 'techniques', 
			 array( 
			 	'hierarchical' => true, 
			 	'label' => 'Type', 
			 	'query_var' => true, 
			 	'rewrite' => true )
		 );
						
	}
}	

if(! function_exists('portefolio_sidebars')){
	function portefolio_sidebars(){
		register_sidebar(
			array(
				'id' => 'primary',
				'name'=>__('Primary'),
				'description' => __('A short description of the sidebar'),
				'before_widget'=> '<div id="%1$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget_titre">',
				'after_title'=> '</h3>'
			)
		);
		
		register_sidebar(
			array(
				'id' => 'secondary',
				'name'=>__('Secondary'),
				'description' => __('A short description of the sidebar'),
				'before_widget'=> '<div id="%1$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widget_titre">',
				'after_title'=> '</h3>'
			)
		);
	}
}