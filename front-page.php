<?php

    namespace Twiggy\FrontPage;

    /*
    *------------------------------------------------------------------
    * Front Page Controller
    *------------------------------------------------------------------
    *
    * Used as a controller to setup Timber Context for the Front Page
    * and add/remove any actions that are will/won't be needed
    *
    */


    use Timber\Menu;
    use function Twiggy\App\theme;

    $context = \Timber::get_context();
    $post = \Timber::query_post();
    $menu = new Menu( 'home' );
    $portfolio = \Timber::get_posts( theme()->get( 'portfolio_args' ) );
    $context[ 'post' ] = $post;
    $context[ 'menu' ] = $menu;
    $context[ 'portfolio' ] = $portfolio;
    $context[ 'header' ] = get_field( 'header_settings' );
    $context[ 'header_classes' ] = 'c-header--hero-image';

    \Timber::render( 'front-page.twig', $context );
