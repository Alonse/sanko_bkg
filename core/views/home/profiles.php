
<div class="profiles">
    <div class="profiles__inner">
        <div class="profiles__title"><?php echo carbon_get_post_meta(get_the_ID(), 'title_text'); ?>
        </div>
        <a class="profiles__subtitle" href="#"></a>
        <div class="profiles__swiper-container swiper-container">
            <div class="profiles__swiper-wrapper swiper-wrapper">
                <?php
                $args = array(
                    'post_type'      => 'page',
                    'posts_per_page' => 5,
                    'post_parent'    => 18,
                    'order'          => 'ASC',
                    'orderby'        => 'date',
                );
                $query = new WP_Query;
                $my_posts = $query->query($args);
                foreach( $my_posts as $my_post ){
                ?>

                    <a class="profiles__swiper-slide swiper-slide" href="<?php echo get_permalink($my_post->ID); ?>" style="background-image: url(<?php echo carbon_get_post_meta($my_post->ID, 'background'); ?> ); ">
                        <img class="profiles__shadow" src="/wp-content/themes/Sanko/src/icons/profile-slide-shadow.png" alt="" role="presentation"/>
                        <div class="profiles__hover-block">
                            <div class="profiles__name-inner">
                                <img class="profiles__icon" src="<?php echo carbon_get_post_meta($my_post->ID, 'icon_page'); ?>" alt="" role="presentation"/>
                                <div class="profiles__name"><?php echo $my_post->post_title ?></div>
                            </div>
                            <div class="profiles__description"><?php echo $my_post->post_content ?>
                            </div>
                            <div class="profiles__link-inner">
                                <div class="profiles__link">Узнать больше
                                </div><img class="profiles__link-icon" src="<?php echo carbon_get_post_meta($my_post->ID, 'icon_arrow'); ?>" alt="" role="presentation"/>
                            </div>
                        </div>
                    </a>
                    <?php
                } ?>
            </div>
        </div>
        <div class="profiles__online-inner">
            <div class="container">
                <div class="profiles__online-wrapper">
                    <img class="profiles__flick" src="/wp-content/themes/Sanko/src/icons/flick.png" alt="" role="presentation"/>
                    <?php
                    $query = new WP_Query;
                    $my_post = $query->query('page_id=38');
                    foreach( $my_post as $my_posts ){
                        ?>
                        <a class="profiles__online" href="<?php echo get_permalink($my_posts->ID); ?>">
                            <h3 class="profiles__online-title"><?php echo carbon_get_post_meta(get_the_ID(), 'programmy_text'); ?></h3>
                            <div class="profiles__online-subtitle"><span>Принять участие</span>
                                <svg class="profiles__online-icon" mlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                                    <path class="profiles__dropdown-icon-path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke="#B9B9B9" stroke-width="1.3" stroke-linecap="round">
                                    </path>
                                </svg>
                            </div>
                        </a>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>