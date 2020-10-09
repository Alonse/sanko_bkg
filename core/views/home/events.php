

<div class="events">

    <div class="container">
        <div class="events__inner">
            <div class="events__item">
                <div class="events__item-title">Последние события</div>
                <div class="events__slider">
                        <div class="events__navigation">
                            <div class="events__button-inner">
                                <button class="events__button events__prev-button" id="prev-button">
                                </button>
                            </div>
                            <div class="events__date"></div>
                            <div class="events__button-inner">
                                <button class="events__button events__next-button" id="next-button"></button>
                            </div>
                        </div>
                    <div class="events__slide-shadow-wrapper">
                        <div class="events__slide-shadow"></div>
                        <div class="events__wrapper" id="slides-wrapper">
                            <?php
                            $post_type = 'event';
                            $terms = array('proshlye-sobytiya', 'budushhie-sobytiya');
                            $psts  = get_posts( array(
                                'post_type' => $post_type,
                                'numberposts' => -1,
                                'tax_query' => array(
                                    'relation' => 'OR',
                                    array(
                                        'taxonomy' => 'status',
                                        'terms' => $terms[0],
                                        'field' => 'slug',
                                        'operator' => 'IN',
                                    )
                                ),
                                '' => '',
                            ) );
                            $key = 1;
                            foreach($psts as $pst ){; ?>
                                <?php $startDate = carbon_get_post_meta($pst2->ID, 'crb_event_start_date'); ?>
                                <?php $startTime = carbon_get_post_meta($pst->ID, 'start_time'); ?>
                                <?php $endTime   = carbon_get_post_meta($pst->ID, 'end_time'); ?>
                                <?php $type      = carbon_get_post_meta($pst->ID, 'type'); ?>
                                <?php $adress    = carbon_get_post_meta($pst->ID, 'event_loc'); ?>
                                <?php $format    = carbon_get_post_meta($pst->ID, 'event_status'); ?>
                                <?php $logo      = carbon_get_post_meta($pst->ID, 'logo_event'); ?>
                                <?php $ico       = carbon_get_post_meta($pst->ID, 'logo_icon'); ?>
                                <div class="events__slide events__slide <?php
                                if($key == 1){
                                    echo "events__slide_active";
                                } else {
                                    echo "events__slide_deactive";}
                                ?>" data-date="<?= $ico; ?>" id="<?= $key++ ?>">
                                    <div class="events__logo">
                                        <img class="events__logo-pic" src="<?php echo $logo; ?>" alt="" role="presentation"/>
                                        <img class="events__d-logo" src="/wp-content/themes/Sanko/src/icons/d-logo.png" alt="" role="presentation"/>
                                    </div>
                                    <div class="events__content">
                                        <?php if (is_object_in_term( $pst->ID, 'status', 'uproshhennye-sobytiya' )) { ?>
                                            <div class="events__description">
                                                <div class="events__description-marker events__description-marker events__description-marker_orange" style="background: <?php echo $format; ?>">
                                                </div>
                                                <div class="events__description-text">
                                                    <div class="events__description-title"><?= $pst->post_title; ?></div>
                                                    <?php $content = carbon_get_post_meta($pst->ID, 'complex_content');?>
                                                    <?php
                                                    foreach ($content as $contents):
                                                        echo $contents['event_text'];
                                                        $newList.=$contents['event_text'];
                                                    endforeach;
                                                    ?>
                                                    <div id="tabClick" class="popup-link__item events__link events__link events__link_orange add add_link" href="">Подробнее...</div>
                                                </div>
                                            </div>
                                        <?php } else { ?>
                                        <div class="events__details">
                                            <div class="events__details-inner">
                                                <div class="events__place events__item <?php if(!$type){ echo "events__item_disabled"; }?>">
                                                    <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/online-icon.svg" alt="" role="presentation"/>
                                                    <div class="events__place-text"><?php echo $type; ?></div>
                                                </div>
                                                <div class="events__time events__item <?php if(!$startTime || !$endTime){ echo "events__item_disabled"; }?>">
                                                    <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/time-icon.svg" alt="" role="presentation"/>
                                                    <div class="events__time-text"><?php echo $startTime.' - '.$endTime; ?></div>
                                                </div>
                                            </div>
                                            <div class="events__address <?php if(!$adress){ echo "events__item_disabled"; }?>">
                                                <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/address-icon.svg" alt="" role="presentation"/>
                                                <div class="events__address-text"><?= $adress; ?></div>
                                            </div>
                                            <!--<a class="events__link events__link events__link_orange" href="<?php the_permalink($pst->ID); ?>">Подробнее о событии</a>-->
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="events__item">
                <div class="events__item-title">Будущие события</div>
                <div class="events__slider">
                    <div class="events__navigation">
                        <div class="events__button-inner">
                            <button class="events__button events__prev-button" id="prev-button-2"></button>
                        </div>
                        <div class="events__date"></div>
                        <div class="events__button-inner">
                            <button class="events__button events__next-button events__next-button events__next-button_orange" id="next-button-2">
                            </button>
                        </div>
                    </div>
                    <div class="events__slide-shadow-wrapper">
                        <img class="events__hypnosis" src="/wp-content/themes/Sanko/src/icons/hypnosis.png" alt="" role="presentation"/>
                        <div class="events__slide-shadow"></div>
                        <div class="events__wrapper" id="slides-wrapper-2">
                            <?php
                            $psts2  = get_posts( array(
                                'post_type' => $post_type,
                                'numberposts' => -1,
                                'tax_query' => array(
                                    'relation' => 'OR',
                                    array(
                                        'taxonomy' => 'status',
                                        'terms' => $terms[1],
                                        'field' => 'slug',
                                        'operator' => 'IN',
                                    )
                                ),
                                '' => '',
                            ) );
                            $key = 1;
                            foreach($psts2 as $pst2 ){; ?>
                                <?php $startDate = carbon_get_post_meta($pst2->ID, 'crb_event_start_date'); ?>
                                <?php $startTime = carbon_get_post_meta($pst2->ID, 'start_time'); ?>
                                <?php $endTime   = carbon_get_post_meta($pst2->ID, 'end_time'); ?>
                                <?php $type      = carbon_get_post_meta($pst2->ID, 'type'); ?>
                                <?php $adress    = carbon_get_post_meta($pst2->ID, 'event_loc'); ?>
                                <?php $logo      = carbon_get_post_meta($pst2->ID, 'logo_event'); ?>
                                <?php $format    = carbon_get_post_meta($pst2->ID, 'event_status'); ?>
                            <div class="events__slide events__slide <?php
                            if($key == 1){
                                echo "events__slide_active";
                            } else {
                                echo "events__slide_deactive";}
                            ?>" data-date="<?php echo date('j M',strtotime($startDate)); ?>" id="<?= $key++ ?>">
                                <div class="events__logo">
                                    <img class="events__logo-pic" src="<?php echo $logo; ?>" alt="" role="presentation"/>
                                    <img class="events__d-logo" src="/wp-content/themes/Sanko/src/icons/d-logo.png" alt="" role="presentation"/>
                                </div>
                                <div class="events__content">
                                    <div class="events__description">
                                        <div class="events__description-marker events__description-marker events__description-marker_orange" style="background: <?php echo $format; ?>">
                                        </div>
                                        <div class="events__description-text">
                                            <div class="events__description-title"><?= $pst2->post_title; ?></div>
                                        </div>
                                    </div>
                                    <div class="events__details">
                                        <div class="events__details-inner">
                                            <div class="events__place <?php if(!$type){ echo "events__item_disabled"; }?>">
                                                <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/online-icon.svg" alt="" role="presentation"/>
                                                <div class="events__place-text"><?php echo $type; ?></div>
                                            </div>
                                            <div class="events__time <?php if(!$startTime || !$endTime){ echo "events__item_disabled"; }?>">
                                                <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/time-icon_green.svg" alt="" role="presentation"/>
                                                <div class="events__time-text"><?php echo $startTime.' - '.$endTime; ?></div>
                                            </div>
                                        </div>
                                        <div class="events__address events__item <?php if(!$adress){ echo "events__item_disabled"; }?>">
                                            <img class="events__icon" src="/wp-content/themes/Sanko/src/icons/address-icon.svg" alt="" role="presentation"/>
                                            <div class="events__address-text"><?= $adress; ?></div>
                                        </div>
                                        <a class="events__link events__link events__link_orange" href="<?php the_permalink($pst2->ID); ?>">Подробнее о событии</a>
                                    </div>
                                </div>
                            </div>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="popup popupTab" >
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
                <h1 class="popup__title">
                </h1>
                <div class="popup__content-item">
                </div>
            </div>
        </div>
    </div>
</div>