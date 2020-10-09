<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */



if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>

<?php
	$firstName = get_user_meta(get_current_user_id(), 'first_name')[0];
	$lastName  = get_user_meta(get_current_user_id(), 'last_name')[0];
	$dolg 	   = get_user_meta(get_current_user_id(), 'dolg')[0];
?>

<style>
	.woocommerce-message{
		display:none!important;
	}
</style>

<div class="checkout">
          <div class="checkout__inner">
            <div class="container">
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                </div>
              </div>
              <div class="checkout__wrapper"><img class="checkout__logo-check" src="/wp-content/themes/Sanko/src/icons/logo-check.svg" alt="" role="presentation"/><span class="checkout__title">оформление заказа</span>
                <div class="checkout__list">
                  <div class="checkout__item"><span class="checkout__item-title">Заказчик</span><span class="checkout__item-desc"><?=$firstName?> <?=$lastName?></span><span class="checkout__item-subdesc"><?=$dolg?></span>
                  </div>
				  <div class="checkout__item"><span class="checkout__item-title">Описание заказа</span>
				  <div class="checkout__item-list">
				  <?php
						do_action( 'woocommerce_review_order_before_cart_contents' );

						foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
							$_product = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
							?>
							<div class="checkout__list-item">
								<span class="checkout__list-item-title">
									<?php
										echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';
									?>
								</span>
                      		</div>
							<?
							if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_checkout_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
								?>
								<div style="display:none" class="<?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">
									
										<?php echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
										<?php echo apply_filters( 'woocommerce_checkout_cart_item_quantity', ' <strong class="product-quantity">' . sprintf( '&times;&nbsp;%s', $cart_item['quantity'] ) . '</strong>', $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
										<?php echo wc_get_formatted_cart_item_data( $cart_item ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									
										<?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
									
								</div>
								<?php
							}
						}
					
						do_action( 'woocommerce_review_order_after_cart_contents' );
						$productID = $_product->get_id();
					?>
                      <div class="checkout__list-item">
                        <div class="checkout__list-item-image-wrapper"><img class="checkout__list-item-image" src="/wp-content/themes/Sanko/src/icons/location.svg" alt="" role="presentation"/>
                        </div><span class="checkout__list-item-desc"><?php echo carbon_get_post_meta($productID, 'event_loc'); ?></span>
                      </div>
                      <div class="checkout__list-item">
                        <div class="checkout__list-item-image-wrapper"><img class="checkout__list-item-image" src="/wp-content/themes/Sanko/src/icons/date.svg" alt="" role="presentation"/>
                        </div><span class="checkout__list-item-desc"><?php echo carbon_get_post_meta($productID, 'crb_event_start_date'); ?></span>
                      </div>
                      <div class="checkout__list-item">
                        <div class="checkout__list-item-image-wrapper"><img class="checkout__list-item-image" src="/wp-content/themes/Sanko/src/icons/time.svg" alt="" role="presentation"/>
                        </div><span class="checkout__list-item-desc"><?php echo carbon_get_post_meta($productID, 'start_time'); ?> – <?php echo carbon_get_post_meta($productID, 'end_time'); ?></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="checkout__price check-cart-cont">
                  
				</div>
				<form name="checkout" method="post" class="woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">
					<?php if ( $checkout->get_checkout_fields() ) : ?>

<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

<div class="col2-set" id="customer_details" style="display:none">
	<div class="">
		<?php do_action( 'woocommerce_checkout_billing' ); ?>
	</div>
	<script>
	   document.querySelector('#billing_first_name').value = '<?=$firstName?>';
	   document.querySelector('#billing_last_name').value = '<?=$lastName?>';
	</script>
</div>
<?php do_action( 'woocommerce_checkout_shipping' ); ?>
<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>

<?php endif; ?>

<?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

<div id="order_review" class="woocommerce-checkout-review-order">
<?php do_action( 'woocommerce_checkout_order_review' ); ?>
</div>

<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
					  
					
				</form>
              </div>
            </div>
          </div>
        </div>
							
		

<script>
	window.onload = function(){
		document.querySelector('.check-cart-cont').appendChild(document.querySelector('.woocommerce-cart-form'));
	}
</script>
<style>
.hub{
	display:none;
}
</style>
<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
