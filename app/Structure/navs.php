<?php

namespace Twiggy\App\Structure;

/*
|----------------------------------------------------------------
| Theme Navigation Areas
|----------------------------------------------------------------
|
| This file is for registering your theme custom navigation areas
| where various menus can be assigned by site administrators.
|
*/

use function Twiggy\App\config;

/**
 * Registers navigation areas.
 *
 * @return void
 */
function register_navigation_areas()
{
    register_nav_menus([
        'home' => __('Home', config('textdomain')),
        'portfolio' => __('Portfolio', config('textdomain')),
    ]);
}
add_action('after_setup_theme', 'Twiggy\App\Structure\register_navigation_areas');
