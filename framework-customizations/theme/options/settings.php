<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 20.03.17
 * Time: 12:19 AM
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
    'body-color' => array(
        'type' => 'color-picker',
        'label' => __('Body Color', MY_THEME_TEXTDOMAIN),
        'value' => '#ADFF2F',
    ),
    'option_regular_text' => array(
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
    'option_regular_textarea' => array(
        'type'  => 'textarea',
        'value' => 'Default value',
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),
    'option_single_checkbox' => array(
        'type'  => 'checkbox',
        'value' => true,
        'label' => __('Option Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Option Description', MY_THEME_TEXTDOMAIN),
        'text'  => __('Yes', MY_THEME_TEXTDOMAIN),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'help'  => __('Some html that will appear in tip popup', MY_THEME_TEXTDOMAIN),
    ),

    'option_single_checkboxes' => array(
        'type'  => 'checkboxes',
        'value' => array(
            'choice-1' => false,
            'choice-2' => true,
        ),
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array( // Примечание: избегайте использования ключей bool или int http://bit.ly/1cQgVzk
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => __('Choice 2', MY_THEME_TEXTDOMAIN),
            'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
        ),
        // Display choices inline instead of list
        'inline' => false,
        //'inline' => true,
    ),
    'option_single_radio' => array(
        'type'  => 'radio',
        'value' => 'choice-3',
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array( // Примечание: избегайте использования ключей bool или int http://bit.ly/1cQgVzk
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => __('Choice 2', MY_THEME_TEXTDOMAIN),
            'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
        ),
        // Display choices inline instead of list
        'inline' => false,
    ),
    'option_single_select' => array(
        'type'  => 'select',
        'value' => 'choice-3',
        'attr'  => array(
            'class' => 'custom-class',
            'data-foo' => 'bar'
        ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array(
            '' => '---',
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => array(
                'text' => __('Choice 2', MY_THEME_TEXTDOMAIN),
                'attr' => array('data-foo' => 'bar'),
            ),
            array( // optgroup
                'attr'    => array('label' => __('Group 1', MY_THEME_TEXTDOMAIN)),
                'choices' => array(
                    'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
                    // ...
                ),
            ),
        ),
        /**
         * Разрешить сохранение не существующих вариантов
         * Полезно, когда вы используете select для его динамического заполнения из js
         */
        'no-validate' => false,
    ),
    'option_select_multiple' => array(
        'type'  => 'select-multiple',
        'value' => array( 'choice-1', 'choice-3' ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', MY_THEME_TEXTDOMAIN),
        'desc'  => __('Description', MY_THEME_TEXTDOMAIN),
        'help'  => __('Help tip', MY_THEME_TEXTDOMAIN),
        'choices' => array(
            '' => '---',
            'choice-1' => __('Choice 1', MY_THEME_TEXTDOMAIN),
            'choice-2' => array(
                'text' => __('Choice 2', MY_THEME_TEXTDOMAIN),
                'attr' => array('data-foo' => 'bar'),
            ),
            array( // optgroup
                'attr'    => array('label' => __('Group 1', MY_THEME_TEXTDOMAIN)),
                'choices' => array(
                    'choice-3' => __('Choice 3', MY_THEME_TEXTDOMAIN),
                    // ...
                ),
            ),
        ),
    ),
    'option_select_multi_select' => array(
        'type'  => 'multi-select',
        'value' => array( 'choice-1', 'choice-3' ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        /**
         * Set population method
         * Доступны: 'posts', 'taxonomy', 'users', 'array'
         */
        'population' => 'array',
        /**
         * Установить post types, taxonomies, user roles для поиска
         *
         * 'population' => 'posts'
         * 'source' => 'page',
         *
         * 'population' => 'taxonomy'
         * 'source' => 'category',
         *
         * 'population' => 'users'
         * 'source' => array( 'editor', 'subscriber', 'author' ),
         *
         * 'population' => 'array'
         * 'source' => '' // will populate with 'choices' array
         */
        'source' => '',
        //'population' => 'posts',
        //'source' => 'post',

        /**
         * Установите количество posts/users/taxonomies, которые будут выбраны с множественным выбором
         * Или установите значение false, чтобы отключить эту функцию.
         */
        'prepopulate' => 10,
        /**
         * Массив с доступными вариантами выбора
         * Используется только тогда, когда 'population' => 'array'
         */
        'choices' => array(
            'choice-1' => __('Choice 1', '{domain}'),
            'choice-2' => __('Choice 2', '{domain}'),
            'choice-3' => __('Choice 3', '{domain}'),
        ),
        /**
         * Установить количество максимальных элементов, которые могут быть выбраны
         */
        'limit' => 100,
    ),
    'option_switch' => array(
        'type'  => 'switch',
        'value' => 'hello',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'left-choice' => array(
            'value' => 'goodbye',
            'label' => __('Goodbye', '{domain}'),
        ),
        'right-choice' => array(
            'value' => 'hello',
            'label' => __('Hello', '{domain}'),
        ),

    ),
    'option_color_picker' => array(
        'type'  => 'color-picker',
        'value' => '#FF0000',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        // Палитра цветов
        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_rgba_color_picker' => array(
        'type'  => 'rgba-color-picker',
        'value' => 'rgba(255,0,0,0.5)',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        // Палитра цветов
        'palettes' => array( '#ba4e4e', '#0ce9ed', '#941940' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_gradient' => array(
        'type'  => 'gradient',
        'value' => array(
            'primary'   => '#FF0000',
            'secondary' => '#0000FF',
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_image_picker' => array(
        'type'  => 'image-picker',
        'value' => 'value-3',
        'attr'  => array(
            'class'    => 'custom-class',
            'data-foo' => 'bar',
        ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'choices' => array(
            'value-1' => get_template_directory_uri() .'/images/thumbnail.png',
            'value-2' => array(
                // (required) url for thumbnail
                'small' => get_template_directory_uri() .'/images/thumbnail.png',
                // (optional) url  для большого изображения, которое появится в подсказке
                'large' => get_template_directory_uri() .'/images/preview.png',
                // (optional) Выбор дополнительных данных для js, доступных в пользовательских событиях
                'data' => array()
            ),
            'value-3' => array(
                // (required) url for thumbnail
                'small' => array(
                    'src' => get_template_directory_uri() .'/images/thumbnail.png',
                    'height' => 70
                ),
                // (optional) url for large image that will appear in tooltip
                'large' => array(
                    'src' => get_template_directory_uri() .'/images/preview.png',
                    'height' => 400
                ),
                // (optional) choice extra data for js, available in custom events
                'data' => array()
                ),
            ),
        'blank' => true, // (optional) Если true, изображения могут быть отменены
    ),
    'option_background_image' => array(
        'type'  => 'background-image',
        'value' => 'bg-1',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'choices' => array(
            'none' => array(
                'icon' => get_template_directory_uri() . '/images/bg/bg-0.jpg',
                'css'  => array(
                    'background-image' => 'none'
                ),
            ),
            'bg-1' => array(
                'icon'  => get_template_directory_uri() . '/images/bg/bg-1.jpg',
                'css'  => array(
                    'background-image'  => 'url("' . get_template_directory_uri() . '/images/bg/bg-1.png' . '")',
                    'background-repeat' => 'repeat',
                ),
            ),
            'bg-2' => array(
                'icon' => get_template_directory_uri() . '/images/bg/bg-2.jpg',
                'css'  => array(
                    'background-image'  => 'url("' . get_template_directory_uri() . '/images/bg/bg-2.png' . '")',
                    'background-repeat' => 'repeat-y'
                ),
            )
        )
    ),
    'option_date_picker' => array(
        'type'  => 'date-picker',
        'value' => '',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'monday-first' => true, // Неделя начнется с понедельника; Для воскресенья установлено значение false
        'min-date' => date('d-m-Y'), // По умолчанию минимальной датой будет текущий день. Установите дату в формате d-m-Y в качестве даты начала
        'max-date' => null, // По умолчанию максимальная дата не указана. Установите дату в формате d-m-Y в качестве даты начала
    ),
    'option_datetime_picker' => array(
        'type'  => 'datetime-picker',
        'value' => '',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'datetime-picker' => array(
            'format'        => 'Y/m/d H:i', // Формат даты и времени
            'maxDate'       => false,  // По умолчанию defautFormat datetimelt нет максимальной даты, установите дату в формате даты и времени..
            'minDate'       => false,  // По умолчанию минимальная дата будет текущим днем, установите дату в формате даты и времени.
            'timepicker'    => true,   // Show timepicker.
            'datepicker'    => true,   // Show datepicker.
            'defaultTime'   => '12:00' // Если входное значение пустое, timepicker установит время использования defaultTime.
        ),
    ),
    'option_datetime_range' => array(
        'type'  => 'datetime-range',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'datetime-pickers' => array(
            'from' => array(
                'minDate' => '1970/01/01', // By default minimum date will be current day, set a date in the datetime format.
                'maxDate' => '2038/01/19', // By default there is not maximum date , set a date in the datetime format.
                'format'  => 'Y/m/d H:i',  // Format datetime.
                'timepicker'  => true,     // Show timepicker.
                'datepicker'  => true,     // Show datepicker.
            ),
            'to' => array(
                'minDate' => '1970/01/01', // By default minimum date will be current day, set a date in the datetime format.
                'maxDate' => '2038/01/19', // By default there is not maximum date , set a date in the datetime format.
                'format'  => 'Y/m/d H:i',  // Format datetime.
                'timepicker'  => true,     // Show timepicker.
                'datepicker'  => true,     // Show datepicker.
            )
        ),
        'value' => array(
            'from' => '',
            'to' => ''
        )
    ),
    'option_icon-v2' => array(
        'type'  => 'icon-v2',

        /**
         * small | medium | large | sauron
         * Yes, sauron. Definitely try it. Great one.
         */
        'preview_size' => 'medium',

        /**
         * small | medium | large
         */
        'modal_size' => 'medium',

        /**
         * Здесь нет смысла настраивать значение из кода.
         *
         * Я задокументирую результат, который вы получите в интерфейсе здесь::
         * 'value' => array(
         *   'type' => 'icon-font', // icon-font | custom-upload
         *
         *   // ONLY IF icon-font
         *   'icon-class' => '',
         *   'icon-class-without-root' => false,
         *   'pack-name' => false,
         *   'pack-css-uri' => false
         *
         *   // ONLY IF custom-upload
         *   // 'attachment-id' => false,
         *   // 'url' => false
         * ),
         */

        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_upload' => array(
        'type'  => 'upload',
        'value' => array(
            /*
            'attachment_id' => '9',
            'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
            */
            // Если значение установлено в коде, оно не рассматривается и не используется,
            // поскольку нет смысла устанавливать hardcode attachment_id
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        /**
         * Если установлено `true`, опция позволит загружать только изображения и отображать thumb выбранного.
         * Если установлено значение `false`, опция позволит загрузить любой файл из медиа-библиотеки.
         */
        'images_only' => true,
        /**
         * Массив с разрешенными расширениями файлов, который будет фильтровать медиа-библиотеку и файлы для загрузки
         */
        'files_ext' => array( 'doc', 'pdf', 'zip' ),
        /**
         * Массив с дополнительными типами mime, который не находится в массиве по умолчанию с mime-типами
         * из библиотеки Plustload javascript.Формат: массив ('<mime-type>, <ext1> <ext2> <ext2>').
         * Например: вы устанавливаете фильтр rar для фильтра, но фильтр игнорирует его, чем вы должны установить
         * Массив со следующим структурным массивом ('.rar, rar'), и это решит проблему.
         */
        'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
    ),
    'option_multi_upload' => array(
        'type'  => 'multi-upload',
        'value' => array(
            /*
            array(
                'attachment_id' => '9',
                'url' => '//site.com/wp-content/uploads/2014/02/whatever.jpg'
            ),
            ...
            */
            // if value is set in code, it is not considered and not used
            // because there is no sense to set hardcode attachment_id
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        /**
         * Если установлено `true`, опция позволит загружать только изображения и отображать thumb выбранного.
         * Если установлено значение `false`, опция позволит загрузить любой файл из медиа-библиотеки.
         */
        'images_only' => true,
        /**
         * Массив с разрешенными расширениями файлов, который будет фильтровать медиа-библиотеку и файлы для загрузки
         */
        'files_ext' => array( 'doc', 'pdf', 'zip' ),
        /**
         * Массив с дополнительными типами mime, который не находится в массиве по умолчанию с mime-типами
         * из библиотеки Plustload javascript.Формат: массив ('<mime-type>, <ext1> <ext2> <ext2>').
         * Например: вы устанавливаете фильтр rar для фильтра, но фильтр игнорирует его, чем вы должны установить
         * Массив со следующим структурным массивом ('.rar, rar'), и это решит проблему.
         */
        'extra_mime_types' => array( 'audio/x-aiff, aif aiff' )
    ),
    'option_slider' => array(
        'type'  => 'slider',
        'value' => 33,
        'properties' => array(
            /*
            'min' => 0,
            'max' => 100,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
            */
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_range_slider' => array(
        'type'  => 'range-slider',
        'value' => array(
            'from' => 10,
            'to'   => 33,
        ),
        'properties' => array(
            /*
            'min' => 0,
            'max' => 100,
            'step' => 1, // Set slider step. Always > 0. Could be fractional.
            */
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_popup' => array(
        'type' => 'popup',
        'value' => array(
            'option_1' => 'value 1',
            'option_2' => 'value 2',
        ),
        'label' => __('Popup', '{domain}'),
        'desc'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
        'popup-title' => __('Popup Title', '{domain}'),
        'button' => __('Edit', '{domain}'),
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'popup-options' => array(
            'option_popup_1' => array(
                'label' => __('Text', '{domain}'),
                'type' => 'text',
                'value' => 'Demo text value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
            'option_popup_2' => array(
                'label' => __('Textarea', '{domain}'),
                'type' => 'textarea',
                'value' => 'Demo textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
        ),
    ),
    'option_addable_popup' => array(
        'type' => 'addable-popup',
        'value' => array(
            array(
                'addable_popup_option_1' => 'value 1',
                'addable_popup_option_2' => 'value 2',
            ),
            // ...
        ),
        'label' => __('Addable Popup', '{domain}'),
        'desc'  => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
        'template' => '{{- addable_popup_option_1 }}',
        'popup-title' => null,
        'size' => 'small', // small, medium, large
        'limit' => 0, // limit the number of popup`s that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
        'popup-options' => array(
            'addable_popup_option_1' => array(
                'label' => __('Text', '{domain}'),
                'type' => 'text',
                'value' => 'Demo text value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
            'addable_popup_option_2' => array(
                'label' => __('Textarea', '{domain}'),
                'type' => 'textarea',
                'value' => 'Demo textarea value',
                'desc' => __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                'help' => sprintf("%s \n\n'\"<br/><br/>\n\n <b>%s</b>",
                    __('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '{domain}'),
                    __('Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque laudantium', '{domain}')
                ),
            ),
        ),
    ),
    'option_addable_option' => array(
        'type'  => 'addable-option',
        'value' => array('Value 1', 'Value 2', 'Value 3'),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'option' => array( 'type' => 'text' ),
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
    ),
    'option_addable_box' => array(
        'type'  => 'addable-box',
        'value' => array(
            array(
                'option_box_1' => 'value 1',
                'option_box_2' => 'value 2',
            ),
            // ...
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'box-options' => array(
            'option_box_1' => array( 'type' => 'text' ),
            'option_box_2' => array( 'type' => 'textarea' ),
        ),
        'template' => 'Hello {{- option_box_1 }}', // box title
        'box-controls' => array( // buttons next to (x) remove box button
            'control-id' => '<small class="dashicons dashicons-smiley"></small>',
        ),
        'limit' => 0, // limit the number of boxes that can be added
        'add-button-text' => __('Add', '{domain}'),
        'sortable' => true,
    ),
    'option_addable_typography-v2' => array(
        'type' => 'typography-v2',
        'value' => array(
            'family' => 'Amarante',
            // For standard fonts, instead of subset and variation you should set 'style' and 'weight'.
            // 'style' => 'italic',
            // 'weight' => 700,
            'subset' => 'latin-ext',
            'variation' => 'regular',
            'size' => 14,
            'line-height' => 13,
            'letter-spacing' => -2,
            'color' => '#0000ff'
        ),
        'components' => array(
            'family'         => true,
            // 'style', 'weight', 'subset', 'variation' will appear and disappear along with 'family'
            'size'           => true,
            'line-height'    => true,
            'letter-spacing' => true,
            'color'          => true
        ),
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
    ),
    'option_wp_editor' => array(
        'type'  => 'wp-editor',
        'value' => 'default value',
        'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
        'label' => __('Label', '{domain}'),
        'desc'  => __('Description', '{domain}'),
        'help'  => __('Help tip', '{domain}'),
        'size' => 'small', // small, large
        'editor_height' => 400,
        'wpautop' => true,
        'editor_type' => false, // tinymce, html

        /**
         * Also available
         * https://github.com/WordPress/WordPress/blob/4.4.2/wp-includes/class-wp-editor.php#L80-L94
         */
    )
);