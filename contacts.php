<?php
/*
Template Name: Контакты
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>

    <!-- Begin Uren's Breadcrumb Area -->
    <div class="breadcrumb-area">
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


       
  <!-- Begin Contact Main Page Area -->
  <div class="contact-main-page contact-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="contact-page-side-content">
                            <div class="single-contact-block">
                                
                                <a href="tel:<?php echo trim(get_option('slk_phone'));?>"><i class="fa fa-phone"></i> <?php echo trim(get_option('slk_phone'));?></a>
                                
                            </div>
                            <div class="single-contact-block">
                                
                                <a href="mailto:<?php echo trim(get_option('slk_email'));?>"> <i class="fa fa-envelope"></i> <?php echo trim(get_option('slk_email'));?></a>
                           
                            </div>

                            <div class="single-contact-block">
                                
                                <a href="<?php echo trim(get_option('slk_vk'));?>"> <i class="fab fa-vk"></i> Мы в "Вконтакте"</a>
                            </div>
                            
                            

                            <div class="single-contact-block">
                                
                                <a href="#map"><i class="fa fa-map-marker"></i> <?php echo trim(get_option('slk_address'));?></a>
                           
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div id="google-map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A41159c53be17c04666a4f6a20018d82ea212bd47e3a09460dbf0722306558fff&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="contact-form-content">
                            <h2 class="contact-page-title">Напишите нам!</h2>
                            <div class="contact-page-subtitle">
                                
                                <?php echo get_field('contacts_page_form_title');?> 
                            </div>

                            
                            <div class="contact-form">
                                <?php echo do_shortcode('[contact-form-7 id="132" title="Контактная форма на странице Контакты"]'); ?>
                               
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