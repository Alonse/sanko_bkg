<?php
function true_include_myscript() {
    wp_enqueue_script('jquery');

    if(is_page('template-about-me.php')){
        wp_enqueue_script( 'about-me', BASE_URL . '/src/js/about.min.js');
    }
    if(is_page_template('template-blog.php')){
        wp_enqueue_script( 'center-eq', BASE_URL . '/src/js/center.min.js');
    }
    if(is_page_template('template-rules.php')){
        wp_enqueue_script( 'pravila-onlajn-oplaty', BASE_URL . '/src/js/pattern.min.js');
    }
    if(is_404()){
        wp_enqueue_script( '404', BASE_URL . '/src/js/page404.min.js');
    }
    if(is_page_template('template-eq.php') || is_page_template('template-reclamation-leaders.php')){
        wp_enqueue_script( 'tabsClick', BASE_URL . '/src2/tabsClick.js');
    }
    if(is_page_template('template-reclamation-leaders.php')){
        wp_enqueue_script( 'leader', BASE_URL . '/src/js/leaders.min.js');
    }
    wp_enqueue_script( 'event', BASE_URL . '/src/js/event.min.js');
}

add_action( 'wp_enqueue_scripts', 'true_include_myscript' );


function twentytwelve_scripts_styles(){

    wp_register_style( 'style', BASE_URL . '/style.css', array(), '1.2', 'screen');

    wp_register_style( 'common-style', BASE_URL . '/src/css/common.min.css', array(), '1.2', 'screen');
    wp_register_style( 'index-style', BASE_URL . '/src/css/index.min.css', array(), '1.2', 'screen');
    wp_register_style( 'contacts-style', BASE_URL . '/src/css/contacts.min.css', array(), '1.2', 'screen');
    wp_register_style( 'feedback-style', BASE_URL . '/src/css/feedback.min.css', array(), '1.2', 'screen');
    wp_register_style( 'center-style', BASE_URL . '/src/css/center.min.css', array(), '1.2', 'screen');
    wp_register_style( '404-style', BASE_URL . '/src/css/page404.min.css', array(), '1.2', 'screen');
    wp_register_style( 'article-style', BASE_URL . '/src/css/article.min.css', array(), '1.2', 'screen');
    wp_register_style( 'pattern-style', BASE_URL . '/src/css/pattern.min.css', array(), '1.2', 'screen');
    wp_register_style( 'event-style', BASE_URL . '/src/css/event.min.css', array(), '1.2', 'screen');

    wp_enqueue_style( 'style');
    wp_enqueue_style( 'common-style');
    if (is_page('contacts')){
        wp_enqueue_style( 'contacts-style');
    }
    if(is_front_page()){
        wp_enqueue_style( 'index-style');
    }
    if (is_page('otzyvy')){
        wp_enqueue_style( 'feedback-style');
    }
    if(is_page_template('template-blog.php')){
        wp_enqueue_style( 'center-style');
    }
    if (is_404()){
        wp_enqueue_style( '404-style');
    }
    if (is_single() || is_page_template('template-rules.php')){
        wp_enqueue_style( 'article-style');
    }
    if (is_page_template('template-rules.php')){
        wp_enqueue_style('pattern-style');
    }
        wp_enqueue_style( 'event-style');

}

add_action( 'wp_enqueue_scripts', 'twentytwelve_scripts_styles', 1 );




