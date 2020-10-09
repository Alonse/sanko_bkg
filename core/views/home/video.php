<div class="video">
    <div class="container">
        <div class="video__wrapper">
            <div class="video__title"><?php echo carbon_get_post_meta(get_the_ID(), 'title_video'); ?></div>
            <div class="video__subtitle"><?php echo carbon_get_post_meta(get_the_ID(), 'text_video'); ?></div>
            <div class="video__border">
                <a class="video__more" href="<?php the_permalink(10); ?>">
                    <div class="video__more-inner">
                        <span>Узнать больше обо мне</span>
                        <div class="video__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="5" height="8" viewBox="0 0 5 8" fill="none">
                                <path class="video__path" d="M1 1L4 4L1 7" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">
                                </path>
                            </svg>
                        </div>
                    </div>
                </a>
                <a class="video__modal" href="#modal">
                    <div class="video__content">
                        <img class="video__bgd" src="/wp-content/themes/Sanko/src/icons/video-message-bgd.jpg" alt="" role="presentation"/>
                    </div>
                    <img class="video__portrait" src="/wp-content/themes/Sanko/src/icons/denis-smile.png" alt="" role="presentation"/>
                    <div class="video__button-inner">
                        <div class="video__button video__button-pulse">
                            <img class="video__button-pic" src="/wp-content/themes/Sanko/src/icons/video-button.png" alt="" role="presentation"/>
                        </div>
                        <div class="video__button-text">
                            <h3><?php echo carbon_get_post_meta(get_the_ID(), 'title_video'); ?></h3>
                            <h4><?php echo carbon_get_post_meta(get_the_ID(), 'text_video'); ?></h4>
                        </div>
                    </div>
                </a>
            </div>
            <img class="video__shadow" src="/wp-content/themes/Sanko/src/icons/video-shadow.png" alt="" role="presentation"/>
        </div>
    </div>
</div>