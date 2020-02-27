<?php
/*
Template Name: Запчасть

*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header('common');
?>

    <!-- Begin Uren's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>Запчасть</h1>
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="index.html">Каталог</a></li>
                    <li class="active">Категория каталога</li>
                    <li class="active">Вид товара</li>
                    <li class="active">Запчасть</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Uren's Breadcrumb Area End Here -->

    <!-- Begin Uren's Shop Left Sidebar Area -->
    <div class="shop-content_wrapper before-product-page">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-5 order-2 order-lg-1 order-md-1">
                    <?php //dynamic_sidebar('sidebar-subcategory'); ?>
                        <div class="uren-sidebar-catagories_area subcatalog-sidebar">
                            <div class="category-module uren-sidebar_categories">
                                <div class="category-module_heading">
                                    <h5>Категории</h5>
                                </div>
                                <div class="module-body">
                                    <ul class="module-list_item">
                                        <li>
                                            <a href="javascript:void(0)">Категория 1 <span>(12)</span></a>
                                            <a href="javascript:void(0)">Категория 2 <span>(0)</span></a>
                                            
                                            <a class="active" href="javascript:void(0)">Категория 3 <span>(18)</span></a>
                                            <ul class="module-sub-list_item">
                                                <li>
                                                    <a href="javascript:void(0)">Подкатегория 1 <span>(8)</span></a>
                                                    <a href="javascript:void(0)">Подкатегория 2 <span>(8)</span></a>
                                                    <a href="javascript:void(0)">Подкатегория 3 <span>(13)</span></a>
                                                    
                                                </li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <div class="sidebar-banner_area">
                      
                        
                            <script type="text/javascript" src="https://vk.com/js/api/openapi.js?167"></script>

                                <!-- VK Widget -->
                                <div id="vk_groups"></div>
                                <script type="text/javascript">
                                VK.Widgets.Group("vk_groups", {mode: 3}, 182023385);
                            </script>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-7 order-1 order-lg-2 order-md-2">
                      
                        <!-- Begin Uren's Tab Style Right Area -->
                        <div class="sp-area sp-tab-style_left sp-tab-style_right">
                            <div class="container-fluid">
                                <div class="sp-nav">
                                    <div class="row">
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
                                                    <div class="single-slide red zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/1.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                    <div class="single-slide orange zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/2.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                    <div class="single-slide brown zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/3.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                    <div class="single-slide umber zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/4.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                    <div class="single-slide black zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/5.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                    <div class="single-slide green zoom">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/6.jpg';?>" alt="Uren's Product Image">
                                                    </div>
                                                </div>
                                                <div class="sp-img_slider-nav slick-slider-nav uren-slick-slider slider-navigation_style-4" data-slick-options='{
                                                                                    "slidesToShow": 3,
                                                                                    "asNavFor": ".sp-img_slider",
                                                                                    "focusOnSelect": true,
                                                                                    "arrows" : true,
                                                                                    "vertical" : true
                                                                                    }'>
                                                    <div class="single-slide red">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/1.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                    <div class="single-slide orange">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/2.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                    <div class="single-slide brown">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/3.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                    <div class="single-slide umber">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/4.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                    <div class="single-slide red">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/5.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                    <div class="single-slide orange">
                                                        <img src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/small-size/6.jpg';?>" alt="Uren's Product Thumnail">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="sp-content">
                                                <div class="sp-heading">
                                                    <h5><a href="#">Название</a></h5>
                                                </div>
                                                <div class="sp-heading">
                                                    <h6>Цена: <span>55</span> </h6>
                                                </div>
                                               
                                                <div class="sp-essential_stuff">
                                                    <h6>Характеристики:</h6>
                                                    <ul>
                                                        <li>Сод детали: <a href="javascript:void(0)">...</a></li>
                                                        <li>Состояние: <a href="javascript:void(0)">...</a></li>
                                                        <li>Примечания: <a href="javascript:void(0)">...</a></li>
                                                        <li>Номер: <a href="javascript:void(0)">...</a></li>
                                                       
                                                    </ul>
                                                </div>
                                               
                                                <div class="uren-tag-line">
                                                    <h6>Категории:</h6>
                                                    <a href="javascript:void(0)">vehicle</a>,
                                                    <a href="javascript:void(0)">car</a>,
                                                    <a href="javascript:void(0)">bike</a>
                                                </div>
                                                <div class="uren-social_link">
                                                    <ul>
                                                        <li class="facebook">
                                                            <a href="https://www.vk.com" data-toggle="tooltip" target="_blank" title="ВКонтакте">
                                                                <i class="fab fa-vk"></i>
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
                        <!-- Uren's Tab Style Right Area End Here -->

                        <!-- Begin Uren's Single Product Tab Area -->
                        <div class="sp-product-tab_area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sp-product-tab_nav">
                                            
                                            <div class="tab-content uren-tab_content">
                                                <div id="description" class="tab-pane active show" role="tabpanel">
                                                    <div class="product-description">
                                                        
                                                        <p class="">Для заказа или уточнения наличия запчастей вы можете связаться с нами любым удобным способом:</p>
                                                        <div class="single-contact-block">
                                                            <h4><i class="ion-android-call"></i>Позвонить по телефону</h4>
                                                            <a href="tel:89114169740"> +79114169740</a>
                                                        </div>
                                                        <div class="single-contact-block">
                                                            <h4><i class="fab fa-vk"></i>Оставить сообщение в группе в</h4>
                                                            <a href="https://vk.com/slkavto" target="_blank">ВКонтакте</a>
                                                        </div>
                                                        <div class="single-contact-block last-child">
                                                            <h4><i class="fas fa-envelope"></i>Заполнить форму ниже.</h4>
                                                            <span>Наш менеджер свяжется с вами в ближайшее время!</span>
                                                        </div>
                                                                       
                                                               
                                                        <div class="contact-form__wrap">
                                                            
                                                            <div class="contact-form">
                                                                <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Ваше имя: <span class="required">*</span></label>
                                                                                <input type="text" name="con_name" id="con_name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <div class="form-group">
                                                                                <label>Ваш телефон: <span class="required">*</span></label>
                                                                                <input type="email" name="con_email" id="con_email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="form-group form-group-2">
                                                                                <label>Сообщение:</label>
                                                                                <textarea name="con_message" id="con_message"></textarea>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <button type="submit" value="submit" id="submit" class="uren-contact-form_btn" name="submit">Отправить</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    
                                                                   
                                                                </form>
                                                            </div>
                                                            <p class="form-messege"></p>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Uren's Single Product Tab Area End Here -->

                        <!-- Begin Uren's Product Area -->
                        <!-- <div class="uren-product_area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title_area">
                                            <span></span>
                                            <h3>Related Products</h3>
                                        </div>
                                        <div class="product-slider uren-slick-slider slider-navigation_style-1 img-hover-effect_area" data-slick-options='{
                                        "slidesToShow": 6,
                                        "arrows" : true
                                        }' data-slick-responsive='[
                                                                {"breakpoint":1501, "settings": {"slidesToShow": 4}},
                                                                {"breakpoint":1200, "settings": {"slidesToShow": 3}},
                                                                {"breakpoint":992, "settings": {"slidesToShow": 2}},
                                                                {"breakpoint":767, "settings": {"slidesToShow": 1}},
                                                                {"breakpoint":480, "settings": {"slidesToShow": 1}}
                                                            ]'>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/1-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <div class="sticker">
                                                                <span class="sticker">New</span>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Veniam officiis voluptates</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price">$122.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/2-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/2-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <div class="sticker-area-2">
                                                                <span class="sticker-2">-20%</span>
                                                                <span class="sticker">New</span>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Corporis sed excepturi</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price new-price-2">$194.00</span>
                                                                    <span class="old-price">$241.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/3-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/3-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Quidem iusto sapiente</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price">$175.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/4-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/4-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <div class="sticker-area-2">
                                                                <span class="sticker-2">-5%</span>
                                                                <span class="sticker">New</span>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Ullam excepturi nesciunt</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price new-price-2">$145.00</span>
                                                                    <span class="old-price">$190.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/5-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/5-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Minus ipsam rerum</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price">$130.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/6-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/6-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <div class="sticker-area-2">
                                                                <span class="sticker-2">-15%</span>
                                                                <span class="sticker">New</span>
                                                            </div>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Labore aliquid eos</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price new-price-2">$240.00</span>
                                                                    <span class="old-price">$320.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/7-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/7-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li class="silver-color"><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Enim nobis numquam</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price">$190.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-slide_item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <div class="product-img">
                                                            <a href="single-product.html">
                                                                <img class="primary-img" src="assets/images/product/medium-size/8-1.jpg" alt="Uren's Product Image">
                                                                <img class="secondary-img" src="assets/images/product/medium-size/1-2.jpg" alt="Uren's Product Image">
                                                            </a>
                                                            <span class="sticker">New</span>
                                                            <div class="add-actions">
                                                                <ul>
                                                                    <li><a class="uren-add_cart" href="cart.html" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="ion-bag"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-wishlist" href="wishlist.html" data-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                                    </li>
                                                                    <li><a class="uren-add_compare" href="compare.html" data-toggle="tooltip" data-placement="top" title="Compare This Product"><i
                                                                            class="ion-android-options"></i></a>
                                                                    </li>
                                                                    <li class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="Quick View"><i
                                                                            class="ion-android-open"></i></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="product-content">
                                                            <div class="product-desc_info">
                                                                <div class="rating-box">
                                                                    <ul>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                        <li><i class="ion-android-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <h6><a class="product-name" href="single-product.html">Dolorem voluptates aut</a></h6>
                                                                <div class="price-box">
                                                                    <span class="new-price">$250.00</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Uren's Product Area End Here -->

                        <!-- Begin Uren's Brand Area -->
                        <!-- <div class="uren-brand_area">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title_area">
                                            <span>Top Quality Partner</span>
                                            <h3>Shop By Brands</h3>
                                        </div>
                                        <div class="brand-slider uren-slick-slider img-hover-effect_area" data-slick-options='{
                                        "slidesToShow": 6
                                        }' data-slick-responsive='[
                                                                {"breakpoint":1200, "settings": {"slidesToShow": 5}},
                                                                {"breakpoint":992, "settings": {"slidesToShow": 3}},
                                                                {"breakpoint":767, "settings": {"slidesToShow": 3}},
                                                                {"breakpoint":577, "settings": {"slidesToShow": 2}},
                                                                {"breakpoint":321, "settings": {"slidesToShow": 1}}
                                                            ]'>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/1.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/2.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/3.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/4.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/5.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/6.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/1.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/7.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="slide-item">
                                                <div class="inner-slide">
                                                    <div class="single-product">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/brand/2.jpg" alt="Uren's Brand Image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- Uren's Brand Area End Here -->
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shop Left Sidebar Area End Here -->


    


       
  

<?php 
get_footer(); 
?>