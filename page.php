<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?/*?>
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		    <div class="container">
			<?php
			while ( have_posts() ) :
				the_post();

				// get_template_part( 'template-parts/page/content', 'page' );
				
the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap --><?*/?>

<div class="pattern">
    <div class="container">
        <div class="pattern__inner">
            <div class="breadcrumbs">
                <div class="breadcrumbs__inner">
                    <?php the_breadcrumb(); ?>
                </div>
            </div>
            <br>
            <?php
            while ( have_posts() ){
                the_post();
                echo '<h1>';
                the_title();
                echo '</h1>';
                the_content();
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
