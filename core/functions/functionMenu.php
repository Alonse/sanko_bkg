<?php
// register menu
add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header_menu' => 'Верхнее меню',
        'footer_menu' => 'Нижнее меню',
        'mobile_menu' => 'Мобильное меню',
    ] );
} );

// header menu

class Header_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth + 1);
        $output .= "\n$indent<div class=\"menu__filter-body\">".'<img class="menu__green-button" src="/wp-content/themes/Sanko/src/icons/gray-button.svg" alt="" role="presentation"/>'."<ul class=\"menu__filter-list\">\n";
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;


        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        if ($depth == 0) {
            $classes[] = 'menu-item-' . $item->ID . ' menu__filter ';
        } elseif($depth >= 1) {
            $classes[] = 'menu-item-' . $item->ID . ' menu__filter-item';
        }



        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . '"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';


            $output .= $indent . '<li' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        if($depth == 0) {


            $item_output = $args->before;
            $item_output .= '<div class="menu__filter-header">';
            $item_output .= '<a href="'.$item->url.'" class="menu__filter-title">';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= '
                  <div class="menu__filter-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="8" height="5" viewBox="0 0 8 5" fill="none">
                            <path d="M7 1L4 4L1 0.999999" stroke="#797E84" stroke-width="1.3" stroke-linecap="round">
                            </path>
                          </svg>
                        </div>';
            $item_output .= '</div>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' .$attributes. '>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
}

// footer menu

class Footer_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array())
    {

        $indent = str_repeat("\t", $depth + 1);
        $output .= "\n$indent<div class=\"footer__filter-body\">"."<ul id='menu-footer-menu' class=\"footer__filter-list\">\n";
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 )
    {
        global $wp_query;


        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array)$item->classes;
        if ($depth == 0) {
            $classes[] = 'menu-item-' . $item->ID . ' footer__filter ';
        } elseif ($depth >= 1) {
            $classes[] = 'menu-item-' . $item->ID . ' footer__filter-item';
        }


        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';


        $output .= $indent . '<div' . $class_names . '>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
        if($depth == 0) {
            $item_output = $args->before;
            $item_output .= '<div class="footer__filter-header">';
            $item_output .= '<div class="footer__filter-title">';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</div>';
            $item_output .= '<div class="footer__filter-icon">
                          <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                            <path class="footer__path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke-width="1.3" stroke-linecap="round">
                            </path>
                          </svg>
                        </div>';
            $item_output .= '</div>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' .$attributes. '>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    public function end_el( &$output, $item, $depth = 0, $args = NULL, $id = 0) {


        $output .= "</div>";

    }
}

// mobile menu
class Mobile_Walker_Nav_Menu extends Walker_Nav_Menu {

    function start_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth + 1);
        $output .= "\n$indent<div class=\"header__filter-body\">"."<ul class=\"header__filter-list\">\n";
    }
    function end_lvl(&$output, $depth = 0, $args = array())
    {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
    function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;


        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        $class_names = $value = '';
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        if ($depth == 0) {
            $classes[] = 'menu-item-' . $item->ID . ' menu__filter ';
        } elseif($depth >= 1) {
            $classes[] = 'menu-item-' . $item->ID . ' header__filter-item';
        }



        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr( $class_names ) . ' header__filter"';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';


        $output .= $indent . '<div' . $id . $value . $class_names .'>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
        $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
        if($depth == 0) {


            $item_output = $args->before;
            $item_output .= '<div class="header__filter-header">';
            $item_output .= '<a href="'.$item->url.'" class="header__filter-title">';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= '<div class="header__filter-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="9" viewBox="0 0 6 9" fill="none">
                      <path class="header__path" d="M1.5 1.5L4.5 4.5L1.5 7.5" stroke-width="1.3" stroke-linecap="round">
                      </path>
                    </svg>
                  </div>';
            $item_output .= '</div>';
            $item_output .= $args->after;
        } else {
            $item_output = $args->before;
            $item_output .= '<a' .$attributes. '>';
            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;
        }

        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }
    public function end_el( &$output, $item, $depth = 0, $args = NULL, $id = 0) {

        $output .= "</div>";

    }
}