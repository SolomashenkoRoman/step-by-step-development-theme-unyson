<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 11:48 AM
 */
if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'label' => array(
        'label'   => __('Label', '{domain}'),
        'desc'    => __('The button label', '{domain}'),
        'type'    => 'text',
        'value'   => __('Click me!', '{domain}')
    ),
    'size' => array(
        'label'   => __('Size', '{domain}'),
        'desc'    => __('The button size', '{domain}'),
        'type'    => 'select',
        'choices' => array(
            'big'    => __('Big', '{domain}'),
            'medium' => __('Medium', '{domain}'),
            'small'  => __('Small', '{domain}')
        ),
        'value'   => 'medium'
    ),
    'style' => array(
        'label'   => __('Style', '{domain}'),
        'desc'    => __('The button style', '{domain}'),
        'type'    => 'select',
        'choices' => array(
            'primary'   => __('Primary', '{domain}'),
            'secondary' => __('Secondary', '{domain}')
        )
    ),
    'id'    => array( 'type' => 'unique' ),
    'color' => array( 'type' => 'color-picker' ),
);
