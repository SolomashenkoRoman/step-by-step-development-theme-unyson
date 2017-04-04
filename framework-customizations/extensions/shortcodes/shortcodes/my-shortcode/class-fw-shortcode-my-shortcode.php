<?php

/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 11:02 AM
 */
if (!defined('FW')) {
    die('Forbidden');
}
class FW_Shortcode_My_Shortcode extends FW_Shortcode
{

    protected function _render($atts, $content = null, $tag = '')
    {
        $html = '';
        /*$html .= date('d-m-Y H:i:s');
        $html .= '<br/>';
        $html .= $this->getDateCache();*/

        $my_form = new FW_Form('<unique-id>', array(
            'render'   => array($this, '_my_form_render') ,
            'validate' => array($this, '_my_form_validate'),
            'save'     => array($this, '_my_form_save'),
        ));

        $html .= $my_form->render();

        return $html;
    }


    public function _my_form_render() {
        $input_value = FW_Request::POST('demo');

        echo '<input type="text" name="demo" maxlength="20" value="'. esc_attr($input_value) .'">';
    }

    public function _my_form_validate($errors) {
        $input_value = FW_Request::POST('demo');

        if (fw_strlen($input_value) > 10) {
            $errors['demo'] = __('Value cannot be more that 10 characters long', '{domain}');
        }

        return $errors;
    }

    public function _my_form_save() {
        $input_value = FW_Request::POST('demo');

        // do something with value
    }



    function getDateCache() {
        $cache_key = 'date_cache';
        try {
            /**
             * 	вызовет исключение, если ключ не найден
             */
            error_log('hello');
            return FW_Cache::get($cache_key);
        } catch (FW_Cache_Not_Found_Exception $e) {
            error_log('not work');
            $data = date('d-m-Y H:i:s');
            FW_Cache::set($cache_key, $data);
            return $data;
        }
    }
}