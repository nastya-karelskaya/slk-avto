<?php
/*
Template Name: Каталог
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


    <!-- Begin Uren's Shipping Area -->
    <div class="uren-shipping_area cars-grid-area catalog">
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

                    

                                }
                                }

                            ?>
                             
                             
                            
                            
                        </div>    
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Uren's Shipping Area End Here -->


       
  

<?php 
get_footer(); 
?>