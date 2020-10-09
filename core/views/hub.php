<?php if(!is_page_template('template-reclamation-leaders.php')
    && !is_page_template('template-eq.php')
    && !is_page_template('template-blog.php'))
{ ?>
    <style>
        @media (min-width: 1024px) {
            .hub {
                padding-top: 280px;
            }
        }
        @media (min-width: 768px) {
            .hub {
                padding-top: 280px;
            }
        }
    </style>
<div class="hub">
    <div class="hub__wrapper"><img class="hub__bgd-button" src="/wp-content/themes/Sanko/src/icons/center-bgd.svg" alt="" role="presentation"/>
        <div class="hub__content"><img class="hub__laptop" src="/wp-content/themes/Sanko/src/icons/laptop.png" alt="" role="presentation"/>
            <div class="hub__title"><?php echo carbon_get_theme_option('title_know'); ?></div>
            <div class="hub__description"><?php echo carbon_get_theme_option('text_know_one'); ?></div>
            <div class="hub__subtitle"><?php echo carbon_get_theme_option('text_know'); ?></div>
            <a class="hub__link" href="<?php echo get_permalink(22); ?>">Узнать больше</a>
            <div class="hub__d-logo">
                <img class="hub__d-logo-pic" src="/wp-content/themes/Sanko/src/icons/d-logo-green.svg" alt="" role="presentation"/>
                <img class="hub__d-logo-pic" src="/wp-content/themes/Sanko/src/icons/d-logo-green.svg" alt="" role="presentation"/>
                <img class="hub__d-logo-pic" src="/wp-content/themes/Sanko/src/icons/d-logo-green.svg" alt="" role="presentation"/>
                <img class="hub__d-logo-pic" src="/wp-content/themes/Sanko/src/icons/d-logo-green.svg" alt="" role="presentation"/>
                <img class="hub__d-logo-pic" src="/wp-content/themes/Sanko/src/icons/d-logo-green.svg" alt="" role="presentation"/>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</div>
