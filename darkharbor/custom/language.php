<?php
/* languages customizations
*/
	if ( !function_exists('reach_change_theme_text') ){
		function reach_change_theme_text( $translated_text, $text, $domain ) {
			 /* if ( is_singular() ) { */
			    switch ($domain) {
					case 'woocommerce':
						switch ( $translated_text ) {
							 case 'Order received':
								$translated_text = __( 'Payment received:',  'woocommerce'  );
								break;
							case 'Order number:' :
								 $translated_text = __( 'Payment Number:',  'woocommerce'  );
								 break;
							case 'Your order' :
							    $translated_text = __( 'Your Payment',  'woocommerce'  );
							    break;
							case 'Your order' :
									 $translated_text = __( 'Your Payment',  'woocommerce'  );
									 break;
							case 'Place order' :
							  $translated_text = __( 'Make Payment',  'woocommerce'  );
							  break;
							case 'Product' :
								$translated_text = __( 'Payment',  'woocommerce'  );
								break;
							case 'Order details':
								$translated_text = __( 'Payment details',  'woocommerce'  );
								break;
							case 'Thank you. Your order has been received.':
								$translated_text = __( 'Thank you. Your payment has been received.',  'woocommerce'  );
								break;
				        }
						break;
						case 'oshin':
							switch ( $translated_text ) {
					            case 'Under :' :
					                $translated_text = '';
					                break;
					           /*case 'Add to cart':
					            	$translated_text = __( 'Continue to Checkout',  'woocommerce'  );
					            	break;*/
					        }
							break;
					default:
					 /* switch ( $translated_text ) {
				          case 'Under :' :
				                $translated_text = __( '',  $domain  );
				                break;
				         	case 'Type here...':
				            	$translated_text = __( 'Search...',  $domain  );
				            	break;
				            case 'BLOG CATEGORIES':
				            	$translated_text = __( 'Found in',  $domain  );
				            	break;
				            case 'Share this post:':
				            	$translated_text = __('Share', ' $domain );
				            	break;
				        } */

				}

	    	return $translated_text;
		} // end function reach_change_theme_text
		add_filter( 'gettext', 'reach_change_theme_text', 20, 3 );
	} // end if not exists reach_change_theme_text
?>
