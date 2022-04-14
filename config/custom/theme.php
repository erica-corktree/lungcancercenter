<?php
/**
 * Custom Default Theme
 *
 */

use Roots\WPConfig\Config;

if (env('LCC_THEME') && is_dir(Config::get(WP_CONTENT_DIR) . '/themes/' . env('LCC_THEME'))) {
    Config::define('WP_DEFAULT_THEME', env('LCC_THEME'));
}
