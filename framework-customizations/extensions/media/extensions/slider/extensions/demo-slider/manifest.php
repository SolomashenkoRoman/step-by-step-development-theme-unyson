<?php
if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'My extension demo slider', MY_THEME_TEXTDOMAIN );
$manifest['description'] = __( 'My extension demo slider description', MY_THEME_TEXTDOMAIN );
$manifest['version'] = '0.0.1';
$manifest['display'] = true;
$manifest['standalone'] = true;