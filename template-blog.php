<?php
/**
 * Template name: center
 */
get_header();
?>
<div>
    <div class="center-page">
        <div class="center-page__inner">
            <div class="container">
                <div class="breadcrumbs">
                    <div class="breadcrumbs__inner">
                        <?php the_breadcrumb(); ?>
                    </div>
                </div>
                <div class="center-page__wrapper">
                    <div class="center-page__content">
                        <div class="center-page__title"><?= the_title(); ?></div>
                        <div class="center-page__description">
                            <?php
                            while ( have_posts() ) : the_post();
                                the_content();
                            endwhile;
                            ?>
                        </div>
                    </div>
                    <div class="center-page__portrait"><img class="center-page__portrait-pic" src="/wp-content/themes/Sanko/src/icons/books.png" alt="" role="presentation"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="center-filter">
        <div class="container">
            <div class="center-filter__inner">

                <?php  require_once 'core/views/blog/blogView.php'?>

            </div>
        </div>
    </div>
</div>
<?php
get_footer();