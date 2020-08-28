<?php
/**
 * Plugin Name: Strip Comments HTML
 * Plugin URI:  https://twitter.com/mauryaratan
 * Description: Strip HTML tags from comments.
 * Author: Ram Ratan Maurya
 * Version: 1.0
 * Author URI: https://twitter.com/mauryaratan
 * Text Domain: strip-comments-html
 * Domain Path: /languages/
 */

function sch_strip_html_tags( $commentdata ) {
    $commentdata['comment_content'] = wp_strip_all_tags( $commentdata['comment_content'] );
  
    return $commentdata;
}
 
add_filter( 'preprocess_comment', 'sch_strip_html_tags', 9999, 1 );
