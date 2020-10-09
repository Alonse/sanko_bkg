<?php
/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */

 ?>
 <div class="woocommerce-MyAccount-content">
	<?php
		// do_action( 'woocommerce_account_navigation' );
		/**
		 * My Account content.
		 *
		 * @since 2.6.0
		 */
		// do_action( 'woocommerce_account_content' );
	?>
</div>
 <?$user=get_userdata(get_current_user_id());
print_r(get_current_user_id());
?>

<style>
	.account__wrapper .optional{
		display:none;
	}
	.account__wrapper .required{
		display:none;
	}
	.hub{
		display:none;
	}
</style>

<div class="account">
          <div class="account__inner">
            <div class="container">
              <div class="breadcrumbs">
                <div class="breadcrumbs__inner"><?php the_breadcrumb(); ?>
                </div>
              </div>
              <form class="account__wrapper" class="woocommerce-EditAccountForm edit-account" action="" method="post" <?php do_action( 'woocommerce_edit_account_form_tag' ); ?>><img class="account__logo-check" src="/wp-content/themes/Sanko/src/icons/logo-check.svg" alt="" role="presentation"/><span class="account__title">личный кабинет</span>
				  <?php do_action( 'woocommerce_edit_account_form_start' ); ?>
				  	<div style="display:none">
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_first_name" id="account_first_name" autocomplete="given-name" value="<?php echo 'user' ?>" />
						<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_last_name" id="account_last_name" autocomplete="family-name" value="<?php echo 'user' ?>" />
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="account_display_name" id="account_display_name" value="<?php echo esc_attr( $user->display_name ); ?>" /> <span><em><?php esc_html_e( 'This will be how your name will be displayed in the account section and in reviews', 'woocommerce' ); ?></em></span>
					</div>
			 	<div class="account__list">
					 
				 <?php do_action( 'woocommerce_edit_account_form' ); ?>
                  <div class="account__item form-row disable">
                    <!-- <div class="account__item-wrapper"> -->
                      <label class="account__item-label">Электронная почта
					
						</label>
					<!-- </div> -->
					<span class="woocommerce-input-wrapper"><input type="email" class="woocommerce-Input woocommerce-Input--email input-text account__item-input" name="account_email" id="account_email" autocomplete="email" value="<?php echo esc_attr( $user->user_email ); ?>" /></span>
				  </div>
				  <?/*<p class="account__item">
				  	<label for="password_1" class="account__item-label "><?php esc_html_e( 'New password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				  	<input type="password" class="woocommerce-Input woocommerce-Input--text input-text account__item-input" name="password_1" id="password_1" autocomplete="new-password" />
				  </p>
				  <p class="account__item">
				  	<label for="password_2" class="account__item-label"><?php esc_html_e( 'Re-enter new password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				  	<input type="password" class="woocommerce-Input woocommerce-Input--text input-text account__item-input" name="password_2" id="password_2" autocomplete="new-password" />
				  </p>*/?>
                  
				</div>
				
				<?php wp_nonce_field( 'save_account_details', 'save-account-details-nonce' ); ?>
		<button type="submit" class="woocommerce-Button account__button" name="save_account_details" value="<?php esc_attr_e( 'Save changes', 'woocommerce' ); ?>"><?php esc_html_e( 'Сохранить', 'woocommerce' ); ?></button>
		<input type="hidden" name="action" value="save_account_details" />
		<?php do_action( 'woocommerce_edit_account_form_end' ); ?>
			  </form>
			  <?php do_action( 'woocommerce_after_edit_account_form' ); ?>
              <div class="account__history">
                <div class="account__history-wrapper"><span class="account__history-title">история заказов</span><img src="/wp-content/themes/Sanko/src/icons/active.svg" alt="" role="presentation"/>
                </div>
                <div class="account__history-list">
					<?php
				$my_orders_columns = apply_filters(
	'woocommerce_my_account_my_orders_columns',
	array(
		'order-number'  => esc_html__( 'Order', 'woocommerce' ),
		'order-date'    => esc_html__( 'Date', 'woocommerce' ),
		'order-status'  => esc_html__( 'Status', 'woocommerce' ),
		'order-total'   => esc_html__( 'Total', 'woocommerce' ),
		'order-actions' => '&nbsp;',
	)
);

