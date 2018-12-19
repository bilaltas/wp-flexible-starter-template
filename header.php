<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=6.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<div class="wrap xl-flexbox xl-between container">
				<div class="col">
					<a href="<?=home_url()?>" title="<?php bloginfo('name'); ?> Home">LOGO</a>
				</div>
				<div class="col">
					<nav><?php sitename_menu() ?></nav>
				</div>
			</div>
		</header>
