<?php

/*
Plugin Name: Allow Some Other Characters In Short Urls
Plugin URI: https://efprojects.com
Description: Allow Some Other Characters In Short Urls
Version: 1.0
Author: Egor Aristov
Author URI: https://efprojects.com
*/

$chars = '/.';

if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'get_shorturl_charset', 'slash_in_charset' );
function slash_in_charset( $in ) {
        return $in.$chars;
}


//This plugin will not work with URL forwarding plugins active
