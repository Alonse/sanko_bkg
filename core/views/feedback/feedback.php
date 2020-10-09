<div class="gradient-inner">
    <div class="feedback-page">
        <div class="feedback-page__inner">
            <div class="container">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__inner">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
                <h1 class="feedback-page__title">Отзывы
                </h1>
                <div class="feedback-page__wrapper">
                    <?php
                    $slides = carbon_get_theme_option('crb_places');
                    foreach ($slides as $key => $slide) {
                    ?>
                        <div class="feedback-page__item <?php if($key % 3 !== 0){echo 'feedback-page__item_half';} ?>" id="<?php echo $key; ?>">
                            <img class="feedback-page__logo" src="<?php echo $slide['logo_company']; ?>" alt="" role="presentation"/>
                            <img class="feedback-page__item-pic" src="<?php echo $slide['photo_author']; ?>" alt="" role="presentation"/>
                            <div class="feedback-page__name-inner">
                                <div class="feedback-page__name"><?php echo $slide['text_author']; ?></div>
                                <svg class="feedback-page__icon" mlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                                    <path class="feedback-page__icon-path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke="#B9B9B9" stroke-width="1.3" stroke-linecap="round">
                                    </path>
                                </svg>
                            </div>
                            <div class="feedback-page__content">
                                <div class="feedback-page__duty"><?php echo $slide['text_prof']; ?></div>
                                <div class="feedback-page__descriprion"><?php echo $slide['text_comment']; ?></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

