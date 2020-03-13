


<?php 
get_header();
?>

    <!-- Begin Uren's Breadcrumb Area -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-content">
                <h1>
                    <?php 
                        $category_name = single_cat_title('', 0); 
                        echo $category_name;
                    ?>
                </h1>
                <ul>
                    <li><a href="<?php echo get_site_url();?>">Главная</a></li>
                    <?php 
                        $catalog_page = get_page_by_title('Каталог');

                        //if($catalog_page) {
                    ?>
                    <li><a href="<?php //echo get_site_url() . '/' . $catalog_page['post_name'];?>">Каталог</a></li>
                    <li class="active"><?php echo $category_name; ?></li>

                    <?php 
                        //}
                    ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Uren's Breadcrumb Area End Here -->

    <!-- Begin Uren's Shop Left Sidebar Area -->
    <div class="shop-content_wrapper">

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
                                                    <span>
                                                      
                                                    </span>
                                                    
                                                </li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <div class="sidebar-banner_area">
                      
                            <!-- <div class="banner-item img-hover_effect">
                                <a href="javascript:void(0)">
                                    <img src="assets/images/shop/1.jpg" alt="Uren's Shop Banner Image">
                                </a>
                            </div> -->
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
                           

                            
                                            <!-- <div class="shipping-grid cars-grid"> -->
                                             <?php  
                                                $category_id = get_cat_ID($category_name);
                                                //echo $category_id;

                                                $subcategories = get_categories( [
                                                    'taxonomy'     => 'category',
                                                    'type'         => 'post',
                                                    'child_of'     => $category_id,
                                                    'parent'       => $category_id,
                                                    'orderby'      => 'name',
                                                    'order'        => 'ASC',
                                                    'hide_empty'   => 0,
                                                    'hierarchical' => 0,
                                                    'exclude'      => '',
                                                    'include'      => '',
                                                    'number'       => 0,
                                                    'pad_counts'   => false,
                                                    // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                                                ] );
                                                //var_dump($subcategories);
                    
                                                if( $subcategories ) {
                                            ?>


                                                <!-- Begin Uren's Shipping Area -->
                                                <div class="uren-shipping_area cars-grid-area subcatalog">
                                                        
                                                        <div class="shipping-nav cars-grid-nav">
                                                            <div class="row no-gutters">





                                            <?php
                                                    foreach( $subcategories as $subcat ) { 
 
                                             ?>
                                                <div class="shipping-item cars-grid__item">
                                                    <div class="shipping-icon">
                                                        <i class="fas fa-cog"></i>
                                                    </div>
                                                    <div class="shipping-content">
                                                        <a href="<?php echo '/' . $subcat->slug; ?>">
                                                            <h6><?php echo $subcat->name; ?></h6>
                                                        </a>
                                                    </div>
                                                </div>

                                                <?php 


                                                    }
                                                 

                                                ?>

                                                                    <!-- </div>     -->
                                                            </div>
                                                        </div>
                                                        
                                                
                                                </div>
                                                <!-- Uren's Shipping Area End Here -->

                                                <?php
                                                    }  
                                                    else {
                                                ?>

                                                <div class="shop-product-wrap grid gridview-3 img-hover-effect_area row subcatalog-wrap">



                                                <?php

                                                    // параметры по умолчанию
                                                    $posts = get_posts( array(
                                                        'numberposts' => 5,
                                                        'category'    => $category_id,
                                                        'orderby'     => 'date',
                                                        'order'       => 'DESC',
                                                        'include'     => array(),
                                                        'exclude'     => array(),
                                                        'meta_key'    => '',
                                                        'meta_value'  =>'',
                                                        'post_type'   => 'post',
                                                        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                                                    ) );

                                                    if($posts) {
                                                        foreach( $posts as $post ){
                                                            setup_postdata($post);
                                                            // формат вывода the_title() ...


                                                ?>

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
                                                                                <br>
                                                                                <br>
                                                                                <br>
                                                                                <?php 
                                                                                    $image_row = get_field('product_page_product_imgs', get_the_id());
                                                                                    
                                                                                ?>
                                                                                <br>
                                                                                
                                                                                <img class="primary-img" src="<?php echo $image_row['product_page_product_img_1'];?>" alt="Uren's Product Image">
                                                                                <img class="secondary-img" src="<?php echo $image_row['product_page_product_img_1'];?>" alt="Uren's Product Image">
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
                                                                               
                                                                                <h6><a class="product-name" href="single-product.html"><?php the_title();?></a></h6>
                                                                                <div class="price-box">
                                                                                    <span class="new-price"><?php echo get_field('product_page_product_price', get_the_id());?></span>
                                                                                </div>
                                                                                <div>
                                                                                    <a class="uren-btn" href="<?php echo the_permalink();?>">Подробнее</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>



                                                <?php
                                                            

                                                        }
    
                                                        wp_reset_postdata(); // сброс
                                                    }
                                                    else {
                                                        echo '<h3>В данном разделе запчастей пока нет.</h3>';
                                                        echo '<div><a href="/">Вернуться на главную</a></div>';
                                                    }

                                                    ?>

                                                </div>


                                                <?php

                                                    
                                                }
                                            
                                            

                                            ?>
                                                 
                                                
                                          

                            
                            
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="uren-paginatoin-area">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <ul class="uren-pagination-box primary-color">
                                                <li class="active"><a href="javascript:void(0)">1</a></li>
                                                <li><a href="javascript:void(0)">2</a></li>
                                                <li><a href="javascript:void(0)">3</a></li>
                                                <li><a href="javascript:void(0)">4</a></li>
                                                <li><a href="javascript:void(0)">5</a></li>
                                                <li><a class="Next" href="javascript:void(0)">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shop Left Sidebar Area End Here -->


    


       
  

<?php 
get_footer(); 
?>