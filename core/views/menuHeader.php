<div class="header">

    <div class="header__dropdown-menu">

        <div class="header__dropdown-menu-inner">

            <a class="header__dropdown-menu-link" href="<?php echo get_home_url(); ?>">

                <div class="header__filter-header">

                    <div class="header__menu-link-title">Главная страница

                    </div>

                </div>

            </a>

            <div class="header__filter-inner">

                <?php

                $args = array(

                    'theme_location'    => 'mobile_menu',

                    'container'       => false,

                    'items_wrap'      => '%3$s',

                    'walker'=> new Mobile_Walker_Nav_Menu()

                );



                // print menu

                wp_nav_menu( $args );

                ?>

            </div>
            <div class="header__soc-inner">
              <a class="header__soc-inner-item" href="tel:+375 44 754 15 18"><img class="header__soc-inner-image" src="/wp-content/themes/Sanko/src/icons/phone-soc.svg" alt="" role="presentation"/></a>
              <a class="header__soc-inner-item" href="https://teleg.run/natalishkutsko"><img class="header__soc-inner-image" src="/wp-content/themes/Sanko/src/icons/tel-soc.svg" alt="" role="presentation"/></a>
              <a class="header__soc-inner-item" href="viber://chat?number=+375447541518"><img class="header__soc-inner-image" src="/wp-content/themes/Sanko/src/icons/viber-soc.svg" alt="" role="presentation"/></a>
              <a class="header__soc-inner-item" href="https://wa.me/+375447541518"><img class="header__soc-inner-image" src="/wp-content/themes/Sanko/src/icons/wa-soc.svg" alt="" role="presentation"/></a>
              <a class="header__soc-inner-item" href="mailto:natali@denissanko.com"><img class="header__soc-inner-image" src="/wp-content/themes/Sanko/src/icons/email-soc.svg" alt="" role="presentation"/></a>
            </div> 
            <div class="header__socials-inner">

<!--                <div class="header__lang">-->

<!--                    <img class="header__lang-icon" src="/wp-content/themes/Sanko/src/icons/lang-icon.svg" alt="" role="presentation"/>-->

<!--                    <a class="header__lang-link header__lang-link header__lang-link_active" href="#">RU</a><a class="header__lang-link" href="#">EN</a>-->

