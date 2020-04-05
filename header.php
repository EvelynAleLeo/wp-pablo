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
		<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<main id="site-content" role="main">
			<header>
				<div class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logopablocortes.png" alt="logo pablo cortes" width="260" height="95">
				</div>
				<div class="navbar">
					<nav>
						<ul>
							<li><a href="<?php echo home_url(); ?>">HOME</a></li>
							<li><a href="<?php echo home_url().'/biography'; ?>">BIO</a></li>
							<li><a href="<?php echo home_url().'/artistic-work'; ?>">ARTISTIC WORK</a><li>
							<li>CONSERVATION/RESTORATION</li>
							<li>CAREER</li>
							<li>PRESS</li>
							<li>CONTACT</li>
						</ul>


					</nav>
				</div>
				
			</header>
			<div class="main-content">


