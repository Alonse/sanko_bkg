<?php
function the_breadcrumb(){

    $pageNum = ( get_query_var('paged') ) ? get_query_var('paged') : 1;


    if( is_front_page() ){

        if( $pageNum > 1 ) {
            echo '<a href="' . site_url() . '">Главная</a>' . $pageNum . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }

    } else {

        echo '<a href="' . site_url() . '">Главная</a>';


        if( is_single() ){ // записи

            the_category(', ');
            echo "<a href='#'>";
            the_title();
            echo "</a>";

        } elseif ( is_page() ){ // страницы WordPress
            global $post;
            // если у текущей страницы существует родительская
//            if ( $post->post_parent ) {
//
//                $parent_id  = $post->post_parent; // присвоим в переменную
//                $breadcrumbs = array();
//
//                while ( $parent_id ) {
//                    $page = get_page( $parent_id );
//                    $breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
//                    $parent_id = $page->post_parent;
//                }
//
//                echo join( array_reverse( $breadcrumbs ) );
//
//            }
            echo  '<a href="#">';
            the_title();
            echo '</a>';

        } elseif ( is_category() ) {

            single_cat_title();

        } elseif( is_tag() ) {

            single_tag_title();

        } elseif ( is_day() ) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' ;
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F')   . '</a>';
            echo get_the_time('d');

        } elseif ( is_month() ) {

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' ;
            echo get_the_time('F');

        } elseif ( is_year() ) {

            echo get_the_time('Y');

        } elseif ( is_author() ) {

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $pageNum > 1 ) { // номер текущей страницы
            echo ' (' . $pageNum . '-я страница)';
        }

    }

}