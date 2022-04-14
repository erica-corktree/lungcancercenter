<?php

namespace App\View\Shortcodes;

use function Roots\view;

/**
 * Buttons
 *
 * @param array|string $atts    The shortcode attributes
 * @param string       $content The enclosed content
 *
 * @return String
 */
add_shortcode('btn', function ($atts = [], $content = null) {
    extract(shortcode_atts([
        'href'  => '',
        'style' => '',
    ], $atts));

    return view('shortcodes.btn', [
        'content' => $content,
        'href'    => $href ?? '',
        'style'   => ($style) ? " button--{$style}" : '',
    ]);
});
