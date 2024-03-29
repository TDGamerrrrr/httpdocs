<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package siteorigin-north
 * @license GPL 2.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TBGSS8F');</script>
<!-- End Google Tag Manager -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="google-site-verification" content="3u5Voep-mTIvWKv9C89BSXD6_djmm8gOFQIXaGbh0zQ" />



<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TBGSS8F"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->	

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'siteorigin-north' ); ?></a>

	<?php if ( siteorigin_setting( 'masthead_text_above' ) && ! is_active_sidebar( 'topbar-sidebar' ) ) : ?>
		<div id="topbar">
			<div class="container">
				<p><?php echo wp_kses_post( siteorigin_setting( 'masthead_text_above' ) ) ?></p>
			</div>
		</div><!-- #topbar -->
	<?php elseif ( is_active_sidebar( 'topbar-sidebar' ) ) : ?>
		<div id="topbar">
			<div id="topbar-widgets" class="container">
				<?php $siteorigin_north_masthead_sidebar = wp_get_sidebars_widgets(); ?>
				<div class="widgets widgets-<?php echo count( $siteorigin_north_masthead_sidebar['topbar-sidebar'] ) ?>" role="complementary" aria-label="<?php esc_html_e( 'Top Bar Sidebar', 'siteorigin-north' ); ?>">
					<?php dynamic_sidebar( 'topbar-sidebar' ); ?>
				</div>
			</div><!-- #topbar-widgets -->
		</div><!-- #topbar -->
	<?php endif; ?>

	<?php if ( ! siteorigin_page_setting( 'hide_masthead', false ) ) : ?>
		<header id="masthead" class="site-header layout-<?php echo sanitize_html_class( str_replace('_', '-', siteorigin_setting( 'masthead_layout' ) ) ) ?> <?php if( siteorigin_setting( 'navigation_sticky' ) ) echo 'sticky-menu'; ?>" role="banner"
			<?php if ( siteorigin_setting( 'navigation_sticky_scale' ) ) echo 'data-scale-logo="true"' ?> >
			<div class="container">

				<div class="container-inner">

					<div class="site-branding">
						<?php siteorigin_north_display_logo(); ?>
						<?php if ( siteorigin_setting( 'branding_site_description' ) ) : ?>
							<p class="site-description"><?php bloginfo( 'description' ); ?></p>
						<?php endif ?>
					</div><!-- .site-branding -->

					<nav id="site-navigation" class="main-navigation" role="navigation">

					<?php if ( siteorigin_page_setting( 'layout' ) !== 'stripped' ) : ?>

							<a href="#menu" id="mobile-menu-button">
								<?php siteorigin_north_display_icon( 'menu' ) ?>
								<?php if ( siteorigin_setting( 'responsive_menu_text' ) ) : ?>
									<?php echo esc_html( siteorigin_setting( 'responsive_menu_text' ) ); ?>
									<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'siteorigin-north' ); ?></span>
								<?php endif; ?>
							</a>

							<?php
							wp_nav_menu( array(
								'theme_location' => 'primary',
								'menu_id' => 'primary-menu'
							) );
							?>

							<?php if ( class_exists( 'Woocommerce' ) ) : ?>
								<?php if ( ( ! ( is_cart() || is_checkout() ) && siteorigin_setting( 'woocommerce_display_cart' ) ) || ( ( is_cart() || is_checkout() ) && siteorigin_setting( 'woocommerce_display_checkout_cart' ) ) ) : ?>
									<?php global $woocommerce; ?>
									<ul class="shopping-cart">
										<li>
											<a class="shopping-cart-link" href="<?php echo $woocommerce->cart->get_cart_url();?>">
												<span class="screen-reader-text"><?php esc_html_e( 'View shopping cart', 'siteorigin-north' ); ?></span>
												<span class="north-icon-cart"></span>
												<span class="shopping-cart-text"><?php esc_html_e( ' View Cart ', 'siteorigin-north' ); ?></span>
												<span class="shopping-cart-count"><?php echo WC()->cart->cart_contents_count;?></span>
											</a>
											<ul class="shopping-cart-dropdown" id="cart-drop">
												<?php the_widget( 'WC_Widget_Cart' ); ?>
											</ul>
										</li>
									</ul>
								<?php endif; ?>
							<?php endif; ?>

							<?php if ( siteorigin_setting( 'navigation_search' ) ) : ?>
								<a class="north-search-icon">
									<label class="screen-reader-text"><?php esc_html_e( 'Open search bar', 'siteorigin-north' ); ?></label>
									<?php siteorigin_north_display_icon( 'search' ); ?>
								</a>
							<?php endif; ?>

						<?php endif; ?>

						<?php if ( siteorigin_page_setting( 'layout' ) == 'stripped' ) : ?>
							<ul>
								<li>
									<a href="" class="stripped-backlink" onclick="window.history.go( -1 ); return false;">
										<?php esc_html_e( 'Go back', 'siteorigin-north' ); ?>
									</a>
								</li>
							</ul>
						<?php endif; ?>

					</nav><!-- #site-navigation -->

				</div><!-- .container-inner -->

			</div><!-- .container -->

			<?php if ( siteorigin_setting( 'navigation_search' ) ) : ?>
				<div id="header-search">
					<div class="container">
						<label for='s' class='screen-reader-text'><?php esc_html_e( 'Search for:', 'siteorigin-north' ); ?></label>
						<?php get_search_form(); ?>
						<a id="close-search">
							<span class="screen-reader-text"><?php esc_html_e( 'Close search bar', 'siteorigin-north' ); ?></span>
							<?php siteorigin_north_display_icon( 'close' ); ?>
						</a>
					</div>
				</div>
			<?php endif; ?>
		</header><!-- #masthead -->
	<?php endif; ?>

	<?php do_action( 'siteorigin_north_content_before' ); ?>

	<div id="content" class="site-content">

		<div class="container">

			<?php do_action( 'siteorigin_north_content_top' ); ?>
