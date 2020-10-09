<?php
/**
 * Template name: account
 */
get_header();
?>
<div class="pattern">
    <div class="">
        <div class="pattern__inner">
            
            <?php
            while ( have_posts() ){
                the_post();
                the_content();
            }
            ?>
        </div>
    </div>
</div>
<?php
get_footer();
