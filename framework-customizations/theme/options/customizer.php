<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 20.03.17
 * Time: 6:48 PM
 */

if ( ! defined('FW') ){
    die('Forbidden');
}

$options = array(
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
        'value' => '#ADFF2F',
    ),
    'section_1' => array(
        'title' => __('Unyson Section', MY_THEME_TEXTDOMAIN),
        'options' => array(

            'option_1' => array(
                'type' => 'text',
                'value' => 'Default Value',
                'label' => __('Unyson Option', MY_THEME_TEXTDOMAIN),
                'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
            ),

        ),
    ),
    'panel_1' => array(
        'title' => __('Unyson Panel', MY_THEME_TEXTDOMAIN),
        'options' => array(

            'section_11' => array(
                'title' => __('Unyson Section #1', MY_THEME_TEXTDOMAIN),
                'options' => array(

                    'option_11' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #1', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),

                ),
            ),

            'section_22' => array(
                'title' => __('Unyson Section #2', MY_THEME_TEXTDOMAIN),
                'options' => array(

                    'option_22' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #2', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),
                    'option_33' => array(
                        'type' => 'text',
                        'value' => 'Default Value',
                        'label' => __('Unyson Option #3', MY_THEME_TEXTDOMAIN),
                        'desc' => __('Option Description', MY_THEME_TEXTDOMAIN),
                    ),

                ),
            ),

        ),
    ),

);