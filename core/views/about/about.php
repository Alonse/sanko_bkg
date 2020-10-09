<div>
    <div class="about">
        <div class="about__inner">
            <div class="container">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__inner">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
                <div class="about__wrapper">
                    <div class="about__content">
                        <div class="about__title"><?php echo carbon_get_post_meta(get_the_ID(), 'about_title_top'); ?></div>
                        <div class="about__description"><?php echo carbon_get_post_meta(get_the_ID(), 'about_text_top'); ?></div>
                        <!-- <a class="about__link" href="< ?php echo get_page_link(614); ?>">Узнать больше</a> -->
                    </div>
                    <div class="about__portrait">
                        <img class="about__portrait-pic" src="/wp-content/themes/Sanko/src/icons/about-portrait.png" alt="" role="presentation"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="efforts">
        <div class="efforts__inner">
            <div class="education">
                <div class="education__inner">
                    <div class="container">
                        <div class="education__wrapper">
                            <div class="education__item">
                                <div class="education__title"><?php echo carbon_get_post_meta(get_the_ID(), 'education_title_top'); ?></div>
                                <?php $education = carbon_get_post_meta(get_the_ID(), 'education_list_left'); ?>
                                <div class="education__item-inner">
                                    <div class="education__line-inner">
                                        <?php foreach($education as $educations): ?>
                                        <div class="education__circle"></div>
                                        <div class="education__line"></div>
                                        <?php endforeach; ?>
                                        <div class="education__circle"></div>
                                    </div>
                                    <div class="education__content">
                                    <?php foreach($education as $educations): ?>
                                        <p><?php echo $educations['about_text_top']; ?></p>
                                    <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                            <div class="education__item">
                                <div class="education__title"><?php echo carbon_get_post_meta(get_the_ID(), 'exp_title_top'); ?></div>

                                    <div class="education__item-inner">
                                        <div class="education__line-inner">
                                            <?php $experience = carbon_get_post_meta(get_the_ID(), 'exp_list_left'); ?>
                                            <?php foreach($experience as $exp): ?>
                                            <div class="education__circle"></div>
                                            <div class="education__line"></div>
                                            <?php endforeach; ?>
                                            <div class="education__circle"></div>
                                        </div>
                                        <div class="education__content">
                                            <?php foreach($experience as $exp): ?>
                                            <p><?php echo $exp['exp_text_top']; ?></p>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="certificates">
                <div class="certificates__inner">
                    <div class="certificates__title">Сертификаты
                    </div>
                    <div class="certificates__swiper-container swiper-container">
                        <div class="certificates__swiper-wrapper swiper-wrapper">
                            <?php $certificate = carbon_get_theme_option('crb_certificate'); ?>
                            <?php foreach($certificate as $certificates): ?>
                            <div class="certificates__swiper-slide swiper-slide">
                                <div class="certificates__slide-inner">
                                    <div class="certificates__name"><?php echo $certificates['title_certificate']; ?></div>
                                    <div class="certificates__place">
                                        <img class="certificates__place-icon" src="<?php echo $certificates['ico']; ?>" alt="" role="presentation"/>
                                        <div class="certificates__place-text"><?php echo $certificates['country']; ?></div>
                                    </div>
                                    <div class="certificates__icon" style="background: <?php echo $certificates['icon_color']; ?>">
                                        <img class="certificates__icon-pic" src="/wp-content/themes/Sanko/src/icons/certificates-icon.svg" alt="" role="presentation"/>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="certificates__swiper-button-next swiper-button-next certificates__button">
                        </div>
                        <div class="certificates__swiper-button-prev swiper-button-prev certificates__button">
                        </div>
                    </div><a class="certificates__link" href="#" style="display: none">Просмотреть сертификаты</a>
                </div>
            </div>
        </div><img class="efforts__top-line" src="/wp-content/themes/Sanko/src/icons/front-line-out.png" alt="" role="presentation"/>
    </div>
    <div class="projects">
        <div class="projects__inner">
            <h1 class="projects__title"><?php echo carbon_get_theme_option('head_project'); ?></h1>
            <h2 class="projects__subtitle">Ключевые области экспертизы</h2>
            <div class="projects__swiper-container swiper-container">
                <div class="projects__swiper-wrapper swiper-wrapper">
                    <?php $project = carbon_get_theme_option('crb_project'); ?>
                    <?php foreach($project as $projects): ?>
                    <div class="projects__swiper-slide swiper-slide">
                        <div class="projects__name"><?php echo $projects['title_project']; ?></div>
                        <div class="projects__content">
                            <?php echo $projects['project_text']; ?>
                        </div>
                        <div class="projects__logos">
							<div class="projects__logo-wrapper">
								<?php $logoProject =  $projects["project_logo"]?>
								<?php foreach ($logoProject as $logoProjects): ?>
									<div class="projects__logo-inner"><img class="projects__logos-pic" src="<?php echo wp_get_attachment_image_url($logoProjects, 'full'); ?>" alt="" role="presentation"/></div>
								<?php endforeach; ?>
							</div>
						</div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>