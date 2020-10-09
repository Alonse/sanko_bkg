<?php require_once __DIR__ . '/eq-poup.php'; ?>
<?php $img = carbon_get_post_meta(get_the_ID(), 'img_eq'); ?>
<main class="main" id="main">
<div class="tabs-complex">
    <div class="tabs-complex__inner">
        <div class="directions">
            <div class="container">
                <div class="directions__inner">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                        </div>
                    </div>
                    <div class="directions__wrapper">
                        <div class="directions__content">
                            <img class="directions__bgd-pic" src="<?php echo wp_get_attachment_image_url($img, 'full'); ?>" alt="" role="presentation"/>
                            <div class="directions__content-title">
                                <div class="color-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="44" viewBox="0 0 12 44" fill="none">
                                        <path class="color-button__path" d="M12 22C12 28.6186 4.44445 32.8136 2.28882e-06 44C-8.90096e-07 31.8814 1.69542e-07 22 1.69542e-07 22C1.69542e-07 14.2012 2.28882e-06 33.1864 2.28882e-06 0C4.44445 11.3729 12 13.5169 12 22Z" fill="#8BCC32">
                                        </path>
                                    </svg>
                                </div>
                                <h2 class="directions__content-title"><?php echo carbon_get_post_meta(get_the_ID(), 'eq_title_top'); ?></h2>
                            </div>
                            <div class="directions__content-text"><?php echo carbon_get_post_meta(get_the_ID(), 'eq_text_top'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tabs-complex__wrapper" id="complex-tabs">
            <div class="tabs-complex__control-inner">
                <div class="container">
                    <?php $get = $_GET['param'] = array('tabs1','tabs2'); ?>
                    <ul class="tabs-complex__control">
                        <li class="tabs-complex__roller"></li>
                        <li>
                            <a data-param="<?php echo $get[0]; ?>" class="tabs-complex__button" href="#complex-tabs-1" id="for-company">Для вашей компании</a>
                        </li>
                        <li>
                            <a data-param="<?php echo $get[1]; ?>" class="tabs-complex__button" href="#complex-tabs-2" id="for-you">Для ваc</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabs-complex__content">
                <div class="tabs-complex__tab-1 complex-tab" id="complex-tabs-1">
                    <?php require_once  __DIR__ . '/pageEqOne.php'; ?>
                </div>
                <div class="tabs-complex__tab-2 complex-tab" id="complex-tabs-2">
                    <?php require_once  __DIR__ . '/pageEqTwo.php'; ?>
                </div>
            </div>
        </div>
    </div>
</div>