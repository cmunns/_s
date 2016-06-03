<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<?php
$primary_menu = wp_nav_menu(array(
	'echo' => false,
	'theme_location' => 'primary',
	'menu_id' => 'primary-menu'
	));
$menu_items = substr_count($primary_menu,'class="menu-item ');
?>

<body <?php body_class(); ?>>
<div id="mobile-nav">
	<?php echo $primary_menu;?>
</div>
<?php
if( $menu_items > 0 ) {
	echo '<button class="menu-toggle mobile-nav-toggle button" aria-controls="primary-menu" aria-expanded="false"><span></span><span></span><span></span><span></span></button>';
}
?>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="wrap clear">
			<div class="site-branding">

				<?php
				// Display the Custom Logo
				the_custom_logo();

				// No Custom Logo, just display the site's name
				if (!has_custom_logo()):?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
				if( $menu_items > 0 ) {
					echo $primary_menu;
				}
				?>
			</nav><!-- #site-navigation -->
		</div>

	</header><!-- #masthead -->

	<?php $wrap_content_bool = get_theme_mod( 'wrap_main_content_bool', true ); ?>
	<div id="content" class="site-content <?php echo ( $wrap_content_bool ) ? 'wrap' : ''; ?>">