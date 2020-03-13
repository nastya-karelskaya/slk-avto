<?php
/*
Template Name: Доставка и оплата
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>

  <!-- Begin Uren's Breadcrumb Area -->
  <div class="breadcrumb-area" style="background: url(<?php echo get_field('delivery_page_top_photo');?>) center no-repeat cover;">
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

        <!-- Begin Uren's Shipping Area -->
        <div class="uren-shipping_area delivery-about">
            <div class="container">
                <div class="shipping-nav delivery-about_nav">
                    <div class="row no-gutters">
                        <div class="shipping-grid delivery-about_grid">
                            <div class="shipping-item delivery-about_item">
                                <div class="shipping-icon delivery-about_item_icon">
                                    <i class="far fa-credit-card"></i>
                                </div>
                                <div class="shipping-content delivery-about_item_content">
                                    <h6> <?php echo get_field('delivery_page_price');?> </h6>
                                    <p> <?php echo get_field('delivery_page_doc');?> </p>
                                </div>
                            </div>
                            <div class="shipping-item delivery-about_item">
                                <div class="shipping-icon delivery-about_item_icon">
                                    <i class="fas fa-box"></i>
                                </div>
                                <div class="shipping-content delivery-about_item_content">
                                    <h6>
                                    <?php echo get_field('delivery_page_delivery_title');?>
                                    
                                        </h6>
                                    <p><?php echo get_field('delivery_page_delivery_subtitle');?> 
                                    <a href="#"><?php echo get_field('delivery_page_delivery_address');?> </a></p>
                                </div>
                            </div>
                            <div class="shipping-item delivery-about_item">
                                <div class="shipping-icon delivery-about_item_icon">
                                    <i class="fas fa-truck"></i>
                                </div>
                                <div class="shipping-content delivery-about_item_content">
                                    <h6>
                                    <?php echo get_field('delivery_page_delivery_transport');?>
                                         </h6>
                                    <p>
                                    <?php echo get_field('delivery_page_delivery_transport_sub');?>
                                    </p>
                                </div>
                            </div>
                            <div class="shipping-item delivery-about_item">
                                <div class="shipping-icon delivery-about_item_icon">
                                    <i class="fas fa-money-bill"></i>
                                </div>
                                <div class="shipping-content delivery-about_item_content">
                                    <h6>
                                    <?php echo get_field('delivery_page_delivery_price');?>
                                        </h6>
                                    <p>
                                    <?php echo get_field('delivery_page_delivery_options');?>

                                    <a href="tel:<?php echo get_field('delivery_page_delivery_phone');?>"><?php echo get_field('delivery_page_delivery_phone');?></a></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Shipping Area End Here -->

        <!-- Begin Uren's About Us Area -->
        <div class="about-us-area delivery-companies">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7 d-flex align-items-center">
                        <div class="overview-content">
                            <h2>Транспортные компании, с которыми мы работаем:
                            </h2>
                            <?php 
                            
                            ?>
                            <p class="short_desc">
                                <ul class="delivery-companies_list">
                                <?php 
                                    $companies = get_field('delivery_page_delivery_companies');
                                    foreach($companies as $company) {
                                    //foreach($company as $key => $value) {
                                        if($company['company_name'] != '') {

                                        
                                    ?>
                                    <li>

                                    <?php echo $company['company_name'];?>
                                        


                                        (<a href="<?php echo $company['company_link'];?>"><?php echo $company['company_link'];?></a>)
                                    </li>

                                    <?php 
                                        } 
                                    }
                                    ?>
                                    
                                    
                                </ul>
                            </p>
                            <p class="short_desc">
                            
                            <?php echo get_field('delivery_page_delivery_companies_text');?>
                            </p>

 

                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="overview-img text-center " style="background: url(<?php echo get_field('delivery_page_delivery_companies_img');?>) center no-repeat cover;">
                        
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Uren's About Us Area End Here -->

        <!-- Begin Contact Main Page Area -->
        <div class="contact-main-page contact-page delivery-page" style="background: url(<?php echo get_field('delivery_page_form_photo');?>) center no-repeat cover;">
            
            
            <div class="container-fluid">
                <div class="row">

                    <div class="col-12">
                        <div class="contact-form-content">
                            <h2 class="contact-page-title">Остались вопросы? </h2>
                            <div class="contact-page-subtitle">

                            <?php echo get_field('delivery_page_form_text');?>
                            
                            </div>


                            <div class="contact-form">
                                
                                <?php echo do_shortcode('[contact-form-7 id="133" title="Контактная форма на странице Доставка и Оплата"]') ?>
                            </div>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Main Page Area End Here -->

<?php 
get_footer(); 
?>