<?php
/**
 *
 *
 * @link https://mastakstudio.by
 *
 * @package WordPress
 * @subpackage Sanko
 * @since 1.0
 * @author Mastak Studio
 * @version 1.0
 */

get_header(); ?>


    <?php
        require "core/views/home/front-inner.php";
        echo '<div class="gradient-inner">';
        require "core/views/home/profiles.php";
        require "core/views/home/metodology.php";
        require "core/views/home/video.php";
        require "core/views/home/feedback.php";
        require "core/views/home/events.php";
    ?>



<?php
get_footer();