<div class="popup">
    <div class="popup__inner">
        <div class="popup__content">
            <div class="container">
                <div class="popup__close">
                    <span class="popup__close-text">Закрыть</span>
                    <div class="popup__close-icon">
                        <div class="popup__close-line">
                        </div>
                        <div class="popup__close-line">
                        </div>
                    </div>
                </div>

                <h1 class="popup__title">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'eq__poup_title'); ?>
                </h1>
                <div class="popup__content-item">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'eq_poup_text'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="popup">
    <div class="popup__inner">
        <div class="popup__content">
            <div class="container">
                <div class="popup__close">
                    <span class="popup__close-text">Закрыть</span>
                    <div class="popup__close-icon">
                        <div class="popup__close-line">
                        </div>
                        <div class="popup__close-line">
                        </div>
                    </div>
                </div>

                <h1 class="popup__title">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'eq__poup_title_two'); ?>
                </h1>
                <div class="popup__content-item">
                    <?php echo carbon_get_post_meta(get_the_ID(), 'eq_poup_text_two'); ?>
                </div>

            </div>
        </div>
    </div>
</div>