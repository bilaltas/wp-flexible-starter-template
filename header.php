<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=6.0">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<div id="page">

			<header>
				<div class="wrap xl-flexbox xl-middle xl-2 container">
					<div class="col">
						<a href="<?=home_url()?>" title="<?php bloginfo('name'); ?> Home">LOGO</a>
					</div>
					<div class="col xl-right md-hidden">
						<nav><?php sitename_menu() ?></nav>
					</div>
					<div class="col xl-right xl-hidden md-not-hidden">
						<a href="#" data-popup="mobile-menu">Open Mobile Menu</a>
					</div>
				</div>
			</header>