<!--                </div>-->

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

    <div class="container">

        <div class="header__inner">

            <a href="<?php echo get_home_url(); ?>"> <div class="header__logo"><img class="header__logo-pic" src="/wp-content/themes/Sanko/src/icons/sanko-logo.svg" alt="" role="presentation"/></div></a>



            <div class="header__right-bar">

                <div class="menu">

                    <div class="menu__inner" style="">

                        <?php

                        $args = array(

                            'theme_location'  => 'header_menu',

                            'container'       => 'ul',

                            'menu_class'      => 'menu__filter-inner',

                            'walker'=> new Header_Walker_Nav_Menu()

                        );

                        wp_nav_menu( $args );

                        ?>

                        <ul>

                        <li class="menu__filter phone">

                  <svg class="menu__phone-header" width="21" height="20" viewbox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <g clip-path="url(#clip0)">

                      <path d="M10.375 0C4.865 0 0.375 4.49 0.375 10C0.375 15.51 4.865 20 10.375 20C15.885 20 20.375 15.51 20.375 10C20.375 4.49 15.885 0 10.375 0ZM16.485 15.13C16.485 15.67 16.045 16.11 15.505 16.11C9.305 16.11 4.265 11.07 4.265 4.87C4.265 4.33 4.705 3.89 5.245 3.89H7.485C8.025 3.89 8.465 4.33 8.465 4.87C8.465 5.62 8.585 6.35 8.815 7.05C8.925 7.41 8.835 7.79 8.575 8.05L7.565 9.39C8.405 10.97 9.385 11.95 10.985 12.8L12.355 11.76C12.585 11.53 12.975 11.44 13.325 11.56C14.025 11.79 14.755 11.91 15.505 11.91C16.045 11.91 16.485 12.35 16.485 12.89V15.13Z" fill="#D1D3D4"></path>

                    </g>

                    <defs>

                      <clippath id="clip0">

                        <rect width="20" height="20" fill="white" transform="translate(0.375)"></rect>

                      </clippath>

                    </defs>

                  </svg>

                  <div class="menu__phone-wrapper"><img class="menu__phone-content-img" src="/wp-content/themes/Sanko/src/icons/gray-button.svg" alt="" role="presentation"/>

                    <div class="menu__phone-content">

                      <div class="menu__phone-part"><span class="menu__phone-part-title">Наталья Шкутько</span><span class="menu__phone-part-desc">Руководитель направления бизнес обучения</span>

                        <div class="menu__phone-soc">

                          <a class="menu__phone-soc-item" href="https://teleg.run/natalishkutsko"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-tel.svg" alt="" role="presentation"/></a>

                          <a class="menu__phone-soc-item" href="viber://chat?number=+375447541518"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-viber.svg" alt="" role="presentation"/></a>

                          <a class="menu__phone-soc-item" href="https://wa.me/+375447541518"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-wu.svg" alt="" role="presentation"/></a>

                        </div>

                        <div class="menu__phone-number"><a class="menu__phone-number-item" href="tel:+79654348629">+7 965 434 86 29  (РФ)</a><a class="menu__phone-number-item" href="tel:+375447541518">+375 44 754 15 18 (РБ)</a>

                        </div>

                        <div class="menu__phone-email"><a class="menu__phone-number-item" href="mailto:natali@dennissanko.com">natali@dennissanko.com</a>

                        </div>

                      </div>

                      <div class="menu__phone-part"><span class="menu__phone-part-title">Фаина Ермолаева</span><span class="menu__phone-part-desc">Менеджер по работе с клиентами</span>

                        <div class="menu__phone-soc">

                          <a class="menu__phone-soc-item" href="https://teleg.run/ermolaeva_fai"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-tel.svg" alt="" role="presentation"/></a>

                          <a class="menu__phone-soc-item" href="viber://chat?number=+375333745721"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-viber.svg" alt="" role="presentation"/></a>

                          <a class="menu__phone-soc-item" href="https://wa.me/+375333745721"><img class="menu__phone-soc-image" src="/wp-content/themes/Sanko/src/icons/soc-wu.svg" alt="" role="presentation"/></a>

                        </div>

                        <div class="menu__phone-number"><a class="menu__phone-number-item" href="tel:+375333745721">+375 33 374 57 21 (РБ)</a>

                        </div>

                        <div class="menu__phone-email"><a class="menu__phone-number-item" href="mailto:faina@dennissanko.com">faina@dennissanko.com</a>

                        </div>

                      </div>

                      <div class="menu__phone-part"><span class="menu__phone-part-title"></span>
                        <div class="menu__phone-number"><a class="menu__phone-number-item" href="https://t.me/joinchat/QKoXTRSEdGJ43eX7JS3xTw">Business ComeUnity</a>
                        </div>
                        <div class="menu__phone-number"><a class="menu__phone-number-item" href="https://t.me/joinchat/QKoXTRx8dQdxgSU9NBPzuA">Mindfulness ComeUnity</a>
                        </div>
                        <div class="menu__phone-number"><a class="menu__phone-number-item" href="https://t.me/denissanko_support">Техническая поддержка</a>
                        </div>
                        
                      </div>
                      <div class="menu__phone-part">
                          <div class="socials">
                            <div class="socials__inner">
                              <a class="socials__item" href="<?php echo carbon_get_theme_option('social_links'); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path class="socials__path" d="M11.5881 19H8.09392V10.4935H6V7.66667H8.09392V5.93918C8.09392 3.57044 8.80062 2 11.5489 2H13.6821V4.82679H12.3995C11.3264 4.82679 11.261 5.35027 11.261 6.09623V7.66667H13.8391L13.5381 10.4935H11.5881V19Z">
                                </path>
                              </svg></a>
                              <a class="socials__item" href="<?php echo carbon_get_theme_option('social_links_two'); ?>">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path class="socials__path" path="" fill-rule="evenodd" clip-rule="evenodd" d="M10 2C7.827 2 7.555 2.01 6.702 2.048C5.85 2.088 5.27 2.222 4.76 2.42C4.234 2.624 3.787 2.898 3.343 3.343C2.898 3.787 2.623 4.233 2.42 4.76C2.222 5.27 2.087 5.85 2.048 6.702C2.008 7.555 2 7.827 2 10C2 12.173 2.01 12.445 2.048 13.298C2.088 14.15 2.222 14.731 2.42 15.24C2.624 15.766 2.898 16.213 3.343 16.657C3.787 17.102 4.233 17.377 4.76 17.58C5.27 17.778 5.85 17.913 6.702 17.952C7.555 17.992 7.827 18 10 18C12.173 18 12.445 17.99 13.298 17.952C14.15 17.912 14.731 17.778 15.24 17.58C15.766 17.376 16.213 17.102 16.657 16.657C17.102 16.213 17.377 15.767 17.58 15.24C17.778 14.73 17.913 14.15 17.952 13.298C17.992 12.445 18 12.173 18 10C18 7.827 17.99 7.555 17.952 6.702C17.912 5.85 17.778 5.269 17.58 4.76C17.376 4.234 17.102 3.787 16.657 3.343C16.213 2.898 15.767 2.623 15.24 2.42C14.73 2.222 14.15 2.087 13.298 2.048C12.445 2.008 12.173 2 10 2ZM10 3.44C12.136 3.44 12.39 3.45 13.233 3.488C14.013 3.524 14.436 3.654 14.718 3.764C15.092 3.909 15.358 4.082 15.638 4.362C15.918 4.642 16.091 4.908 16.236 5.282C16.346 5.564 16.476 5.987 16.512 6.767C16.55 7.611 16.559 7.864 16.559 10C16.559 12.136 16.549 12.39 16.511 13.233C16.475 14.013 16.345 14.436 16.235 14.718C16.09 15.092 15.917 15.358 15.637 15.638C15.357 15.918 15.091 16.091 14.717 16.236C14.435 16.346 14.012 16.476 13.232 16.512C12.388 16.55 12.135 16.559 9.999 16.559C7.863 16.559 7.609 16.549 6.766 16.511C5.986 16.475 5.563 16.345 5.281 16.235C4.907 16.09 4.641 15.917 4.361 15.637C4.081 15.357 3.908 15.091 3.763 14.717C3.653 14.435 3.523 14.012 3.487 13.232C3.45 12.39 3.44 12.136 3.44 10C3.44 7.864 3.45 7.61 3.488 6.767C3.524 5.987 3.654 5.564 3.764 5.282C3.909 4.908 4.082 4.642 4.362 4.362C4.642 4.082 4.908 3.909 5.282 3.764C5.564 3.654 5.987 3.524 6.767 3.488C7.61 3.45 7.864 3.44 10 3.44ZM10 5.892C7.73 5.892 5.892 7.732 5.892 10C5.892 12.27 7.732 14.108 10 14.108C12.27 14.108 14.108 12.268 14.108 10C14.108 7.73 12.268 5.892 10 5.892V5.892ZM10 12.667C8.527 12.667 7.333 11.473 7.333 10C7.333 8.527 8.527 7.333 10 7.333C11.473 7.333 12.667 8.527 12.667 10C12.667 11.473 11.473 12.667 10 12.667ZM15.23 5.73C15.23 6.26 14.8 6.69 14.27 6.69C13.74 6.69 13.31 6.26 13.31 5.73C13.31 5.2 13.74 4.77 14.27 4.77C14.8 4.77 15.23 5.2 15.23 5.73Z">
                                </path>
                              </svg></a>
                              <a class="socials__item" href="<?php echo carbon_get_theme_option('social_links_three'); ?>">
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
                                  </defs></svg><div class="socials__clipPath" id="clip0">
                                    <rect x="2" y="2" width="16.1538" height="15" fill="white">
                                    </rect>
                                  </div>
                                
                              </a>
                            </div>
                          </div>
                        </div>
                    </div>

                  </div>

                </li>

                      </ul>

                    </div>

                    

                    

                </div>

                
                <a href="/my-account/" class="header__login-link"><img class="header__login-image" src="/wp-content/themes/Sanko/src/icons/login.svg" alt="" role="presentation"/></a>        
                <div class="login">

              <div class="login__label">

                <a href="/my-account/" class="login__icon login__icon-label">

                  <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M13.6 26.2C20.5588 26.2 26.2 20.5588 26.2 13.6C26.2 6.64121 20.5588 1 13.6 1C6.64121 1 1 6.64121 1 13.6C1 20.5588 6.64121 26.2 13.6 26.2Z" stroke="#939EA7" stroke-width="1.3">

                    </path>

                    <path d="M13.5999 14.1362C16.1169 14.1362 18.1574 12.0958 18.1574 9.57875C18.1574 7.06174 16.1169 5.0213 13.5999 5.0213C11.0829 5.0213 9.04248 7.06174 9.04248 9.57875C9.04248 12.0958 11.0829 14.1362 13.5999 14.1362Z" stroke="#939EA7" stroke-width="1.3" stroke-linecap="round">

                    </path>

                    <path d="M4.48535 22.1788C5.15556 17.6213 9.0428 14.1362 13.6002 14.1362C18.2917 14.1362 22.179 17.6213 22.7151 22.1788" stroke="#939EA7" stroke-width="1.3" stroke-linecap="round">

                    </path>

                  </svg>

                </a>

                <div class="login__icon">

                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none">

                    <path d="M7 1L4 4L1 0.999999" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">

                    </path>

                  </svg>

                </div>

              </div>

              <div class="login__dropdown-inner"><img class="login__green-button" src="/wp-content/themes/Sanko/src/icons/gray-button.svg" alt="" role="presentation"/>

                <div class="login__dropdown-link"><?php if(is_user_logged_in()){?><a class="login__dropdown-link-inner" href="<?php echo esc_url(wc_logout_url()) ?>"><span class="login__dropdown-link-text">Выйти</span></a><?}else{?><a class="login__dropdown-link-inner" href="/my-account/"><span class="login__dropdown-link-text">Вход</span></a><a class="login__dropdown-link-inner" href="/my-account/?action=register"><span class="login__dropdown-link-text">Регистрация</span><?}?></a>

                </div>

              </div>

            </div>

            <div class="lang" style="display:none">

              <div class="lang__label">

                <div class="lang__icon">

                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">

                    <circle cx="10" cy="10" r="9.35" stroke="#797E84" stroke-width="1.3">

                    </circle>

                    <line x1="0.65" y1="9.87637" x2="19.35" y2="9.87637" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">

                    </line>

                    <path d="M14.7363 2.10522V2.10522C11.5492 6.88589 11.5492 13.114 14.7363 17.8947V17.8947" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">

                    </path>

                    <path d="M5.26367 2.10522V2.10522C8.45078 6.88589 8.45078 13.114 5.26367 17.8947V17.8947" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">

                    </path>

                  </svg>

                </div>

                <div class="lang__link">RU

                </div>

                <div class="lang__icon">

                  <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none">

                    <path d="M7 1L4 4L1 0.999999" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">

                    </path>

                  </svg>

                </div>

              </div>

              <div class="lang__dropdown-inner"><img class="lang__green-button" src="/wp-content/themes/Sanko/src/icons/gray-button.svg" alt="" role="presentation"/>

                <div class="lang__dropdown-link"><a class="lang__dropdown-link-inner" href="#"><span class="lang__dropdown-link-text">EN</span></a>

                </div>

              </div>

            </div>

