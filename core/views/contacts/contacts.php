<?php $portrait = carbon_get_theme_option('contacts-portrait'); ?>
<div class="gradient-inner">
<div class="contacts-page">
    <div class="contacts-page__inner">
        <div class="container">
            <img class="contacts-page__portrait" src="<?php echo wp_get_attachment_image_url($portrait, 'full'); ?>" alt="" role="presentation"/>
            <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                </div>
            </div>
            <div class="contacts-page__wrapper">
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

                                            <a class="contacts__link" href="tel:<?php echo $contacts['phone_leader']; ?>"><?php echo $contacts['phone_leader'].' ('.$contacts['phone_country'].')'; ?></a>
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
							<a class="contacts__link contacts__email" href="https://t.me/denissanko_support">Техническая поддержка</a>
                            <?php foreach ($contact as $contacts) : ?>
                            <?php if(!empty($contacts['email_leader'])) { ?>
                            <a class="contacts__link contacts__email" href="mailto:<?php echo $contacts['email_leader']; ?>"><?php echo $contacts['email_leader']; ?></a>
                                <?php } ?>
                            <?php endforeach; ?>
                            <div class="socials">
                                <div class="socials__inner">
                                    <a class="socials__item" href="<?php echo carbon_get_theme_option('social_links'); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path class="socials__path" d="M11.5881 19H8.09392V10.4935H6V7.66667H8.09392V5.93918C8.09392 3.57044 8.80062 2 11.5489 2H13.6821V4.82679H12.3995C11.3264 4.82679 11.261 5.35027 11.261 6.09623V7.66667H13.8391L13.5381 10.4935H11.5881V19Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="socials__item" href="<?php echo carbon_get_theme_option('social_links_two'); ?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                            <path class="socials__path" path fill-rule="evenodd" clip-rule="evenodd" d="M10 2C7.827 2 7.555 2.01 6.702 2.048C5.85 2.088 5.27 2.222 4.76 2.42C4.234 2.624 3.787 2.898 3.343 3.343C2.898 3.787 2.623 4.233 2.42 4.76C2.222 5.27 2.087 5.85 2.048 6.702C2.008 7.555 2 7.827 2 10C2 12.173 2.01 12.445 2.048 13.298C2.088 14.15 2.222 14.731 2.42 15.24C2.624 15.766 2.898 16.213 3.343 16.657C3.787 17.102 4.233 17.377 4.76 17.58C5.27 17.778 5.85 17.913 6.702 17.952C7.555 17.992 7.827 18 10 18C12.173 18 12.445 17.99 13.298 17.952C14.15 17.912 14.731 17.778 15.24 17.58C15.766 17.376 16.213 17.102 16.657 16.657C17.102 16.213 17.377 15.767 17.58 15.24C17.778 14.73 17.913 14.15 17.952 13.298C17.992 12.445 18 12.173 18 10C18 7.827 17.99 7.555 17.952 6.702C17.912 5.85 17.778 5.269 17.58 4.76C17.376 4.234 17.102 3.787 16.657 3.343C16.213 2.898 15.767 2.623 15.24 2.42C14.73 2.222 14.15 2.087 13.298 2.048C12.445 2.008 12.173 2 10 2ZM10 3.44C12.136 3.44 12.39 3.45 13.233 3.488C14.013 3.524 14.436 3.654 14.718 3.764C15.092 3.909 15.358 4.082 15.638 4.362C15.918 4.642 16.091 4.908 16.236 5.282C16.346 5.564 16.476 5.987 16.512 6.767C16.55 7.611 16.559 7.864 16.559 10C16.559 12.136 16.549 12.39 16.511 13.233C16.475 14.013 16.345 14.436 16.235 14.718C16.09 15.092 15.917 15.358 15.637 15.638C15.357 15.918 15.091 16.091 14.717 16.236C14.435 16.346 14.012 16.476 13.232 16.512C12.388 16.55 12.135 16.559 9.999 16.559C7.863 16.559 7.609 16.549 6.766 16.511C5.986 16.475 5.563 16.345 5.281 16.235C4.907 16.09 4.641 15.917 4.361 15.637C4.081 15.357 3.908 15.091 3.763 14.717C3.653 14.435 3.523 14.012 3.487 13.232C3.45 12.39 3.44 12.136 3.44 10C3.44 7.864 3.45 7.61 3.488 6.767C3.524 5.987 3.654 5.564 3.764 5.282C3.909 4.908 4.082 4.642 4.362 4.362C4.642 4.082 4.908 3.909 5.282 3.764C5.564 3.654 5.987 3.524 6.767 3.488C7.61 3.45 7.864 3.44 10 3.44ZM10 5.892C7.73 5.892 5.892 7.732 5.892 10C5.892 12.27 7.732 14.108 10 14.108C12.27 14.108 14.108 12.268 14.108 10C14.108 7.73 12.268 5.892 10 5.892V5.892ZM10 12.667C8.527 12.667 7.333 11.473 7.333 10C7.333 8.527 8.527 7.333 10 7.333C11.473 7.333 12.667 8.527 12.667 10C12.667 11.473 11.473 12.667 10 12.667ZM15.23 5.73C15.23 6.26 14.8 6.69 14.27 6.69C13.74 6.69 13.31 6.26 13.31 5.73C13.31 5.2 13.74 4.77 14.27 4.77C14.8 4.77 15.23 5.2 15.23 5.73Z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a class="socials__item" href="https://wa.me/<?php echo carbon_get_theme_option('social_links_three'); ?>">
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
                                        </svg>
                                    </a>
                                    <a class="socials__item" href="https://www.youtube.com/channel/UCRL3E2hfeqGqLmbtbI9DSTg">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" version="1.1" x="0px" y="0px" viewbox="0 0 511.147 511.147" style="enable-background:new 0 0 511.147 511.147;" xml:space="preserve">
                                        <g transform="translate(1 1)">
                                            <g>
                                                <g>
                                                    <path class="socials__path" d="M505.027,146.2c0-1.707-5.12-39.253-21.333-57.173c-19.627-21.333-40.96-23.893-52.053-24.747h-3.413     c-69.12-5.12-172.373-5.973-174.08-5.973c-0.853,0-104.96,0.853-173.227,7.68h-2.56C66.413,66.84,45.08,69.4,26.307,90.733     C9.24,108.653,4.12,147.053,4.12,148.76c0,0-5.12,43.52-5.12,87.04v40.107c0,42.667,5.12,86.187,5.12,87.04     c0,1.707,5.12,39.253,21.333,57.173c17.92,20.48,39.253,23.04,52.907,24.747c2.56,0,4.267,0,6.827,0.853     c39.253,3.413,163.84,5.12,168.96,5.12c0.853,0,104.96,0,174.08-7.68h2.56c11.947-0.853,33.28-3.413,52.053-24.747     c17.067-17.92,22.187-56.32,22.187-58.027c0,0,5.12-43.52,5.12-87.04V233.24C510.147,190.573,505.027,147.053,505.027,146.2z      M493.08,275.053c0,42.667-5.12,85.333-5.12,85.333c-1.707,9.387-6.827,36.693-17.92,48.64     c-14.507,17.067-31.573,18.773-40.96,19.627h-2.56c-68.267,5.12-171.52,5.12-172.373,5.12s-128.853-1.707-166.4-5.973     c-2.56,0-5.12-0.853-7.68-0.853c-11.947-0.853-29.013-3.413-42.667-18.773c-10.24-11.093-16.213-38.4-17.067-47.787     c0-0.853-5.12-43.52-5.12-85.333v-40.107c0-42.667,5.12-85.333,5.12-85.333c0.853-9.387,6.827-36.693,17.067-48.64     C52.76,83.907,68.973,82.2,79.213,81.347h2.56c68.267-5.12,171.52-5.973,172.373-5.973s104.107,0.853,172.373,5.973h3.413     c9.387,0.853,26.453,2.56,40.96,19.627c10.24,11.947,15.36,39.253,17.067,48.64c0.853,1.707,5.12,44.373,5.12,85.333V275.053z">
                                                    </path>
                                                    <path class="socials__path" d="M360.813,255.427l-162.133-94.72c-2.56-1.707-5.973-1.707-8.533,0s-4.267,4.267-4.267,7.68V353.56     c0,3.413,1.707,5.973,4.267,7.68c1.707,0.853,2.56,0.853,4.267,0.853s2.56,0,4.267-0.853l162.133-90.453     c2.56-1.707,4.267-4.267,4.267-7.68S363.373,257.133,360.813,255.427z M202.947,339.053v-156.16l136.533,80.213L202.947,339.053z     ">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                      </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <div class="form__title-alt">Задайте мне вопрос
                        </div>
                        <div class="color-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                </path>
                            </svg>
                        </div>
                        <form class="form__wrapper" id="contact-form" method="post">
                            <input style="display:none" class="form__input" name="page" id="input-page" placeholder="" value="<?the_title($before = '', $after = '', $echo = true)?>" type="text"/>
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
                            <textarea class="form__textarea" name="message" id="input-message" placeholder="Ваше сообщение"></textarea>
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