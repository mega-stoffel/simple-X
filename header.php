<?php
/**
 * Header file for my simple-X WordPress theme.
 */

echo get_theme_file_uri( 'assets/images/logo.png' );

echo get_bloginfo( $showTitle, 'display' );
bloginfo('description' );
//echo get_bloginfo( $show, 'description' );

?>

Header.php