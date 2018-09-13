<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fergus
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'fergus' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="top-bar">
		</div>
		<div class="superheader">
			<p>Business Hours:</p>
			<div class="social">
				<i class="fab fa-facebook-f"></i> <i class="fab fa-linkedin-in"></i> <i class="fab fa-twitter"></i>
			</div>
		</div>
		<div class="masthead">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/f-logo.png" alt="fergus Theme"></a>
			</div>
			<div class="header-aside">
			</div>
		</div>
		<div class="navbar">
		</div>

		<nav id="site-navigation" class="main-navigation">
			<div class="nav-mobile">
				<a id="nav-toggle" href="#!"><span></span></a>
			</div>
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'fergus' ); ?></button>-->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
