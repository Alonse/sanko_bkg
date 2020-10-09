<?php
/**
 * The template for displaying all single posts
 *
 * @link
 *
 * @package WordPress
 * @subpackage Sanko
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

    <div class="article">
        <div class="article__progress-bar" id="progress-bar">
        </div>
        <div class="article__inner">
            <h1 class="article__title-inner">
                <div class="container">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs__inner">
                            <?php the_breadcrumb(); ?>
                        </div>
                    </div>
                    <div class="article__title">
                        <?php if(in_category(13)){ ?>
                            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/audio-icon.svg" alt="" role="presentation"/>
                        <?php } if(in_category(14)) { ?>
                            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/video-icon.svg" alt="" role="presentation"/>
                        <?php } if(in_category(15)) { ?>
                            <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/article-icon.svg" alt="" role="presentation"/>
                        <?php } ?>
                        <div class="article__title-name"><?php the_title(); ?></div>
                    </div>
                </div>
            </h1>
            <div class="article__content">
                <div class="container">
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile;
                    ?>
                    
                    <?php $media = carbon_get_post_meta(get_the_ID(), 'url_media'); ?>
                    <?php if(!empty($media)){ ?>
                    <iframe src="<?= $media; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php } ?>
                    <div style="padding-top: 30px;">
                        <?php echo do_shortcode("[uptolike]"); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
