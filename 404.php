<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
<div class="flex-container">
    <div class="page404">
        <div class="page404__inner"><img class="page404__pic" src="/wp-content/themes/Sanko/src/icons/pic404.png" alt="" role="presentation"/>
            <h1 class="page404__title">Страница не найдена</h1>
            <div class="page404__subtitle">Неправильно набран адрес, или такой страницы на сайте не существует. Начните с &#160;
                <a href="<?php echo get_home_url(); ?>">главной страницы</a>&#160; или воспользуйтесь меню.
            </div>
        </div>
    </div>


<?php
get_footer();
