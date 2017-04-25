<?php

  // Theme Support
  function wpb_theme_setup(){
      
    add_theme_support('post-thumbnails');
      
    add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );
      
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'custom-header', array(
     'video' => false,
    ) );
      
    // Nav Menus
    register_nav_menus(array(
      'primary' => __('Primary Menu'),
      'mobile' => __('Mobile Menu'),
      'footer' => __('Footer Menu'),
      'servic' => __('Services Menu')
    ));
  }

  add_action('after_setup_theme','wpb_theme_setup');

function my_myme_types($mime_types){
    $mime_types['pdf'] = 'application/pdf';
    return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);

// Excerpt Length Control
function set_excerpt_length(){
  return 45;
}

add_filter('excerpt_length', 'set_excerpt_length');

// Widget Locations
function wpb_init_widgets($id){
  register_sidebar(array(
    'name'  => 'SiteMap',
    'id'    => 'sitemap',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
  register_sidebar(array(
    'name'  => 'Support',
    'id'    => 'support',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>'
  ));
}

add_action('widgets_init', 'wpb_init_widgets');

function theme_name_style() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().   '/css/bootstrap-grid.min.css', array(), null, 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), null, 'all' );
    wp_enqueue_style( 'humb.css', get_template_directory_uri().    '/css/humb.css', array(), null, 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri().        '/css/main.min.css', array(), null, 'all' );
    wp_enqueue_style( 'normalize', get_template_directory_uri().   '/css/normalize.min.css', array(), null, 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri().       '/css/slick.min.css', array(), null, 'all' );
    wp_enqueue_style( 'my-style', get_template_directory_uri().    '/css/myStyle.css', array(), null, 'all' );
}

add_action( 'wp_enqueue_scripts', 'theme_name_style' );

function my_scripts_method(){
    wp_enqueue_script( 'jquery-cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array('jquery'), null, 'in_footer');
	wp_enqueue_script( 'newscript', get_template_directory_uri() .     '/js/jquery.accordion.js', array('jquery'), null, 'in_footer');
    wp_enqueue_script( 'slick', get_template_directory_uri() .         '/js/slick.min.js', array('jquery'), null, 'in_footer');
    wp_enqueue_script( 'main', get_template_directory_uri() .          '/js/main.js', array('jquery'), null, 'in_footer');
    wp_register_script( 'paperial', 'http://paperial.com/js2/fast-signup/fs.min.js');
    wp_enqueue_script('paperial');
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function create_post_type() { // создаем новый тип записи
    register_post_type( 'writers', // указываем названия типа
        array(
            'labels' => array(
            'name' => __( 'Our writers' ), // даем названия разделу для панели управления
            'singular_name' => __( 'View' ), // даем названия одной записи
            'add_new' => _x('Add new'),// далее полная русификация админ. панели
            'add_new_item' => __('Add new review'),
            'edit_item' => __('Edit'),
            'new_item' => __('New'),
            'all_items' => __('All'),
            'view_item' => __('View'),
            'search_items' => __('Search'),
            'not_found' => __('Not found'),
            'not_found_in_trash' => __('No found to trash'), 
            'menu_name' => 'Writers'
        ), 
            'public' => true, 
            'menu_position' => 5, // указываем место в левой баковой панели
            'writers' => array('slug' => 'writer'), // указываем slug для ссылок например: mysite/reviews/
            'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр 
        ) 
    ); 
}

add_action( 'init', 'create_post_type' ); // инициируем добавления типа

function testimonial_create_post_type() { // создаем новый тип записи
    register_post_type( 'testimonial', // указываем названия типа
        array(
            'labels' => array(
            'name' => __( 'Our testimonial' ), // даем названия разделу для панели управления
            'singular_name' => __( 'View' ), // даем названия одной записи
            'add_new' => _x('Add new'),// далее полная русификация админ. панели
            'add_new_item' => __('Add new review'),
            'edit_item' => __('Edit'),
            'new_item' => __('New'),
            'all_items' => __('All'),
            'view_item' => __('View'),
            'search_items' => __('Search'),
            'not_found' => __('Not found'),
            'not_found_in_trash' => __('No found to trash'), 
            'menu_name' => 'Testimonials'
        ), 
            'public' => true, 
            'menu_position' => 5, // указываем место в левой баковой панели
            'testimonials' => array('slug' => 'testimonial'), // указываем slug для ссылок например: mysite/reviews/
            'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр 
        ) 
    ); 
}

add_action( 'init', 'testimonial_create_post_type' ); // инициируем добавления типа

function faq_create_post_type() { // создаем новый тип записи
    register_post_type( 'faq', // указываем названия типа
        array(
            'labels' => array(
            'name' => __( 'F.A.Q' ), // даем названия разделу для панели управления
            'singular_name' => __( 'View' ), // даем названия одной записи
            'add_new' => _x('Add new'),// далее полная русификация админ. панели
            'add_new_item' => __('Add new review'),
            'edit_item' => __('Edit'),
            'new_item' => __('New'),
            'all_items' => __('All'),
            'view_item' => __('View'),
            'search_items' => __('Search'),
            'not_found' => __('Not found'),
            'not_found_in_trash' => __('No found to trash'), 
            'menu_name' => 'F.A.Q'
        ), 
            'public' => true, 
            'menu_position' => 5, // указываем место в левой баковой панели
            'faqs' => array('slug' => 'faq'), // указываем slug для ссылок например: mysite/reviews/
            'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр 
        ) 
    ); 
}

add_action( 'init', 'faq_create_post_type' ); // инициируем добавления типа

add_action( 'init', 'testimonial_create_post_type' ); // инициируем добавления типа

function samples_create_post_type() { // создаем новый тип записи
    register_post_type( 'samples', // указываем названия типа
        array(
            'labels' => array(
            'name' => __( 'Samples' ), // даем названия разделу для панели управления
            'singular_name' => __( 'View' ), // даем названия одной записи
            'add_new' => _x('Add new'),// далее полная русификация админ. панели
            'add_new_item' => __('Add new sample'),
            'edit_item' => __('Edit'),
            'new_item' => __('New'),
            'all_items' => __('All'),
            'view_item' => __('View'),
            'search_items' => __('Search'),
            'not_found' => __('Not found'),
            'not_found_in_trash' => __('No found to trash'), 
            'menu_name' => 'Samples'
        ), 
            'public' => true, 
            'menu_position' => 5, // указываем место в левой баковой панели
            'sample' => array('slug' => 'samples'), // указываем slug для ссылок например: mysite/reviews/
            'supports' => array('title', 'editor', 'thumbnail', 'revisions') // тут мы активируем поддержку миниатюр 
        ) 
    ); 
}

add_action( 'init', 'samples_create_post_type' ); // инициируем добавления типа

function true_custom_fields() {
	add_post_type_support( 'samples', 'custom-fields'); // в качестве первого параметра укажите название типа поста
}
 
add_action('init', 'true_custom_fields');


// Customizer File
require get_template_directory(). '/inc/customizer.php';


















