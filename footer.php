<?php

    namespace Twiggy\Footer;

    /*
    |------------------------------------------------------------------
    | Footer Controller
    |------------------------------------------------------------------
    |
    | Controller for outputting layout's closing markup. Template
    | rendered here should include `wp_footer()` function call.
    |
    */

    $timberContext = $GLOBALS[ 'timberContext' ];
    if ( !isset( $timberContext ) ) {
        throw new \Exception( 'Timber context not set in footer.' );
    }
    $timberContext[ 'content' ] = ob_get_contents();
    ob_end_clean();
    $templates = array( 'page-plugin.twig' );
    Timber::render( $templates, $timberContext );
