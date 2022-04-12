<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'osolo') . '</a>';
});

/**
 * Hide "Custom fields" from admin menu when in staging or production
 */
if (env('WP_ENV') !== 'development') {
    add_action('admin_menu', function () {
        remove_menu_page('edit.php?post_type=acf-field-group');
    }, 999);
}

/**
 * Hide updates for filebird plugin
 */
add_filter('site_transient_update_plugins', function ($value) {
    unset($value->response['filebird/filebird.php']);
    return $value;
});

/**
 * Removes gutenberg for cpt
 */

add_filter('use_block_editor_for_post_type', function ($current_status, $post_type) {
    if ($post_type === 'galleri') return false;
    return $current_status;
}, 10, 2);
