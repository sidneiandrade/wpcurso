<?php 

// Carregando nossos scripts e folhas de estilos
function load_scripts(){
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '4.1.3', true );
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.1.3', 'all' );
	wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// Função de Configuração do Tema
function wpcurso_config(){
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);	

	// Adicionando suporte ao tema
	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	add_theme_support( 'custom-header', $args );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-formats', array( 'video', 'image' ) );
}
add_action( 'after_setup_theme', 'wpcurso_config', 0 );

// Registrando Sidebars
add_action( 'widgets_init', 'wpcurso_sidebars' );
function wpcurso_sidebars(){
	register_sidebar(
		array(
			'name' => 'Home Page Sidebar',
			'id' => 'sidebar-1',
			'description' => 'Sidebar to be used on Home Page',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	register_sidebar(
		array(
			'name' => 'Blog Sidebar',
			'id' => 'sidebar-2',
			'description' => 'Sidebar to be used on Blog Page',
			'before_widget' => '<div class="widget-wrapper">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);	
}


