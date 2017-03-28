<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 9:23 AM
 */

$options = array(
    'demo_text'   => array(
        'label'   => __('Demo text label', '{domain}'),
        'desc'    => __('Demo text description', '{domain}'),
        'help'    => __('Demo text help', '{domain}'),
        'type'    => 'text'
    ),
    'demo_select' => array(
        'label'   => __('Demo select label', '{domain}'),
        'desc'    => __('Demo select description', '{domain}'),
        'type'    => 'select',
        'choices' => array(
            'c1'  => __('Choice 1', '{domain}'),
            'c2'  => __('Choice 2', '{domain}'),
            'c3'  => __('Choice 3', '{domain}')
        ),
        'value'   => 'c2'
    )
);
