<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wprig
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php if ( ! wprig_is_amp() ) : ?>
		<script>document.documentElement.classList.remove("no-js");</script>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wprig' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<img src="https://via.placeholder.com/280x90" class="img-fluid custom-logo" alt="">
							<div id="socialmedia"> 
								<a class="icon-facebook" href="https://www.facebook.com/cinemasnic" target="_blank"></a> 
								<a class="icon-instagram" href="https://instagram.com/cinemasnic" target="_blank"></a> 
								<a class="icon-twitter" href="https://twitter.com/CinemasNic" target="_blank"></a> 
								<a class="icon-youtube" href="https://www.youtube.com/channel/UC9dKc8rFAu9w0SYS-0jO3Yg" target="_blank"></a> 
								<a class="top-phone" href="tel:00000000">Phone: (000) 000-0000</a> 
							</div>
						</div>
					</div>
				</div>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Main menu', 'wprig' ); ?>"
				<?php if ( wprig_is_amp() ) : ?>
					[class]=" siteNavigationMenu.expanded ? 'main-navigation toggled-on' : 'main-navigation' "
				<?php endif; ?>
			>
				<?php if ( wprig_is_amp() ) : ?>
					<amp-state id="siteNavigationMenu">
						<script type="application/json">
							{
								"expanded": false
							}
						</script>
					</amp-state>
				<?php endif; ?>

				<button class="menu-toggle d-block d-sm-none" aria-label="<?php esc_attr_e( 'Open menu', 'wprig' ); ?>" aria-controls="primary-menu" aria-expanded="false"
					<?php if ( wprig_is_amp() ) : ?>
						on="tap:AMP.setState( { siteNavigationMenu: { expanded: ! siteNavigationMenu.expanded } } )"
						[aria-expanded]="siteNavigationMenu.expanded ? 'true' : 'false'"
					<?php endif; ?>
				>
					<?php esc_html_e( 'Menu', 'wprig' ); ?>
				</button>

				<div class="primary-menu-container text-right">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<?php

								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
										'container'      => 'ul',
									)
								);

								?>
							</div>
						</div>
					</div>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
