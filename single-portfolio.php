<?php

    namespace Twiggy\SinglePortfolio;

    /*
    *------------------------------------------------------------------
    * Single Page Controller
    *------------------------------------------------------------------
    *
    * Used as a controller to setup Timber Context for the Single Post
    * and add/remove any actions that are will/won't be needed
    *
    */


    use Timber\Menu;

    $context = \Timber::get_context();
    $post = \Timber::query_post();
    $menu = new Menu( 'portfolio' );

    $options = get_field( 'options' );
    $tech = get_field( 'technologies_used' );

    $context[ 'post' ] = $post;
    $context[ 'menu' ] = $menu;
    $context[ 'options' ] = $options;
    $context[ 'tech' ] = $tech;
    $context[ 'header_styles' ] = 'background-color: ' . $options[ 'colour' ] . ';';

    \Timber::render( 'portfolio.twig', $context );
