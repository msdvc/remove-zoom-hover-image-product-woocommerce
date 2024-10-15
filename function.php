
*Add this code into your function.php file generate by your theme*


add_action( 'wp', 'bbloomer_remove_zoom_lightbox_theme_support', 99 );
  
function bbloomer_remove_zoom_lightbox_theme_support() { 
    remove_theme_support( 'wc-product-gallery-zoom' );
    //I removed the lines that are here
}


