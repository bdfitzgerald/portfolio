<?php

namespace Twiggy\App\Setup;

/*
|-----------------------------------------------------------
| Timber Setup
|-----------------------------------------------------------
|
| This file purpose is to include your Timber
| setup options to enable Timber and Twig
| development.
|
*/


use Timber\Timber;

function Timber_exists()
{

    if (!class_exists('Timber')) {
        add_action('admin_notices', function () {
            echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
        });

        return;
    }
}

add_filter('admin_init', 'Twiggy\App\Setup\Timber_exists');

Timber::$dirname = 'resources/templates';

$timber = new Timber();
