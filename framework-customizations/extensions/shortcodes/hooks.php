<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 1:02 AM
 */

if (!defined('FW')) {
    die('Forbidden');
}

function _filter_theme_disable_default_shortcodes($to_disable) {
    $to_disable[] = 'accordion';
    $to_disable[] = 'button';

    return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_theme_disable_default_shortcodes');


function _action_theme_fw_form_errors_display($form) {
    $errors = $form->get_errors();
    //error_log(11);
    echo '<ul class="your-custom-errors-class">';
    foreach ($errors as $input_name => $error_message) {
        echo fw_html_tag(
            'li',
            array('data-input-name' => $input_name),
            $error_message
        );
    }
    echo '</ul>';
}
add_action('fw_form_display_errors_frontend', '_action_theme_fw_form_errors_display');