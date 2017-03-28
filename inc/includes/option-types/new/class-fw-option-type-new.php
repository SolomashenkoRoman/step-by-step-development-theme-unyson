<?php
if ( ! defined('FW') ){
    die('Forbidden');
}
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 23.03.17
 * Time: 3:56 PM
 */
class FW_Option_Type_New extends FW_Option_Type
{
    public function get_type()
    {
        return 'new';
    }

    /**
     * @internal
     */
    protected function _enqueue_static($id, $option, $data)
    {
        $uri = get_template_directory_uri() .'/inc/includes/option-types/'. $this->get_type() .'/static';

        wp_enqueue_style(
            'fw-option-'. $this->get_type(),
            $uri .'/css/styles.css'
        );

        wp_enqueue_script(
            'fw-option-'. $this->get_type(),
            $uri .'/js/scripts.js',
            array('fw-events', 'jquery')
        );
    }

    /**
     * @internal
     */
    protected function _render($id, $option, $data)
    {
        /**
         * $data['value'] содержит правильное значение, возвращаемое функцией  _get_value_from_input()
         * Вы сами решаете, как использовать его в html
         */
        $option['attr']['value'] = (string)$data['value'];

        /**
         * $option['attr']  содержит все атрибуты.
         *
         *  У элемента html главной (wrapper) опции должны быть атрибуты «id» и «class»
         *
         * Все типы опций должны иметь в главном элементе класс "fw-option-type-{$type}".
         * Каждый javascript и css в этой опции должны использовать этот класс..
         *
         * Остальные атрибуты вы можете:
         *  1. использовать их все в основном элементе (если сама опция не имеет входных элементов)
         *  2. используйте их в элементе input element (если у option есть элемент input, который содержит значение option)
         *
         * В этом случае вы будете использовать второй вариант.
         */

        $wrapper_attr = array(
            'id'    => $option['attr']['id'],
            'class' => $option['attr']['class'],
        );

        unset(
            $option['attr']['id'],
            $option['attr']['class']
        );

        $html  = '<div '. fw_attr_to_html($wrapper_attr) .'>';
        $html .= '<input '. fw_attr_to_html($option['attr']) .' type="text" />';
        $html .= '<my-button type="my-button" class="my-button">'. __('Clear text', '{domain}') .'</my-button>';
        $html .= '</div>';

        return $html;
    }

    /**
     * @internal
     */
    protected function _get_value_from_input($option, $input_value)
    {
        /**
         * In this method you receive $input_value (from form submit or whatever)
         * and must return correct and safe value that will be stored in database.
         *
         * $input_value can be null.
         * In this case you should return default value from $option['value']
         */

        if (is_null($input_value)) {
            $input_value = $option['value'];
        }

        return (string)$input_value;
    }

    /**
     * @internal
     */
    protected function _get_defaults()
    {
        /**
         * Это параметры по умолчанию, которые будут объединены с массивом option.
         * Они делают возможным, что любая опция имеет только один массив требуемых
         * параметров array('type' => 'new').
         */

        return array(
            'value' => ''
        );
    }
}
FW_Option_Type::register('FW_Option_Type_New');