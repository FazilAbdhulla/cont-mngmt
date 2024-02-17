<?php

/**
 * This file contains scripts and styles that will be enqueued to the website.
 *
 * @package Assignment One
 *
 */

if (!function_exists('Assignment One_frontend_assets')) {
    /**
     * Enqueue scripts and styles on the website frontend.
     * 
     * @return void
     */
    function Assignment One_frontend_assets()
    {

        /**
         *  Frontend Styles.
         * */
        wp_enqueue_style(
            'Assignment One-frontend-style',
            get_template_directory_uri() . '/assets/css/frontend.css',
            array(),
            Assignment One_THEME_VERSION
        );

        /**
         *  Frontend JavaScript.
         * */
        wp_enqueue_script(
            'Assignment One-frontend-script',
            get_template_directory_uri() . '/assets/js/frontend.js',
            array('jquery'),
            Assignment One_THEME_VERSION,
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'Assignment One_frontend_assets');

if (!function_exists('Assignment One_editor_assets')) {
    /**
     * Enqueue scripts and styles for the website editor.
     * 
     * @return void
     */
    function Assignment One_editor_assets()
    {
        /**
         * Editor Styles.
         * */
        wp_enqueue_style(
            'Assignment One-editor-style',
            get_template_directory_uri() . '/assets/css/editor.css',
            array(),
            Assignment One_THEME_VERSION
        );
    }
}
add_action('enqueue_block_editor_assets', 'Assignment One_editor_assets');

if (!function_exists('Assignment One_editor_frontend_assets')) {
    /**
     * Enqueue scripts and styles for the website editor and frontend.
     * 
     * @return void
     */
    function Assignment One_editor_frontend_assets()
    {
        /**
         * Editor/Frontend Styles.
         * */
        wp_enqueue_style(
            'Assignment One-editor-frontend-style',
            get_template_directory_uri() . '/assets/css/editor-frontend.css',
            array(),
            Assignment One_THEME_VERSION
        );
    }
}
add_action('enqueue_block_assets', 'Assignment One_editor_frontend_assets');
