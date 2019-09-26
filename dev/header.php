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
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
							<img src="https://via.placeholder.com/280x90" class="img-fluid custom-logo" alt="">
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 pt-40">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="icon-facebook" href="" title="Facebook" target="_blank">
										<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width:35px"><title>Facebook</title><path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path></svg>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="icon-google" href="" title="Google My Business" target="_blank">
										<svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="width:35px"><title>Google My Business</title><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path></svg>
									</a>
								</li>
								<li class="list-inline-item">
									<a class="top-phone mt-5" href="tel:00000000">Phone: (000) 000-0000</a>
								</li>
							</ul>
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
