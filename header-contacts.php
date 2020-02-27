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
                                    <img src="assets/images/menu/logo/1.png" alt="Логотип">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="hm-form_area">
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Найти запчасти для иномарок ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Поиск</span></i></button>
                                </form>
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
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder active"><a href="index.html">Главная</a>
                                            <!-- <ul class="hm-dropdown">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="megamenu-holder "><a href="shop-left-sidebar.html">Каталог 
                                            <!-- <i
                                                class="ion-ios-arrow-down"></i> -->
                                            </a>
                                            <!-- <ul class="hm-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-grid-fullwidth.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a>
                                                        </li>
                                                        <li><a href="single-product-gallery-right.html">Gallery
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style
                                                                Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a>
                                                        </li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product
                                                                Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product
                                                                Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="javascript:void(0)">О нас</a></li>
                                        <li class=""><a href="javascript:void(0)">Доставка и оплата
                                            <!-- <i
                                                class="ion-ios-arrow-down"></i> -->
                                            </a>
                                            <!-- <ul class="hm-dropdown">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul> -->
                                        </li>
                                        <li class=""><a href="contact.html">Контакты</a></li>
                                        <!-- <li class=""><a href="contact.html">Contact</a></li> -->
                                        <!-- <li class=""><a href="blog-left-sidebar.html">Blog <i
                                                class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="blog-left-sidebar.html">Grid View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-2-column.html">Column Two</a></li>
                                                        <li><a href="blog-3-column.html">Column Three</a></li>
                                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list-left-sidebar.html">List View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details-left-sidebar.html">Blog Details</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details-right-sidebar.html">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-gallery-format.html">Blog Format</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                                        <li><a href="blog-audio-format.html">Audio Format</a></li>
                                                        <li><a href="blog-video-format.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
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
                                <form action="#" class="hm-searchbox">
                                    <!-- <select class="nice-select select-search-category">
                                        <option value="0">All Categories</option>
                                        <option value="10">Laptops</option>
                                        <option value="17">Prime Video</option>
                                        <option value="20">All Videos</option>
                                        <option value="21">Blouses</option>
                                        <option value="22">Evening Dresses</option>
                                        <option value="23">Summer Dresses</option>
                                        <option value="24">T-shirts</option>
                                        <option value="25">Rent or Buy</option>
                                        <option value="26">Your Watchlist</option>
                                        <option value="27">Watch Anywhere</option>
                                        <option value="28">Getting Started</option>
                                        <option value="18">Computers</option>
                                        <option value="29">More to Explore</option>
                                        <option value="30">TV &amp; Video</option>
                                        <option value="31">Audio &amp; Theater</option>
                                        <option value="32">Camera, Photo </option>
                                        <option value="33">Cell Phones</option>
                                        <option value="34">Headphones</option>
                                        <option value="35">Video Games</option>
                                        <option value="36">Wireless Speakers</option>
                                        <option value="19">Electronics</option>
                                        <option value="37">Amazon Home</option>
                                        <option value="38">Kitchen &amp; Dining</option>
                                        <option value="39">Furniture</option>
                                        <option value="40">Bed &amp; Bath</option>
                                        <option value="41">Appliances</option>
                                        <option value="11">TV &amp; Audio</option>
                                        <option value="42">Chamcham</option>
                                        <option value="45">Office</option>
                                        <option value="47">Gaming</option>
                                        <option value="48">Chromebook</option>
                                        <option value="49">Refurbished</option>
                                        <option value="50">Touchscreen</option>
                                        <option value="51">Ultrabooks</option>
                                        <option value="52">Blouses</option>
                                        <option value="43">Sanai</option>
                                        <option value="53">Hard Drives</option>
                                        <option value="54">Graphic Cards</option>
                                        <option value="55">Processors (CPU)</option>
                                        <option value="56">Memory</option>
                                        <option value="57">Motherboards</option>
                                        <option value="58">Fans &amp; Cooling</option>
                                        <option value="59">CD/DVD Drives</option>
                                        <option value="44">Meito</option>
                                        <option value="60">Sound Cards</option>
                                        <option value="61">Cases &amp; Towers</option>
                                        <option value="62">Casual Dresses</option>
                                        <option value="63">Evening Dresses</option>
                                        <option value="64">T-shirts</option>
                                        <option value="65">Tops</option>
                                        <option value="12">Smartphone</option>
                                        <option value="66">Camera Accessories</option>
                                        <option value="68">Octa Core</option>
                                        <option value="69">Quad Core</option>
                                        <option value="70">Dual Core</option>
                                        <option value="71">7.0 Screen</option>
                                        <option value="72">9.0 Screen</option>
                                        <option value="73">Bags &amp; Cases</option>
                                        <option value="67">XailStation</option>
                                        <option value="74">Batteries</option>
                                        <option value="75">Microphones</option>
                                        <option value="76">Stabilizers</option>
                                        <option value="77">Video Tapes</option>
                                        <option value="78">Memory Card Readers</option>
                                        <option value="79">Tripods</option>
                                        <option value="13">Cameras</option>
                                        <option value="14">headphone</option>
                                        <option value="15">Smartwatch</option>
                                        <option value="16">Accessories</option>
                                    </select> -->
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="header-search_btn" type="submit"><i
                                        class="ion-ios-search-strong"><span>Найти</span></i></button>
                                </form>
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
                                <nav class="main-nav">
                                    <ul>
                                        <li class="dropdown-holder active"><a href="index.html">Главная</a>
                                            <!-- <ul class="hm-dropdown">
                                                <li><a href="index.html">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                            </ul> -->
                                        </li>
                                        <li class="megamenu-holder "><a href="shop-left-sidebar.html">Каталог
                                                <!-- <i class="ion-ios-arrow-down"></i> -->
                                            </a>
                                            <!-- <ul class="hm-megamenu">
                                                <li><span class="megamenu-title">Shop Page Layout</span>
                                                    <ul>
                                                        <li><a href="shop-grid-fullwidth.html">Grid Fullwidth</a></li>
                                                        <li><a href="shop-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html">Right Sidebar</a></li>
                                                        <li><a href="shop-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="shop-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="shop-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Style</span>
                                                    <ul>
                                                        <li><a href="single-product-gallery-left.html">Gallery Left</a>
                                                        </li>
                                                        <li><a href="single-product-gallery-right.html">Gallery
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-left.html">Tab Style
                                                                Left</a>
                                                        </li>
                                                        <li><a href="single-product-tab-style-right.html">Tab Style
                                                                Right</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-left.html">Sticky Left</a>
                                                        </li>
                                                        <li><a href="single-product-sticky-right.html">Sticky Right</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><span class="megamenu-title">Single Product Type</span>
                                                    <ul>
                                                        <li><a href="single-product.html">Single Product</a></li>
                                                        <li><a href="single-product-sale.html">Single Product Sale</a>
                                                        </li>
                                                        <li><a href="single-product-group.html">Single Product Group</a>
                                                        </li>
                                                        <li><a href="single-product-variable.html">Single Product
                                                                Variable</a>
                                                        </li>
                                                        <li><a href="single-product-affiliate.html">Single Product
                                                                Affiliate</a>
                                                        </li>
                                                        <li><a href="single-product-slider.html">Single Product
                                                                Slider</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li><a href="javascript:void(0)">О нас</a></li>
                                        <li class=""><a href="javascript:void(0)">Доставка и оплата 
                                            <!-- <i
                                                class="ion-ios-arrow-down"></i> -->
                                            </a>
                                            <!-- <ul class="hm-dropdown">
                                                <li><a href="my-account.html">My Account</a></li>
                                                <li><a href="login-register.html">Login | Register</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="cart.html">Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="compare.html">Compare</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404 Error</a></li>
                                            </ul> -->
                                        </li>
                                        <li class=""><a href="contact.html">Контакты</a></li>
                                        <!-- <li class=""><a href="contact.html">Contact</a></li>
                                        <li class=""><a href="blog-left-sidebar.html">Blog <i
                                                class="ion-ios-arrow-down"></i></a>
                                            <ul class="hm-dropdown">
                                                <li><a href="blog-left-sidebar.html">Grid View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-2-column.html">Column Two</a></li>
                                                        <li><a href="blog-3-column.html">Column Three</a></li>
                                                        <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                        <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-list-left-sidebar.html">List View</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-list-fullwidth.html">List Fullwidth</a></li>
                                                        <li><a href="blog-list-left-sidebar.html">List Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-list-right-sidebar.html">List Right
                                                                Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-details-left-sidebar.html">Blog Details</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-details-left-sidebar.html">Left Sidebar</a>
                                                        </li>
                                                        <li><a href="blog-details-right-sidebar.html">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="blog-gallery-format.html">Blog Format</a>
                                                    <ul class="hm-dropdown hm-sub_dropdown">
                                                        <li><a href="blog-gallery-format.html">Gallery Format</a></li>
                                                        <li><a href="blog-audio-format.html">Audio Format</a></li>
                                                        <li><a href="blog-video-format.html">Video Format</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li> -->
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-sm-3 d-block d-lg-none">
                            <div class="header-logo_area header-sticky_logo">
                                <a href="index.html">
                                    <img src="assets/images/menu/logo/1.png" alt="Uren's Logo">
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
            <div class="offcanvas-minicart_wrapper" id="miniCart">
                <div class="offcanvas-menu-inner">
                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>
                    <div class="minicart-content">
                        <div class="minicart-heading">
                            <h4>Shopping Cart</h4>
                        </div>
                        <ul class="minicart-list">
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Autem ipsa ad</a>
                                    <span class="product-item_quantity">1 x $145.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/2.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Tenetur illum amet</a>
                                    <span class="product-item_quantity">1 x $150.80</span>
                                </div>
                            </li>
                            <li class="minicart-product">
                                <a class="product-item_remove" href="javascript:void(0)"><i
                                    class="ion-android-close"></i></a>
                                <div class="product-item_img">
                                    <img src="assets/images/product/small-size/3.jpg" alt="Uren's Product Image">
                                </div>
                                <div class="product-item_content">
                                    <a class="product-item_title" href="shop-left-sidebar.html">Non doloremque placeat</a>
                                    <span class="product-item_quantity">1 x $165.80</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-item_total">
                        <span>Subtotal</span>
                        <span class="ammount">$462.4‬0</span>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="cart.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Minicart</a>
                    </div>
                    <div class="minicart-btn_area">
                        <a href="checkout.html" class="uren-btn uren-btn_dark uren-btn_fullwidth">Checkout</a>
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
                                <li class="menu-item-has-children active"><a href="index.html"><span
                                        class="mm-text">Home</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="index.html">
                                                <span class="mm-text">Home One</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <span class="mm-text">Home Two</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-3.html">
                                                <span class="mm-text">Home Three</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="shop-left-sidebar.html">
                                        <span class="mm-text">Shop</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="shop-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-grid-fullwidth.html">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-4-column.html">
                                                        <span class="mm-text">Column Four</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="shop-list-left-sidebar.html">
                                                <span class="mm-text">Shop List</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="shop-list-fullwidth.html">
                                                        <span class="mm-text">Full Width</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="shop-list-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product-gallery-left.html">
                                                <span class="mm-text">Single Product Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product-gallery-left.html">
                                                        <span class="mm-text">Gallery Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-gallery-right.html">
                                                        <span class="mm-text">Gallery Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-left.html">
                                                        <span class="mm-text">Tab Style Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-tab-style-right.html">
                                                        <span class="mm-text">Tab Style Right</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-left.html">
                                                        <span class="mm-text">Sticky Left</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sticky-right.html">
                                                        <span class="mm-text">Sticky Right</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="single-product.html">
                                                <span class="mm-text">Single Product Type</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="single-product.html">
                                                        <span class="mm-text">Single Product</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-sale.html">
                                                        <span class="mm-text">Single Product Sale</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-group.html">
                                                        <span class="mm-text">Single Product Group</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-variable.html">
                                                        <span class="mm-text">Single Product Variable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-affiliate.html">
                                                        <span class="mm-text">Single Product Affiliate</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="single-product-slider.html">
                                                        <span class="mm-text">Single Product Slider</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="blog-left-sidebar.html">
                                        <span class="mm-text">Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-left-sidebar.html">
                                                <span class="mm-text">Grid View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-2-column.html">
                                                        <span class="mm-text">Column Two</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-3-column.html">
                                                        <span class="mm-text">Column Three</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-list-left-sidebar.html">
                                                <span class="mm-text">List View</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-list-fullwidth.html">
                                                        <span class="mm-text">List Fullwidth</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-left-sidebar.html">
                                                        <span class="mm-text">List Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-list-right-sidebar.html">
                                                        <span class="mm-text">List Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-details-left-sidebar.html">
                                                <span class="mm-text">Blog Details</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-details-left-sidebar.html">
                                                        <span class="mm-text">Left Sidebar</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-details-right-sidebar.html">
                                                        <span class="mm-text">Right Sidebar</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children has-children">
                                            <a href="blog-gallery-format.html">
                                                <span class="mm-text">Blog Format</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="blog-gallery-format.html">
                                                        <span class="mm-text">Gallery Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-audio-format.html">
                                                        <span class="mm-text">Audio Format</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="blog-video-format.html">
                                                        <span class="mm-text">Video Format</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.html">
                                        <span class="mm-text">Pages</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.html">
                                                <span class="mm-text">Wishlist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cart.html">
                                                <span class="mm-text">Cart</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="checkout.html">
                                                <span class="mm-text">Checkout</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="compare.html">
                                                <span class="mm-text">Compare</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="faq.html">
                                                <span class="mm-text">FAQ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="404.html">
                                                <span class="mm-text">Error 404</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                        <nav class="offcanvas-navigation user-setting_area">
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children active"><a href="javascript:void(0)"><span
                                        class="mm-text">User
                                        Setting</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="my-account.html">
                                                <span class="mm-text">My Account</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="login-register.html">
                                                <span class="mm-text">Login | Register</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Currency</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">EUR €</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">USD $</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0)"><span
                                        class="mm-text">Language</span></a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">English</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Français</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Romanian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="mm-text">Japanese</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Uren's Header Main Area End Here -->

        <!-- Begin Uren's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h1>Контакты</h1>
                    <ul>
                        <li><a href="index.html">Главная</a></li>
                        <li class="active">Контакты</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->
    
        <?php wp_head(); ?>




    

      