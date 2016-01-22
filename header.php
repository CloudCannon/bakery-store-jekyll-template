<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BakeryStore
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700" media="all">
</head>

<body <?php body_class(); ?>>
  <header>
    <div class="container">
      <nav class="main-nav">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
      </nav>
      <h1><a href="/">Bakery<strong>Store</strong></a></h1>
    </div>
  </header>
  <div class="content">
		<?php if(is_front_page() ) { ?>
		<section class="hero">
      <div class="small-container">
        <h2>Fresh, homemade baked goods</h2>
          <p class="sub-text">Bakery<strong>Store</strong> serves the freshest baked goods in San Francisco.</p>
      </div>
    </section>
		<?php } ?>
		<div class="container">
