<?php

namespace Twiggy\App\Setup;

/*
|-----------------------------------------------------------
| Theme Custom Services
|-----------------------------------------------------------
|
| This file is for registering your third-parity services
| or custom logic within theme container, so they can
| be easily used for a theme template files later.
|
*/

use function Twiggy\App\theme;
use Tonik\Gin\Foundation\Theme;
use WP_Query;

/**
 * Service handler for retrieving posts of specific post type.
 *
 * @return void
 */
function bind_books_service()
{
    /**
     * Binds service for returning Args for Timber::get_posts.
     *     *
     * @return []
     */
    theme()->bind('portfolio_args', function () {
        return [
            'post_type' => 'portfolio',
        ];
    });
}
add_action('init', 'Twiggy\App\Setup\bind_books_service');
