<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slk-avto
 */

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Uren - Car Accessories Shop HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico"> -->

    <!-- CSS
	============================================ -->

  

    <!-- Vendor & Plugins CSS (Please remove the comment from below vendor.min.css & plugins.min.css for better website load performance and remove css files from the above) -->
    <!--
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    -->

    <!-- Main Style CSS (Please use minify version for better website load performance) -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->


</head>

<body class="template-color-1">

    <div class="main-wrapper">

        <!-- Begin Uren's Header Main Area -->
        <header class="header-main_area header-main_area-2 bg--sapphire">
            <div class="header-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                            <div class="header-logo_area">
                                <a href="index.html">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/menu/logo/1.png';?>" alt="Логотип">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="hm-form_area">
                                <?php get_search_form(); ?>
                                
                                <!-- form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Найти запчасти для иномарок ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Поиск</span></i></button>
                                </form -->
                            </div> 
                        </div>
                        <div class="col-lg-5 col-md-9 col-sm-7">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                    <li class="call-us_wrap phone_wrap">
                                        <a href="tel:+123123321345"><i class="ion-android-call"></i>+123 321 345</a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="mailto:slk-avto@yandex.ru"><i class="fa fa-envelope"></i>slk-avto@yandex.ru</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        
                       
                        <div class="custom-menu_col col-12 d-none d-lg-block">
                            <div class="main-menu_area position-relative">
                            <?php wp_nav_menu( [
                                'theme_location'  => 'top',
                                'menu'            => '', 
                                'container'       => 'nav', 
                                'container_class' => 'main-nav', 
                                // 'container_id'    => '',
                                'menu_class'      => '', 
                                'menu_id'         => '',
                                'echo'            => true,
                                'fallback_cb'     => 'wp_page_menu',
                                'before'          => '',
                                'after'           => '',
                                'link_before'     => '',
                                'link_after'      => '',
                                'items_wrap'      => '<ul>%3$s</ul>',
                                'depth'           => 0,
                                'walker'          => new My_Walker_Nav_Menu(),
                            ] );?>
                                <!-- <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder active">
                                            <a href="index.html">Главная</a>
                                            
                                        </li>
                                        <li class="megamenu-holder ">
                                            <a href="shop-left-sidebar.html">Каталог 
                                           
                                            </a>
                                            
                                        </li>
                                        <li>
                                        <a href="javascript:void(0)">О нас</a>
                                        </li>
                                        <li class="">
                                            <a href="javascript:void(0)">Доставка и оплата
                                           
                                            </a>
                                           
                                        </li>
                                        <li class="">
                                            <a href="contact.html">Контакты</a>
                                        </li>
                                       
                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                        
                        <div class="custom-setting_col custom-setting_col_top_socials col-12 d-none d-lg-block">
                            <div class="ht-right_area">
                                <div class="ht-menu">
                                    <a href="my-account.html"><i class="fab fa-vk"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="custom-search_col d-none d-md-block d-lg-none">
                            <div class="hm-form_area">
                               
                                <?php get_search_form(); ?>
                                
                                <!-- form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Найти запчасти для иномарок ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Поиск</span></i></button>
                                </form -->
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-top_area header-sticky bg--sapphire">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 d-lg-block d-none">
                            <div class="main-menu_area position-relative">
                                <?php wp_nav_menu( [
                                    'theme_location'  => 'top',
                                    'menu'            => '', 
                                    'container'       => 'nav', 
                                    'container_class' => 'main-nav', 
                                    // 'container_id'    => '',
                                    'menu_class'      => '', 
                                    'menu_id'         => '',
                                    'echo'            => true,
                                    'fallback_cb'     => 'wp_page_menu',
                                    'before'          => '',
                                    'after'           => '',
                                    'link_before'     => '',
                                    'link_after'      => '',
                                    'items_wrap'      => '<ul>%3$s</ul>',
                                    'depth'           => 0,
                                    'walker'          => '',
                                ] );?>
                                <!-- <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder active"><a href="index.html">Главная</a>
                                            
                                        </li>
                                        <li class="megamenu-holder ">
                                            <a href="shop-left-sidebar.html">Каталог
                                                
                                            </a>
                                            
                                        </li>
                                        <li>
                                        <a href="javascript:void(0)">О нас</a></li>
                                        <li class="">
                                        <a href="javascript:void(0)">Доставка и оплата 
                                           
                                            </a>
                                           
                                        </li>
                                        <li class=""><a href="contact.html">Контакты</a></li>
                                       
                                    </ul>
                                </nav> -->
                            </div>
                        </div>
                        <div class="col-sm-3 d-block d-lg-none">
                            <div class="header-logo_area header-sticky_logo">
                                <a href="index.html">
                                    <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/menu/logo/1.png';?>" alt="Uren's Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-sm-9">
                            <div class="header-right_area">
                                <ul>
                                    <li class="mobile-menu_wrap d-flex d-lg-none">
                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white">
                                            <i class="ion-navicon"></i>
                                        </a>
                                    </li>
                                
                                    <li class="contact-us_wrap phone_wrap">
                                        <a href="tel://+123123321345"><i class="ion-android-call"></i>+123 321 345</a>
                                    </li>
                                    <li class="contact-us_wrap">
                                        <a href="mailto:slk-avto@yandex.ru"><i class="ion-android-call"></i>slk-avto@yandex.ru</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            <div class="mobile-menu_wrapper" id="mobileMenu">
                <div class="offcanvas-menu-inner">
                    <div class="container">
                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                        <div class="offcanvas-inner_search">
                            <form action="#" class="inner-searchbox">
                                <input type="text" placeholder="Search for item...">
                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                            </form>
                        </div>

                        <nav class="offcanvas-navigation">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active">
                                <a href="index.html">
                                <span
                                        class="mm-text">Главная</span>
                                        </a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Каталог</span>
                                    </a>
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">О нас</span>
                                    </a>
                                    
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Доставка и Оплата</span>
                                    </a>
                                   
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Контакты</span>
                                    </a>
                                   
                                </li>
                            </ul>
                        </nav>

                        
                    </div>
                </div>
            </div>

        </header>
        <!-- Uren's Header Main Area End Here -->

        
    
        <?php wp_head(); ?>




    

      