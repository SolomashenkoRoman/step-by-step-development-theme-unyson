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
    'option_regular_text' => array(
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
    'option_regular_textarea' => array(
        'type'  => 'textarea',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'option_single_checkbox' => array(
        'type'  => 'checkbox',
        'value' => true,
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'text'  => __('Yes', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),

    'option_single_checkboxes' => array(
        'type'  => 'checkboxes',
        'value' => array(
            'choice-1' => false,
            'choice-2' => true,
        ),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array( // Note: Avoid bool or int keys http://bit.ly/1cQgVzk
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => __('Choice 2', MY_THEME_TEXTDOMAIN),
            'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
        ),
        // Display choices inline instead of list
        'inline' => false,
        //'inline' => true,
    ),
);