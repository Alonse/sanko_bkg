<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
$url = $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
session_start();
if($url=='/oformlenie-zakaza/' && is_user_logged_in()==false){
    $_SESSION["addcart"] = '1';
    header('Location: /my-account/');
}
if($url=='/my-account/' && $_SESSION["addcart"]=='1' && is_user_logged_in() || $url=='/my-account/?action=register/' && $_SESSION["addcart"]=='1' && is_user_logged_in()){
    $_SESSION["addcart"] = '0';
    header('Location: /oformlenie-zakaza/');
}
if($url=='/korzina/'){
    header('Location: /oformlenie-zakaza/');
}



global $post;
$metaImg = get_the_post_thumbnail_url( $post->ID, 'full' );
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?=carbon_get_theme_option('title');?> | <?the_title()?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="<?php if($metaImg){echo $metaImg;} else{echo 'https://denissanko.com/wp-content/uploads/2020/08/01.jpg';} ?>">
    <meta property="og:title" content="<?php echo get_the_title(); ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="">
    <meta property="og:locale" content="ru_RU">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href='style.css'>
    <?php if(is_page(10)){ echo "<link href='/src/css/about.min.css'>"; } ?>
    <link rel='stylesheet' href='<?=get_template_directory_uri()?>/src/css/signin.min.css'>
    <link rel='stylesheet' href='<?=get_template_directory_uri()?>/src/css/account.min.css'>
    <link rel='stylesheet' href='<?=get_template_directory_uri()?>/src/css/forget.min.css'>
    <link rel='stylesheet' href='<?=get_template_directory_uri()?>/src/css/checkout.min.css'>
<?php wp_head(); ?>
</head>

<body <?php body_class('app_color'); ?>>
<?php wp_body_open(); ?>

<?php if(is_front_page()){ ?>
<?php require "core/views/header.php"; ?>
<?php } else { ?>
<?php require "core/views/menuHeader.php"; ?>
<?php } ?>

<div class="page-name" style="display:none">
    <?php
        wp_title("", true);
    ?>
</div>

        <div class="compass">
            <div class="compass__remodal remodal" data-remodal-id="compass-modal">
                <div class="compass__inner">
                    <div class="compass__close remodal-close" data-remodal-action="close"><span class="compass__close-text">Закрыть</span>
                        <div class="compass__close-icon">
                            <div class="compass__close-line">
                            </div>
                            <div class="compass__close-line">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="compass__wrapper">
                            <div class="compass__cards">
                                <div class="compass__card">
                                    <div class="compass__title">
                                        <div class="color-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                                <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                                </path>
                                            </svg>
                                        </div><span class="compass__title-text">Привет!</span>
                                    </div>
                                    <div class="compass__description">Я с удовольствием помогу Вам в выборе области развития! Для этого, пожалуйста, ответьте на несколько вопросов:
                                    </div>
                                    <div class="compass__question">Вы ищете что-то для себя или для своей компании?
                                    </div>
                                    <div class="compass__buttons">
                                        <button class="compass__button" data-value="1" id="option-one">Для компании
                                        </button>
                                        <button class="compass__button" data-value="2" id="option-two">Для себя
                                        </button>
                                        <button class="compass__button" data-value="3" id="option-three" style="display: none;">
                                        </button>
                                    </div><a class="compass__output-link" href="">Пожалуйста, перейдите по ссылке к предлагаемому продукту</a>
                                    <div class="compass__step-back" style="display: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="6" viewbox="0 0 20 6" fill="none">
                                            <path d="M19 5L3 5L6.36842 1" stroke="#D1D3D4" stroke-width="2" stroke-linecap="round"></path>
                                        </svg><span>Вернуться на шаг</span>
                                    </div>
                                </div>
                            </div>
                            <div class="compass__img-inner">
                                <div class="compass-animation">
                                    <div class="compass-animation__inner"><img class="compass-animation__bgd" src="/wp-content/themes/Sanko/src/icons/compass.png" alt="" role="presentation"/><img class="compass-animation__arrow" src="/wp-content/themes/Sanko/src/icons/compass-arrow.png" id="compass-arrow" alt="" role="presentation"/><img class="compass-animation__shadow" src="/wp-content/themes/Sanko/src/icons/compass-shadow.png" alt="" role="presentation"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php if(is_page_template('single-event.php')){ ?>
        <div class="popup">
        <div class="popup__inner">
            <div class="popup__content">
                <div class="container">
                    <div class="popup__close"><span class="popup__close-text">Закрыть</span>
                        <div class="popup__close-icon">
                            <div class="popup__close-line">
                            </div>
                            <div class="popup__close-line">
                            </div>
                        </div>
                    </div>
                    <?php
                    $slides = carbon_get_post_meta(get_the_ID(), 'crb_comment');
                    $val = 0;
                    foreach ($slides as $slide) { ?>
                        <h1 class="popup__title"><?= $slide['text_author']; ?></h1>
                        <div class="popup__content-item">
                            <?= $slide['text_comment']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

<?php if(!is_page_template('template-eq.php')){ ?><main class="main" id="main"><?php } ?>


<div class="page-name" style="display:none">
    <? the_title($before = '', $after = '', $echo = true) ?>
</div>