<?php
/**
 * Created by PhpStorm.
 * User: solomashenko
 * Date: 21.03.17
 * Time: 14:27
 */

if ( defined('FW') ){
    /**
     * @param WP_Customize_Manager $wp_customize
     * @internal
     */
    function _action_customizer_live_fw_options($wp_customize) {
        if ($wp_customize->get_setting('fw_options[option_1]')) {
            $wp_customize->get_setting('fw_options[option_1]')->transport = 'postMessage';

            add_action( 'customize_preview_init', '_action_customizer_live_fw_options_preview' );
        }
    }
    add_action('customize_register', '_action_customizer_live_fw_options');

    /**
     * @internal
     */
    function _action_customizer_live_fw_options_preview() {
        wp_enqueue_script(
            'mytheme-customizer',
            get_template_directory_uri() .'/js/theme-customizer.js',
            array( 'jquery','customize-preview' ),
            fw()->theme->manifest->get_version(),
            true
        );
    }
}