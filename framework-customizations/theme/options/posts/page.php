<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 20.03.17
 * Time: 12:39 AM
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
    'box_id' => array(
        'type' => 'box',
        'options' => array(
            'option_id_2'  => array(
                'type' => 'text',
                'value' => 'Default value',
                'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
                'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
            ),
            'tab_id' => array(
                'type' => 'tab',
                'options' => array(
                    'option_id_5'  => array( 'type' => 'text' ),
                ),
                'title' => __('Tab Title', MY_THEME_TEXTDOMAIN),
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
            ),
            'tab_id_2' => array(
                'type' => 'tab',
                'options' => array(
                    'option_id_6'  => array( 'type' => 'text' ),
                ),
                'title' => __('Tab Title #2', MY_THEME_TEXTDOMAIN),
                'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
            ),
        ),
        'title' => __('Box Title', MY_THEME_TEXTDOMAIN),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar')
    ),
    'popup_id' => array(
        'type' => 'popup',
        'options' => array(
            'option_id_3'  => array( 'type' => 'text' ),
        ),
        'title' => __('Button and Popup Title', MY_THEME_TEXTDOMAIN),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
        'modal-size' => 'small', // small, medium, large
        'desc' => __('Button Description', MY_THEME_TEXTDOMAIN),
    ),
    'group_id' => array(
        'type' => 'group',
        'options' => array(
            'option_id_4'  => array( 'type' => 'text' ),
        ),
        'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
    ),


);