<?php
/*
Template Name: Контакты
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
                <h1>Контакты</h1>
                <ul>
                    <li><a href="index.html">Главная</a></li>
                    <li class="active">Контакты</li>
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
                                
                                <a href="tel:89114169740"><i class="fa fa-phone"></i> +79114169740</a>
                                
                            </div>
                            <div class="single-contact-block">
                                
                                <a href="mailto:slk-avto@yandex.ru"> <i class="fa fa-envelope"></i> slk-avto@yandex.ru</a>
                           
                            </div>

                            <div class="single-contact-block">
                                
                                <a href="mailto:slk-avto@yandex.ru"> <i class="fab fa-vk"></i> Мы в "Вконтакте"</a>
                            </div>
                            
                            

                            <div class="single-contact-block">
                                
                                <a href="#map"><i class="fa fa-map-marker"></i> пр.Лесной,51 стр.18, Петрозаводск</a>
                           
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
                                Заполните форму ниже, и наш менеджер свяжется с вами в ближайшее время!
                            </div>

                            
                            <div class="contact-form">
                                <?php echo do_shortcode('[contact-form-7 id="132" title="Контактная форма на странице Контакты"]'); ?>
                                <!-- <form id="contact-form" action="http://hasthemes.com/file/mail.php" method="post">
                                    <div class="form-group__wrapper">
                                        <div class="form-group">
                                            <label>Ваше имя: <span class="required">*</span></label>
                                            <input type="text" name="con_name" id="con_name" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ваш телефон: <span class="required">*</span></label>
                                            <input type="phone" name="con_phone" id="con_phone" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Ваш e-mail: <span class="required">*</span></label>
                                            <input type="email" name="con_email" id="con_email" required>
                                        </div>
                                    </div>
                                    
                                  <div class="form-group__wrapper">
                                    <div class="form-group form-group-2">
                                        <label>Сообщение:</label>
                                        <textarea name="con_message" id="con_message"></textarea>
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" value="submit" id="submit" class="uren-contact-form_btn" name="submit">Отправить</button>
                                    </div>
                                </form> -->
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