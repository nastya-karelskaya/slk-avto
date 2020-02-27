<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package slk-avto
 */

get_header('common');
?>

        <!-- Begin Uren's Breadcrumb Area -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="breadcrumb-content">
                    <h2>Страница не найдена</h2>
                    <ul>
                        <li><a href="index.html">Главная</a></li>
                        <li class="active">Страница не найдена</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Uren's Breadcrumb Area End Here -->

        <!-- Begin Uren's Error 404 Page Area -->
        <div class="error404-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 ml-auto mr-auto text-center">
                        <div class="search-error-wrapper">
                            <h1>404</h1>
                            <h2>СТРАНИЦА НЕ НАЙДЕНА</h2>
                            <p class="short_desc">Извините, но страницы, которую вы ищете, больше нет. Попробуйте воспользоваться поиском:</p>
                            <form action="javascript:void(0)" class="error-form">
                                <div class="inner-error_form">
                                    <input type="text" placeholder="Найти..." class="error-input-text">
                                    <button type="submit" class="error-search_btn"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
                            <div class="uren-btn-ps_center"></div>
                            <a href="index.html" class="uren-error_btn">На Главную</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Uren's Error 404 Page End Here -->

  
<?php
get_footer();
