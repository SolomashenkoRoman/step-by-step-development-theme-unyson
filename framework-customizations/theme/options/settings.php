<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 20.03.17
 * Time: 12:19 AM
 */

if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    'option_id' => array(
        'type'  => 'text',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
        'value' => '#ADFF2F',
    ),
);