<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="flex-container" id="product-<?php the_ID(); ?>">
    <div class="event">
        <div class="event__inner">
            <div class="event__banner"><img class="event__bgd" src="/wp-content/themes/Sanko/src/icons/event-bgd.jpg" alt="" role="presentation"/>
                <div class="event__shadow event__shadow_mobil">
                </div><img class="event__shadow event__shadow_desktop" src="/wp-content/themes/Sanko/src/icons/event-shadow.png" alt="" role="presentation"/>
                <div class="breadcrumbs">
                    <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?></div>
                </div>
                <div class="event__title"><?php the_title() ?>
                </div>
            </div>
            <div class="event__content">
                <div class="event__left-bar">
                    <div class="event__details">
                        <div class="event__details-item">
                            <?php $adress  = carbon_get_post_meta(get_the_ID(), 'event_loc'); ?>
                            <?php $format    = carbon_get_post_meta(get_the_ID(), 'type'); ?>
                            <?php if ($format === 'offline'){ ?>
                                <img src="/wp-content/themes/Sanko/src/icons/location-icon_green.svg" alt="">
                                <span><?= $adress; ?></span>
                            <?php } else { ?>
                                <img src="/wp-content/themes/Sanko/src/icons/online-icon.svg" alt="">
                                <span> Online </span>
                            <?php } ?>
                        </div>
                        <div class="event__details-item">
                            <?php $data = carbon_get_post_meta(get_the_ID(), 'crb_event_start_date'); ?>
                            <img src="/wp-content/themes/Sanko/src/icons/date-icon.svg" alt="">
                            <span><?= $data ?>
                            <?
                                if(carbon_get_post_meta(get_the_ID(), 'crb_event_end_date')){
                                    ?> - <?=carbon_get_post_meta(get_the_ID(), 'crb_event_end_date');
                                }
                            ?>
                            </span>
                        </div>
                        <div class="event__details-item">
                            <?php
                            $startTime =  carbon_get_post_meta(get_the_ID(), 'start_time');
                            $endTime   =  carbon_get_post_meta(get_the_ID(), 'end_time');
                            ?>
                            <img src="/wp-content/themes/Sanko/src/icons/time-icon_green.svg" alt="">
                            <span><?= $startTime . ' - ' . $endTime ?></span>
                        </div>
                    </div>
                    <div class="event__description">
                        <div class="event__description-title-inner">
                            <h3 class="event__description-title">Описание</h3>
                            <svg class="event__description-icon" mlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                                <path class="event__icon-path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke="#B9B9B9" stroke-width="1.3" stroke-linecap="round">
                                </path>
                            </svg>
                        </div>
                        <?php
                        $content = carbon_get_post_meta(get_the_ID(), 'complex_content');
                        foreach ($content as $contents):
                        ?>
                            <div class="event__description-content">
                                <?php if (!empty($contents['event_text'])) { ?>
                                    <div class="event__subtab-content-item">
                                        <?= wpautop($contents['event_text']); ?>
                                    </div>
                                <?php } if (!empty($contents['text_point'])) { ?>
                                    <div class="event__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active">
                                        <h4>Суть:
                                        </h4>
                                        <p><?= wpautop($contents['text_point']); ?></p>
                                    </div>
                                <?php } if (!empty($contents['text_goal'])){ ?>
                                    <div class="event__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active">
                                        <h4>Цель:
                                        </h4>
                                        <p><?= wpautop($contents['text_goal']); ?></p>
                                    </div>
                                <?php } if (!empty($contents['text_raisin'])){ ?>
                                    <div class="event__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active-bgd">
                                        <h4>Изюм:
                                        </h4>
                                        <p><?= wpautop($contents['text_raisin']); ?></p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endforeach; ?>
                        <div class="event__price">
						
                            <?php
                            $price  =  carbon_get_post_meta(get_the_ID(), 'price');
                            $slogan =  carbon_get_post_meta(get_the_ID(), 'slogan');
                            ?>
                            <div class="event__price-title"><?= $slogan ?></div>
                                <?php if (!empty($price)){ ?>
                                    <div class="event__price-text"><span><?= $price ?></span> $</div>
                                <?php } ?>
                            <div class="event__agreement" style="width:100%">
                                <label class="event__container">Я согласен с условиями обработки данных
                                    <input type="checkbox" checked="checked" id="checkbox_check"><span class="event__checkmark"></span>
                                </label>
                                
                                    <a style="" href="?add-to-cart=<?the_ID()?>" data-quantity="1" class="event__button product_type_simple add_to_cart_button ajax_add_to_cart " data-product_id="<?the_ID()?>" data-product_sku="" rel="nofollow">Купить билет</a>
                                
                            </div>
                        </div>
                    </div>
                    <?if(carbon_get_post_meta(get_the_ID(), 'crb_comment')){?>
                    <div class="event__feedback">
                        <div class="event__feedback-heading"> Отзывы
                        </div>
                        <div class="event__swiper-container swiper-container">
                            <div class="event__swiper-wrapper swiper-wrapper">
                                <?php
                                $slides = carbon_get_post_meta(get_the_ID(), 'crb_comment');
                                $val = 0;
                                foreach ($slides as $slide) {
                                ?>
                                    <div class="event__swiper-slide swiper-slide">
                                        <div class="event__feedback-title">
                                            <div class="event__feedback-name"><?= $slide['text_author']; ?>
                                            </div>
                                            <div class="event__feedback-position"><?= $slide['text_prof']; ?>
                                            </div>
                                        </div>
                                        <div class="event__feedback-box" style="background-image: url(<?= $slide['photo_author'] ?>)">
                                        </div>
                                    </div>
                                <?php $val++; } ?>
                            </div>
                            <div class="event__swiper-buttons">
                                <div class="event__swiper-button swiper-button-prev">
                                </div>
                                <div class="event__swiper-button swiper-button-next">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?}?>
                    <div class="form"><img class="form__contacts-portrait" src="/wp-content/themes/Sanko/src/icons/contacts-portrait.png" alt="" role="presentation"/>
                        <div class="form__inner">
                            <div class="form__title">Оставить заявку
                            </div>
                            <div class="form__title-alt">Задайте Денису вопрос
                            </div>
                            <div class="color-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                    <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                    </path>
                                </svg>
                            </div>
                            <form class="form__content" id="contact-form">
                                <div class="form__wrapper">
                                    <div class="form__input-inner">
                                        <label class="form__label" for="name">Ваше имя
                                        </label><input class="form__input" name="name" id="input-name" placeholder="Иванов Иван" type="text"/>
                                    </div>
                                    <div class="form__input-inner">
                                        <label class="form__label" for="phone">Контактный телефон
                                        </label><input class="form__input" name="phone" id="input-phone" placeholder="+375  __  ___  __  __" type="text"/>
                                    </div>
                                    <div class="form__input-inner">
                                        <label class="form__label" for="email">Электронная почта
                                        </label><input class="form__input" name="email" id="input-email" placeholder="ivan.ivanov@mail.by" type="text"/>
                                    </div>
                                </div>
                                <div class="form__textarea-wrapper">
                                    <label class="form__label" for="message">Сообщение
                                    </label><textarea class="form__textarea" name="message" id="input-email" placeholder="Ваше сообщение"></textarea>
                                </div>
                                <div class="form__agreement">
                                    <label class="form__container">Я согласен с условиями обработки данных
                                        <input type="checkbox" checked="checked" id="checkbox_check"><span class="form__checkmark"></span>
                                    </label>
                                    <button class="form__button" type="submit">Отправить заявку
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="event__right-bar">
                    <div class="contacts">
                        <div class="contacts__inner">
                            <div class="contacts__title">Ответим на вопросы
                            </div>
                            <div class="contacts__links">
                                <div class="contacts__tels">
                                    <?php $contact = carbon_get_theme_option('lead_contact'); ?>
                                    <?php foreach ($contact as $contacts) : ?>
                                        <?php if(!empty($contacts['phone_leader'])) { ?>
                                            <div class="contacts__link-inner">
                                                <a class="contacts__link" href="tel:<?php echo $contacts['phone_leader'] ?>"><?php echo $contacts['phone_leader'] ?></a>
                                                <div class="contacts__icons">
                                                    <a href="https://teleg.run/natalishkutsko"></a>
                                                    <? if(check_mobile_device()) :?>
                                                        <a href="viber://add?number=<?php echo $contacts['phone_leader']; ?>"></a>
                                                    <? else : ?>
                                                        <a href="viber://chat?number=+375447541518"></a>
                                                    <? endif; ?>
                                                    <a href="https://wa.me/+375447541518"></a>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php endforeach; ?>
									
                                    <?php foreach ($contact as $contacts) : ?>
                                        <?php if(!empty($contacts['email_leader'])) { ?>
                                            <a class="contacts__link contacts__email" href="mailto:<?php echo $contacts['email_leader']; ?>"><?php echo $contacts['email_leader']; ?></a>
                                        <?php } ?>
                                    <?php endforeach; ?>
									<a class="contacts__link contacts__email" href="https://t.me/denissanko_support">Техническая поддержка</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event__tg" style="display: none;">
                        <div class="event__tg-title">Присоединяйтесь к нашему сообществу в телеграм
                        </div><a class="event__tg-link" href="<?php  ?>"><span>Присоединиться</span><img src="/wp-content/themes/Sanko/src/icons/tg-icon_white.svg" alt=""></a>
                    </div>
                    <?php if ($format === 'offline') { ?>
                    <div class="event__map"><?=carbon_get_post_meta(get_the_ID(), 'event_loc_iframe');?> 
                        
                    </div>
                    <?php } ?>
                    <div class="event__sticky-bottom">
                    </div>
                </div>
            </div>
        </div>
    </div>
