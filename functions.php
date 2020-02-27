<?php
/**
 * slk-avto functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slk-avto
 */



/**
 * Enqueue scripts and styles.
 */


add_action( 'wp_enqueue_scripts', 'slk_avto_scripts' ); 

function slk_avto_scripts() {

	

	wp_enqueue_style( 'slk-avto-main-style', get_stylesheet_uri() );

	// wp_enqueue_style( 'slk-avto-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	// wp_enqueue_style( 'slk-avto-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');


	wp_enqueue_style( 'slk-avto-bootstrap', get_template_directory_uri() . '/assets/assets/css/vendor/bootstrap.min.css');

	wp_enqueue_style( 'slk-avto-font-awesome', get_template_directory_uri() . '/assets/assets/css/vendor/font-awesome.css', array('slk-avto-bootstrap'));

	wp_enqueue_style( 'slk-avto-ion-fonts', get_template_directory_uri() . '/assets/assets/css/vendor/ion-fonts.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome'));

	wp_enqueue_style( 'slk-avto-slick', get_template_directory_uri() . '/assets/assets/css/plugins/slick.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts'));

	wp_enqueue_style( 'slk-avto-animate', get_template_directory_uri() . '/assets/assets/css/plugins/animate.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick'));

	wp_enqueue_style( 'slk-avto-jquery-ui', get_template_directory_uri() . '/assets/assets/css/plugins/jquery-ui.min.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate'));

	wp_enqueue_style( 'slk-avto-lightgallery', get_template_directory_uri() . '/assets/assets/css/plugins/lightgallery.min.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui'));

	wp_enqueue_style( 'slk-avto-nice-select', get_template_directory_uri() . '/assets/assets/css/plugins/nice-select.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery'));



	wp_enqueue_style( 'slk-avto-styles-min', get_template_directory_uri() . '/assets/assets/css/style.min.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select'));

	wp_enqueue_style( 'slk-avto-custom-styles', get_template_directory_uri() . '/assets/assets/css/custom-index.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min'));

	wp_enqueue_style( 'slk-avto-custom-delivery-and-price-styles', get_template_directory_uri() . '/assets/assets/css/custom-delivery-and-price.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles'));

	wp_enqueue_style( 'slk-avto-custom-about-us-styles', get_template_directory_uri() . '/assets/assets/css/custom-about-us.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles', 'slk-avto-custom-delivery-and-price-styles'));

	wp_enqueue_style( 'slk-avto-custom-catalog-styles', get_template_directory_uri() . '/assets/assets/css/custom-catalog.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles', 'slk-avto-custom-delivery-and-price-styles', 'slk-avto-custom-about-us-styles'));

	wp_enqueue_style( 'slk-avto-custom-subcatalog-styles', get_template_directory_uri() . '/assets/assets/css/custom-subcatalog.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles', 'slk-avto-custom-delivery-and-price-styles', 'slk-avto-custom-about-us-styles', 'slk-avto-custom-catalog-styles'));

	wp_enqueue_style( 'slk-avto-custom-beforeproductpage-styles', get_template_directory_uri() . '/assets/assets/css/custom-beforeproductpage.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles', 'slk-avto-custom-delivery-and-price-styles', 'slk-avto-custom-about-us-styles', 'slk-avto-custom-catalog-styles', 'slk-avto-custom-subcatalog-styles'));

	wp_enqueue_style( 'slk-avto-custom-singular-styles', get_template_directory_uri() . '/assets/assets/css/custom-singular.css', array('slk-avto-bootstrap', 'slk-avto-font-awesome', 'slk-avto-ion-fonts', 'slk-avto-slick', 'slk-avto-animate', 'slk-avto-jquery-ui', 'slk-avto-lightgallery', 'slk-avto-nice-select', 'slk-avto-styles-min', 'slk-avto-custom-styles', 'slk-avto-custom-delivery-and-price-styles', 'slk-avto-custom-about-us-styles', 'slk-avto-custom-catalog-styles', 'slk-avto-custom-subcatalog-styles', 'slk-avto-custom-beforeproductpage-styles'));


