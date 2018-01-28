<?php

namespace Twiggy\NotFound;

/*
|------------------------------------------------------------------
| 404 Controller
|------------------------------------------------------------------
|
| The template controller for displaying 404 error pages.
| It is displayed when website content was not found.
|
*/

use Timber\Menu;
use function Twiggy\App\theme;

$menu = new Menu( 'portfolio' );
$portfolio = \Timber::get_posts( theme()->get( 'portfolio_args' ) );
$context[ 'portfolio' ] = $portfolio;
$context[ 'menu' ] = $menu;

\Timber::render( '404.twig', $context );
