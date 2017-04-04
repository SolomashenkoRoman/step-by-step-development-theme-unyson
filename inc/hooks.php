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


    /** @internal */
    function _action_theme_include_custom_option_types() {
        require_once dirname(__FILE__) . '/includes/option-types/new/class-fw-option-type-new.php';
    }
    add_action('fw_option_types_init', '_action_theme_include_custom_option_types');

    add_action('fw_init', '_action_theme_test_fw_settings_form');
    function _action_theme_test_fw_settings_form() {
        if (class_exists('FW_Settings_Form')) {
            require_once dirname(__FILE__) . '/class-fw-settings-form-test.php';
            new FW_Settings_Form_Test('test');
        }
    }

    add_action('admin_notices', '_action_admin_notices_fw_flash_message' );
    function _action_admin_notices_fw_flash_message()
    {
        FW_Flash_Messages::add(
            'test_success',
            __('Test message', '{domain}'),
            'success' // available types: info, warning, error, success
        );
        FW_Flash_Messages::add(
            'test_error',
            __('Test message', '{domain}'),
            'error' // available types: info, warning, error, success
        );
        FW_Flash_Messages::add(
            'test_warning',
            __('Test message', '{domain}'),
            'warning' // available types: info, warning, error, success
        );
        FW_Flash_Messages::add(
            'test_info',
            __('Test message', '{domain}'),
            'info' // available types: info, warning, error, success
        );
    }

}