/****************************************************/ 

	// wp_enqueue_script('slk-avto-js-script', get_template_directory_uri() . '/assets/assets/js/vendor/jquery-1.12.4.min.js', true);

	// wp_enqueue_script('slk-avto-modernizr-script', get_template_directory_uri() . '/assets/assets/js/vendor/modernizr-2.8.3.min.js', array('slk-avto-js-script'), true);

	// wp_enqueue_script('slk-avto-popper-script', get_template_directory_uri() . '/assets/assets/js/vendor/popper.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script'), true);

	// wp_enqueue_script('slk-avto-bootstrap-script', get_template_directory_uri() . '/assets/assets/js/vendor/bootstrap.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script'), true);

	// wp_enqueue_script('slk-avto-slick-script', get_template_directory_uri() . '/assets/assets/js/plugins/slick.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script'), true);

	// wp_enqueue_script('slk-avto-jquery-barrating-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.barrating.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script'), true);

	// wp_enqueue_script('slk-avto-jquery-counterup-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.counterup.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script'), true);

	// wp_enqueue_script('slk-avto-jquery-nice-select-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.nice-select.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script'), true);



	// wp_enqueue_script('slk-avto-jquery-sticky-sidebar-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.sticky-sidebar.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script'), true);

	// wp_enqueue_script('slk-avto-jquery-barrating-script-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery-ui.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script'), true);

	// wp_enqueue_script('slk-avto-jquery-barrating-script-touch-punch-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.ui.touch-punch.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script'), true);

	// wp_enqueue_script('slk-avto-jquery-counterup-script-script', get_template_directory_uri() . '/assets/assets/js/plugins/lightgallery.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script'), true);

	// wp_enqueue_script('slk-avto-scroll-top-script', get_template_directory_uri() . '/assets/assets/js/plugins/scroll-top.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script', 'slk-avto-jquery-counterup-script-script'), true);

	// wp_enqueue_script('slk-avto-theia-sticky-sidebar-script', get_template_directory_uri() . '/assets/assets/js/plugins/theia-sticky-sidebar.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script', 'slk-avto-jquery-counterup-script-script', 'slk-avto-scroll-top-script'), true);

	// wp_enqueue_script('slk-avto-waypoints-script', get_template_directory_uri() . '/assets/assets/js/plugins/waypoints.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script', 'slk-avto-jquery-counterup-script-script', 'slk-avto-scroll-top-script', 'slk-avto-theia-sticky-sidebar-script'), true);

	// wp_enqueue_script('slk-avto-jquery-zoom-script', get_template_directory_uri() . '/assets/assets/js/plugins/jquery.zoom.min.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script', 'slk-avto-jquery-counterup-script-script', 'slk-avto-scroll-top-script', 'slk-avto-theia-sticky-sidebar-script', 'slk-avto-waypoints-script'), true);

	// wp_enqueue_script('slk-avto-main-script', get_template_directory_uri() . '/assets/assets/js/main.js', array('slk-avto-js-script', 'slk-avto-modernizr-script', 'slk-avto-popper-script', 'slk-avto-bootstrap-script', 'slk-avto-slick-script', 'slk-avto-jquery-barrating-script', 'slk-avto-jquery-counterup-script', 'slk-avto-jquery-nice-select-script', 'slk-avto-jquery-sticky-sidebar-script', 'slk-avto-jquery-barrating-script-script', 'slk-avto-jquery-barrating-script-touch-punch-script', 'slk-avto-jquery-counterup-script-script', 'slk-avto-scroll-top-script', 'slk-avto-theia-sticky-sidebar-script', 'slk-avto-waypoints-script', 'slk-avto-jquery-zoom-script'), true);



	

}



/** 
 * Register Nav Menu
 */

add_action('after_setup_theme', 'slk_avto_menus');

