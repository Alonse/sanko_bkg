<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://mastakstudio.com
 *
 * @subpackage Sanko
 * @since 1.0
 * @version 1.2
 */

require "core/views/hub.php"; ?>
<?php if(is_front_page()){ ?>
    <div class="video-popup">
        <div class="remodal" data-remodal-id="modal">
            <button class="remodal-close" data-remodal-action="close"></button>
            <iframe class="youtube-video" width="100%" height="100%" src="<?php echo carbon_get_post_meta(get_the_ID(), 'link_video'); ?>" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
        </div>
    </div>
<?php } ?>
<a class="compass-button" href="#compass-modal">
    <div class="compass-animation">
        <div class="compass-animation__inner"><img class="compass-animation__bgd" src="/wp-content/themes/Sanko/src/icons/compass.png" alt="" role="presentation"/><img class="compass-animation__arrow" src="/wp-content/themes/Sanko/src/icons/compass-arrow.png" id="compass-arrow" alt="" role="presentation"/><img class="compass-animation__shadow" src="/wp-content/themes/Sanko/src/icons/compass-shadow.png" alt="" role="presentation"/>
        </div>
    </div>
</a>
<?php
require "core/views/footer.php"; ?>
</main>
<script async src="/wp-content/themes/Sanko/src/js/common.min.js"></script>

<?php if(is_page('otzyvy')){echo "<script src=\"/wp-content/themes/Sanko/src/js/feedback.min.js\"></script>";} ?>
<?php if(is_page('otzyvy')){echo "<script src=\"/wp-content/themes/Sanko/src2/feedback.js\"></script>";} ?>
<?php if(is_page('contacts')){echo "<script src=\"/wp-content/themes/Sanko/src/js/contacts.min.js\"></script>";} ?>
<?php if(is_page('about-me')){echo "<script src=\"/wp-content/themes/Sanko/src/js/about.min.js\"></script>";} ?>
<?php if(is_page_template('template-eq.php')){echo "<script src=\"/wp-content/themes/Sanko/src/js/eq.min.js\"></script>";} ?>
<?php if(is_page_template('template-reclamation-leaders.php')){echo "<script src=\"/wp-content/themes/Sanko/src2/eq.js\"></script>";} ?>
<?php if(is_page_template('template-eq.php')){echo "<script src=\"/wp-content/themes/Sanko/src2/eq.js\"></script>";} ?>
<?php if(is_front_page()){echo "<script src=\"/wp-content/themes/Sanko/src2/center.js\"></script>";} ?>
<?php if(is_front_page()){echo "<script src=\"/wp-content/themes/Sanko/src/js/index.min.js\"></script>";} ?>
<script async src="/wp-content/themes/Sanko/src2/sendMail.js"></script>
<script async src="/wp-content/themes/Sanko/src2/filterBlog.js"></script>

<script>
    var items = document.querySelectorAll('.menu__filter');
    for(i=0;i<items.length;i++){
        if(items[i].querySelector('.menu__filter-body')==null){
            if(items[i].querySelector('.menu__filter-icon')!=null){
                items[i].querySelector('.menu__filter-icon').style.display = 'none';
            }
        }
    }
    var items = document.querySelectorAll('.menu__filter');
    for(i=0;i<items.length;i++){
        if(items[i].querySelector('.header__filter-body')==null){
            if(items[i].querySelector('.header__filter-icon')!=null){
                items[i].querySelector('.header__filter-icon').style.display = 'none';
            }
        }
    }
</script>
<?php wp_footer(); ?>

</body>
</html>
