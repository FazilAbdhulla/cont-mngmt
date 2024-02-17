<?php

/**
 * This file contains scripts and styles that will be enqueued to the website.
 *
 * @package Assignment One
 *
 */

if (!function_exists('Assignment One_register_pattern_categories')) {
    /**
     * Register Block Pattern Categories.
     * 
     * @return void
     */
    function Assignment One_register_pattern_categories()
    {

        /**
         * Register "homepage" Block Pattern Category.
         */
        register_block_pattern_category(
            'homepage',
            array('label' => __('Home Pages', 'Assignment One'))
        );

        /**
         * Register "aboutpage" Block Pattern Category.
         */
        register_block_pattern_category(
            'aboutpage',
            array('label' => __('About Pages', 'Assignment One'))
        );

        /**
         * Register "servicepage" Block Pattern Category.
         */
        register_block_pattern_category(
            'servicepage',
            array('label' => __('Service Pages', 'Assignment One'))
        );

        /**
         * Register "contactpage" Block Pattern Category.
         */
        register_block_pattern_category(
            'contactpage',
            array('label' => __('Contact Pages', 'Assignment One'))
        );

        /**
         * Register "columns" Block Pattern Category.
         */
        register_block_pattern_category(
            'column',
            array('label' => __('Columns', 'Assignment One'))
        );
    }
}

add_action('init', 'Assignment One_register_pattern_categories');