function slk_avto_menus() {
	register_nav_menu('top', 'Главное меню');
	register_nav_menu('bottom', 'Нижнее меню');
	// register_nav_menu('right', 'боковое меню (базовое)');
	register_nav_menu('mobile', 'Мобильное меню');
	register_nav_menu('right_products', 'боковое меню (страница оборудования)');
	// register_nav_menu('right_products_part', 'боковое меню (страница подкатегории оборудования)');
	// register_nav_menu('right_services', 'боковое меню (страница услуг)');
	// register_nav_menu('right_services_part', 'боковое меню (страница подкатегории услуг)');
	// register_nav_menu('right_card', 'боковое меню (карточка оборудования)');
	// register_nav_menu('right_posts', 'боковое меню (страница статьи)');
	// register_nav_menu('right_search', 'боковое меню (страница результатов поиска)');
	// register_nav_menu('right_ingeneer', 'боковое меню (сантехника)');
	// register_nav_menu('right_system', 'боковое меню (системы очистки)');
	// register_nav_menu('right_pumps', 'боковое меню (насосы)');

	//add_theme_support('post-thumbnails', array( 'post', 'objects', 'services', 'reviews' ) );

	add_theme_support( 'html5', array( 'search-form' ) );

	// add_theme_support( 'custom-logo', [
	// 	'height'      => 70,
	// 	'width'       => 70,
	// 	'flex-width'  => false,
	// 	'flex-height' => false,
	// 	'header-text' => '',
	// ] );


}


/**
 * Remove admin menu items
 */

function remove_menu_items(){
	//remove_menu_page( 'index.php' );                  //Консоль
  // remove_menu_page( 'edit.php' );                   //Записи
  // remove_menu_page( 'upload.php' );                 //Медиафайлы
  //remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  //remove_menu_page( 'themes.php' );                 //Внешний вид
  //remove_menu_page( 'plugins.php' );                //Плагины
  //remove_menu_page( 'users.php' );                  //Пользователи
  //remove_menu_page( 'tools.php' );                  //Инструменты
  //remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menu_items' );



class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl( &$output, $depth = 0, $args = array() ) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"hm-dropdown\">\n";
  }
}

add_action( 'widgets_init', 'register_my_widgets' );
function register_my_widgets(){
	register_sidebar( array(
		'name'          => 'Боковое меню Подкатегории',
		'id'            => "sidebar-subcategory",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => "</li>\n",
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => "</h2>\n",
	) );
}











































































































/**
 * Register Services type post
 */



// add_action('init', 'register_services');
// function register_services(){
// 	register_post_type('uslugi', array(
// 		'labels'             => array(
// 			'name'               => 'Наши услуги', // Основное название типа записи
// 			'singular_name'      => 'Наша услуга', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новую',
// 			'add_new_item'       => 'Добавить новую услугу',
// 			'edit_item'          => 'Редактировать услугу',
// 			'new_item'           => 'Новая услуга',
// 			'view_item'          => 'Посмотреть услугу',
// 			'search_items'       => 'Найти услугу',
// 			'not_found'          =>  'Услуг не найдено',
// 			'not_found_in_trash' => 'В корзине услуг не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Наши услуги'

// 		  ),
// 			'public'             => true,
// 			'publicly_queryable' => true,
// 			'show_ui'            => true,
// 			'show_in_menu'       => true,
// 			'query_var'          => true,
// 			'rewrite'            => true,
// 			'capability_type'    => 'post',
// 			'has_archive'        => true,
// 			'hierarchical'       => false,
// 			'menu_position'      => 2,
// 			'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }




// add_action('init', 'register_important');
// function register_important(){
// 	register_post_type('statyi', array(
// 		'labels'             => array(
// 			'name'               => 'Статьи', // Основное название типа записи
// 			'singular_name'      => 'Статьи', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новую',
// 			'add_new_item'       => 'Добавить новую статью',
// 			'edit_item'          => 'Редактировать статью',
// 			'new_item'           => 'Новая статья',
// 			'view_item'          => 'Посмотреть статью',
// 			'search_items'       => 'Найти статью',
// 			'not_found'          =>  'Статья не найдено',
// 			'not_found_in_trash' => 'В корзине статьи не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Статьи'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 5,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }

