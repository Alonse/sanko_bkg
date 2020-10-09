<?php
/**
 * Template name: auth
 */
get_header();
?>
<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="signin">
          <div class="signin__inner">
            <div class="container">
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><a href="#">Главная</a><a href="#">Направления деятельности</a><a href="#">Развитие лидеров</a>
                </div>
              </div>
              <form class="woocommerce-form woocommerce-form-login login signin__wrapper" method="post"><img class="signin__logo-check" src="/wp-content/themes/Sanko/src/icons/logo-check.svg" alt="" role="presentation"/><span class="signin__title">Вход</span>
                <div class="signin__wrapper-content">
                  <div class="signin__links"><a class="signin__link" href="/registracziya/">нужна регистрация</a><a class="signin__link" href="/my-account/lost-password/">забыл пароль</a>
                  </div>
                  <div class="signin__list">
                    <div class="signin__item">
                      <div class="signin__item-wrapper">
                        <label class="signin__item-label">Логин или электронная почта
                        </label>
                      </div>
                      <input type="text" class="woocommerce-Input woocommerce-Input--text input-text signin__item-input" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    </div>
                    <div class="signin__item">
                      <div class="signin__item-wrapper">
                        <label class="signin__item-label">Пароль
                        </label>
                      </div>
                      <input class="woocommerce-Input woocommerce-Input--text input-text signin__item-input" type="password" name="password" id="password" autocomplete="current-password" />
                    </div>
                    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                    <button type="submit" class="woocommerce-button button woocommerce-form-login__submit signin__button" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                  </div>
                  <div class="signin__social"><span class="signin__title-item">Через соцсети</span>
                    <div class="signin__social-wrapper"><a class="signin__soc-item" href="#"><img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/fb.svg" alt="" role="presentation"/></a><a class="signin__soc-item" href="#"><img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/gg.svg" alt="" role="presentation"/></a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <h2><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>

<form class="woocommerce-form woocommerce-form-login login" method="post">

    <?php do_action( 'woocommerce_login_form_start' ); ?>

    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="username"><?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
    </p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <label for="password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
        <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" autocomplete="current-password" />
    </p>

    <?php do_action( 'woocommerce_login_form' ); ?>

    <p class="form-row">
        <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
            <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
        </label>
        <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
        <button type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
    </p>
    <p class="woocommerce-LostPassword lost_password">
        <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
    </p>

    <?php do_action( 'woocommerce_login_form_end' ); ?>

</form>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
<?php
get_footer();