<!--                <div class="lang">-->

<!--                    <div class="lang__label">-->

<!--                        <div class="lang__icon">-->

<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">-->

<!--                                <circle cx="10" cy="10" r="9.35" stroke="#797E84" stroke-width="1.3">-->

<!--                                </circle>-->

<!--                                <line x1="0.65" y1="9.87637" x2="19.35" y2="9.87637" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">-->

<!--                                </line>-->

<!--                                <path d="M14.7363 2.10522V2.10522C11.5492 6.88589 11.5492 13.114 14.7363 17.8947V17.8947" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">-->

<!--                                </path>-->

<!--                                <path d="M5.26367 2.10522V2.10522C8.45078 6.88589 8.45078 13.114 5.26367 17.8947V17.8947" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">-->

<!--                                </path>-->

<!--                            </svg>-->

<!--                        </div>-->

<!--                        <div class="lang__link">RU-->

<!--                        </div>-->

<!--                        <div class="lang__icon">-->

<!--                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none">-->

<!--                                <path d="M7 1L4 4L1 0.999999" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">-->

<!--                                </path>-->

<!--                            </svg>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                    <div class="lang__dropdown-inner"><img class="lang__green-button" src="/wp-content/themes/Sanko/src/icons/gray-button.svg" alt="" role="presentation"/>-->

<!--                        <div class="lang__dropdown-link"><a class="lang__dropdown-link-inner" href="#"><span class="lang__dropdown-link-text">EN</span></a>-->

<!--                        </div>-->

<!--                    </div>-->

<!--                </div>-->

                <div class="burger">

                    <div class="burger__line burger__line-up">

                    </div>

                    <div class="burger__line burger__line-middle">

                    </div>

                    <div class="burger__line burger__line-bottom">

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>