// add_action('init', 'register_pumps');
// function register_pumps(){
// 	register_post_type('nasosi', array(
// 		'labels'             => array(
// 			'name'               => 'Насосы и принадлежности', // Основное название типа записи
// 			'singular_name'      => 'Насосы и принадлежности', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новые Насосы и принадлежности',
// 			'add_new_item'       => 'Добавить новые Насосы и принадлежности',
// 			'edit_item'          => 'Редактировать Насосы и принадлежности',
// 			'new_item'           => 'Новые Насосы и принадлежности',
// 			'view_item'          => 'Посмотреть Насосы и принадлежности',
// 			'search_items'       => 'Найти Насосы и принадлежности',
// 			'not_found'          =>  'Насосы и принадлежности не найдено',
// 			'not_found_in_trash' => 'В корзине Насосы и принадлежности не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Насосы и принадлежности'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'taxonomies'         => array('tip-nasosov'),
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 5,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }

// add_action('init', 'register_systems');
// function register_systems(){
// 	register_post_type('systemi-ochistki', array(
// 		'labels'             => array(
// 			'name'               => 'Системы очистки воды', // Основное название типа записи
// 			'singular_name'      => 'Системы очистки воды', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новые Системы очистки воды',
// 			'add_new_item'       => 'Добавить новые Системы очистки воды',
// 			'edit_item'          => 'Редактировать Системы очистки воды',
// 			'new_item'           => 'Новые Системы очистки воды',
// 			'view_item'          => 'Посмотреть Системы очистки воды',
// 			'search_items'       => 'Найти Системы очистки воды',
// 			'not_found'          =>  'Системы очистки воды не найдено',
// 			'not_found_in_trash' => 'В корзине Системы очистки воды не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Системы очистки воды'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 10,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }




// add_action('init', 'register_septics');
// function register_septics(){
// 	register_post_type('septiki-bio-stancii', array(
// 		'labels'             => array(
// 			'name'               => 'Септики (био-станции)', // Основное название типа записи
// 			'singular_name'      => 'Септики (био-станции)', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новые Септики (био-станции)',
// 			'add_new_item'       => 'Добавить новые Септики (био-станции)',
// 			'edit_item'          => 'Редактировать Септики (био-станции)',
// 			'new_item'           => 'Новые Септики (био-станции)',
// 			'view_item'          => 'Посмотреть Септики (био-станции)',
// 			'search_items'       => 'Найти Септики (био-станции)',
// 			'not_found'          =>  'Септики (био-станции) не найдено',
// 			'not_found_in_trash' => 'В корзине Септики (био-станции) не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Септики (био-станции)'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 5,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }

// add_action('init', 'register_ingener');
// function register_ingener(){
// 	register_post_type('santehnika', array(
// 		'labels'             => array(
// 			'name'               => 'Инженерная сантехника', // Основное название типа записи
// 			'singular_name'      => 'Инженерная сантехника', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новые Инженерная сантехника',
// 			'add_new_item'       => 'Добавить новые Инженерная сантехника',
// 			'edit_item'          => 'Редактировать Инженерная сантехника',
// 			'new_item'           => 'Новые Инженерная сантехника',
// 			'view_item'          => 'Посмотреть Инженерная сантехника',
// 			'search_items'       => 'Найти Инженерная сантехника',
// 			'not_found'          =>  'Инженерная сантехника не найдено',
// 			'not_found_in_trash' => 'В корзине Инженерная сантехника не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Инженерная сантехника'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 5,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }





/*
* Register taxonomy
*
*/

