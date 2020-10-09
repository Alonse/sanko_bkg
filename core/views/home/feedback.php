<div class="feedback">
    <div class="feedback__inner">
        <img class="feedback__top-line" src="/wp-content/themes/Sanko/src/icons/front-line-out.png" alt="" role="presentation"/>
        <img class="feedback__bottom-line" src="/wp-content/themes/Sanko/src/icons/front-line-out.png" alt="" role="presentation"/>
        <div class="feedback__title"><?php echo carbon_get_post_meta(get_the_ID(), 'comment_text'); ?>
        </div>
        <div class="feedback__swiper-container swiper-container">
            <div class="feedback__swiper-wrapper swiper-wrapper">
                <?php
                $slides = carbon_get_theme_option('crb_places');
                $val = 0;
                foreach ($slides as $slide) {
                ?>
                    <a class="feedback__swiper-slide swiper-slide" href="/about-me/otzyvy/#<?php echo $val; ?>">
                        <img class="feedback__logo" src="<?php echo $slide['logo_company']; ?>" alt="" role="presentation"/>
                        <img class="feedback__profile-pic" src="<?php echo $slide['photo_author']; ?>" alt="" role="presentation"/>
                        <div class="feedback__name"><?php echo $slide['text_author']; ?></div>
                        <div class="feedback__position"><?php echo $slide['text_prof']; ?></div>
                        <div class="feedback__text"><?php echo $slide['text_comment']; ?></div>
                        <img class="feedback__shadow" src="/wp-content/themes/Sanko/src/icons/feedback-shadow.png" alt="" role="presentation"/>
                        <div class="feedback__link-inner">
                            <div class="feedback__link">Читать полностью</div>
                            <img class="feedback__link-icon" src="/wp-content/themes/Sanko/src/icons/arrow_green.svg" alt="" role="presentation"/>
                        </div>
                    </a>
                <?php
                $val++;
                }
                ?>
            </div>
        </div>
        <div class="feedback__swiper-button-next swiper-button-next">
        </div>
        <div class="feedback__swiper-button-prev swiper-button-prev">
        </div>
    </div>
</div>