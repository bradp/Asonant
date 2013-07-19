<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package asonant
 */
?><!DOCTYPE html>
<?php tha_html_before(); ?>
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<?php tha_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php tha_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php tha_body_top(); ?>
<div id="page top" class="hfeed site">
	<?php tha_header_before(); ?>
	<?php do_action( 'before' ); ?>
	<div class="color-wrapper" id="header-wrapper">
		<header id="masthead" class="site-header" role="banner">
			<?php tha_header_top(); ?>
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php get_search_form(); ?>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>

			</div>
			<div id="main-nav-wrapper">
				<nav id="site-navigation" class="site-navigation main-navigation" role="navigation">
					<h1 class="screen-reader-text"><?php _e( 'Menu', 'asonant' ); ?></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'asonant' ); ?>"><?php _e( 'Skip to content', 'asonant' ); ?></a></div>

					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>

			<?php tha_header_bottom(); ?>
		</header><!-- #masthead -->
	</div>
	<?php tha_header_after(); ?>

	<div id="main" class="site-main">
	<?php tha_content_top(); ?>