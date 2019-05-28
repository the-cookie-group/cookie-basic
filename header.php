<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cookiebasic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'cookie-basic'); ?></a>

		<header id="masthead" class="site-header cookie-header">
			<!--
		<div class="site-branding">
			<?php
			/*the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$cookie_basic_description = get_bloginfo( 'description', 'display' );
			if ( $cookie_basic_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $cookie_basic_description; // WPCS: xss ok. */
			?></p>
			<?php
			?>
		</div>.site-branding -->

			<!--
			<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'cookie-basic'); ?></button>
			<?php
			/*wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );*/
			?>
		</nav>-->
			<!--Navbar-->
			<nav class="navbar navbar-expand-md navbar-light bg-light ck-top-menu">
				<a href="#" class="navbar-brand">Brand</a>
				<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarCollapse">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'ck-main-menu',
						'menu_class'	 => 'ck-main-menu-style'
					));
					?>
				</div>
			</nav>

		</header><!-- #masthead -->

		<div id="content" class="site-content">