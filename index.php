<?php

  /**
        *Plugin Name: API Data Fetch
        *Plugin URI:	http://uihub.uk/
        *Description:	API Data Fetch
        *Version:		1.0
        *Requires at least: 5.0
        *Requires PHP:	7.0
        *Author:	UI HUB
        *Author URI:	http://nishans.me/
        *License:		Regular
        *License URI:	# 
        *Text Domain:	wp-fetch-table
  **/

  function table_shortcode_Jgs8853( $atts ) {
    require_once('short-code-main-page.php');
  }
  add_shortcode( 'data-table', 'table_shortcode_Jgs8853' );

?>