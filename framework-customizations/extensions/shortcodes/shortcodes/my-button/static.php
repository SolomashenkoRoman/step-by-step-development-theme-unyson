<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 1:24 PM
 */
if (!defined('FW')) {
    die('Forbidden');
}

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/my-button');

wp_enqueue_style(
    'fw-shortcode-my-button',
    $uri . '/static/css/styles.css'
);


wp_enqueue_script(
    'fw-shortcode-my-button', //$handle
    $uri . '/static/js/scripts.js', //$src
    array(
        //'fw',
        'jquery',

    ),
    false,
    false


);

// file: {theme}/framework-customizations/extensions/shortcodes/shortcodes/{name}/static.php



if (!function_exists('_action_theme_shortcode_my_button_enqueue_dynamic_css')):

    /**
     * @internal
     * @param array $data
     */
    function _action_theme_shortcode_my_button_enqueue_dynamic_css($data) {
        $shortcode = 'my-button';
        $atts = shortcode_parse_atts( $data['atts_string'] );
        $atts = fw_ext_shortcodes_decode_attr($atts, $shortcode, $data['post']->ID);

        wp_add_inline_style(
            'fw-shortcode-my-button',
            '#shortcode-'. $atts['id'] .' { '.
            'color: '. $atts['color'] .';'.
            ' } '
        );
    }
    add_action(
        'fw_ext_shortcodes_enqueue_static:my_button',
        '_action_theme_shortcode_my_button_enqueue_dynamic_css'
    );

endif;