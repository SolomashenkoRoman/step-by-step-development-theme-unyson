<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 20.03.17
 * Time: 7:04 PM
 */

if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    'main' => array(
        'type' => 'box',
        'title' => __('Testing Options', MY_THEME_TEXTDOMAIN),
        'options' => array(
            'body-color' => array(
                'type' => 'color-picker',
                'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
                'value' => '#ADFF2F',
            ),
        ),
    ),
);