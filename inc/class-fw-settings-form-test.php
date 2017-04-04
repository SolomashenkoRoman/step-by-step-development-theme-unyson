<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 04.04.17
 * Time: 2:05 PM
 */

if (!defined('FW')) {
    die('Forbidden');
}

class FW_Settings_Form_Test extends FW_Settings_Form
{
    public function get_values() {

        return get_option('test_fw_settings_form', array());
    }

    public function set_values($values) {

        update_option('test_fw_settings_form', $values, false);
    }

    public function get_options() {
        return array(
            'tab1' => array(
                'type' => 'tab',
                'title' => 'Tab #1',
                'options' => array(
                    'opt1' => array(
                        'type' => 'text',
                        'label' => 'Option #1'
                    ),
                    'opt2' => array(
                        'type' => 'textarea',
                        'label' => 'Option #2'
                    ),
                ),
            ),
            'tab2' => array(
                'type' => 'tab',
                'title' => 'Tab #2',
                'options' => array(
                    'tab2_1' => array(
                        'type' => 'tab',
                        'title' => 'Sub Tab #1',
                        'options' => array(
                            'opt2_1' => array(
                                'type' => 'text',
                                'label' => 'Sub Option #1'
                            ),
                        ),
                    ),
                    'tab2_2' => array(
                        'type' => 'tab',
                        'title' => 'Sub Tab #2',
                        'options' => array(
                            'opt2_2' => array(
                                'type' => 'textarea',
                                'label' => 'Sub Option #2'
                            ),
                        ),
                    ),
                ),
            ),
        );
    }

    protected function _init() {
        add_action('admin_menu', array($this, '_action_admin_menu'));
        add_action('admin_enqueue_scripts', array($this, '_action_admin_enqueue_scripts'));

        $this->set_is_side_tabs(true);
        $this->set_is_ajax_submit(true);
    }

    /**
     * @internal
     */
    public function _action_admin_menu() {
        add_menu_page(
            'Test FW Settings Form',
            'Test FW Settings Form',
            'manage_options',
            /** used in @see _action_admin_enqueue_scripts() */
            'test-fw-settings-form',
            array($this, 'render')
        );
    }

    /**
     * @internal
     */
    public function _action_admin_enqueue_scripts() {
        $current_screen = get_current_screen(); // fw_print($current_screen);

        // enqueue only on settings page
        if ('toplevel_page_'. 'test-fw-settings-form' === $current_screen->base) {
            $this->enqueue_static();
            wp_enqueue_media();
            wp_enqueue_script(
                'test-fw-settings-form', //$handle
                get_template_directory_uri()  . '/js/scripts.js', //$src
                array(
                    'jquery',
                    //'wp',
                    'fw',


                ),
                false,
                false


            );
        }
    }
}