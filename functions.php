<?php
/**
 * Sanko functions and definitions

 *
 * @package WordPress
 * @subpackage Sanko
 * @since 1.0
 * @author Mastak Studio
 */

/**
 * Sanko only works in WordPress 4.7 or later.
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

add_filter('show_admin_bar', '__return_false');

// constants
define('THEME_NAME', get_template());
define('PREFIX', 'Sanko' );
define('BASE_URL', '/wp-content/themes/' . THEME_NAME);

// require function themes
require "core/carbonfields/carbonfields.php";
require "core/carbonfields/functionEq.php";
require "core/carbonfields/functionLeaders.php";
require "core/carbonfields/functionDeyatelnost.php";
require "core/carbonfields/functionAbout.php";
require "core/carbonfields/functionEventCarbon.php";

require "core/functions/breadcrumbs.php";
require "core/functions/functionEvents.php";
require "core/functions/functionMenu.php";
require "core/functions/functionAddScript.php";
require "core/functions/functionCustom.php";


add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
// Все $fields в этой функции будут пропущены через фильтр
function custom_override_checkout_fields( $fields ) {
unset($fields['billing']['billing_company']);
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_country']);
unset($fields['billing']['billing_state']);
unset($fields['billing']['billing_postcode']);
unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_city']);
unset($fields['billing']['billing_phone']);
return $fields;
}


add_action( 'wp_print_scripts', 'remove_wc_password_meter', 100 );

function remove_wc_password_meter() {

wp_dequeue_script('wc-password-strength-meter');

}