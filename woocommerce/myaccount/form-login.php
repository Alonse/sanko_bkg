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
<style>
	.hub{
		display:none;
	}
</style>
<?php
if(isset($_GET["action"]) && $_GET["action"] == "register") {
?>

<div class="signup">
          <div class="signup__inner">
            <div class="container">
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                </div>
              </div>
              <form method="post" class="signup__wrapper woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?>><img class="signup__logo-check" src="/wp-content/themes/Sanko/src/icons/logo-check.svg" alt="" role="presentation"/><span class="signup__title">Регистрация</span>
                <div class="signup__wrapper-content">
                  <div class="signup__links"><a class="signup__link" href="/my-account/">вход (уже зарегистрирован)</a><a class="signup__link" href="/my-account/lost-password/">забыл пароль</a>
                  </div>
                  <div class="signup__list list_error_cont">
                  <?if($_SESSION["addcart"]=='1'){?>
					<ul class="woocommerce-error" role="alert">
					<li>Для оформления покупки нужно войти или зарегистрироваться на сайте.		</li>
					</ul>
				<?}?>
                    
				  <?php do_action( 'woocommerce_register_form_start' ); ?>
          <?php do_action( 'woocommerce_register_form' ); ?>
          <style>
            .woocommerce-privacy-policy-text{
              display:none;
            }
          </style>
                    <div class="signup__item">
                      <div class="signup__item-wrapper">
                        <label class="signup__item-label">Электронная почта*
                        </label>
					  </div>
					  <!-- <input class="signup__item-input" name="email" type="text" placeholder="...@..."/> -->
					  <input type="email" class="woocommerce-Input woocommerce-Input--text input-text signup__item-input" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                    </div>
                    
                    <div class="signup__item">
                      <div class="signup__item-wrapper">
                        <label class="signup__item-label">Пароль
                        </label>
					  </div>
					  <input type="password" class="woocommerce-Input woocommerce-Input--text input-text signup__item-input pass1" name="password" id="reg_password" autocomplete="new-password" />
                    </div>
                    <div class="signup__item">
                      <div class="signup__item-wrapper">
                        <label class="signup__item-label">повтор пароля*
                        </label>
                      </div><input class="signup__item-input pass2" name="passwordConform" type="password" placeholder="********"/>
                      <label class='error pass_two_er' style="display:none">Введенные пароли не совпадают</label>
                    </div>
                    <div class="signup__agreement">
                      <label class="signup__container check">Cогласен на обработку данных
                        <input type="checkbox" name="agree" checked="checked" id="checkbox_check" required><span class="signup__checkmark"></span>
                      </label>
                      <label class="signup__container" id="news">Cогласен на рассылку для компании
                        <input type="checkbox" name="news" checked="checked" id="checkbox_check2" required><span class="signup__checkmark"></span>
                      </label>
					</div>
                    <?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
                    

					<button type="submit" class="signup__button" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
                  </div>
                  <div class="signup__social"><span class="signup__title-item">Через соцсети</span>
                    <div class="signup__social-wrapper">
                        <a href="https://denissanko.com/wp-login.php?loginSocial=facebook" class="signin__soc-item" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">
                        	<img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/fb.svg" alt="" role="presentation"/>
                        </a>
                        <a href="https://denissanko.com/wp-login.php?loginSocial=google" class="signin__soc-item" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">
	                        <img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/gg.svg" alt="" role="presentation"/>
                        </a>
                    </div>
                  </div>
                  <?php do_action( 'woocommerce_register_form_end' ); ?>
                </div>
              </form>
            </div>
          </div>
        </div>
<?}else{?>
	<div class="signin">
          <div class="signin__inner">
            <div class="container">
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                </div>
              </div>
              <form class="signin__wrapper" method="post"><img class="signin__logo-check" src="/wp-content/themes/Sanko/src/icons/logo-check.svg" alt="" role="presentation"/><span class="signin__title">Вход</span>
                <div class="signin__wrapper-content">
                  <div class="signin__links"><a class="signin__link" href="/my-account/?action=register">нужна регистрация</a><a class="signin__link" href="/my-account/lost-password/">забыл пароль</a>
                  </div>
                  <div class="signin__list list_error_cont">
                  <?if($_SESSION["addcart"]=='1'){?>
					<ul class="woocommerce-error" role="alert">
					<li>Для оформления покупки нужно войти или зарегистрироваться на сайте.		</li>
					</ul>
				<?}?>
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
                    <button type="submit" class="woocommerce-button woocommerce-form-login__submit signin__button" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                  </div>
                  <div class="signin__social"><span class="signin__title-item">Через соцсети</span>
                  <div class="signup__social-wrapper">
                        <a href="https://denissanko.com/wp-login.php?loginSocial=facebook" class="signin__soc-item" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="facebook" data-popupwidth="475" data-popupheight="175">
                        	<img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/fb.svg" alt="" role="presentation"/>
                        </a>
                        <a href="https://denissanko.com/wp-login.php?loginSocial=google" class="signin__soc-item" data-plugin="nsl" data-action="connect" data-redirect="current" data-provider="google" data-popupwidth="600" data-popupheight="600">
	                        <img class="signin__soc-item-image" src="/wp-content/themes/Sanko/src/icons/gg.svg" alt="" role="presentation"/>
                        </a>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        
<?}?>
<script>
  if(document.querySelector('.woocommerce-error')!=null){
    document.querySelector('.list_error_cont').prepend(document.querySelector('.woocommerce-error'));
  }
  if(document.querySelector('.pass1')!=null){
    document.querySelector('.pass2').oninput = function(){
      if(document.querySelector('.pass1').value != document.querySelector('.pass2').value){
        document.querySelector('.pass_two_er').style.display = 'block';
      }else{
        document.querySelector('.pass_two_er').style.display = 'none';
      }
    }
  }
</script>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
