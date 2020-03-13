<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slk-avto
 */

?>

 

  <?php wp_footer(); ?>

 <!-- Begin Uren's Footer Area -->
 <div class="uren-footer_area">
            
            <div class="footer-middle_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widgets_info">
                                <div class="footer-widgets_logo">
                                    <!-- <a href="#">
                                        <img src="<?php //echo get_template_directory_uri() . '/assets/assets/images/menu/logo/1.png';?>" alt="Uren's Footer Logo">
                                    </a> -->
                                    <?php echo get_custom_logo(); ?>
                                </div>
                                <div class="widget-short_desc">
                                    <p><?php echo trim(get_option('slk_smalltext'));?> </p>
                                </div>
                                <!-- <div class="widgets-essential_stuff">
                                    <ul>
                                        <li class="uren-address"><span>Address:</span> The Barn,
                                            Ullenhall, Henley
                                            in
                                            Arden B578 5CC, England</li>
                                        <li class="uren-phone"><span>Call
                                        Us:</span> <a href="tel://+123123321345">+123 321 345</a>
                                        </li>
                                        <li class="uren-email"><span>Email:</span> <a href="mailto://info@yourdomain.com">info@yourdomain.com</a></li>
                                    </ul>
                                </div> -->
                                <?php if(get_option('slk_vk')){ ?>
                                <div class="uren-social_link">
                                    <ul>
                                        <li class="vk">
                                            <a href="<?php echo trim(get_option('slk_vk'));?>" data-toggle="tooltip" target="_blank" title="Мы в ВКонтакте">
                                                <i class="fab fa-vk"></i>
                                            </a>
                                        </li>
                                        
                                        
                                    </ul>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="footer-widgets_area">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-widgets_title">
                                        
                                            <h3><?php echo wp_get_nav_menu_name('bottom_left');?></h3>
                                        </div>
                                        
                                        <div class="footer-widgets">
                                        <?php wp_nav_menu( [
                                            'theme_location'  => 'bottom_left',
                                            'menu'            => '', 
                                            'container'       => 'ul', 
                                            'container_class' => '', 
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
                                            <!-- ul>
                                                <li><a href="javascript:void(0)">About Us</a></li>
                                                <li><a href="javascript:void(0)">Delivery Information</a></li>
                                                <li><a href="javascript:void(0)">Privacy Policy</a></li>
                                                <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                            </ul -->
                                        </div>
                                    </div>
                                    <!-- <div class="col-lg-4 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>О нас</h3>
                                        </div>
                                       <div class="footer-widgets">
                                            <ul>
                                                <li><a href="javascript:void(0)">Contact Us</a></li>
                                                <li><a href="javascript:void(0)">Returns</a></li>
                                                <li><a href="javascript:void(0)">Site Map</a></li>
                                            </ul>
                                        </div> 
                                    </div> -->
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3><?php echo wp_get_nav_menu_name('bottom_right');?></h3>
                                        </div>
                                        <div class="footer-widgets">
                                        <?php wp_nav_menu( [
                                            'theme_location'  => 'bottom_right',
                                            'menu'            => '', 
                                            'container'       => 'ul', 
                                            'container_class' => '', 
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
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="footer-widgets_title">
                                            <h3>Контакты</h3>
                                        </div>
                                        <div class="footer-widgets footer-widgets__contacts">
                                            <ul>
                                                
                                                <li><a href="tel:<?php echo trim(get_option('slk_phone'));?>"><i class="ion-android-call"></i><?php echo trim(get_option('slk_phone'));?></a></li>
                                                <li><i class="fa fa-map-marker"></i>
                                                <?php echo trim(get_option('slk_address'));?>
                                                </li>
                                                <li><a href="mailto:<?php echo trim(get_option('slk_email'));?>"><i class="fa fa-envelope"></i><?php echo trim(get_option('slk_email'));?></a></li>
                                                
                                              
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom_area">
                <div class="container-fluid">
                    <div class="footer-bottom_nav">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="copyright">
                                    <span>Copyright &copy; 2020 <a href="#">Slk-avto.ru</a></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="payment">
                                    <a href="#">
                                        Политика конфиденциальности
                                        <!-- <img src="assets/images/footer/payment/1.png" alt="Uren's Payment Method"> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Uren's Footer Area End Here -->

        <!-- Begin Uren's Modal Area -->
        <div class="modal fade modal-wrapper" id="exampleModalCenter">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-inner-area sp-area row">
                            <div class="col-lg-5">
                                <div class="sp-img_area">
                                    <div class="sp-img_slider slick-img-slider uren-slick-slider" data-slick-options='{
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "fade": true,
                                    "draggable": false,
                                    "swipe": false,
                                    "asNavFor": ".sp-img_slider-nav"
                                    }'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/large-size/1.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/large-size/2.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/large-size/3.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/large-size/4.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide black">
                                            <img src="assets/images/product/large-size/5.jpg" alt="Uren's Product Image">
                                        </div>
                                        <div class="single-slide golden">
                                            <img src="assets/images/product/large-size/6.jpg" alt="Uren's Product Image">
                                        </div>
                                    </div>
                                    <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-3" data-slick-options='{
                                   "slidesToShow": 4,
                                    "asNavFor": ".sp-img_slider",
                                   "focusOnSelect": true,
                                   "arrows" : true,
                                   "spaceBetween": 30
                                  }' data-slick-responsive='[
                                    {"breakpoint":1501, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":992, "settings": {"slidesToShow": 4}},
                                    {"breakpoint":768, "settings": {"slidesToShow": 3}},
                                    {"breakpoint":575, "settings": {"slidesToShow": 2}}
                                ]'>
                                        <div class="single-slide red">
                                            <img src="assets/images/product/small-size/1.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide orange">
                                            <img src="assets/images/product/small-size/2.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide brown">
                                            <img src="assets/images/product/small-size/3.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide umber">
                                            <img src="assets/images/product/small-size/4.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide black">
                                            <img src="assets/images/product/small-size/5.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                        <div class="single-slide golden">
                                            <img src="assets/images/product/small-size/6.jpg" alt="Uren's Product Thumnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6">
                                <div class="sp-content">
                                    <div class="sp-heading">
                                        <h5><a href="#">Dolorem odio provident ut nihil</a></h5>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                            <li class="silver-color"><i class="ion-android-star"></i></li>
                                        </ul>
                                    </div>
                                    <div class="price-box">
                                        <span class="new-price new-price-2">$194.00</span>
                                        <span class="old-price">$241.00</span>
                                    </div>
                                    <div class="sp-essential_stuff">
                                        <ul>
                                            <li>Brands <a href="javascript:void(0)">Buxton</a></li>
                                            <li>Product Code: <a href="javascript:void(0)">Product 16</a></li>
                                            <li>Reward Points: <a href="javascript:void(0)">100</a></li>
                                            <li>Availability: <a href="javascript:void(0)">In Stock</a></li>
                                            <li>EX Tax: <a href="javascript:void(0)"><span>$453.35</span></a></li>
                                            <li>Price in reward points: <a href="javascript:void(0)">400</a></li>
                                        </ul>
                                    </div>
                                    <div class="color-list_area">
                                        <div class="color-list_heading">
                                            <h4>Available Options</h4>
                                        </div>
                                        <span class="sub-title">Color</span>
                                        <div class="color-list">
                                            <a href="javascript:void(0)" class="single-color active" data-swatch-color="red">
                                                <span class="bg-red_color"></span>
                                                <span class="color-text">Red (+$150)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="orange">
                                                <span class="burnt-orange_color"></span>
                                                <span class="color-text">Orange (+$170)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="brown">
                                                <span class="brown_color"></span>
                                                <span class="color-text">Brown (+$120)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="umber">
                                                <span class="raw-umber_color"></span>
                                                <span class="color-text">Umber (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="black">
                                                <span class="black_color"></span>
                                                <span class="color-text">Black (+$125)</span>
                                            </a>
                                            <a href="javascript:void(0)" class="single-color" data-swatch-color="golden">
                                                <span class="golden_color"></span>
                                                <span class="color-text">Golden (+$125)</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="quantity">
                                        <label>Quantity</label>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" value="1" type="text">
                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                        </div>
                                    </div>
                                    <div class="uren-group_btn">
                                        <ul>
                                            <li><a href="cart.html" class="add-to_cart">Cart To Cart</a></li>
                                            <li><a href="cart.html"><i class="ion-android-favorite-outline"></i></a></li>
                                            <li><a href="cart.html"><i class="ion-ios-shuffle-strong"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="uren-tag-line">
                                        <h6>Tags:</h6>
                                        <a href="javascript:void(0)">Ring</a>,
                                        <a href="javascript:void(0)">Necklaces</a>,
                                        <a href="javascript:void(0)">Braid</a>
                                    </div>
                                    <div class="uren-social_link">
                                        <ul>
                                            <li class="facebook">
                                                <a href="https://www.facebook.com" data-toggle="tooltip" target="_blank" title="Facebook">
                                                    <i class="fab fa-facebook"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="https://twitter.com" data-toggle="tooltip" target="_blank" title="Twitter">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a href="https://www.youtube.com" data-toggle="tooltip" target="_blank" title="Youtube">
                                                    <i class="fab fa-youtube"></i>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a href="https://www.plus.google.com/discover" data-toggle="tooltip" target="_blank" title="Google Plus">
                                                    <i class="fab fa-google-plus"></i>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a href="https://rss.com" data-toggle="tooltip" target="_blank" title="Instagram">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Modal Area End Here -->

    </div>

    <!-- JS
============================================ -->

    <!-- jQuery JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/vendor/jquery-1.12.4.min.js';?>"></script>
    <!-- Modernizer JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/vendor/modernizr-2.8.3.min.js';?>"></script>
    <!-- Popper JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/vendor/popper.min.js';?>"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/vendor/bootstrap.min.js';?>"></script>

    <!-- Slick Slider JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/slick.min.js';?>"></script>
    <!-- Barrating JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.barrating.min.js';?>"></script>
    <!-- Counterup JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.counterup.js';?>"></script>
    <!-- Nice Select JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.nice-select.js';?>"></script>
    <!-- Sticky Sidebar JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.sticky-sidebar.js';?>"></script>
    <!-- Jquery-ui JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery-ui.min.js';?>"></script>
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.ui.touch-punch.min.js';?>"></script>
    <!-- Lightgallery JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/lightgallery.min.js';?>"></script>
    <!-- Scroll Top JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/scroll-top.js';?>"></script>
    <!-- Theia Sticky Sidebar JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/theia-sticky-sidebar.min.js';?>"></script>
    <!-- Waypoints JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/waypoints.min.js';?>"></script>
    <!-- jQuery Zoom JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/plugins/jquery.zoom.min.js';?>"></script>

    <!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
    <!--
<script src="assets/js/vendor/vendor.min.js"></script>
<script src="assets/js/plugins/plugins.min.js"></script>
-->

    <!-- Main JS -->
    <script src="<?php echo get_template_directory_uri() . '/assets/assets/js/main.js';?>"></script>

</body>

</html>