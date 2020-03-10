<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package slk-avto
 */

get_header();
?>

        <div class="uren-slider_area uren-slider_area-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-8">
                        <div class="main-slider slider-navigation_style-2 main-screen">
                            <div class="single-slide bg-3" style="background-color:#f7f7f7;background-image: url(<?php echo get_field('main_button_img'); ?>); background-repeat: no-repeat; background-position: center center; background-size: cover;">
                                <div class="slider-content">
                                    <!-- <span>New thinking new possibilities</span> -->
                                    <h1><?php echo get_field('main_title'); ?></h1>
                                    
                                    <div class="uren-btn-ps_left slide-btn main-screen__btn">
                                        <a class="uren-btn" href="<?php echo get_field('main_button_link'); ?>" target="_blank"><?php echo get_field('main_button_text'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- Begin Uren's Shipping Area -->
        <div class="uren-shipping_area cars-grid-area">
            <div class="container">
                <div class="section-title_area">
                    <!-- <span>Special Offer Limited Time</span> -->
                    <h3>Каталог запчастей по маркам автомобилей</h3>
                </div>
                <div class="shipping-nav cars-grid-nav">
                    <div class="row no-gutters">
                        <div class="shipping-grid cars-grid">

                        <?php 
                            $categories = get_categories( [
                                'taxonomy'     => 'category',
                                'type'         => 'post',
                                'child_of'     => 34,
                                'parent'       => '',
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

                            if( $categories ) {
                                foreach( $categories as $cat ) {

                        ?>

                            <div class="shipping-item cars-grid__item">
                                <div class="shipping-icon">
                                    <i class="fas fa-cog"></i>
                                </div>
                                <div class="shipping-content">
                                    <a href="<?php echo '/' . $cat->slug; ?>">
                                        <h6><?php echo $cat->name; ?></h6>
                                    </a>
                                </div>
                            </div>

                        <?php 

                    
                                    // Данные в объекте $cat

                                    // $cat->term_id
                                    // $cat->name (Рубрика 1)
                                    // $cat->slug (rubrika-1)
                                    // $cat->term_group (0)
                                    // $cat->term_taxonomy_id (4)
                                    // $cat->taxonomy (category)
                                    // $cat->description (Текст описания)
                                    // $cat->parent (0)
                                    // $cat->count (14)
                                    // $cat->object_id (2743)
                                    // $cat->cat_ID (4)
                                    // $cat->category_count (14)
                                    // $cat->category_description (Текст описания)
                                    // $cat->cat_name (Рубрика 1)
                                    // $cat->category_nicename (rubrika-1)
                                    // $cat->category_parent (0)

                                }
                            }

                        ?>


                           
                    </div>
                </div>
                <div class="shipping-text cars-grid-text">
                    <p><?php echo get_field('catalog_descr'); ?></p>
                    <p><a href="<?php echo get_field('catalog_button_link'); ?>" class="uren-btn"><?php echo get_field('catalog_button_text'); ?></a></p>
                </div>
            </div>
        </div>
        <!-- Uren's Shipping Area End Here -->

        <!-- Begin Uren's Testimonial Area -->
        <div class="testimonial-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title_area">
                            <!-- <span>Special Offer Limited Time</span> -->
                            <h3>Отзывы</h3>
                        </div>
                        <div class="testimonial-slider uren-slick-slider slider-navigation_style-1" data-slick-options='{
                        "slidesToShow": 1,
                        "arrows" : true
                       }' data-slick-responsive='[
                                             {"breakpoint":768, "settings": {"slidesToShow": 1}},
                                             {"breakpoint":577, "settings": {"slidesToShow": 1}},
                                             {"breakpoint":481, "settings": {"slidesToShow": 1}},
                                             {"breakpoint":321, "settings": {"slidesToShow": 1}}
                                         ]'>

                        <?php 
                            $reviews = get_field('reviews');

                            if($reviews) {
                                foreach($reviews as $review) {

                        ?>
                            <div class="slide-item">
                                <div class="slide-inner">
                                    <div class="single-slide">
                                        <div class="slide-content">

                        <?php 
                                foreach($review as $key => $value) {
                                    if( ($key == 'review_link') && ($review[$key] != '') ) {
                                        
                                            
                                    
                        ?>
                            
                                        <span class="primary-text_color"><a class="link" href=""><?php echo $review[$key];?></a></span>
                                            


                        <?php 
                                    }

                                    if( ($key == 'review_title') && ($review[$key] != '') ) {
                                    
                        ?>
                                        <h3 class="user-name"><?php echo $review[$key];?></h3>

                        <?php 
                                    
                                   }

                                    if( ($key == 'review_text') && ($review[$key] != '') ) {
                                        
                                   

                        ?>

                                        <div class="comment-box">
                                            <p class="user-feedback">“ <?php echo $review[$key];?> ”</p>
                                        </div>


                        <?php 
                                                  
                                    }

                                    if( ($key == 'review_img') && ($review[$key] != '') ) {

                        ?>

                                            <div class="slide-image">
                                                <a href="javascript:void(0)">
                                                    <img src="<?php echo $review[$key];?>" alt="<?php echo $review['review_title']; ?>">
                                                </a>
                                            </div>

                        <?php
                                           
   
                                    }
                                }

                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                            }
                        }

                        ?>

                          
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Testimonial Area End Here -->


        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1  col-md-12"></div>
                    <div class="col-lg-5  col-md-12">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Как сделать заказ?</h3>
                            
                                <?php 
                                    $contacts_title = get_field('contacts_title'); 
                                    if($contacts_title) {
                                ?>

                                <p class="contact-page-message">

                                <?php
                                        echo $contacts_title;
                                    
                                ?>

                                </p>

                                <?php
                                        
                                    }
                                    
                                ?>
                            <div class="single-contact-block">
                                <h4><i class="ion-android-call"></i>Позвонить по телефону</h4>
                                <?php 
                                    $contacts_phone = get_field('contacts_phone'); 
                                    if($contacts_phone) {
                                ?>

                                <a href="tel:<?php echo $contacts_phone;?>"> 

                                <?php
                                        echo $contacts_phone;
                                    
                                ?>

                                </a>

                                <?php
                                        
                                    }
                                    
                                ?>
                                
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fab fa-vk"></i>Оставить сообщение в группе в</h4>

                                <?php 
                                    $contacts_vk = get_field('contacts_vk'); 
                                    if($contacts_vk) {
                                ?>

                                <a href="<?php echo $contacts_vk;?>" target="_blank">ВКонтакте</a>

                                <?php
                                        
                                    }
                                    
                                ?>

                                
                            </div>
                            <div class="single-contact-block last-child">
                                <h4><i class="fas fa-envelope"></i>Заполнить форму справа.</h4>
                                <p>Наш менеджер свяжется с вами в ближайшее время!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="contact-form-content">
                            <!-- <h3 class="contact-page-title">Tell Us Your Message</h3> -->
                            <div class="contact-form">
                                <!-- <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="form-group">
                                        <label>Ваше имя: <span class="required">*</span></label>
                                        <input type="text" name="con_name" id="con_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Ваш телефон: <span class="required">*</span></label>
                                        <input type="email" name="con_email" id="con_email" required>
                                    </div>
                                   
                                    <div class="form-group form-group-2">
                                        <label>Сообщение:</label>
                                        <textarea name="con_message" id="con_message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="uren-contact-form_btn" name="submit">Отправить</button>
                                    </div>
                                </form> -->
                                <?php echo do_shortcode('[contact-form-7 id="131" title="Без названия"]'); ?>
                            </div>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                    <div class="col-lg-1  col-md-12"></div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->



<?php
// get_sidebar();
get_footer();
?>