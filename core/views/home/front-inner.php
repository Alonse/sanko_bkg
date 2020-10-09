<div class="front">
    <div class="front__bgd">
    </div>
    <div class="front__inner">
        <div class="front__content">
            <div class="front__text">
                <img class="front__text-item" src="<?php echo carbon_get_theme_option('header_title'); ?>" alt="" role="presentation"/>
                <img class="front__text-item" src="<?php echo carbon_get_theme_option('header_title_two'); ?>" alt="" role="presentation"/>
            </div>
            <div class="front__portrait">
                <img class="front__portrait-pic" src="/wp-content/themes/Sanko/src/icons/denis-portrait.png" alt="" role="presentation"/>
            </div>
        </div>
        <div class="front__swiper-container swiper-container">
            <div class="front__swiper-wrapper swiper-wrapper">
                <?php $slides = carbon_get_post_meta(get_the_ID(), 'header_slider');
                foreach ($slides as $slide):
                    ?>
                    <div class="front__swiper-slide swiper-slide">
                        <img class="front__partner-logo" src="<?php echo wp_get_attachment_image_url($slide); ?>" alt="" role="presentation"/>
                    </div>
                <?php endforeach; ?>

            </div>
        </div><img class="front__shadow" src="/wp-content/themes/Sanko/src/icons/front-shadow.png" alt="" role="presentation"/>
        <div class="front__front-line-inner">
            <div class="front__front-line-bgd">
            </div><img class="front__front-line" src="/wp-content/themes/Sanko/src/icons/front-line.png" alt="" role="presentation"/>
            <div class="front__front-line-bgd">
            </div>
        </div>
    </div>
</div>