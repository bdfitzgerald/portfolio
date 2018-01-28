<?php

    namespace Twiggy\Header;

    /*
    |------------------------------------------------------------------
    | Header Controller
    |------------------------------------------------------------------
    |
    | Controller for outputting layout's opening markup. Template
    | rendered here should include `wp_head()` function call.
    |
    */

    $GLOBALS[ 'timberContext' ] = Timber::get_context();
    ob_start();
