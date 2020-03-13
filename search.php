<?php get_header(); ?>

<!-- Begin Uren's Breadcrumb Area -->
<div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h1>Результаты поиска по запросу: "<?php echo $_GET['s'];?></h1>
                    <ul>
                        <li><a href="<?php echo get_site_url();?>">Главная</a></li>
                        <li class="active">Результаты поиска по запросу: "<?php echo $_GET['s'];?></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->

        <!-- Begin Uren's Error 404 Page Area -->
        <div class="error404-area search-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <div class="search-error-wrapper search-area-wrapper">
                            <h2>Результаты поиска по запросу: "<?php echo $_GET['s'];?>"</h2>
                            
                            <ul class="search-page__search-results">
                                <?php 
                                    if (have_posts()) : while (have_posts()) : the_post(); 
                                ?>
                                
                                    <li class="link search-page__search-result">
                                    <h3 class="link-title"><?php the_title(); ?></h3>

                                    <a href="<?php the_permalink();?>">Открыть</a>

                                    
                                    </li>

                                <?php endwhile; else: ?>
                            </ul>

                            <p class="short_desc">Извините, но поиск не дал результатов. Попробуйте изменить ключевые слова и повторить попытку:</p>

                            <div class="newsletter-form_wrap search-page__search-form">
                            
                                <?php 
                                    get_search_form(); 
                                ?>
                        
                            <!-- <form action="javascript:void(0)" class="error-form">
                                <div class="inner-error_form">
                                    <input type="text" placeholder="Найти..." class="error-input-text">
                                    <button type="submit" class="error-search_btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form> -->

                                <div class="uren-btn-ps_center">
                                    <a href="<?php echo get_site_url();?>" class="uren-btn ">На Главную</a>
                                </div>
                            </div>

                            
                            

                        <?php endif;?>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Error 404 Page End Here -->

 



 
 <?php get_footer(); ?>