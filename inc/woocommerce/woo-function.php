<?php 
/**
 * Perform all main WooCommerce configurations for this theme
 *
 * @package  Open Mart WordPress theme
 */
// If plugin - 'WooCommerce' not exist then return.
if ( ! class_exists( 'WooCommerce' ) ){
     return;
}

if ( ! function_exists( 'is_plugin_active' ) ){
         require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}

/***********************************************/
//Sort section Woocommerce category filter show
/***********************************************/
function open_mart_add_to_cart_url($product){
 $cart_url =  apply_filters( 'woocommerce_loop_add_to_cart_link',
    sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button th-button %s %s"><span>%s</span></a>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_attr( $product->get_sku() ),
        esc_attr( isset( $quantity ) ? $quantity : 1 ),
        $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
        $product->is_purchasable() && $product->is_in_stock() && $product->supports( 'ajax_add_to_cart' ) ? 'ajax_add_to_cart' : '',
        esc_html( $product->add_to_cart_text() )
    ),$product );
 return $cart_url;
}

/**********************************/
//Shop Product Markup
/**********************************/
if ( ! function_exists( 'open_mart_product_meta_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_meta_start(){
    echo '<div class="thunk-product-wrap"><div class="thunk-product">';
  }
}
if ( ! function_exists( 'open_mart_product_meta_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_meta_end(){

    echo '</div></div>';
  }
}
/**********************************/
//Shop Product Image Markup
/**********************************/
if ( ! function_exists( 'open_mart_product_image_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_image_start(){
    echo '<div class="thunk-product-image">';
  }
}
if ( ! function_exists( 'open_mart_product_image_end' ) ){

  /**
   * Thumbnail wrap start.
   */
    function open_mart_product_image_end(){
    echo woocommerce_template_loop_rating();
    do_action('quickview');
    echo '</div>';
  }
}

if ( ! function_exists( 'open_mart_product_content_start' ) ){
  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_content_start(){
    echo '<div class="thunk-product-content">';
  }
}
if ( ! function_exists( 'open_mart_product_content_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_content_end(){

    echo '</div>';
  }
}
 /**
   * Thunk-product-hover start.
   */
 if ( ! function_exists( 'open_mart_product_hover_start' ) ){
  function open_mart_product_hover_start(){
    echo'<div class="thunk-product-hover">';
  }
}
if ( ! function_exists( 'open_mart_product_hover_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_product_hover_end(){
    
    echo '</div>';
  }
}

if ( ! function_exists( 'open_mart_shop_content_start' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_shop_content_start(){
    $viewshow = get_theme_mod('open_mart_prd_view','grid-view');
    if($viewshow == 'grid-view'){
    echo '<div id="shop-product-wrap" class="thunk-grid-view">';
    }else{
    echo '<div id="shop-product-wrap" class="thunk-list-view">';
    }
  }
}

if ( ! function_exists( 'open_mart_shop_content_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_shop_content_end(){
    
    echo '</div>';
  }
}
/**
* Shop customization.
*
* @return void
*/
add_action( 'woocommerce_before_shop_loop_item', 'open_mart_product_meta_start', 10);
add_action( 'woocommerce_after_shop_loop_item', 'open_mart_product_meta_end', 12 );
add_action( 'woocommerce_before_shop_loop_item_title', 'open_mart_product_content_start',20);
add_action( 'woocommerce_after_shop_loop_item_title', 'open_mart_product_content_end', 20 );
add_action( 'woocommerce_after_shop_loop_item_title', 'open_mart_product_hover_start',50);
add_action( 'woocommerce_after_shop_loop_item', 'open_mart_product_hover_end',20);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open',20);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_open',0);
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_product_link_close',1);
add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price',0);
add_action( 'woocommerce_before_shop_loop_item_title', 'open_mart_product_image_start', 0);
add_action( 'woocommerce_before_shop_loop_item_title', 'open_mart_product_image_end',10);
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_show_product_sale_flash',4);
add_action( 'woocommerce_after_shop_loop_item', 'open_mart_whish_list_both',11);
add_action( 'woocommerce_after_shop_loop_item', 'open_mart_add_to_compare_fltr_single',11);

