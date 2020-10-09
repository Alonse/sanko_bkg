<?php $imgTop = carbon_get_post_meta(get_the_ID(), 'img_leader'); ?>

<div class="simple-tabs">
    <div class="directions">
        <div class="container">
            <div class="directions__inner">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                    </div>
                </div>
                <div class="directions__wrapper">
                    <div class="directions__content">
                        <img class="directions__bgd-pic" src="<?php echo wp_get_attachment_image_url($imgTop, 'full'); ?>" alt="" role="presentation"/>
                        <div class="directions__content-title">
                            <div class="color-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                    <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                    </path>
                                </svg>
                            </div>
                            <h2 class="directions__content-title"><?php echo carbon_get_post_meta(get_the_ID(), 'leader_title_top'); ?></h2>
                        </div>
                        <div class="directions__content-text"><?php echo carbon_get_post_meta(get_the_ID(), 'leader_text_top'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs-inner complex-tab">
        <div class="tabs-slider">
            <div class="tabs-slider__swiper-container swiper-container">
                <div class="tabs-slider__navigation-inner">
                    <?php if(!is_page('individualnyj-kouching')){ ?>
                        <div class="tabs-slider__title">Направления развития</div>
                    <?php } ?>
                    <div class="tabs-slider__navigation">
                        <div class="tabs-slider__swiper-button-prev swiper-button-prev">
                        </div>
                        <div class="tabs-slider__pagination">
                        </div>
                        <div class="tabs-slider__swiper-button-next swiper-button-next">
                        </div>
                    </div>
                </div>

                <ul class="tabs-slider__swiper-wrapper swiper-wrapper">
                    <?php $topTab =  carbon_get_post_meta(get_the_ID(), 'complex_tab');?>
                    
                    <?php foreach ( $topTab as $key => $topTabs ): ?>
                        <?php $get = $_GET['params'] = 'tab'.$key+=1; ?>
                        <?if($topTabs['crb_tab_include']==1){?>
                        <li data-params="<?php echo $get; ?>" class="tabs-slider__swiper-slide swiper-slide <?php if(in_array('white', $topTabs['crb_adv_side'])){ echo 'tabs-slider__swiper-slide_white'; } ?>" id="#tab-<?= $key+=1; ?>">
                            <img class="tabs-slider__slide-pic" src="<?= $topTabs['tab_image']; ?>" alt="" role="presentation"/>
                            <h3><?= $topTabs['tab_name']; ?></h3>
                            <div class="tabs-slider__slide-button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="20" viewbox="0 0 100 20" fill="none">
                                    <path d="M50 20C34.9576 20 25.4237 7.40741 -2.38419e-06 -8.39011e-07C27.5424 -4.93329e-06 50 -2.18557e-06 50 -2.18557e-06C67.7245 -1.41081e-06 24.5763 2.35252e-07 100 3.53213e-06C74.1525 7.40741 69.2797 20 50 20Z" fill="#354457"></path>
                                </svg>
                            </div>
                            <img class="tabs-slider__slide-button-2" src="/wp-content/themes/Sanko/src/icons/tabs-slide-button-2.svg" alt="" role="presentation"/>
                        </li>
                        <?}?>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="tabs">
            <div class="tabs__inner">
            <?php $content = carbon_get_post_meta(get_the_ID(), 'complex_page'); ?>
            <?php foreach ( $content as $contents ): ?>
                <?php $boxTab = $contents['complex_box']; ?>
                <?php foreach ($boxTab as $key => $boxTabs): ?>
                <div class="tabs__content" id="<?php echo $key; ?>">
                    <div class="container">
                        <div class="tabs__content-title"><?php echo $boxTabs['box_name']; ?></div>
                        <div class="tabs__content-inner">
                            <div class="tabs__left-bar">
                                <div class="anchor">
                                    <div class="anchor__inner">
                                        <div class="anchor__controls-panel">
                                            <?php $leftTab = $boxTabs['complex_tab_left']; ?>
                                            <?php foreach($leftTab as $num => $leftTabs): ?>
                                            <a class="anchor__controls-panel-item">
                                                <div class="color-button">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                                        <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="anchor__dropdown-name"><?php echo $leftTabs['left_tab_name']; ?></div>
                                                <div class="anchor__dropdown-number">0<?php echo $num+1 ?></div>
                                            </a>
                                            <?php endforeach; ?>
                                            <a class="anchor__form-link">Оставить заявку</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="contacts">
                                    <div class="contacts__inner">
                                        <div class="contacts__title">Ответим на вопросы
                                        </div>
                                        <?php $contact = carbon_get_theme_option('lead_contact'); ?>

                                        <div class="contacts__links">
                                            <div class="contacts__tels">
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
                                            </div>
											
                                            <?php foreach ($contact as $contacts) : ?>
                                            <?php if(!empty($contacts['email_leader'])) { ?>
                                            <a class="contacts__link contacts__email" href="mailto:<?php echo $contacts['email_leader']; ?>"><?php echo $contacts['email_leader']; ?></a>
                                            <?php } ?>
                                            <?php endforeach; ?>
											<a class="contacts__link contacts__email" href="https://t.me/denissanko_support">Техническая поддержка</a>
                                                <div class="socials">
                                                    <div class="socials__inner"><a class="socials__item" href="<?php echo carbon_get_theme_option('social_links'); ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path class="socials__path" d="M11.5881 19H8.09392V10.4935H6V7.66667H8.09392V5.93918C8.09392 3.57044 8.80062 2 11.5489 2H13.6821V4.82679H12.3995C11.3264 4.82679 11.261 5.35027 11.261 6.09623V7.66667H13.8391L13.5381 10.4935H11.5881V19Z">
                                                                </path>
                                                            </svg></a><a class="socials__item" href="<?php echo carbon_get_theme_option('social_links_two'); ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <path class="socials__path" path fill-rule="evenodd" clip-rule="evenodd" d="M10 2C7.827 2 7.555 2.01 6.702 2.048C5.85 2.088 5.27 2.222 4.76 2.42C4.234 2.624 3.787 2.898 3.343 3.343C2.898 3.787 2.623 4.233 2.42 4.76C2.222 5.27 2.087 5.85 2.048 6.702C2.008 7.555 2 7.827 2 10C2 12.173 2.01 12.445 2.048 13.298C2.088 14.15 2.222 14.731 2.42 15.24C2.624 15.766 2.898 16.213 3.343 16.657C3.787 17.102 4.233 17.377 4.76 17.58C5.27 17.778 5.85 17.913 6.702 17.952C7.555 17.992 7.827 18 10 18C12.173 18 12.445 17.99 13.298 17.952C14.15 17.912 14.731 17.778 15.24 17.58C15.766 17.376 16.213 17.102 16.657 16.657C17.102 16.213 17.377 15.767 17.58 15.24C17.778 14.73 17.913 14.15 17.952 13.298C17.992 12.445 18 12.173 18 10C18 7.827 17.99 7.555 17.952 6.702C17.912 5.85 17.778 5.269 17.58 4.76C17.376 4.234 17.102 3.787 16.657 3.343C16.213 2.898 15.767 2.623 15.24 2.42C14.73 2.222 14.15 2.087 13.298 2.048C12.445 2.008 12.173 2 10 2ZM10 3.44C12.136 3.44 12.39 3.45 13.233 3.488C14.013 3.524 14.436 3.654 14.718 3.764C15.092 3.909 15.358 4.082 15.638 4.362C15.918 4.642 16.091 4.908 16.236 5.282C16.346 5.564 16.476 5.987 16.512 6.767C16.55 7.611 16.559 7.864 16.559 10C16.559 12.136 16.549 12.39 16.511 13.233C16.475 14.013 16.345 14.436 16.235 14.718C16.09 15.092 15.917 15.358 15.637 15.638C15.357 15.918 15.091 16.091 14.717 16.236C14.435 16.346 14.012 16.476 13.232 16.512C12.388 16.55 12.135 16.559 9.999 16.559C7.863 16.559 7.609 16.549 6.766 16.511C5.986 16.475 5.563 16.345 5.281 16.235C4.907 16.09 4.641 15.917 4.361 15.637C4.081 15.357 3.908 15.091 3.763 14.717C3.653 14.435 3.523 14.012 3.487 13.232C3.45 12.39 3.44 12.136 3.44 10C3.44 7.864 3.45 7.61 3.488 6.767C3.524 5.987 3.654 5.564 3.764 5.282C3.909 4.908 4.082 4.642 4.362 4.362C4.642 4.082 4.908 3.909 5.282 3.764C5.564 3.654 5.987 3.524 6.767 3.488C7.61 3.45 7.864 3.44 10 3.44ZM10 5.892C7.73 5.892 5.892 7.732 5.892 10C5.892 12.27 7.732 14.108 10 14.108C12.27 14.108 14.108 12.268 14.108 10C14.108 7.73 12.268 5.892 10 5.892V5.892ZM10 12.667C8.527 12.667 7.333 11.473 7.333 10C7.333 8.527 8.527 7.333 10 7.333C11.473 7.333 12.667 8.527 12.667 10C12.667 11.473 11.473 12.667 10 12.667ZM15.23 5.73C15.23 6.26 14.8 6.69 14.27 6.69C13.74 6.69 13.31 6.26 13.31 5.73C13.31 5.2 13.74 4.77 14.27 4.77C14.8 4.77 15.23 5.2 15.23 5.73Z">
                                                                </path>
                                                            </svg></a><a class="socials__item" href="<?php echo carbon_get_theme_option('social_links_three'); ?>">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                                <g clip-path="url(#clip0)">
                                                                    <path class="socials__path" d="M5.46154 17V6.44446H2V17H5.46154Z">
                                                                    </path>
                                                                    <path class="socials__path" d="M3.75 2C2.7 2 2 2.749 2 3.729C2 4.70899 2.7 5.5 3.75 5.5C4.84667 5.5 5.5 4.70899 5.5 3.729C5.45917 2.749 4.8 2 3.75 2Z">
                                                                    </path>
                                                                    <path class="socials__path" d="M14.6924 17H18.1539V11.0333C18.1539 7.96113 16.2962 6.44446 14.0058 6.44446C11.7674 6.44446 10.6539 7.86668 10.6539 7.86668V6.44446H7.19238V17H10.6539V11.4445C10.6539 10.3445 11.2308 9.20001 12.627 9.20001H12.6732C14.1155 9.22224 14.6924 10.3333 14.6924 11.4445V17Z">
                                                                    </path>
                                                                </g>
                                                                <defs>
                                                                    <div class="socials__clipPath" id="clip0">
                                                                        <rect x="2" y="2" width="16.1538" height="15" fill="white">
                                                                        </rect>
                                                                    </div>
                                                                </defs>
                                                            </svg></a>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs__right-bar">
                                <div class="tabs__content-bgd">
                                    <img class="tabs__content-bgd-pic" src="<?php echo wp_get_attachment_image_url($boxTabs['img_what'], 'full');  ?>" alt="" role="presentation"/>
                                </div>
                                <div class="tabs-content" id="activeTab<?php echo $key; ?>">
                                    <div class="tabs-content__inner">
                                        <div class="tabs-content__dropdown-inner">
                                        <?php foreach ($leftTab as $num => $leftTabs): ?>
                                            <?php $contentTab = $leftTabs['complex_content']; ?>
                                            <?php foreach ($contentTab as $centContent): ?>
                                            <div class="tabs-content__dropdown-item">
                                                <div class="tabs-content__dropdown-title-inner">
                                                    <div class="color-button">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                                            <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="tabs-content__dropdown-name"><?php echo  $leftTabs['left_tab_name']; ?></div>
                                                    <div class="tabs-content__dropdown-number-inner">
                                                        <div class="tabs-content__dropdown-number">0<?php echo $num+1 ?></div>
                                                        <svg class="tabs-content__dropdown-icon" mlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                                                            <path class="tabs-content__dropdown-icon-path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke="#B9B9B9" stroke-width="1.3" stroke-linecap="round">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="tabs-content__subtab-content">
                                                    <h3 class="tabs-content__subtab-content-title"><?php echo $centContent['what_this']; ?></h3>
                                                    <?php if (!empty($centContent['leader_text'])) { ?>
                                                    <div class="tabs-content__subtab-content-item">
                                                        <?php echo $centContent['leader_text']; ?>
                                                    </div>
                                                    <?php } if (!empty($centContent['text_point'])) { ?>
                                                    <div class="tabs-content__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active">
                                                        <h4>Суть:
                                                        </h4>
                                                        <p><?php echo $centContent['text_point']; ?></p>
                                                    </div>
                                                    <?php } if (!empty($centContent['text_goal'])){ ?>
                                                    <div class="tabs-content__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active">
                                                        <h4>Цель:
                                                        </h4>
                                                        <p><?php echo $centContent['text_goal']; ?></p>
                                                    </div>
                                                    <?php } if (!empty($centContent['text_raisin'])){ ?>
                                                    <div class="tabs-content__subtab-content-item tabs-content__subtab-content-item tabs-content__subtab-content-item_active-bgd">
                                                        <h4>Изюм:
                                                        </h4>
                                                        <p><?php echo $centContent['text_raisin']; ?></p>
                                                    </div>
                                                    <?php } ?>
                                                    <?php $accord = $centContent['complex_accord']; ?>
                                                    <?php if (!empty($accord)){ ?>
                                                        <div class="tabs-content__subtab-content-item">

                                                            <?php foreach ($accord as $accords): ?>
                                                                <div class="tabs-content__accordion">
                                                                    <div class="tabs-content__accordion-title">
                                                                        <div class="tabs-content__accordion-title-content"><span><?= $accords['title_accord']; ?></span>
                                                                        </div>
                                                                        <div class="tabs-content__accordion-title-level"><span style="color: #ea4719;"><?= $accords['level_accord']; ?></span>
                                                                            <svg class="dropdown-icon" xmlns="http://www.w3.org/2000/svg" width="7" height="11" viewbox="0 0 7 11" fill="none">
                                                                                <path d="M1 1L5.5 5.5L1 10" stroke="#B9B9B9" stroke-width="1.3" stroke-linecap="round"></path>
                                                                            </svg>
                                                                        </div>
                                                                    </div>
                                                                    <div class="tabs-content__accordion-content">
                                                                        <?= $accords['text_accord']; ?>
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    <?php } ?>
                                                    <?php $table = $centContent['complex_table']; ?>
                                                        <?php if (!empty($table)): ?>
                                                            <div class="tabs-content__table">
                                                                <div class="tabs-content__subtab-content-item">
                                                                    <?php foreach ($table as $tables): ?>
                                                                    <div class="tabs-content__swiper-container swiper-container">
                                                                        <div class="tabs-content__swiper-wrapper swiper-wrapper">
                                                                            <?php $slideTable = $tables['slide_container']  ?>
                                                                            <?php foreach ($slideTable as $slides): ?>
                                                                                <div class="tabs-content__swiper-slide swiper-slide">
                                                                                    <?php $tabBlock = $slides['table_container']; ?>
                                                                                    <?php foreach($tabBlock as $tabBlocks): ?>
                                                                                        <div class="tabs-content__problem-inner">
<!--                                                                                            --><?php //$tableContent = $tabBlocks['text_block'] ?>
                                                                                            <div class="tabs-content__problem-title"><?= $tabBlocks['head_table'] ?></div>
<!--                                                                                            --><?php //foreach ($tableContent as $tableText): ?>
                                                                                            <div class="tabs-content__problem-description"><?= $tabBlocks['text_table'] ?></div>
<!--                                                                                            --><?php //endforeach; ?>
                                                                                        </div>
                                                                                    <?php endforeach; ?>
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                        <div class="tabs-content__swiper-pagination swiper-pagination"></div>
                                                                        <div class="tabs-content__swiper-button-prev swiper-button-prev"></div>
                                                                        <div class="tabs-content__swiper-button-next swiper-button-next"></div>
                                                                    </div>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                        </div>
                                        <div class="form">
                                            <img class="form__contacts-portrait" src="/wp-content/themes/Sanko/src/icons/contacts-portrait.png" alt="" role="presentation"/>
                                            <div class="form__inner">
                                            <div class="form__addText">
                      <div class="form__addText-wrapper"><img class="form__addLogo" src="/wp-content/themes/Sanko/src/icons/form.svg" alt="" role="presentation"/>
                        <div class="form__addContent"><span class="form__titleText">Спасибо!</span><span class="form__descText">Ваше сообщение успешно отправлено.  В ближайшее время мы обязательно свяжемся с вами</span>
                        </div>
                      </div>
                    </div>
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
                                                    <input style="display:none" class="form__input" name="page" id="input-page" placeholder="" value="<?the_title($before = '', $after = '', $echo = true)?>" type="text"/>
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
                                                        </label><textarea class="form__textarea" name="message" id="input-message" placeholder="Ваше сообщение"></textarea>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php $key+1 ?>
                <?php endforeach; ?>
            <?php endforeach; ?>
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
                                                    <?php $content = carbon_get_post_meta($pst->ID, 'complex_content'); ?>
                                                    <?php
                                                    foreach ($content as $contents):
                                                        echo $contents['event_text'];
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
            </div>
        </div>
    </div>
</div>
<div class="control">
    <div class="control__inner">
        <ul class="control__list">
            <?php $topTab =  carbon_get_post_meta(get_the_ID(), 'complex_tab');?>
            <?if($topTabs['crb_tab_include']==1){?>
            <?php foreach ( $topTab as $key => $topTabs ): ?>
                <li class="control__list-item"><?php echo $topTabs['tab_name']; ?></li>
            <?php endforeach; ?>
            <?}?>
        </ul>
    </div>
</div>