# Custom-WooCommerce-Tabs

### Default WooCommerce Tabs
![alt text](https://github.com/tolba59/Custom-WooCommerce-Tabs/blob/master/images/default.png "Default tabs")

### Custom WooCommerce Tabs with the plugin
**Note** The plugin doesn't have a settings page in the WordPress dashboard, you'll need to adjust it according to your needs by editing the `Custom-Woo-Tab-Titles.php` file, the current version was created for a fashion ecommerce website so it had tabs like *Material & Size Chart* and *Product Weight* , you can show/hide/edit name as needed.

![alt text](https://github.com/tolba59/Custom-WooCommerce-Tabs/blob/master/images/with_plugin.png "Custom tabs")

## About

* Plugin Name:  Custom Woo Tabs by eGuru
* Version:      1.0
* Plugin URI:	  https://github.com/tolba59/Custom-WooCommerce-Tabs
* Contributors: @tolba59
* Description:	Editing visibility and names of WooCommerce tabs on Single Product page (WordPress)
* Author:				Eslam Tolba - eGuru
* Author URI:		https://eguru.website
* Tested up to:	5.2.1
* License:      GNU General Public License v3
* License URI:  https://www.gnu.org/licenses/gpl-3.0.en.html


A simple plugin to edit the visibility and names of the default WooCommerce tabs (for example: Description, Additional Information, Revviews) in single product page to hide/unhide or rename any of them.

## Installation

* Upload the `Custom-Woo-Tab-Titles.php` file to the `/wp-content/plugins/` directory
* Activate the plugin through the 'Plugins' menu in WordPress
* That's It!

**Note** The plugin doesn't have a settings page in the WordPress dashboard, you'll need to adjust it according to your needs by editing the `Custom-Woo-Tab-Titles.php` file, the current version was created for a fashion ecommerce website so it had tabs like *Material & Size Chart* and *Product Weight* , you can show/hide/edit name as needed.


## Hooks & Filters

#### Hide Product Description / Additional Information

```
add_filter( 'woocommerce_product_description_heading', '__return_false' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_false' );

```

#### Change the Description tab name

```
add_filter( 'woocommerce_product_description_tab_title', 'isa_wc_description_tab_link_text', 999, 2 );
function isa_wc_description_tab_link_text( $text, $tab_key ) { 
    return esc_html( 'Material & Size Chart' );
 }
 ```
#### Change the "Additional Information" tab name

```
add_filter( 'woocommerce_product_additional_information_tab_title', 'isa_wc_additional_info_tab_link_text', 999, 2 );
 
function isa_wc_additional_info_tab_link_text( $text, $tab_key ) {
 
    return esc_html( 'Product Weight' );
 
}
```

#### Change the "Reviews" tab name

```
add_filter( 'woocommerce_product_reviews_tab_title', 'isa_wc_reviews_tab_link_text', 999, 2 );
 
function isa_wc_reviews_tab_link_text( $text, $tab_key ) {
 
    return esc_html( 'What people are saying' );
 
}
```


## Changelog
### 1.0
* Initial Release