$customer_orders = get_posts(
	apply_filters(
		'woocommerce_my_account_my_orders_query',
		array(
			'numberposts' => $order_count,
			'meta_key'    => '_customer_user',
			'meta_value'  => get_current_user_id(),
			'post_type'   => wc_get_order_types( 'view-orders' ),
			'post_status' => array_keys( wc_get_order_statuses() ),
		)
	)
);

if ( $customer_orders ) : ?>
			<?php
			foreach ( $customer_orders as $customer_order ) :
				$order      = wc_get_order( $customer_order ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
				$item_count = $order->get_item_count();
				?>
						<?php $items = $order->get_items();
						 foreach ( $items as $item ) {?>

						<div class="account__history-item"><span class="account__history-item-title"><?php echo $item['name']?></span>
        				  <div class="account__history-item-content">
        				    <div class="account__history-item-content-text"><span class="account__history-item-content-text-title">Место проведения</span>
        				      <div class="account__history-item-content-text-wrapper">
        				        <div class="account__history-item-image-wrapper"><img class="account__history-item-image" src="/wp-content/themes/Sanko/src/icons/location.svg" alt="" role="presentation"/>
        				        </div><span class="account__history-item-desc"><?php echo carbon_get_post_meta($item['product_id'], 'event_loc'); ?></span>
        				      </div>
        				    </div>
        				    <div class="account__history-item-content-text"><span class="account__history-item-content-text-title">Дата</span>
        				      <div class="account__history-item-content-text-wrapper">
        				        <div class="account__history-item-image-wrapper"><img class="account__history-item-image" src="/wp-content/themes/Sanko/src/icons/date.svg" alt="" role="presentation"/>
        				        </div><span class="account__history-item-desc"><?php echo carbon_get_post_meta($item['product_id'], 'crb_event_start_date'); ?></span>
        				      </div>
        				    </div>
        				    <div class="account__history-item-content-text"><span class="account__history-item-content-text-title">Время</span>
        				      <div class="account__history-item-content-text-wrapper">
        				        <div class="account__history-item-image-wrapper"><img class="account__history-item-image" src="/wp-content/themes/Sanko/src/icons/time.svg" alt="" role="presentation"/>
        				        </div><span class="account__history-item-desc"><?php echo carbon_get_post_meta($item['product_id'], 'start_time'); ?> – <?php echo carbon_get_post_meta($item['product_id'], 'end_time'); ?></span>
        				      </div>
        				    </div>
        				    <div class="account__history-item-content-text"><span class="account__history-item-content-text-title">Количество билетов</span>
        				      <div class="account__history-item-content-text-wrapper">
        				        <div class="account__history-item-image-wrapper"><img class="account__history-item-image" src="/wp-content/themes/Sanko/src/icons/ticket.svg" alt="" role="presentation"/>
        				        </div><span class="account__history-item-desc">
									<?php
										echo wp_kses_post( sprintf( _n( '%2$s', '%2$s', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) );
									?>
								</span>
        				      </div>
        				    </div>
        				    <div class="account__history-item-content-text"><span class="account__history-item-content-text-title">Сумма заказа</span>
        				      <div class="account__history-item-content-text-wrapper"><span class="account__history-item-desc">
								  <?php echo wp_kses_post( sprintf( _n( '%1$s ', '%1$s', $item_count, 'woocommerce' ), $order->get_formatted_order_total(), $item_count ) ); ?>
							  </span>
        				      </div>
        				    </div>
        				  </div>
        				</div>
						<?php } ?>		
			<?php endforeach; ?>
<?php endif; ?>
				

<?php do_action( 'woocommerce_after_account_orders', $has_orders ); ?>
					
		<script>
			if(document.querySelector('.form-row')!=null){
				var formRowLabel = document.querySelectorAll('.form-row label');
				for(var i=0;i<formRowLabel.length;i++){
					formRowLabel[i].innerHTML = formRowLabel[i].innerHTML+'<span class="account__item-change">изменить</span>';
				}

				var formRow = document.querySelectorAll('.form-row');
				for(var i=0;i<formRow.length;i++){
					formRow[i].classList.add('disable');
				}

				var formRowChange = document.querySelectorAll('.account__item-change');
				console.log(formRowChange);
				for(var i=0;i<formRowChange.length;i++){
					formRowChange[i].onclick = function(){
						this.parentElement.parentElement.classList.remove('disable');
					}
				}
			}
		</script>
</div>