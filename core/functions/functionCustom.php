<?php

if (!function_exists('mytheme_setup')):
    function mytheme_setup(){
        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(1200, 9999);
    }
endif;
add_action('after_setup_theme', 'mytheme_setup');
// color

function my_styles_method() {
    $color      = carbon_get_post_meta(get_the_ID(),'colors_el');
    $colorDop      = carbon_get_post_meta(get_the_ID(),'colors_dop_el');

    $custom_css = ":root{ 
        --main-color: $color;
        --main-color_opacity:".$colorDop."80;};";
    wp_add_inline_style( 'common-style', $custom_css );

}

add_action( 'wp_enqueue_scripts', 'my_styles_method' );

// viber link

function check_mobile_device() {
    $mobile_agent_array = array('ipad', 'iphone', 'android', 'pocket', 'palm', 'windows ce', 'windowsce', 'cellphone', 'opera mobi', 'ipod', 'small', 'sharp', 'sonyericsson', 'symbian', 'opera mini', 'nokia', 'htc_', 'samsung', 'motorola', 'smartphone', 'blackberry', 'playstation portable', 'tablet browser');
    $agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    foreach ($mobile_agent_array as $value) {
        if (strpos($agent, $value) !== false)
            return true;
    };
    return false;
}


function true_load_posts(){
    $args = unserialize( stripslashes( $_POST['query'] ) );
    $args['paged'] = $_POST['page'] + 1;
    $args['post_status'] = 'publish';
    query_posts( $args );
    if( have_posts() ) :
        while( have_posts() ): the_post();
            ?>
            <div class="center-filter__result-item" style="background-image: url(<?php echo wp_get_attachment_image_url( get_post_thumbnail_id(), 'full') ?>);">
                <div class="center-filter__name-inner">
                    <img class="center-filter__name-icon" src="/wp-content/themes/Sanko/src/icons/audio-icon.svg" alt="" role="presentation"/>
                    <div class="center-filter__name"><?php the_tags(''); ?></div>
                </div>
                <div class="center-filter__description"><?php the_title(); ?></div>
            </div>
        <?php
        endwhile;
    endif;
    die();
}
add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');


function true_remove_category_from_category($cat_url) {
	$cat_url = str_replace('/category', '', $cat_url);
	return $cat_url;
}
add_filter('category_link', 'true_remove_category_from_category', 1, 1);