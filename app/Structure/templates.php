<?php

    namespace Twiggy\App\Structure;

    /*
    |-----------------------------------------------------------
    | Theme Templates Actions
    |-----------------------------------------------------------
    |
    | This file purpose is to include your templates rendering
    | actions hooks, which allows you to render specific
    | partials at specific places of your theme.
    |
    */

    use Timber\Menu;
    use function Twiggy\App\template;

    /**
     * Renders navigation menu based on position.
     *
     * @Param string $position Position of menu
     * @see resources/templates/navigation.tpl.php
     * @return void
     */
    function render_menu( $position ) {
        $menu = new Menu( $position );

        \Timber::render( 'partials/menu.twig', (array) $menu );
    }

    add_action( 'theme/navigation/header', 'Twiggy\App\Structure\render_menu' );

