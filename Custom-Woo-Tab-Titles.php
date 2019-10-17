<?php
/*
Plugin Name: Custom Woo Tabs by eGuru
Version:     1.0
Plugin URI:			https://github.com/tolba59/Custom-WooCommerce-Tabs
Description:		Change tab titles for single product page
Author:				eGuru
Author URI:			https://eguru.website
Tested up to:		5.2.1

*/
/** 
 * Changing Woo Commerce Tab Titles & Headings
 */

/** 
 * Remove the "Product Description" heading from the single product Description tab section
 */
add_filter( 'woocommerce_product_description_heading', '__return_false' );

/** 
 * Change the Description tab link text for single products
 */
add_filter( 'woocommerce_product_description_tab_title', 'isa_wc_description_tab_link_text', 999, 2 );
function isa_wc_description_tab_link_text( $text, $tab_key ) { 
    return esc_html( 'Material & Size Chart' );
 }

/** 
 * Remove the "Additional Information" heading from the single product Additional Information tab section
 */
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

/** 
 * Change the "Additional Information" tab link text for single products
 */
add_filter( 'woocommerce_product_additional_information_tab_title', 'isa_wc_additional_info_tab_link_text', 999, 2 );
 
function isa_wc_additional_info_tab_link_text( $text, $tab_key ) {
 
    return esc_html( 'Product Weight' );
 
}

/** 
 * Change the "Reviews" tab link text for single products
 */
add_filter( 'woocommerce_product_reviews_tab_title', 'isa_wc_reviews_tab_link_text', 999, 2 );
 
function isa_wc_reviews_tab_link_text( $text, $tab_key ) {
 
    return esc_html( 'What people are saying' );
 
}