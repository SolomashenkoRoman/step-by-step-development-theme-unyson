<?php
if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$manifest = array();

$manifest['name']        = __( 'My extension name', MY_THEME_TEXTDOMAIN );
$manifest['description'] = __( 'My extension description', MY_THEME_TEXTDOMAIN );
$manifest['version'] = '0.0.1';
$manifest['display'] = true;
