<?php
/*
Template Name: О нас
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>
       
   <!-- Begin Uren's Breadcrumb Area -->
   <div class="breadcrumb-area about-us_breadcrumbs" style="background: url(<?php echo get_field('about_page_top_photo');?>) center no-repeat cover;">
        <div class="container">
            <div class="breadcrumb-content">
                <h1><?php the_title();?></h1>
                <ul>
                    <li><a href="<?php echo get_site_url();?>">Главная</a></li>
                    <li class="active"><?php the_title();?></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Uren's Breadcrumb Area End Here -->


    <!-- Begin Uren's About Us Area -->
    <div class="about-us-area about-us_info">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-4">
                        <div class="overview-img text-center " style="background: url(<?php echo get_field('about_page_photo_1');?>) center no-repeat cover;"></div>
                        <div class="overview-img text-center " style="background: url(<?php echo get_field('about_page_photo_2');?>) center no-repeat cover;"></div>
                    </div>
                    <div class="col-lg-7 col-md-8 d-flex align-items-center">
                        <div class="overview-content">
                            <!-- <h2>Welcome To <span>Uren's</span> Store!</h2> -->
                            <p class="short_desc">
                            <?php 
                                
                                echo get_field('about_page_text');
                                ?>
                        
                            </p>
                           

                             <!-- Begin Uren's Shipping Area -->
                            <div class="uren-shipping_area cars-grid-area about-us_car-grid">
                                <!-- <div class="container"> -->
                            
                                    <div class="shipping-nav cars-grid-nav">
                                        <div class="row no-gutters">
                                            <div class="shipping-grid cars-grid">

                                            <?php 
                                                $categories = get_categories( [
                                                    'taxonomy'     => 'category',
                                                    'type'         => 'post',
                                                    'child_of'     => 34,
                                                    'parent'       => 34,
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
                                                
                                                    
                                                    <div class="shipping-content">
                                                        <a href="<?php echo '/' . $cat->slug; ?>"><?php echo $cat->name; ?></a>
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
                                    </div>
                                    <!-- <div class="shipping-text cars-grid-text">
                                        <p>Доставка: самовывоз или транспортной компанией. </p>
                                        <p><a href="" class="uren-btn">Подробнее</a></p>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                            <!-- Uren's Shipping Area End Here -->

                            <!-- <div class="uren-about-us_btn-area">
                                <a class="about-us_btn" href="shop-left-sidebar.html">Shop Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's About Us Area End Here -->

        <!-- Begin Uren's Project Countdown Area -->
        <div class="project-count-area about-us_count" style="background: url(<?php echo get_field('about_page_service_photo');?>) center no-repeat cover;">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title">
                            <h3>Slk-avto оказывает дополнительные услуги</h3>
                        </div>
                    </div>
                </div> <!-- section title end -->
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="">
                                    <i class="fas fa-car"></i>
                                </span>
                            </div>
                            <div class="count-title">
                                <!-- <h2 class="count">Автосервис</h2> -->
                                <span>Автосервис</span>
                            </div>
                        </div>

                       
                            <div class=" about-us_service text-left">
                                <div class="short_desc">
                                    
                                        <i class="fas fa-cogs"></i>
                                   
                                    <h4>
                                    <?php echo get_field('about_page_service_1_title');?>
                             
                                    </h4>

                                </div>
                                <ul class="about-us_service-list">
                                <?php 
                                    $about_page_services = get_field('about_page_service_1');
                                    if($about_page_services) {
                                        //foreach($about_page_services as $about_page_service) {
                                            foreach($about_page_services as $key => $value) {
                                        


                                        if($value != '') {
                                            echo '<li>' . $value . '</li>';
                                        }
                                    
                                   
                                           
                                        }
                                    }
                                ?>
                                    
                                </ul>
                            </div>
                            <div class=" about-us_service text-left">
                                <div class="short_desc">
                               
                                        <i class="fas fa-cogs"></i>
                                 
                                    <h4>
                                    <?php echo get_field('about_page_service_2_title');?>
                                    </h4>

                                </div>
                                
                                <ul class="about-us_service-list">
                                <?php 
                                    $about_page_services = get_field('about_page_service_1');
                                    if($about_page_services) {
                                        //foreach($about_page_services as $about_page_service) {
                                            foreach($about_page_services as $key => $value) {
                                        


                                        if($value != '') {
                                            echo '<li>' . $value . '</li>';
                                        }
                                    
                                   
                                           
                                        }
                                    }
                                ?>
                                
                                </ul>
                            </div>


                            <?php 

                            $service_3 = get_field('about_page_service_3_title');
                            if($service_3) {

                            ?>
                            <div class=" about-us_service text-left">
                                <div class="short_desc">
                               
                                        <i class="fas fa-cogs"></i>
                                 
                                    <h4>
                                    <?php echo $service_3;?>
                                    </h4>

                                </div>
                                <ul class="about-us_service-list">
                                <?php 
                                    $about_page_services = get_field('about_page_service_1');
                                    if($about_page_services) {
                                        //foreach($about_page_services as $about_page_service) {
                                            foreach($about_page_services as $key => $value) {
                                        


                                        if($value != '') {
                                            echo '<li>' . $value . '</li>';
                                        }
                                    
                                   
                                           
                                        }
                                    }
                                ?>
                                
                                </ul>
                            </div>

                            <?php 
                            }

                            ?>
                       
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="single-count text-center">
                            <div class="count-icon">
                                <span class="">
                                    <i class="fas fa-car-battery"></i>
                                </span>
                            </div>
                            <div class="count-title">
                                <!-- <h2 class="count">Поставка новых запчастей для иномарок</h2> -->
                                <span>Поставка новых запчастей <br> для иномарок</span>
                            </div>
                        </div>

                        <div class="overview-content">

                            <!-- Begin Uren's Shipping Area -->
                            <div class="uren-shipping_area cars-grid-area about-us_car-grid about-us_car-models">
                                <!-- <div class="container"> -->
                            
                                    <div class="shipping-nav">
                                        <div class="row no-gutters">
                                            <div class="shipping-grid">

                                            <?php 
                                                // $categories = get_categories( [
                                                //     'taxonomy'     => 'category',
                                                //     'type'         => 'post',
                                                //     'child_of'     => 34,
                                                //     'parent'       => '',
                                                //     'orderby'      => 'name',
                                                //     'order'        => 'ASC',
                                                //     'hide_empty'   => 0,
                                                //     'hierarchical' => 0,
                                                //     'exclude'      => '',
                                                //     'include'      => '',
                                                //     'number'       => 0,
                                                //     'pad_counts'   => false,
                                                //     // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
                                                // ] );

                                                if( $categories ) {
                                                    foreach( $categories as $cat ) {

                                            ?>
                                                
                                           

                                                    <div class="shipping-content">
                                                        <a href="<?php echo '/' . $cat->slug; ?>"><?php echo $cat->name; ?></a>
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
                                    </div>
                                    <!-- <div class="shipping-text cars-grid-text">
                                        <p>Доставка: самовывоз или транспортной компанией. </p>
                                        <p><a href="" class="uren-btn">Подробнее</a></p>
                                    </div> -->
                                <!-- </div> -->
                            </div>
                            <!-- Uren's Shipping Area End Here -->

                        </div>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-lg-5 col-md-4">
                        <div class="overview-img text-center "></div>
                        <div class="overview-img text-center "></div>
                    </div>
                    <div class="col-lg-7 col-md-8 d-flex align-items-center">
                        <div class="overview-content">
                            <!-- <h2>Welcome To <span>Uren's</span> Store!</h2> -->
                            

                            

                            <!-- <div class="uren-about-us_btn-area">
                                <a class="about-us_btn" href="shop-left-sidebar.html">Shop Now</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Project Countdown Area End Here -->

        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page about-us_form">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1  col-md-12"></div>
                    <div class="col-lg-5  col-md-12">
                        <div class="contact-page-side-content">
                            <h3 class="contact-page-title">Как сделать заказ?</h3>
                            <p class="contact-page-message">
                            <?php echo get_field('about_page_form_text'); ?>
                            
                            </p>
                            <div class="single-contact-block">
                                <h4><i class="ion-android-call"></i>Позвонить по телефону</h4>
                                <a href="tel:<?php echo trim(get_option('slk_phone'));?>"> <?php echo trim(get_option('slk_phone'));?></a>
                            </div>
                            <div class="single-contact-block">
                                <h4><i class="fab fa-vk"></i>Оставить сообщение в группе в</h4>
                                <a href="<?php echo trim(get_option('slk_vk'));?>" target="_blank">ВКонтакте</a>
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
                                <?php echo do_shortcode('[contact-form-7 id="134" title="Контактная форма на странице О нас"]') ?>
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
get_footer(); 
?>