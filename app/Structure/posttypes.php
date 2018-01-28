<?php

namespace Twiggy\App\Structure;

/*
|-----------------------------------------------------------
| Theme Custom Post Types
|-----------------------------------------------------------
|
| This file is for registering your theme post types.
| Custom post types allow users to easily create
| and manage various types of content.
|
*/

use function Twiggy\App\config;

/**
 * Registers `portfolio` custom post type.
 *
 * @return void
 */
function register_portfolio_post_type()
{
    register_post_type('portfolio', [
        'description' => __('Collection of portfolios.', config('textdomain')),
        'public' => true,
        'supports' => ['title', 'editor', 'thumbnail'],
        'labels' => [
            'name' => _x('Portfolios', 'post type general name', config('textdomain')),
            'singular_name' => _x('Portfolio', 'post type singular name', config('textdomain')),
            'menu_name' => _x('Portfolios', 'admin menu', config('textdomain')),
            'name_admin_bar' => _x('Portfolio', 'add new on admin bar', config('textdomain')),
            'add_new' => _x('Add New', 'portfolio', config('textdomain')),
            'add_new_item' => __('Add New Portfolio', config('textdomain')),
            'new_item' => __('New Portfolio', config('textdomain')),
            'edit_item' => __('Edit Portfolio', config('textdomain')),
            'view_item' => __('View Portfolio', config('textdomain')),
            'all_items' => __('All Portfolios', config('textdomain')),
            'search_items' => __('Search Portfolios', config('textdomain')),
            'parent_item_colon' => __('Parent Portfolios:', config('textdomain')),
            'not_found' => __('No portfolios found.', config('textdomain')),
            'not_found_in_trash' => __('No portfolios found in Trash.', config('textdomain')),
        ],
    ]);
}
add_action('init', 'Twiggy\App\Structure\register_portfolio_post_type');
