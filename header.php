<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Evelyn
 * @since 1.0.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	</head>

	<body <?php body_class(); ?>>
		<main id="site-content" role="main">
		<header>
			<div class="logo">
				<img src="https://www.infobae.com/new-resizer/zrfvo5w-Lw_AmxuhDiJ7IIUH7KE=/750x0/filters:quality(100)/arc-anglerfish-arc2-prod-infobae.s3.amazonaws.com/public/3KJ4AFYLUZAG7DYO7IJULMZ3P4.jpg" alt="gato cuco" width="220" height="80">
			</div>
			<div class="navbar">
				<nav>
					<ul>
						<li><a href="<?php echo home_url(); ?>">Home</a></li>
						<li>Biography</li>
						<li>Artistic Work</li>
						<li>Conservation/Restauration</li>
						<li>Career</li>
						<li>Press</li>
						<li>Contact</li>
					</ul>


				</nav>
			</div>
			
		</header>
