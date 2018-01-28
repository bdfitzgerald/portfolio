<?php

    namespace Twiggy\Single;

    /*
    *------------------------------------------------------------------
    * Single Page Controller
    *------------------------------------------------------------------
    *
    * Used as a controller to setup Timber Context for the Single Post
    * and add/remove any actions that are will/won't be needed
    *
    */


    $context = \Timber::get_context();
    $post = \Timber::query_post();

    $context[ 'post' ] = $post;

    \Timber::render('single.twig', $context);