// add_action( 'init', 'register_custom_taxonomies' );
// function register_custom_taxonomies(){
// 	// список параметров: http://wp-kama.ru/function/get_taxonomy_labels
// 	register_taxonomy('tip-nasosov', array('nasosi'), array(
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => array(
// 			'name'              => 'Типы насосов',
// 			'singular_name'     => 'Тип насоса',
// 			'search_items'      => 'Поиск типов насосов',
// 			'all_items'         => 'Все типы насосов',
// 			'view_item '        => 'Показать типы насосов',
// 			'parent_item'       => null,
// 			'parent_item_colon' => null,
// 			'edit_item'         => 'Редактировать типы насосов',
// 			'update_item'       => 'Обновить типы насосов',
// 			'add_new_item'      => 'Добавить новый тип насоса',
// 			'new_item_name'     => 'Новый тип насоса',
// 			'menu_name'         => 'Типы насосов',
// 		),
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		'publicly_queryable'    => true, // равен аргументу public
// 		'show_in_nav_menus'     => true, // равен аргументу public
// 		'show_ui'               => true, // равен аргументу public
// 		'show_in_menu'          => true, // равен аргументу show_ui
// 		'show_tagcloud'         => true, // равен аргументу show_ui
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => null, // $taxonomy
// 		'hierarchical'          => true,
// 		//'update_count_callback' => '_update_post_term_count',
// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array(),
// 		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
// 		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
// 		'_builtin'              => false,
// 		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
// 	) );

// 	register_taxonomy('tip-septikov', array('septiki-bio-stancii'), array(
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => array(
// 			'name'              => 'Типы септиков',
// 			'singular_name'     => 'Тип септика',
// 			'search_items'      => 'Поиск типов септиков',
// 			'all_items'         => 'Все типы септиков',
// 			'view_item '        => 'Показать типы септиков',
// 			'parent_item'       => null,
// 			'parent_item_colon' => null,
// 			'edit_item'         => 'Редактировать типы септиков',
// 			'update_item'       => 'Обновить типы септиков',
// 			'add_new_item'      => 'Добавить новый тип септика',
// 			'new_item_name'     => 'Новый тип септика',
// 			'menu_name'         => 'Типы септиков',
// 		),
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		'publicly_queryable'    => true, // равен аргументу public
// 		'show_in_nav_menus'     => true, // равен аргументу public
// 		'show_ui'               => true, // равен аргументу public
// 		'show_in_menu'          => true, // равен аргументу show_ui
// 		'show_tagcloud'         => true, // равен аргументу show_ui
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => null, // $taxonomy
// 		'hierarchical'          => true,
// 		//'update_count_callback' => '_update_post_term_count',
// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array(),
// 		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
// 		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
// 		'_builtin'              => false,
// 		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
// 	) );

// 	register_taxonomy('tip-system-ochistki', array('systemi-ochistki'), array(
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => array(
// 			'name'              => 'Типы систем очистки воды',
// 			'singular_name'     => 'Тип системы очистки воды',
// 			'search_items'      => 'Поиск типов систем очистки воды',
// 			'all_items'         => 'Все типы систем очистки воды',
// 			'view_item '        => 'Показать типы систем очистки воды',
// 			'parent_item'       => null,
// 			'parent_item_colon' => null,
// 			'edit_item'         => 'Редактировать типы систем очистки воды',
// 			'update_item'       => 'Обновить типы систем очистки воды',
// 			'add_new_item'      => 'Добавить новый тип системы очистки воды',
// 			'new_item_name'     => 'Новый тип системы очистки воды',
// 			'menu_name'         => 'Типы систем очистки воды',
// 		),
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		'publicly_queryable'    => true, // равен аргументу public
// 		'show_in_nav_menus'     => true, // равен аргументу public
// 		'show_ui'               => true, // равен аргументу public
// 		'show_in_menu'          => true, // равен аргументу show_ui
// 		'show_tagcloud'         => true, // равен аргументу show_ui
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => null, // $taxonomy
// 		'hierarchical'          => true,
// 		'taxonomies'          => array('category' ),

// 		//'update_count_callback' => '_update_post_term_count',
// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array(),
// 		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
// 		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
// 		'_builtin'              => false,
// 		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
// 	) );
// }


// function custom_post_type() {
 
// // Set UI labels for Custom Post Type
// 	$labels = array(
// 		'name'                => _x( 'Movies', 'Post Type General Name', 'twentythirteen' ),
// 		'singular_name'       => _x( 'Movie', 'Post Type Singular Name', 'twentythirteen' ),
// 		'menu_name'           => __( 'Movies', 'twentythirteen' ),
// 		'parent_item_colon'   => __( 'Parent Movie', 'twentythirteen' ),
// 		'all_items'           => __( 'All Movies', 'twentythirteen' ),
// 		'view_item'           => __( 'View Movie', 'twentythirteen' ),
// 		'add_new_item'        => __( 'Add New Movie', 'twentythirteen' ),
// 		'add_new'             => __( 'Add New', 'twentythirteen' ),
// 		'edit_item'           => __( 'Edit Movie', 'twentythirteen' ),
// 		'update_item'         => __( 'Update Movie', 'twentythirteen' ),
// 		'search_items'        => __( 'Search Movie', 'twentythirteen' ),
// 		'not_found'           => __( 'Not Found', 'twentythirteen' ),
// 		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
// 	);
	
// // Set other options for Custom Post Type
	
// 	$args = array(
// 		'label'               => __( 'movies', 'twentythirteen' ),
// 		'description'         => __( 'Movie news and reviews', 'twentythirteen' ),
// 		'labels'              => $labels,
// 		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'menu_position'       => 5,
// 		'can_export'          => true,
// 		'has_archive'         => true,
// 		'exclude_from_search' => false,
// 		'publicly_queryable'  => true,
// 		'capability_type'     => 'page',
		
// 		// This is where we add taxonomies to our CPT
// 		'taxonomies'          => array( 'category' ),
// 	);
	
// 	// Registering your Custom Post Type
// 	register_post_type( 'movies', $args );
 
// }
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
//add_action( 'init', 'custom_post_type', 0 );



// function register_systems2() {
// 	register_post_type('systemi-ochistki2', array(
// 		'labels'             => array(
// 			'name'               => 'Системы очистки воды2', // Основное название типа записи
// 			'singular_name'      => 'Системы очистки воды2', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новые Системы очистки воды2',
// 			'add_new_item'       => 'Добавить новые Системы очистки воды2',
// 			'parent_item_colon'   => 'Родительская категория Систем очистки воды2',
// 			'all_items'           => 'Все системы очистки воды2',
// 			'edit_item'          => 'Редактировать Системы очистки воды2',
// 			'new_item'           => 'Новые Системы очистки воды2',
// 			'view_item'          => 'Посмотреть Системы очистки воды2',
// 			'search_items'       => 'Найти Системы очистки воды2',
// 			'not_found'          =>  'Системы очистки воды2 не найдено',
// 			'not_found_in_trash' => 'В корзине Системы очистки воды2 не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Системы очистки воды2',
// 			'update_item'         => 'Обновить Системы очистки воды2'

// 			),
// 		'label'               => 'Системы очистки воды2',
// 		'description'         => 'Описание Системы очистки воды2',
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'show_in_nav_menus'   => true,
// 		'show_in_admin_bar'   => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'exclude_from_search' => false,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => true,
// 		'taxonomies'          => array( 'category' ),
// 		'menu_position'      => 8,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments', 'custom-fields')
// 	));
// }

// add_action('init', 'register_systems2', 0);



## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
// if( 'disable_gutenberg' ){
// 	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

// 	// отключим подключение базовых css стилей для блоков
// 	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
// 	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

// 	// Move the Privacy Policy help notice back under the title field.
// 	add_action( 'admin_init', function(){
// 		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
// 		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
// 	} );
// }


?>