add_action( 'woocommerce_before_shop_loop', 'open_mart_shop_content_start',1);
add_action( 'woocommerce_after_shop_loop', 'open_mart_shop_content_end',1);

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );
remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action('woocommerce_init','th_compare_add_action_shop_list');

//To integrate with a theme, please use bellow filters to hide the default buttons. hide default wishlist button on product archive page
add_filter( 'woosw_button_position_archive', function() {
    return '0';
} );

//hide default compare button on product archive page
add_filter( 'filter_wooscp_button_archive', function() {
    return '0';
} );

/***************/
// single page
/***************/
if ( ! function_exists( 'open_mart_single_summary_start' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_single_summary_start(){
    
    echo '<div class="thunk-single-product-summary-wrap">';
  }
}
if( ! function_exists( 'open_mart_single_summary_end' ) ){

  /**
   * Thumbnail wrap start.
   */
  function open_mart_single_summary_end(){
    
    echo '</div>';
  }
}
add_action( 'woocommerce_before_single_product_summary', 'open_mart_single_summary_start',0);
add_action( 'woocommerce_after_single_product_summary', 'open_mart_single_summary_end',0);


/*********************************/
/** whishlist and compare both **/
/*******************************/

if ( ! function_exists('open_mart_whish_list_both')){
 function open_mart_whish_list_both($pid){
      if( class_exists( 'YITH_WCWL' )){
        open_mart_whish_list($pid);
    }
    elseif( ( class_exists( 'WPCleverWoosw' ))){
     echo do_shortcode('[woosw id='.$pid.']');
    }
}
}

if ( ! function_exists('open_mart_add_to_compare_fltr_both')){
function open_mart_add_to_compare_fltr_both($pid){
  if( ( class_exists( 'th_product_compare' ))){
             open_mart_add_to_compare_fltr($pid);      
                }
                  elseif( ( class_exists( 'WPCleverWoosc' ))){
                     echo do_shortcode('[woosc id='.$pid.']');
                  }
}
}





/************************/
// Th Product Compare
/************************/

function open_mart_add_to_compare_fltr_single($pid){
        if(class_exists(('th_product_compare') )){
    global $product;
    $pid = $product->get_id();
    echo '<div class="thunk-compare"><span class="compare-list"><div class="woocommerce product compare-button">
          <a class="th-product-compare-btn compare" data-th-product-id="'.$pid.'"></a>
          </div></span></div>';

           }
           
}


function open_mart_add_to_compare_fltr($pid){
      if(class_exists(('th_product_compare') )){
    global $product;
    $pid = $product->get_id();
    echo '<div class="thunk-compare"><span class="compare-list"><div class="woocommerce product compare-button">
          <a class="th-product-compare-btn compare" data-th-product-id="'.$pid.'"></a>
          </div></span></div>';

           }elseif( ( class_exists( 'WPCleverWoosc' ))){
           echo '<div class="thunk-compare">'.do_shortcode('[woosc id='.$pid.']').'</div>';
         }

        
}
/**********************/
/** wishlist **/
/**********************/

function open_mart_whish_list_single($pid){
       if( shortcode_exists( 'yith_wcwl_add_to_wishlist' )){
        echo '<div class="thunk-wishlist"><span class="thunk-wishlist-inner">'.do_shortcode('[yith_wcwl_add_to_wishlist icon="fa fa-heart" label="" already_in_wishslist_text="Already" browse_wishlist_text=""]' ).'</span></div>';
       }
}


function open_mart_whish_list($pid){
       if( shortcode_exists( 'yith_wcwl_add_to_wishlist' )){
        echo '<div class="thunk-wishlist"><span class="thunk-wishlist-inner">'.do_shortcode('[yith_wcwl_add_to_wishlist icon="fa fa-heart" label="" already_in_wishslist_text="Already" browse_wishlist_text=""]' ).'</span></div>';
       }
       elseif(( class_exists( 'WPCleverWoosw' ))){
      echo '<div class="thunk-wishlist"><span class="thunk-wishlist-inner">'.do_shortcode('[woosw id='.$pid.']').'</span></div>';
       }
 } 

/**********************/
/** wishlist url**/
/**********************/
function open_mart_whishlist_url(){
$wishlist_page_id =  get_option( 'yith_wcwl_wishlist_page_id' );
$wishlist_permalink = get_the_permalink( $wishlist_page_id );
return $wishlist_permalink ;
}
// shop open
/** My Account Menu **/
function open_mart_account(){
 if ( is_user_logged_in() ) {
  $return = '<a class="account" href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"><i class="fa fa-user-o" aria-hidden="true"></i></a>';
  } 
 else {
  $return = '<span><a href="'.get_permalink( get_option('woocommerce_myaccount_page_id') ).'"><i class="fa fa-lock" aria-hidden="true"></i></a></span>';
}
 echo $return;
 }

// Plus Minus Quantity Buttons @ WooCommerce Single Product Page
add_action( 'woocommerce_before_add_to_cart_quantity', 'open_mart_display_quantity_minus',10,2 );
function open_mart_display_quantity_minus(){
    echo '<div class="open-mart-quantity"><button type="button" class="minus" >-</button>';
}
add_action( 'woocommerce_after_add_to_cart_quantity', 'open_mart_display_quantity_plus',10,2 );
function open_mart_display_quantity_plus(){
    echo '<button type="button" class="plus" >+</button></div>';
}

//Woocommerce: How to remove page-title at the home/shop page but not category pages
add_filter( 'woocommerce_show_page_title', 'open_mart_not_a_shop_page' );
function open_mart_not_a_shop_page() {
    return boolval(!is_shop());
}
//************************************************************************************************//
// *****************************HOME PAGE WOO FUNCTION****************************************//
//************************************************************************************************//
//***********************/
// product category list
//************************/
function open_mart_product_list_categories( $args = '' ){
    $defaults = array(
        'child_of'            => 0,
        'current_category'    => 0,
        'depth'               => 4,
        'echo'                => 0,
        'exclude'             => '',
        'exclude_tree'        => '',
        'feed'                => '',
        'feed_image'          => '',
        'feed_type'           => '',
        'hide_empty'          => 1,
        'hide_title_if_empty' => false,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'separator'           => '<br />',
        'show_count'          => 0,
        'show_option_all'     => '',
        'show_option_none'    => __( 'No categories','open-mart' ),
        'style'               => 'list',
        'taxonomy'            => 'product_cat',
        'title_li'            => '',
        'use_desc_for_title'  => 0,
    );
 $html = wp_list_categories($defaults);
        echo '<ul class="product-cat-list thunk-product-cat-list" data-menu-style="vertical">'.$html.'</ul>';
  }
  // This is for vertical style in open mart
function open_mart_product_list_categories_mobile( $args = '' ){
    $defaults = array(
        'child_of'            => 0,
        'current_category'    => 0,
        'depth'               => 4,
        'echo'                => 0,
        'exclude'             => '',
        'exclude_tree'        => '',
        'feed'                => '',
        'feed_image'          => '',
        'feed_type'           => '',
        'hide_empty'          => 1,
        'hide_title_if_empty' => false,
        'hierarchical'        => true,
        'order'               => 'ASC',
        'orderby'             => 'menu_order',
        'separator'           => '<br />',
        'show_count'          => 0,
        'show_option_all'     => '',
        'show_option_none'    => __( 'No categories','open-mart' ),
        'style'               => 'list',
        'taxonomy'            => 'product_cat',
        'title_li'            => '',
        'use_desc_for_title'  => 0,
    );
 $html = wp_list_categories($defaults);
        echo '<ul class="thunk-product-cat-list mobile" data-menu-style="accordion">'.$html.'</ul>';
  }