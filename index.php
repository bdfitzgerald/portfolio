<?php

    namespace Twiggy\Index;

    /*
    *------------------------------------------------------------------
    * Index Controller
    *------------------------------------------------------------------
    *
    * Used as a controller to setup Timber Context for the Index Page
    * and add/remove any actions that are will/won't be needed
    *
    */

    $context = Timber::get_context();
    $context[ 'posts' ] = Timber::get_posts();

    \Timber::render( 'index.twig', $context );
