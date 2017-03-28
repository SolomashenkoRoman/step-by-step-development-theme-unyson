<?php
/**
 * Created by PhpStorm.
 * User: romansolomashenko
 * Date: 28.03.17
 * Time: 11:25 PM
 */

if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

/**
 * Укажите доступные population methods.
 *
 * Существует 4 встроенных population methods
 *  'posts'      Заполнение posts
 *  'categories' Заполнение categories
 *  'tags'       Заполнениеh tags
 *  'custom'     Заполнение custom content provided by the user
 */
$cfg['population_methods'] = array('posts', 'categories', 'tags', 'custom');

/**
 * Specify what media types the slider supports.
 *
 * There are 2 media types available:
 *  'image' Supports images
 *  'video' Supports videos
 */
$cfg['multimedia_types'] = array('image');