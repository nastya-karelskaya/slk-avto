<?php
/*
Template Name: Вид товара (главная категория)
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
                <h1>Вид товара</h1>
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="index.html">Каталог</a></li>
                    <li class="active">Категория каталога</li>
                    <li class="active">Вид товара</li>
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
                      
                        <div class="shop-product-wrap grid gridview-3 img-hover-effect_area row subcatalog-wrap">
                            <div class="col-lg-4">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/1.jpg';?>" alt="Uren's Product Image">
                                                    <img class="secondary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/2.jpg';?>" alt="Uren's Product Image">
                                                </a>
                                                <!-- <div class="sticker">
                                                    <span class="sticker">Новое</span>
                                                </div> -->
                                                <div class="sticker-area-2">
                                                    <span class="sticker-2">-20%</span>
                                                    <span class="sticker">Новое</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <!-- <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                    <h6><a class="product-name" href="single-product.html">Название товара</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">Стоимость</span>
                                                    </div>
                                                    <div>
                                                        <a class="uren-btn" href="">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/1.jpg';?>" alt="Uren's Product Image">
                                                    <img class="secondary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/2.jpg';?>" alt="Uren's Product Image">
                                                </a>
                                                <!-- <div class="sticker">
                                                    <span class="sticker">Новое</span>
                                                </div> -->
                                                <div class="sticker-area-2">
                                                    <span class="sticker-2">-20%</span>
                                                    <span class="sticker">Новое</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <!-- <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                    <h6><a class="product-name" href="single-product.html">Название товара</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">Стоимость</span>
                                                    </div>
                                                    <div>
                                                        <a class="uren-btn" href="">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-4">
                                <div class="product-slide_item">
                                    <div class="inner-slide">
                                        <div class="single-product">
                                            <div class="product-img">
                                                <a href="single-product.html">
                                                    <img class="primary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/1.jpg';?>" alt="Uren's Product Image">
                                                    <img class="secondary-img" src="<?php echo get_template_directory_uri() . '/assets/assets/images/product/large-size/2.jpg';?>" alt="Uren's Product Image">
                                                </a>
                                                <!-- <div class="sticker">
                                                    <span class="sticker">Новое</span>
                                                </div> -->
                                                <div class="sticker-area-2">
                                                    <span class="sticker-2">-20%</span>
                                                    <span class="sticker">Новое</span>
                                                </div>
                                                
                                            </div>
                                            <div class="product-content">
                                                <div class="product-desc_info">
                                                    <!-- <div class="rating-box">
                                                        <ul>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li><i class="ion-android-star"></i></li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                            <li class="silver-color"><i class="ion-android-star"></i>
                                                            </li>
                                                        </ul>
                                                    </div> -->
                                                    <h6><a class="product-name" href="single-product.html">Название товара</a></h6>
                                                    <div class="price-box">
                                                        <span class="new-price">Стоимость</span>
                                                    </div>
                                                    <div>
                                                        <a class="uren-btn" href="">Подробнее</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

         
                            
                   
                            
                            
                            
                        </div>
                        <div class="row">
                        <div class="col-12">
                                <div class="uren-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="uren-pagination-box primary-color">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                
                                                <li><a class="Next" href="javascript:void(0)">Далее</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shop Left Sidebar Area End Here -->


    


       
  

<?php 
get_footer(); 
?>